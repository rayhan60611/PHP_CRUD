<?php
include("db_connection.php");
session_start();


$id = $_GET['id'];
// echo $id;

$sql = "DELETE FROM `usertable` WHERE id = '$id'";


 if(mysqli_query($conn, $sql))
 {
    $_SESSION['deleteOk']= 1;
     header("Location: index.php");
}

 else{
    $_SESSION['deleteFailed']= 1;
    header("Location: index.php");
 }

mysqli_close($conn);
?>