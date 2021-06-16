<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        fieldset{
            width: 400px;
        }
    </style>
</head>
<body>
<h1>simple calculator</h1>
<form method="post">
    <fieldset>
        <legend>calculator</legend>
        First operand:
        <input type="number" name="operand_1" size="30"><br>
        Operator:
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select><br>
        Second operand:
        <input type="number" name="operand_2" size="30"><br>
        <input type="submit" value="calculate">
    </fieldset>

</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $operand_1 = (int)$_POST['operand_1'];
    $operand_2 = (int)$_POST['operand_2'];
    $operator = $_POST['operator'];
    $text = "<h1>Result :</h1><br>";
    $result =0;
    switch ($operator){
        case "+":
            $result=$operand_1+$operand_2;
                echo $text . $operand_1 . "+". $operand_2 . "=" . $result;
            break;
        case "-":
            $result= $operand_1-$operand_2;
                echo $text . $operand_1 . "-". $operand_2 . "=" . $result;
            break;
        case "x":
            $result= $operand_1*$operand_2;
                echo $text . $operand_1 . "x". $operand_2 . "=" . $result;
            break;
        case "/":
            if ($operand_2==0){
                echo $text . "Invalid calculation";
            }else{
                $result= $operand_1/$operand_2;
                echo $text . $operand_1 . "/". $operand_2 . "=" . $result;
                break;
        }
    }
}
?>

