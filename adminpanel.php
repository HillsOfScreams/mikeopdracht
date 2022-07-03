<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet"href="adminpanelMakeUp.css">
		<link rel="icon" href="images/logo_small.png">
		<title>ADMINPANEL</title>
		<body>
	</head>
<?php

session_start();
include_once('include.php');
if($_SESSION["loggedin"] != TRUE) {
    echo("Access denied!");
    exit();
}
echo("You are logged in!");

?>



	<p class = "para"> wat wil je doen?</p>
    <div class = "frame">
<form method="post" class="button" action="box/box1.php">
<button type="submit">1. Delete</button>
</form>



<form method="post" class="button" action="box/box2.php">
<button type="submit">2. Update</button>
</form>



<form method="post" class="button" action="box/box3.php">
<button type="submit">3. Insert</button>
</form>



<!-- <form method="post" class="button" action="box/box4.php">
<button type="submit">4</button>
</form>



<form method="post" class="button" action="box/box5.php">
<button type="submit">5</button>
</form>



<form method="post" class="button" action="box/box6.php">
<button type="submit">6</button>
</form>
 --> </div> 


<!-- <form method="post" action="adminRecensies.php">
<button type="submit">Continue</button>
</form> -->
</body>


