<?php
include '../../component/db.php';

$title=$_POST['title'];
$img=$_POST['img'];
$rooms=$_POST['rooms'];
$price=$_POST['price'];

$sql="INSERT INTO cataloge(title, img, rooms, price) VALUES ('$title','$img','$rooms','$price')";

$result=mysqli_query($pdo, $sql);

if($result){
    header('Location: cataloge-edit.php');
}

?>