<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "prueba";

$cn = mysqli_connect("localhost","root","","Prueba3");
if (!$cn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($cn,"SELECT * FROM 0_login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	include "caracterizaciones.php";
}
else if ($nr == 0) 
{
	include "inicio_error.php";
?>
	
<?php
}
?>