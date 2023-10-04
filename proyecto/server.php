<?php 
$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");;
$db = mysql_select_db("usuarios", $link) or die("<h2>Error de conexion</h2>");

$nombre = $_POST[""];
$email = $_POST["email"];
$password = $_POST["psw"];
$rPass = $_POST["psw-repeat"];

$req = (strlen($nombre) * strlen($email) * strlen($password)*strlen($rPass)) or die("No se han llenado todos los casilleros");

if ($password != $rPass){
    die("Las contrasenas no coinciden <br><br>");
}

$contrasenaUsuario = md5($password);

mysql_query("INSERT INTO pag_web_libros VALUES ('','$nombre','$email','$contrasenaUsuario')",$link) or die("Error de envio");


?>