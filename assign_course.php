<?php

 session_start();

 error_reporting(0);

 $sms="";

 include'config/db.php';

if (isset($_POST['submit'])) {


$lecturer=$_POST['lecturer'];
$course=$_POST['course'];
$level=$_POST['level'];
$weeks=$_POST['weeks'];
$mon=$_POST['mon'];
$tue=$_POST['tue'];
$wed=$_POST['wed'];
$thu=$_POST['thu'];
$fri=$_POST['fri'];
$class_begins=$_POST['class_begins'];
$class_ends=$_POST['class_ends'];

$query=mysqli_query($connection,"SELECT * FROM assign WHERE course='$course'");

if (mysqli_num_rows($query)>0) {

  $sms="<div class='offset-sm-3 text-center fa fa-info alert alert-danger animated fadeIn col-md-6'> Lecturer has been assign Course!!!</div>";

}else{

$sql= mysqli_query($connection,"INSERT INTO assign (lecturer,course,level,mon,tue,wed,thu,fri,class_begins,class_ends) VALUES('$lecturer','$course','$level','$mon','$tue','$wed','$thu','$fri','$class_begins','$class_ends')");  

 
echo "<script> alert ('Course Assigned Sucessfully!!!'); window.location='assign_course.php'</script>";
 

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

 <?php include 'admin_nav.php'; ?>

  <!-- Header -->
  <header class="masthead bg-primary" style=" margin-top: -120px;">
    <div class="container-fluid">
      <div class="row">
      <?php include 'admin_sidebar.php';?>
      <div class="col-md-9" style="height: 500px;">

        <div class="card mt-3">
          <div class="card-header"><i class="fa fa-user"> </i> Assign Course</div>
          <div class="card-body">
        
        <form action="" method="post" enctype="multipart/form-data">
         
                    <div class="row mt-3">

                      <?php echo $sms;?>

                      <div class="form-group col-lg-12">
                      
                        <table class="table table-responsive-md">
                            <tr>
                              <th>MON</th>
                              <th>TUE</th>
                              <th>WED</th>
                              <th>THU</th>
                              <th>FRI</th>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="mon" value="1"></td>
                              <td><input type="checkbox" name="tue" value="1"></td>
                              <td><input type="checkbox" name="wed" value="1"></td>
                              <td><input type="checkbox" name="thu" value="1"></td>
                              <td><input type="checkbox" name="fri" value="1"></td>
                            </tr>
                        </table>
                      </div>

                      <div class="form-group col-lg-3">
                        <select class="form-control" name="lecturer" required>
                          <option>Select Lecturer...</option>

                          <?php 

                          include 'config/db.php';
                          $sql=mysqli_query($connection,"SELECT * FROM lecturer");

                          while ($row=mysqli_fetch_array($sql)) {

                            ?>

                            <option value="<?php echo $row["title"]." ".$row["fname"]." ".$row["sname"]." ".$row["oname"];?>"><?php echo $row["title"]." ".$row["fname"]." ".$row["sname"]." ".$row["oname"];?></option>


                          <?php
                            
                            }

                          ?>
                          
                        </select>
                        
                      </div>

                    <div class="form-group col-lg-3">
                        <select class="form-control" name="course" required>
                          <option>Select Course...</option>

                          <?php 

                          include 'config/db.php';
                          $sql=mysqli_query($connection,"SELECT * FROM course");

                          while ($row=mysqli_fetch_array($sql)) {

                            ?>

                            <option value="<?php echo $row["ccode"]." ".$row["coursename"];?>"><?php echo $row["ccode"]." ".$row["coursename"];?></option>


                          <?php
                            
                            }

                          ?>
                          
                        </select>
                        
                      </div>


                   <div class="form-group col-lg-2">
                    <select name="level" class="form-control" required>
                      <option>Select Level.......</option>
                      <option value="100">100</option>
                      <option value="200">200</option>
                      <option value="300">300</option>
                      <option value="400">400</option>
                    </select>
                  </div>

                   <div class="form-group col-lg-2">
                    <input type="date" name="class_begins" class="form-control" required>
                  </div>

                  <div class="form-group col-lg-2">
                    <input type="date" name="class_ends" class="form-control" required>
                  </div>
                  
                   <div class="form-group col-lg-4 col-lg-4 offset-sm-4">
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
