<?php
require_once 'component/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- иконки font-awesome v6.1.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css bootstrap v5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <link rel="stylesheet" href="assets/css/style.css">
    <title>Покупка недвижимости</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">

                <a class="navbar-brand" href="#"><img src="http://excellentrealty.ru/upload/medialibrary/844/844f2fad296d130ccede03bb044a5238.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mx-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">О нас</a>
                    </li>
                    </ul>
                    <a href="cabinet/index.php" class="btn btn__custom">Личный кабинет</a>
                </div>
                </div>
            </nav>
        </header>


                <main>
                    <div class="container py-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.4254042195244!2d37.7522123160887!3d55.75111199958956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414acaa8cdcf5825%3A0xc3e9db1ff5463dc8!2z0K3Qu9C10LrRgtGA0L7QtNC90LDRjyDRg9C7LiwgMTAsINCc0L7RgdC60LLQsCwgMTExNTI0!5e0!3m2!1sru!2sru!4v1650924234385!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                        <div class="w-50 my-4">
                            <form action="component/help.php" method="POST" autocomplete="off">
                                <h1>Напишите нам!</h1>
                                <div class="user my-4">
                                    <label class="form-label text-dark" for="name">Ваше имя: </label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                                <div class="email my-4">
                                    <label class="form-label text-dark" for="email">Email: </label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="message my-4">
                                    <label class="form-label text-dark" for="message">Сообщение: </label>
                                    <textarea type="text" name="message" class="form-control" id="message" rows="3"></textarea>
                                </div>
                                <button class="btn btn__custom">Отправить</button>
                            </form>
                        </div>
                    </div>
                </main>



                <footer>
        <div class="help__foot">

        </div>
        
        <div class="sub__foot py-4">
            <div class="d-flex container">
            <div class="social__media">
                <img class="w-50" src="assets/img/logo__white.png">
                <!-- <img class="w-50" src="http://excellentrealty.ru/upload/medialibrary/844/844f2fad296d130ccede03bb044a5238.png"> -->
                <div class="d-flex">
                <a href="http://vk.com" class="fa-brands fa-vk"></a>
                <a href="https://telegram.org/" class="fa-brands fa-telegram"></a>
                <a href="https://www.youtube.com/" class="fa-brands fa-youtube"></a>
                <a href="https://tiktok.com/" class="fa-brands fa-tiktok"></a>
                </div>
            </div>

            <div class="sub ms-auto">
                <h2>Подписаться на новости!</h2>
                <hr class="foot__hr w-25">
                <form class="d-flex" action="component/sub.php" method="POST" autocomplete="off">
                <input type="email" class="form-control w-75 me-2" name="email" id="email" placeholder="example@gmail.com">
                <button class="btn btn__custom">Отправить</button>
                </form>
            </div>

            </div>
        </div>

        <div class="container d-flex py-4">
            <p class="mb-0 me-4">@2022 EXCELLENT-REALTY</p>
            <p class="me-auto mb-0">All rights reserved</p>
            <p class="mb-0">16+</p>
        </div>
        </footer>

        <div id="stop" class="scrollTop">
        <span><i class="fa-solid fa-angles-up"></i></span>
        </div>
    </div>
</body>
<!-- Поиск квартир -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="assets/js/search.js"></script>

<!-- кнопка прокрутки вверх -->
<script src="assets/js/scroll-up.js"></script>

<!-- Фильтрация по комнатам -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="assets/js/filter.js"></script>

<!-- bootstrap js v5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>