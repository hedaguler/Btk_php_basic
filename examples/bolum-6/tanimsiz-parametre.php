<?php
// function intro(){
//     $parametreSayisi = func_num_args();
//     echo $parametreSayisi;
// }
// intro("ali","yılmaz","van");

  ///////////////////////////////////////////////////777

// function intro(){
//     $parametreSayisi = func_num_args();
//     if($parametreSayisi == 0){
//         echo "parametre yok";
//     }else{
//      echo func_get_arg(0);

//      echo func_get_arg(2);

//     }
// }
// intro("ali","yılmaz","van");

//////////////////////////////LİSTE HALİNDE DÖNDÜRMEK İSTERSEK/////////

function intro(){
    $parametreSayisi = func_num_args();
    if($parametreSayisi == 0){
        echo "parametre yok";
    }else{
        $parametreler = func_get_args();

        foreach($parametreler as $parametre){
            echo $parametre."<br>";
        }

    }
}
intro("ali","yılmaz","van",2025);

?>