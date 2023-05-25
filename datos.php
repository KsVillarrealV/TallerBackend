<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>
<nav class="navbar bg-dark shadow-lg  mb-2 bg-body-tertiary rounded m-3 d-flex flex-row-reverse" data-bs-theme="dark">
    <div class="container-fluid me-auto p-1">
        <a class="navbar-brand" href="index.php">
        <img width="100" height="100" src="https://img.icons8.com/clouds/100/code.png" alt="code"/>
        Back-end
        </a>
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="calculadora.php">Calculadora</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Edad.php">Edad</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="datos.php">Formulario</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="EdadFecha.php">Fecha</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="busqueda.html">Tabla</a>
        </li>
    </ul>

</nav>
<form class="w-50 p-3" action="" method="GET" >
    <legend>Datos personales</legend>
    <div class="mb-3">
      <label for="textInput" class="form-label m-2">Nombres:</label>
      <input type="text" name="nombre" class="form-control m-1">
      <label for="textInput" class="form-label m-2">Apellidos:</label>
      <input type="text" name="apellido" class="form-control m-1" >
      <label for="textInput" class="form-label m-2">Cedula:</label>
      <input type="text" name="cedula"  class="form-control m-1" >
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <input type="submit" value="enviar" name="datos" class="btn btn-primary mt-2">
      </div>
      
</form>
</body>
</html>
<?php

if (isset($_GET['datos'])){
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $cedula= $_GET['cedula']; 

    echo "<br>Nombre: ".$nombre."<br>";
    echo "Apellido: ".$apellido."<br>";
    echo "Cedula: ".$cedula."<br>";
}
?>