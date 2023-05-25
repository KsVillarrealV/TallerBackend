<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Fecha de Nacimiento</title>
</head>

<body>
    <nav class="navbar bg-dark shadow-lg  mb-2 bg-body-tertiary rounded m-3 d-flex flex-row-reverse" data-bs-theme="dark">
        <div class="container-fluid me-auto p-1">
            <a class="navbar-brand" href="index.php">
                <img width="100" height="100" src="https://img.icons8.com/clouds/100/code.png" alt="code" />
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
    <div class="w-50 p-3">
        <form action="" method="POST">
            <div class="col_one_third col_last c-azul">
                <label for="nacimiento">Fecha de nacimiento:</label>
                <input type="date" id="nacimiento" name="nacimiento" class="sm-form-control">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" value="enviar" name="fecha" class="btn btn-primary mt-2">
            </div>
        </form>
    <?php
        if (isset($_POST['fecha'])){
            $fechaN = new DateTime($_POST['nacimiento']);
            $fecha_actual = date("d-m-Y");
            $dato2 = new DateTime($fecha_actual);
            $diff = $fechaN -> diff($dato2);
            $edad = $diff -> y;
            if($edad<18){
                echo "<h3>Su edad es ".$edad." por lo tanto no es mayor de edad</h3>";    
            }else{
                echo "<h3>Su edad es ".$edad." por lo tanto  es mayor de edad</h3>";
            }
            
        }
    ?>
    </div>
</body>
</html>
