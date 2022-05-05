<?php 
$servername ="localhost";
$username ="root";
$password = "";
$dbName ="hmsdb";

//create connection
$conn = new mysqli($servername, $username, $password, $dbName);
//check connection

if ($conn->connect_error)
{
die ("Connection failed". $conn->connect_error);
}
$name=$_POST ['name'];
$dob=$_POST ['dob'];
$class=$_POST ['class'];
$target_date=$_POST['target_date'];
$email=$_POST ['email'];
$phone=$_POST ['phone'];
	
$sql = "INSERT INTO booking
 (name, dob, class,target_date,email,phone) 
VALUES
 ('$name', '$dob', '$class','$target_date','$email','$phone')";
if ($conn->query($sql) === TRUE) 
{
  echo "Your Room Booked successfully";
} 
else 
{
  echo "Error: " . $conn->error;
}
$conn->close();
?>
