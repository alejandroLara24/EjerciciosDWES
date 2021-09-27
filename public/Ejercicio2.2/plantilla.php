<?php
    $fp = fopen("plantillas.csv","r");
    $listadoJugadores = [];
    while (($data = fgetcsv($fp, 0,";")) == true) {
        $num = count($data);
        $lineaFiltrada = array_filter($data,"filtrado");
        if (!is_null($lineaFiltrada[1])){
            array_push($listadoJugadores,$lineaFiltrada);
        }
    }
    fclose($fp);
    unset($listadoJugadores[0]);
    array_sort_by($listadoJugadores,11, $order = SORT_ASC);
    echo "<table border='1'>";
    foreach ($listadoJugadores as $key => $jugador) {
        echo "<tr>";
        echo "<td>".$jugador[4]."</td>";
        echo "<td>".$jugador[7]."</td>";
        echo "<td>".$jugador[9]."</td>";
        echo "<td>".$jugador[11]."</td>";
        echo "<td>".$jugador[10]."</td>";
        echo "<td>".$jugador[17]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    function filtrado($var) {
        return strcmp($var,"Athletic Club");
    }



    function array_sort_by(&$arrIni, $col, $order = SORT_ASC) {
        $arrAux = array();
        foreach ($arrIni as $key=> $row) {
            $arrAux[$key] = is_object($row) ? $arrAux[$key] = $row->$col : $row[$col];
            $arrAux[$key] = strtolower($arrAux[$key]);
        }
            array_multisort($arrAux, $order, $arrIni);
        }