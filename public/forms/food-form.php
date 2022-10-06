<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Fancy daily menu</title>
</head>
<body>
    <form action = "food-processor.php" method = "post">
        <b><strong>FANCY DAILY MENU</b></strong>
        <br>
        <br>
        The menu is going to be made for <input type = "text" name = "name" placeholder = "Name..." >
        <br>
        (Writte your name if you would like to your choice be saved for another future order)
        <br>
        <br>
        <br>
        <br>
        <b><strong>First plates</b></strong>
        <br>
        <br>
        Seafood <input type = "radio" name = "first" value ="seafood">
        Spicy cuscús <input type = "radio" name = "first" value ="cuscus">
        Pesto farfalle <input type = "radio" name = "first" value ="farfalle">
        Duck breast <input type = "radio" name = "first" value ="duck">  
        <br>
        <br>
        <br>
        <b><strong>Second plates</b></strong>
        <br>
        <br>
        Roast chicken <input type = "radio" name = "second" value ="chicken">
        Salmon poke <input type = "radio" name = "second" value ="salmon">
        Spinach cheese raviolis <input type = "radio" name = "second" value ="raviolis">
        Snuff with potatoes <input type = "radio" name = "second" value ="snuff">
        <br>
        <br>
        <br>
        <b><strong>Drinks</b></strong>
        <br>
        <br>
        Apple juice <input type = "radio" name = "drink" value ="juice">
        Cherry Coca-Cola <input type = "radio" name = "drink" value ="coke">
        Nestea <input type = "radio" name = "drink" value ="nestea">
        Watter <input type = "radio" name = "drink" value ="watter">
        <br>
        <br>
        <br>
        <b><strong>Desserts</b></strong>
        <br>
        <br>
        Pear cake <input type = "radio" name = "dessert" value ="cake">
        Nutella crepes <input type = "radio" name = "dessert" value ="crepes">
        Brownie <input type = "radio" name = "dessert" value ="brownie">
        Coconut and pinneaple ice cream <input type = "radio" name = "dessert" value ="icecream">
        <br>
        <br>
        <br>
        <br>
        24.99€ <input type = "submit" name = "submit" value = "REQUEST AND PAY">
    </form>
    
</body>
</html>
