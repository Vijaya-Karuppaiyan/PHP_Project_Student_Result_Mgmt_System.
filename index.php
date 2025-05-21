<?php include('includes/header.php'); ?>

<div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="text-primary fw-bold">Student Result Management System</h1>
        <p class="lead">Select your role to login or register</p>
    </div>

    <div class="row justify-content-center g-4">
        <!-- Admin Login -->
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h4 class="card-title fw-bold">Admin</h4>
                    <p class="card-text">Manage students, marks and results.</p>
                    <a href="admin/admin_login.php" class="btn btn-primary w-100">Admin Login</a>
                </div>
            </div>
        </div>

        <!-- Student Login -->
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h4 class="card-title fw-bold">Student</h4>
                    <p class="card-text">View your results and grades.</p>
                    <a href="student/student_login.php" class="btn btn-success w-100">Student Login</a>
                </div>
            </div>
        </div>

        <!-- Student Registration -->
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h4 class="card-title fw-bold">New Student</h4>
                    <p class="card-text">Register for an account first.</p>
                    <a href="student/student_register.php" class="btn btn-warning w-100 text-white">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
