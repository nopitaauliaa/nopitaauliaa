<?php

$aseanCountries = array(
    array("Negara" => "Indonesia", "Ibukota" => "D.K.I. Jakarta", "Kode Telepon" => "+62"),
    array("Negara" => "Singapura", "Ibukota" => "Singapura", "Kode Telepon" => "+65"),
    array("Negara" => "Malaysia", "Ibukota" => "Kuala Lumpur", "Kode Telepon" => "+60"),
    array("Negara" => "Brunei", "Ibukota" => "Bandar Seri Begawan", "Kode Telepon" => "+673"),
    array("Negara" => "Thailand", "Ibukota" => "Bangkok", "Kode Telepon" => "+66"),
    array("Negara" => "Laos", "Ibukota" => "Vientiane", "Kode Telepon" => "+856"),
    array("Negara" => "Filipina", "Ibukota" => "Manila", "Kode Telepon" => "+63"),
    array("Negara" => "Myanmar", "Ibukota" => "Naypyidaw", "Kode Telepon" => "+95")
);

// Sorting the array by Negara
usort($aseanCountries, function($a, $b) {
    return strcmp($a["Negara"], $b["Negara"]);
});

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara ASEAN dan Ibukotanya</title>
</head>
<body>

<h1>Daftar Negara ASEAN, Ibukota, dan Kode Telepon</h1>

<table border="1">
    <tr>
        <th>Negara</th>
        <th>Ibukota</th>
        <th>Kode Telepon</th>
    </tr>
    <?php
    foreach ($aseanCountries as $country) {
        echo "<tr>";
        echo "<td>".$country['Negara']."</td>";
        echo "<td>".$country['Ibukota']."</td>";
        echo "<td>".$country['Kode Telepon']."</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>