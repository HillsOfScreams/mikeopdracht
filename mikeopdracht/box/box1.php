<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet"href="../adminpanelMakeUpBox.css">
		<link rel="icon" href="images/logo_small.png">
		<title>ADMINPANEL</title>
		<body>
	</head>

<?php
session_start();
include_once('../include.php');
 if($_SESSION["loggedin"] != TRUE) {
     echo("Access denied!");
     exit();
 }



$sql = "SELECT id, titel, beschrijving FROM box";
$stmt = $con->prepare($sql);
$stmt->execute();
$result = $stmt->fetchall();

foreach($result as $row){
       
    ?>
<form action="deleteBox.php" method="POST">

    <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">

   
        <button class="box" type="submit" name="delete" value=<?php echo $row['id']?>>Delete</button>  


    <?php
   
        print_r("||id: " . $row['id']. " ||titel: " . $row['titel']. " ||beschrijving:  " . $row['beschrijving']. " <br> "); 
   ?>
</form>
<?php
}
?>

 


 
    