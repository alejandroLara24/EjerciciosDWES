<?php

require_once ('../../kernel.php');
use App\Ofegat;

if (isset($_SESSION['user'])) {
    if (!isPost()) {
        $intendInvalids = 0;
        $palabras = $query->findAll('palabras');
        $palabraEscogida = mt_rand(0,4);
        $ofegat = new Ofegat($palabras[$palabraEscogida]->Palabra);
        $_SESSION['intentos'] = $intendInvalids;
        $_SESSION['ofegat'] = $ofegat;
    } else {
        $_SESSION['intentos'] += $_SESSION['ofegat']->addLetter($_POST['letra']);
    }
    require_once('ahorcado.view.php');
} else {
    require_once('login.php');
}
