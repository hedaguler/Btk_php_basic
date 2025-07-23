<?php 
$ad = "Heda";
$soyad ="Guler";
$yas = 23;

$mesaj = "My name is ".$ad.' '.$soyad. " and I'm ".$yas."years old.";



// alternatifi :)   -->>

    $mesaj1 = "My name is{$ad} {$soyad} and {$yas} years old."; 
    // süslü parantezsiz bile olabilir 
    //but it's more readable with curly brackets like this

echo $mesaj;
echo"<br>";
echo"<br>";
echo $mesaj;

echo"<br>";
echo"<br>";
echo $mesaj[3]."<br>";
echo"<br>";
echo"<br>";
echo"<br>";

////////////////////////////////////////////////////////////////

  $ad0 = "çınar";
    $soyad0 = "turan";
    $yas0 = 6;

    $mesaj0 = "my name is $ad0 $soyad0 and $yas0 years old.";

    echo $mesaj0."<br>";
    echo $mesaj0[0]."<br>";  // M
    echo $mesaj0[0]."<br>";  // m

    // string fonksiyon[ları
    echo strlen($mesaj0)."<br>";
    echo str_word_count($mesaj0)."<br>";
    echo strtolower($mesaj0)."<br>";
    echo strtoupper($mesaj0)."<br>";
    echo ucfirst($mesaj0)."<br>";
    echo str_replace(["çınar","6"],["sadık","39"],$mesaj0);


?>