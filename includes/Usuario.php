<?php

function obtenerUsuario($conexion){

try {
    $sth = $conexion->prepare("SELECT * FROM usuarios");
    $sth->execute();
    echo "<table border=1><tr>";
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $keys = array_keys($result[0]);
    foreach ($keys as $key)
      echo "<th>".$key."</th>";
    echo "</tr>";
    foreach ($result as $row) {
      echo "<tr>";
      foreach ($keys as $key)
          echo "<td>".$row[$key]."</td>";
      echo "</tr>";
    }
    echo "</table>";
} catch (Exception $e) {
  echo "Failed: " . $e->getMessage();
}

}




function grabarUsuario($conexion){
    var_dump($_POST);
	
	$query=$conexion->prepare('INSERT INTO usuarios (nombre_usuario, apellido_usuario, usuario_usuario, password_usuario, dni_usuario, tel_usuario, email_usuario, direccion_usuario) VALUES (:nombre_usuario, :apellido_usuario, :usuario_usuario, :password_usuario, :dni_usuario, :tel_usuario, :email_usuario, :direccion_usuario)');
	$query->execute(
		array(':nombre_usuario' => $_POST['nombre'],
			  ':apellido_usuario' => $_POST['apellido'],
			  ':usuario_usuario' => $_POST['userName'],
              ':password_usuario' => $_POST['password'],
              ':dni_usuario' => $_POST['dni'],
			  ':tel_usuario' => $_POST['telefono'],
			  ':email_usuario' => $_POST['email'],
			  ':direccion_usuario' => $_POST['direccion']
		 )
		);
}


?>