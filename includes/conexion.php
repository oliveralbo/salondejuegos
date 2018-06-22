<?php



$servidor = "localhost"; //el servidor que utilizaremos, en este caso será el localhost
$usuario = "root"; //El usuario que acabamos de crear en la base de datos
$contrasena = ""; //La contraseña del usuario que utilizaremos
$BD = "salondejuegos"; //El nombre de la base de datos
$conexion;

function conexion(){

	global $servidor, $BD, $usuario, $contrasena, $conexion;

	try{

		$conexion = new PDO ("mysql:host=$servidor;dbname=$BD", $usuario, $contrasena);
		echo '<h1>se conecto</h1>';

        return $conexion;

	}catch (PDOExeption $error){

		var_dump($error);

    }


}


?>