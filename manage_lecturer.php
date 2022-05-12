
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
              <!-- DataTables Example -->
          <div class="card mt-3 ">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Manage Lecturer
        
        </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" style="font-size: 12px;" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Lecturer_Name</th>
                      <th>Gender</th>
                      <th>Mobile No.</th>
                      <th>Rank</th>
                      <th>Action</th>
                      <th>Action</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                   <tbody>
                    
                      <?php

                      include 'config/db.php';

                      $sql=mysqli_query($connection,"SELECT * FROM lecturer");

                      while ($row=mysqli_fetch_array($sql)) {
                        ?> 



                        <td><?php echo $row["title"];?></td>
                        <td><?php echo $row["fname"]." ".$row["sname"]." ".$row["oname"];?></td>
                        <td><?php echo $row["gender"];?></td>
                        <td><?php echo $row["phone"];?></td>
                        <td><?php echo $row["rank"];?></td>
                        <td><a href="view_lecturer.php?id=<?php echo $row['lecturer_id'];?>" class="btn btn-info btn-sm">View Details</a></td>
                        <td><a href="edit_lecturer.php?id=<?php echo $row['lecturer_id'];?>" class="btn btn-success btn-sm">Edit</a></td>
                        <td><a href="delete_lecturer.php?id=<?php echo $row['lecturer_id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure You Want to Delete this Record!!!')" >Delete</a></td>

                        <?php




                        
                      }


                      ?>


                  </tbody>



                  <tfoot>
                    <tr>

                      <th>Title</th>
                      <th>Lecturer_Name</th>
                      <th>Gender</th>
                      <th>Mobile No.</th>
                      <th>Rank</th>
                      <th>Action</th>
                      <th>Action</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                 

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
