<?php
$a = 7;
$people = "Sabur";

if ($a == 7) {
echo "\$aは7です";
}elseif ($a == 8){
echo "\$aは8です";
}else{
echo "\$aは7以外です";
}

echo "<br />";

switch ($people) {
    case 'Saburo':
        echo "三郎です";
        break;
    default:
        echo "名前を入力してください";
        break;
}

echo "<br />";

$ans = ($a > 5) ? 'TRUE' : 'FALSE';
echo $ans;

echo "<br />";