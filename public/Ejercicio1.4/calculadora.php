<?php
if (is_null($_GET['operacion'])) {
    echo "Introduce una operacion para poder calcular algo";
} else {
    if (strcmp($_GET['operacion'], "suma") !== 0) {
        if (strcmp($_GET['operacion'], "resta") !== 0) {
            if (strcmp($_GET['operacion'], "multiplicacion") !== 0) {
                if (strcmp($_GET['operacion'], "division") !== 0) {
                    echo "Introduce una operacion valida para realizar los calculos";
                    return;
                }
            }
        }
    }
    echo "El resultado de la ".$_GET['operacion']." entre ".$_GET['x']." y ".$_GET['y']." es: ".calculadora($_GET['operacion'],$_GET['x'],$_GET['y']);
}

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
