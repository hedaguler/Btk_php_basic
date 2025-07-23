<?php

$a =10;
$b = 20;
$c = 5;

   // 1- a, b çarpımı ile a, b, c toplamının farkı nedir?
   /* my code
echo $carpim =$a*$b;

echo"<br>";

echo $toplam =$a + $b +$c;

echo"<br>";

echo $carpim - $toplam;
*/


/* hocanın kod
$sonuc = ($a * $b) - ($a + $b + $c);
*/

//////////////////////////////////////////////////////////////
// 2- a, b, c toplamının mod 3'ü nedir?

/* bu hocanınkiyle aynı oldu :))
 $x=($a + $b + $c) %3;
 echo $x;
 */

/////////////////////////////////////////////////////
// 3- b' nin c. kuvvetini hesaplayınız.
/* benim yaptığım bitwise operatörüymüş :(
$x=$b^$c;
echo $x;
*/
/* doğrusu:)
 $x=$b**$c;
echo $x;
*/

///////////////////////////////////////////////////////
// 4- a için 50-100 arasında kontrolü yapınız.  
 // (50<$a<100)
/*
      $sonuc = ($a > 50) and ($a < 100);
    echo var_dump($sonuc);
    */
$sonuc1 = ($a > 0) and ($a%2 == 0);
    echo var_dump($sonuc1);


?>