<?php
include('../../authentication.php');
include('../../../config/dbcon.php');

$id = $_GET['id'] ?? '';
if ($id) {
    // Dummy delete action
    echo "<script>alert('Booking deleted successfully!'); window.location='booking-history.php';</script>";
    exit;
} else {
    echo "Booking ID missing.";
}
