<?php

// $arr = [5, 6, 8, 10, 15];
// $digit = 14;

// switch (true) {
     
//     case $digit == $arr[0]:
//         echo '$digit ravana elemetu massiva';
//     case $digit == $arr[1]:
//         echo '$digit ravana elemetu massiva';
//     case $digit == $arr[2]:
//         echo '$digit ravana elemetu massiva';
//     case $digit == $arr[3]:
//         echo '$digit ravana elemetu massiva';
//     case $digit == $arr[4]:
//         echo '$digit ravana elemetu massiva';
//     default:
//         echo 'net sootvetstvuyshego elementa v massive';

// }

// $a = 0;

// while ($a<5) {
//     echo ++$a; 
// }

// echo '<br>';
// do {
//     echo ++$a;
// } while ($a<5);


// echo '<br>';
// $i = 0;
// $arr = [5, 8, 70, 56, 87];
// // while ($i < 5) {
// //     echo $arr[$i];
// //     $i++;
// //     echo '<br>';
// // }

// do {
//     echo $arr[$i];
//     $i++;
//     echo '<br>';
// } while ($i < 5);

// for ($i=0; $i<5; $i++) {
//     echo $arr [$i] . '<br>';
// }

// $arr=[];
// $arr1=[];
// for ($i=0; $i<15; $i++) {
//     $arr[$i] = rand(-50, 50); 
// }
// print_r($arr);

// for ($i=0; $i<12; $i++) {
//     if ($arr[$i] > 0)  {
//         $arr1[] = $arr[$i];

//     } 
//     if ($i >10) {
//         break;
//     }
// }
// print_r($arr1);


// $arr = ['a'=>7,'b'=>8,'c'=>10,'d'=>45,'f'=>78];

// foreach ($arr as $value) {
//     echo $value*2 . '<br>';
// }

// foreach ($arr as $key=>$value) {
//     echo $key . '=>' .  $value *2 . '<br>';
// }

// for ($i=1; $i<10; $i++) {
//     if($i>3 && $i<5) {
//        continue; 
//     }
    
//     echo $i;
// }

// for ($i=0; ; $i++) {
//     if($i*$i >70) {
//         goto message;
//     }
//     echo $i*$i . '<br>';
// } 
// message:
// 'квадрат чисел, меньше 70 окончен';

// function multiply ($a, $b) {
//     return $a*$b;
  
// }

// echo multiply(5,6);

// $a = 6;
// $b = 8;



// function multiply(...$arg) {
//     foreach ($arg as $value){
//         echo $value . '<br>';
//     }
// }

// multiply('tri', 'dva', 4);

function takes_array($input)
{
    echo "$input[0] + $input[1] = ", $input[0]+$input[1];
}