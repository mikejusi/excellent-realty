<?php
include 'db.php';

$email=$_POST['email'];

$sql="INSERT INTO newssub(email) VALUES ('$email')";

$result=mysqli_query($pdo, $sql);

if($result){
    header('Location: ../index.php');
}

?>