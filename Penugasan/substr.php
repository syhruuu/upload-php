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
    $karakter = "Saat ini saya sudah mencapai materi PHP()";
    echo "Panjang karakter: " . substr($karakter, 0, 10);
    ?>
//2
    <?php
    $karakter = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan substr.()";
    echo "Panjang karakter: " . substr($karakter, 3, 20);
    ?>
</body>

</html>