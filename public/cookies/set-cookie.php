<?php

setcookie("chocolatina", "kinderbueno"); 
//setcookie("chocolatina", "kinderbueno", time()+600); //10min (después de ese tiempo no aparecen las cookies)
//chrome://settings/cookies/detail?site=localhost

// setcookie define una cookie para ser enviada
// envía la cookie al navegador y devuelve un boleano
// primer parámetro, nombre de la cookie (key)
// segundo parámetro valor
// tercer parámetro opcional, ruta