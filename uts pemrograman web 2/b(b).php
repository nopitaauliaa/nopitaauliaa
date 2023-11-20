<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
$Dicount = [
    [
        "tanggal" => "20 November 2023", 
        "product" => [
            "pepsodent" => 70000,
            "Rinso" => 100000,
            "Downy" => 24000,
            "Dove" => 44000,
            "Baygon" => 16000
        ],
    ]
];
?>
    <div style="border: 1px solid #000;padding: 3px; width:fit-content">
        <?php
foreach ($Dicount as $discountTotal) {
    $total = $discountTotal["product"]["pepsodent"]+$discountTotal["product"]["Rinso"]+$discountTotal["product"]["Dove"]+$discountTotal["product"]["Downy"]+$discountTotal["product"]["Baygon"];

    if ($total >= 50000 ) {
        $discount=(($total*10)/100);
        $total_bayar=($total-$discount);
    }else if ($total >= 100000) {
        $discount=(($total*20)/100);
        $total_bayar=($total-$discount);
    }

    echo "<p>"."Tanggal Produksi    :".$discountTotal["tanggal"]."</p>";
    echo "<p>"."Product             :"."</p>";
    echo "<p>"."Pepsodent(7X10.000) :"."Rp.".$discountTotal["product"]["pepsodent"]."</p>";
    echo "<p>"."Rinso(5X20.000)     :"."Rp.".$discountTotal["product"]["Rinso"]."</p>";
    echo "<p>"."Dove(2X22.000)      :"."Rp.".$discountTotal["product"]["Dove"]."</p>";
    echo "<p>"."Downy(2X.12000)    :"."Rp.".$discountTotal["product"]["Downy"]."</p>";
    echo "<p>"."Baygon(1X.16.000)  :"."Rp.".$discountTotal["product"]["Baygon"]."</p>";
    echo "<p>"."Total               :"."Rp.".$total."</p>";
    echo "<p>"."Discount            :"."Rp.".$discount."</p>";
    echo "<p>"."Total Pembayaran    :"."Rp.".$total_bayar."</p>";
}
?>
    </div>
    </div>
</body>

</html>