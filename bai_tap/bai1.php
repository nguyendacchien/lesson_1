
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Speak Number</title>
    <style>
        input[type=number] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #speak {
            border-radius: 2px;
            padding: 12px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Speak Number</h2>
<form method="post">
    <input type="number" name="number" placeholder="Input Number" size="30">
    <input id="speak" type="submit" value="Speak">
</form>
</body>
</html>
<?php
$digit = [
    0 => "zero",
    1 => "one",
    2 => "two",
    3 => "three",
    4 => "four",
    5 => "five",
    6 => "six",
    7 => "seven",
    8 => "eight",
    9 => "nine"
];
$teen = [
    0 => "ten",
    1 => "eleven",
    2 => "twelve",
    3 => "thirteen",
    4 => "fourteen",
    5 => "fifteen",
    6 => "sixteen",
    7 => "seventeen",
    8 => "eighteen",
    9 => "nineteen"
];
$ty = [
    2 => "twenty",
    3 => "thirty",
    4 => "forty",
    5 => "fifty",
    6 => "sixty",
    7 => "seventy",
    8 => "eighty",
    9 => "ninety"
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = (int)$_POST['number'];
    if ($number < 1000 && $number >= 0) {
        $hundreds = (int)floor($number / 100);
        $tens = (int)floor(($number - $hundreds * 100) / 10);
        $ones = $number - $hundreds * 100 - $tens * 10;
        if ($number < 10) {
            foreach ($digit as $num => $speak) {
                if ($number === $num) {
                    echo $speak;
                }
            }
        } else if ($number < 100) {
            if ($tens === 1) {
                foreach ($teen as $num => $speak) {
                    if ($ones === $num) {
                        echo $speak;
                    }
                }
            } else {
                foreach ($ty as $num => $speak) {
                    if ($tens === $num) {
                        foreach ($digit as $num1 => $speak1) {
                            if ($ones === $num1) {
                                echo $speak . " " . $speak1;
                            }
                        }
                    }
                }
            }
        } else {
            foreach ($digit as $num => $speak) {
                if ($hundreds === $num) {
                    if ($tens === 0) {
                        foreach ($digit as $num0 => $speak0) {
                            if ($ones === 0) {
                                echo $speak . " hundred ";
                                break;
                            } else if ($ones === $num0) {
                                echo $speak . " hundred and " . $speak0;
                            }
                        }
                    } else if ($tens === 1) {
                        foreach ($teen as $num1 => $speak1) {
                            if ($ones === $num1) {
                                echo $speak . " hundred and " . $speak1;
                            }
                        }
                    } else {
                        foreach ($ty as $num2 => $speak2) {
                            if ($tens === $num2) {
                                foreach ($digit as $num3 => $speak3) {
                                    if ($ones === 0) {
                                        echo $speak . " hundred and " . $speak2;
                                        break;
                                    } else if ($ones === $num3) {
                                        echo $speak . " hundred and " . $speak2 . " " . $speak3;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    } else {
        echo "Out of ability";
    }
}
?>