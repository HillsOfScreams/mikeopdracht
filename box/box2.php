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
include_once('../include.php');
// if($_SESSION["loggedin"] != TRUE) {
//     echo("Access denied!");
//     exit();
// }
// echo("You are logged in!");


$sql = "SELECT id, titel, beschrijving FROM box";
$stmt = $con->prepare($sql);
$stmt->execute();
$result = $stmt->fetchall();

foreach($result as $row){
       
    ?>
     <form action="updateBox.php" method="POST">

<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

    <label> titel </label>
    <input type="text" name="edit_titel" value="<?php echo $row['titel'] ?>"
        placeholder="edit titel">

    <label>beschrijving</label>
    <input type="text" name="edit_beschrijving" value="<?php echo $row['beschrijving'] ?>" 
        placeholder="edit beschrijving">

<button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

</form>




</form>
<?php
}
?>
