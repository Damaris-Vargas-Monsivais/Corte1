<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Document</title>
</head>
<body>
<?php 
      $nombreArchivo="lorem.txt";
	  $archivo=fopen ($nombreArchivo, "r");//abrir archivo
	  
	  if($archivo=false){
		  echo ("Error al abrir archivo");
		  exit();
	  }
	  
	  $size=filesize($nombreArchivo);//obtener el tamaño del archivo
	  $elTexto_archivo=fread($archivo, $size);//leemos contenido del archivo
	  fclose($archivo);//cerrar el archivo
	  
	  echo ("File size:$size bytes");
	  echo ("<pre>$elTexto_archivo</pre>");
	?>
</body>
</html>	  
	  