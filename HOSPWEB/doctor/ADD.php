<?php
include('session.php');
if(isset($_POST['submit']))
{

$add=$_POST['email'];

$pres=$_POST['pres'];
$dia=$_POST['dia'];
$symp=$_POST['Symp'];
$aid=$_POST['app'];

$u=$_SESSION['username'];
$query3 = "SELECT *  FROM `doctor` where Email='$u'";
$result3 = mysqli_query($con, $query3);
$row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
$rot=$row3["fullname"];


                            $query4 = "SELECT * FROM `appointment` WHERE ID='$aid'";
                            $result4 = mysqli_query($con, $query4);
                            

                            

                            if(mysqli_num_rows($result4)==0 ){
                                if(mysqli_num_rows($result4)==2 ){

                                echo "<script>alert('This is may not be a valid Appoint ID.');</script>";
                                    //header('location:user-login.php');
                            }
                        }
                        else{

                            $query6 = "UPDATE `appointment` SET `status`='Done' WHERE ID='$aid'";
                            $result6 = mysqli_query($con, $query6);
							$query6 = "UPDATE `patient` SET `ver`=1 WHERE Email='$add'";
                            $result6 = mysqli_query($con, $query6);
$query=mysqli_query($con,"INSERT INTO `patientent`(  `Email`, `doc`, `Symptoms`, `diagnosis`, `prescription`, `AppNo`) 
VALUES
 ('$add','$rot','$symp','$dia','$pres','$aid')");
if($query)
{
	echo "<script>alert('Successfully Added. ');</script>";
	//header('location:user-login.php');
}
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>DOCTOR</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
        <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="styles.css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 
        <script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.password_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.password_again.focus();
return false;
}
return true;
}
</script>
    
</head>

<body class="pos">
		<!-- start: REGISTRATION -->
        <div class="sidebar">
  <a class="active" href="#">Dashboard</a>
  <a class="active" href="appointment-history.php">Appointments</a>
  <a  class="active" href="patients.php">Patients</a>
  
 </div>


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
                <a class="nav-link" href="doctor-panel.php">Dashboard</a>
              </li>
              
              <li class="nav-item custom-nav-item">
                <a class="nav-link" href="logout.php">LOGOUT</a>
              </li>
             
            </ul>
          </div>
        </div>
</nav>



		<div class="row" style="margin-left: 200px;">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="doctor-panel.html"><h2>Adding Pateint and Details.</h2></a>
				</div>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form name="registration" id="registration"  method="post" onSubmit="return valid();">
						<fieldset>
							<legend>
								ENTRY
							</legend>
							<p>
								Enter Patients  details below:
							</p>
							
							<div class="form-group">
								<input type="text" class="form-control" name="email" placeholder="Patinets Email" required>
							</div>
                            
                            
							<div class="form-group">
								<input type="text" class="form-control" name="Symp" placeholder="Symptops" style="height: 60px;" required>
							</div>
                            <div class="form-group">
								<input type="text" class="form-control" name="pres" placeholder="Prescription" style="height: 60px;" required>
							</div>
                            <div class="form-group">
								<input type="text" class="form-control" name="dia" placeholder="Diagnosis" style="height: 60px;" required>
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" name="app" placeholder="Appointment ID" required>
							</div>
							
							
							<div class="form-actions">
							
								<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
									Submit <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>

					

				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				
			});
		</script>
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
		
	</body>
	<!-- end: BODY -->
</html>