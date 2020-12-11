<?php require_once '../inc/functions.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta chatset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Латинская Америка</title>
</head>
<body>
<!-- footer -->
<?php require "../bloks/header.php" ?>

<div class="container">
    <h3 class="mb-4">Поездка в Латинская Америка</h3>
</div>


<section class = "turs">
    <div class="container mt-4">

        <div class="row no-gutters mt-4">
            <div class="col-md-4">
                <img src="../img/83.jpg" class="card-img shadow" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Аргентина,Буенос-Айрес</h5>
                    <p class="card-text">Буэнос-Айрес — это далеко не вся Аргентина, но, поверьте, здесь можно провести
                        одну из самых незабываемых недель в вашей жизни.
                        Выходные в Буенос-Айрес от 9 дней</p>
                    <p class="price text-danger">$2560</p>
                    <p class="card-text"><a class=text-muted" href="london.php"><small class="text-muted">Подробнее</small></a></p>
                    <a href="#" class="btn btn-primary buy" data-price="2560" data-tur="Аргентина,Буенос-Айрес">Оформить</a>
                </div>
            </div>
        </div>

        <div class="row no-gutters mt-4">
            <div class="col-md-4">
                <img src="../img/84.jpg" class="card-img shadow" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Перу,Куско</h5>
                    <p class="card-text">Столицу древней империи Инков - Куско , находящуюся в перуанских Андах и
                        объявленную ЮНЕСКО культурным достоянием всего человечества, туристы посещают в первую очередь
                        Выходные в Куско от 8 дней</p>
                    <p class="price text-danger">$2500</p>
                    <p class="card-text"><a class=text-muted" href="london.php"><small class="text-muted">Подробнее</small></a></p>
                    <a href="#" class="btn btn-primary buy" data-price="2500" data-tur="Перу,Куско">Оформить</a>
                </div>
            </div>
        </div>


        <div class="row no-gutters mt-4">
            <div class="col-md-4">
                <img src="../img/85.jpg" class="card-img shadow" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Коста Рика,Сан-Хосе</h5>
                    <p class="card-text">Значительную часть двадцатого века Сан-Хосе был преимущественно сельскохозяйственным городом.
                        Но послевоенный всплеск рождаемости, увеличив городскую миграцию, полностью изменил столицу за несколько десятилетий.
                        Выходные в Сан-Хосе от 7 дней</p>
                    <p class="price text-danger">$2700</p>
                    <p class="card-text"><a class=text-muted" href="london.php"><small class="text-muted">Подробнее</small></a></p>
                    <a href="#" class="btn btn-primary buy" data-price="2700" data-tur="Коста Рика,Сан-Хосе">Оформить</a>
                </div>
            </div>
        </div>


        <div class="row no-gutters mt-4">
            <div class="col-md-4">
                <img src="../img/86.jpg" class="card-img shadow" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Эквадор,Кито</h5>
                    <p class="card-text">Раскинувшийся в межгорной котловине Анд, окруженный вулканическими пиками, город Кито способен вызвать восхищение.
                        Выходные в Кито от 12 дней</p>
                    <p class="price text-danger">$4370</p>
                    <p class="card-text"><a class=text-muted" href="london.php"><small class="text-muted">Подробнее</small></a></p>
                    <a href="#" class="btn btn-primary buy" data-price="4370" data-tur="Эквадор,Кито">Оформить</a>
                </div>
            </div>
        </div>


    </div>
</section>


<div class="modal fade" id="cart">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Оформление заказа</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="buy" method="post">

                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="name" name="name" class="form-control" id="name" placeholder="Ваше имя" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="emial" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label for="tur">Выбранный тур</label>
                        <input type="text" name="tur" class="form-control" id="tur" readonly>
                    </div>

                    <div class="form-group">
                        <label for="price">Цена</label>
                        <input type="text" name="price" class="form-control" id="price" readonly>
                    </div>

                    <button type="submit" class="btn btn-primary">Оформить</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- footer -->
<?php require "../bloks/footer.php" ?>


<!-- libs -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="../js/main.js"></script>
</body>
</html>

