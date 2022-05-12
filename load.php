<?php

 session_start();

 include'config/db.php';
/*
 $query1=mysql_query($connection,"SELECT * FROM student");

 while ($row=mysqli_fetch_array($query1)) {
 	$regno=$row["regno"];
 	$student_id=$row["student_id"];

 	$lecturer_id=$row["lecturer_id"];
 	$regno=$row["regno"];

 }
*/
$days=$_GET['days']; 
$regno=$_GET['regno'];
$student=$_GET['student'];
$_SESSION['passcode']=$_GET['passcode'];  
$data=$_GET['submit'];  
$lecturer=$_GET['lecturer'];
$_SESSION['phone']=$_GET['phone'];
foreach ($regno as $key => $val) {



$sql=mysqli_query($connection,"INSERT INTO passcode(passcode,regno,phone,lecturer_id,student_id,days) VALUES ('".$_SESSION['passcode'][$key]."','$regno[$key]','".$_SESSION['phone'][$key]."','".$_SESSION['lecturer_id']."', '$student[$key]','$days')");


/*$sql=mysqli_query($connection,"UPDATE passcode set passcode ='".$_SESSION['passcode'][$key]."', weeks ='$weeks', days ='$days' WHERE regno='$regno[$key]' AND lecturer_id='".$_SESSION['lecturer_id']."'");*/

$query=mysqli_query($connection,"SELECT * FROM lecturer WHERE lecturer_id='".$_SESSION['lecturer_id']."'");

while ($row=mysqli_fetch_array($query)) {
	
	$_SESSION['name']=$row["title"]."_".$row["sname"];

}

 $url='https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=Qabx7MeIeUP8pbbZvdadZMVKpjCSJ06K9uODogU0gQrRPU5qXUUZqmg7i8xH&from='.$_SESSION['name'].'&to='.$_SESSION['phone'][$key].'&body='.$_SESSION['passcode'][$key].'';

 $ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, 0);
$resp = curl_exec($ch);
curl_close($ch);

echo"<script> alert('Passcode Generated'); window.location='generate_passcode.php'</script>";


}
  

?>