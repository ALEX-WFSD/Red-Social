<?php
   require_once("conexion.php");

   //obtener variables 
 $correo = $_POST["EMCORREO"];
 $contrasena = $_POST["pssContrasena"];

 //validacion de campos vacios  
 
  if ($correo == ""){
    echo"Necesita un correo para ingresar ";  
    die("<a href='index.html'>volver</a>");


  }
  if ($contrasena== ""){
    echo"Password invalida";
    die("<a href='index.html'>volver</a>");

    
}

//$cifrada = crypt($contrasena);
echo $sql= "SELECT * FROM tblusuario WHERE usuCorreo = '$correo' ";
 
$resultado = mysqli_query($conexion, $sql);



if ($registro  = mysqli_fetch_assoc($resultado)){
  
    if ($contrasena==$registro["usuContrasena"])
    {
      session_start();
      $_SESSION["correo"] ==$correo;
      $_SESSION["Nombre"] == $registro["usuNombre"];

    mysqli_close($conexion);
    header("Location: principal.php");
   // die("<a href='index.html'>volver</a>");

  }
  else{
    echo"a contraseña no coincide";
    die("<a href='index.html'>volver</a>");

  }

  
}
else{
  echo"Correo no regitrado";
}

mysqli_close($conexion);




?>