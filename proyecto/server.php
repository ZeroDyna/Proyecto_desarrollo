<?php 
$user = "root";
$pass = "";
$host = "localhost";

$connection = mysqli_connect($host, $user, $pass);

$nombre = $_POST[""];
$email = $_POST["email"];
$password = $_POST["psw"];
$rPass = $_POST["psw-repeat"];

if ($password!=$rPass){
    die('Las contrasenas no coinciden <br><br><a href="prieba.html"> Volver</a>');
}

if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" ;
        }
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "pag_web_libros";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO usuario (nombre, correo, contrasena)
                             VALUES ('$nombre','$email','$password')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM usuario";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}


mysqli_close( $connection );

?>