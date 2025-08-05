<?php

session_start();

// session_unset();  // sessionların alayını silmek için
// $_SESSION = [];  //session bilgisini sıfırlamış olduk içine boş dizi atayarak :)

unset($_SESSION["username"]);


if(isset($_SESSİON["username"])){

}
else{
    echo"username yok";
}


// echo $_SESSION["password"]; yukarda silindiği için hata döner

echo "<br>";


//session silmek için

print_r($_SESSION);
