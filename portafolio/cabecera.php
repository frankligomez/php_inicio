<?php

session_start();
if( isset($_SESSION["usuario"])!="frago"){
    header("location:login.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

<div class="container">


    <a href="index.php"> Inicio </a> |
    <a href="portafolio.php"> Portafolio </a> |
    <a href="cerrar.php"> Cerrar </a>
    </br>


</div>


</body>
</html>