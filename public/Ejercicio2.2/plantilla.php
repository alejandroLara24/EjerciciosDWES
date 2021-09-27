<?php
    $fp = fopen("plantillas.csv","r");
    while (($data = fgetcsv($fp, 0,";")) == true) {
        $num = count($data);
        $lineaFiltrada = array_filter($data,"filtrado");
        if (!is_null($lineaFiltrada[1])){
            echo $lineaFiltrada[4].";".$lineaFiltrada[7].";".$lineaFiltrada[9].";".$lineaFiltrada[11].";".$lineaFiltrada[10].";".$lineaFiltrada[17];
            echo "<br>";
        }
    }
    fclose($fp);

    function filtrado($var) {
        return strcmp($var,"Athletic Club");
    }