<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$start="2024-4-25";
$end='2025-2-26';

$start=strtotime($start);
$end=strtotime($end);   

echo $start ;
echo "<br>";
echo $end;
echo "<br>";


$diff=$end-$start;
echo $diff/ceil(60*60*24)."day";  

?>
    
</body>
</html>