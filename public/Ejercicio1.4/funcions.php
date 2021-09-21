<?php
$password = $_GET['password'];

if (contrasenyaSegura($password)) {
    echo "Contraseña segura <br>";
} else {
    echo "Contraseña peligrosa <br>";
}

$array = ['nombre' => 'Alejandro', 'apellidos' => 'Lara Moncho', 'dni' => '45651232F'];
insert("alumnos",$array);

function contrasenyaSegura($contrasenya) {
    if (strlen($contrasenya) >= 8) {
        if (!preg_match("`[A-Z]`",$contrasenya)) {
            return false;
        }
        if (!preg_match("`[a-z]`",$contrasenya)) {
            return false;
        }
        if (!preg_match("`[0-9]`",$contrasenya)) {
            return false;
        }
        if (!preg_match("`[-_=#+$@*]`",$contrasenya)){
            return false;
        }
        return true;
    } else {
        return false;
    }
}

function insert($nombreTabla,$arrayNombresYValores) {
    $sentenciaSQL = "INSERT INTO %s (%s) VALUES (%s)";
    $nombreCampos = array_keys($arrayNombresYValores);
    $valoresAIntroducir = array_values($arrayNombresYValores);
    echo sprintf($sentenciaSQL,$nombreTabla,implode(",",$nombreCampos),implode(",",$valoresAIntroducir));
}
