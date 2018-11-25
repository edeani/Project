<?php
    include "svc_Connexion.php";
    $h_d = $_POST["hora_start"];
    $topic = $_POST["topic"];
    $Query = $Connexion->query("INSERT INTO class (id_course, topic, date_start) VALUES (1, '$topic', '$h_d')");
    if($Query) header("Location: ../../View/list_course.php");