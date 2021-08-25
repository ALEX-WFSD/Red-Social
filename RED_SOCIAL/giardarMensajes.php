<?php
session_start();
if(!isset($_SESSION["correo"])){
    header("Location: index.html");
}





require_once("conexxion.php");

$para = $_POST["txtPara"];
$asunto = $_POST["txtAsunto"];
$mensajes = $_POST["txtMensaje"];
$de = $_SESSION["correo"];

$sql = "INSERT INTO tblMensaje VALUES (null,'$para','$de','$asunto', '$mensajes',NOW())";
mysqli_query($conexion,$sql);
mysqli_close($conexion);
header("Location: mensajes.php");








?>