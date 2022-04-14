<?php
// se definen las variables  servidor, usuario,contraseña,y base de datos
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'webproy1_controlsalud');
  define('DB_PASSWORD', 'Xm4Mnz5b');
  define('DB_NAME', 'webproy1_controlsalud');
  $link = mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);// se realiza la conexion 
  if ($link === false) {
  	die ("error en la conexion" . mysqli_connect_error());
  }
?>