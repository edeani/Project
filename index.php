<!DOCTYPE html>
<html lang='es' class=''>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | L.O.L</title>
   	<script src='https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js'></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="View/src/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/imagenes.css">
	<link rel="stylesheet" href="css/loader.css">
	<link rel="stylesheet" href="img/style.css">
</head>
<body class="body1">

<div class="login">

	<div id="contenedor">
	<center><h3>Curso de programacion WEB</h3></center>
	<img src="img/lol.png" alt="League Of Legends" class="imagen1">
    <form method="post" action="Controller/Services/svc_Login.php">
        <input type="text" name="user" placeholder="Usuario" required="required" />
        <br>
        <input type="password" name="pass" placeholder="Contraseña" required="required" />
        <br>
        <br>
        <button type="submit" id="btn-login" class="btn btn-primary btn-block btn-large waves-effect">Ingresar!</button>
    </form>
    </div>
   </div>
   <div class="video"> <iframe width="1400" height="850" src="https://www.youtube.com/embed/DTyg8INMt6Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></iframe></video></div>

</body>
</html>
