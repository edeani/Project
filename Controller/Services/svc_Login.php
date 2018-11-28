<?php
    include "svc_Connexion.php";
    $usr = $_POST["user"];
    $pwd = $_POST["pass"];
    $Query = $Connexion->query("SELECT * FROM teacher WHERE username = '$usr' and password = '$pwd'");

    if($Query->num_rows > 0) {
        session_start();
        $row_profesor = $Query->fetch_assoc();
        $_SESSION['active'] = $usr;
        $_SESSION['rol']="PROFESOR";
        $_SESSION['code']=$row_profesor['id'];
        $_SESSION['nombre']=$row_profesor['name'];
        $_SESSION['age']=$row_profesor['age'];
        $_SESSION['gender']=$row_profesor['gender'];
        $Query->close();
        $Connexion->close();
        header("Location: ../../View/module_teacher.php");
    }else{
         $Query = $Connexion->query("SELECT * FROM student WHERE usuario = '$usr' and password = '$pwd'");
         if($Query->num_rows > 0) {
            $row_student = $Query->fetch_assoc();
            session_start();
            $_SESSION['active'] = $usr;
            $_SESSION['rol']="ESTUDIANTE";
            $_SESSION['code']=$row_student['code'];
            $_SESSION['nombre']=$row_student['name'];
            $_SESSION['age']=$row_student['age'];
            $_SESSION['gender']=$row_student['gender'];
            $Query->close();
            $Connexion->close();
            header("Location: ../../View/module_student.php");
         }else{
           $Query->close();
           $Connexion->close();
            header("Location: ../../View/module_teacher.php");
         }

    }


?>
