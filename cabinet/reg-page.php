<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Покупка недвижимости</title>
</head>

<body>
<?php
    require('db.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($dbconnect, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($dbconnect, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($dbconnect, $password);
        $query    = "INSERT into `users` (username, password, email) VALUES ('$username', '" . md5($password) . "', '$email')";
        $result   = mysqli_query($dbconnect, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Вы успешно создали  аккаунт.</h3><br/>
                  <p class='link'>Перейдите к <a href='index.php'>Авторизации</a></p>
                  </div>";
        }
    } else {
?>
  <section>
    <div class="container">
        <div class="user signinBx">
            <div class="formBx">
            <form method="post" name="login">
                <h2>Создать аккаунт</h2>
                <input type="text" name="username" placeholder="Имя пользователя" />
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Пароль" />
                <input class="btn btn-custom mb-3" type="submit" value="Создать аккаунт" name="submit" class="login-button"/>
                <p class="signup">
                Вернуться на
                <a href="../index.php">главную.</a>
                </p>
                <p class="signup">
                Уже есть аккаунт ?
                <a href="index.php">Войти.</a>
                </p>
            </form>
            </div>
            <div class="imgBx"><img src="../assets/img/au2.jpg" alt="" /></div>
        </div>
        </div>
  </section>

  <?php
    }
?>
</body>
<!-- <script  src="assets/js/script.js"></script> -->
</html>
