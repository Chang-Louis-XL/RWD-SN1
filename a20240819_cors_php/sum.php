<?php
header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Origin: http://127.0.0.1:5501');
// header('Access-Control-Allow-Origin: http://developer.mozilla.org');
// header('Access-Control-Allow-Origin: http://apple.com');

// 多個網址
// google cors different domains
// $http_origin = $_SERVER['HTTP_ORIGIN'];

// if ($http_origin == "http://192.168.211.71" || $http_origin == "http://192.168.211.72" || $http_origin == "http://192.168.211.73") {
//     header("Access-Control-Allow-Origin: $http_origin");
// }

// Access-Control-Allow-Origin: https://developer.mozilla.org
// Access-Control-Allow-Origin: https://developer.mozilla.org

header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");


function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$num1 = $_GET['num1'] ?? 0;
$num2 = $_GET['num2'] ?? 0;
$sum = $num1 + $num2;
$name = $_GET['name'] ?? 'noname';

$data = [
    'num1' => $num1,
    'num2' => $num2,
    'sum' => $sum,
    'name' => $name
];


// dd($data);
echo json_encode($data);
