<?php

    /*
    $edad = -1;

    while ($edad < 0){
        echo "<h2>Edad invalidad </h2>";
        $edad = 18;
        echo "<h1>Edad válida </h1>";
    }

    echo "Tú tienes <b>", $edad, "</b> años";
    */

    /*
    $i = 1;

    while ( $i < 7 ){
        $i ++;
        echo "<h$i>Hola Mina </h$i>";
    }
    */

    $num = 1;
    $i = 1;

    while ($num < 16){
        echo "<h$i>", $num, "</$i>";

        if ($i > 5){
            $i = 1;
        } else{
            $i ++;
        }

        $num ++;
    }

    