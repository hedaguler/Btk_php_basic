<?php
const title = "PopülerKurslar";
$kategoriler = array(
    array("kategori_adi" => "Programlama", "aktif" => false),
    array("kategori_adi" => "Web Geliştirme", "aktif" => false),
    array("kategori_adi" => "Veri Analizi", "aktif" => true),
    array("kategori_adi" => "Ofis Uygulamaları", "aktif" => false),
    array("kategori_adi" => "MobilUygulamalar", "aktif" => false),
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


$kurs1_url = str_replace(
    [" ", "ç", "@", "."],
    ["-", "c", "", "-"],
    strtolower($kurslar["1"]["baslik"])
);

$kurs2_url = str_replace(
    [" ", "ç", "@", "."],
    ["-", "c", "", "-"],
    strtolower($kurslar["2"]["baslik"])
);

$kurs3_url = str_replace(
    [" ", "ç", "@", "."],
    ["-", "c", "", "-"],
    strtolower($kurslar["3"]["baslik"])
);

$kurs4_url = str_replace(
    [" ", "ç", "@", "."],
    ["-", "c", "", "-"],
    strtolower($kurslar["4"]["baslik"])
);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>

<body>

    <div class="container my-3"> <!-- ustten alttan boşluk-->


        <div class="row">
            <div class=col-3>
                <div class="list-group">

                    <?php for ($i = 0; $i < count($kategoriler); $i++): ?>
                        <a
                            href="#"
                            class="list-group-item list-group-item-action
                        <?php echo ($kategoriler[$i]["aktif"]) ? "active" : "" ?>">
                            <?php echo $kategoriler[$i]["kategori_adi"]; ?>
                        </a>
                    <?php endfor ?>


                </div>
            </div>
            <div class=col-9>
                <h1 class="mb-3"><?php echo title; ?></h1>

                <p class="lead">
                    <?php echo count($kategoriler) ?> kategoride <?php echo count($kurslar) ?> kurs listelenmiştir
                </p>
                

                <?php foreach($kurslar as $key => $kurs): ?>

                     <?php if ($kurs["onay"]):  ?>

                           <div class="card mb-3"> <!-- margin bottom 3 brmlik boşluk -->

                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurs["resim"]; ?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?php echo $kurs1_url; ?>">
                                            <?php echo $kurs["baslik"]; ?>
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        <?php if (strlen($kurs["altBaslik"]) > 50): ?>
                                            <?php echo substr($kurslar["1"]["altBaslik"], 0, 42) . "..." ?>
                                        <?php else: ?>
                                            <?php echo $kurs["altBaslik"]; ?>
                                        <?php endif ?>

                                    </p>
                                    <p>
                                        <?php if ($kurs["begeniSayisi"] > 0): ?>
                                            <span class="badge rounded-pill text-bg-primary">
                                                <?php echo $kurslar["1"]["begeniSayisi"]; ?> Beğeni :
                                            </span>
                                        <?php endif ?>


                                        <?php if ($kurs["yorumSayisi"] > 0): ?>

                                            <span class="badge rounded-pill text-bg-danger">
                                                Yorum : <?php echo $kurslar["1"]["yorumSayisi"]; ?>
                                            </span>
                                        <?php else: ?>
                                            <span class="badge rounded-pill text-bg-warning">
                                                ilk yorumu sen yap
                                            </span>

                                        <?php endif ?>



                                        </span>
                                    </p>
                                </div>

                            </div>


                        </div>

                    <?php endif ?>

                <?php endforeach ?>

                            <div>
                                <div>





</body>

</html>