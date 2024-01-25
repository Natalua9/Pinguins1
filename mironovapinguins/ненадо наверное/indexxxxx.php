<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Пингвины</title> 
</head> 
<body> 
<form action="check.php" method="post" enctype="multipart/form-data">  
        <label for="userName">Введите имя:</label>  
        <input type="text" id="userName" name="userName"> 
        <br>  
        <label for="userAge">Введите возраст:</label>  
        <input type="number" id="userAge" name="userAge">  
        <br> 
        <label for="userAge">Загрузите изображение профиля:</label>  
        <input type="file" id="userAvatar" name="userAvatar">  
        <br> 
        <input type="submit" value="Отправить">  
    </form> 
</body> 
</html>