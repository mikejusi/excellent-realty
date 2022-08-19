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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <link rel="stylesheet" href="assets/css/style.css">
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
                    <a class="nav-link active" aria-current="page" href="#">Главная</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#cat">Каталог</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Контакты</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">О нас</a>
                  </li>
                </ul>
                <a href="cabinet/admin/profile.php" class="btn btn__custom">Личный кабинет</a>
              </div>
            </div>
        </nav>
    </header>


    <main>
      <div class="video">
        <video id="bgvid" playsinline autoplay muted loop>
          <source src="assets/img/index (video-converter.com).webm" type="video/webm">
        </video>
      </div>
      <div id="cat" class="container text-center">
        <div class="box__search bg-white w-75 mx-auto rounded">
            <h1 class="py-4">ЖК "Элемент"</h1>
            <div class="px-3 pb-3 d-flex">

              <div class="search-box d-flex form-control me-2">
                <input class="border-0 form-control animated-search-filter" placeholder="Найти квартиру (поиск по метро, названию)"/>
                <span id="emty" class="emty btn">&times;</span>
              </div>

              <div class="btn-group me-2" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle border" data-bs-toggle="dropdown" aria-expanded="false">
                      Комнаты
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <li id="1"><a  class="dropdown-item" href="#">1 комната</a></li>
                      <li id="2"><a  class="dropdown-item" href="#">2 комнаты</a></li>
                      <li id="3"><a  class="dropdown-item" href="#">3 и более</a></li>
                  </ul>
                </div>

              <a class="btn btn__custom align-self-center p-13" href="#cataloge">Найти</a>

            </div>
        </div>
      </div>


      <div id="cataloge" class="cataloge d-flex flex-wrap mx-auto animated-search-filter">

      <?php foreach ($card as $cards) : ?>
        <div class="card <?= $cards['rooms'];?> filt" style="width: 18rem;">
        <div id="<?= $cards['id'];?>" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="assets/img/<?= $cards['img'];?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="assets/img/<?= $cards['img'];?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="assets/img/<?= $cards['img'];?>" class="d-block w-100" alt="...">
                </div>
            </div>

        </div>
          <div class="card-body">
            <h5 class="card-title"><?= $cards['title'];?></h5>
            <p class="card-text">Цена: <?= $cards['price'];?>₽</p>
            <a href="#" class="btn btn-primary">Подробнее</a>
          </div>
        </div>


        
        <?php endforeach; ?>


      </div>
  
      <h1 class="text-center mb-4">Наши преимущества</h1>

      <div class="container d-flex text-center flex-wrap our__plus mb-4">

        <div class="card bg__blue" style="width: 18rem;">
          <i class="fa-solid fa-building-shield mt-3"></i>
          <div class="card-body">
            <h5 class="card-title">Надежность</h5>
            <p class="card-text">Качество оказываемых услуг сертифицировано и соответствует требованиям национального Стандарта СТО РГР 021.01-02.</p>
          </div>
        </div>
        
        <div class="card bg__green" style="width: 18rem;">
          <i class="fa-solid fa-handshake mt-3"></i>
          <div class="card-body">
            <h5 class="card-title">Прозрачность отношений</h5>
            <p class="card-text">наши клиенты знают, по какой цене они продают свою квартиру и по какой цене покупают, и знают стоимость услуг агентства.</p>
          </div>
        </div>

        <div class="card bg__yellow" style="width: 18rem;">
          <i class="fa-solid fa-coins mt-3"></i>
          <div class="card-body">
            <h5 class="card-title">Выгодные условия</h5>
            <p class="card-text">Для постоянных клиентов существуют скидки и специальные предложения.</p>
          </div>
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