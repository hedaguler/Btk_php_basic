<?php

function greeting($isim,$mesaj){
    return "$mesaj $isim";
}
$sonuc = greeting("hello","mia");

echo $sonuc;

///////////////////////////////////////777

echo "<br>";
echo "<br>";
 


function greeting1($isim ="heda",$mesaj="welcome"){
    return "$mesaj $isim";
}
$sonuc1 = greeting1();
echo $sonuc1;


///////////////////////////////////////777

echo "<br>";
echo "<br>";


function kareAl($taban, $us){   //burda içine default değer de verebilrdik mesela tabna hep 3 olsun üst değişebilir gibi :)) 
    return $taban ** $us;
}

$sonuc2 = kareAl(2,4);

echo $sonuc2;

?>