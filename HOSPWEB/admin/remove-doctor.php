<?php
   include('session.php');
//    $con=mysqli_connect("localhost","root","","hmsdd");
if(isset($_POST['submit'])){
	$username=$_POST['Email'];
	$password=$_POST['password'];
	$query="select * from doctor where Email='$username' ;";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		
		$q="DELETE FROM `doctor` WHERE `email`='$username'";
		$result = mysqli_query($con, $q);
		header("Location:admin-panel.php");
	}
	else
		echo "<script>alert('Email is incorrect.')</script>";
		echo"<script>window.open('remove-doctor.php','_self')</script>";

        
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="background:url('backgroundimg.jpeg'); background-size: cover;">
    
  <div class="sidebar">
  <a class="active" href="#">Dashboard</a>
  <a class="active" href="appointment-history.php">Appointments</a>
  <a  class="active" href="patients.php">Patients</a>
  <a  class="active" href="records.php">Records</a>
  <a  class="active" href="doctor.php">Doctor</a>
  
 </div>
 <!-- <div class="col-sm-3 col-md-2 sidebar">
<ul class="nav nav-sidebar">
    <li class="active"><a class="active" href="#">Dashboard</a></li>
    <li> <a class="active" href="book-appointment.php">Book Appointment</a></li>
    <li><a  class="active" href="appointment-history.php">Appointment History</a></li>
    <li><a  class="active" href="manage-medhistory.php">Medical History</a></li>
</ul>
</div> -->





<nav class="navbar navbar-expand-lg bg-light pl-8">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;HOSPITAL-MS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto custom-nav">
              <li class="nav-item custom-nav-item">
                <a class="nav-link active" aria-current="page" href="logout.php">Home</a>
              </li>
              <li class="nav-item custom-nav-item">
                <a class="nav-link" href="admin-panel.php">Dashboard</a>
              </li>
              
			  <li class="nav-item custom-nav-item">
                <a class="nav-link" href="logout.php">LOGOUT</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
  





  
  <div class="container-fluid" style="margin-top:160px;margin-bottom:60px;margin-left:200px;color:#34495E;">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
            
            <div class="card-body">
              <center>
              <h5>Doctor Deletion</h5><br>
              <form class="form-group" method="post" >
                <div class="row">
                  <div class="col-md-4"><label>Doctor Email: </label></div>
                  <div class="col-md-8"><input type="text" name="Email" class="form-control" placeholder="enter Email" required/></div><br><br>
                 </div>
                <center><input type="submit" id="inputbtn" name="submit" value="Delete" class="btn btn-primary"></center>
              </form>
            </center>
            </div>
          </div>
        </div>
         <div class="col-md-7"></div>
      </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
