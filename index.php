<!DOCTYPE html>
<html lang="ru">
<head>
  <meta chatset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <title>Главная</title>
</head>
<body>
<!-- footer -->
<?php require "bloks\header.php" ?>

<!-- photo carousel  -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a class=text-muted" href="../index.php"><img src="img\11.jpg" class="d-block w-100" alt="..."></a>
            <div class="carousel-caption d-none d-md-block">
            <h5>Путишествуйте с близкими</h5>
            <p>Окунитесь в увлекательное приключение в кругу близких.</p>
            </div>
        </div>
        <div class="carousel-item">
            <a class=text-muted" href="../index.php"><img src="img\44.jpg" class="d-block w-100" alt="..."></a>
            <div class="carousel-caption d-none d-md-block">
            <h5>Экстремальные туры</h5>
            <p>Опробуйте приключение разных видов.</p>
            </div>
        </div>
        <div class="carousel-item">
            <a class=text-muted" href="catalogue/dost.php"><img src="img\33.jpg" class="d-block w-100" alt="..."></a>
            <div class="carousel-caption d-none d-md-block">
            <h5>Главные достопримечательности</h5>
            <p>Посетите последние популярные направления и давние фавориты</p>
             </div>
        </div>
        <div class="carousel-item">
            <a class=text-muted" href="catalogue/drive.php"><img src="img\22.jpg" class="d-block w-100" alt="..."></a>
            <div class="carousel-caption d-none d-md-block">
                <h5>Включены мероприятия</h5>
                <p>Наслаждайтесь разнообразными прогулками и всеми маршрутами без дополнительных затрат.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- hot price -->
<div class="container mt-4">
    <h3 class="mb-4 text-center">Горящие цены</h3>
    <div class="card-deck">
        <div class="card shadow">
        <img src="img\4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Турция, Кемер</h5>
            <p class="card-text">8 дней от $1214.65.</p>
            <a href="catalogue/kemer.php" class="btn btn-success btn-snm active" role="button" aria-pressed="true">Подробнее</a><br>
            <p class="card-text"><small class="text-muted">Последнее обновление 3 минуты назад</small></p>
        </div>
    </div>

        <div class="card shadow">
        <img src="img\5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Япония, Киото</h5>
            <p class="card-text">7 дней от $1359.15.</p>
            <a href="catalogue/kyoto.php" class="btn btn-success btn-snm active" role="button" aria-pressed="true">Подробнее</a><br>
            <p class="card-text"><small class="text-muted">Последнее обновление 3 минуты назад</small></p>
        </div>
    </div>

        <div class="card shadow">
        <img src="img\6.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Великобритания, Лондон</h5>
            <p class="card-text">15 дней от $3526.35.</p>
            <a href="catalogue/london.php" class="btn btn-success btn-snm active" role="button" aria-pressed="true">Подробнее</a><br>
            <p class="card-text"><small class="text-muted">Последнее обновление 3 минуты назад</small></p>
        </div>
    </div>

        <div class="card shadow">
            <img src="img\7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Южная Корея, Сеул</h5>
                <p class="card-text">13 дней от $3090.35.</p>
                <a href="catalogue/korea.php" class="btn btn-success btn-snm active" role="button" aria-pressed="true">Подробнее</a><br>
                <p class="card-text"><small class="text-muted">Последнее обновление 3 минуты назад</small></p>
            </div>
        </div>

</div>
</div>

<!-- best destination -->
<div class="container mt-5">
    <h3 class="mb-4 text-center">Посетите наши популярные туры</h3>

    <div class="d-flex flex-wrap">
    <div class="card mb-4  text-white">
        <img src="img/111.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
            <h5 class="card-title">Национальные парки Гранд-Тетон и Йеллоустон</h5>
            <p class="card-text">Отправьтесь на прогулку по нетронутой дикой природе Вайоминга. Посмотрите, как тысячи галлонов кипящей воды взрываются в небо, глядя на гейзер Old Faithful. </p>
            <a class=text-muted" href="catalogue/vayoming.php"><p class="card-text">Подробнее...</p></a>
        </div>
    </div>

    <div class="card mb-4  text-white">
        <img src="img/333.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
            <h5 class="card-title">Исследователь Аляски</h5>
            <p class="card-text">Исследуйте величественный ледник Матануска пешком. Откройте для себя живописные пешеходные тропы Талкитны с частным гидом-натуралистом.</p>
            <p class="card-text">Подробнее...</p>
        </div>
    </div>

    <div class="card mb-4  text-white">
        <img src="img/444.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
            <h5 class="card-title">Достопримечательности Перу</h5>
            <p class="card-text">Откройте для себя затерянный город инков Мачу-Пикчу, спрятанный в Андах. Исследуйте руины древней крепости Оллантайтамбо.</p>
            <p class="card-text">Подробнее...</p>
        </div>
    </div>

    <div class="card mb-4  text-white">
         <img src="img/555.jpg" class="card-img" alt="...">
         <div class="card-img-overlay">
             <h5 class="card-title">Достопримечательности Египта и круиз по Нилу</h5>
             <p class="card-text">Совершите круиз по Нилу с регулярными остановками для частных экскурсий. Исследуйте Долину царей, Долину цариц и гробницу Тутанхамона.</p>
             <p class="card-text">Подробнее...</p>
         </div>
    </div>

    <div class="card mb-4  text-white">
            <img src="img/666.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title">Вьетнам и Камбоджа</h5>
                <p class="card-text">Посетите впечатляющий Ангкор-Ват Камбоджи на рассвете с частным гидом. Исследуйте исторические места Хошимина и туннели Ку Чи.</p>
                <p class="card-text">Подробнее...</p>
            </div>
        </div>

    <div class="card mb-4  text-white">
            <img src="img/777.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title">Краеугольные камни Коста-Рики</h5>
                <p class="card-text">Прогуляйтесь по висячим мостам Аренала и найдите животных под пологом тропического леса. Поход к подножию вулкана Ареналь с частным гидом.</p>
                <p class="card-text">Подробнее...</p>
            </div>
        </div>

</div>
</div>

<!-- footer -->
<?php require "bloks/footer.php" ?>


<!-- libs -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>
