<?php
function curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
    curl_setopt($ch, CURLOPT_VERBOSE, true); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    
    $output = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Error cURL: ' . curl_error($ch); 
    }

    curl_close($ch);
    return $output;
}

$send = curl("https://localhost/rekayasaweb/pertemuan2/getwisata.php");
$data = json_decode($send, TRUE);

if (is_array($data)) {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID Wisata</th>";
    echo "<th>Kota</th>";
    echo "<th>Landmark</th>";
    echo "<th>Tarif</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    
    foreach($data as $row) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["kota"] . "</td>";
        echo "<td>" . $row["landmark"] . "</td>";
        echo "<td>" . $row["tarif"] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "Tidak ada data yang tersedia.";
}
?>
