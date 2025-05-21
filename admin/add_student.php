<?php include('../includes/header.php'); ?>

<div class="container">
    <h2>Add New Student</h2>

    <form name="studentForm" onsubmit="return validateForm()" method="POST" action="add_student_process.php">
        <div class="form-group">
            <label>Roll Number:</label>
            <input type="text" name="roll_no" id="roll_no" required>
        </div>

        <div class="form-group">
            <label>Full Name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label>Class:</label>
            <input type="text" name="class" id="class" required>
        </div>

        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <input type="submit" value="Add Student">
    </form>

    <a class="back-button" href="admin_dashboard.php">← Back to Dashboard</a>
</div>

<script>
function validateForm() {
    const roll = document.getElementById("roll_no").value.trim();
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const cls = document.getElementById("class").value.trim();
    const pwd = document.getElementById("password").value;

    if (isNaN(roll)) {
        alert("Roll number must be numeric.");
        return false;
    }

    if (name === "" || name.length < 3) {
        alert("Please enter a valid name (min 3 characters).");
        return false;
    }

    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!emailPattern.test(email)) {
        alert("Invalid email format.");
        return false;
    }

    if (cls === "") {
        alert("Class cannot be empty.");
        return false;
    }

    if (pwd.length < 6) {
        alert("Password must be at least 6 characters.");
        return false;
    }

    return true;
}
</script>

<?php include('../includes/footer.php'); ?>
