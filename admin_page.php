
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
  <header class="masthead bg-primary " style=" margin-top: -120px;">
    <div class="container-fluid">
      <div class="row">
          <?php include'admin_sidebar.php';?>
      <div class="col-md-9" style="height: 400px;">
        <div class="card mt-3">
          <div class="card-header"><i class="fa fa-user"> </i> Admin Dashboard</div>
          <div class="card-body">
            <div class="row">
            <div class="col-md-3 mb-3">
              <div class="card bg-primary">
                <div class="card-header"></div>
                 <!--  <div class="card-body-icon">
                    <span class="fa fa-user"></span>
                  </div> -->
                  <div class="card-body fa fa-user text-white"> Dashboard</div>
                  <div class="text-white"></div>
                  <a href="admin_page.php" class="text-white" style="text-decoration: none;">
                    <div class="card-footer">
                      <span class="">View Details</span>
                      <span class="float-right"><i class="fa fa-angle-right"></i></span></a>
                    </div>
                  
                </div>
            </div>

                       <div class="col-md-3 mb-3">
              <div class="card bg-info">
                <div class="card-header"></div>
                 <!--  <div class="card-body-icon">
                    <span class="fa fa-user"></span>
                  </div> -->
                  <div class="card-body fa fa-user text-white"> Register Lecturer</div>
                  <div class="text-white"></div>
                  <a href="admin_page.php" class="text-white" style="text-decoration: none;">
                    <div class="card-footer">
                      <span class="">View Details</span>
                      <span class="float-right"><i class="fa fa-angle-right"></i></span></a>
                    </div>
                  
                </div>
            </div>

                       <div class="col-md-3 mb-3">
              <div class="card bg-success">
                <div class="card-header"></div>
                 <!--  <div class="card-body-icon">
                    <span class="fa fa-user"></span>
                  </div> -->
                  <div class="card-body text-white fa fa-pen"> Register Course</div>
                  <div class="text-white"></div>
                  <a href="admin_page.php" class="text-white" style="text-decoration: none;">
                    <div class="card-footer">
                      <span class="">View Details</span>
                      <span class="float-right"><i class="fa fa-angle-right"></i></span></a>
                    </div>
                  
                </div>
            </div>

                       <div class="col-md-3 mb-3">
              <div class="card bg-secondary">
                <div class="card-header"></div>
                 <!--  <div class="card-body-icon">
                    <span class="fa fa-user"></span>
                  </div> -->
                  <div class="card-body fa fa-book text-white"> Assign Course</div>
                  <div class="text-white"></div>
                  <a href="admin_page.php" class="text-white" style="text-decoration: none;">
                    <div class="card-footer">
                      <span class="">View Details</span>
                      <span class="float-right"><i class="fa fa-angle-right"></i></span></a>
                    </div>
                  
                </div>
            </div>


      </div>
    </div>
  </div>
</div>
</div>            

  </header>

 
<?php include'footer.php';?>

 

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
