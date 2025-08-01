<?php
//reference
//value

function toplama($sayi){
$sayi +=10;
echo $sayi;
}


$ornekSayi = 25;
toplama($ornekSayi);

echo"<br>";

echo $ornekSayi;

/////////////////////////////////////////////////777

function yasHesapla(&$tarihler){
    for($i=0; $i < count($tarihler); $i++){
        $tarihler[$i] = 2023 - $tarihler[$i];
    }
    return $tarihler;
}

$liste = array(1990,1985,2000);

echo"<pre>";
print_r(yasHesapla($liste));
print_R($liste);
echo "</pre>";

?>