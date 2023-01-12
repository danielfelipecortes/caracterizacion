<?php 
if($areas == 1){
    $sql="SELECT count(Correo) as total FROM `2.14_Aprendizaje` WHERE Programa = '$area'";
    $result=mysqli_query($cn,$sql);
	$data=mysqli_fetch_assoc($result);

    $sql1="SELECT count('Correo') as total1 FROM `2.14_Aprendizaje` WHERE Op1 = 'Si' AND Programa = '$area'";
    $result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count('Correo') as total2 FROM `2.14_Aprendizaje` WHERE Op2 = 'Si' AND Programa = '$area'";
    $result2=mysqli_query($cn,$sql2);
	$data2=mysqli_fetch_assoc($result2);

    $sql3="SELECT count('Correo') as total3 FROM `2.14_Aprendizaje` WHERE Op3 = 'Si' AND Programa = '$area'";
    $result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

    $sql4="SELECT count('Correo') as total4 FROM `2.14_Aprendizaje` WHERE Op4 = 'Si' AND Programa = '$area'";
    $result4=mysqli_query($cn,$sql4);
	$data4=mysqli_fetch_assoc($result4);

    $sql5="SELECT count('Correo') as total5 FROM `2.14_Aprendizaje` WHERE Op5 = 'Si' AND Programa = '$area'";
    $result5=mysqli_query($cn,$sql5);
    $data5=mysqli_fetch_assoc($result5);

    $sql6="SELECT count('Correo') as total6 FROM `2.14_Aprendizaje` WHERE Op5 = 'Si' AND Programa = '$area'";
    $result6=mysqli_query($cn,$sql6);
    $data6=mysqli_fetch_assoc($result6);

    $sql7="SELECT count('Correo') as total7 FROM `2.14_Aprendizaje` WHERE Otra = '' AND Programa = '$area'";
    $result7=mysqli_query($cn,$sql7);
	$data7=mysqli_fetch_assoc($result7);
}else{
    $sql="SELECT count(Correo) as total FROM `2.14_Aprendizaje`";
    $result=mysqli_query($cn,$sql);
	$data=mysqli_fetch_assoc($result);

    $sql1="SELECT count('Correo') as total1 FROM `2.14_Aprendizaje` WHERE Op1 = 'Si'";
    $result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count('Correo') as total2 FROM `2.14_Aprendizaje` WHERE Op2 = 'Si'";
    $result2=mysqli_query($cn,$sql2);
	$data2=mysqli_fetch_assoc($result2);

    $sql3="SELECT count('Correo') as total3 FROM `2.14_Aprendizaje` WHERE Op3 = 'Si'";
    $result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

    $sql4="SELECT count('Correo') as total4 FROM `2.14_Aprendizaje` WHERE Op4 = 'Si'";
    $result4=mysqli_query($cn,$sql4);
	$data4=mysqli_fetch_assoc($result4);

    $sql5="SELECT count('Correo') as total5 FROM `2.14_Aprendizaje` WHERE Op5 = 'Si'";
    $result5=mysqli_query($cn,$sql5);
    $data5=mysqli_fetch_assoc($result5);

    $sql6="SELECT count('Correo') as total6 FROM `2.14_Aprendizaje` WHERE Op5 = 'Si'";
    $result6=mysqli_query($cn,$sql6);
    $data6=mysqli_fetch_assoc($result6);

    $sql7="SELECT count('Correo') as total7 FROM `2.14_Aprendizaje` WHERE Otra = ''";
    $result7=mysqli_query($cn,$sql7);
	$data7=mysqli_fetch_assoc($result7);
}
?>