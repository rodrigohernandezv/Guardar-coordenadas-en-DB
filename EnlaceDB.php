<?php
$Latitud=$_REQUEST("Latitud");
$Longitud=$_REQUEST("Longitud");
$enlace= mysqli_connect(localhost, root, ejemplo, 3306)
$cadena="INSERT INTO dbll(Coordenadas,Latitud,Longitud)VALUES(NULL,'",$Latitud,"','",$Longitud,"')";
mysqli_query($enlace, $cadena);
?>