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
>
    <link rel="stylesheet" href="../css/imagenes.css">
    <link rel="stylesheet" href="../Diseloj.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="src/source_module.js"></script>
</head>
<header id="header" class="headerLis">
<div >
    <center><img src="../img/lol.png" alt="League Of Legends" class="imagen2"></center>
</div>  
</header><!-- /header -->
<body class="body2">

    <div class="collapse navbar-collapse" align="right">
        <img alt="Johan Robles" class="img-circle" src="https://dl-web.dropbox.com/account_photo/get/dbaphid%3AAAB8CWOzbbEXgg9av3XtP9NJOJHEqD7zXyc?size=64x64&vers=1428070808936" width="32" height="32">
        <a class="btn btn-primary" href="../Controller/Services/svc_CloseSession.php">Cerrar sesion </a>
    </div>
  

  


    <div class="container">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Listado de Estudiantes</h4>
            </div>
              <div>
        <p>Programacion Web <br>
            Docente: Johan Robles <br>
            Grupo: 1
        </p>
    </div>
            <div class="modal-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Estado</th>
                        <th>Nombre</th>
                        <th>Codigo</th>
                        <th>Estado</th>
                    </tr>
                    </thead>
                    <tbody id="table">
                    <?php
                    include "../Model/Class/class_Connexion.php";
                    include "../Controller/Services/svc_Connexion.php";
                    $Query = $Connexion->query("SELECT * FROM student order by name");
                    $con = 0;
                    while ($row = $Query->fetch_assoc()){
                            ?>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="" value="" class="num<?php echo $con?>" type='checkbox' style= 'width: 30px; height: 40px; color: green' onclick="change_State(<?php echo $row["code"]?>)">
                                            <i class="helper"></i>
                                        </label>
                                    </div>
                                </td>
                                <td><?php echo $row["name"]?></td>
                                <td><?php echo $row["code"]?></td>
                                <td><?php if ($row["state"]==1) {
                                   echo "<h5 class='alert alert-success' role='alert'>Online</h5>";
                                }else {
                                    echo "<h5 class='alert alert-danger' role='alert'>Desconet</h5>";
                                } ?></td>
                            </tr>
                            <?php
                        $con++;
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Codigo</th>
                        <th>Estado</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <div class="modal-footer">
                <button id="btn-modal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Registrar clase</button>
                <button id="btn-modal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Finalizar clase</button>
                <button id="btn-modal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Lista Conectados</button>
                <button type="button" class="btn btn-default" href="../View/module_teacher.php" >Cerrar</button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align="center">Listado de Estudiantes</h4>
                </div>
                <div class="modal-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>Codigo</th>
                            <th>Estado</th>
                        </tr>
                        </thead>
                        <tbody id="table">
                        <?php
                        $con = 1;
                        $Query = $Connexion->query("SELECT * FROM student order by name");
                        while ($row = $Query->fetch_assoc()){
                            if($row["state"] == 1){
                                ?>
                                <tr>
                                    <td><?php echo $con?></td>
                                    <td><?php echo $row["name"]?></td>
                                    <td><?php echo $row["code"]?></td>
                                    <td><?php if ($row["state"]==1) {
                                   echo "<h5 class='alert alert-success' role='alert'>Online</h5>";
                                }else {
                                    echo "<h5 class='alert alert-danger' role='alert'>Offline</h5>";
                                } ?></td>
                                </tr>
                                <?php
                                $con++;
                            }
                        }
                        ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>Codigo</th>
                            <th>Estado</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

            <!-- Modal -->
            <div id="myModal1" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" align="center">Registrar Clase</h4>
                        </div>
                        <div class="modal-body">
                            <form action="../Controller/Services/svc_RegisterClass.php" method="post">
                                Tema: <input type="text" name="topic"><br>
                                Fecha y hora: <input type="datetime-local" name="hora_start">
                                <input class="btn btn-primary" type="submit" value="Registrar">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Modal -->
    <div id="myModal2" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align="center">Finalizar Clase</h4>
                </div>
                <div class="modal-body">
                    <form action="../Controller/Services/svc_EndClass.php" method="post">
                        Fecha y hora: <input type="datetime-local" name="hora_end">
                        <input class="btn btn-primary" type="submit" value="Registrar">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<?php
$Query = $Connexion->query("SELECT * FROM student order by name");
$con = 0;
while ($row = $Query->fetch_assoc()){
    if($row["state"] == 1){
        echo "
                <script>
                    $( '.num$con').prop('checked', true);
                </script>
            ";
    }
    $con++;
}