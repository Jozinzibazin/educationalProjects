<?php // Определение четности
    $number = 5;

    if ($number % 2 == 0) {
        echo "Число четное";
    } else {
        echo "Число нечетное";
    }
?>

<?php // Проверяет на 3 условия
    $number = 0;

    if ($number > 0){
        echo "Число больше 0";
    } elseif ($number < 0) {
        echo "Число меньше 0";
    } else {
        echo "Число равно 0";
    }
?>

<?php // Проверяет на 3 условия с логическим оператором
    $age = 7;

    if ($age < 18){
        echo "Вы несовершеннолетний";
    } elseif (18 <= $age && $age <= 65) {
        echo "Вы совершеннолетний";
    } else {
        echo "Вы пенсионер";
    }
?>

<?php //Проверяет на 4 условия с логическим оператором
    $temperature = 25;

    if ($temperature < 0) {
        echo "Холодно";
    } elseif ($temperature >= 0 && $temperature <= 20) {
        echo "Прохладно";
    } elseif ($temperature >= 21 && $temperature <= 30) {
        echo "Тепло";
    } else {
        echo "Жарко";
    }
?>

<?php
    $year = 2024; // Проверка на високосность года
    /*Год является високосным, если он делится на 4, но не делится на 100, или делится на 400.
    Если год високосный, выведи "Год високосный".
    сли год не високосный, выведи "Год не високосный".*/ 

    if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0) {
        echo "Год високосный";
    } else {
        echo "Год не високосный";
    }
?>

<?php //код, который находит все делители числа и выводит их
    $number = 36;

    for ($i = 1; $i <= 36; $i++) {
        if ($number % $i == 0){
            echo $i . " ";
        } 
    }
?>

<?php //Проверяет на четность элементы массива
    $numbers = [10, 15, 20, 25, 30, 35, 40];
    $count = count($numbers);

    for ($i = 0; $i < $count; $i++) {
        if ($numbers[$i] % 2 == 0){
            echo $numbers[$i] . " - Число четное<br>";
        }
    }
?>

<?php //Функция rsort() сортирует массив в порядке убывания.
    $numbers = [10, 5, 20, 15, 30, 25];
    
    rsort($numbers); //Функция rsort() сортирует массив в порядке убывания.

    echo "Отсортированный массив: [ ";
    foreach ($numbers as $number) { //$numbers - массив, который мы хотим перебрать, $number - это переменная, в которой будет храниться значение текущего элемента массива на каждом шаге цикла.
        echo $number . " ";
    }
    echo " ]";
?>

<?php
    $fruits = ["apple", "banana", "grape", "cherry"];

    sort($fruits);

    echo "Массив в алфавитном порядке: [ ";
    foreach ($fruits as $fruit) {
        echo $fruit . " ";
    }
    echo " ]";
?>

<?php //код, который перебирает массив чисел и выводит только те числа, которые больше 10.
    $arr = [5, 12, 7, 19, 3, 14];

    echo "Числа в массиве больше 10: [ ";
    foreach ($arr as $number) {
        if ($number > 10) {
            echo $number . " ";
        }
    }
    echo " ]";
?>

<!--foreach в ассоциативном массиве-->
<?php 
    $people = [
        "Alice" => 25,
        "Bob" => 17,
        "Charlie" => 30,
        "David" => 15,
        "Eve" => 22
    ];
    foreach ($people as $name => $age) { //$name - ключ, $age - значение под ключем
        if ($age > 18) {
            echo "Имя $name Возраст $age, ";
        }
    }
?>

<?php //вывод массива в верхнем регистре
    $fruits = ["apple", "banana", "cherry", "grape"];

    foreach ($fruits as $fruit) {
        echo strtoupper($fruit) . " "; //функция strtoupper() выводит строку в верхнем регистре
    }
?>

<?php //сумма всех чисел в массиве
    $numbers = [5, 10, 15, 20, 25];
    $sum = 0;

    foreach ($numbers as $number) {
        $sum = $sum + $number;
    }
    echo "Сумма всех чисел в массиве: " . $sum;
?>

<?php
    //Определение четности элементов массива
    $numbers = [3, 8, 15, 22, 7, 14, 30, 9];

    echo "Массив содержащий только четные числа = [";
    foreach ($numbers as $number) {
        if ($number % 2 == 0){
            echo $number . ", ";
        }
    }
    echo "]";
?>

<?php
    //Определение наибольшего числа в массиве
    $numbers = [12, 45, 7, 98, 23, 56, 4, 89];
    $maxNumber = $numbers[0];

    foreach ($numbers as $number){
        if ($number > $maxNumber){
            $maxNumber = $number;
        }
    }
    echo "Максимальное число в массиве: ".$maxNumber;

?>

