
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/webcss.css">
<link href="images/title.png" rel="icon">
<style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 8px; 
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
  
}

input[type=reset] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=reset]:hover {
  background-color: #45a049;
  
}

.container {
  border-radius: 20px;
  background-color: #d9d9d9;
  padding: 20px;
  width:40%;
  position: absolute;
  left: 50px;
}
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }

.bookbutton {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 72px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;

}
</style>
</head>
<title>EAP FILM HALLS - Tickets</title>
<body>
    <nav>
        <a href="index.html" class="logo">
            <img src="images/logo.png"/>
        </a>
        <input type="checkbox" class="menu-btn" id="menu-btn"/>
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>
        <ul class="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="films.html">Highest Rated Films</a></li>
			<li><a href="screen.php">Films On Screen</a></li>
            <li><a href="ticket.php">Ticket Bookings</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
        </ul>
    </nav><br><br><br><br><br><br>
<h1>Book Tickets</h1><br><br>
<center>
<a href="ticketbook.php" class="bookbutton">Book Tickets</a></center><br><br><br>

<?php

$con=new mysqli("localhost","root","","filmhall");
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql="select * from schedule";
$result = $con->query($sql);


echo "<table border='1'>
<tr>
<th>Schedule ID</th>
<th>Film Name</th>
<th>Film ID</th>
<th>Available Normal Tickets</th>
<th>Available Box Tickets</th>
</tr>";

while($row = $result->fetch_assoc())

  {

  echo "<tr>";
  echo "<td>" . $row['schedule_id'] . "</td>";
  echo "<td>" . $row['film_name'] . "</td>";
  echo "<td>" . $row['film_id'] . "</td>";
  echo "<td>" . $row['normal_tickets'] . "</td>";
  echo "<td>" . $row['box_tickets'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
?>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
     <p>EAP Film & Theaters pvt(Ltd)</p>
     <p>Copyright Protected &#169</p>
	 <p>Telephone : 071 4567878/011 7897895/011 5675679 </p>
</footer>
</body>
</html>