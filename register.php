<!DOCTYPE html>
<html lang="ru">
<head>
  <meta chatset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <title>Регистрация и авторизация пользователя</title>
</head>

<body>
<!-- header -->
<?php require "bloks\header.php" ?>

<div class="container mt-4">

    <?php
    if($_COOKIE['user'] == ''):
    ?>

    <div class="row">
        <!-- registration -->
        <div class="col">
            <h1>Регистрация пользователя</h1>
            <form action="validation/verification.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class = "btn btn-success" type="submit">Зарегестрироваться</button>
            </form>
        </div>
        <!-- authtorizzation-->
        <div class="col">
            <h1>Авторизация пользователя</h1>
            <form action="validation/auth.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class = "btn btn-success" type="submit">Авторизоваться</button>
            </form>
        </div>

    </div>
</div>

<?php else: ?>
    <p>Поздравляю с авторизацией <?=$_COOKIE['user']?>. Чтобы вернуться на главную страницу нажмите <a href="index.php">сюда</a></p>
<?php endif; ?>

<!-- footer -->
<?php require "bloks/footer.php" ?>

</body>
</html>
