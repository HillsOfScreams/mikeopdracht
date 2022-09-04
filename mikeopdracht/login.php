<?php
session_start();
include_once('include.php');


if ( !isset($_POST['username'], $_POST['password']) ) {

	exit('Please fill both the username and password fields!');
}

if ($stmt = $con->prepare('SELECT admin_id, password FROM login WHERE username = ?')) {
	
	$stmt->bindParam(1, $_POST['username']);
	$stmt->execute();
	
    $result = $stmt->fetch(); 
    //  var_dump($result["password"]);
    //  die();
      //array(2) { ["admin_id"]=> int(1) ["password"]=> string(5) "admin" }
        if ($_POST['password'] === $result["password"]) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['admin_id'] = $id;
            header("Location: adminpanel.php"); 
        } 
        else {
        
            echo 'Incorrect username and/or password!';
        }
    }


        ?>