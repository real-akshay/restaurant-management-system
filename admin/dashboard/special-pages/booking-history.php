<?php

include('../../authentication.php');
include('../../../config/dbcon.php');

// Dummy bookings data (for template preview)
$bookings = [
    ['id' => 101, 'full_name' => 'Akshay Singroure', 'email' => 'akshay@example.com', 'phone' => '9876543210', 'booking_date' => '2025-09-26', 'booking_time' => '19:00', 'guests' => 4, 'booking_status' => 'Confirmed'],
    ['id' => 102, 'full_name' => 'Riya Sharma', 'email' => 'riya@example.com', 'phone' => '9123456780', 'booking_date' => '2025-09-27', 'booking_time' => '20:00', 'guests' => 2, 'booking_status' => 'Pending'],
    ['id' => 103, 'full_name' => 'Rahul Verma', 'email' => 'rahul@example.com', 'phone' => '9876501234', 'booking_date' => '2025-09-28', 'booking_time' => '18:30', 'guests' => 6, 'booking_status' => 'Cancelled'],
    ['id' => 104, 'full_name' => 'Neha Kapoor', 'email' => 'neha@example.com', 'phone' => '9988776655', 'booking_date' => '2025-09-29', 'booking_time' => '21:00', 'guests' => 3, 'booking_status' => 'Confirmed'],
    ['id' => 105, 'full_name' => 'Saket Jain', 'email' => 'saket@example.com', 'phone' => '9012345678', 'booking_date' => '2025-10-01', 'booking_time' => '13:00', 'guests' => 2, 'booking_status' => 'Pending'],
    ['id' => 106, 'full_name' => 'Anita Singh', 'email' => 'anita@example.com', 'phone' => '9001122334', 'booking_date' => '2025-10-02', 'booking_time' => '20:30', 'guests' => 5, 'booking_status' => 'Confirmed'],
];

// Apply filters from GET (works on dummy data)
$filter_id = trim($_GET['booking_id'] ?? '');
$filter_name = trim($_GET['customer_name'] ?? '');
$filter_from = trim($_GET['date_from'] ?? '');
$filter_to = trim($_GET['date_to'] ?? '');
$filter_status = trim($_GET['status'] ?? '');

$filtered = array_filter($bookings, function ($b) use ($filter_id, $filter_name, $filter_from, $filter_to, $filter_status) {
    // Booking ID filter
    if ($filter_id !== '' && stripos((string)$b['id'], $filter_id) === false) {
        return false;
    }
    // Name filter
    if ($filter_name !== '' && stripos($b['full_name'], $filter_name) === false) {
        return false;
    }
    // Date from
    if ($filter_from !== '' && strtotime($b['booking_date']) < strtotime($filter_from)) {
        return false;
    }
    // Date to
    if ($filter_to !== '' && strtotime($b['booking_date']) > strtotime($filter_to)) {
        return false;
    }
    // Status
    if ($filter_status !== '' && strcasecmp($b['booking_status'], $filter_status) !== 0) {
        return false;
    }
    return true;
});

