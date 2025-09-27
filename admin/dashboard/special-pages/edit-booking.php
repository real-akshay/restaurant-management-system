<?php

use FontLib\Table\Type\name;

include('../../authentication.php');
include('../../../config/dbcon.php');

$user_id = $_GET['id'];
$query = "SELECT * FROM bookings WHERE id=$user_id";
$query_run = mysqli_query($con, $query);
$bookings = mysqli_fetch_assoc($query_run);


$id = $user_id ?? '';

if (!isset($bookings)) {
    echo "Booking not found.";
    exit;
}
// $booking = $bookings[$id];
$booking = $id;



?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow rounded-4">
            <div class="card-header bg-warning">
                <h4>Edit Booking</h4>
            </div>
            <div class="card-body">
                <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" value="<?php echo $bookings['user_name']; ?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Guests</label>
                        <input type="number" name="guests" value="<?php echo $bookings['guests']; ?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="none">Select</option>
                            <option value="Pending" <?php if ($bookings['booking_status'] == "Pending") {
                                                        echo "selected";
                                                    } ?>>Pending</option>
                            <option value="Confirmed" <?php if ($bookings['booking_status'] == "Confirmed") {
                                                            echo "selected";
                                                        } ?>>Confirmed</option>
                            <option value="Cancelled" <?php if ($bookings['booking_status'] == "Cancelled") {
                                                            echo "selected";
                                                        } ?>>Cancelled</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success" name="update_booking_status">Update</button>

                    <a href="booking-history.php" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['update_booking_status'])) {
        if ($_SERVER['REQUEST_METHOD'] ==  'POST') {
            $bstatus = $_POST['status'];
            // var_dump($bstatus);

            if (!empty($bstatus)) {

                mysqli_query($con, "UPDATE bookings SET booking_status = '$bstatus' WHERE id = $user_id");
                header("Location: booking-history.php");
            }
        } else {
            echo "some thing went wrong!!!";
        }
    }
    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     echo "<script>alert('Booking updated successfully!'); window.location='booking-history.php';</script>";
    //     exit;
    // }

    ?>
</body>

</html>