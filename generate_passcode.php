<?php

 session_start();

 include'config/db.php';

  $sql=mysqli_query($connection,"SELECT * FROM student");

    while ($row=mysqli_fetch_array($sql)) {

      $student_id=$row["student_id"];

    }



if (isset($_POST['submit'])) {




$btn=$_POST['submit'];
$regno=$_POST['regno'];
$passcode=$_POST['passcode']; 
$phone=$_POST['phone'];   

foreach ($btn as $key => $val) {





$sql=mysqli_query($connection,"INSERT INTO passcode(passcode,regno,student_id,phone) VALUES ('$passcode[$key]','$regno[$key]','$btn[$key]','$phone[$key]')");




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

 <?php include 'lecturer_nav.php'; ?>

  <!-- Header -->
  <header class="masthead bg-primary h-100" style=" margin-top: -100px;">
    <div class="container-fluid">
      <div class="row">
      <?php include 'lecturer_sidebar.php';?>
      <div class="col-md-9" style="height: 500px;">

         <form class="form-group" action="load.php" method="get">
     
         <fieldset class="border p-5">
           <legend class="border text-white"> Generate Passcode</legend>
           
           <div class="col-md-3 form-group">
         <select name="days" class="form-control">
          <option value="">Select Days.....</option>
          <option value="Day 1">Day 1</option>
          <option value="Day 2">Day 2</option>
          <option value="Day 3">Day 3</option>
          <option value="Day 4">Day 4</option>
          <option value="Day 5">Day 5</option>
          <option value="Day 6">Day 6</option>
          <option value="Day 7">Day 7</option>
         <option value="Day 8">Day 8</option>
         <option value="Day 9">Day 9</option>
          <option value="Day 10">Day 10</option>
           <option value="Day 11">Day 11</option>
            <option value="Day 12">Day 12</option>
             <option value="Day 13">Day 13</option>
              <option value="Day 14">Day 14</option>
               <option value="Day 15">Day 15</option>
                <option value="Day 16">Day 16</option>
                 <option value="Day 17">Day 17</option>
                 <option value="Day 18">Day 18</option>
                 <option value="Day 19">Day 19</option>
                 <option value="Day 20">Day 20</option>
         </select>
       </div>
                 

                         <button type="submit"  name="submit[]" class="btn btn-secondary btn-lg offset-sm-4 col-md-4"> Generate</button>
             
                <table class="table table-bordered text-white" id="dataTable" width="100%" style="font-size: 12px;" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Reg No</th>
                      <th>Phone</th>
                      <th></th>
                    </tr>
                  </thead>

                   <tbody>
                    
                      <?php

                      include 'config/db.php';

                      $sql=mysqli_query($connection,"SELECT * FROM student");

                      while ($row=mysqli_fetch_array($sql)) {
                        ?> 

                        <tr>
                        <td><?php echo $row["regno"];?>
                          <input type="text" name="regno[]" hidden value="<?php echo $row["regno"];?>">

                        </td>
                        <td><?php echo $row["phone"];?>
                        <input type="text" name="phone[]" hidden value="<?php echo $row["phone"];?>"></td>
                        <td><input type="text" name="passcode[]" hidden value="<?php echo rand();?>"></td>
                         <td><input type="text" name="student[]" hidden value="<?php echo $row["student_id"];?>">
                          <input type="text" name="lecturer" hidden value="<?php echo  $_SESSION['lecturer_id'];?>">
                         </td>
                        </tr>

     </form>
                        <?php
                        
                      }


                      ?>


                  </tbody>
                 

                </table>


         </fieldset>
  


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
