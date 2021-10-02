//The name of the file is count.php and it is a php file. Just writing this comment in order to particiopate in hacktoberfest. LOL.

<?php 

$servername = "localhost";
$username   = "root";
$password   = "123456789";
$dbname     = "rtosystem";
$table = "userdata";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
  die("connection failed: ".$conn->connect_error);
}
 //echo "connect successfully";

//count vehicle
 $sql= ("SELECT rcno FROM vehicle");
      $res = $conn->query($sql);

  if ($res->num_rows >0){
    $countv=mysqli_num_rows($res);
   }
//  echo $countv;
  //count pollution
 $sql= ("SELECT rcno FROM pollution");
      $res = $conn->query($sql);

  if ($res->num_rows >0){
    $countp=mysqli_num_rows($res);
   }
 // echo $countp;

//count insurance
 $sql= ("SELECT rcno FROM insurance");
      $res = $conn->query($sql);

  if ($res->num_rows >0){
    $counti=mysqli_num_rows($res);
   }
  //echo $counti;






?>
