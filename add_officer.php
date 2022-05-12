<?php

 session_start();

 include'config/db.php';

if (isset($_POST['submit'])) {

move_uploaded_file($_FILES["pics"]["tmp_name"],"images/" . $_FILES["pics"]["name"]);          
$location=$_FILES["pics"]["name"];
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$oname=$_POST['oname'];
$gender=$_POST['gender'];  
$rank=$_POST['rank'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];


$query=mysqli_query($connection,"SELECT * FROM officerr WHERE email='$email'");

if (mysqli_num_rows($query)>0) {

  $sms="<div class='offset-sm-3 text-center fa fa-info alert alert-danger animated fadeIn col-md-6'> Student already exist!!!</div>";

}else{


$sql= mysqli_query($connection,"INSERT INTO officer (fname,sname,oname,gender,rank,phone,email,username,password,pics) VALUES('$fname','$sname','$oname','$gender','$rank','$phone','$email','$username','$password','$location')");  

 
echo "<script> alert ('Time Table Officer Added Sucessfully!!!'); window.location='add_officer.php'</script>";
 

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
          <div class="card-header"><i class="fa fa-user"> </i> Add Officer</div>
          <div class="card-body">
        
        <form action="" method="post" enctype="multipart/form-data">
         
                    <div class="row mt-3">

                    <div class="form-group col-lg-4 col-lg-4">
                    <input type="text" class="form-control" name="fname" placeholder="Firstname" required>
                  </div>
                  <div class="form-group col-lg-4 col-lg-4">
                    <input type="text" name="sname" class="form-control" placeholder="Lastname" required>
                  </div>
                  <div class="form-group col-lg-4 col-lg-4">
                    <input type="text" name="oname" class="form-control" placeholder="Othername">
                  </div>
                  <div class="form-group col-lg-4 col-lg-4">
                    <select name="gender" class="form-control">
                      <option>Select Gender......</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>

                   <div class="form-group col-lg-4 col-lg-4">
                    <select name="rank" class="form-control" required>
                      <option>Select Rank.....</option>
                      <option value="Senior Lecturer">Senior Lecturer</option>
                      <option value="Lecturer">Lecturer</option>
                      <option value="Lecturer"> Chief Lecturer</option>
                      <option value="Lecturer">HOD</option>
                    </select>
                  </div>
                  
                   <div class="form-group col-lg-4 col-lg-4">
                    <input type="number" name="phone" class="form-control" placeholder="Mobile Number" required>
                  </div>

                   <div class="form-group col-lg-4 col-lg-4">
                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                  </div>

                  <div class="form-group col-lg-4 col-lg-4">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                  </div>

                  <div class="form-group col-lg-4 col-lg-4">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                  </div>

                  <div class="form-group col-lg-4 col-lg-4 mb-4 table-responsive">
                    <label> Upload your picture</label>
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
