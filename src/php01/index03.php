<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;
$e = 30;
$aaa = 10;
$bbb = 10;
$ccc = 5;
$ddd = 5;

++$aaa;

echo $bbb++;

--$ccc;

echo $ddd--;

$answer1 = $a + $b;
$answer2 = $a - $b;
$answer3 = $a * $b;
$answer4 = $a / $b;
$answer5 = $a % $c;
//$answer6 = $empty = $b;
$answer7 = $d += $c;
//$ab = ($a > $c);
//$as = ($a < $e);
$answer8 = ($a > $c and $a < $e);
$answer9 = $aaa;
$answer10 = $bbb;
$answer11 = $ccc;
$answer12 = $ddd;

echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";
echo $answer3;
echo "<br />";
echo $answer4;
echo "<br />";
echo $answer5 . "これは5";
echo "<br />";
//echo $answer6;
//echo "<br />";
echo $answer7 . "これは7";
echo "<br />";
echo $answer8;
echo "<br />";
echo $answer9;
echo "<br />";
echo $answer10;
echo "<br />";
echo $answer11;
echo "<br />";
echo $answer12;