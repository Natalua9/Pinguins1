
<?php
// include "connect.php"; //выражение include включает и выполняет указанный файл

// $query_get_category = "select * from categories"; 

// $categories = mysqli_fetch_all(mysqli_query($con, $query_get_category));

// include "header.php";

// $news = mysqli_query($con, "select * from news");

// $id_cat = isset($_GET['cat'])? $_GET['cat']:false;

// $query_newcat = "";

// if($id_cat){
//     $query_newcat = "SELECT * FROM `news` WHERE  `category_id` = '$id_cat'";
// } else {
//     $query_newcat = "SELECT * FROM `news`";
// }

// $result = mysqli_query($con,$query_newcat);


// $filter = isset($_GET["cat"]) ? $_GET["cat"] : false;

// $sort = isset($_GET["sort"]) ? $_GET["sort"] : false;

// $query = "SELECT * FROM  news";

// $param = "";
// if ($filter) {
//     $param .= "cat=$filter";
//     $query = " SELECT * FROM News WHERE category_id = $filter ";
// }
// if ($sort) {
//     $query  = " SELECT * FROM news ORDER BY publish_date $sort";
//     //$param .= "sort=$sort";
// }
// if ($sort && $filter) {
//     $query  = " SELECT * FROM news WHERE category_id = $filter  ORDER BY publish_date $sort";
// }
// $news = mysqli_query($con, $query);

?>
<!-- <section class="sort_1">
            <div class="sort">
                <ul class="list-group list-group-horizontal mt-5 mb-3">
                    <h4>Сортировка по дате публикации:</h4>
                    <li class="list-group-item">
                        <a href="/?sort=ASC<?= ($param != "") ? '&' . $param : '' ?>">по возрастанию</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/?sort=DESC<?= ($param != "") ? '&' . $param : '' ?>">по убыванию</a>
                    </li>
                </ul>
            </div>
        </section>

    <main1> -->
      
                <!-- <div class="cards">
                    <?php
                    // if(mysqli_num_rows($result)==0){
                    //     echo "нет новостей";
                    // }else {
                    //     while($new = mysqli_fetch_assoc($result)){
                    //     echo "<div class='card'>";
                    //     $new_id = $new['news_id'];
                    //     $new_date = $new['publish_date'];
                    //     echo "<img src='imeges/news/" . $new['image']. "'>";
                    //     echo "<a href = 'oneNew.php?new=$new_id'>". $new['title']."</a>";
                    //     echo  "</div>";
                    //     }
                    // }
                    ?>
                </div>
            
    
    </main1> -->
<!-- </body>
</html> -->

<?php 
include "connect.php"; //выражение include включает и выполняет указанный файл 
 
$query_get_category = "select * from categories";  
 
$categories = mysqli_fetch_all(mysqli_query($con, $query_get_category)); 
 
include "header.php"; 
 
$news = mysqli_query($con, "select * from news"); 
 
$id_cat = isset($_GET['cat'])? $_GET['cat']:false; 
$sort = isset($_GET['sort'])?$_GET['sort']:false;     
$category = isset($_GET['category'])?$_GET['category']:false;   
 
$query_newcat = "SELECT * FROM news"; 
 
if ($id_cat) { 
    $query_newcat .= " WHERE category_id = '$id_cat'"; 
} 
else if ($category) { $id_cat = $category; 
    $query_newcat .= " WHERE category_id = '$id_cat'";} 
 
if ($sort) { 
    $sort_order = ($sort == 'asc') ? 'ASC' : 'DESC'; 
    $query_newcat .= " ORDER BY publish_date $sort_order"; 
} 
if($searching){  
    $query_newcat = "SELECT * FROM news WHERE title LIKE '%$searching%'";   
} 
$result = mysqli_query($con, $query_newcat); 
$search = isset($_GET["search"]) ? $_GET["search"] : false; 
 
?> 
 
 
<form action = "" method="get"> 
<label for="sort">Сортировать по дате:</label> 
    <select name="sort" id="sort"> 
        <option value="">Без сортировки</option> 
        <option value="asc" <?= ($sort and $sort == "asc") ? "selected" : ""; ?>>По возрастанию</option> 
        <option value="desc" <?= ($sort and $sort == "desc") ? "selected" : ""; ?>>По убыванию</option> 
    </select> 
    <input type="hidden" value="<?=$id_cat?>" name='category'> 
    <button type="submit">Применить</button> 
</form> 
    <main1> 
        <div class="cards"> 
            <?php 
             
        if (mysqli_num_rows($result) == 0) { 
            echo "Нет новостей"; 
        } else { 
            while ($new = mysqli_fetch_assoc($result)) {  
                echo "<div class='card'>";  
                $new_id = $new['news_id'];  
                $new_date = $new['publish_date'];  
                echo "<img src='imeges/news/" . $new['image']. "'>";  
                echo "<a href='oneNew.php?new=$new_id'>" . $new['title'] . "</a>";  
                echo "</div>";  
            } 
        } 
            ?> 
        </div> 
    </main1> 
     
</body> 
</html>