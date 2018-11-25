<?php
session_start();
if(!isset($_SESSION["active"])) header("Location: ../index.php");
error_reporting(E_ERROR);
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Control Asistencia</title>
        <link rel="stylesheet" href="styles/styles_module.css">
        <script type="text/javascript" src="src/jquery-3.3.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
        <link rel="shortcut icon" href="img/escudo1.png" type="img/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">    <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="src/source_module.js"></script>
    </head>
    <body id="bodyAll" onload="mueveReloj(), Mfecha()">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">
                <table width="100%" cellspacing="0" cellpadding="1" border="0" id="h_menu">
                    <tbody><tr>
                        <td style="background-color:#00336A;font-size:10px;color:#666666;" align="right">
                            <!--<a class='tmenu' href='/' style='color:#BBBBBB;font-size:10px;font-family:Verdana;'>Inicio</a> |!-->
                            <a class="tmenu" href="/inscripcionPRE/" style="color:#CCCCCC;font-size:10px;font-family:Verdana;">&nbsp;Aspirantes&nbsp;</a>|<a class="tmenu" href="/mEstudiantes/" style="color:#CCCCCC;font-size:10px;font-family:Verdana;">&nbsp;Estudiantes&nbsp;</a>|<a class="tmenu" href="/docentes/" style="color:#CCCCCC;font-size:10px;font-family:Verdana;">&nbsp;Docentes&nbsp;</a>|<a class="tmenu" href="/ayreAdmin/" style="color:#CCCCCC;font-size:10px;font-family:Verdana;">&nbsp;Funcionarios&nbsp;</a>|<a class="tmenu" href="/familiares/" style="color:#CCCCCC;font-size:10px;font-family:Verdana;">&nbsp;Familiares&nbsp;</a>|<a class="tmenu" href="/modEgresado/" style="color:#CCCCCC;font-size:10px;font-family:Verdana;">&nbsp;Egresados&nbsp;</a>
                        </td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color:#00437A;">
                <center><img border="0" src="img/cabeceraD.png?20180819" class="img-responsive" usemap="#ayre1" hidefocus="true"></center>
                <map name="ayre1" border="0">
                    <area shape="RECT" coords="720, 53, 810, 86" href="/" alt="logo AyRE">
                    <area shape="CIRCLE" coords="75, 50, 55" href="https://www.unimagdalena.edu.co" alt="escudo Unimagdalena" title="Ir a la página princpal de Unimagdalena">
                </map>
            </div>
        </div>
        <div class="row" style="background-color:#00437A;">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color:#00437A;padding:0px;">
                <table cellspacing="0" cellpadding="0" width="100%" border="0" style="background-color:#d18b3f;">
                    <tbody><tr>
                        <td style="height:2px;font-size:11px;font-weight:bold;color:#FFFFFF;padding-left:5px">
                            <i>
                            </i></td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
        <div class="collapse navbar-collapse" align="right">
            <img alt="Johan Robles" class="img-circle" src="https://dl-web.dropbox.com/account_photo/get/dbaphid%3AAAB8CWOzbbEXgg9av3XtP9NJOJHEqD7zXyc?size=64x64&vers=1428070808936" width="32" height="32">
            <a class="btn btn-primary" href="../Controller/Services/svc_CloseSession.php">Cerrar sesion </a>
        </div>
        <div>
            <p>Programacion Web <br>
                Docente: Johan Robles <br>
                Grupo: 1
            </p>
        </div>

        <i>
            <div align="right">
                <form name=form_fecha>
                    <input type="text" name="fecha" size="10" style="width: 230px">
                </form>
                <form name="form_reloj">
                    <input type="text" id="hora" name="reloj" size="10">
                </form>
            </div>
        </i>


        <div class="container">

                    <div class="container center-align">
                        <?php
                        include "../Model/Class/class_Connexion.php";
                        include "../Controller/Services/svc_Connexion.php";
                        $con = 0;
                        $Query = $Connexion->query("SELECT * FROM student");
                        while ($row = $Query->fetch_assoc()){
                            if($row["state"] == 1) {
                                ?>
                                <div  class='col-xs-12 col-sm-6 col-md-3'>
                                    <img class='img-rounded' src='img/user.png' width='200' height='150'>
                                    <h4>Alumno: <?php echo $row["name"] ?> </h4>
                                    <h4>Codigo: <?php echo $row["code"] ?></h4><br>
                                </div>
                                <?php
                            }
                            $con++;
                        }
                        ?>
                    </div>
        </div>
    </body>
    </html>