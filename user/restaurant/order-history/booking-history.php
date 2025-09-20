<?php
// filepath: c:\xampp\htdocs\Akshay\restaurant-management-system\user\restaurant\order-history\booking-history.php

session_start();
include_once '../../authentication.php';
include_once '../../../config/dbcon.php';

// User authentication
if (!isset($_SESSION['user_session'])) {
    header('Location: ../../login.php');
    exit();
}

$user_id = $_SESSION['user_session']['user_id'];

// Handle search/filter/pagination
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$status_filter = isset($_GET['status']) ? trim($_GET['status']) : '';
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$per_page = 8;
$offset = ($page - 1) * $per_page;

// Build WHERE clause
$where = "user_id = ?";
$params = array($user_id);
$types = "i";

if ($search !== '') {
    $where .= " AND (id LIKE ? OR booking_date LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
    $types .= "ss";
}
if ($status_filter !== '') {
    $where .= " AND booking_status = ?";
    $params[] = $status_filter;
    $types .= "s";
}

// Get total count for pagination
$count_sql = "SELECT COUNT(*) FROM bookings WHERE $where";
$count_stmt = mysqli_prepare($con, $count_sql);
mysqli_stmt_bind_param($count_stmt, $types, ...$params);
mysqli_stmt_execute($count_stmt);
mysqli_stmt_bind_result($count_stmt, $total_bookings);
mysqli_stmt_fetch($count_stmt);
mysqli_stmt_close($count_stmt);

