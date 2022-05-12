      <?php

        session_start();

          $id=$_GET['id'];

        include 'config/db.php';

        $sql = mysqli_query($connection, "SELECT * FROM lecturer WHERE lecturer_id='$id'");

          while($row= mysqli_fetch_array($sql)){
          $title=$row["title"];  
          $fname=$row["fname"];
          $sname=$row["sname"];
          $oname=$row["oname"];
          $gender=$row["gender"];
          $rank=$row["rank"];
          $level=$row["level"];
          $phone=$row["phone"];
          $email=$row["email"];
          $username=$row["username"];
          $password=$row["password"];        
          $pics=$row["pics"];
          # code...
                      }
            


            if (isset($_POST['done'])) {
                  # code...
           move_uploaded_file($_FILES["pics"]["tmp_name"],"images/" . $_FILES["pics"]["name"]);          
          $location=$_FILES["pics"]["name"];
          $title=$_POST['title'];
          $fname =$_POST['fname'];
          $sname =$_POST['sname'];
          $oname =$_POST['oname'];;
          $gender =$_POST['gender'];
          $rank =$_POST['rank'];
          $level =$_POST['level'];
          $phone =$_POST['phone'];
          $email =$_POST['email'];
          $username =$_POST['username'];
          $password =$_POST['password'];
                  


            

            $sql= mysqli_query($connection, " UPDATE lecturer SET title='$title', fname = '$fname', sname = '$sname', oname = '$oname', gender = '$gender', rank = '$rank', level ='$level', phone='$phone', email='$email', username='$username', password = '$password', pics = '$location' WHERE admin_id='$id'");

            echo "<script> alert (' Record Successfully Updated'); window.location = 'edit_lecturer.php?id=$id'</script>";
          

          


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

  <header class="masthead bg-primary" style=" margin-top: -120px;">
<div class="container-fluid">
  <div class="row " >
  <?php include 'admin_sidebar.php'; ?>
    <div class="col-md-9" style="height: 610px;">
      <div class="card mb-5" style="margin-top: 20px;">
        <div class="card-header fa fa-user" style=""> Edit Lecturer</div>
          <div class="card-body">
            <form class="form-group" action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group text-white col-md-3">
                  <label class="text-dark txt"> FirstName:</label>
                  <input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>">
                </div>

                  <div class="form-group text-white col-md-3">
                    <label class="text-dark" style="opacity: 0.5;"> LastName:</label>
                    <input type="text" name="lname" class="form-control" value="<?php echo $sname; ?>">
                  </div>

                    <div class="form-group text-white col-md-3">
                      <label class="text-dark" style="opacity: 0.5;"> OtherName:</label>
                      <input type="text" name="oname" class="form-control" value="<?php echo $oname; ?>">
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
                                      <label class="text-dark" style="opacity: 0.5;"> Email:</label>
                                      <input type="text" name="email" class="form-control" value="<?php echo $email;?>">
                                    </div>

                                    <div class="form-group text-white col-md-3">
                                            <label class="text-dark" style="opacity: 0.5;"> Username:</label>
                                            <input type="text" name="username" class="form-control" value="<?php echo $username;?>">
                                          </div>
                                        

                                          <div class="form-group text-white col-md-3">
                                            <label class="text-dark" style="opacity: 0.5;"> Password:</label>
                                            <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
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
