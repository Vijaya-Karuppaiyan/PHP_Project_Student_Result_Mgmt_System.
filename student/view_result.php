<?php
session_start();
include('../config/db.php');
include('../includes/header.php');

if (!isset($_SESSION['student'])) {
    header("Location: student_login.php");
    exit();
}

$roll_no = $_SESSION['student'];

$sql = "SELECT 
            s.name, s.class, s.roll_no,
            m.language1, m.language2, m.maths, m.science, m.social, m.total, m.grade
        FROM students s
        LEFT JOIN marks m ON s.roll_no = m.roll_no
        WHERE s.roll_no = '$roll_no'";

$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
?>

<div class="container">
    <h2>My Result</h2>

    <?php if ($data): ?>
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr><th>Roll Number</th><td><?php echo htmlspecialchars($data['roll_no']); ?></td></tr>
            <tr><th>Name</th><td><?php echo htmlspecialchars($data['name']); ?></td></tr>
            <tr><th>Class</th><td><?php echo htmlspecialchars($data['class']); ?></td></tr>
            <tr><th>Language 1</th><td><?php echo htmlspecialchars($data['language1']); ?></td></tr>
            <tr><th>Language 2</th><td><?php echo htmlspecialchars($data['language2']); ?></td></tr>
            <tr><th>Maths</th><td><?php echo htmlspecialchars($data['maths']); ?></td></tr>
            <tr><th>Science</th><td><?php echo htmlspecialchars($data['science']); ?></td></tr>
            <tr><th>Social</th><td><?php echo htmlspecialchars($data['social']); ?></td></tr>
            <tr><th>Total</th><td><?php echo htmlspecialchars($data['total']); ?></td></tr>
            <tr><th>Grade</th><td><?php echo htmlspecialchars($data['grade']); ?></td></tr>
        </table>
    <?php else: ?>
        <p>No result found.</p>
    <?php endif; ?>

    <a class="back-button" href="student_dashboard.php">← Back to Dashboard</a>
</div>

<?php include('../includes/footer.php'); ?>
