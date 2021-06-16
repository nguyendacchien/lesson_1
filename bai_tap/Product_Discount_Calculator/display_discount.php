<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $description = $_POST["description"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    $discount_amount=$price*$discount*0.01;
    echo $description. "<br>The discounted price is :".($price-$discount_amount);
}
