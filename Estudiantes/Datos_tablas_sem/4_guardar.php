<?php 
    $sql="SELECT count(Correo) as total FROM `1.10_Guardar` WHERE Semestre = '$sem'";
    $result=mysqli_query($cn,$sql);
	$data=mysqli_fetch_assoc($result);

    $sql1="SELECT count('Correo') as total1 FROM `1.10_Guardar` WHERE Op1 = 'Si' AND Semestre = '$sem'";
    $result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count('Correo') as total2 FROM `1.10_Guardar` WHERE Op2 = 'Si' AND Semestre = '$sem'";
    $result2=mysqli_query($cn,$sql2);
	$data2=mysqli_fetch_assoc($result2);

    $sql3="SELECT count('Correo') as total3 FROM `1.10_Guardar` WHERE Op3 = 'Si' AND Semestre = '$sem'";
    $result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

    $sql4="SELECT count('Correo') as total4 FROM `1.10_Guardar` WHERE Op4 = 'Si' AND Semestre = '$sem'";
    $result4=mysqli_query($cn,$sql4);
	$data4=mysqli_fetch_assoc($result4);

    $sql5="SELECT count('Correo') as total5 FROM `1.10_Guardar` WHERE Op5 = 'Si' AND Semestre = '$sem'";
    $result5=mysqli_query($cn,$sql5);
    $data5=mysqli_fetch_assoc($result5);
?>