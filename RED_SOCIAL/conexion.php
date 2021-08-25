<?php

define("SERVIDOR", "localhost");
define("USUARIO","root");
define("CONTRASENA","");
define("BD","red_social");

$conexion = mysqli_connect(SERVIDOR,USUARIO,CONTRASENA,BD);

?>