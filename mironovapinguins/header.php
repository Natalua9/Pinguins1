<?php $categories = mysqli_fetch_all(mysqli_query($con, "select * from categories")); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <script src='main.js'></script>
</head>

<body>
    <header>
        <div class="nav-header">
            <h2>Разделы</h2>
            <div class="searcch-block">
                <img src="imeges/Search.svg" alt="" class="poisc_img">
                <input type="text" placeholder=" Поиск" class="poisk">
            </div>

            <div class="vhod">
                <img src="imeges/1.svg" alt=""  class="poisc_img" >
                <a href="#">Вход</a>
            </div>
        </div>
        <div class="text-name">
            <h1 class="namePost1">Пингвины</h1>
            <h3>Понедельник, Январь 1, 2018</h3>
            <div class="pogoda">
                <img src="imeges/Sun.svg" alt=""  class="poisc_img">
                <h3>-23°C</h3>
            </div>
        </div>
    </header>
    <main>
        <div class="text-main">
            <?php foreach ($categories as $category) {

                echo "<li><a href='#'>$category[1]</a></li>";
                echo "<hr>";
            }
            ?>
        </div>
    </main>