<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php      
    include "connect.php"; // выражение include включает и выполняет указанный файл 
    $news = mysqli_query($con, "select title from news");//ресурс подключения(Ресурс представляет собой тип данных) и запрос для нашей бд,
    ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ панель</title>
</head>
<body>
    <h1>Админ панель</h1>
<?php 
        while($new = mysqli_fetch_assoc($news)){ //возвращает подстрочно одномерный ассоциативный массив
            echo "<div class='card'>"; 
            echo "<h2 class='c_title'>" . $new['title'] . "</h2>"; 
            echo "</div>"; 
        } 
    ?> 
</body>
</html>
<style>
    h1{
        text-align: center;
    }
    </style>