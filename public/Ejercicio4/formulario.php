<?php

    require ("../../kernel.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['dni'] === "" || $_POST['nombre'] === "" || $_POST["birthday"] === date("Y-m-d") || $_POST["birthday"] === "") {
            echo "Formulario incompleto";
        } else {
            $alumnoAInsertar = [
                $_POST['dni'],
                $_POST['nombre'],
                $_POST['birthday'],
                $_POST['genero'],
                $_POST['hobbies'],
                $_FILES['imagen']['name']
            ];
            $query->insert('alumnes', $alumnoAInsertar);
        }
    }
    require('formulario.view.php');
    require('mostrarTabla.php');
