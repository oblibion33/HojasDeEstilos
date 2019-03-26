<?php

include ("vacaciones.php");
include ("constantes.php");


echo "<pre>";
var_dump($_POST);
echo "</pre>";

$oVacacion = new Vacaciones($_POST["rut"], $_POST["nombre"], $_POST["cargo"], "", "", "");


if (isset($_SESSION["aVacaciones"])) {
    $arrVacaciones = $_SESSION["aVacaciones"];
    $contador++;
}

$arrVacaciones[] = $oVacacion;
$_SESSION["aVacaciones"] = $arrVacaciones;


if ($contador >= 1) {
    header("location:".URLBASE."contenido/formvacaciones.php");
}


echo "<pre>";
var_dump($_SESSION["aVacaciones"]);
echo "</pre>";

