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
                        <a class="nav-link" href="contact.php">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">О нас</a>
                    </li>
                    </ul>
                    <a href="cabinet/index.php" class="btn btn__custom">Личный кабинет</a>
                </div>
                </div>
            </nav>
        </header>


                <main>
                    <div class="container py-4">
                        <h2>EXCELLENT REALTY</h2>
                        <hr class="hr__about">
                        <p>
                        Задача любого инвестора- правильное размещение средств с  получением наибольшей прибыли.<br><br>Таким стабильным регионом для сохранения и приумножения своего капитала ,конечно, могут являться страны Европы. Наиболее привлекательными традиционно остаются Германия, Австрия, Швейцария.<br><br>Агентство недвижимости Excellent Realty объединило высококлассных специалистов этих стран для  предоставления услуг потенциальным инвесторам.<br><br>Наши специалисты имеют огромный опыт, более  35 лет,  в сфере недвижимости.<br><br>Языковые трудности не возникнут при совместной работе.<br><br>Проводимый анализ рынка недвижимости ,как коммерческой, так и жилой недвижимости, позволяет нашим клиентам избежать затруднительных моментов после приобретения  такой недвижимости.  При покупке учитываются экономические, юридические, административные факторы.
                        </p>

                        <h4>Наша работа заключается</h4>
                        <p> - в умелом использование имеющихся средств  наших клиентов ,<br><br>- управлении коммерческими объектами недвижимости,<br><br>- в  правильном   вложении  капитала  в долевое строительство.<br><br>- Располагая эксклюзивной информацией от застройщиков, всевозможных фондов и частных лиц, мы отбираем наиболее эффективные для вложения собственных и кредитных средств, обеспечивающих стабильный доход и высокую надежность.</p>
                        <h4>Результатом нашей совместной работы являются</h4>
                        <p>-1. приобретённые объекты коммерческой  недвижимости с  полным анализом экономической составляющей,<br><br>-2. возможность воспользоваться кредитами немецких банков,<br><br>-3. возможность не принимать активного  участия в процессе управления такими объектами, контролировать опосредованно , экономя своё время,<br><br>-4. передать управление нашим специалистам.<br><br>-5. возможность получить экономическую, юридическую экспертизу, а также  безопасное проведение сделки купли- продаж, гарантирует надежность в таком непростом деле.</p>
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