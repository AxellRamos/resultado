<?php
	include("bd/abrir_conx.php");
	 
	 	if(isset($_POST['buscar']))
    { 
    	$doc = $_POST['doc'];
    	$valores = array();
    	$valores['existe'] = "0";

    	//CONSULTAR
		  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE solicitud = '$doc'");
		  while($consulta = mysqli_fetch_array($resultados))
		  {
		  	$valores['existe'] = "1"; //Esta variable no la usamos en el vídeo (se me olvido, lo siento xD). Aqui la uso en la linea 97 de registro.php
		  	$valores['nombre'] = $consulta['nombre'];
		  	$valores['promediosec'] = $consulta['promediosec'];
			$valores['testvoc'] = $consulta['testvoc'];
            $valores['prompond'] = $consulta['prompond'];
            $valores['resultado'] = $consulta['resultado'];
            $valores['opcion'] = $consulta['opcion'];
            $valores['carrera'] = $consulta['carrera'];
            $valores['modalidad'] = $consulta['modalidad'];
            $valores['observaciones'] = $consulta['observaciones'];
		  }
		  sleep(1);
		  $valores = json_encode($valores);
			echo $valores;
    }
	
  include("bd/cerrar_conexion.php");
?>