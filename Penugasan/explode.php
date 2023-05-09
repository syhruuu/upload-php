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
    $stringTunggal = "Syahru, Ilham, Farhan, Alam";
    $explode = explode (",", $stringTunggal);
    print_r($explode);
    ?>
//2
    <?php
    $stringTunggal = "Html- Css- Php- javascript";
    $explode = explode ("-", $stringTunggal);
    print_r($explode);
    ?>

</body>

</html>