<?php
    session_start();
    if(!isset($_SESSION["active"])) header("Location: ../index.php");
    error_reporting(E_ERROR);

    $currentDir = getcwd();
    $uploadDirectory = "/img/account/";

    $errors = [];

    $fileExtensions = ['jpeg','jpg','png'];

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    //$uploadPath = $currentDir . $uploadDirectory . basename($fileName);
    $uploadPath = "C:/xampp/htdocs/img/account/" . basename($fileName);
    if (isset($_POST['submit'])) {

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        }

        if ($fileSize > 2000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
                echo "The file " . basename($fileName) . " has been uploaded ".$fileTmpName." ".$uploadPath;
            } else {
                echo "An error occurred somewhere. Try again or contact the admin".$fileTmpName." ".$uploadPath;
            }

        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
    }

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
        <a class="boton-personalizado" href="/Controller/Services/svc_CloseSession.php">Cerrar sesion </a>
    </div>
    <div>
        <h3> <?php
             $name_student=ucwords(strtolower($_SESSION['nombre']));
             $rol_session=ucwords(strtolower($_SESSION['rol']));
             echo $rol_session.":".$name_student;
             ?>
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
           <input type="text" id="name_student" disabled="disabled" name="name_student" value="<?php echo $name_student ?>"/>

         </div>

         <div class="attr-student">
           <div class="label-attr">
             <label>Edad</label>
           </div>
           <input type="text" id="age" disabled="disabled" name="age" value="<?php echo $_SESSION['age'] ?>"/>

         </div>
         <div class="attr-student">
           <div class="label-attr">
             <label>G&eacute;nero</label>
           </div>
           <input type="text" id="gender" disabled="disabled" name="gender" value="<?php echo $_SESSION['gender'] ?>"/>

         </div>



        </div>
        <div class="container-ptofile-1">
          <button id="subir-foto">Subir Foto</button>
        </div>
        <div class="container-button-upload" style="display:none;">
          <form id="form-img" action="/View/account/profile.php" method="post" enctype="multipart/form-data">
            <input type="file" name="myfile" id="fileToUpload">
            <input type="submit" name="submit" value="Upload File Now" >
          </form>
        </div>
        <!--div class="ctrl-btn">
          <button id="uploa-img">upload</button>
        </div-->
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
 <script src="/js/upload-img.js"></script>
</body>
</html>