<?php
    //Проверка на минимальность/максимальность числа
    $numbers = [34, 7, 23, 99, 5, 71, 42, 1, 88];
    $maxNumber = $numbers[0];
    $minNumber = $numbers[0];

    foreach ($numbers as $number){
        if ($number > $maxNumber){
            $maxNumber = $number;
        } elseif ($number < $minNumber) {
            $minNumber = $number;
        }
    }
    echo "Максимальное число в массиве: ".$maxNumber;
    echo "Минимальное число в массиве: ".$minNumber;

?>

<?php
    //Подсчет четных и нечетных чисел в массиве
    $numbers = [10, 23, 7, 8, 34, 55, 66, 91, 42];
    $i = 0;
    $j = 0;

    foreach ($numbers as $number) {
        if ($number % 2 == 0){
            $i++;
        } else {
            $j++;
        }
    }
    echo "Четных чисел: ".$i;
    echo "Нечетных чисел: ".$j;
?>

<?php
    //Подсчет суммы четных и нечетных чисел в массиве
    $numbers = [12, 5, 8, 19, 22, 7, 30, 11, 42];
    $evenSum = 0;
    $oddSum = 0;

    foreach ($numbers as $number) {
        if ($number % 2 == 0){
            $evenSum += $number;
        } else {
            $oddSum += $number;
        }
    }
    echo "Сумма четных чисел: ".$evenSum;
    echo "Сумма нечетных чисел: ".$oddSum; 
?>

<?php
    //Генерация массива с случайными числами и подсчет уникальных чисел
    $randNumbers = [];// Пустой массив для хранения случайных чисел
    
    for ($i = 0; $i < 20; $i++){ // Генерируем 20 чисел
        $randNumbers[] = rand(1,100);
    }
    print_r($randNumbers);

    $uniqueNumbers = array_unique($randNumbers);// Функция удаляет повторяющиеся числа
    $uniqueCount = count($uniqueNumbers);// Функция считает элементы массива

    echo "Уникальные числа в массиве: " . $uniqueCount;
?>


<!--Определение дня недели-->
    <br><form action="index.php" method="post">
    <label for="day">Введите число от 1 до 7:</label>
    <input type="number" name="day" id="day" min = "1" max = "7" required> <!--required делает поле вводa обязательным-->
    <button type="submit">Определить</button><br>
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["day"])){
        $day = $_POST["day"];
    
    /*$_SERVER — суперглобальный массив, содержащий информацию о сервере и запросе.
    $_SERVER["REQUEST_METHOD"] — определяет метод запроса (GET или POST).
    == "POST" — проверяет, был ли отправлен запрос методом POST. 
    
    $_POST["day"] — получает значение из формы (name="day" в <input>).
    $day — переменная, в которую сохраняется введенное число.
    
    Проверка есть ли в массиве $_POST["day"] ключ day.
    Без проверки возникает ошибка потому что PHP пытается получить значение
    $_POST["day"] по ключу day, которого в нем пока нет*/

        switch ($day){
            case 1:
                echo "Понедельник";
                break;
            case 2:
                echo "Вторник";
                break;
            case 3:
                echo "Среда";
                break;
            case 4:
                echo "Четверг";
                break;
            case 5:
                echo "Пятница";
                break;
            case 6:
                echo "Суббота";
                break;
            case 7:
                echo "Воскресенье";
                break;
            default:
            echo "Ошибка! Введите число от 1 до 7.";
        }
    }
?>

<!--Определение времени года по числа месяца-->
<form action = "index.php" method = "post">
<lable for="month"> Введите число от 1 до 12: </lable>
<input type = "number" name = "month" id = "month" min = "1" max = "12" required>
<button type = "submite"> Определить </button> <br>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["month"])) {//Проверка есть ли в массиве $_POST["month"] ключ month. Без проверки возникает ошибка потому что PHP пытается получить значение $_POST["month"] по ключу month, которого в нем пока нет
        $month = $_POST["month"];

        switch ($month) {
            case 1:
                echo "Зима";
                break;
            case 2:
                echo "Зима";
                break;
            case 3:
                echo "Весна";
                break;
            case 4:
                echo "Весна";
                break;
            case 5:
                echo "Весна";
                break;
            case 6:
                echo "Лето";
                break;
            case 7:
                echo "Лето";
                break;
            case 8:
                echo "Лето";
                break;
            case 9:
                echo "Осень";
                break;
            case 10:
                echo "Осень";
                break;
            case 11:
                echo "Осень";
                break;
            case 12:
                echo "Зима";
                break;
            default:
            echo "Некорректный ввод";
        }
    }
?>

