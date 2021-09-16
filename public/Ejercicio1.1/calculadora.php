<?php

print_r($_GET);
$suma = $_GET['x'] + $_GET['y'];
$resta = $_GET['x'] - $_GET['y'];
$multiplicaion = $_GET['x'] * $_GET['y'];
$division = $_GET['x'] / $_GET['y'];
$ordenadorPeticion = $_SERVER['SERVER_ADDR'];
$paramPeticion = $_SERVER['QUERY_STRING'];
$rutaSitioWeb = $_SERVER['PHP_SELF'];

require_once("calculadora.view.php");
