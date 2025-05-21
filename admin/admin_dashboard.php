<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="text-center mb-4">
        <h1 class="text-primary">Student Result Management System</h1>
    </div>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <div class="d-flex">
            <span class="navbar-text text-white me-3">Welcome, <?php echo $_SESSION['admin']; ?></span>
            <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row g-4">

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Add Student</h5>
                    <p class="card-text">Register a new student.</p>
                    <a href="add_student.php" class="btn btn-primary w-100">Go</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Add Marks</h5>
                    <p class="card-text">Enter marks for students.</p>
                    <a href="add_marks.php" class="btn btn-primary w-100">Go</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">View/Edit/Delet Student Details</h5>
                    <p class="card-text">Do whatever you want.</p>
                    <a href="view_student.php" class="btn btn-primary w-100">Go</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">View Results</h5>
                    <p class="card-text">Check student results.</p>
                    <a href="view_results.php" class="btn btn-primary w-100">Go</a>
                </div>
            </div>
        </div>

    </div>
</div>

<footer class="text-center mt-5 text-muted">
    <small>&copy; <?php echo date('Y'); ?> Student Result Management System</small>
</footer>

</body>
</html>
