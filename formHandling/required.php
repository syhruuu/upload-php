<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP HANDLING</title>
</head>

<body>
    <?php

    //back to null
    $NamaLengkap = "";
    $Kelas = '';

    //message error required
    $NamaLengkapError = "";
    $KelasError = '';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if(empty($_POST['NamaLengkap'])) {
            $NamaLengkapError = "Nama Lengkap tidak boleh kosong, harap diisikan! ";
        } else {
            $NamaLengkap = dataType($_POST['NamaLengkap']);
        }
        if(empty($_POST['Kelas'])) {
            $KelasError = "Kelas tidak boleh kosong, harap diisikan! ";
        } else {
            $Kelas = dataType($_POST['Kelas']);
        }
    }
    function dataType($dataKelas)
    {
        $inputData = trim($dataKelas);
        $inputData = stripslashes($dataKelas);
        $inputData = htmlspecialchars($dataKelas);
        return $inputData;
    }
    ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div style="margin-bottom: 3px;">
        <label for="username">Username</label>
        <input type="text" id="Username" name="NamaLengkap" placeholder="Masukkan Nama" />
        <span style="color:red; font-size:10px"> <?php echo $NamaLengkapError; ?> </span>
    </div>
    <div style="margin-bottom: 3px;">
        <label for="username">Kelas</label>
        <input type="number" id="Kelas" name="Kelas" placeholder="Masukkan Kelas " />
        <span style="color:red; font-size:10px"> <?php echo $KelasError; ?> </span>
    </div>
    <input type="submit" value="Simpan">
</form>

   <?php 
   echo "<br>";
   echo "Nama Saya " . $NamaLengkap; 
   echo "<br>";
   echo "Saya duduk di kelas " . $Kelas;
   echo "<br>";
   ?>

   <?php echo "Today is " . date("D d M Y"); echo "<br>"; ?>
</body>

</html>