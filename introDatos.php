<?php
include "includes/conexion.php";

//recuperamos las variables desde el formulario

$fecha=$_POST['fparte'];
$hora=$_POST['hparte'];
$causa=$_POST['causaacc'];
$tilesion=$_POST['tipoles'];
$parlesi=$_POST['parculesi'];
$gravedad=$_POST['grave'];
$dbaja=$_POST['baja'];
$dnitra=$_POST['dni'];



/*$sql2="INSERT INTO trabajador(Trabajador_dni) VALUES ('$dnitra')";*/

//hacemos la sentencia sql para insertar los datos en la bbdd
$sql="INSERT INTO partes(Fecha_accidente, Hora_accidente, Causa_accidente, Tipo_lesion, Partes_cuerpo_lesionado, Gravedad, Baja, DNI_trabaja) VALUES 
('$fecha','$hora','$causa','$tilesion','$parlesi','$gravedad','$dbaja','$dnitra')";

//var_dump($fecha); Comprueba valor de la variable


//ejecutamos la sentencia sql
$ejecutar=mysqli_query($conexion, $sql) or die ("No se pueden realizar los cambios.");



//verificamos la ejecucion
if(!$ejecutar){
  echo "Hubo algún error";
}else{
   echo "Datos guardados correctamente".'<a href="index.html"><br />Inicio</a>';
}
?>