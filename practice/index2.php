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
    <h2>login</h2>
    <label>
        Username:
        <input type="text" name="username" size="30" placeholder="username">
    </label>
    <label>
        password:
        <input type="password" name="password" size="30" placeholder="password">
    </label>
    <input type="submit" value="Sign in">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username==="admin" && $password ==="admin"){
        echo "<h3>Welcome <span style='color: red'>". $username."</span> to website</h3>";
    }else{
        echo "<h3><span style='color: red'>login Error</span></h3>";
    }
}
?>