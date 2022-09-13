<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input');
 
  $params = json_decode($json);
  
  require("./comun/db.php"); // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB

  $conexion = conexion(); // CREA LA CONEXION
  
  // REALIZA LA QUERY A LA DB
  mysqli_query($conexion, "UPDATE personas SET rut='$params->rut',
      plan='$params->plan',
	    asunto='$params->asunto',
	    nombre='$params->nombre',
	    apellido='$params->apellido',
	    idTransaccion='$params->idTransaccion',
	    miembroGitlab='$params->miembroGitlab',
	    email='$params->email',
	    mensaje='$params->mensaje'
    WHERE idPersona=$params->idPersona");
    
  
  class Result {}

  // GENERA LOS DATOS DE RESPUESTA
  $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = 'EL USUARIO SE ACTUALIZO EXITOSAMENTE';

  header('Content-Type: application/json');

  echo json_encode($response); // MUESTRA EL JSON GENERADO
?>