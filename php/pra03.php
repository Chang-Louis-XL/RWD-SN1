<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>畫星星</title>
    <style>
        /* 讓字形大小相同 */
        *{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
<h2>直角三角形</h2>    

<?php
$stars=7;

for($i=0;$i<$stars;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

// i=0 j=1 加一顆
// i=1 j=2 加兩顆

?>
<h2>倒直角三角形</h2>    

<?php
for($i=$stars;$i>0;$i--){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br>";
}

?>
<h2>正三角形</h2>    

<?php
for($i=0;$i<$stars;$i++){
    for($k=0;$k<$stars-1-$i;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$i*2+1;$j++){
        echo "*";
    }
    echo "<br>";
}

?>

<h2>菱形</h2>



<?php

// 確認基數的值，若除後不是基數就-1
$odd=($stars%2==0)?$stars+1:$stars;
// 確認中間值
$mid=(($odd+1)/2)-1;


for($i=0;$i<$stars;$i++){

    if($i<=$mid){
        $tmp=$i;
    }else{
       // $tmp--;
        $tmp=$tmp-1;
    }

    for($k=0;$k<$mid-$tmp;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$tmp*2+1;$j++){
        echo "*";
    }
    echo "<br>";
}

/* for($i=$stars-1;$i>0;$i--){
    for($k=0;$k<$stars-$i;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$i*2-1;$j++){
        echo "*";
    }
    echo "<br>";
} */




?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>