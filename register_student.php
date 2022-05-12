<?php

 session_start();

 $sms="";

 include'config/db.php';

$query=mysqli_query($connection,"SELECT * FROM lecturer WHERE username='".$_SESSION['username']."'");

while ($row=mysqli_fetch_array($query)) {
  
  $lecturer_id=$row["lecturer_id"];

}

if (isset($_POST['submit'])) {

move_uploaded_file($_FILES["pics"]["tmp_name"],"images/" . $_FILES["pics"]["name"]);          
$location=$_FILES["pics"]["name"];
$regno=$_POST['regno'];
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$oname=$_POST['oname'];
$gender=$_POST['gender'];  
$phone=$_POST['phone']; 
$level=$_POST['level'];


$query=mysqli_query($connection,"SELECT * FROM student WHERE regno='$regno'");

if (mysqli_num_rows($query)>0) {

  $sms="<div class='offset-sm-3 text-center fa fa-info alert alert-danger animated fadeIn col-md-6'> Student already exist!!!</div>";

}else{


$sql= mysqli_query($connection,"INSERT INTO student (regno,fname,sname,oname,gender,phone,level,pics,lecturer_id) VALUES('$regno','$fname','$sname','$oname','$gender','$phone','$level','$location','$lecturer_id')"); 

$query=mysqli_query($connection,"SELECT * FROM student WHERE regno='$regno'");

while ($row=mysqli_fetch_array($query)) {
  
  $regno=$row["regno"];
  $student_id=$row["student_id"];
  $phone=$row["phone"];
}

/*$sql=mysqli_query($connection,"INSERT INTO passcode(regno,student_id,lecturer_id,phone) VALUES ('$regno','$student_id','".$_SESSION['lecturer_id']."','$phone')"); */

 
echo "<script> alert ('Student Resgisterd Sucessfully!!!'); window.location='register_student.php'</script>";


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

  <title>Attendance Management System</title>
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
  <header class="masthead bg-primary h-100" style=" margin-top: -120px;">
    <div class="container-fluid">
      <div class="row">
      <?php include 'lecturer_sidebar.php';?>
      <div class="col-md-9" style="height: 400px;">

        <div class="card mt-3">

          <div class="card-header"><i class="fa fa-user"> </i> Register Student</div>
          <div class="card-body"> 

         
        <form action="" method="post" enctype="multipart/form-data">
         
                    <div class="row mt-3">

                       <?php echo $sms;?> 


                    <div class="form-group col-lg-4 col-lg-4">
                    <input type="text" class="form-control" name="regno" placeholder="Enter Reg No E.G KPT/CST/16/12031" required>
                  </div>

                  <div class="form-group col-lg-4 col-lg-4">
                    <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                  </div>

                  <div class="form-group col-lg-4 col-lg-4">
                    <input type="text" name="sname" class="form-control" placeholder="Surname" required>
                  </div>

                  <div class="form-group col-lg-4 col-lg-4">
                    <input type="text" name="oname" class="form-control" placeholder="Othername">
                  </div>

                  <div class="form-group col-lg-4 col-lg-4">
                    <select name="gender" class="form-control" required>
                      <option>Select Gender......</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>

                  <div class="form-group col-lg-4 col-lg-4">
                    <input type="number" name="phone" class="form-control" placeholder="Mobile Phone">
                  </div>

                   <div class="form-group col-lg-4 col-lg-4">
                    <select name="level" class="form-control" required>
                      <option>Select Level..</option>

                          <?php 

                          include 'config/db.php';
                          $sql=mysqli_query($connection,"SELECT * FROM assign");

                          while ($row=mysqli_fetch_array($sql)) {

                            ?>

                            <option value="<?php echo $row["level"];?>"><?php echo $row["level"];?></option>


                          <?php
                            
                            }

                          ?>
                          
                        </select>
                                 
                    </select>
                  </div>

                   <div class="form-group col-lg-4 col-lg-4">
                    <input type="file" name="pics" class="form-control">
                  </div>

                   <div class="form-group col-lg-4 col-lg-4 offset-sm-8">
                    <button name="submit" class="btn btn-info fa fa-send w-100"> Submit</button>
                  </div>

                </div>
              </form>



  </div>
 
</div>
              
                 

          </div>
        </div>
       
         
        
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
