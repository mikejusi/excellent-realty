<?php
include("session.php");

if ($_SESSION['username'] == "admin"){
  header('Location: dashboard.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
  <title>Профиль</title>
</head>
<body>
  <div class="container">
    <div class="w-50 mx-auto bg-profile rounded p-4 mt-5 mb-3 text-center">
      <h3>Ваш профиль</h3>
      <div>
        <img class="w-50 mt-4" src="https://i0.wp.com/triparambh.com/wp-content/uploads/Icons/icon-5359554_1920.png?fit=1920%2C1920&ssl=1">
      </div>
      <p>Добро пожаловать <?php echo $_SESSION['username']; ?>!</p>
      <a href="../../index.php" class="btn btn-primary">Вернуться на главную</a>
      <a href="logout.php" class="btn btn-danger">Выйти</a>
    </div>
  </div>
</body>
</html>