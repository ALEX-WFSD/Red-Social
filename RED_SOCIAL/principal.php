<?php
session_start();
if(!isset($_SESSION["correo"])){
    header("Location: index.html");
}




?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RED_SOCIAL</title>
    <link rel="stylesheet" href="styles.css">
   
</head>
<body>
    <table border="1"  width="100%"  >

        <tr>
            <th style="width: 30%;">
             <img src="Imagenes/images.jpeg"alt="LOGO DE LA PAGINA " title="muesyra el logo " width="70%" height="70%" />
            </th>
            <th style="font-size: 25px; text-align: center; padding: 25px; color: #0e0e0e;  "  >
                 RED_SOCIAL
            </th>

        </tr>
        <tr>
            <td >OPCIONES</td>
            <td> 
                 <p>bienvenido</p>
                 <a href='mensajes.php'>Mensaje</a>
                 <br>
                 <?php
                   require_once("conexion.php");
                   $correoPara = $_SESSION["correo"];
                   $sql = "SELECT * FROM tblMensajes menPara =  '$correoPara'" ;
                   $resultado = mysqli_query($conexion,$sql);
                   while ($registro = mysqli_fetch_assoc($resultado)){
                       echo "DE: "$registro["menDE"] . "<br>";

                   }



                 ?>
            </td>
        </tr>
    </table>
   

    
</body>
</html>