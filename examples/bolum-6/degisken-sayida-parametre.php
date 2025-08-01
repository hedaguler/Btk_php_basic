<?php

// function toplam($a, $b, $c){
//     return $a + $b +$c;
// }

// $sonuc = toplam(10,20,30);

// echo $sonuc;


////////////////////////////////////

// $sayilar = array(10,20,30,40);

// function toplam($sayilar){
//     $toplam=0;
//     foreach($sayilar as $sayi){
//         $toplam += $sayi;
//     }
//     return $toplam;

// }

// echo toplam ($sayilar);

/////////////////////////////////////


function toplam(...$sayilar){
    $toplam=0;
    foreach($sayilar as $sayi){
        $toplam += $sayi;
    }
    return $toplam;

}

echo toplam (10, 20 ,30, 40,);
echo toplam (10, 20 );


?>