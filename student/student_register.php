<?php include('../includes/header.php'); ?>

<div class="container">
    <h2>Student Registration</h2>
    <form method="POST" action="student_register_process.php">
        <div>
            <label for="roll_no">Roll Number:</label>
            <input type="text" name="roll_no" required>
        </div>

        <div>
            <label for="name">Full Name:</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="class">Class:</label>
            <input type="text" name="class" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <input type="submit" value ="Register" />
        </div>
    </form>

    <div >
        <a class="back-button" href="../index.php">← Back to Home</a>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
