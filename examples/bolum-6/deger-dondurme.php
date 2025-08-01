<?php
function toplama(){
    return 20+30;
}

echo toplama();
echo "<br>";

echo"<br>";

function yil(){
    return date('Y');
}

function yasHesapla(){
   return  yil() - 2001;
}

echo $yas = yasHesapla();


echo "<br>";

echo"<br>";

function saat(){
    return date('h');
}

function mesaj(){
    if(saat()<12){
        return "günooo";
    } else{
        return "akşoo";
    }
}
echo mesaj();





?>