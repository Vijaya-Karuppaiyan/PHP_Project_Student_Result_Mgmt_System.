<?php
session_start();
include('../config/db.php');
include('../includes/header.php');

if (!isset($_SESSION['student'])) {
    header("Location: student_login.php");
    exit();
}

$roll_no = $_SESSION['student'];

$sql = "SELECT name FROM students WHERE roll_no = '$roll_no'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$student_name = $row ? $row['name'] : $roll_no;
?>

<div class="container">
    <h2>Welcome, <?php echo htmlspecialchars($student_name); ?></h2>

    <div class="form-group">
        <a href="view_result.php" class="button-link">📄 View My Result</a>
    </div>

    <div class="form-group">
        <a href="logout.php" class="button-link logout">🚪 Logout</a>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
