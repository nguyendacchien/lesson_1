<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">

    Enter the number of primes:
    <input type="number" name="number" placeholder="Nhập số lượng số nguyên tố: " size="200">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $number=$_POST["number"];
    $count=0;
    $N=2;
    echo $number ." số nguyên tố đầu tiên là: ";
    while ($count<$number){
        if (isNumber($N)){
            echo $N . ", ";
            $count++;
        }
        $N++;
    }
}
function isNumber($number){
    $check=true;
    if ($number<2){
        $check=false;
    }
    for ($i=2;$i<$number;$i++){
        if ($number%$i==0){
            $check=false;
            berak;
        }
    }
    return $check;
}
