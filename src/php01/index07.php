<?php
/*$people = array(1 , 2 , 3 , 4);
echo $people . "<br />";
echo $people[3];*/

$people = [
    [
        "Taro" , "25" , "men"
    ] ,
    [
        "Jiro" , "20" , "men"
    ] ,
    [
        "hanako" , "16" , "women"
    ]
];

foreach($people as $parson){
    echo $parson[0] . "(" . $parson[1] . "歳" . $parson[2] . ")" . "<br />";
}