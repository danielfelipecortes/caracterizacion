<?php 
if($programas == 1){
    $sql="SELECT count(Correo) as total FROM `3.3_Comunicativa` WHERE Contratacion = '$con' AND Programa = '$programa'";
    $result=mysqli_query($cn,$sql);
	$data=mysqli_fetch_assoc($result);

    $sql1="SELECT count('Correo') as total1 FROM `3.3_Comunicativa` WHERE Op1 = 'Si' AND Contratacion = '$con' AND Programa = '$programa'";
    $result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count('Correo') as total2 FROM `3.3_Comunicativa` WHERE Op2 = 'Si' AND Contratacion = '$con' AND Programa = '$programa'";
    $result2=mysqli_query($cn,$sql2);
	$data2=mysqli_fetch_assoc($result2);

    $sql3="SELECT count('Correo') as total3 FROM `3.3_Comunicativa` WHERE Op3 = 'Si' AND Contratacion = '$con' AND Programa = '$programa'";
    $result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

    $sql4="SELECT count('Correo') as total4 FROM `3.3_Comunicativa` WHERE Op4 = 'Si' AND Contratacion = '$con' AND Programa = '$programa'";
    $result4=mysqli_query($cn,$sql4);
	$data4=mysqli_fetch_assoc($result4);

    $sql5="SELECT count('Correo') as total5 FROM `3.3_Comunicativa` WHERE Op5 = 'Si' AND Contratacion = '$con' AND Programa = '$programa'";
    $result5=mysqli_query($cn,$sql5);
    $data5=mysqli_fetch_assoc($result5);

    $sql6="SELECT count('Correo') as total6 FROM `3.3_Comunicativa` WHERE Op6 = 'Si' AND Contratacion = '$con' AND Programa = '$programa'";
    $result6=mysqli_query($cn,$sql6);
    $data6=mysqli_fetch_assoc($result6);

    $sql7="SELECT count('Correo') as total7 FROM `3.3_Comunicativa` WHERE Op7 = 'Si' AND Contratacion = '$con' AND Programa = '$programa'";
    $result7=mysqli_query($cn,$sql7);
    $data7=mysqli_fetch_assoc($result7);

    $sql8="SELECT count('Correo') as total8 FROM `3.3_Comunicativa` WHERE Op8 = 'Si' AND Contratacion = '$con' AND Programa = '$programa'";
    $result8=mysqli_query($cn,$sql8);
	$data8=mysqli_fetch_assoc($result8);

    $sql9="SELECT count('Correo') as total9 FROM `3.3_Comunicativa` WHERE Op9 = 'Si' AND Contratacion = '$con' AND Programa = '$programa'";
    $result9=mysqli_query($cn,$sql9);
    $data9=mysqli_fetch_assoc($result9);
}else{
    $sql="SELECT count(Correo) as total FROM `3.3_Comunicativa` WHERE Contratacion = '$con'";
    $result=mysqli_query($cn,$sql);
	$data=mysqli_fetch_assoc($result);

    $sql1="SELECT count('Correo') as total1 FROM `3.3_Comunicativa` WHERE Op1 = 'Si' AND Contratacion = '$con'";
    $result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count('Correo') as total2 FROM `3.3_Comunicativa` WHERE Op2 = 'Si' AND Contratacion = '$con'";
    $result2=mysqli_query($cn,$sql2);
	$data2=mysqli_fetch_assoc($result2);

    $sql3="SELECT count('Correo') as total3 FROM `3.3_Comunicativa` WHERE Op3 = 'Si' AND Contratacion = '$con'";
    $result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

    $sql4="SELECT count('Correo') as total4 FROM `3.3_Comunicativa` WHERE Op4 = 'Si' AND Contratacion = '$con'";
    $result4=mysqli_query($cn,$sql4);
	$data4=mysqli_fetch_assoc($result4);

    $sql5="SELECT count('Correo') as total5 FROM `3.3_Comunicativa` WHERE Op5 = 'Si' AND Contratacion = '$con'";
    $result5=mysqli_query($cn,$sql5);
    $data5=mysqli_fetch_assoc($result5);

    $sql6="SELECT count('Correo') as total6 FROM `3.3_Comunicativa` WHERE Op6 = 'Si' AND Contratacion = '$con'";
    $result6=mysqli_query($cn,$sql6);
    $data6=mysqli_fetch_assoc($result6);

    $sql7="SELECT count('Correo') as total7 FROM `3.3_Comunicativa` WHERE Op7 = 'Si' AND Contratacion = '$con'";
    $result7=mysqli_query($cn,$sql7);
    $data7=mysqli_fetch_assoc($result7);

    $sql8="SELECT count('Correo') as total8 FROM `3.3_Comunicativa` WHERE Op8 = 'Si' AND Contratacion = '$con'";
    $result8=mysqli_query($cn,$sql8);
	$data8=mysqli_fetch_assoc($result8);

    $sql9="SELECT count('Correo') as total9 FROM `3.3_Comunicativa` WHERE Op9 = 'Si' AND Contratacion = '$con'";
    $result9=mysqli_query($cn,$sql9);
    $data9=mysqli_fetch_assoc($result9);
}
?>