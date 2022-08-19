<?php
    require_once '../../component/db.php';

    include("session.php");

    if ($_SESSION['username'] != "admin"){
        header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Подписки</title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
</head>
<body>
    <div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="../../index.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Вернуться на главную
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="help-users.php">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Обратная связь
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="users-echo.php">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Пользователи
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="sub-echo.php">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Рассылка
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="dashboard.php">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Вывод каталога
                        </span>
                    </a>
                </li>
                <li>
                    <a href="cataloge-edit.php">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                           Взаимодействие с каталогом
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="logout.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Выйти из аккаунта
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>


        <div class="mt-4 mx-auto w-90 shadow__main rounded p-4">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sb as $sub) : ?>
                        <tr>
                            <th scope="row"><?= $sub['id'];?></th>
                            <td><?= $sub['email'];?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
  
</body>
</html>
