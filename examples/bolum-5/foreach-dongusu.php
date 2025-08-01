<?php
// $ogrenciler =array("ali","ayse","ahmet","deniz");

// foreach($ogrenciler as $ogrenci){
//     echo $ogrenci."<br>";
// }
// $urunler = array(
//     array("iphone 14 ",30000),
//     array("iphone 15 ",40000),
//     array("iphone 16 ",50000),
// );
// foreach ($urunler as $urun){
//     echo $urun[0]." ".$urun[1]."<br>";
// }


$urunler = array (
   "100" => array(
    "urun_adi"=>"iphone 14", 
    "fiyat"=>30000
),
 "101" => array(
    "urun_adi"=>"iphone 15", 
    "fiyat"=>40000
),
 "102" => array(
    "urun_adi"=>"iphone 16", 
    "fiyat"=>50000
)
 );

 
//  foreach ($urunler as $key => $value){
//     print_r($value)."<br>";
//     echo $key."<br>";

//  }
 
 foreach ($urunler as $key => $value) {
    echo "Ürün Kodu: $key<br>";
    echo "Ürün Adı: " . $value["urun_adi"] . "<br>";
    echo "Fiyat: " . $value["fiyat"] . " ₺<br><hr>";
}

?>