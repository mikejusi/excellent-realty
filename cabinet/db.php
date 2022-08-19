<?php
    $dbconnect = mysqli_connect("localhost","root","","excellent");
    if (mysqli_connect_errno()){
        echo "Соединение с базой данный не установлено: " . mysqli_connect_error();
    }
?>