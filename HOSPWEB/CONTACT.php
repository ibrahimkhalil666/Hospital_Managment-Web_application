


<?php
session_start();
$con=mysqli_connect("localhost","root","","hmsdd");
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$mail=$_POST['mail'];
$c=$_POST['contact'];
$q=$_POST['Query'];


$query=mysqli_query($con,"INSERT INTO `contact`(`name`, `email`, `contact`, `Query`) VALUES ('$name','$mail','$c','$q')");


echo "<script>alert('Filed');</script>";
header('location:index.HTML');

	if($query)
	{
		echo "<script>alert('Filed');</script>";
		//header('location:user-login.php');
	}
    else{
        echo "<script>alert('Error');</script>";
        //header('location:user-login.php');
    }


}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact-page</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <form  method="post"  >
        Name:<br>
        <input type="text" name="name"><br>
        Contact NO:<br>
        <input type="text" name="contact"><br>
        E-mail:<br>
        <input type="text" name="mail"><br>
        Comment:<br>
        <input type="text" name="Query" size="50"><br><br>
        <button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
									Submit <i class="fa fa-arrow-circle-right"></i>
								</button>
        </form>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>