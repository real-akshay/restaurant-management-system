
<?php
session_start();
include_once '../../authentication.php';
include_once '../../../config/dbcon.php';

if (!isset($_SESSION['user_session'])) {
    header('Location: ../../login.php');
    exit();
}

$user_id = $_SESSION['user_session']['user_id'];

// Handle search/filter/pagination
$search = $_GET['search'] ?? '';
$status_filter = $_GET['status'] ?? '';
$page = max(1, intval($_GET['page'] ?? 1));
$per_page = 8;
$offset = ($page - 1) * $per_page;

// Build WHERE clause
$where = "user_id = ?";
$params = [$user_id];
$types = "i";

if ($search) {
    $where .= " AND (id LIKE ? OR order_date LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
    $types .= "ss";
}
if ($status_filter) {
    $where .= " AND order_status = ?";
    $params[] = $status_filter;
    $types .= "s";
}

// Get total count for pagination
$count_sql = "SELECT COUNT(*) FROM order_master WHERE $where";
$count_stmt = $con->prepare($count_sql);
$count_stmt->bind_param($types, ...$params);
$count_stmt->execute();
$count_stmt->bind_result($total_orders);
$count_stmt->fetch();
$count_stmt->close();

// Get paginated orders
$list_sql = "SELECT * FROM order_master WHERE $where ORDER BY order_date DESC LIMIT ? OFFSET ?";
$params_with_limit = $params;
$params_with_limit[] = $per_page;
$params_with_limit[] = $offset;
$types_with_limit = $types . "ii";
$stmt = $con->prepare($list_sql);
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
    <title>Order History | Akshay's Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="order_history.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
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


