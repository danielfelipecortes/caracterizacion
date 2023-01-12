<?php 
    //Incritos por facultad
    $sql="SELECT count('C.Facultad') as total FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID WHERE A.Semestre = '$sem'";
    $result=mysqli_query($cn,$sql);
	$data=mysqli_fetch_assoc($result);

    $sql1="SELECT count('C.Facultad') as total1 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID WHERE C.Facultad = 1 AND A.Semestre = '$sem'";
    $result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count('C.Facultad') as total2 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID WHERE C.Facultad = 2 AND A.Semestre = '$sem'";
    $result2=mysqli_query($cn,$sql2);
	$data2=mysqli_fetch_assoc($result2);

    $sql3="SELECT count('C.Facultad') as total3 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID WHERE C.Facultad = 3 AND A.Semestre = '$sem'";
    $result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

    $sql4="SELECT count('C.Facultad') as total4 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID WHERE C.Facultad = 4 AND A.Semestre = '$sem'";
    $result4=mysqli_query($cn,$sql4);
	$data4=mysqli_fetch_assoc($result4);
    //Incritos por facultad
?>