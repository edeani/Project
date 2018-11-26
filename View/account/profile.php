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
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/imagenes.css">
    <link rel="stylesheet" href="/Diseloj.css">
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <link rel="shortcut icon" href="img/escudo1.png" type="img/x-icon">
    <script src="src/source_module.js"></script>
</head>
<header id="header" class="headerLis">
<div >
    <center><img src="/img/lol.png" alt="League Of Legends" class="imagen2"></center>
</div>
</header><!-- /header -->
<body class="body2">



    <div class="" align="right">
        <img alt="Johan Robles" class="img-circle" src="https://dl-web.dropbox.com/account_photo/get/dbaphid%3AAAB8CWOzbbEXgg9av3XtP9NJOJHEqD7zXyc?size=64x64&vers=1428070808936" width="32" height="32">
        <a class="boton-personalizado" href="../Controller/Services/svc_CloseSession.php">Cerrar sesion </a>
    </div>
    <div>
        <h3> Docente: Johan Robles
        </h3>
    </div>


    <div class="container">

       <div class="container-title-small">
         <center class="normalTitle"><p>Lista de cursos asignados</p></center>
       </div>
       <div class="foto-perfil">
         <img src="/img/account/default.png"/>
       </div>
       <div class="data-student">
         <div class="attr-student">
           <div class="label-attr">
             <label>Nombres</label>
           </div>
           <input type="text" id="nombre" name="nombre"/>
         </div>
         <div class="attr-student">
           <div class="label-attr">
             <label>Apellidos</label>
           </div>
           <input type="text" id="apellidos" name="apellidos"/>
         </div>
         <div class="attr-student">
           <div class="label-attr">
             <label>Edad</label>
           </div>
           <input type="text" id="edad" name="edad"/>
         </div>
         <div class="attr-student">
           <div class="label-attr">
             <label>Carrera</label>
           </div>
           <input type="text" id="carrera" name="carrera"/>
         </div>
        </div>
        <div class="ctrl-btn">
          <button id="uploa-img">upload</button>
        </div>
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
