<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm cc_cursor">
    <h5 class="my-0 mr-md-auto font-weight-normal" >Tapun<a class=text-muted" href="../index.php"><img src="https://img.icons8.com/color/48/000000/around-the-globe.png"/></a></h5>
<nav class="my-2 my-md-0 mr-md-3">
  <a class="p-2 text-dark" href="../index.php">Главная</a>
  <a class="p-2 text-dark" href="../catalogue.php">Каталог туров</a>
  <a class="p-2 text-dark" href="../company.php">О компании</a>
  <a class="p-2 text-dark" href="../about.php">Контакты</a>
</nav>
    <?php
    if($_COOKIE['user'] == ''):
    ?>
    <a class="btn btn-outline-primary" href="../register.php">Войти</a>

    <?php else: ?>
    <a class="btn btn-primary" href="../exit.php">Выход</a>
    <?php endif; ?>
</div>
