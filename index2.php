


<?php
$i = 0;
$array_menu = array();

$array_menu[$i]['url']="/";
$array_menu[$i++]['name']='Главная';

$array_menu[$i]['url']="/razdel_1/";
$array_menu[$i++]['name']="/Описание/";

$array_menu[$i]['url']="/razdel_2/";
$array_menu[$i++]['name']="/Дополнительно/";

$array_menu[$i]['url']="/razdel_3/";
$array_menu[$i++]['name']="/Связь с нами/";

dump($array_menu);

function dump($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

print ("Massiv sluchayniy<br>");
for($i=0;$i<5;$i++){
    $mas[$i]=rand(0,20);
}
for($i=0;$i<5;$i++){
    print $mas[$i];
    if($i<count($mas) - 1) {
        print ",";}
}
print ("<br>");


print ("Massiv stroka<br>");
$stroka = implode( ",", $mas);
echo $stroka;
print ("<br>");

print ("Iz stroki v massiv <br>");
$mas2 = explode(",", $stroka);

var_dump($mas2);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
<?php
$array_menu = array(
    array("link"=>"Главная", "href"=>"/"),
    array("link"=>"Описание", "href"=>"/razdel_1/"),
    array("link"=>"Дополнительно", "href"=>"/razdel_2/"),
    array("link"=>"Связь с нами", "href"=>"/razdel_3/")
    );
?>
        <ul>
            <li><a href='<?=$array_menu [0] ["href"]?>'><?=$array_menu [0] ["link"]?></a></li>
            <li><a href='<?=$array_menu [1] ["href"]?>'><?=$array_menu [1] ["link"]?></a></li>
            <li><a href='<?=$array_menu [2] ["href"]?>'><?=$array_menu [2] ["link"]?></a></li>
            <li><a href='<?=$array_menu [3] ["href"]?>'><?=$array_menu [3] ["link"]?></a></li>
        </ul>
    </body>
</html>