<?php
// ...existing code...
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order History | Akshay's Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Premium font and icons -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
    <style>
        body {
            background: linear-gradient(120deg, #f8fafc 0%, #e2e8f0 100%);
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            color: #23213a;
            min-height: 100vh;
        }
        .order-history-container {
            max-width: 1050px;
            margin: 48px auto 32px auto;
            background: rgba(255,255,255,0.98);
            border-radius: 22px;
            box-shadow: 0 10px 40px rgba(60, 60, 90, 0.13);
            padding: 48px 52px 36px 52px;
            position: relative;
            overflow: hidden;
        }
        .order-history-container:before {
            content: "";
            position: absolute;
            top: -60px; right: -60px;
            width: 180px; height: 180px;
            background: radial-gradient(circle, #e0c3fc 0%, #8ec5fc 100%);
            opacity: 0.18;
            border-radius: 50%;
            z-index: 0;
        }
        .restaurant-title {
            font-size: 2.7rem;
            font-weight: 800;
            color: #5f4b8b;
            letter-spacing: 2.5px;
            margin-bottom: 6px;
            text-align: center;
            z-index: 1;
            position: relative;
        }
        .subtitle {
            font-size: 1.18rem;
            color: #7c7c7c;
            text-align: center;
            margin-bottom: 30px;
            z-index: 1;
            position: relative;
        }
        .actions-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            z-index: 1;
            position: relative;
        }
        .search-box input, .filter-select {
            padding: 10px 16px;
            border: 1.5px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1.05rem;
            outline: none;
            background: #f7f7fa;
            transition: border 0.2s;
        }
        .search-box input:focus, .filter-select:focus {
            border-color: #b39ddb;
        }
        .filter-select {
            background: #f3f0ff;
            color: #5f4b8b;
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 14px;
            z-index: 1;
            position: relative;
        }
        th, td {
            padding: 18px 20px;
            text-align: left;
        }
        th {
            background: #f3f0ff;
            color: #5f4b8b;
            font-size: 1.13rem;
            font-weight: 800;
            border-radius: 10px 10px 0 0;
            letter-spacing: 0.5px;
        }
        tr {
            background: #f8f7fa;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(95, 75, 139, 0.05);
            transition: box-shadow 0.2s, transform 0.2s;
        }
        tr:hover {
            box-shadow: 0 6px 18px rgba(95, 75, 139, 0.13);
            transform: translateY(-2px) scale(1.01);
        }
        td {
            font-size: 1.04rem;
            color: #23213a;
            border-radius: 0 0 10px 10px;
        }
        .status-badge {
            padding: 7px 22px;
            border-radius: 22px;
            font-size: 1.01rem;
            font-weight: 700;
            display: inline-block;
            letter-spacing: 0.5px;
            box-shadow: 0 1px 4px rgba(95,75,139,0.06);
        }
        .status-completed { background: #d1fae5; color: #065f46; }
        .status-pending { background: #fef9c3; color: #92400e; }
        .status-cancelled { background: #fee2e2; color: #991b1b; }
        .status-delivered { background: #e0e7ff; color: #3730a3; }
        .order-actions button, .order-actions a {
            background: linear-gradient(90deg, #5f4b8b 60%, #8ec5fc 100%);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 8px 16px;
            margin-right: 7px;
            font-size: 1.05rem;
            cursor: pointer;
            transition: background 0.2s, box-shadow 0.2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            box-shadow: 0 1px 4px rgba(95,75,139,0.08);
        }
        .order-actions button:hover, .order-actions a:hover {
            background: linear-gradient(90deg, #3c2466 60%, #b39ddb 100%);
            box-shadow: 0 2px 8px rgba(95,75,139,0.13);
        }
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 32px;
            z-index: 1;
            position: relative;
        }
        .pagination a, .pagination span {
            padding: 8px 18px;
            border-radius: 8px;
            background: #f3f0ff;
            color: #5f4b8b;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.07rem;
            transition: background 0.2s, color 0.2s;
        }
        .pagination .active {
            background: linear-gradient(90deg, #5f4b8b 60%, #8ec5fc 100%);
            color: #fff;
        }
        .no-orders, .empty-message {
            text-align: center;
            color: #7c7c7c;
            font-size: 1.23rem;
            margin-top: 48px;
            z-index: 1;
            position: relative;
        }
        .no-orders img, .empty-message img {
            opacity: 0.5;
            margin-bottom: 18px;
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
            border-radius: 18px;
            padding: 36px 30px;
            max-width: 440px;
            width: 96vw;
            box-shadow: 0 8px 32px rgba(60, 60, 90, 0.18);
            position: relative;
        }
        .modal-close {
            position: absolute;
            right: 18px;
            top: 12px;
            font-size: 1.7rem;
            color: #5f4b8b;
            cursor: pointer;
            background: none;
            border: none;
        }
        .modal-title {
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 14px;
            color: #5f4b8b;
        }
        .modal-body {
            font-size: 1.05rem;
            color: #23213a;
        }
        @media (max-width: 900px) {
            .order-history-container { padding: 24px 4px; }
            th, td { padding: 10px 6px; }
            .modal-content { padding: 18px 6px; }
        }
        @media (max-width: 600px) {
            .order-history-container { padding: 8px 2px; }
            .restaurant-title { font-size: 2rem; }
            .subtitle { font-size: 1rem; }
        }
    </style>
</head>
<body>
    <div class="order-history-container" aria-label="Order History">
        <div class="restaurant-title">Akshay's Restaurant</div>
        <div class="subtitle">Your Order History</div>
        <form class="actions-bar" method="get" autocomplete="off" role="search" aria-label="Search and filter orders">
            <div class="search-box">
                <input type="text" name="search" placeholder="Search by Order ID or Date" value="<?php echo htmlspecialchars($search); ?>" aria-label="Search orders">
            </div>
            <select name="status" class="filter-select" aria-label="Filter by status">
                <option value="">All Status</option>
                <option value="pending" <?php if($status_filter=='pending') echo 'selected'; ?>>Pending</option>
                <option value="delivered" <?php if($status_filter=='delivered') echo 'selected'; ?>>Delivered</option>
                <option value="completed" <?php if($status_filter=='completed') echo 'selected'; ?>>Completed</option>
                <option value="cancelled" <?php if($status_filter=='cancelled') echo 'selected'; ?>>Cancelled</option>
            </select>
            <button type="submit" style="background:linear-gradient(90deg,#5f4b8b 60%,#8ec5fc 100%);color:#fff;border:none;border-radius:10px;padding:10px 22px;font-size:1.07rem;cursor:pointer;font-weight:700;">
                <i class="ri-search-line"></i> Search
            </button>
            <a href="../index.php" style="background:linear-gradient(90deg,#8ec5fc 60%,#5f4b8b 100%);color:#fff;border:none;border-radius:10px;padding:10px 22px;font-size:1.07rem;cursor:pointer;font-weight:700;text-decoration:none;display:inline-flex;align-items:center;gap:5px;">
                <i class="ri-home-4-line"></i> Home
            </a>
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
                                <a href="#" class="view-details" data-order-id="<?php echo $order['id']; ?>" aria-label="View order details" style="color:#5f4b8b;font-weight:700;text-decoration:underline;">
                                    <?php echo htmlspecialchars($order['id']); ?>
                                </a>
                            </td>
                            <td><?php echo date('d M Y, h:i A', strtotime($order['order_date'])); ?></td>
                            <td>₹<?php echo number_format($order['total_amount'], 2); ?></td>
                            <td>
                                <span class="status-badge <?php echo status_badge($order['order_status']); ?>">
                                    <?php echo ucfirst($order['order_status']); ?>
                                </span>
                            </td>
                            <td class="order-actions">
                                <button class="view-details" data-order-id="<?php echo $order['id']; ?>" aria-label="View details"><i class="ri-eye-line"></i></button>
                                <a href="reorder.php?order_id=<?php echo $order['id']; ?>" aria-label="Reorder"><i class="ri-repeat-line"></i></a>
                                <a href="download-invoice.php?order_id=<?php echo $order['id']; ?>" aria-label="Download Invoice" target="_blank" rel="noopener"><i class="ri-download-2-line"></i></a>  </td>
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
            <div class="empty-message">
                <img src="https://cdn-icons-png.flaticon.com/512/4076/4076549.png" alt="No Orders" width="90">
                <br>
                You have not placed any orders yet.<br>
                <a href="../../menu.php" style="color:#5f4b8b; text-decoration:underline;">Order Now</a>
            </div>
        <?php endif; ?>
    </div>

    <!-- Order Details Modal -->
    <div class="modal" id="orderDetailsModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle" style="display:none;">
        <div class="modal-content">
            <button class="modal-close" aria-label="Close">&times;</button>
            <div class="modal-title" id="modalTitle">Order Details</div>
            <div class="modal-body" id="modalBody">
                <!-- Order details will be loaded here via AJAX -->
                <div style="text-align:center;"><i class="ri-loader-4-line ri-spin" style="font-size:2rem;"></i></div>
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
    </script>
</body>
</html>