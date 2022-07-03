<?php
include_once('../include.php');


if(isset($_POST['updatebtn'])){
    $titel = $_POST[ "edit_titel" ];
    $beschrijving = $_POST[ "edit_beschrijving"];
    $id = $_POST['edit_id'];

    $sql = "UPDATE box SET titel= :titel, beschrijving= :beschrijving WHERE id = :id";
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':titel', $titel);
    $stmt->bindParam(':beschrijving', $beschrijving);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    
    $id = $_POST['edit_id'];
    $stmt->execute();
    echo "Updated!";
}
?>
    <form action="box2.php" method="POST">
      <button>Go back!</button>
    </form>