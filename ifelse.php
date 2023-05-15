<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <?php
    $nilai = 80;

    if($nilai >= 75){
        echo "Selamat, Kamu sudah di atas KKM!";
    }else { 
        echo "Mohon maaf, Kamu masih dibawah KKM!";
    }
    echo "<br>";

    $waktu = 11;
    if ($waktu <= 10) {
        echo "Selamat pagi!";
    }else {
        echo "Selamat siang!";
    }
    echo "<br>";
    
    //ELSEIF

    $nilaiTugas = 88;
    if ($nilaiTugas >= 90) {
        echo "Selamat, nilai Kamu sangat bagus! (A)";
    }elseif ($nilaiTugas >= 80) {
        echo "Selamat, nilai Kamu cukup bagus! (B)";
    }elseif ($nilaiTugas >= 70) {
        echo "Selamat, nilai Kamu kurang bagus, semangat belajarnya yah! (C)";
    }elseif ($nilaiTugas <= 70) {
        echo "Mohon Maaf, niali Kamu dibawah rata-rata, terus semangat belajar yah! (D)";
    }
    echo "<br>";

    //switch
    $Hari = "Minggu";
    switch ($Hari) {
        case 'Senin':
            echo "Hari ini adalah Senin!";
            break;
        case 'Selasa':
            echo "Hari ini adalah Selasa!";
            break;
        case 'Rabu' :
            echo "Hari ini adalah Rabu!";
            break;
        case 'Kamis' :
            echo "Hari ini adalah Kamis!";
            break;
        case 'Jumat' :
            echo "Hari ini adalah Jumat!";
            break;
        case 'Minggu' :
            echo "Hari Minggu jangan lupa SUNMORI!";
            break;
        default:
            echo "Hari Weekend libur! Jangan ganggu!";
            break;
    }
    ?>
</body>

</html>