<?php
$string = '{
    "nama": "Andi",
    "umur": 20,
    "Fakultas": "FTIK",
    "Universitas": "Universitas Semarang"';

$php_object = json_decode($string);


$php_array = json_decode($string, true);


echo "Nama dari PHP Object: " . $php_object->nama . "<br>";
echo "Umur dari PHP Object: " . $php_object->umur . "<br>";
echo "Fakultas dari PHP Object: " . $php_object->Fakultas . "<br>";
echo "Universitas dari PHP Object: " . $php_object->Universitas . "<br><br>";

echo "Nama dari PHP Array: " . $php_array['nama'] . "<br>";
echo "Umur dari PHP Array: " . $php_array['umur'] . "<br>";
echo "Fakultas dari PHP Array: " . $php_array['Fakultas'] . "<br>";
echo "Universitas dari PHP Array: " . $php_array['Universitas'] . "<br>";
?>
