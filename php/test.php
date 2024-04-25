<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: 'courier new', courier, monospace;
        }
      table{
        border-collapse: collapse;
      }
        td{
    
        border:1px solid black;
        padding: 1px;
       }

    </style>
</head>

<body>
    <?php
    $table9x9 = [];
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= 9; $j++) {
            $table9x9[] = " $i * $j = " . ($i * $j);
        }
    }
    print_r($table9x9);
    echo"<hr>";
   foreach ($table9x9 as $nien) {   
      echo"". $nien ."";
      if ($i%9== 0) {
        echo "<br>";
        // echo "{"."$i"."}";
      }
      $i++;    
      echo "{"."$i"."}";
   }
   echo "<hr>";



  echo "<table>";
   foreach($table9x9 as $idx=>$nien){
if($idx%9 ==0){
    echo "<tr>";
}
echo "<td> $nien </td>";
if (($idx+1)%9== 0) {
echo "</tr>";
}
   }
echo"</table>";

echo"<hr>";
    
$bb=[];
while(count($bb) < 6) { 
$tmp=rand(1,38);
if(!in_array($tmp, $bb)) {
    $bb[]=$tmp;
}
}
echo join(",",$bb);
echo "<br>";
echo "<hr>";

$leaps = [];
$year = 2024;
for ($i = $year; $i < ($year + 500); $i++) {
    if ($i % 4 == 0 && $i % 100 != 0 || $i % 400 == 0) {
        $leaps[] = $i;
    }
}

echo "<h3>自$year 至" . ($year + 500) . "止，有以下閏年：</h3>";
// foreach ($leaps as $leap) {
    echo $leaps;
    echo "<br>";
    

echo "<hr>";
echo "共有" . count($leaps) . "個閏年"
?>

?>
</body>

</html>