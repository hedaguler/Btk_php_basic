<?php
//setcookie(key,value,süresi)
setcookie("username","sadikturan",time() + (60*60*24));
setcookie("auth","true",time() + (60*60*24));

//cookie bilgisini alma
//çağrılan cookie yoksa UNDEFINED ARRAY KEY "varolmadığı halde aranan cookie"  Hatasını alırız.  bu hatayı almamak için isset ile bi check yapılabilir.


if (isset ($_COOKIE["username"])){  // varsa
    echo $_COOKIE["username"];
}
else{
    echo "cookie tanımlanmamış";
}
echo "<br>";
echo $_COOKIE["auth"];
echo "<br>";



// cookie yi güncellemek (değerini tabiiki :) )istersek
setcookie("userCountry","China",time() + (60*60*24));
echo "<br>";

setcookie("userCity","HongKong",time() + (60*60*24));


// silmek
//+ şimdiden sonra(bu kadar time daha göster)
//şimdiden önce (bu kadar time daha eksik göster şu kadar süre önce sil gibi bişey yani:) )
setcookie("visitedCity","Erzurum",time() - (60*60*24));





?>