<?php
include('../config/db.php'); // Adjust path if needed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $roll_no = $_POST['roll_no'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $class = $_POST['class'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if roll number already exists
    $check = mysqli_query($conn, "SELECT * FROM students WHERE roll_no = '$roll_no'");
    if (mysqli_num_rows($check) > 0) {
        echo "Roll number already registered.";
        exit();
    }

    $sql = "INSERT INTO students (roll_no, name, email, password, class)
            VALUES ('$roll_no', '$name', '$email', '$password', '$class')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful! <a href='student_login.php'>Login Now</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
