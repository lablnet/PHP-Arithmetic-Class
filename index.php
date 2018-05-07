<?php
require_once 'classes/Arithmetic.php';

$add = "10,20,-30,40,50,60";
$mul = "2,2,5,10";
$sub = "20,10";
$div = "1000,20,5,2";
$avg = "10,20,30,40,50,60";
$addition = Arithmetic::Calculate($add,'addition');
$multiplication = Arithmetic::Calculate($mul,'multiplication');
$substraction = Arithmetic::Calculate($sub,'substraction');
$divisin = Arithmetic::Calculate($div,'division');
$average = Arithmetic::Calculate($avg,'average');


echo "Addition: ".$addition;
echo "<br>";
echo "multiplication: ".$multiplication;
echo "<br>";
echo "Substraction: ".$substraction;
echo "<br>";
echo "divisin: ".$divisin;
echo "<br>";
echo "average: ".$average;

