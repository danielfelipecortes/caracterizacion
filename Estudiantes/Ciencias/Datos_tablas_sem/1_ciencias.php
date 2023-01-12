<?php 
    $sql="SELECT count('C.Facultad') as total FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
    INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
    WHERE (E.ID = 4) AND (A.Semestre = '$sem')";
    $result=mysqli_query($cn,$sql);
    $data=mysqli_fetch_assoc($result);

    $sql1="SELECT count(A.Programa) as total1 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
            WHERE (E.ID = 4) AND (A.Programa = 35) AND (A.Semestre = '$sem')";
    $result1=mysqli_query($cn,$sql1);
    $data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count(A.Programa) as total2 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
            WHERE (E.ID = 4) AND (A.Programa = 36) AND (A.Semestre = '$sem')";
    $result2=mysqli_query($cn,$sql2);
    $data2=mysqli_fetch_assoc($result2);

    $sql3="SELECT count(A.Programa) as total3 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
            WHERE (E.ID = 4) AND (A.Programa = 37) AND (A.Semestre = '$sem')";
    $result3=mysqli_query($cn,$sql3);
    $data3=mysqli_fetch_assoc($result3);
?>