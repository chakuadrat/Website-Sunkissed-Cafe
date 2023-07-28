<html>
<head>
<link rel="stylesheet" href="order.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,30
    0;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;,700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
body{
    background-color: #fff8ea;
}
</style>
<body>
<div class="g"><h2> Daftar barang:</h2></div>    
<div class="php">
<?php

if (($_GET['d'])) {

    $d=$_GET['d'];
    echo "<br>";
    for ($i=0; $i < count($d) ; $i++){
        echo "Item ke ".($i+1).": &nbsp".$d[$i]."000"."<br>";
    }
}

$g = array_sum($d);
echo "Total Harga: ".$g."000";


?> 
</div>
</body>
</head>
</html>