<?php
$b = 0;
$count = 0;
$num = 0;
$num1 = 0;
$circle = "●";

/*for ($a=2; $a <= 10; $a=$a+2) {
    echo $a . "<br />";
    //break;
}

for ($i = 0; $i < 4; $i++) {
    echo $i;
}

echo "<br />";

for ($q = 1; $q <= 5; $q++) {
    echo $q * 2 . '<br />';
}

echo "<br />";*/

while ($b <= 20) {
    if ($b > 4 && $b < 18) {
        ++$b;
        continue;
    }
    if ($b == 18) {
        echo "..." . "<br />";
        ++$b;
    }
    echo $b . "<br />";
    ++$b;
}

echo "<br />";

while ($count <= 100) {
    if ($count == 20) {
        break;
    }
    if ($count % 3 == 0){
        ++$count;
        continue;
    }
    echo $count . "<br />";
    ++$count;
}

/*for ($inning = 1; $inning <= 9; $inning++) {
    if ($inning >= 5) {
        echo "今" . $inning . "回投げた。 次の日は登板できません。<br>";
        //continue;
    } else {
    echo "今" . $inning . "回投げた。 次の日は登板できます。<br>";
    }
}*/

/*$score = 99;
echo '田中君は、';

if ($score >= 90) {

echo '大変良くできました!!';

    if ($score === 100) {

        echo '満点おめでとう!!';
    }

} elseif($score >=70) {

echo '良くできました!';

} else {

echo '不合格です。';

}
?>*/

echo "<br />";

do {
    echo "num =" . $num . "<br />";
    $num++;
} while ($num <= 2);

echo "<br />";

for ($num1 = 1; $num1 <= 50; $num1++) {
    if ($num1 % 3 == 0 && $num1 % 5 == 0) {
        echo "FizzBuzz" . "<br />";
    } elseif ($num1 % 5 == 0) {
        echo "Buzz" . "<br />";
    } elseif ($num1 % 3 == 0) {
        echo "Fizz" . "<br />";
    } else {
        echo $num1 . "<br />";
    }
}

for ($i = 1; $i < 6; $i++) {
    for ($h=1; $h < 6; $h++) { 
        echo $circle;
    }
    echo "<br />";
}