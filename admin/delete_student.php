<?php
session_start();
include('../config/db.php');

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$roll_no = $_GET['roll_no'] ?? '';

if ($roll_no) {
    mysqli_query($conn, "DELETE FROM students WHERE roll_no = '$roll_no'");
}

header("Location: view_student.php");
exit();
