<?php
 session_start();

 include'config/db.php';

  $sql = mysqli_query($connection, "SELECT * FROM passcode 

    LEFT JOIN student on student.student_id=passcode.student_id WHERE passcode ='".$_SESSION['passcode'].
    "'
 ");

          while($row= mysqli_fetch_array($sql)){

          $fname=$row["fname"];
          $sname=$row["sname"];
          $oname=$row["oname"];
          $level=$row["level"];
          $regno=$row["regno"];      
          $pics=$row["pics"];
          $gender=$row["gender"];

}


if (isset($_POST['submit'])) {


/* move_uploaded_file($_FILES["pics"]["tmp_name"],"images/" . $_FILES["pics"]["name"]);          
$location=$_FILES["pics"]["name"];
$regno=$_POST['regno'];
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$oname=$_POST['oname'];
$gender=$_POST['gender'];  
$level=$_POST['level'];*/
$mark=$_POST['mark'];

  $query = mysqli_query($connection, "UPDATE passcode set mark ='$mark' WHERE passcode ='".$_SESSION['passcode'].
    "' ");

  echo "<script>alert ('Attendance Mark Successfully!!!'); window.location='index.php'</script>";

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

 <?php include 'index_nav.php'; ?>

  <!-- Header -->
  <header class="masthead bg-primary " style=" margin-top: -100px;">
    <div class="container-fluid"> 
      <div class="row">
  
      <div class="col-md-7 offset-sm-2">

        <div class="card mt-3">
          <div class="card-header"><i class="fa fa-user"> </i> Mark Attendance </div>
          <div class="card-body"> 

            <form action="" method="post">
         <div class="row">

         <div class="col-lg-3">
              <div class="" >
                <img src="images/<?php echo $pics;?>" height="180" width="150" style="border-radius: 30px; border: 7px solid;">
                                  
              </div>
          </div>

          <div class="col-md-4"> 
              <table class="table table-responsive-md table-hover table-striped" style="font-size: 12px;">
                  <th>Name:</th>
                  <td class="text-info"><?php echo $fname." ".$sname." ".$oname; ?></td>
                </tr>
                 <tr>
                <th>Reg No:</th>
                <td class="text-info"><?php echo $regno; ?></td>
              </tr>
               <tr>
                <th>Gender:</th>
                <td class="text-info"><?php echo $gender; ?></td>
              </tr>
               <tr>
                <th> Level:</th>
                <td class="text-info"><?php echo $level; ?></td>
              </tr>

              <tr>
                <th> Mark:</th>
                <td><input type="checkbox" name="mark" value="1"></td>
              </tr>

              <tr>
               
                <td><button class="btn btn-primary offset-10" type="submit" name="submit"> Submit</button> </td>
              </tr>
            
              </table>
          </div>

        </div>
       
      </div>
  </div>

  </div>
</div>
           </div>
              </div>
                </form> 

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
