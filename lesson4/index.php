<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы</title>
</head>
<body>
<!--Массив - это набор значений разных типов (элементов), хранящийся в одной переменной.
Массив также относится к значящим типам данных.
    
Индексированный массив - массив элементы которого последовательно пронумерованы.-->
    <?php
        $arr = ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'];
        print_r($arr); //Выводим массив через print_r(). Echo работает только со строками и числами

        echo '<p>', $arr[0], '</p>';//Извлечение отдельных элементов массива
        echo '<p>', $arr[3], '</p>';

        $arr[4] = 'MariaBD';//Изменения отдельного элемента массива
        echo '<p>', $arr[4], '</p>';

        //Чтобы создать новый элемент, нужно указать у него еще не занятый индекс и присвоить нужное знач
        $arr[5] = 'PostreSQL';
        print_r($arr);

        //Если не указать индекс, то эементу присвоится следующий свободный
        $arr[] = 'SQlite';
        echo "<pre>"; // Расположение массива вертикально
        print_r($arr);
        echo "</pre>";

        //Удалить элемент можно функией unset
        unset($arr[2]);
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    ?>

<!--Ассоциативные массивы-->
    <?php
        //Элементы ассоциативного массива доступны не по индексам, а по ключам - словам, которые ставятся в соответствие значениям
        $platforms = ['aplication' => 'PHP', 'data' => 'MySQL'];
        print_r($platforms);

        //Работа с элементами такого массива выполняется аналогично
        $platforms['time'] = '12/00';
        echo "<pre>";
        print_r($platforms);
        echo "</pre>";

        $platforms['time'] = '8000';
        print_r($platforms);

        unset($platforms['time']);
        echo "<pre>";
        print_r($platforms);
        echo "</pre>";
    ?>

<!--Комбинированные массивы-->
    <?php
        //Комбинированный массив содержит знач как с индексами, так и с ключами
        $arrey = ['first', 'second', 'third' => 'PHP'];
        print_r($arrey);
        //С ним можно проделывать те же манипуляции, что и с остальными
    ?>

<!--Вложенные массивы-->
    <?php
        $plat = [
            ['HTML', 'CSS', 'JS'],
            ['app' => 'VScode', 'data' => 'MYsql']
        ];
        echo "<pre>";
        print_r($plat);
        echo "</pre>";

        //Чтобы обратиться к конкретному элементы указывается номер массива [0] и индекс в этом массие [2]
        echo $plat[0][2];
        $plat[1]['app'] = 'MariDB';
        print_r($plat);
    ?>
</body>
</html>