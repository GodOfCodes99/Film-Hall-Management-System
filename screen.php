<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/webcss.css">
<link href="images/title.png" rel="icon">

</head>
<title>EAP FILM HALLS - Films On Screen</title>
<body>
    <nav>
        <a href="index.html" class="logo">
            <img src="images/logo.png"/>
        </a>

        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>
        <ul class="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="films.html">Highest Rated Films</a></li>
			<li><a href="screen.html">Films On Screen</a></li>
            <li><a href="ticket.php">Ticket Bookings</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
        </ul>
    </nav><br><br><br><br><br><br>
<div class="film-heading">
 <h1><center>Films On Screen</center></h1>
 </div>
 <br><br><br>
 <center><h3>
<?php
$con=new mysqli("localhost","root","","filmhall");
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$sql="select * from films";
$result = $con->query($sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Picture'] ).'"style="width:450px; height:650px;"/>';
  echo "<br><br>"."Film ID : ".$row["Film_ID"]."<br>"."Film Name : ".$row["Film_Name"]."<br>"."Filming Time : "
	.$row["Filming_Time"]."<br>"."Screening Start Date : ".$row["Screening_Start_Date"]."<br>"."Screening Ending Date : ".$row["Screening_Ending_Date"]."<br><br>";
  }
} else {
  echo "0 results";
}
?>		
</body>
</html>

