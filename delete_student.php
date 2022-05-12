<?php

$id=$_GET['id'];

require_once 'config/db.php';

$sql=mysqli_query($connection,"DELETE FROM student WHERE student_id='$id'");

echo "<script> alert ('Student Deleted Successfully!!!'); window.location='manage_student.php?id=$id'</script>";

?>