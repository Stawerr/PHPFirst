<?php
$valueProduct = readline("Please insert the value of the product ");
$value = readline("Please insert the value that you will give to pay ");

$change = $value-$valueProduct;
$trueChange= $change*0.1;
$change=$change-$trueChange;
echo ("The change is ".$change);