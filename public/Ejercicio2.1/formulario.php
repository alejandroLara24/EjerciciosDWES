<?php

    if($_POST['nombre'] === "" || $_POST["birthday"] === date("Y-m-d") || $_POST["birthday"] === ""
        || empty($_POST["genero"])  || $_FILES['imagen']['type'] !== 'image/png' )
    {
        echo "Formulario Incompleto <br>";
        require('formulario.view.php');
    } else{
        $name = basename($_FILES['imagen']['name']);
        move_uploaded_file($_FILES['imagen']['tmp_name'],"fotosAdjuntadasDelFormulario/$name" );
        echo "<br>Formulario Rellenado <br>"."<br>";
        echo  "Nombre: " . $_POST['nombre']."<br>";
        echo  "Cumpleaños: " . $_POST['birthday']."<br>";
        echo  "Genero: " . $_POST['genero']."<br>";
        echo  "<img src='fotosAdjuntadasDelFormulario/$name' alt='imagen' width=\"50\" height=\"60\">" ;
    }