<?php

// Variable Practice
// $myName = 'Syed Ashiq';
// $myAge = 36;
// $myLocation = 'Cumilla';

// echo $myName .'<br/>';
// echo $myAge . '<br/>';
// echo $myLocation . '<br/>';

// $myAge = 35;

// echo $myAge;

// Constant Practice

// define ('Name', 'Syed Ashiq');

// define ('Age', '36');

// define ('Location', 'Cumilla');

// echo Name .'<br/>';
// echo Age . '<br/>';
// echo Location;

// Mathmethical Operator Practice
// $number1 = 100;
// $number2 = 20;

// echo $number1 + $number2;
// echo '<br/>';
// echo $number1 - $number2;
// echo '<br/>';
// echo $number1 * $number2;
// echo '<br/>';
// echo $number1 / $number2;
// $number2 = 22;
// echo '<br/>';
// echo $number1 % $number2;
// $number2 = 3;
// echo '<br/>';
// echo $number1 ** $number2;

// Practicing Array

// $array = [
//     'name' => 'Ashiq',
//     'age' => 35,
//     'address' => 'cumilla'
// ];
// print_r ($array)

// $i = 1;
// $multi =8;

// while($i <= 10){

//     echo $i . 'x' .$multi .'=' .$i*$multi .'<br/>';
//     $i++;
// }

// $i= 5;
// echo $i .'<br/>';
// echo $i *2 .'<br/>';

echo '1st Pyramid' . '<br/>';
$i=1;
while($i <=5){
    $output = str_repeat('*', $i);
    echo $output .'<br/>';
    $i++;   
}

echo '<br/>';
echo '2nd Pyramid' . '<br/>';

$i = 5;
while($i >= 1){
    $output = str_repeat ('*', $i);
    echo $output . '<br/>';
    $i--;

}





