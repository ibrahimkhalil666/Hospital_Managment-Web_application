<?php
include('session.php');

$query = "SELECT *  FROM `specialization` ";
   $result1 = mysqli_query($con, $query);

if(isset($_POST['submit']))
{
	$name=$_POST['full_name'];
	$add=$_POST['email'];
	$city=$_POST['City'];
	$address=$_POST['address'];
	
	$contact=$_POST['con'];
	$password=$_POST['password'];
	$special=$_POST['special'];
	
	$fees=$_POST['fees'];

	$query="select * from doctor where Email='$add' ;";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		echo "<script>alert(' Email is incorrect,there is someone already registered with this email.')</script>";
		echo"<script>window.open('add-doctor.php','_self')</script>";
	}

	$query = "SELECT *  FROM `specialization` where special='$special'";
   $result1 = mysqli_query($con, $query);
   $row1 = mysqli_fetch_array($result1);
   $s=$row1['sno'];

   $q="INSERT INTO `doctor`
   (`fullname`, `fees`, `email`, `city`, `address`, `contact`, `Password`, `sno`) 
   VALUES
    ('$name'
	,'$fees'
	,'$add'
	,'$city'
	,'$address'
	,'$contact'
	,'$password'
	,'$s'
	)";
   $result = mysqli_query($con, $q);
   echo "<script>alert(' Registered.')</script>";
   echo"<script>window.open('admin-panel.php','_self')</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
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
	<title>Admin</title>
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
  <a  class="active" href="records.php">Records</a>
  <a  class="active" href="doctor.php">Doctor</a>
  
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
                <a class="nav-link" href="admin-panel.php">Dashboard</a>
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
				<a href="doctor-panel.html"><h2>Adding DOCTOR and Details.</h2></a>
				</div>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form name="registration" id="registration"  method="post" onSubmit="return valid();">
						<fieldset>
							<legend>
								ENTRY
							</legend>
							<p>
								Enter  details below:
							</p>
							<div class="form-group">
								<input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="email" placeholder="Doctor Email" required>
							</div>
                            <div class="form-group">
								<input type="text" class="form-control" name="fees" placeholder="fees" required>
							</div>
                            <div class="form-group">
								<input type="text" class="form-control" name="con" placeholder="CONTACT" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="ADDRESS" required>
							</div>
                            <div class="form-group">
								<input type="text" class="form-control" name="City" placeholder="City" required>
							</div>
                            <div class="form-group">
                    <labe for="special">  Specialization: </label></div>
                <select name="special" class="form-control" >
 
              <?php while($row1 = mysqli_fetch_array($result1)):;?>
 
                 <option  value="<?php echo $row1['special'];?>"><?php echo $row1['special'] ?></option>
 
              <?php endwhile;?>
                        <!-- <label for="txtRoom">Room Type:</label>
                        <select class="form-control" name="txtRoom" required>
                            <option value="Regular">Regular</option>
                            <option value="Deluxe">Deluxe</option>
                            <option value="VIP Suite">VIP Suite</option>
                        </select> -->
                        </select>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
									<i class="fa fa-lock"></i> </span>
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