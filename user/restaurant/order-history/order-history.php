<?php
session_start();
include_once '../../authentication.php';
include_once '../../../config/dbcon.php';

$user_id = $_SESSION['user_session']['user_id'];
// fetch user id for user table from user_id 
$user_sql = "SELECT id FROM order_master WHERE user_id = ?";
$user_stmt = $con->prepare($user_sql);
if (!$user_stmt) {
    die("Prepare failed for user query: " . $con->error);
}
$user_stmt->bind_param("s", $user_id);
$user_stmt->execute();
$user_stmt->bind_result($fetched_id);

$order_ids = [];
while ($user_stmt->fetch()) {
    $order_ids[] = $fetched_id;
}
$user_stmt->close();


// If you want to use these IDs in an IN clause later:
$order_ids_str = implode(',', array_map('intval', $order_ids));
$user_stmt = $con->prepare($user_sql);


// Handle search/filter/pagination
$search = $_GET['search'] ?? '';
$status_filter = $_GET['status'] ?? '';
$page = max(1, intval($_GET['page'] ?? 1));
$per_page = 8;
$offset = ($page - 1) * $per_page;

$where = "order_id = ?";
$params = [$order_ids];
$types = "i";

if ($search) {
    $where .= " AND (order_id LIKE ? OR order_date LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
    $types .= "ss";
}
if ($status_filter) {
    $where .= " AND status = ?";
    $params[] = $status_filter;
    $types .= "s";
}

// Get total count for pagination
$count_sql = "SELECT COUNT(*) FROM order_details WHERE $where";
$count_stmt = $con->prepare($count_sql);
if (!$count_stmt) {
    die("Prepare failed for count query: " . $con->error);
}
$count_stmt->bind_param($types, ...$params);
$count_stmt->execute();
$count_stmt->bind_result($total_orders);
$count_stmt->fetch();
$count_stmt->close();

$list_sql = "SELECT * FROM order_details WHERE $where ORDER BY order_date DESC LIMIT ? OFFSET ?";
$stmt = $con->prepare($list_sql);
if (!$stmt) {
    die("Prepare failed for list query: " . $con->error);
}
$params_with_limit = $params;
$params_with_limit[] = $per_page;
$params_with_limit[] = $offset;
$types_with_limit = $types . "ii";
$stmt->bind_param($types_with_limit, ...$params_with_limit);
$stmt->execute();
$result = $stmt->get_result();

