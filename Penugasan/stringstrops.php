<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
//1
    <?php
    $strPos = "Saat ini saya sudah mencapai materi PHP()";
    $searchStrPos = "PHP()";
    $tidakberhasil = "JAVASCRIPT()";
    echo "berhasil: " . strpos ($strPos, $searchStrPos);
    echo "\n";
    echo "tidak berhasil: " . strpos ($strPos, $tidakberhasil);


//2
    $kalimat = "Saya telah melalui tahapan belajar PHP String, sekarang telah mencapai tahapan Strpos.()";
    $dicari = "belajar PHP String()";
    $tidakberhasil1 = "Strlen()";
    echo "berhasil: " . strpos ($dicari, $kalimat);
    echo "\n";
    echo "tidak berhasil: " . strpos ($kalimat, $tidakberhasil1);
    ?>
</body>

</html>