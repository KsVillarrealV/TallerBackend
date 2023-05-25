<?php
include_once "conexion.php";

$tabla="";
$query="SELECT * FROM usuarios ORDER BY id_usuario";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['usuarios']))
{
	$q=$conexion->real_escape_string($_POST['usuarios']);
	$query="SELECT * FROM usuarios WHERE 
		id_usuario LIKE '%".$q."%' OR
		Nombres LIKE '%".$q."%' OR
		Apellidos LIKE '%".$q."%' OR
		Cedula LIKE '%".$q."%'";
}

$buscarUsuarios=$conexion->query($query);
if ($buscarUsuarios->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<th scope="col">#</th>
			<th scope="col">NOMBRE</th>
			<th scope="col">APELLIDO</th>
			<th scope="col">CEDULA</th>
		</tr>';

	while($filaUsuarios= $buscarUsuarios->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<th>'.$filaUsuarios['id_usuario'].'</th>
			<td>'.$filaUsuarios['Nombres'].'</td>
			<td>'.$filaUsuarios['Apellidos'].'</td>
			<td>'.$filaUsuarios['Cedula'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
