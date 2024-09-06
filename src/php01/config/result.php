<?php
htmlspecialchars($_GET["name"] , ENT_QUOTES);
htmlspecialchars($_GET["contents"] , ENT_QUOTES);
htmlspecialchars($_GET["number"] , ENT_QUOTES);

//$_GET = ["a" , "b" , "c"];

echo "私の名前は、" . $_GET["name"] . "<br />" . "ご希望の商品は、" . $_GET["contents"] . "<br />" . "注文数は、" . $_GET["number"];

/*foreach($_GET as $value){
    echo $value;
}*/