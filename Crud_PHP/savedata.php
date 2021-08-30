<?php
include("db_connection.php") ;
session_start();
// $id = mysqli_real_escape_string($conn, $_POST['id']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$sex = mysqli_real_escape_string($conn, $_POST['sex']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$city = mysqli_real_escape_string($conn, $_POST['city']);

//check_duplicate_User///
$check_duplicate_user = "SELECT * FROM `usertable` WHERE `name`='$name'";
$result = mysqli_query($conn, $check_duplicate_user);
$count = mysqli_num_rows($result);


$sql = "INSERT INTO `usertable`(name,sex,age,city) VALUES('{$name}','{$sex}','{$age}','{$city}')";




if ($count > 0) {
    $_SESSION['duplicateUser']= 1;
    header("Location: Add.php");
} 
else {
    $_SESSION['alert']= 1;
    mysqli_query($conn, $sql);
    header("Location: Add.php");
}

mysqli_close($conn);


?>