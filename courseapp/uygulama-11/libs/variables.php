<?php const title = "PopülerKurslar";

$kategoriler = array(
    array("kategori_adi" => "Programlama", "aktif" => true),
    array("kategori_adi" => "Web Geliştirme", "aktif" => false),
    array("kategori_adi" => "Veri Analizi", "aktif" => false),
    array("kategori_adi" => "Ofis Uygulamaları", "aktif" => false),
    array("kategori_adi" => "MobilUygulamalar", "aktif" => false),
);

$sehirler = array(
    "06" => "Ankara", 
    "41" => "Kocaeli",
    "34" => "Istanbul",
    "53" => "Rize",
    "25" => "Erzurum",

 
);

$hobiler = array(
    "1" => "Sinema",
    "2" => "Spor",
    "3" => "Müzik",
    "4" => "Kitap"


);

$kurslar = array(
    "1" => array(
        "baslik" => "php kursu",
        "altBaslik" => "Sıfırdan ileri seviye Php ile web geliştirme",
        "resim" => "1.jpg",
        "yorumSayisi" => 0,
        "begeniSayisi" => 80,
        "onay" => true
    ),
    "2" => array(
        "baslik" => "Python kursu",
        "altBaslik" => "Sıfırdan ileri seviye Python ile web geliştirme",
        "resim" => "2.jpg",
        "yorumSayisi" => 25,
        "begeniSayisi" => 42,
        "onay" => true
    ),
    "3" => array(
        "baslik" => "Node.js kursu",
        "altBaslik" => "Sıfırdan ileri seviye Node.js ile web geliştirme",
        "resim" => "3.jpg",
        "yorumSayisi" => 24,
        "begeniSayisi" => 300,
        "onay" => true
    ),
     "4" => array(
        "baslik" => "Django kursu",
        "altBaslik" => "Sıfırdan ileri seviye Djongos ile web geliştirme eğitimimize siz de katılın",
        "resim" => "1.jpg",
        "yorumSayisi" => 10,
        "begeniSayisi" => 5,
        "onay" => true
       

    )

);

?>