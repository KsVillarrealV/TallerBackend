<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Calculadora</title>
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
<section>
<form class="w-50 p-3" action="" method="POST" >
    <legend>Calculadora</legend>
    <div class="mb-3">
      <label for="NumberInput" class="form-label m-2">Número 1:</label>
      <input type="number" name="num1" id="" class="form-control m-2">
      <label for="NumberInput" class="form-label m-2">Número 2:</label>
      <input type="number" name="num2" id="" class="form-control m-2" >
    </div>
    <div class="mb-3">
      <label for="Select" class="form-label m-2">Operación:</label>
      <select name="operacion" id="Select" class="form-select m-2">
            <option value="SUMA">Seleccionar...</option>
            <option value="SUMA">SUMA</option>
            <option value="RESTA">RESTA</option>
            <option value="MULTIPLICACION">MULTIPLICACIÓN</option>
            <option value="DIVISION">DIVISION</option>
      </select>
    </div >
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <input type="submit" value="calcular" name="proceso" class="btn btn-primary">
    </div>
    
</form>
</section>   
</body>
</html>
<?php

if (isset($_POST['proceso'])){
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $oper= $_POST['operacion']; 

    switch ($oper) {
        case 'SUMA':
            $Total = $numero1 + $numero2;
        break;
        case 'RESTA':
            $Total=$numero1 - $numero2;
        break;
        case 'MULTIPLICACION':
            $Total=$numero1 * $numero2;   
        break;
        case 'DIVISION':
            $Total=$numero1 / $numero2;        
        break;
    }
    echo "<h3>El resultado es: ". $Total."</h3>";
}
?>