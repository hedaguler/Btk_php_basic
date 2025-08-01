<?php
// function toplama ($sayi1, $sayi2){
//     return $sayi1 + $sayi2;
// }

// echo toplama("8","10");

 //////////////////////////////////////////////////////////////////////////
/// aşağıda stringi toplama diyoruz hatalı veri geri dönüş türü girildiyse hata dön

declare(strict_types=1);
function toplama (int $sayi1, int $sayi2){
    return $sayi1 + $sayi2;
}

echo toplama("8","10");



?>