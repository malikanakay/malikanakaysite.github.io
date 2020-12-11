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
    <title>Северная Америка</title>
</head>
<body>
<!-- footer -->
<?php require "../bloks/header.php" ?>

<div class="container">
    <h3 class="mb-4">Поездка в Северную Америку</h3>
</div>


<section class = "turs">
    <div class="container mt-4">

        <div class="row no-gutters mt-4">
            <div class="col-md-4">
                <img src="../img/111.jpg" class="card-img shadow" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">США, Вайоминг</h5>
                    <p class="card-text">Знаменитые национальные парки, мировая столица родео, ранчо Дикого Запада, вторая по высоте в США скульптура,
                        чистейшее Дьявольское озеро и самое ядовитое в мире озеро - это и многое другое в нашем туре "Скалистые горы".
                        Выходные в Вайоминг от 14 дней</p>
                    <p class="price text-danger">$5526</p>
                    <p class="card-text"><a class=text-muted" href="vayoming.php"><small class="text-muted">Подробнее</small></a></p>
                    <a href="#" class="btn btn-primary buy" data-price="5526" data-tur="США, Вайоминг">Оформить</a>
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

