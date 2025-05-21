<?php
session_start();
include('../config/db.php');
include('../includes/header.php');

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$roll_no = $_GET['roll_no'] ?? '';

// Handle update form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $class = $_POST['class'];

    $update = "UPDATE students SET name='$name', email='$email', class='$class' WHERE roll_no='$roll_no'";
    if (mysqli_query($conn, $update)) {
        // Set success message and redirect to student list
        $_SESSION['update_success'] = "Student updated successfully.";
        header("Location: view_student.php");
        exit();
    }
}

// Fetch current student details
$sql = "SELECT * FROM students WHERE roll_no = '$roll_no'";
$res = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($res);
?>

<div class="container">
    <h2>Edit Student: <?php echo htmlspecialchars($roll_no); ?></h2>

    <form method="POST">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($data['name']); ?>" required>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>" required>
        </div>

        <div class="form-group">
            <label>Class:</label>
            <input type="text" name="class" value="<?php echo htmlspecialchars($data['class']); ?>" required>
        </div>

        <input type="submit" value="Update Student">
    </form>

    <a class="back-button" href="view_student.php">← Back to Student List</a>
</div>

<?php include('../includes/footer.php'); ?>
