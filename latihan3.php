<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2</title>
</head>
<body>
<table border="1" cellpadding="3" cellspacing="0">
    <tr>
    <th>Kolom 1</th>
    <th>Kolom 2</th>
    <th>Kolom 3</th>
    <th>Kolom 4</th>
    <th>Kolom 5</th>
    </tr>
    <?php
    $jumlah_baris= 15;
    $jumlah_kolom= 5;

for ($i = 1; $i <= 15; $i++) {
    echo "<th>Baris 1 Kolom 1-$i</th>";
}


for ($i = 1; $i <= 15; $i++) {
    echo "<th>Baris 1 Kolom 2-$i</th>";
}


for ($i = 1; $i <= 15; $i++) {
    echo "<th>Baris 1 Kolom 3 -$i</th>";
}


for ($i = 1; $i <= 15; $i++) {
    echo "<th>Baris 1 Kolom 4-$i</th>";
}


for ($i = 1; $i <= 15; $i++) {
    echo "<th>Baris 1 Kolom 5-$i</th>";
}
?>
    </table>
</body>
</html>