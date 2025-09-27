<?php
include('../../authentication.php');
include('../../../config/dbcon.php');

$user_id = $_GET['id'];
$query = "SELECT * FROM bookings WHERE id=$user_id";
$query_run = mysqli_query($con, $query);
$booking = mysqli_fetch_assoc($query_run);

if (!$booking) {
    echo "Booking not found.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f6f8;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
        }
        .card {
            border-radius: 12px;
        }
        .card-header {
            background-color: #2c3e50;
            color: #fff;
        }
        .info-table {
            width: 100%;
        }
        .info-table th {
            width: 25%;
            text-align: left;
            color: #555;
            font-weight: 600;
            padding: 10px 12px;
            background-color: #fafafa;
        }
        .info-table td {
            padding: 10px 12px;
            color: #222;
        }
        .badge-status {
            padding: 6px 12px;
            font-size: 0.85rem;
            border-radius: 20px;
        }
        .status-Confirmed {
            background: #d4edda;
            color: #155724;
        }
        .status-Pending {
            background: #fff3cd;
            color: #856404;
        }
        .status-Cancelled {
            background: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5 class="mb-0">Booking Details</h5>
        </div>
        <div class="card-body p-0">
            <table class="info-table table mb-0">
                <tr>
                    <th>Name</th>
                    <td><?php echo htmlspecialchars($booking['user_name']); ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo htmlspecialchars($booking['email']); ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?php echo htmlspecialchars($booking['phone']); ?></td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td><?php echo htmlspecialchars($booking['booking_date']); ?></td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td><?php echo htmlspecialchars($booking['time']); ?></td>
                </tr>
                <tr>
                    <th>Guests</th>
                    <td><?php echo htmlspecialchars($booking['guests']); ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <span class="badge-status status-<?php echo htmlspecialchars($booking['booking_status']); ?>">
                            <?php echo htmlspecialchars($booking['booking_status']); ?>
                        </span>
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-footer text-end">
            <a href="booking-history.php" class="btn btn-secondary btn-sm">Back to History</a>
        </div>
    </div>
</div>
</body>
</html>
```
