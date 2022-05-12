      <?php

        session_start();

          $id=$_GET['id'];

        include 'config/db.php';

        $sql = mysqli_query($connection, "SELECT * FROM student WHERE student_id='$id'");

          while($row= mysqli_fetch_array($sql)){
          $regno=$row["regno"];
          $fname=$row["fname"];
          $sname=$row["sname"];
          $oname=$row["oname"];
          $gender=$row["gender"];
          $phone=$row["phone"];
          $level=$row["level"];      
          $pics=$row["pics"];
          # code...
                      }
            


 if (isset($_POST['done'])) {
                  # code...
move_uploaded_file($_FILES["pics"]["tmp_name"],"images/" . $_FILES["pics"]["name"]);          
$location=$_FILES["pics"]["name"];
$regno=$_POST['regno'];
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$oname=$_POST['oname'];
$gender=$_POST['gender'];  
$phone=$_POST['phone']; 
$level=$_POST['level'];
                  


            

            $sql= mysqli_query($connection, " UPDATE student SET regno ='$regno', fname = '$fname', sname = '$sname', oname = '$oname', gender = '$gender', phone='$phone', level ='$level', pics = '$location' WHERE student_id='$id'");

            echo "<script> alert (' Record Successfully Updated'); window.location = 'edit_student.php?id=$id'</script>";
          

          


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

  <header class="masthead bg-primary" style=" margin-top: -120px;">
<div class="container-fluid">
  <div class="row " >
  <?php include 'lecturer_sidebar.php'; ?>
    <div class="col-md-9" style="height: 610px;">
      <div class="card mb-5" style="margin-top: 20px;">
        <div class="card-header fa fa-user" style=""> Edit Student</div>
          <div class="card-body">
            <form class="form-group" action="" method="post" enctype="multipart/form-data">
              <div class="row">
                 <div class="form-group text-white col-md-3">
                  <label class="text-dark txt"> Matric No:</label>
                  <input type="text" name="regno" class="form-control" value="<?php echo $regno; ?>">
                </div>

                <div class="form-group text-white col-md-3">
                  <label class="text-dark txt"> FirstName:</label>
                  <input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>">
                </div>

                  <div class="form-group text-white col-md-3">
                    <label class="text-dark" style="opacity: 0.5;"> LastName:</label>
                    <input type="text" name="sname" class="form-control" value="<?php echo $sname; ?>">
                  </div>

                    <div class="form-group text-white col-md-3">
                      <label class="text-dark" style="opacity: 0.5;"> OtherName:</label>
                      <input type="text" name="oname" class="form-control" value="<?php echo $oname;?>">
                    </div>
                                                        
                                <div class="form-group text-white col-md-3">
                                  <label class="text-dark" style="opacity: 0.5;"> Gender:</label>
                                  <input type="text" name="gender" class="form-control" value="<?php echo $gender; ?>">
                                </div>

                                  <div class="form-group text-white col-md-3">
                                    <label class="text-dark" style="opacity: 0.5;"> Phone No:</label>
                                    <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
                                  </div>

                                    <div class="form-group text-white col-md-3">
                                      <label class="text-dark" style="opacity: 0.5;"> Level:</label>
                                      <input type="text" name="level" class="form-control" value="<?php echo $level;?>">
                                    </div>
                                        
                                            <div class="form-group text-white col-md-3">
                                                <label class="text-dark" style="opacity: 0.5;"> Picture:</label>
                                                <input type="file" name="pics" class="form-control" value="<?php echo $pics; ?>">
                                            </div>

                                              <div class=" col-md-3 offset-sm-6">
                                                  <button class="btn btn-primary" type="submit" name="done"> Submit</button>
                                              </div>

                                      </div>

                                </form>

                          </div>

                    </div>

                </div>

         </div>
            
</div>

</header>
       <!-- Footer -->
    
    <?php include 'footer.php';?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
