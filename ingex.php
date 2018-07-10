


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

<ul>
    <?php
    for($i=0;$i<5;)
    ?>
</ul>
