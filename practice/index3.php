<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<table>
    <caption><h1>Danh Sách khách hàng</h1></caption>
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
    </tr>
    </thead>
    <?php
    $customerList = [
        "1" => [
            "tên" => "mai văn hoàn",
            "ngày sinh" => "1983-08-20",
            "địa chỉ" => "hà nội",
        ],
        "2" => [
            "tên" => "nguyễn văn nam",
            "ngày sinh" => "1983-08-20",
            "địa chỉ" => "bắc giang",
        ],
        "3" => [
            "tên" => "nguyễn thái hòa",
            "ngày sinh" => "1983-08-21",
            "địa chỉ" => "nam định",
        ],
        "4" => [
            "tên" => "trần đăng khoa",
            "ngày sinh" => "1983-08-22",
            "địa chỉ" => "hà tây",
        ]
    ];
    ?>
    <tbody>
    <?php foreach ($customerList as $key =>$value): ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $value['tên'] ?></td>
            <td><?php echo $value['ngày sinh'] ?></td>
            <td><?php echo $value['địa chỉ'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>

