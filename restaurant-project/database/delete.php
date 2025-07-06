<?php
   
    include 'db.php';
    $id= $_GET['id'];
    $result = $conn->prepare("delete from newstable where id=?");
    $result ->bindValue(1 , $id);
    $result ->execute();
    header('location : ../insert.php');
 


?>
