<?php
  $db = mysqli_connect('localhost', 'root', '', 'excellent');

  $id = $_POST['id'];

  $query = "DELETE FROM cataloge WHERE id = '$id'";
  mysqli_query($db, $query)
    or die('Error');

    header('Location: ./cataloge-edit.php');
    
  mysqli_close($db);
?>