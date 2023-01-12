<?php 
    $sql="SELECT count(Correo) as total FROM `1.1_Conocimiento_adquirido` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND A.Programa = 21";
    $result=mysqli_query($cn,$sql);
	$data=mysqli_fetch_assoc($result);

    $sql1="SELECT count('Correo') as total1 FROM `1.1_Conocimiento_adquirido` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND Autodidacta = 'Si' AND A.Programa = 21";
    $result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count('Correo') as total2 FROM `1.1_Conocimiento_adquirido` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND Curso = 'Si' AND A.Programa = 21";
    $result2=mysqli_query($cn,$sql2);
	$data2=mysqli_fetch_assoc($result2);

    $sql3="SELECT count('Correo') as total3 FROM `1.1_Conocimiento_adquirido` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND Otra = '' AND A.Programa = 21";
    $result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

?>