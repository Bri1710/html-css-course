<?php

/* HACER HAMBURGUESA
1.Ingredientes:
- Pan
- Pollo
- Lechuga
- Bacon
- Tomate
- Ketchup
- Sal

2. Pasos:
- Coger 1 trozo de pan y tostarlo por un lado en la tostadora -- heatSomethingWithSomething
- Freir en la sartén la hamburguesa -- cookSomethingWithSomething
- Añadir sal a la hamburguesa -- addSomethingToSomethingElse
- Añadir ajo en polvo a la hamburguesa -- addSomethingToSomethingElse
- Colocar la hamburguesa sobre el pan -- placeSomethingOnSomethingElse
- Añadir el ketchup al gusto sobre la hamburguesa -- addSomethingToSomethingElse
- Freir en la sartén el bacon -- cookSomethingWithSomething
- Colocar el bacon sobre la hamburguesa -- placeSomethingOnSomething
- Limpiar la lechuga con agua -- cleanSomethingWithSomething
- Cortar la lechuga con un cuchillo -- cutSomethingWithSomething
- Colocar la lechuga sobre el bacon -- placeSomethingOnSomething
- Limpiar el tomate con agua -- cleanSomethingWithSomething
- Cortar el tomate con un cuchillo -- cutSomethingWithSomething
- Colocar el tomate sobre la lechuga -- placeSomethingOnSomething
- Tostar el otro trozo de pan por un lado en la tostadora -- heatSomethingWithSomething
- Colocar el pan sobre el tomate -- placeSomethingOnSomething 

********************************************************************************

HACER SANWICH VEGETAL
1.Ingredientes:
- Pan
- Jamon York
- Tomate
- Queso

2. Pasos:
- Coger dos trozos de pan de molde y tostar por ambos lados en la tostadora -- heatSomethingWithSomething
- Poner 2 lonchas de jamón sobre un pan -- laceSomethingOnSomething
- Poner 2 lonchas de queso sobre el jamón -- placeSomethingOnSomething
- Limpiar el tomate con agua -- cleanSomethingWithSomething
- Cortar el tomate con un cuchillo -- cutSomethingWithSomething
- Colocar el tomate sobre el pan -- placeSomethingOnSomething
- Colocar el otro trozo de pan sobre el tomate -- placeSomethingOnSomething
 
********************************************************************************

HACER PERRITO CALIENTE
1.Ingredientes:
- Pan
- Cebolla frita
- Bacon
- Salchicha
- Ketchup
- Pepinillo
- Sal

2. Pasos:

PrepareBread: bread
    - toastBread (tostar 1 pan)
    - toastBread (tostar 1 pan)

AddSausageToBread: bread (pan con salchicha)
    -PrepareSausage
        - frySomething (freir la salchicha)
            - cookSomethingWithSomethingElse (cocinar con aceite a 150º la salchicha)
            - addSomethingOnSomethingElse (añadir sal a la salchicha)
        - placeSomethingOnSomethingElse (colocar la salchicha sobre el pan)
            - addSomethingtoSomethingElse (añadir ketchup)
            - addSomethingtoSomethingElse (añadir cebolla frita)

AddCucumberToSausage : sausage (pan con salchicha con pepinillo)
    - prepareCucumber
        - cleanSomethingWithWater (limpiar el pepinillo con agua) 
        - cutSomethingWithAKnife (cortar el pepinillo con un cuchillo)
    - placeSomethingOnSomethingElse (colocar el pepinillo sobre la salchicha)
        
AddBaconToCucumber : cucumber (pan con salchicha con pepinillo con bacon)
    - PrepareBacon
        - frySomething (freir el bacon)
            - cookSomethingWithSomethingElse (cocinar con aceite el bacon)
            - addSomethingOnSomethingElse (añadir sal al bacon)
    - placeSomethingOnSomethingElse (colocar el bacon sobre el pepinillo)

addBreadToSomething : something (pan con salchicha con pepinillo con bacon con pan)
    - placeSomethingOnSomethingElse (colocar el otro trozo de pan sobre el bacon) 


function toastBread ($breadToToast): $breadToToast
function prepareBread ($breadToPrepare): $breadToPrepare
function prepareSausage ($sausageToPrepare): $sausageToPrepare
function frySomething ($somethingToFry): $somethingToFry
function cookSomethingWithSomethingElse ($whatImCooking, $somethingImCookingItWith): $whatImCooking 
function addSomethingOnSomethingElse ($whatImAdding, $toWichImAddingIt): $toWichImAddingIt
function dddCucumberToSausage ($cucumber, $sausage): $sausage
function prepareCucumber ($cucumber): $cucumber
function cleanSomethingWithWater ($something, $water): $something
function cutSomethingWithAKnife 





*/