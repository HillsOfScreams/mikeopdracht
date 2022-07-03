<?php
    if ( !isset($_POST['submit']) ) {
        exit('Not allowed to come here!');
    } else {
    include_once('../include.php');
        $titel = $_POST['titel'];
        $beschrijving = $_POST['beschrijving'];
          
        $sql = "INSERT INTO box (titel, beschrijving) VALUES (:titel, :beschrijving)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':titel', $titel);
        $stmt->bindParam(':beschrijving', $beschrijving);
        $stmt->execute();

       

       
        header('Location: ../adminpanel.php');
        exit();



    }
    
?>
