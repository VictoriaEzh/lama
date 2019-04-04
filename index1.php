<?php

error_reporting(-1);
/*
1boolean: true / false - const регистронезависимые - выполняется ли условие
2integer
3float
4string
 */
/*1
$var = true;
//var_dump($var);
//echo gettype($var);
*/
/*2
$int = '10' + 5;
var_dump($int);
*/
/*3
$fl = 1.2;
var_dump($fl);
*/
$var = 10;
$str = 'This is string. $var';

$str2 = "This is string. {$var}";
var_dump($str2);
?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<h1> </h1>

</body>
</html>