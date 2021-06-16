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
<h1>USD To VND</h1>
<form method="post">
    <fieldset style="width: 25%">
        <legend>convert money</legend>
        input USD:
        <input type="number" name="USD" placeholder="input USD"><br>
        <input type="submit" value="convert">
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $USD=(int)$_POST['USD'];
    $VND=$USD*23000;
    echo "Money Convert From VND To USD is : ".$VND." vnd";
}
