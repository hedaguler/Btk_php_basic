<?php

$ogrenciler = array("ali","veli","su","heda","hüma");

/*
echo $ogrenciler[0];
echo $ogrenciler[1];
echo $ogrenciler[2];

echo "<br>";
echo "<br>";

for($i =0; $i <3; $i+=1)
    {
    echo $ogrenciler[$i]."<br>";
}

echo "<br>";
echo "<br>";

for($i =0; $i < count($ogrenciler); $i+=1)
    {
    echo $ogrenciler[$i]."<br>";
}
*/

// $i =0;
// while($i < count($ogrenciler)){
//     echo $ogrenciler[$i]."<br>";
//     $i += 1;
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
),

  
);

// for($i=0; $i<count($urunler); $i++){
//     print_r($urunler[$i]);

// }

// for($i=0; $i<count($urunler); $i++){
//     echo($urunler[$i][0]." ".$urunler[$i][1]);
//     echo"<br>";

// }

$keys = array_keys($urunler);

for($i=0; $i<count($urunler); $i++){
    print_r($urunler[$keys[$i]]);
    echo"<br>";

}

?>
  
