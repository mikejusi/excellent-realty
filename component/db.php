<?php
    $host="localhost";
    $user="root";
    $pass="";
    $dbname="excellent";

    $pdo=mysqli_connect($host, $user ,$pass, $dbname);
  
    function product(){
    global $pdo;
    $card = $pdo->query("SELECT * FROM  cataloge");
    return $card;
    }
$card =  product(); 

    function users(){
    global $pdo;
    $us = $pdo->query("SELECT * FROM  users");
    return $us;
    }
$us =  users(); 

    function sub(){
    global $pdo;
    $sb = $pdo->query("SELECT * FROM  newssub");
    return $sb;
    }
$sb =  sub(); 


    function msg(){
    global $pdo;
    $ms = $pdo->query("SELECT * FROM  help");
    return $ms;
    }
$ms =  msg(); ?>
