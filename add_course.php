<?php

 session_start();

 include'config/db.php';


if (isset($_POST['submit'])) {


$ccode=$_POST['ccode'];
$coursename=$_POST['coursename'];


$sql= mysqli_query($connection,"INSERT INTO course (ccode,coursename) VALUES('$ccode','$coursename')");  

 
echo "<script> alert ('Course Added Sucessfully!!!'); window.location='add_course.php'</script>";
 

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

 <?php include 'admin_nav.php'; ?>

  <!-- Header -->
  <header class="masthead bg-primary h-100" style=" margin-top: -120px;">
    <div class="container-fluid">
      <div class="row">
      <?php include 'admin_sidebar.php';?>
      <div class="col-md-9">

        <div class="card mt-3">
          <div class="card-header"><i class="fa fa-user"> </i> Add Course</div>
          <div class="card-body">
        
        <form action="" method="post" enctype="multipart/form-data">
         
                    <div class="row mt-3">

                    <div class="form-group col-lg-4 col-lg-4">
                    <input type="text" class="form-control" name="ccode" placeholder="Course Code" required>
                  </div>
                  <div class="form-group col-lg-4 col-lg-4">
                    <input type="text" name="coursename" class="form-control" placeholder="Course Title" required>
                  </div>
              
                   <div class="form-group col-lg-4 col-lg-4">
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
