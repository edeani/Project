<?php
    include "svc_Connexion.php";
    $usr = $_POST["user"];
    $pwd = $_POST["pass"];
    $Query = $Connexion->query("SELECT * FROM teacher WHERE username = '$usr' and password = '$pwd'");
    if($Query->num_rows > 0) {
        session_start();
        $_SESSION['active'] = $usr;
        header("Location: ../../View/module_teacher.php");
    }else{
    	header("Location: ../../View/module_teacher.php");
    }