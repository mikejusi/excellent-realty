<?php
include 'db.php';

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="INSERT INTO help(name, email, message) VALUES ('$name','$email','$message')";

$result=mysqli_query($pdo, $sql);

if($result){
    header('Location: ./success.php');
}

?>