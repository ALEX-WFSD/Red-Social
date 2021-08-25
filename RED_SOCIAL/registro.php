<?php
 //conectar con el servidor 
   $hereda=require_once("conexion.php");
   
  
   //$conexion = mysqli_connect('localhost:8080','root','','red_social');
   //verificar conexion 
   if(!$hereda){
       echo"no se pudo conectar al sevidor ";

   } 
   
   else{
       echo"conexion establecida"; 
   }      
       
   

//obtener variables 
 $correo     = $_POST["RegCorreo"];
 $contrasena = $_POST["RegContrasena"];
 $confirmacion = $_POST["RegConfirmacion"];
 $usuNombre  = $_POST["RegNombre"];
 $fecha_naci = $_POST["Regfecha"];
 
 
 //validacion de campos vacios  
 if($contrasena !=$confirmacion)
  {
    echo"!!!Las contraseñas no coinciden!!! ";
      die("<a href='index.html'>volver</a>");
  }
  if ($correo == ""){
    echo"Necesita un correo para ingresar ";  
    die("<a href='index.html'>volver</a>");


  }
  if ($usuNombre == ""){
      echo"Nombre invalido";
    die("<a href='index.html'>volver</a>");

    
}
if ($fecha_naci == ""){
    echo"Fecha no valida ";
    die("<a href='index.html'>volver</a> ");

    
}
if ($contrasena== ""){
    echo"Password invalida";
    die("<a href='index.html'>volver</a>");

    
}
if ($confirmacion == ""){
    echo"Los password no coinciden ";
    die("<a href='index.html'>volver</a>");

    
}

$cifrada = crypt($contrasena);
//creamos la sentencia de sql
  $sql = "INSERT INTO tblusuario VALUES('$correo','$contrasena','$usuNombre','$fecha_naci')";
//ejecutamos la sentencia de sql 
$ejecutar=mysqli_query($conexion,$sql);
//verifica ejecucion
if(!$ejecutar){
    echo"hubo algun error";
    die("<a href='index.html'>volver</a>");
}else{
    echo"datos guardados correctamente<br><a href='index.html'>volver</a> "; 
}

mysqli_close($conexion);



?> 