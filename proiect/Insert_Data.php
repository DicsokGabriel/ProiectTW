<?php
include('ajax.js');
$servername = "localhost";
$username = "root";
$password = "ARont@c0ck";
$dbname = "users";



// Create connection
$mysqli = new mysqli("localhost", $username, $password, $dbname);

$email=$_POST['email'];
$pass=$_POST['psw'];
$rpass=$_POST['psw-repeat'];

$checkEmail="SELECT Email FROM users WHERE email='$email'";
$checkEmail_run=mysqli_query($mysqli,$checkEmail);
$my=mysqli_fetch_array($checkEmail_run);
 
if($my['Email']!=$email){
	
	$query="INSERT INTO users (Password, Email, Cart) VALUES ('$pass', '$email', 'gol')";
	$query_run=mysqli_query($mysqli,$query);
	echo '<script type="text/javascript">alert("V ati inregistrat  cu succes");</script>';
	echo '<script type="text/javascript">location.href = "login2.php";</script>';

}
else{
	echo '<script type="text/javascript">alert("Email deja inregistrat");</script>';
	
}


	


$mysqli->close();



?>
