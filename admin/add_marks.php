<?php include('../includes/header.php'); ?>

<div class="container">
    <h2>Add Marks</h2>

    <form method="POST" action="add_marks_process.php">
       
        <label>Roll Number:</label>
        <input type="text" name="roll_no" required>
    
        <label>Language 1:</label>
        <input type="number" name="language1" required>
      
        <label>Language 2:</label>
        <input type="number" name="language2" required>
        
        <label>Maths:</label>
        <input type="number" name="maths" required>
        
        <label>Science:</label>
        <input type="number" name="science" required>
        
        <label>Social:</label>
        <input type="number" name="social" required>
       
        <input type="submit" value ="Add Marks">
       
    </form>

    
        <a class="back-button" href="admin_dashboard.php">← Back to Dashboard</a>
   
</div>

<?php include('../includes/footer.php'); ?>
