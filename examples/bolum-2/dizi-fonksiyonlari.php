<?php
echo "<pre>";

$notlar = array(60,70,40,80);
echo count($notlar)."<br>";


array_push($notlar, 100); //sona 

array_unshift($notlar,54);

print_r($notlar);

$plakalar = array("42"=>"konya","25"=>"erzurum");
$plakalar["06"] = "angara";

print_r($plakalar);




?>