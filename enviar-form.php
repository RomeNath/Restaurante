<?php 


print "<pre>";
print print_r($_REQUEST);
print "</pre>";


$nombre= $_REQUEST['nameInput'];
$correo= $_REQUEST['correo'];
$invitados= $_REQUEST['invitados'];
$mensaje= $_REQUEST['mensaje'];

$mensajeGracias= "$nombre <br/> Gracias por su preferencia";

echo $mensajeGracias;
echo "<br/>";
echo $mensaje;

$mail = "Su reservación fue realizada con éxito";
$titulo = "RESERVACION";
$headers = "$mensaje: 1.0\r\n"; 
$headers .= "From: Geeky Theory < $nathromero.95@gmail.com >\r\n";
 
$bool = mail("$correo",$titulo,$mail,$headers $mensajeGracias);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}