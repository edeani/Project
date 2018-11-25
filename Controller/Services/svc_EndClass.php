<?php
include "svc_Connexion.php";
$h_e = $_POST["hora_end"];
$Query = $Connexion->query("SELECT * FROM class");
$conter = 0;
while ($row = $Query->fetch_assoc()){
    $conter++;
}
$Query = $Connexion->query("UPDATE class SET date_end = '$h_e' WHERE id = '$conter'");
if($Query) header("Location: ../../View/list_course.php");