<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión moneda</title>
</head>
<body>
    <form action = "euro-processor.php" method = "post">
        <input type = "number" name = "moneda">
        $ <input type = "radio" name = "units" value = "$">
        € <input type = "radio" name = "units" value = "€">
        <input type = "submit" name = "submit" value = "CONVERTIR">

    </form>
    
</body>
</html>