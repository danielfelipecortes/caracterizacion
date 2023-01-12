<?php 
    $sql="SELECT count(Correo) as total FROM `1.16_Ciudadania` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND Semestre = '$sem' AND A.Programa = 36";
    $result=mysqli_query($cn,$sql);
	$data=mysqli_fetch_assoc($result);

    $sql1="SELECT count('Correo') as total1 FROM `1.16_Ciudadania` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND Op1 = 'Si' AND Semestre = '$sem' AND A.Programa = 36";
    $result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count('Correo') as total2 FROM `1.16_Ciudadania` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND Op2 = 'Si' AND Semestre = '$sem' AND A.Programa = 36";
    $result2=mysqli_query($cn,$sql2);
	$data2=mysqli_fetch_assoc($result2);

    $sql3="SELECT count('Correo') as total3 FROM `1.16_Ciudadania` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND Op3 = 'Si' AND Semestre = '$sem' AND A.Programa = 36";
    $result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

    $sql4="SELECT count('Correo') as total4 FROM `1.16_Ciudadania` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND Op4 = 'Si' AND Semestre = '$sem' AND A.Programa = 36";
    $result4=mysqli_query($cn,$sql4);
	$data4=mysqli_fetch_assoc($result4);

    $sql5="SELECT count('Correo') as total5 FROM `1.16_Ciudadania` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND Op5 = 'Si' AND Semestre = '$sem' AND A.Programa = 36";
    $result5=mysqli_query($cn,$sql5);
    $data5=mysqli_fetch_assoc($result5);
?>