<?php
    include "../../Model/Class/class_Connexion.php";
    $newHost = "localhost";
    $newUser = "root";
    $newPass = "";
    $newDatabase = "EstudianteCodigo";
    $Connexion = new Connexion($newHost, $newUser, $newPass, $newDatabase);
    $Connexion = $Connexion->getConnexion();