<?php
// $_GET//ассоциативный массив 
$userName =$_POST["userName"];
$userAge =$_POST["userAge"];
// echo"Привет, $userName! Твой возраст: $userAge лет";

// if($userAge< 18){ header("Location:child.php");}

// else{ header("Location:adult.php");}

$userAvatar = $_FILES['userAvatar'];
$destination = "imeges/avatars/ ".$userAvatar['name'];
$filename = $userAvatar["tmp_name"];
$check_upload = move_uploaded_file($filename,$destination);
var_dump($check_upload);
?>