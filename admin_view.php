<?php
 session_start();
 include('config/db.php');


$user=$_GET['regno'];

    $query = mysqli_query($connection, "SELECT * FROM students
    LEFT JOIN department on department.student_Id = students.student_Id WHERE regno='$user' ");
   
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

     $student_Id = $row["student_Id"];
     $fname = $row["fname"];
     $sname = $row["sname"];
     $oname = $row["oname"];
     $gender = $row["gender"];
     $state = $row["state"];
     $phone = $row["phone"];
     $dob = $row["dob"];
     $programe = $row["programe"];
     $department = $row["department"];
     $blood = $row["blood"];
     $regno = $row["regno"];
     $level = $row["level"];
     $yoe=$row["yoe"];
     $yog = $row["yog"];
     $pic = $row["picture"];
     $unit = $row["unit"];
     $signature = $row["sign"];
     
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
          <div class="col-lg-12 col-lg-4 mb-5">
              <p></p>
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-user"></i>
              Student Profile 
        </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-3 mb-4 table-bordered" style="border: 10px solid black; height: 220px;">
                   <div class="mt-2" style="border-radius: 50px;">
                      <img src="images/<?php echo $pic; ?>" width="180" height="180" style="border-radius: 130px;" >
                  </div>
                </div>
                <div class="col-lg-4">
                  <table width="100" class="table table-responsive  w-100 tabl">
                    <tr>
                      <th>Name: </th>
                      <td class="text-info"><?php echo $fname." ".$sname." ".$oname; ?></td>
                    </tr>
                    <tr>
                      <th>Gender : </th>
                      <td class="text-info"><?php echo $gender; ?></td>
                    </tr>
                    <tr>
                      <th>Date of Birth : </th>
                      <td class="text-info"><?php echo $dob; ?></td>
                    </tr>
                    <tr>
                      <th>Blood Group : </th>
                      <td class="text-info"><?php echo $blood; ?></td>
                    </tr>
                    <tr>
                      <th>State: </th>
                      <td class="text-info"><?php echo $state; ?></td>
                    </tr>
                  </table>
                </div>
                <div class="col-lg-5">
                  <table width="100" class="table table-responsive  w-100 tabl" >
                    
                    <tr>
                      <th>Moblie Number: </th>
                      <td class="text-info"><?php echo $phone; ?></td>
                    </tr>
                    <tr>
                      <th>Program: </th>
                      <td class="text-info"><?php echo $programe; ?></td>
                    </tr>
                    <tr>
                      <th>Department: </th>
                      <td class="text-info"><?php echo $department; ?></td>
                    </tr>
                    <tr>
                      <th>level: </th>
                      <td class="text-info"><?php echo $level; ?></td>
                    </tr>
                    <tr>
                      <th>Registration Number: </th>
                      <td class="text-info"><?php echo $regno; ?></td>
                    </tr>
                  </table>
                </div>
                <div class="col-lg-7">
                  <table width="100" class="table table-responsive  w-100 tabl">
                    <tr>
                      <th style="width: 300px;">Student Signature: </th>
                      <td class="text-info" style="font-size: 14px; width: 900px;"><img src="images/<?php echo $signature; ?>" width="60" height="50"></td>
                    </tr>
                   
                  
                    
                  </table>
                </div>
                

              </div>
              
       
</div>
          
        </div>

          </div>
              


              
    </div>
  </header>

 

<div class="copyright py-4 text-center text-white fixed-bottom">
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
