<?php
include '../config/db.php';

$roll_no = $_POST['roll_no'];
$name = $_POST['name'];
$email = $_POST['email'];
$class = $_POST['class'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO students (roll_no, name, email, class, password)
        VALUES ('$roll_no', '$name', '$email', '$class', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Student added successfully.";
    
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
