<?php 
    $sql="SELECT count(Correo) as total FROM `1.1_Conocimiento_adquirido`";
    $result=mysqli_query($cn,$sql);
	$data=mysqli_fetch_assoc($result);

    $sql1="SELECT count('Correo') as total1 FROM `1.1_Conocimiento_adquirido` WHERE Autodidacta = 'Si'";
    $result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count('Correo') as total2 FROM `1.1_Conocimiento_adquirido` WHERE Curso = 'Si'";
    $result2=mysqli_query($cn,$sql2);
	$data2=mysqli_fetch_assoc($result2);

    $sql3="SELECT count('Correo') as total3 FROM `1.1_Conocimiento_adquirido` WHERE Otra = ''";
    $result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

?>