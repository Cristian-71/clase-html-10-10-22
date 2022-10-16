<?php 
//  //Validamos datos del servidor
 $user = "root";
$pass = "";
$host = "localhost";
// //conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);
$nombre = $_POST["user_name"] ;
$apellido = $_POST["user_lastname"] ;
$direccion = $_POST["user_direction"] ;
$distrito = $_POST["user_distrito"] ;
$numero_documento = $_POST["user_number_document"] ;
$numero_telefono = $_POST["user_phone"] ;
$email = $_POST["user_email"] ;
$edad = $_POST["user_age"] ;
$fecha_registro = $_POST["user_date_registro"] ;

echo "los datos son los siguientes: <br>";
echo "$nombre, $apellido, $direccion, $distrito, $numero_documento, $numero_telefono, $email, $edad, $fecha_registro";

 
 
 

?>