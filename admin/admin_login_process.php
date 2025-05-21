<?php
session_start();
include('../config/db.php');  // Adjust if your path is different

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = $_POST['password'];

// Fetch user
$sql = "SELECT * FROM admin WHERE username='$username' LIMIT 1";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {
        $_SESSION['admin'] = $username;
        header("Location: admin_dashboard.php");
        exit;
    } else {
        echo "❌ Incorrect password.";
    }
} else {
    echo "❌ Admin not found.";
}
?>
