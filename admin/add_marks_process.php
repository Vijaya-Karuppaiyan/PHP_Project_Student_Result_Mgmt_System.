<?php
include '../config/db.php';

$roll_no = $_POST['roll_no'];
$lang1 = $_POST['language1'];
$lang2 = $_POST['language2'];
$maths = $_POST['maths'];
$science = $_POST['science'];
$social = $_POST['social'];

$total = $lang1 + $lang2 + $maths + $science + $social;
$grade = ($total >= 400) ? 'A' : (($total >= 300) ? 'B' : (($total >= 200) ? 'C' : 'Fail'));

$sql = "INSERT INTO marks (roll_no, language1, language2, maths, science, social, total, grade)
        VALUES ('$roll_no', '$lang1', '$lang2', '$maths', '$science', '$social', '$total', '$grade')";

if (mysqli_query($conn, $sql)) {
    echo "Marks added successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