<!--Проверка является ли день рабочим или выходмным-->
<br><form action = "index.php" method = "post">
<label for="den"> Введите число от 1 до 7: </label>
<input type = "number" name = "den" id = "den" min = "1" max = "7" required>
<button type = "submite"> Определить </button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["den"])) {//Проверка есть ли в массиве $_POST["month"] ключ month. Без проверки возникает ошибка потому что PHP пытается получить значение $_POST["month"] по ключу month, которого в нем пока нет
        $month = $_POST["den"];

        switch ($month) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                echo "Будний";
                break;
            case 6:
            case 7:
                echo "Выходной";
                break;
            default:
            echo "Некорректный ввод";
        }
    }
?>

<!--Определение времени года по числа месяца-->
<form action = "index.php" method = "post">
<lable for="months"> Введите число от 1 до 12: </lable>
<input type = "number" name = "months" id = "months" min = "1" max = "12" required>
<button type = "submite"> Определить </button> <br>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["months"])) {//Проверка есть ли в массиве $_POST["month"] ключ month. Без проверки возникает ошибка потому что PHP пытается получить значение $_POST["month"] по ключу month, которого в нем пока нет
        $month = $_POST["months"];

        switch ($month) {
            case 1:
                echo "Январь - Зима";
                break;
            case 2:
                echo "Февраль - Зима";
                break;
            case 3:
                echo "Март - Весна";
                break;
            case 4:
                echo "Апрель - Весна";
                break;
            case 5:
                echo "Май - Весна";
                break;
            case 6:
                echo "Июнь - Лето";
                break;
            case 7:
                echo "Июль - Лето";
                break;
            case 8:
                echo "Август - Лето";
                break;
            case 9:
                echo "Сентябрь - Осень";
                break;
            case 10:
                echo "Октябрь - Осень";
                break;
            case 11:
                echo "Ноябрь - Осень";
                break;
            case 12:
                echo "Декабрь - Зима";
                break;
            default:
            echo "Некорректный ввод";
        }
    }
?>

<!-- запрашивает у пользователя число N и выводит все числа от 1 до N-->
 <form action="index.php" method="post">
    <label for="number">Введите число N:</label>
    <input type="number" name="number" id="number" min="1" required>
    <button type="submit">Показать</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number"])){
        $n = $_POST["number"];
        $i = 1;

        while ($i <= $n) {
            echo $i . "<br>";
            $i++;
        }
    }
?>

<!--запрашивает у пользователя число и считает сумму всех чисел от 1 до введенного числа-->
<form action="" method="post">
    <label for="num">Введите число:</label>
    <input type="number" name="num" id="num" min="1" required>
    <button type="submit">Вычислить сумму</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num"])) {
    $num = $_POST["num"];
    $sum = 0;
    $i = 1;

    while ($i <= $num){
        $sum += $i;
        $i++;
    }

    echo "Сумма всех чисел от 1 до $num: $sum";
}
?>


<!--выводит все степени двойки до заданного числа-->
<form action="index.php" method="post">
    <label for="num">Введите число:</label>
    <input type="number" name="num" id="num" min="1" required>
    <button type="submit">Вычислить</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num"])) {
    $num = $_POST["num"];
    $count = 1;
    
    echo "Все степени двойки до $num: ";
    while ($count <= $num){
        echo $count . " ";
        $count *= 2;
    }
}
?>

<!--числа от 1 до $num, которые делятся на 3 или на 5, но не на 15-->
<form action="index.php" method="post">
    <label for="uwu">Введите число:</label>
    <input type="number" name="uwu" id="uwu" min="1" required>
    <button type="submit">Вычислить</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["uwu"])) {
    $num = $_POST["uwu"];
    $count = 1;
    
    while ($count <= $num){
        if (($count % 3 == 0 || $count % 5 == 0) && $count % 15 != 0){
            echo $count . "<br>";   
        }
        $count++;       
    }
    echo "числа от 1 до $num, которые делятся на 3 или на 5, но не на 15: ";
}
?>

<!--все простые числа до введенного числа-->
<form action="index.php" method="post">
    <label for="mum">Введите число:</label>
    <input type="number" name="mum" id="mum" min="1" required>
    <button type="submit">Вычислить</button>
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["mum"])) {
        $num = $_POST["mum"];
        $count = 2; // начинаем с 2, так как 1 не является простым числом

        echo "Все простые числа от 1 до $num: <br>";

        while ($count <= $num){
            $isPrime = true; // предполагаем, что число простое

            // Проходим с 2 до квадратного корня числа
            for ($i = 2; $i <= sqrt($count); $i++) {
                if ($count % $i == 0) { // Если число делится на i, оно не простое
                    $isPrime = false;
                    break; // Выход из цикла, так как число не простое
                }
            }

            if ($isPrime) { // Если число простое
                echo $count . "<br>";
            }
            $count++;
        }
    }
?>
