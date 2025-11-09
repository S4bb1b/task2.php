
<?php

//1. Create an array with categories and expenses


$create_array = [

    'food' => 500,
    'transport' => 600,
    'others' => 700,

];

//2. Use array functions like array_push, array_pop, array_merge, and array_sum


$array_push = [200, 500, 600];

$push = array_push($array_push, 700);
echo "<pre>";
print_r($array_push) . "<br>";
$pop = array_pop($array_push);
echo "<pre>";
print_r($pop) . "<br>";
$merge = array_merge($array_push, [500, 700]);
echo "<pre>";
print_r($merge) . "<br>";
$sum = array_sum($merge);
echo "<pre>";
print_r($sum) . "<br>";


//3. Convert a string of expenses to array (explode) and back to string (implode)


$expense = "500,100,700,1200";

$str_to_arr = explode(',', $expense);
echo "<pre>";
print_r($str_to_arr) . "<br>";

$arr_to_str = implode(',', $str_to_arr);
echo "<pre>";
print_r($arr_to_str);
echo "<br>";

//4. Use string functions like strtoupper, strlen, substr, and str_replace

$string  = "php laravel batch 11";

echo strtoupper($string) . "<br>";
echo strlen($string) . "<br>";
echo substr($string, 4, 7) . "<br>";
echo str_replace('php', 'MREN', $string) . "<br>";

//5. Create a file named expenses.txt and write your expense data into it


$file = fopen('expenses.txt', 'w');
fwrite($file, "Food = 600,transport = 700, others = 1200,");
$show = file_get_contents('expenses.txt');
echo $show . "<br>";


//6. Append a new expense and read the file to show data on page

$data = file_get_contents('expenses.txt');
file_put_contents('expenses.txt', $data . "Utilities = 400");

$read = fopen('expenses.txt', 'r');
$hh = fread($read, '100');
echo $hh;

?>





