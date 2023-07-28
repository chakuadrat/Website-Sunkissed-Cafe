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
<h1>Daftar Menu</h1>
<div class="php">
<?php
session_start(); 
$hasil = $_GET["nomor"];
echo "Nomor Meja: ".$hasil;
?>
</div>

<div class="cb">
    <h2>Desserts: </h2>
<form action="HasilOrderan.php" method="get">
    <input type="checkbox" name="d[]"  class="nmo" value="27" min="1" max="~">
     Milo Mille Crepes Cake
    <br>
    <input type="checkbox" name="d[]"  class="nmo" value="28" min="1" max="~">
     Lava Cake  
    <br>
    <input type="checkbox" name="d[]"  class="nmo" value="25" min="1" max="~">
     Black Sesame Waffle 
    <br>
    <input type="checkbox" name="d[]"  class="nmo" value="24" min="1" max="~">
     Oreo Fudge Brownies
    <br>
    <input type="checkbox" name="d[]" class="nmo" value="22" min="1" max="~">
     Macaron
    <br>
    <input type="checkbox" name="d[]"  class="nmo" value="22" min="1" max="~">
     Cookies
    <br>
    <input type="checkbox" name="d[]"  class="nmo" value="27" min="1" max="~">
     Blueberry Cake
    <br>
    <input type="checkbox" name="d[]"  class="nmo" value="26" min="1" max="~">
     Brioche Donuts
    <br>
    <input type="checkbox" name="d[]"  class="nmo" value="24" min="1" max="~">
     Caramel Cupcake
    <br>
    <input type="checkbox" name="d[]"  class="nmo" value="22" min="1" max="~">
     Ice Cream
    <br>
    <br>
    <h2>Drinks</h2>
    <form action="HasilOrderan.php" method="get">
    <input type="checkbox" name="d[]" value="19" class="nmo" min="1" max="~">
     Americano
     <br>
    <input type="checkbox" name="d[]" value="21" class="nmo" min="1" max="~">
     Vanilla Latte
     <br>
    <input type="checkbox" name="d[]" value="23" class="nmo" min="1" max="~">
     Mocha
     <br>
    <input type="checkbox" name="d[]" value="27" class="nmo" min="1" max="~">
     Affogato
     <br>
    <input type="checkbox" name="d[]" value="15" class="nmo" min="1" max="~">
     Hisbicus Tea
     <br>
    <input type="checkbox" name="d[]" value="14" class="nmo" min="1" max="~">
     Lemon Tea
     <br>
    <input type="checkbox" name="d[]" value="14" class="nmo" min="1" max="~">
     Black Tea
    <br>
    <input type="checkbox" name="d[]" value="15" class="nmo" min="1" max="~">
     Blueberry Tea
     <br>
    <input type="checkbox" name="d[]" value="15" class="nmo" min="1" max="~">
     Rasberry Lemon Tea
     <br>
    <input type="checkbox" name="d[]" value="15" class="nmo" min="1" max="~">
     Milk Tea
    <br>
    <br>
    <input type="submit" id="by" name="enter" value="Order">
</form>
</div>

</body>
</head>
</html>