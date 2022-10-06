<?php

class Cars
{
    var $wheelCount = 4;
    var $doorCount = 4;

    function carDetail()
    {
        echo "Hello students";
    }

}

$bmw = new Cars();
$mercedes = new Cars();


echo $bmw->wheelCount = 10;
