
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
  <header class="masthead bg-primary" style=" margin-top: -120px;">
    <div class="container-fluid">
      <div class="row">
      <?php include 'lecturer_sidebar.php';?>
       <div class="col-md-9" style="height: 500px;">
              <!-- DataTables Example -->
          <div class="card mt-3 ">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Attendance Report
        
        </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" style="font-size: 12px;" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Reg No</th>
                      <th>Names</th>
                      <th>Gender</th>
                      <TH>Class Attendance Days</TH>
                         <?php

                      include 'config/db.php';

                      $sql3=mysqli_query($connection,"SELECT DISTINCT days FROM passcode");

                      while ($row=mysqli_fetch_array($sql3)) {

                      }
                        ?> 
          
                         
    
                   <!--  <tr>
                       <?php

                      include 'config/db.php';

                      $sql=mysqli_query($connection,"SELECT * FROM assign");

                      while ($row=mysqli_fetch_array($sql)) {
                        ?> 

                      <td colspan="3"><?php echo $row["mon"]?></td>
                       <td colspan="3"><?php echo $row["tue"]?></td>
                        <td colspan="3"><?php echo $row["wed"]?></td>
                         <td colspan="3"><?php echo $row["thu"]?></td>
                          <td colspan="3"><?php echo $row["fri"]?></td>

                        <?php
                      }
                      ?>
                    </tr> -->
                  </thead>

                   <tbody>
                    
                      <?php

                      include 'config/db.php';

                      $sql=mysqli_query($connection,"SELECT * FROM student");

                      while ($row=mysqli_fetch_array($sql)) {
                        ?> 


                        <tr>
                        <td><?php echo $row["regno"];?></td>
                        <td><?php echo $row["fname"]." ".$row["sname"]." ".$row["oname"];?></td>
                        <td><?php echo $row["gender"];?></td>

                        <td>



                         <?php

                      include 'config/db.php';

                      $sql1=mysqli_query($connection,"SELECT DISTINCT mark, days FROM passcode");

                      while ($row=mysqli_fetch_array($sql1)) { 

                             

                          if ($row["mark"]==1) {

                           echo "<input type='checkbox'name='' checked > &nbsp; &nbsp; &nbsp; &nbsp;";


                          }else{

                              echo "<input type='checkbox' name=''> &nbsp; &nbsp; &nbsp; &nbsp;";

                      }

                      }
                        ?> 

                      </td>
                      </tr>
                     

                        <?php




                        
                      }


                      ?>


                  </tbody>



                  

                </table>

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
