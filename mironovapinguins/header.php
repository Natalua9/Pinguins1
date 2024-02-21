<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"  
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="  
    crossorigin="anonymous" referrerpolicy="no-referrer"> 
</script> 
<?php 
include "Connect.php"; 
$query_get_category = "select * from categories"; 
$categories = mysqli_fetch_all(mysqli_query($con, $query_get_category)); 
?> 
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
                <form id="search-form" action="/" method="get"> 
                <input type="search" id='search' name="search" placeholder="Поиск"> 
            </form> 
            </div> 
 
            <div class="vhod"> 
                <img src="imeges/1.svg" alt="" class="poisc_img"> 
                <a href="auto.php">Вход</a>/ 
                <a href="reg.php">Регистрация</a> 
 
            </div> 
        </div> 
        <div class="text-name"> 
            <h1 class="namePost1"><a href="/">Пингвины</a></h1> 
            <h3>Понедельник, Январь 1, 2018</h3> 
            <div class="pogoda"> 
                <img src="imeges/Sun.svg" alt="" class="poisc_img"> 
                <h3>-23°C</h3> 
            </div> 
        </div> 
    </header> 
    <main> 
        <div class="text-main"> 
             
            <?php 
            foreach ($categories as $category) { 
                echo "<li><a   href='/?cat=$category[0]'>$category[1]</a></li>"; 
            } 
            ?> 
        </div> 
    </main> 
 
    <script>  
        $('#search-form').on ('keyup', function (e)){  
            <?php   
                $searching = isset($_GET['search'])? $_GET['search']: false;   
                ?>  
        }  
    </script>