<?php
//contoh array scalar
$buah = array("apel", "jeruk", "mangga", "pisang");
echo "Buah pertama: " . $buah[0] . "<br/>";
echo "Buah kedua: " . $buah[1] . "<br/>";
echo "Buah ketiga: " . $buah[2] . "<br/>";

//contoh array asosiatif
//membuat menu makan
$menu_makanan = [
    "nasi" => 5000,
    "ayam" => 10000,
    "sayur" => 3000,
    "sambal" => 2000
];

echo "Harga nasi: " . $menu_makanan["nasi"] . "<br/>";