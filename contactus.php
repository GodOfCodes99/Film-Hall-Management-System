<?php
if(isset($_POST['submit']))
{
$a=$_POST["firstname"];
$b=$_POST["lastname"];
$c=$_POST["email"];
$d=$_POST["subject"];

$con=new mysqli("localhost","root","","Filmhall");

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$sql = "INSERT INTO contactus (First_name,Last_name,Email,Reason)
VALUES ('$a', '$b', '$c','$d')";

if ($con->query($sql) === TRUE) {
  echo '<script>alert("Successfull")</script>';
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();
}
header('Refresh: 3; URL=contactus.html');
?>

