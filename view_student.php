<?php
 session_start();

 include'config/db.php';

 $id=$_GET['id'];

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
  <header class="masthead bg-primary " style=" margin-top: -100px;">
    <div class="container-fluid"> 
      <div class="row">
      <?php include 'lecturer_sidebar.php';?>
      <div class="col-md-8">

        <div class="card mt-3">
          <div class="card-header"><i class="fa fa-user"> </i>  View Resitered Student</div>
          <div class="card-body">
         <div class="row">
          <div class="col-md-3">
            <img src="images/<?php echo $pics;?>" height="180" width="150" style="border-radius: 30px; border: 7px solid;">
          </div>
          <div class="col-md-4"> 
              <table class="table table-responsive-md table-hover table-striped" style="font-size: 12px;">
                   <tr>
                   <th> Matric Number:</th>
                  <td class="text-info"><?php echo $regno; ?></td>
                  </tr>
                  <th>Name:</th>
                  <td class="text-info"><?php echo $fname." ".$sname." ".$oname; ?></td>
                </tr>
               <tr>
                <th>Gender:</th>
                <td class="text-info"><?php echo $gender; ?></td>
              </tr>
            
              </table>
          </div>

          <div class="col-md-4"> 
              <table class="table table-responsive-md table-hover table-striped" style="font-size: 12px;">
                <tr>
              <tr>
                <th>Level:</th>
                <td class="text-info"><?php echo $level; ?></td>
              </tr>
               <tr>
                <th>Phone:</th>
                <td class="text-info"><?php echo $phone; ?></td>
              </tr>
              
               <tr>
           

              </table>
          </div>

        </div>
       
      </div>
  </div>

  </div>
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
