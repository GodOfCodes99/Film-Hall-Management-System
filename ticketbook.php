<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<meta name="keywords" content="EAP,EAPFilms,Srilanka,Srilankafilms,srilankamovie,eapmovie,onlinemovie,onlinemovieticket">
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

.container {
  border-radius: 20px;
  background-color: #d9d9d9;
  padding: 20px;
  width:40%;
  position: absolute;
  left: 50px;
  
}
</style>
</head>
<title>EAP FILM HALLS - Home</title>
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
			<li><a href="screen.php">Films On Screen</a></li>
            <li><a href="ticket.php">Ticket Bookings</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
        </ul>
    </nav><br><br><br><br><br><br><br><br>

<div class="container">
  <form action="ticketbookdb.php" method="POST" >

    <label for="scheduleid">Schedule ID</label><br>
    <input type="text" id="scheduleid" name="scheduleID"><br>
    <label for="box">Box Tickets</label>&nbsp;
    <input type="number" id="box" name="boxtickets">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="normal">Normal Tickets</label>&nbsp;
    <input type="number" id="normal" name="normaltickets"><br><br>
    <label for="nic">NIC</label><br>
    <input type="text" id="nic" name="nicid">
	<label for="name">Name</label><br>
    <input type="text" id="name" name="name"><br>
	<label for="card">Card Number&nbsp;&nbsp;(VISA/MASTER) <br>
    <input type="text" id="card" name="cardno"><br>
	<label for="ccv">CCV</label>&nbsp;
    <input type="number" id="ccv" name="ccvno">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<label for="expire">Expire Date</label>&nbsp;
    <input type="date" id="expire" name="expiredate"><br><br>
    <input type="submit" value="Book" name="submit">
  </form>
</div>

</body>
</html>
	