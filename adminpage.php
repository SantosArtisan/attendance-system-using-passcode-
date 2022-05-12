<?php
 session_start();
 include'config/db.php';
$error="";
$sms="";
if (isset($_POST['submit'])) {

move_uploaded_file($_FILES["pic"]["tmp_name"],"images/" . $_FILES["pic"]["name"]);
move_uploaded_file($_FILES["sign"]["tmp_name"],"images/" . $_FILES["sign"]["name"]);        
$picture=$_FILES["pic"]["name"];
$sign=$_FILES["sign"]["name"];
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$oname=$_POST['oname'];
$gender=$_POST['gender'];
$state=$_POST['state'];
$dob=$_POST['dob'];
$lg=$_POST['lg'];  
$blood=$_POST['blood'];
$phone=$_POST['phone'];
$_SESSION['regno']=$_POST['regno'];

$query=mysqli_query($connection, "SELECT * FROM students WHERE regno='".$_SESSION['regno']."'");

if (mysqli_num_rows($query)>0) {

    $error="<div class='alert alert-danger  fa fa-info animated fadeIn '> Registration No. already exist.</div>";
}else{

$sql= mysqli_query($connection,"INSERT INTO students(fname,sname,oname,regno,gender,dob,state,lg,blood,phone,sign,picture) VALUES('$fname','$sname','$oname','".$_SESSION['regno']."','$gender','$dob','$state','$lg','$blood','$phone','$sign','$picture')");  

echo $sms="<div class='alert alert-success fa fa-info animated fadeIn '> Loging Successfully......</div>";
 
echo "<script> window.location='student_registration.php'</script>";
 
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

  <title>ID Card Issuance System</title>
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
  <header class="masthead bg-primary " style=" margin-top: -100px;">
    <div class="container-fluid">
      <div class="col-md-10 ">

        <div class="card mt-3">
          <div class="card-header"><i class="fa fa-user"> </i>  Students Registration Form</div>
          <div class="card-body">
            
             <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Information</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Unit/Department</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Submit</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active nav-fill" id="home" role="tabpanel" aria-labelledby="home-tab">
        
        <form action="" method="post" enctype="multipart/form-data">
         
                    <div class="row mt-3">

                    <div class="form-group col-lg-4 col-lg-4">
                    <input type="text" class="form-control" name="fname" placeholder="Firstname" required>
                  </div>
                  <div class="form-group col-lg-4 col-lg-4">
                    <input type="text" name="sname" class="form-control" placeholder="Surname">
                  </div>
                  <div class="form-group col-lg-4 col-lg-4">
                    <input type="text" name="oname" class="form-control" placeholder="Othername">
                  </div>
                  <div class="form-group col-lg-4 col-lg-4">
                    <select name="gender" class="form-control">
                      <option>Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                   <div class="form-group col-lg-4 col-lg-4">
                    <select name="state" class="form-control">
                      <option>Select State</option>
                       <?php

                  require_once('config/db.php');

                     
             // $connection=mysqli_connect("localhost", "root", "", "abm");
            $query = mysqli_query($connection, "SELECT * FROM states");
            
            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                     
              ?>
                      <option value="<?php echo $row['State'] ?>"><?php echo $row['State'] ?></option>
                    <?php
                  }
                  ?>
                    </select> 
                  </div>

                  <div class="form-group col-lg-4 col-lg-4">
                    <input type="text" name="lg" class="form-control" placeholder="LGA">
                  </div>
                  <div class="form-group col-lg-4 col-lg-4">
                    <input type="date" name="dob" class="form-control" placeholder="Date of Birth">
                  </div>
                  
                   <div class="form-group col-lg-4 col-lg-4">
                    <input type="number" name="phone" class="form-control" placeholder="Mobile Number">
                  </div>
                  <div class="form-group col-lg-4 col-lg-4">
                    <select name="blood" class="form-control">
                      <option>Blood Group</option>
                      <option value="0+">0+</option>
                      <option value="0-">0-</option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                    </select>
                  </div>
                 
                  <div class="form-group col-lg-4 col-lg-4">
                      <?php echo $error; ?>
                    <input type="text" name="regno" class="form-control" placeholder="Registration No. (e.g) KPT/CST/16/12050">
                  </div>
                  
                   <div class="form-group col-lg-4 col-lg-4 table-responsive">
                    <label> Upload your signature</label>
                    <input type="file" name="sign" class="form-control">
                  </div>
                  <div class="form-group col-lg-4 col-lg-4 mb-4 table-responsive">
                    <label> Upload your picture</label>
                    <input type="file" name="pic" class="form-control">
                  </div>
                  <div class="form-group col-lg-4 col-lg-4 mb-4 animated fadeIn">
                    <?php echo $sms; ?>
                  </div>
                   <div class="form-group col-lg-4 col-lg-4 offset-sm-8">
                    <button name="submit" class="btn btn-info fa fa-send w-100"> Save and continue</button>
                  </div>

                </div>
              </form>



  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    
            <form action="" method="post" enctype="multipart/form-data">
                    <div class="row mt-3 " style="height: 280px;">
                       <div class="form-group col-lg-4 col-lg-4">
                    <select name="unit" class="form-control">
                      <option>Select your unit</option>
                      <option value="CST">CST</option>
                      <option value="COE">COE</option>
                      <option value="CES">CES</option>
                      <option value="CBMS">CBMS</option>
                      <option value="CASS">CASS</option>
                    </select>
                  </div>
                    <div class="form-group col-lg-4 col-lg-4">
                    <input type="text" class="form-control" name="department" placeholder="Department" required>
                  </div>
                  <div class="form-group col-lg-4 col-lg-4">
                    <select name="programe" class="form-control">
                      <option>Select programe</option>
                      <option value="ND">ND</option>
                      <option value="HND">HND</option>
                    </select>
                  </div>
                  
                  
                   <div class="form-group col-lg-4 col-lg-4">
                    <input type="number" name="doe" class="form-control" placeholder="Date of entry">
                  </div>
                   <div class="form-group col-lg-4 col-lg-4">
                    <input type="number" name="dog" class="form-control" placeholder="Date of graduation">
                  </div>
                  <div class="form-group col-lg-4 col-lg-4">
                    <select name="level"  class="form-control">
                      <option>Select Level</option>
                      <option value="100">100</option>
                      <option value="200">200</option>
                      <option value="300">300</option>
                      <option value="400">400</option>
                    </select>
                  </div>
                 
                  
                  
                   <div class="form-group col-lg-4 col-lg-4 offset-sm-8">
                    <button name="submit" class="btn btn-info fa fa-send w-100"> Save and continue</button>
                  </div>

                </div>
              </form>

  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">.ddd..</div>
</div>
              
                 

          </div>
        </div>
       
         
        
      </div>
      
    </div>
  </header>

 

<div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; ID Card Issuance System 2019</small>
    </div>
  </div>

 

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