function status_badge($status) {
    $status = strtolower($status);
    if ($status === 'pending') return 'status-pending';
    if ($status === 'cancelled') return 'status-cancelled';
    if ($status === 'delivered') return 'status-delivered';
    return 'status-completed';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order History | Gourmet Palace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            color: #22223b;
        }
        .order-history-container {
            max-width: 1000px;
            margin: 40px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(60, 60, 90, 0.12);
            padding: 40px 48px 32px 48px;
        }
        .restaurant-title {
            font-size: 2.6rem;
            font-weight: 700;
            color: #5f4b8b;
            letter-spacing: 2px;
            margin-bottom: 8px;
            text-align: center;
        }
        .subtitle {
            font-size: 1.2rem;
            color: #7c7c7c;
            text-align: center;
            margin-bottom: 32px;
        }
        .actions-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }
        .search-box input, .filter-select {
            padding: 8px 14px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
        }
        .filter-select {
            background: #f3f0ff;
            color: #5f4b8b;
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 12px;
        }
        th, td {
            padding: 16px 18px;
            text-align: left;
        }
        th {
            background: #f3f0ff;
            color: #5f4b8b;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 8px 8px 0 0;
        }
        tr {
            background: #f8f7fa;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(95, 75, 139, 0.04);
            transition: box-shadow 0.2s;
        }
        tr:hover {
            box-shadow: 0 4px 16px rgba(95, 75, 139, 0.10);
        }
        td {
            font-size: 1rem;
            color: #22223b;
            border-radius: 0 0 8px 8px;
        }
        .status-badge {
            padding: 6px 18px;
            border-radius: 20px;
            font-size: 0.95rem;
            font-weight: 600;
            display: inline-block;
        }
        .status-completed { background: #d1fae5; color: #065f46; }
        .status-pending { background: #fef9c3; color: #92400e; }
        .status-cancelled { background: #fee2e2; color: #991b1b; }
        .status-delivered { background: #e0e7ff; color: #3730a3; }
        .order-actions button, .order-actions a {
            background: #5f4b8b;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 7px 14px;
            margin-right: 6px;
            font-size: 0.98rem;
            cursor: pointer;
            transition: background 0.2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }
        .order-actions button:hover, .order-actions a:hover {
            background: #3c2466;
        }
        .pagination {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 28px;
        }
        .pagination a, .pagination span {
            padding: 7px 14px;
            border-radius: 6px;
            background: #f3f0ff;
            color: #5f4b8b;
            text-decoration: none;
            font-weight: 600;
        }
        .pagination .active {
            background: #5f4b8b;
            color: #fff;
        }
        .no-orders {
            text-align: center;
            color: #7c7c7c;
            font-size: 1.2rem;
            margin-top: 40px;
        }
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0; top: 0; width: 100vw; height: 100vh;
            background: rgba(60,60,90,0.18);
            align-items: center;
            justify-content: center;
        }
        .modal-content {
            background: #fff;
            border-radius: 16px;
            padding: 32px 28px;
            max-width: 420px;
            width: 95vw;
            box-shadow: 0 8px 32px rgba(60, 60, 90, 0.18);
            position: relative;
        }
        .modal-close {
            position: absolute;
            right: 18px;
            top: 12px;
            font-size: 1.5rem;
            color: #5f4b8b;
            cursor: pointer;
            background: none;
            border: none;
        }
        .modal-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 12px;
            color: #5f4b8b;
        }
        .modal-body {
            font-size: 1rem;
            color: #22223b;
        }
        .star-rating {
            display: flex;
            gap: 4px;
            margin-top: 8px;
        }
        .star-rating i {
            font-size: 1.3rem;
            color: #e5e7eb;
            cursor: pointer;
        }
        .star-rating i.selected, .star-rating i:hover, .star-rating i.selected ~ i {
            color: #fbbf24;
        }
        @media (max-width: 700px) {
            .order-history-container { padding: 20px 4px; }
            th, td { padding: 10px 6px; }
            .modal-content { padding: 18px 6px; }
        }
    </style>
</head>
<body>
    <div class="order-history-container" aria-label="Order History">
        <div class="restaurant-title">Akshay's restaurant</div>
        <div class="subtitle">Your Order History</div>
        <form class="actions-bar" method="get" autocomplete="off" role="search" aria-label="Search and filter orders">
            <div class="search-box">
                <input type="text" name="search" placeholder="Search by Order ID or Date" value="<?php echo htmlspecialchars($search); ?>" aria-label="Search orders">
            </div>
            <select name="status" class="filter-select" aria-label="Filter by status">
                <option value="">All Status</option>
                <option value="pending" <?php if($status_filter=='pending') echo 'selected'; ?>>Pending</option>
                <option value="delivered" <?php if($status_filter=='') echo 'selected'; ?>>Delivered</option>
                <option value="completed" <?php if($status_filter=='completed') echo 'selected'; ?>>Completed</option>
                <option value="cancelled" <?php if($status_filter=='cancelled') echo 'selected'; ?>>Cancelled</option>
            </select>
            <button type="submit" style="background:#5f4b8b;color:#fff;border:none;border-radius:8px;padding:8px 18px;font-size:1rem;cursor:pointer;">
                <i class="ri-search-line"></i> Search
            </button>
        </form>
        <?php if ($result->num_rows > 0): ?>
            <table aria-label="Order history table">
                <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($order = $result->fetch_assoc()): ?>
                        <tr>
                            <td>
                                <a href="#" class="view-details" data-order-id="<?php echo $order['order_id']; ?>" aria-label="View order details">
                                    <?php echo htmlspecialchars($order['order_id']); ?>
                                </a>
                            </td>
                            <td><?php echo date('d M Y, h:i A', strtotime($order['order_date'])); ?></td>
                            <td>₹<?php echo number_format($order['subtotal'], 2); ?></td>
                            <td>
                                <span class="status-badge <?php echo status_badge($order['status']); ?>">
                                    <?php echo ucfirst($order['status']); ?>
                                </span>
                            </td>
                            <td class="order-actions">
                                <button class="view-details" data-order-id="<?php echo $order['order_id']; ?>" aria-label="View details"><i class="ri-eye-line"></i></button>
                                <a href="reorder.php?order_id=<?php echo $order['order_id']; ?>" aria-label="Reorder"><i class="ri-repeat-line"></i></a>
                                <a href="download-invoice.php?order_id=<?php echo $order['order_id']; ?>" aria-label="Download invoice"><i class="ri-download-2-line"></i></a>
                                <button class="rate-order" data-order-id="<?php echo $order['order_id']; ?>" aria-label="Rate order"><i class="ri-star-line"></i></button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <!-- Pagination -->
            <?php
                $total_pages = ceil($total_orders / $per_page);
                if ($total_pages > 1):
            ?>
            <div class="pagination" aria-label="Pagination">
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <?php
                        $query = $_GET;
                        $query['page'] = $i;
                        $url = '?' . http_build_query($query);
                    ?>
                    <?php if ($i == $page): ?>
                        <span class="active"><?php echo $i; ?></span>
                    <?php else: ?>
                        <a href="<?php echo $url; ?>"><?php echo $i; ?></a>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
            <?php endif; ?>
        <?php else: ?>
            <div class="no-orders">
                <img src="https://cdn-icons-png.flaticon.com/512/4076/4076549.png" alt="No Orders" width="90" style="opacity:0.5; margin-bottom: 18px;">
                <br>
                You have not placed any orders yet.<br>
                <a href="../../menu.php" style="color:#5f4b8b; text-decoration:underline;">Order Now</a>
            </div>
        <?php endif; ?>
    </div>

    <!-- Order Details Modal -->
    <div class="modal" id="orderDetailsModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
        <div class="modal-content">
            <button class="modal-close" aria-label="Close">&times;</button>
            <div class="modal-title" id="modalTitle">Order Details</div>
            <div class="modal-body" id="modalBody">
                <!-- Order details will be loaded here via AJAX -->
                <div style="text-align:center;"><i class="ri-loader-4-line ri-spin" style="font-size:2rem;"></i></div>
            </div>
        </div>
    </div>
    <!-- Rate Order Modal -->
    <div class="modal" id="rateOrderModal" role="dialog" aria-modal="true" aria-labelledby="rateModalTitle">
        <div class="modal-content">
            <button class="modal-close" aria-label="Close">&times;</button>
            <div class="modal-title" id="rateModalTitle">Rate Your Order</div>
            <div class="modal-body">
                <form id="rateOrderForm">
                    <input type="hidden" name="order_id" id="rateOrderId">
                    <div class="star-rating" aria-label="Star rating">
                        <i class="ri-star-fill" data-value="1"></i>
                        <i class="ri-star-fill" data-value="2"></i>
                        <i class="ri-star-fill" data-value="3"></i>
                        <i class="ri-star-fill" data-value="4"></i>
                        <i class="ri-star-fill" data-value="5"></i>
                    </div>
                    <textarea name="review" rows="3" placeholder="Write your review..." style="width:100%;margin-top:10px;border-radius:8px;padding:8px;border:1px solid #d1d5db;"></textarea>
                    <button type="submit" style="margin-top:12px;background:#5f4b8b;color:#fff;border:none;border-radius:8px;padding:8px 18px;font-size:1rem;cursor:pointer;">Submit</button>
                </form>
                <div id="rateOrderMsg" style="margin-top:10px;color:#5f4b8b;"></div>
            </div>
        </div>
    </div>
    <script>
    // Modal logic
    function openModal(id) {
        document.getElementById(id).style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
    function closeModal(id) {
        document.getElementById(id).style.display = 'none';
        document.body.style.overflow = '';
    }
    document.querySelectorAll('.modal-close').forEach(btn => {
        btn.onclick = function() {
            closeModal(this.closest('.modal').id);
        }
    });
    window.onclick = function(event) {
        document.querySelectorAll('.modal').forEach(modal => {
            if (event.target === modal) closeModal(modal.id);
        });
    };

    // View order details (AJAX)
    document.querySelectorAll('.view-details').forEach(btn => {
        btn.onclick = function(e) {
            e.preventDefault();
            var orderId = this.getAttribute('data-order-id');
            openModal('orderDetailsModal');
            document.getElementById('modalBody').innerHTML = '<div style="text-align:center;"><i class="ri-loader-4-line ri-spin" style="font-size:2rem;"></i></div>';
            fetch('order-details-ajax.php?order_id=' + encodeURIComponent(orderId))
                .then(res => res.text())
                .then(html => document.getElementById('modalBody').innerHTML = html)
                .catch(() => document.getElementById('modalBody').innerHTML = 'Failed to load order details.');
        }
    });

    // Rate order modal
    document.querySelectorAll('.rate-order').forEach(btn => {
        btn.onclick = function(e) {
            e.preventDefault();
            var orderId = this.getAttribute('data-order-id');
            document.getElementById('rateOrderId').value = orderId;
            document.querySelectorAll('.star-rating i').forEach(star => star.classList.remove('selected'));
            document.getElementById('rateOrderMsg').innerText = '';
            openModal('rateOrderModal');
        }
    });
    // Star rating logic
    document.querySelectorAll('.star-rating i').forEach(star => {
        star.onclick = function() {
            var val = this.getAttribute('data-value');
            document.querySelectorAll('.star-rating i').forEach(s => s.classList.remove('selected'));
            for (let i = 0; i < val; i++) {
                document.querySelectorAll('.star-rating i')[i].classList.add('selected');
            }
            document.getElementById('rateOrderForm').setAttribute('data-rating', val);
        }
    });
    // Submit rating (AJAX)
    document.getElementById('rateOrderForm').onsubmit = function(e) {
        e.preventDefault();
        var order_id = document.getElementById('rateOrderId').value;
        var rating = this.getAttribute('data-rating') || 0;
        var review = this.review.value;
        if (rating < 1) {
            document.getElementById('rateOrderMsg').innerText = 'Please select a rating.';
            return;
        }
        fetch('rate-order.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: 'order_id=' + encodeURIComponent(order_id) + '&rating=' + encodeURIComponent(rating) + '&review=' + encodeURIComponent(review)
        })
        .then(res => res.text())
        .then(msg => {
            document.getElementById('rateOrderMsg').innerText = msg;
            setTimeout(() => closeModal('rateOrderModal'), 1200);
        })
        .catch(() => document.getElementById('rateOrderMsg').innerText = 'Failed to submit rating.');
    };
    </script>
</body>
</html>