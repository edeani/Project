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
     <link rel="stylesheet" href="styles/styles_module.css">
    <title>Listado de estudiantes</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/imagenes.css">
    <link rel="stylesheet" href="../Diseloj.css">
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <link rel="shortcut icon" href="img/escudo1.png" type="img/x-icon">
    <script src="src/source_module.js"></script>
</head>
<header id="header" class="headerLis">
<div >
    <center><img src="../img/lol.png" alt="League Of Legends" class="imagen2"></center>
</div>
</header><!-- /header -->
<body class="body2">



    <div class="" align="right">
        <img alt="Johan Robles" class="img-circle" src="https://dl-web.dropbox.com/account_photo/get/dbaphid%3AAAB8CWOzbbEXgg9av3XtP9NJOJHEqD7zXyc?size=64x64&vers=1428070808936" width="32" height="32">
        <a class="boton-personalizado" href="../Controller/Services/svc_CloseSession.php">Cerrar sesion </a>
    </div>
    <div>
        <h3>
          <?php
               $name_student=ucwords(strtolower($_SESSION['nombre']));
               $rol_session=ucwords(strtolower($_SESSION['rol']));
               echo $rol_session.":"?><a href="/View/account/profile.php"> <?php echo $name_student; ?> </a>
        </h3>
    </div>

    <div>
    
      <a class="boton-personalizado " href="/View/account/chat.html">CHAT</a>
      

    </div>


    <div class="container">


       <center><p>Lista de cursos asignados</p></center>
        <table class="table">
            <?php
                include "../Model/Class/class_Connexion.php";
                include "../Controller/Services/svc_Connexion.php";
                $Query = $Connexion->query("SELECT c.name, c.id_course FROM course AS c INNER JOIN courses_teachers AS ct ON ct.id_course = c.id_course INNER JOIN teacher AS t ON t.id = ct.id_teacher");
                $row = $Query->fetch_assoc();
            ?>
            <td><a href="list_course.php?id=<?php echo $row["id_course"]?>" class="boton-personalizado "><?php echo $row["name"]?></a></td>
        </table>

    </div>
 <div class="wrap">
    <div class="widget">
      <div class="fecha">
      <p id="diaSemana" class="diaSemana"></p>
      <p id="dia" class="dia"></p>
      <p>de</p>
      <p id="mes" class="mes"></p>
      <p>del</p>
      <p id="year" class"year"></p>
      </div>

      <div class="reloj">
      <p id="horas" class="horas"></p>
      <p>:</p>
      <p id="minutos" class="minutos"></p>
      <p>:</p>
      <div class="caja-seg">
      <p id="ampm" class="ampm"></p>
      <p id="seg" class="seg"></p>
      </div>
      </div>
</div>
</div>


    <br>

    <footer>
        <center><h3>Que empiece el juego :V</h3></center>
    </footer>
    <script
              src="https://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>
 <script src="../Reloj.js"></script>
</body>
</html>
