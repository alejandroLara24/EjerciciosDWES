<?php
echo "Ejercicio1.C <br>";
$nombre = $_GET['nom'];
if (is_null($nombre)) {
    echo "Alejandro Lara Moncho";
} else {
    echo $nombre;
}

echo "<br>".trim($nombre, "/")."<br>";
echo strlen(trim($nombre))."<br>";
echo strtoupper($nombre)."<br>";
echo strtolower($nombre)."<br>";
echo str_ireplace("O","0",$nombre)."<br>";
echo substr_count(strtolower($nombre),"a")."<br>";
echo stripos($nombre,"A")."<br>";
$prefijo = $_GET['prefix'];
if (isset($prefijo)) {
    echo strpos($nombre,$prefijo)."<br>";
}
echo "<br> Ejercicio1.D <br>";
$url = 'http://username:password@hostname:9090/path?arg=value';
$urlParseada = parse_url($url);
echo $urlParseada['query']."<br>";
echo $urlParseada['scheme']."<br>";
echo $urlParseada['user']."<br>";
echo $urlParseada['path']."<br>";



