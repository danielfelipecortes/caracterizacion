<!DOCTYPE html>
<html>
	<head>
		<?php include ("../Estructura/head.php")?>
	</head>
	<body>  
		<?php include ("../A_conexion.php");?>	
		<?php error_reporting (0);?>
		<?php echo ($Correo);?>
        <?php mysqli_close($cn); ?>
	</body>
</html> 