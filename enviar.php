<?php
$destino="presupuestos@acc-cm.com";
$nombre=$_POST["nombre"];
$empresa=$_POST["empresa"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$produ=$_POST["produ"];
$mensaje=$_POST["add"];

$header="enviado desde la Pagina de Alberto";

$mensajeCompleto =$mensaje ."\nAtentamente: ".$nombre;

mail($destino,$email,$empresa,$tel,$produ,$mesnaje,$header);
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>