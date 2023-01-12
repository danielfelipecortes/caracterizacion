<?php 
if($areas == 1){
    $sql="SELECT count(Correo) as total FROM `2.12_Guardar` WHERE Cargo = '$car' AND Programa = '$area'";
    $result=mysqli_query($cn,$sql);
	$data=mysqli_fetch_assoc($result);

    $sql1="SELECT count('Correo') as total1 FROM `2.12_Guardar` WHERE Op1 = 'Si' AND Cargo = '$car' AND Programa = '$area'";
    $result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count('Correo') as total2 FROM `2.12_Guardar` WHERE Op2 = 'Si' AND Cargo = '$car' AND Programa = '$area'";
    $result2=mysqli_query($cn,$sql2);
	$data2=mysqli_fetch_assoc($result2);

    $sql3="SELECT count('Correo') as total3 FROM `2.12_Guardar` WHERE Op3 = 'Si' AND Cargo = '$car' AND Programa = '$area'";
    $result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

    $sql4="SELECT count('Correo') as total4 FROM `2.12_Guardar` WHERE Op4 = 'Si' AND Cargo = '$car' AND Programa = '$area'";
    $result4=mysqli_query($cn,$sql4);
	$data4=mysqli_fetch_assoc($result4);

    $sql5="SELECT count('Correo') as total5 FROM `2.12_Guardar` WHERE Op5 = 'Si' AND Cargo = '$car' AND Programa = '$area'";
    $result5=mysqli_query($cn,$sql5);
    $data5=mysqli_fetch_assoc($result5);
}else{
    $sql="SELECT count(Correo) as total FROM `2.12_Guardar` WHERE Cargo = '$car'";
    $result=mysqli_query($cn,$sql);
	$data=mysqli_fetch_assoc($result);

    $sql1="SELECT count('Correo') as total1 FROM `2.12_Guardar` WHERE Op1 = 'Si' AND Cargo = '$car'";
    $result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count('Correo') as total2 FROM `2.12_Guardar` WHERE Op2 = 'Si' AND Cargo = '$car'";
    $result2=mysqli_query($cn,$sql2);
	$data2=mysqli_fetch_assoc($result2);

    $sql3="SELECT count('Correo') as total3 FROM `2.12_Guardar` WHERE Op3 = 'Si' AND Cargo = '$car'";
    $result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

    $sql4="SELECT count('Correo') as total4 FROM `2.12_Guardar` WHERE Op4 = 'Si' AND Cargo = '$car'";
    $result4=mysqli_query($cn,$sql4);
	$data4=mysqli_fetch_assoc($result4);

    $sql5="SELECT count('Correo') as total5 FROM `2.12_Guardar` WHERE Op5 = 'Si' AND Cargo = '$car'";
    $result5=mysqli_query($cn,$sql5);
    $data5=mysqli_fetch_assoc($result5);
}
?>