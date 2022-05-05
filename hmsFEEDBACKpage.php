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


$feedback= $_POST['feedback'];
		
$sql = "INSERT INTO feedback (feedback) 
VALUES ('$feedback')";

if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";
} 
else 
{
     echo "Error: " . $conn->error;
}
$conn->close();
?>
