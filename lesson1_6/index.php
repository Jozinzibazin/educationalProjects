<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="/styles.css" rel="stylesheet" type="text/css">
        <title>Фотогалерея</title>
    </head>
    <body>
        <h1>Модули и включения</h1>
        <section id="gallery"><!--Присвоили идентификатор для css-->
            <?php
            //Модуль - файл, в котором хранится часть кода приложения
            //Включение - присоединение одного модуля к другому
            require_once 'modules/data.php'; //Включение производится конструкцией require (require_once включить только один раз), которая записывается во включающем модуле через пробел - путь до включаемого модуля. 
                $cnt = count($arr_images); //Считаем сколько элементов в массиве
                for ($i = 0; $i < $cnt; $i++) {//Начинаем перебирать элементы массива
            ?>
            <img src="/lesson1_6/images/<?php echo $arr_images[$i] ?>">
            <?php } ?>
        </section>
    </body>
</html>