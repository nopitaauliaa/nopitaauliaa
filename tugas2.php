<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan 2 B </title>
   
</head>

<body>

    <div class="square">

        <?php
        for ($hid = 1; $hid <= 5; $hid++) {
            for ($H = 1; $H <= $hid; $H++) {
                echo "<div class='clear'>" . $H. "</div>";
            }
            echo "<br>";
        }
        ?>

    </div>


    
</body>
<style>
        .square {
            border: 5px white;
            padding: 10px;
            margin: 10px;
            width: 22%;
        }


        .clear {
            border: 2px solid black;
            padding: 10px;
            width: 24px;
            height: 24px;
            font-size: 20px;
            text-align: center;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 10px;
        }
    </style>

</html>