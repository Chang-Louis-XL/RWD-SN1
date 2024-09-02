<?php
// header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Origin: http://127.0.0.1:5501');
header('Access-Control-Allow-Origin: http://192.168.211.3');
// Access-Control-Allow-Origin: https://developer.mozilla.org


// 多個網址
// google cors different domains
// $http_origin = $_SERVER['HTTP_ORIGIN'];

// if ($http_origin == "http://192.168.211.71" || $http_origin == "http://192.168.211.72" || $http_origin == "http://192.168.211.73") {
//     header("Access-Control-Allow-Origin: $http_origin");
// }


header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$name = $_GET['name'] ?? 'noname';

$data = [
    's1' => 'amy',
    's2' => 'bob',
    's3' => 'cat',
    'name' => $name
];


// dd($data);
echo json_encode($data);

