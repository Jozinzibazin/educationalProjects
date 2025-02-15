<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Конвертор</title>
    </head>
    <body>
    <!--Ассоциативный массив - массив, элементы котрого доступны не по целочисленным, а по произвольно заданным строковым индексам (ключам)
        Элементы этого массива хранят знач, занесенные в элементы управления.-->
        
        <h1>Преобразование из дюймов в сантиметры</h1>
        <form action="convertor3.php" method="post">
            <p>Величина в дюймах:
            <input type="number" name="inches" size="10"></p>
            <p><input type="submit" value="Преобразовать"></p>
        </form>
        <?php
            if (isset($_POST['inches'])) { //С помощью функции isset проверяется, есть ли в элементе массива под ключем inches какое-то знач. Если есть, то выполняется код
                $ins = $_POST['inches'];
                $cents = round($ins * 2.54);
                echo '<p>', $ins, ' дюймов = ', $cents, ' сантиметров.</p>';
            }
        ?>
    </body>
</html>