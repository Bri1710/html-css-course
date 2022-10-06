<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo-together.css" type="text/css" media=screen>
    <title>Dulces</title>
</head>
<body>
<h1>POSTRE<br>PERSONALIZADO</h1>
<br>
<br>
<form action="php-html-together-processor.php" method="post">
    <h2>Ingrediente principal</h2>
    <label>chocolate</label> <input type="radio" name="principal" value="chocolate" <?php if ($_SESSION["principal"] == "chocolate"): ?> checked <?php endif; ?>>
    <label>fruta</label><input type="radio" name="principal" value="fruta" <?php if ($_SESSION["principal"] == "fruta"): ?> checked <?php endif; ?>>
    <h3>Contiene leche</h3>
    <label>si</label><input type="radio" name="leche" value="si" <?php if ($_SESSION["leche"] == "si"): ?> checked <?php endif; ?>>
    <label>no</label><input type="radio" name="leche" value="no" <?php if ($_SESSION["leche"] == "no"): ?> checked <?php endif; ?>>
    <br>
    <br>
    <br>
    <input type="text" name="nombre" placeholder="Nombre de la persona">
    <br>
    <br>
    <input class= "azul" type ="submit" name="submit" value="ENCARGAR">
</form>


</body>
</html>
