<?php
        include '../Model/Class/class_Connexion.php';
        include '../../Controller/Services/svc_Connexion.php';
        $code = $_GET["code"];
        $Query = $Connexion->query("SELECT * FROM student WHERE code = '$code'");
        $row = $Query->fetch_assoc();
        if($row['state'] == 0){
            $Query = $Connexion->query("UPDATE student SET state = 1 WHERE code = '$code'");
        }else{
            $Query = $Connexion->query("UPDATE student SET state = 0 WHERE code = '$code'");
        }
        header("Location: ../../View/list_course.php");