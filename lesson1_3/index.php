<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Переменные</title>
</head>
<body>
    <?php
        //Переменные чувствительны к регистру
        //PHP динамически типизируемый язык => тип данных присваивается переменной автоматически

        $asd_asd = 5;
        echo $asd_asd;

        $var = $num = $div = 9; //Можно присваивать значт одновременно сразу нескольким переменных
        echo $var, $num, $div;

        $resalt = 7 / 3;
        $resalt2 = round($resalt, 2); //Функция round окуругляет знач до нужного кол-во знаков после запятой
        echo $resalt2;

        $str1 = 'Строка'; //Строковой тип данных
        $str2 = $str1.' строчка'; //Точкой производят конкотенацию 
        echo $str2;
    ?>
    <br>


    <h1>Конвертор</h1>
    <h3>Преобразование из дюймов в сантиметры</h3>
    <br>
    <?php
        $ins = 20;
        $cents = round($ins * 2.54);
        echo $ins.' дюймов '.'= '.$cents.' сантиметров';
    ?>
</body>
</html>