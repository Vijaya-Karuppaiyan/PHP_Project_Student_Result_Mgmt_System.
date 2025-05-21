<?php include('../includes/header.php'); ?>

<div class="container">
    <h2>Student Login</h2>
    <form method="POST" action="student_login_process.php">
        <div>
            <label for="roll_no">Roll Number:</label>
            <input type="text" name="roll_no" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <input type="submit" value="Login" />
        </div>
    </form>
    
        <a class="back-button" href="../index.php">← Back to Home</a>
 
</div>

<?php include('../includes/footer.php'); ?>
