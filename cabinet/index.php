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
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    
        $username = mysqli_real_escape_string($dbconnect, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($dbconnect, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($dbconnect, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: admin/dashboard.php");
        } 
    } else {
?>
  <section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img src="../assets/img/au1.jpg" alt="" /></div>
        <div class="formBx">
          <form method="post" name="login">
            <h2>Войти в аккаунт</h2>
            <input type="text" name="username" placeholder="Имя пользователя" />
            <input type="password" name="password" placeholder="Пароль" />
            <input class="btn btn-custom mb-3" type="submit" value="Войти" name="submit" class="login-button"/>
            <p class="signup">
              Вернуться на
              <a href="../index.php">главную.</a>
            </p>
            <p class="signup">
              Еще не зарегестрированы ?
              <a href="reg-page.php">Создать аккаунт.</a>
            </p>
          </form>
        </div>
      </div>

      <?php
    }
?>
      <!-- <div class="user signupBx">
        <div class="formBx">
          <form action="register.php" onsubmit="return false;">
            <h2>Создать аккаунт</h2>
            <input type="text" name="" placeholder="Имя пользователя" />
            <input type="email" name="" placeholder="Email" />
            <input type="password" name="" placeholder="Пароль" />
            <input type="password" name="" placeholder="Подтвердите пароль" />
            <input type="submit" name="" value="Зарегистрироваться" />
            <p class="signup">
              Вернуться на
              <a href="../index.php">главную.</a>
            </p>
            <p class="signup">
              Уже есть аккаунт ?
              <a href="#" onclick="toggleForm();">Войти.</a>
            </p>
          </form>
        </div>
        <div class="imgBx"><img src="../assets/img/au2.jpg" alt="" /></div>
      </div>
    </div> -->
  </section>
</body>
<!-- <script  src="assets/js/script.js"></script> -->
</html>
