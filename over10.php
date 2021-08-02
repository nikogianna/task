<?php

function over10($param) {
    return (is_int($param) && $param >= 10)? true: false;
}

$exp1 = over10(5);
$exp2 = over10(15);
$exp3 = over10(10);
$exp4 = over10("10");
echo "\n";
echo "\n";
echo '5 equal or over 10 --> ';
echo $exp1 ? 'true': 'false';
echo "\n";
echo "\n";
echo '15 equal or over 10 --> ';
echo $exp2 ? 'true': 'false';
echo "\n";
echo "\n";
echo '10 equal or over 10 --> ';
echo $exp3 ? 'true': 'false';
echo "\n";
echo "\n";
echo 'non int --> ';
echo $exp4 ? 'true': 'false';
echo "\n";
echo "\n";
?>