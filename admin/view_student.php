<?php
session_start();
include('../config/db.php');
include('../includes/header.php');

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Display update success message (from session)
if (isset($_SESSION['update_success'])) {
    echo "<div class='container' style='color: green; margin-bottom: 10px;'>" . $_SESSION['update_success'] . "</div>";
    unset($_SESSION['update_success']);
}

$sql = "SELECT * FROM students ORDER BY roll_no";
$result = mysqli_query($conn, $sql);
?>

<div class="container">
    <h2>All Students</h2>

    <table style="width:100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr>
                <th>Roll No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Class</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['roll_no']); ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['class']); ?></td>
                        <td>
                            <a href="edit_student.php?roll_no=<?php echo $row['roll_no']; ?>">✏️ Edit</a> |
                            <a href="delete_student.php?roll_no=<?php echo $row['roll_no']; ?>" onclick="return confirm('Are you sure to delete this student?')">🗑️ Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="5">No students found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <a class="back-button" href="admin_dashboard.php">← Back to Dashboard</a>
</div>

<?php include('../includes/footer.php'); ?>
