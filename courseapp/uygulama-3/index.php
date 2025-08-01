<?php
const title ="PopülerKurslar";
    $kategoriler = array("Programlama","Web Geliştirme","Veri Analizi","Ofis Uygulamaları");

    sort($kategoriler);

    $kurslar = array(
        "1" => array(
            "baslik" => "php kursu",
            "altBaslik" => "Sıfırdan ileri seviye Php ile web geliştirme",
            "resim" => "1.jpg",
            "yorumSayisi" => "200",
            "begeniSayisi" => "300"
        ),
        "2" => array(
            "baslik" => "Python kursu",
            "altBaslik" => "Sıfırdan ileri seviye Python ile web geliştirme",
            "resim" => "2.jpg",
            "yorumSayisi" => "100",
            "begeniSayisi" => "300"
        ),
        "3" => array(
            "baslik" => "Node.js kursu",
            "altBaslik" => "Sıfırdan ileri seviye Node.js ile web geliştirme",
            "resim" => "3.jpg",
            "yorumSayisi" => "200",
            "begeniSayisi" => "300"
        )    

    );

    $yeni_film =array(
         "baslik" => "Django kursu",
            "altBaslik" => "Sıfırdan ileri seviye Djongos ile web geliştirme",
            "resim" => "1.jpg",
            "yorumSayisi" => "250",
            "begeniSayisi" => "300"

    );
    $kurslar["4"] = $yeni_film;

    $kurs1_altBaslik = ucfirst(strtolower($kurslar["1"]["altBaslik"]));
    $kurs2_altBaslik = ucfirst(strtolower($kurslar["2"]["altBaslik"]));
    $kurs3_altBaslik = ucfirst(strtolower($kurslar["3"]["altBaslik"]));

     $kurs1_altBaslik = substr($kurs1_altBaslik,0,42)."...";
     $kurs2_altBaslik = substr($kurs1_altBaslik,0,42)."...";
     $kurs3_altBaslik = substr($kurs1_altBaslik,0,42)."...";

    $kurs1_url = str_replace([" ","ç","@","."],["-","c","","-"],
    strtolower($kurslar["1"]["baslik"]));

     $kurs2_url = str_replace([" ","ç","@","."],["-","c","","-"],
     strtolower($kurslar["2"]["baslik"]));

      $kurs3_url = str_replace([" ","ç","@","."],["-","c","","-"],
      strtolower($kurslar["3"]["baslik"]));
         


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>

 <div class="container my-3">  <!-- ustten alttan boşluk-->


<div class="row">
    <div class=col-3>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?php echo $kategoriler[0]; ?></a>
            <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[1]; ?></a>
            <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[2]; ?></a>
            <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[3]; ?></a>


        </div>
    </div>
    <div class=col-9>
            <h1 class="mb-3"><?php echo title; ?></h1>

            <p class="lead">
                <?php echo count($kategoriler) ?>  kategoride <?php echo count($kurslar)?> kurs listelenmiştir
            </p>



    <div class="card mb-3">    <!-- margin bottom 3 brmlik boşluk -->
   
        <div class="row">     
           <div class="col-4">
            <img src="img/<?php echo $kurslar["1"]["resim"];?>" alt="" class="img-fluid rounded-start">
            </div>
            <div class="col-8">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="<?php echo $kurs1_url;?>"> 
                        <?php echo $kurslar["1"]["baslik"];?>
                    </a>
            </h5>
                <p class="card-text"><?php echo $kurslar["1"]["altBaslik"]; ?></p>
                <p>
                    <span class="badge rounded-pill text-bg-primary">
                       Beğeni :  <?php echo $kurslar["1"]["begeniSayisi"];?>
                    </span>
                     <span class="badge rounded-pill text-bg-danger">
                        Comment : <?php echo $kurslar["1"]["yorumSayisi"];?>
                    </span>
                    
                    
                     
                     </span>
                </p>
            </div>

        </div>
   
   
    </div>


    <div class="card mb-3">    <!-- margin bottom 3 brmlik boşluk -->
   
        <div class="row">     
           <div class="col-4">
            <img src="img/<?php echo $kurslar["2"]["resim"];?>" alt="" class="img-fluid rounded-start">
            </div>
            <div class="col-8">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="<?php echo $kurs2_url;?>"> 
                        <?php echo $kurslar["2"]["baslik"];?>
                    </a>
            </h5>
                <p class="card-text"><?php echo $kurslar["2"]["altBaslik"]; ?></p>
                <p>
                    <span class="badge rounded-pill text-bg-primary">
                       Beğeni :  <?php echo $kurslar["2"]["begeniSayisi"];?>
                    </span>
                     <span class="badge rounded-pill text-bg-danger">
                        Comment : <?php echo $kurslar["2"]["yorumSayisi"];?>
                    </span>
                    
                    
                     
                     </span>
                </p>
            </div>

        </div>
   
   
    </div>






    
    <div class="card mb-3">    
   
        <div class="row">     
           <div class="col-4">
            <img src="img/<?php echo $kurslar["3"]["resim"];?>" alt="" class="img-fluid rounded-start">
            </div>
            <div class="col-8">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="<?php echo $kurs3_url;?>"> 
                        <?php echo $kurslar["3"]["baslik"];?>
                    </a>
            </h5>
                <p class="card-text"><?php echo $kurslar["3"]["altBaslik"]; ?></p>
                <p>
                    <span class="badge rounded-pill text-bg-primary">
                       Beğeni :  <?php echo $kurslar["3"]["begeniSayisi"];?>
                    </span>
                     <span class="badge rounded-pill text-bg-danger">
                        Comment : <?php echo $kurslar["3"]["yorumSayisi"];?>
                    </span>
                    
                    
                     
                     </span>
                </p>
            </div>

        </div>
   
   
    </div>



    
    <div class="card mb-3">    
   
        <div class="row">     
           <div class="col-4">
            <img src="img/<?php echo $kurslar["4"]["resim"];?>" alt="" class="img-fluid rounded-start">
            </div>
            <div class="col-8">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="<?php echo $kurs3_url;?>"> 
                        <?php echo $kurslar["4"]["baslik"];?>
                    </a>
            </h5>
                <p class="card-text"><?php echo $kurslar["4"]["altBaslik"]; ?></p>
                <p>
                    <span class="badge rounded-pill text-bg-primary">
                       Beğeni :  <?php echo $kurslar["4"]["begeniSayisi"];?>
                    </span>
                     <span class="badge rounded-pill text-bg-danger">
                        Comment : <?php echo $kurslar["4"]["yorumSayisi"];?>
                    </span>
                    
                    
                     
                     </span>
                </p>
            </div>

        </div>
   
   
    </div>
    





    </div>

</div>




    <div>
   <div>

    

    

</body>
</html>