<?php

function isPrime($n){
    $check = true;
    if ($n<2){
        $check=false;
    }
    for ($i=2;$i<$n;$i++){
        if ($n%$i==0){
            $check=false;
            break;
        }
    }
    return $check;
}
echo "các số nguyên tố nhỏ hơn 100 : <br>";
for ($i=2;$i<100;$i++){
    if (isPrime($i)){
        echo $i.", ";
    }
}
