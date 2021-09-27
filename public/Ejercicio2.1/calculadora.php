<?php

    $greetins = "Calculadora";

    if (!strcmp($_POST['operacion'],"")) {
        $error = "Introduce una operacion para poder calcular algo";
    } else {
        if (strcmp($_POST['operacion'], "suma") !== 0) {
            if (strcmp($_POST['operacion'], "resta") !== 0) {
                if (strcmp($_POST['operacion'], "multiplicacion") !== 0) {
                    if (strcmp($_POST['operacion'], "division") !== 0) {
                        $error = "Introduce una operacion valida para realizar los calculos";
                        return;
                    }
                }
            }
        }
        $resultado = "El resultado de la ".$_POST['operacion']." entre ".$_POST['operando1']." y ".$_POST['operando2']." es: ".calculadora($_POST['operacion'],$_POST['operando1'],$_POST['operando2']);
    }
    require('calculadora.view.php');


    function calculadora($operacion,$x,$y) {
        return $operacion($x,$y);
    }
    function suma($x,$y) {
        return $x + $y;
    }
    function resta($x,$y) {
        return $x - $y;
    }
    function multiplicacion($x,$y) {
        return $x * $y;
    }
    function division($x,$y) {
        return $x / $y;
    }