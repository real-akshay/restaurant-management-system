<?php
// filepath: c:\xampp\htdocs\Akshay\restaurant-management-system\admin\dashboard\special-pages\booking-history.php

include('../../authentication.php'); // Admin authentication

// Dummy data array
$bookings = [
    ['id'=>101,'name'=>'Akshay Singroure','email'=>'akshay@example.com','phone'=>'9876543210','date'=>'2025-09-26','time'=>'19:00','guests'=>4,'status'=>'Confirmed'],
    ['id'=>102,'name'=>'Riya Sharma','email'=>'riya@example.com','phone'=>'9123456780','date'=>'2025-09-27','time'=>'20:00','guests'=>2,'status'=>'Pending'],
    ['id'=>103,'name'=>'Rahul Verma','email'=>'rahul@example.com','phone'=>'9876501234','date'=>'2025-09-28','time'=>'18:30','guests'=>6,'status'=>'Cancelled'],
    ['id'=>104,'name'=>'Neha Kapoor','email'=>'neha@example.com','phone'=>'9988776655','date'=>'2025-09-29','time'=>'21:00','guests'=>3,'status'=>'Confirmed'],
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Booking History</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <style>
        body { font-family:'Montserrat', sans-serif; background:#f4f6f8; margin:0; }
        .container { max-width:1200px; margin:40px auto; padding:0 20px; }
        h2 { color:#2c3e50; margin-bottom:20px; font-weight:600; }
        .search-bar { display:flex; flex-wrap:wrap; gap:10px; margin-bottom:20px; }
        .search-bar input, .search-bar select { padding:8px 12px; border-radius:8px; border:1px solid #ccc; flex:1; min-width:150px; }
        .search-bar button { padding:8px 16px; border:none; border-radius:8px; background:#2d3436; color:#fff; cursor:pointer; }
        .search-bar button:hover { background:#636e72; }

        table { width:100%; border-collapse:collapse; background:#fff; border-radius:12px; overflow:hidden; box-shadow:0 4px 16px rgba(0,0,0,0.08); }
        th, td { padding:12px 10px; text-align:left; border-bottom:1px solid #eee; font-size:14px; }
        th { background:#2c3e50; color:#fff; font-weight:600; }
        tr:hover { background:#f1f1f1; }
        .status-badge { padding:6px 12px; border-radius:12px; font-weight:600; font-size:12px; color:#fff; }
        .status-Pending { background:#ffeaa7; color:#636e72; }
        .status-Confirmed { background:#55efc4; color:#00b894; }
        .status-Cancelled { background:#fab1a0; color:#d63031; }

        .actions button { padding:6px 10px; border:none; border-radius:6px; margin-right:5px; cursor:pointer; font-size:12px; }
        .view-btn { background:#0984e3; color:#fff; }
        .edit-btn { background:#fdcb6e; color:#000; }
        .delete-btn { background:#d63031; color:#fff; }
        .view-btn:hover { background:#74b9ff; }
        .edit-btn:hover { background:#ffeaa7; }
        .delete-btn:hover { background:#ff7675; }

        @media (max-width: 768px) {
            .search-bar { flex-direction: column; }
            table, th, td { font-size:12px; }
        }
        @media (max-width: 480px) {
            th, td { padding:8px 6px; }
            .actions button { padding:4px 6px; font-size:10px; }
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Booking History</h2>

    <!-- Search / Filter -->
    <div class="search-bar">
        <input type="text" placeholder="Search by Booking ID">
        <input type="text" placeholder="Search by Customer Name">
        <input type="date" placeholder="From Date">
        <input type="date" placeholder="To Date">
        <select>
            <option value="">All Status</option>
            <option value="Pending">Pending</option>
            <option value="Confirmed">Confirmed</option>
            <option value="Cancelled">Cancelled</option>
        </select>
        <button>Search</button>
    </div>

    <!-- Booking Table -->
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
            <?php foreach($bookings as $b): ?>
            <tr>
                <td><?php echo $b['id']; ?></td>
                <td><?php echo $b['name']; ?></td>
                <td><?php echo $b['email']; ?></td>
                <td><?php echo $b['phone']; ?></td>
                <td><?php echo $b['date']; ?></td>
                <td><?php echo $b['time']; ?></td>
                <td><?php echo $b['guests']; ?></td>
                <td><span class="status-badge status-<?php echo $b['status']; ?>"><?php echo $b['status']; ?></span></td>
                <td>
                    <button class="view-btn">View</button>
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
