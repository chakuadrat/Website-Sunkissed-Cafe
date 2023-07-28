<!DOCTYPE html>
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
<div id="od">
<table class="table table-bordered">
    <td>
    <h2>ORDER NOW!</h2>
    <form action="Order.php" method="get">
    Nomor Meja :
    <input type="number" name="nomor" min="1" max="~">
    <br>
    <br>
    <input type="submit" id="bt" value="Order">
</form>
    </td>
</table>
</div>



</body>
</head>
</html>