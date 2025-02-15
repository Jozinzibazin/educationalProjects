<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Конвертор</title>
    </head>
    <body>
        <h1>Преобразование из дюймов в сантиметры</h1>
        <form action="index.php" method="post">
            <p>Величина в дюймах:
            <input type="number" name="inches" size="10"></p>
            <p><input type="submit" value="Преобразовать"></p>
        </form>
        <?php
            if (isset($_POST['inches'])) { // Проверка на наличие значения в поле формы
                $ins = $_POST['inches'];
                $cents = round($ins * 2.54);
                $is = (string)$ins;
                $cos = (string)$cents;
                
                if (strpos($is, '.') !== false || (strlen($is) > 1 && $is[-2] == '1')) {// Проверка на десятичную точку или если в строке больше одного символа и предпоследний символ в строке равен 1, то окончание 'ов'
                    $ins_ending = 'ов';
                } else {
                    $last_digit = (int)substr($is, -1); //функция substr возвращает в виде строки. В данном случае вернет последний элемент строки
                    if ($last_digit == 1) {
                        $ins_ending = '';
                    } elseif ($last_digit >= 2 && $last_digit <= 4) {
                        $ins_ending = 'а';
                    } else {
                        $ins_ending = 'ов';
                    }
                }

                if (strpos($cos, '.') !== false || (strlen($cos) > 1 && $cos[-2] == '1')) {
                    $ins_ending = 'ов';
                } else {
                    $last_word = (int)substr($cos, -1);
                    if ($last_word == 1) {
                        $cos_ending = '';
                    } elseif ($last_word >= 2 && $last_word <= 4) {
                        $cos_ending = 'а';
                    } else {
                        $cos_ending = 'ов';
                    }
                } 

                echo "<p>{$ins} дюйм{$ins_ending} = {$cents} сантиметр{$cos_ending}.</p>";
            }
        ?>
    </body>
</html>