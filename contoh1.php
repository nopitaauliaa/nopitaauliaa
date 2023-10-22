<?php
$huruf=["A", "B", "C", "D", "E", "F", "G"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh</title>
</head>
<style>
       div {
        width: 50px;
            height: 50px;
            background-color: aliceblue;
            text-align:center;
            line-height: 50px;
            border: 1px solid;
            margin: 3px;
            float: left;
       }
       
    </style>

<body>
    <?php foreach( $huruf as $h) { ?>
        <div><?php echo $h; ?> </div>
   <?php } ?>



   

</body>
</html>