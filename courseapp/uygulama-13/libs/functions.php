<?php
function kursEkle(&$kurslar,string $baslik,string $altBaslik,string $resim,string $yayinTarihi,int $yorumSayisi=0,int $begeniSayisi=0,bool $onay=true){
    $yeni_kurs[count($kurslar)+1] = array(
        "baslik" => $baslik,
        "altBaslik" => $altBaslik,
        "resim" => $resim,
        "yayinTarihi" => $yayinTarihi,
        "yorumSayisi" => $yorumSayisi,
        "begeniSayisi" => $begeniSayisi,
        "onay" => $onay
    );

    $kurslar = array_merge($kurslar,$yeni_kurs);
    
}


function urlDuzenle($baslik){
    return str_replace([" ","ç","@","."],["-","c","","-"],strtolower($baslik));
} 

function kisaAciklama($altBaslik){
    
  if (strlen($altBaslik) > 50){

   return substr($altBaslik, 0, 42) . "...";
  }else{
    return $altBaslik;
  }

}

function safe_html($data){ 
  $data = trim($data); //$ datayı boşluklardan arındırır
  $data = stripslashes($data); //sql injectiona karşı süzme işlemi yapar
  $data = htmlspecialchars($data);
  return $data ;
}
?>
