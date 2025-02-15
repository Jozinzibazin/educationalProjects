<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новая страница</title>
</head>
<body>
    <?php
        echo "Главный скрипт <br>";
        include 'second.php';       //Подключение второго файла осуществляется через include 
        echo "Главный скрипт <br>";
    ?>
</body>
</html>