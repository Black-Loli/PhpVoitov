<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin: 100px;
            display: block;
            background: linear-gradient(90deg, #8EC5FC 0%, #E0C3FC 100%);
        }
    </style>
</head>
<body>
<?php
$arr = [];
$sum = 0;
$sred = 0;
$k=0;
for ($I=0; $I<4; $I++) {
    $inner_arr=[];
    for ($j=0; $j<4; $j++) {
        $vel = random_int(1, 4);
        $inner_arr[]= $vel;
        $sum+=$vel;
        $k+=1;
    }
    $arr[]=$inner_arr;
}
$sred=$sum/$k;

echo "Числа", json_encode($arr),"   ";
echo "Сумма = ", json_encode($sum),"   ";
echo "Среднее Значение = ", json_encode($sred),"   ";
?>
</body>
</html>