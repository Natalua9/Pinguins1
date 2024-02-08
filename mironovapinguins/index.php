<!-- <?php      
    // include "connect.php";
    // include "header.php";
    // $query_get_category = "select * from categories"; 

    // $cat = isset($_GET["cat"]) ? $_GET["cat"] : false; 
    // if($cat != false){
    //     $news = mysqli_query($con, "select * from news where category_id = $cat");
    // } else{
    //     $news_all = mysqli_query($con, "select * from news");
    // }
  

    ?> 

    <!DOCTYPE html> 
    <html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Пингвины</title>
        <link rel='stylesheet' type='text/css' media='screen' href='/css/style.css'> 

    </head> 
    <body> 

    <nav> 


    <div id="main">
    <div class="last-news">
    <?php 
    // echo "<div class='cards'>";
    // if (empty($news)){
    //     while($new = mysqli_fetch_assoc($news_all)){ 
    //         echo "<div class='card'>"; 
    //         echo "<h2 class='c_title'>" . $new['title'] . "</h2>"; 
    //         echo "<p>" . $new['content'] . "</p>"; 
    //         echo "<img class='images' src='Imeges/news/".$new['image']."'>";
    //         echo "</div>";
    // }
    //     } else {
    //     while($new = mysqli_fetch_assoc($news)){ 
    //     echo "<div class='card'>"; 
    //     echo "<h2 class='c_title'>" . $new['title'] . "</h2>"; 
    //     echo "<p>" . $new['content'] . "</p>"; 
    //     echo "<img class='images' src='Imeges/news/".$new['image']."'>";
    //     echo "</div>";
    // } } 
    // echo "</div>";
    
    ?> 
</div>
    </div>


    </body> 
</html>
</html> -->

<?php
include "connect.php"; //выражение include включает и выполняет указанный файл

$query_get_category = "select * from categories"; 

$categories = mysqli_fetch_all(mysqli_query($con, $query_get_category));

include "header.php";

$news = mysqli_query($con, "select * from news");

$id_cat = isset($_GET['cat'])? $_GET['cat']:false;

$query_newcat = "";

if($id_cat){
    $query_newcat = "SELECT * FROM `news` WHERE  `category_id` = '$id_cat'";
} else {
    $query_newcat = "SELECT * FROM `news`";
}

$result = mysqli_query($con,$query_newcat);

?>

    <main1>
      
                <div class="cards">
                    <?php
                    if(mysqli_num_rows($result)==0){
                        echo "нет новостей";
                    }else {
                        while($new = mysqli_fetch_assoc($result)){
                        echo "<div class='card'>";
                        $new_id = $new['news_id'];
                        $new_date = $new['publish_date'];
                        echo "<img src='imeges/news/" . $new['image']. "'>";
                        echo "<a href = 'oneNew.php?new=$new_id'>". $new['title']."</a>";
                        echo  "</div>";
                        }
                    }
                    ?>
                </div>
            
       
    </main1>
</body>
</html>