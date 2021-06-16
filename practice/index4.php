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
<h2>Từ Điển Anh-Việt</h2>
<form action="" method="post">
    <input type="text" name="search" placeholder="Nhập từ cần tìm">
    <input type="submit" value="Tìm">
</form>
</body>
</html>
<?php $dictionary = [
    "hello" => "xin chào",
    "how" => "thế nào",
    "book" => "quyển vở",
    "computer" => "máy tính"
];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $searchWord = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description){
        if ($word==$searchWord){
            echo "Từ: " . $word . ". <br>nhĩa của từ: ". $description;
            echo "<br>";
            $flag = 1;
        }
    }

    if ($flag == 0){
        echo "không tìm thấy từ cần tra.";
    }
}
?>
