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
<h1>simple calculator</h1>
<form action="" method="post">
    investment Amount<br>
   <input type="number" name="invest" placeholder="input investment"><br>
    Yearly Interest Rate<br>
    <input type="number" name="interest" placeholder="input interest"><br>
    Number of Years<br>
    <input type="number" name="year" placeholder="input year"><br>
    <input type="submit" value="computer">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
     $invest = (int)$_POST["invest"];
     $interest = (float)$_POST["interest"];
     $year = (int)$_POST["year"];
     $future_value = 0;
     for ($i=0;$i<$year;$i++){
         $future_value=$invest+($invest*$interest);
         $invest=$future_value;
     }
     echo "The Future Value after ".$year." is ".$future_value;
}
