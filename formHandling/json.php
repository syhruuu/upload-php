<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCUMENT</title>
</head>
<body>
    <?php
    //JSON ENCODE
    $Kelas = array(
        //'key' => 'value'
        'x' => 'Kelas X',
        'xi' => 'Kelas XI',
        'xii' => 'Kelas XII',
        'xiv' => 'Kelas XIV',
    );

    echo json_encode($Kelas['x']);

    foreach ($Kelas as $value) {
        echo $value . "<br>";
    }

    echo "<br>";

    $KelasDecode = '{"X" : 1, "XI" : 2, "XII" : 3}';
    
    $object = json_decode($KelasDecode);
    print $object->{'X'};
    ?>
</body>

</html>