// Get paginated bookings
$list_sql = "SELECT * FROM bookings WHERE $where ORDER BY booking_date DESC LIMIT ? OFFSET ?";
$params_with_limit = $params;
$params_with_limit[] = $per_page;
$params_with_limit[] = $offset;
$types_with_limit = $types . "ii";
$stmt = mysqli_prepare($con, $list_sql);
mysqli_stmt_bind_param($stmt, $types_with_limit, ...$params_with_limit);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Status badge function
function booking_status_badge($status)
{
    $status = strtolower($status);
    if ($status === 'pending') return 'status-pending';
    if ($status === 'cancelled') return 'status-cancelled';
    if ($status === 'completed') return 'status-completed';
    if ($status === 'confirmed') return 'status-delivered';
    return 'status-pending';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking History | Akshay's Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Premium font and icons -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="order_history.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
    <style>
        body {
            background: linear-gradient(120deg, #f7f5fa 0%, #e9e4f0 100%);
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            color: #3a2e5c;
        }

        .order-history-container {
            max-width: 980px;
            margin: 48px auto 32px auto;
            background: #fff;
            border-radius: 22px;
            box-shadow: 0 8px 32px rgba(95, 75, 139, 0.13), 0 1.5px 8px rgba(160, 132, 202, 0.07);
            padding: 38px 36px 32px 36px;
            position: relative;
            overflow: hidden;
        }

        .restaurant-title {
            font-size: 2.3rem;
            font-weight: 700;
            color: #5f4b8b;
            letter-spacing: 0.04em;
            margin-bottom: 6px;
            text-align: center;
            text-shadow: 0 2px 8px #e9e4f0;
        }

        .subtitle {
            font-size: 1.25rem;
            color: #7c5eb6;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 500;
            letter-spacing: 0.02em;
        }

        .actions-bar {
            display: flex;
            gap: 16px;
            align-items: center;
            justify-content: center;
            margin-bottom: 32px;
            flex-wrap: wrap;
            background: #f7f5fa;
            padding: 18px 18px 12px 18px;
            border-radius: 12px;
            box-shadow: 0 1px 6px rgba(160, 132, 202, 0.07);
        }

        .search-box input[type="text"] {
            padding: 10px 16px;
            border: 1.5px solid #a084ca;
            border-radius: 8px;
            font-size: 1rem;
            font-family: inherit;
            outline: none;
            transition: border 0.18s;
            background: #fff;
            color: #3a2e5c;
            min-width: 220px;
        }

        .search-box input[type="text"]:focus {
            border-color: #5f4b8b;
            box-shadow: 0 2px 8px rgba(160, 132, 202, 0.09);
        }

        .filter-select {
            padding: 10px 14px;
            border: 1.5px solid #a084ca;
            border-radius: 8px;
            font-size: 1rem;
            background: #fff;
            color: #5f4b8b;
            font-family: inherit;
            outline: none;
            transition: border 0.18s;
            min-width: 140px;
        }

        .filter-select:focus {
            border-color: #5f4b8b;
            box-shadow: 0 2px 8px rgba(160, 132, 202, 0.09);
        }

        .actions-bar button[type="submit"],
        .actions-bar button {
            background: linear-gradient(90deg, #5f4b8b 0%, #a084ca 100%);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 10px 26px;
            font-size: 1.07rem;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.18s, box-shadow 0.18s, transform 0.12s;
            margin-left: 8px;
            display: inline-flex;
            align-items: center;
            gap: 7px;
            box-shadow: 0 2px 8px rgba(95, 75, 139, 0.08);
            letter-spacing: 0.02em;
        }

        .actions-bar button[type="submit"]:hover,
        .actions-bar button[type="submit"]:focus-visible,
        .actions-bar button:hover,
        .actions-bar button:focus-visible {
            background: linear-gradient(90deg, #4b3869 0%, #7c5eb6 100%);
            box-shadow: 0 4px 16px rgba(95, 75, 139, 0.13);
            transform: translateY(-2px) scale(1.03);
            outline: none;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 10px;
            margin-bottom: 18px;
            background: transparent;
        }

        thead th {
            background: #f7f5fa;
            color: #5f4b8b;
            font-size: 1.08rem;
            font-weight: 700;
            padding: 14px 10px;
            border-radius: 8px 8px 0 0;
            text-align: left;
            letter-spacing: 0.01em;
            border-bottom: 2px solid #e9e4f0;
        }

        tbody tr {
            background: #fff;
            box-shadow: 0 2px 8px rgba(160, 132, 202, 0.07);
            border-radius: 10px;
            transition: box-shadow 0.18s, transform 0.13s;
        }

        tbody tr:hover {
            box-shadow: 0 6px 24px rgba(95, 75, 139, 0.13);
            transform: translateY(-2px) scale(1.01);
        }

        tbody td {
            padding: 13px 10px;
            font-size: 1.04rem;
            color: #3a2e5c;
            border-bottom: 1px solid #f0ecf7;
            vertical-align: middle;
        }

        .status-badge {
            display: inline-block;
            padding: 7px 18px;
            border-radius: 18px;
            font-size: 0.98rem;
            font-weight: 600;
            letter-spacing: 0.01em;
            background: #f7f5fa;
            box-shadow: 0 1px 4px rgba(160, 132, 202, 0.07);
            text-align: center;
            min-width: 100px;
        }

        .status-pending {
            background: linear-gradient(90deg, #fffbe6 0%, #f7e7b7 100%);
            color: #bfa300;
            border: 1.5px solid #ffe066;
        }

        .status-confirmed,
        .status-delivered {
            background: linear-gradient(90deg, #e6fff6 0%, #b7f7e7 100%);
            color: #1e9d6f;
            border: 1.5px solid #5fffc6;
        }

        .status-completed {
            background: linear-gradient(90deg, #e6f7ff 0%, #b7e7f7 100%);
            color: #1e6d9d;
            border: 1.5px solid #66cfff;
        }

        .status-cancelled {
            background: linear-gradient(90deg, #ffe6e6 0%, #f7b7b7 100%);
            color: #d13a3a;
            border: 1.5px solid #ff6666;
        }

        .booking-actions {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .booking-actions button {
            background: linear-gradient(90deg, #5f4b8b 0%, #a084ca 100%);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 8px 20px;
            font-size: 1rem;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.18s, box-shadow 0.18s, transform 0.12s;
            margin-right: 8px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            box-shadow: 0 2px 8px rgba(95, 75, 139, 0.08);
            letter-spacing: 0.02em;
        }

        .booking-actions button:disabled {
            background: #e0e0e0;
            color: #b0b0b0;
            cursor: not-allowed;
            box-shadow: none;
        }

        .booking-actions button:hover:not(:disabled),
        .booking-actions button:focus-visible:not(:disabled) {
            background: linear-gradient(90deg, #4b3869 0%, #7c5eb6 100%);
            box-shadow: 0 4px 16px rgba(95, 75, 139, 0.13);
            transform: translateY(-2px) scale(1.03);
            outline: none;
        }

        .booking-note {
            font-size: 1.04rem;
            color: #5f4b8b;
            margin-top: 14px;
            background: #f7f5fa;
            border-left: 4px solid #a084ca;
            padding: 12px 18px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 1px 6px rgba(160, 132, 202, 0.07);
        }

        .booking-note i {
            font-size: 1.3em;
            color: #a084ca;
        }

        .empty-message {
            text-align: center;
            color: #7c5eb6;
            font-size: 1.15rem;
            margin-top: 40px;
            padding: 32px 0 18px 0;
            background: #f7f5fa;
            border-radius: 16px;
            box-shadow: 0 1px 6px rgba(160, 132, 202, 0.07);
        }

        .empty-message img {
            margin-bottom: 12px;
            opacity: 0.93;
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin: 22px 0 0 0;
        }

        .pagination a,
        .pagination span {
            display: inline-block;
            padding: 7px 16px;
            border-radius: 8px;
            font-size: 1.04rem;
            font-weight: 600;
            color: #5f4b8b;
            background: #f7f5fa;
            text-decoration: none;
            transition: background 0.18s, color 0.18s;
            border: 1.5px solid #e9e4f0;
            cursor: pointer;
        }

        .pagination a:hover {
            background: linear-gradient(90deg, #a084ca 0%, #5f4b8b 100%);
            color: #fff;
            border-color: #a084ca;
        }

        .pagination .active {
            background: linear-gradient(90deg, #5f4b8b 0%, #a084ca 100%);
            color: #fff;
            border-color: #a084ca;
            cursor: default;
        }

        /* Scrollbar styling */
        ::-webkit-scrollbar {
            width: 10px;
            background: #f7f5fa;
        }

        ::-webkit-scrollbar-thumb {
            background: #a084ca;
            border-radius: 8px;
        }

        /* Responsive Design */
        @media (max-width: 900px) {
            .order-history-container {
                max-width: 98vw;
                padding: 18px 6vw 18px 6vw;
            }

            .restaurant-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 600px) {
            .order-history-container {
                padding: 8vw 2vw 8vw 2vw;
                margin: 18px 0 12px 0;
            }

            .restaurant-title {
                font-size: 1.4rem;
            }

            .subtitle {
                font-size: 1.01rem;
            }

            .actions-bar {
                flex-direction: column;
                gap: 10px;
                padding: 12px 6px 8px 6px;
            }

            .search-box input[type="text"],
            .filter-select {
                min-width: 0;
                width: 100%;
                font-size: 0.97rem;
            }

            .actions-bar button[type="submit"] {
                width: 100%;
                font-size: 0.97rem;
                padding: 8px 0;
            }

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            thead {
                display: none;
            }

            tbody tr {
                margin-bottom: 18px;
                border-radius: 12px;
                box-shadow: 0 2px 8px rgba(160, 132, 202, 0.07);
            }

            tbody td {
                padding: 10px 8px;
                font-size: 0.97rem;
                border-bottom: none;
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-radius: 0;
            }

            tbody td:before {
                content: attr(data-label);
                font-weight: 700;
                color: #a084ca;
                margin-right: 10px;
                min-width: 120px;
                display: inline-block;
            }

            .booking-actions {
                flex-direction: column;
                gap: 6px;
            }

            .empty-message {
                font-size: 1rem;
                padding: 18px 0 10px 0;
            }

            .pagination a,
            .pagination span {
                padding: 7px 10px;
                font-size: 0.97rem;
            }
        }
    </style>
</head>

<body>
    <div class="order-history-container" aria-label="Booking History">
        <div class="restaurant-title">Akshay's Restaurant</div>
        <div class="subtitle">Your Table Booking History</div>
        <form class="actions-bar" method="get" autocomplete="off" role="search" aria-label="Search and filter bookings">
            <div class="search-box">
                <input type="text" name="search" placeholder="Search by Booking ID or Date" value="<?php echo htmlspecialchars($search); ?>" aria-label="Search bookings">
            </div>
            <select name="status" class="filter-select" aria-label="Filter by status">
                <option value="">All Status</option>
                <option value="pending" <?php if ($status_filter == 'pending') echo 'selected'; ?>>Pending</option>
                <option value="confirmed" <?php if ($status_filter == 'confirmed') echo 'selected'; ?>>Confirmed</option>
                <option value="completed" <?php if ($status_filter == 'completed') echo 'selected'; ?>>Completed</option>
                <option value="cancelled" <?php if ($status_filter == 'cancelled') echo 'selected'; ?>>Cancelled</option>
            </select>
            <button type="submit">
                <i class="ri-search-line"></i> Search
            </button>
            <a href="../index.php" style="text-decoration:none;">
                <button type="button" style="margin-left:8px;">
                    <i class="ri-home-4-line"></i> Home
                </button>
            </a>
        </form>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <table aria-label="Booking history table">
                <thead>
                    <tr>
                        <th>Booking #</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Guests</th>
                        <th>Status</th>
                        <th>Special Request</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($booking = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($booking['id']); ?></td>
                            <td><?php echo date('d M Y', strtotime($booking['booking_date'])); ?></td>
                            <td><?php echo htmlspecialchars($booking['time']); ?></td>
                            <td><?php echo htmlspecialchars($booking['guests']); ?></td>
                            <td>
                                <span class="status-badge <?php echo booking_status_badge($booking['booking_status']); ?>">
                                    <?php echo ucfirst($booking['booking_status']); ?>
                                </span>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($booking['special_request'] ?? '—'); ?>
                            </td>
                            <td class="booking-actions">
                                <?php if (in_array(strtolower($booking['booking_status']), ['pending', 'confirmed'])): ?>
                                    <form method="post" action="cancel-booking.php" style="display:inline;">
                                        <input type="hidden" name="booking_id" value="<?php echo $booking['id']; ?>">
                                        <button type="submit" onclick="return confirm('Are you sure you want to cancel this booking?');">
                                            <i class="ri-close-circle-line"></i> Cancel
                                        </button>
                                    </form>
                                <?php else: ?>
                                    <button type="button" disabled><i class="ri-close-circle-line"></i> Cancel</button>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <!-- Pagination -->
            <?php
            $total_pages = ceil($total_bookings / $per_page);
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
            <div class="booking-note">
                <i class="ri-information-line"></i>
                You can only cancel bookings that are pending or confirmed. Completed or cancelled bookings cannot be changed.
            </div>
        <?php else: ?>
            <div class="empty-message">
                <img src="https://cdn-icons-png.flaticon.com/512/4076/4076549.png" alt="No Bookings" width="90">
                <br>
                You have not made any bookings yet.<br>
                <a href="../../booking.php" style="color:#5f4b8b; text-decoration:underline;">Book a Table</a>
            </div>
        <?php endif; ?>