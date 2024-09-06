<?php
//$total = 200;

function calculation($numb1 , $numb2)
{
    $value = $numb1 - $numb2;
    return $value;
}

$result = calculation(10 , 5);
echo $result . "<br />";

function judgment($score1 , $score2 , $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
        $judgment = $total . "なので合格です";
    }else {
        $judgment = $total . "なので不合格です";
    }
    return $judgment;

}

//judgment(100 , 100 , 100);

echo "合計点は" . judgment(100 , 100 , 5) . "<br />";

/*$under = 10;
$height = 10;
$vertical = 20;
$horizontal = 20;*/



function triangle($under , $height)
{
    $triangle = $under * $height / 2;
    echo $triangle . "<br />";
    return $triangle;
}

function square($vertical , $horizontal)
{
    $square = $vertical * $horizontal;
    echo $square . "<br />";
    return $square;
}

function trapezium($triangle , $square)
{
    $trapezium = $triangle * 2 + $square;
    echo $trapezium . "<br />";
}

triangle(10 , 10);
square(20 , 20);
trapezium(50 , 400);

//echo $triangle . "<br />";
//echo $square . "<br />";
//echo $trapezium . "<br />";