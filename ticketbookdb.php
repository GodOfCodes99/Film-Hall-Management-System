<?php
if(isset($_POST['submit']))
{
$a=$_POST["scheduleID"];
$b=$_POST["boxtickets"];
$c=$_POST["normaltickets"];
$d=$_POST["nicid"];
$e=$_POST["name"];

$con=new mysqli("localhost","root","","Filmhall");

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$sql = "INSERT INTO tickets (schedule_id,Name,NIC,How_Many_Normal_Tickets,How_Many_Box_Tickets)
VALUES ('$a', '$e', '$d','$c','$b')";
$sql2="UPDATE schedule SET normal_tickets=normal_tickets-$c WHERE schedule_id=$a";
$sql3="UPDATE schedule SET box_tickets=box_tickets-$c WHERE schedule_id=$a";

if ($con->query($sql) === TRUE && $con->query($sql2)=== TRUE && $con->query($sql3)=== TRUE ) {
  echo '<script>alert("Successfully Booked")</script>';
  header('Refresh: 3; URL=ticketbooked.php');
} else {
  echo '<script>alert("Unsuccessfull Booking Try Again")</script>';
  header('Refresh: 3; URL=ticket.php');
}
$con->close();

}

?>