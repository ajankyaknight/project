<?php 
if (isset($_POST['submit'])) {

$name= $_POST['name'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
$security=$_POST['security'];

if ($pass != $repass) {
	echo "password not match";
} 
if ($security != '56789') {
	echo "security code wrong";
}

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "rtosystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
	die("connection failed: ".$conn->connect_error);
}
 echo "connect successfully";

$sql="INSERT INTO registration (name, email, mobile, pass) VALUES ('$name','$email','$mobile','$pass')";
if($conn->query($sql)===TRUE)
{
	echo"data inserted";
	header('Refresh: 2; URL=login.html'); 
}

}
?>
