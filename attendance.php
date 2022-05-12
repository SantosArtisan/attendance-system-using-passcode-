<?php

 session_start();

$sms="";
 include'config/db.php';



if (isset($_POST['submit'])) {

  $_SESSION['passcode']=$_POST['passcode'];


$sql=mysqli_query($connection,"SELECT * FROM passcode WHERE passcode ='".$_SESSION['passcode']."' ");

if (mysqli_num_rows($sql)>0) {

  header("location:attendance_m.php");

}else{

  $sms="<div class='text-center col-md-6 alert alert-danger fa fa-info offset-sm-3'> Invalid Passcode</div>";
}



}


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Attendance Management System</title>
    <link href="images/grad.jpg" rel="icon" type="image/jpg">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="animate.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/freelancer.min.css" rel="stylesheet">

<style type="text/css">
   .navv a{
      color: #fff;
    }
    .navv ul li a:hover{
      color: #fff;
      background-color: lightblue;
    }

 </style>


</head>

<body id="page-top">

 <?php include 'index_nav.php'; ?>

  <!-- Header -->
  <header class="masthead bg-primary h-100" style=" margin-top: -100px;">
    <div class="container-fluid">
      <div class="row">
      <div class="col-md-9" style="height: 500px;">

       <form class="form-group" action="" method="post">
         <fieldset class="border p-5 offset-sm-4">
           <legend class="border text-white text-center"> Mark Attendance</legend>
           <div class="row">
            <?php echo $sms;?>
            <div class="form-group col-md-8 mb-4 offset-sm-2">
               <input type="number" name="passcode" class="form-control" placeholder="Please Input Your Passcode" required>
            </div>
           
            <div class="form-group col-md-12 offset-sm-3">
              <button type="submit" name="submit" class="btn btn-info  offset-sm-0 col-md-6"> Submit</button>
            </div>

              </div>   

             
         </fieldset>
       </form>
      </div>
     </div>
    </div>
   </header>  

<?php include 'footer.php';?>

 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

</body>

</html>
