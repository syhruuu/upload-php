<?php 

class dealerCar
{
    public $NameCar;
    public $Capacity;

    function BuyCar()
    {
        echo "Mobil tersedia, silahkan membeli jika ingin membeli.";
    }

    function typeCar()
    {
        echo "Tersedia pilihan tipe Mobil";
    }
}
$buy = new dealerCar();
$buy->buyCar();
echo "<br>";
$buy->NameCar = "Toyota Supra MK4";
echo "<br>";
$buy->Capacity = 1;

echo "<br>"; 

// echo "Berhasil membeli " . $buy->NameCar . ' dengan kapasitas ' . $buy->Capacity;