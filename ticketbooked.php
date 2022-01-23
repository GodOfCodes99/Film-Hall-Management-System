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
<h2><center>Your Tickets has been proccessed please enter your NIC and get your reference number</center></h2>
<div class="container">
  <form method="POST" >



    <label for="nic">NIC</label><br>
    <input type="text" id="nic" name="search"><br><br>
    <input type="submit" value="Search" name="submit">
	<?php

$con = new PDO("mysql:host=localhost;dbname=filmhall",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `tickets` WHERE NIC = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Schedule ID</th>
				<th>NIC</th>
				<th>Name</th>
				<th>Reference No</th>
			</tr>
			<tr>
			
			    <td><?php echo $row->schedule_id; ?></td>
				<td><?php echo $row->NIC; ?></td>
				<td><?php echo $row->Name;?></td>
				<td><?php echo $row->Reference_No;?></td>
			</tr>

		</table>
<?php 
	}	
		else{
			echo "NIC Does not exist Please Try Again";
		}
}

?>
	
  </form>
</div>

</body>
</html>
	