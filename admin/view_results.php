<?php
session_start();
include('../config/db.php');
include('../includes/header.php');

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$search_roll = '';
$search_condition = '';

if (isset($_GET['search_roll'])) {
    $search_roll = mysqli_real_escape_string($conn, $_GET['search_roll']);
    if (!empty($search_roll)) {
        $search_condition = "WHERE s.roll_no = '$search_roll'";
    }
}

$sql = "SELECT 
            s.roll_no, s.name, s.class,
            m.language1, m.language2, m.maths, m.science, m.social, m.total, m.grade
        FROM students s
        LEFT JOIN marks m ON s.roll_no = m.roll_no
        $search_condition
        ORDER BY s.roll_no";

$result = mysqli_query($conn, $sql);
?>

<div class="container">
    <h2>View Student Results</h2>

    <form method="GET" action="" class="form-group">
        <label for="search_roll">Search by Roll Number:</label>
        <input type="text" name="search_roll" id="search_roll" placeholder="Enter roll number" value="<?php echo htmlspecialchars($search_roll); ?>">
        <input type="submit" value="Search">
    </form>

    <table border="1" cellspacing="0" cellpadding="8" style="width: 100%; margin-top: 20px;">
        <tr>
            <th>Roll No</th>
            <th>Name</th>
            <th>Class</th>
            <th>Language 1</th>
            <th>Language 2</th>
            <th>Maths</th>
            <th>Science</th>
            <th>Social</th>
            <th>Total</th>
            <th>Grade</th>
        </tr>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['roll_no']); ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['class']); ?></td>
                    <td><?php echo htmlspecialchars($row['language1']); ?></td>
                    <td><?php echo htmlspecialchars($row['language2']); ?></td>
                    <td><?php echo htmlspecialchars($row['maths']); ?></td>
                    <td><?php echo htmlspecialchars($row['science']); ?></td>
                    <td><?php echo htmlspecialchars($row['social']); ?></td>
                    <td><?php echo htmlspecialchars($row['total']); ?></td>
                    <td><?php echo htmlspecialchars($row['grade']); ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="10" style="text-align:center;">No results found.</td>
            </tr>
        <?php endif; ?>
    </table>

    <a class="back-button" href="admin_dashboard.php">← Back to Dashboard</a>
</div>

<?php include('../includes/footer.php'); ?>
