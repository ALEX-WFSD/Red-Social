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
            <td>mensajes </td>
            <td>subir fotos </td>
            <td>ver fotos </td>
            <td>prfil</td>
            <td>cerrar Sesion </td>
           <td> <form  id="frmMensajes" name="frmMensajes" action="POST" >
                  para 
                  <input type="text" id="txtPara" />  
                  <br/>
              Asunto
              <input type="text" id="txtAsunto" />
              <br/>
              mensajes
              <input type="text" id="txtMensaje" />
              <br>
              <input type="submit" id="btnEnviarMen"  name="btnEnviarMen" value="registro" />
              
              







            </form>
            </td>
        </tr>
    </table>
   

    
</body>
</html>