<?php  
include('db.php');

if(isset($_POST['submit']))
{
	$a=$_POST['q10_name[first]'];
	$b=$_POST['q10_name[last]'];
	$c=$_POST['q17_username'];
	$d=$_POST['q11_email11'];
	$e=$_POST['q12_phoneNumber12[area]'];
	$f=$_POST['q12_phoneNumber12[phone]'];
	$g=$_POST['q16_locationOf[addr_line1]'];
	$h=$_POST['q16_locationOf[addr_line2]'];
	$i=$_POST['q16_locationOf[city]'];
	$j=$_POST['q16_locationOf[state]'];
	$k=$_POST['q16_locationOf[postal]'];
	$l=$_POST['q14_numberOf'];
	$m=$_POST['q15_animalType'];

	$qry=mysqli_query($con,"INSERT INTO `complainant`(`q10_name[first]`, `q10_name[last]`,`q17_username`, `q11_email11`, `q12_phoneNumber12[area]`,`q12_phoneNumber12[phone]`,`q16_locationOf[addr_line1]`,`q16_locationOf[addr_line2]`,`q16_locationOf[city]`,`q16_locationOf[state]`,`q16_locationOf[postal]`,`q14_numberOf`,`q15_animalType`) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')") or die(mysqli_error($con));

	if($qry==true)
	{
		echo "
          <script>
              alert('registered successfully');
              window.location='login.php';
              </script>
		";
	}
	else
	{
		echo "
           <script>
              alert('failed');
              window.location='register.php';
              </script>
		";
	}
