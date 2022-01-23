<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_hw_2_Maruzhenko</title>
</head>
<body>

<?php
// -----------------------------------------------------------------------------Task 1
echo '<strong>Задание 1.</strong><br />';
echo '<br />';
$array = [1, 3, -3, 0, null, true, '"', '0'];
foreach ($array as $a){
    if(!empty($a) || $a === 0 || $a === '0'){
        echo 'a = '. $a . '. Неверно. Переменная не пустая.<br />';
    }else{
        echo 'a = '. $a . '. Верно. Переменная пустая.<br />';
    }
}
echo '<hr />';

// -----------------------------------------------------------------------------Task 2
echo '<strong>Задание 2.</strong><br />';
echo '<br />';
$a = 123;
echo 'Было число ' . $a . '<br />';
$str_a = ( (string) $a);
$str_a[1] = '0';
$a = ( (int) $str_a);
echo 'Стало число ' . $a . '<br />';
echo '<hr />';

// -----------------------------------------------------------------------------Task 3
echo '<strong>Задание 3.</strong><br />';
echo '<br />';
$a = 1;
$b = 3;
if($a <= 1 && $b >= 3){
    echo 'a + b = '. ($a + $b);
}else{
    echo 'a - b = '. ($a - $b);
}
echo '<hr />';

// -----------------------------------------------------------------------------Task 4
echo '<strong>Задание 4.</strong><br />';
echo '<br />';
$str = 'abcde';
if($str[0] === 'a'){
    echo 'В строке '. $str . ' первый символ ' . $str[0] . '. Верно.';
}else{
    echo 'В строке '. $str . ' первый символ ' . $str[0] . '. Неверно.';
}
echo '<hr />';

// -----------------------------------------------------------------------------Task 5
echo '<strong>Задание 5.</strong><br />';
echo '<br />';
$str = '123123';
echo 'Дана строка: ' . $str . '.<br />';
$sum1 = $sum2 = 0;
for($i = 0; $i < 3; $i++){
    $sum1 += ( (int) $str[$i]);
}
echo 'Сумма первых 3 цифр = ' . $sum1 . '<br />';
for($i = 3; $i < 6; $i++){
    $sum2 += ( (int) $str[$i]);
}
echo 'Сумма вторых 3 цифр = ' . $sum2 . '<br />';

echo $sum1 === $sum2 ? 'Да.' : 'Нет.';
echo '<hr />';

// -----------------------------------------------------------------------------Task 6
echo '<strong>Задание 6.</strong><br />';
echo '<br />';
$degree = 333.33;
if($degree >= 1 && $degree <= 360){
    echo 'Введено: ' . $degree . '<sup>o</sup><br />';
    $sec = $degree * 240;
    $hours = floor($sec / 60 / 60);
    $minutes = round(((($sec / 60 / 60) - $hours) * 60),0);
    $seconds = abs(round(((((($sec / 60 / 60) - $hours) * 60) - $minutes) * 60),0));
    echo 'Прошло:<br />';
    echo $hours . ' час.<br />';
    echo $minutes . ' мин.<br />';
    echo $seconds . ' сек.<br />';
}else if ($degree === 0){
    echo 'Время остановилось. Часы не идут.<br />';
}else{
    echo 'Число вне допустимого диапазона от 0 до 360.<br />';
}
echo '<hr />';

// -----------------------------------------------------------------------------Task 7
echo '<strong>Задание 7.</strong><br />';
echo '<br />';

for ($i = 20; $i <= 45; $i++){
    if(!($i % 5)){
        echo $i . ' ';
        $sum += $i;
    }
}
echo ' - сумма чисел делящихся на 5 из диапазона от 20 до 45 = '. $sum . '.';
echo '<hr />';

// -----------------------------------------------------------------------------Task 8
echo '<strong>Задание 8.</strong><br />';
echo '<br />';

$a = 12345;
echo 'Было число ' . $a . '<br />';
$str_a = (string) $a;
for ($i = 0; $i < 5; $i++){
    if($i % 2){
        $str_a[$i] = '0';
    }
}
$a = (int) $str_a;
echo 'Стало число ' . $a . '<br />';
echo '<hr />';

// -----------------------------------------------------------------------------Task 9
echo '<strong>Задание 9.</strong><br />';
echo '<br />';
echo '<strong>Решение через цикл while:</strong><br />';

$num = 1000;
$iter = 0;
while ($num > 50){
    $num /= 2;
    $iter++;
}
echo 'Получилось число ' . $num . '<br />';
echo 'Количество итераций ' . $iter . '<br />';
echo '<br />';

echo '<strong>Решение через цикл for:</strong><br />';
$num = 1000;
for ($i = 0; $num > 50; $i++){
    $num /= 2;
}
echo 'Получилось число ' . $num . '<br />';
echo 'Количество итераций ' . $i . '<br />';
echo '<hr />';

// -----------------------------------------------------------------------------Task 10
echo '<strong>Задание 10.</strong><br />';
echo '<br />';
$n = 5; // количество звёздочек и строк
for ($i = 1; $i <= $n; $i++) {
    for ($y = 1; $y <= $n; $y++) {
        echo '*';
    }
    echo '<br />';
}
?>
</body>
</html>