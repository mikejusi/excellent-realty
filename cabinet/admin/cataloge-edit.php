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
  <title>Каталог</title>
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
            <form method="post" action="del.php">
                <h3>Удалить карточку</h3>
                <input class="form-control w-15" type="text" name="id" placeholder = "id">
                <input class="btn btn-danger mt-3" type="submit" name="delete" value="Удалить">
            </form>

            <form class="mt-4" action="add-cataloge.php" method="POST" autocomplete="off">
            <h3>Добавить карточку</h3>
                <div class="title">
                    <label class="form-label text-dark" for="title">Заголовок: </label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="img">
                    <label for="formFile" class="form-label">Картинка товара</label>
                    <input class="form-control" type="file" name="img" id="formFile">
                </div>
                    <label for="rooms" class="form-label">Колличество комнат</label>
                    <select id="rooms" class="form-select" name="rooms" aria-label="Default select example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3 и более</option>
                    </select>

                    <div class="price">
                        <label class="form-label text-dark mt-2" for="price">Цена: </label>
                        <input type="text" name="price" id="price" class="form-control" required>
                    </div>

                <button class="btn btn-success mt-2">Добавить</button>
            </form>
        </div>
  
</body>
</html>
