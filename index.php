<?php
include ("includes/conexion.php");
include ("includes/Usuario.php");

?>
<html>
    <head>
        <title>Conexión a la Base de Datos</title>
    </head>
<body>
 
<?php
      $conexion = conexion();
    

	var_dump($_POST);
	if (count($_POST) >0){
        //require './form/guardar.php';
        
        grabarUsuario($conexion);
        obtenerUsuario($conexion);
		//TODO: guardar en la BD el usuario
	}else{
		require './formulario.php';
	}

	  





    
      
	

	  ?>





</body>
</html>