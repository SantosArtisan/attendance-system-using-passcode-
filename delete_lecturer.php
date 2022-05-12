<?php

$id=$_GET['id'];

require_once 'config/db.php';

$sql=mysqli_query($connection,"DELETE FROM lecturer WHERE lecturer_id='$id'");

echo "<script> alert ('Record Deleted Successfully!!!'); window.location='manage_lecturer.php?id=$id'</script>";

?>