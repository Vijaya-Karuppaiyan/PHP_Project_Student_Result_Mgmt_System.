<?php
session_start();
include('../config/db.php'); // Adjust path if needed

$roll_no = $_POST['roll_no'];
$password = $_POST['password'];

$sql = "SELECT * FROM students WHERE roll_no='$roll_no'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row && password_verify($password, $row['password'])) {
    $_SESSION['student'] = $roll_no;
    header("Location: student_dashboard.php");
} else {
    echo "Invalid login credentials.";
}
?>
