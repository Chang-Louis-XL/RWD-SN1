<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BMI</title>
</head>
<body>
<!-- from>div*2>lable+input:number     -->
<from action="bmi_result.php" method="get">
    <div>
        <lable for="height">身高:</lable>
        <input type="number" name="height" id="height">
    </div>
    <div>
        <lable for="weight">體重:</lable>
        <input type="number" name="weight" id="weight">
    </div>
    <div>
        <input type="submit"  value="開始計算">
        <input type="reset" value="清除重算">
    </div>
</from>



</body>
</html>