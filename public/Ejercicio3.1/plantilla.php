<?php
    require_once('Player.php');
    require_once('Team.php');
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

    $playersList = [];

    foreach ($listadoJugadores as $jugadores) {
        array_push($playersList,new Player($jugadores[3],$jugadores[6],$jugadores[9],$jugadores[11],$jugadores[10],$jugadores[17],$jugadores[12],$jugadores[16],$jugadores[18],$jugadores[19]));
    }

    $equipo = new Team('Atletico de Madrid',$playersList);

    session_start();
    $_SESSION['equipo'] = $equipo;

    $equipo->render();

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