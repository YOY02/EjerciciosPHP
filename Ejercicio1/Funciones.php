<?php
    // ------------------- Saludo, Caminata -----------------------------
    /*
    $name = "YOY";
    $km = 1;

    function caminata ($km, $name){

        echo "Bienvenido Sir.", $name, "</br>";

        while ($km < 16){
            echo "Usted ha caminado <b>", $km, "</b> km </br>";
            $km ++;

            if ($km > 15){
                echo "<a style = 'color:red; font-size:20px'>Usted a llegado a su destino </a>";
                return $km;
            }
        }
    }

    caminata($km, $name);
    */

    // ------------------- SUMA -----------------------------
    /*
    $w = 999;
    */
    function suma ($p, $q, $pe){
        $suma = ($p + $q + $pe);
        echo "La suma es: ", $suma, "</br>";
        echo "Variable pe: ", $pe, "</br>";
        //Error ---------- echo "La variable todo poderosa tiene un valor de ", $w;
    }

    //suma(1,2, $w);

    // ------------------- OPUESTO ----------------------------------
    function negativo ($num){
        $negNum = ($num * -1);
        // echo "Tu valor opuesto es: ", $negNum; -------- No imprimir en funciones
        return $negNum;
    }

    $negNum = negativo(5);
    //$w = negativo(204);
    //echo "Tus valores opuestos son: ", $negNum, " y ", $w, "</br>";
    //suma(1,2, $w);
    suma(negativo(1), negativo(2), negativo(3));