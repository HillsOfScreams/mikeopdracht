<?php
include_once('../include.php');
if(isset($_POST['delete'])){
    $sql = "DELETE FROM box WHERE box.id = :id";
    $stmt = $con->prepare($sql);
    $id = $_POST['delete_id'];
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    echo "Deleted!";
}
?>
    <form action="box1.php" method="POST">
      <button>Go back!</button>
    </form>
        
       
        
 