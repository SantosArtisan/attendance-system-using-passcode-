<?php
include 'config/db.php';
$msg="";
session_start();

if(isset($_POST['submit'])){

$_SESSION['username'] = $_POST['username'];
$password = $_POST['password'];


if($_SESSION['username']&&$password){
  
  
  
 
  $sql= mysqli_query($connection,"SELECT * FROM officer WHERE username='".$_SESSION['username']."'");
  
  $numrows=(mysqli_num_rows($sql));
  
  if($numrows !=0)
  {
    
    while($row=mysqli_fetch_array($sql))
    {
      
    $dbuser=$row["username"];
    $dbpass=$row["password"];
      
    }
    
    if($_SESSION['username']==$dbuser)
    {
      
      if($password==$dbpass)
      {

        header("location: admin_dashboard.php");
 
        
      }else{
        
        $msg="<p class='alert alert-danger'>Incorrect password</p>";
      
      }
      
      
    }else{
      
      echo "incorrect username";
      
      }
  }else {

      $msg="<p class='alert alert-danger'>Incorrect username or password</p>"; 
      
    
  }
  
  
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

 <?php include 'index_nav.php'; ?>

  <!-- Header -->
  <header class="masthead bg-primary  text-white text-center" style="height: 700px; margin-top: -90px;">
    <div class="container">
      <div class="col-md-4 offset-sm-4">
       
              <div class="card card-login mx-auto mt-5 col-lg-12 col-lg-12" >
        
        <div class="card-header text-dark">Admin Login</div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group mb-4">
              <?php echo $msg; ?>
              
                <input type="text" name="username"  class="form-control" placeholder="Username" required="required" autofocus="autofocus">
               
            </div>
            <div class="form-group mb-4">
              
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
               
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  <txt class="text-info">Remember Password</txt>
                </label>
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Login</button>
          </form>
          <div class="text-center">
        
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div> 


      </div>
     
      <hr class="">
      <h2 class="animated bounceInDown"></h2>
      <h3 class="font-weight-light mb-3 animated bounceInDown"> Admin Login Page!</h3>
      
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
