<?php
include("db_connection.php") ;
session_start();


$name = mysqli_real_escape_string($conn, $_POST['name']);
$sex = mysqli_real_escape_string($conn, $_POST['sex']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$city = mysqli_real_escape_string($conn, $_POST['city']);

$id =$_GET['id'];

$sql = "UPDATE `usertable` SET   name = '$name',
                                    sex = '$sex',
                                    age = '$age',
                                    city = '$city'
                                    WHERE id= '$id' ";

if(mysqli_query($conn, $sql))
{
    $_SESSION['alert']= 1;
    header("Location: index.php");

}

else{

    echo "Update Failed";
    //echo $itemid , $id;
}


mysqli_close($conn);




?>