<?php
echo "<h3>ARRAY SIMPLE</h3>";
$nombres = ["Alejandro","Joan","Carlos","Manu","Jodrdi","Jose"];
$posicionDeMiNombre = array_search("Alejandro",$nombres);
$nombresOrdnenadosInversamente = array_reverse($nombres);

echo "-Numero de elementos del array: <br>".count($nombres)."<br>";
echo "-Nombres dentro del array: <br>".implode(" ",$nombres)."<br>";

asort($nombres);
echo "-Array ordenado alfabeticamente: <br>";
var_export($nombres);

echo "<br>-Array en orden inverso al que se creó: <br>";
var_export($nombresOrdnenadosInversamente);

echo "<br>-Posicion de mi nombre en el array(Basado en el array original): <br>";
echo $posicionDeMiNombre;

echo "<br>-Mostrar el array: <br>";
mostrar_array($nombres);

echo "<h3>ARRAY MULTIPLE</h3>";

$alumnos = [["DNI","Nombre","Edad"],["23907686Z","Alejandro",20],["45367889A","Joan",19],["51436272E","Carlos",19],["35617283F","Manu",19]];
mostrar_array_multiple($alumnos);
echo "<br>";
$nombresAlumnos = array_column($alumnos,1);
mostrar_array($nombresAlumnos);
echo "<br>";

echo "<h3>ARRAY ASOCIATIVO</h3>";
$listaPalabras = ["Inglés" => ["Classroom","Crib","Effort","Committee","Field","Watch","City","Yam","Dress","Vase"],"Español" => ["Aula","Cuna","Esfuerzo","Comité","Campo","Reloj de pulsera","Ciudad","Batata","Vestido","Jarrón"]];
echo "<table>";
foreach ($listaPalabras as $idioma => $palabras) {
    echo "<tr>";
    echo "<td>";
    echo $idioma;
    echo "</td>";
    foreach ($palabras as $palabra) {
        echo "<td>|".$palabra."|</td>";
    }
    echo "</tr>";
}
echo "</table>";

function mostrar_array($arrayAMostrar) {
    foreach ($arrayAMostrar as $nombre) {
        echo $nombre . "<br>";
    };
}

function mostrar_array_multiple($arrayAMostrar) {
    echo "<table>";
    foreach ($arrayAMostrar as $campo) {
        echo "<tr>";
        foreach ($campo as $infoDelCampo) {
            echo "<td>" . $infoDelCampo . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}







