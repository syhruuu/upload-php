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
    $karakter = "Kita sedang belajar JavaScript()";
    echo "Karakter sebelum di ubah:" . $karakter;
    echo "\n";
    echo "Karakter setelah di ubah: " . str_replace($karakter, "JavaScript", "PHP");
    ?>
</body>

</html>