// For consistent ordering (latest first)
// usort($filtered, function ($a, $b) {
//     return strtotime($b['booking_date']) <=> strtotime($a['booking_date']);
// });
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Booking History</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 20px;
            color: #2c3e50;
        }

        .wrap {
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            padding: 18px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
        }

        h2 {
            margin: 0 0 14px 0;
            font-size: 22px;
            font-weight: 600;
            text-align: left;
        }

        .search-bar {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 16px;
        }

        .search-bar input[type="text"],
        .search-bar input[type="date"],
        .search-bar select {
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #dcdcdc;
            min-width: 150px;
            font-size: 14px;
        }

        .search-bar .btn {
            padding: 10px 16px;
            border-radius: 8px;
            border: none;
            background: #2d3436;
            color: #fff;
            cursor: pointer;
            font-weight: 600;
        }

        .search-bar .btn.clear {
            background: #c7c7c7;
            color: #222;
        }

        .search-bar .btn:hover {
            opacity: 0.95;
        }

        .table-wrap {
            overflow-x: auto;
            margin-top: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 980px;
        }

        thead th {
            background: #2c3e50;
            color: #fff;
            padding: 12px 10px;
            text-align: left;
            font-weight: 600;
        }

        tbody td {
            padding: 12px 10px;
            border-bottom: 1px solid #eee;
            vertical-align: middle;
            font-size: 14px;
        }

        tbody tr:hover {
            background: #fbfbfb;
        }

        .status-badge {
            padding: 6px 10px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 13px;
            display: inline-block;
        }

        .status-Pending {
            background: #fff3bf;
            color: #7a5b00;
            border: 1px solid #ffeaa7;
        }

        .status-Confirmed {
            background: #eafff0;
            color: #0b6f3a;
            border: 1px solid #b9f6c6;
        }

        .status-Cancelled {
            background: #ffecec;
            color: #8a1f1f;
            border: 1px solid #ffb3b3;
        }

        .actions button {
            padding: 8px 10px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-size: 13px;
            margin-right: 6px;
        }

        .view {
            background: #0984e3;
            color: #fff;
        }

        .edit {
            background: #fdcb6e;
            color: #222;
        }

        .delete {
            background: #d63031;
            color: #fff;
        }

        .empty {
            text-align: center;
            padding: 20px;
            color: #666;
        }

        /* Responsive */
        @media (max-width: 1000px) {
            table {
                min-width: 900px;
            }
        }

        @media (max-width: 700px) {

            thead th:nth-child(3),
            tbody td:nth-child(3),
            thead th:nth-child(4),
            tbody td:nth-child(4) {
                display: none;
            }

            /* hide email/phone on small */
            table {
                min-width: 700px;
            }
        }

        @media (max-width: 480px) {
            .search-bar {
                gap: 8px;
            }

            thead th:nth-child(2),
            tbody td:nth-child(2) {
                display: none;
            }

            /* hide customer name on very small */
            table {
                min-width: 600px;
            }
        }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="card">
            <h2>Booking History</h2>

            <form method="GET" class="search-bar" onsubmit="return true;">
                <input type="text" name="booking_id" placeholder="Booking ID" value="<?php echo htmlspecialchars($filter_id); ?>">
                <input type="text" name="customer_name" placeholder="Customer Name" value="<?php echo htmlspecialchars($filter_name); ?>">
                <input type="date" name="date_from" value="<?php echo htmlspecialchars($filter_from); ?>">
                <input type="date" name="date_to" value="<?php echo htmlspecialchars($filter_to); ?>">
                <select name="status">
                    <option value="">All Status</option>
                    <option value="Pending" <?php if ($filter_status === 'Pending') echo 'selected'; ?>>Pending</option>
                    <option value="Confirmed" <?php if ($filter_status === 'Confirmed') echo 'selected'; ?>>Confirmed</option>
                    <option value="Cancelled" <?php if ($filter_status === 'Cancelled') echo 'selected'; ?>>Cancelled</option>
                </select>
                <button type="submit" class="btn">Search</button>
                <a href="booking-history.php" class="btn clear" style="display:inline-block; text-decoration:none; text-align:center; padding:10px 12px; margin-left:4px;">Reset</a>

            </form>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Customer</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Guests</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM bookings ORDER BY id DESC";
                        $query_run = mysqli_query($con, $query);

                        // if (count($query_run) === 0): 
                        if (mysqli_num_rows($query_run) === 0):
                        ?>
                            <tr>
                                <td colspan="9" class="empty">No bookings match your search.</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($query_run as $row): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                                    <td><?php echo htmlspecialchars($row['user_name']); ?></td>
                                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                    <td><?php echo htmlspecialchars($row['booking_date']); ?></td>
                                    <td><?php echo htmlspecialchars($row['time']); ?></td>
                                    <td><?php echo htmlspecialchars($row['guests']); ?></td>
                                    <td>
                                        <span class="status-badge status-<?php echo htmlspecialchars($row['booking_status']); ?>">
                                            <?php echo htmlspecialchars($row['booking_status']); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <button class="view" onclick="window.location.href='view-booking.php?id=<?php echo urlencode($row['id']); ?>'">View</button>
                                        <button class="edit" onclick="window.location.href='edit-booking.php?id=<?php echo urlencode($row['id']); ?>'">Edit</button>
                                        <button class="delete" onclick="if(confirm('Delete booking <?php echo htmlspecialchars($row['id']); ?>?')) window.location.href='delete-booking.php?id=<?php echo urlencode($row['id']); ?>'">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>