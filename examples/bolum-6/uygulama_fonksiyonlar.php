<?php

    # 1- Kendisine gönderilen bir kelimeyi belirtilen kez ekranda gösteren fonksiyonu yazınız. 

    // function yazdir($kelime,$adet){
    //     for($i=0; $i<$adet ; $i++){
    //         echo $kelime."<br>";
    //     }
    // }

    // yazdir("selamlar",6);

    ///////////////////////////////////////////////////////////////////////////////

//2- Dikdörgenin alan ve çevresini hesaplayan fonksiyonu yazınız.



function hesapla($uzun, $kisa) {
    $cevre = 2 * $uzun + 2 * $kisa;
    $alan = $uzun * $kisa;

    return array(
        "cevre" => $cevre,
        "alan" => $alan
    );
}

$sonuc = hesapla(10, 5);

echo "Çevre: " . $sonuc["cevre"] . "<br>";
echo "Alan: " . $sonuc["alan"];


echo"<br>";

// 3- Yazı tura uygulamasını fonksiyon kullanarak yapınız. 

function yaziTuraAt(){
    $sayi=rand(1,100);
    if($sayi<50){
        echo "tura";
    }else{
    echo"yAZİ";
}

}
yaziTuraAt();

echo"<br>";

echo"<br>";

//    # 4- Kendisine gönderilen bir sayının tam bölenlerini bir diziyle döndüren fonksiyonu yazınız.

function tamBolenleriBul($sayi){
    $tamBolenler = array();

    for($i = 2; $i < $sayi; $i++){
        if($sayi % $i ==0){
            array_push($tamBolenler,$i);
        }
    }
    return $tamBolenler;
}

print_r(tamBolenleriBul(50));
print_r(tamBolenleriBul(20));



?>


