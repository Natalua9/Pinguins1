<?php      
        include "connect.php"; // выражение include включает и выполняет указанный файл 

        $news = mysqli_query($con, "select * from news"); //ресурс подключения и запрос для нашей бд, результат ресурс соединения
        include "header.php";

    ?> 

    
    <div id="main">
    <div class="last-news">
    <?php 
        while($new = mysqli_fetch_assoc($news)){ //возвращает подстрочно одномерный ассоциативный массив из таблицы news
            echo "<div class='card'>"; 

            $new_id =$new['news_id'];
            echo " <div class= 'c_img'><img src='imeges/news/".$new['image']."'></div>";
            echo "<a href = 'oneNew.php?new=$new_id'>" . $new['title'] . "</a>"; //
            
            echo "</div>"; 
        } 
        
    ?> 
</div>
    </div>
    </body> 
</html>
