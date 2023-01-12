<?php 
    $sql="SELECT count('C.Facultad') as total FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID  
    INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
    WHERE (E.ID = 3) AND (A.Semestre = '$sem')";
    $result=mysqli_query($cn,$sql);
    $data=mysqli_fetch_assoc($result);

    $sql1="SELECT count(A.Programa) as total1 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
            WHERE (E.ID = 3) AND (A.Programa = 20) AND (A.Semestre = '$sem')";
    $result1=mysqli_query($cn,$sql1);
    $data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count(A.Programa) as total2 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
            WHERE (E.ID = 3) AND (A.Programa = 21) AND (A.Semestre = '$sem')";
    $result2=mysqli_query($cn,$sql2);
    $data2=mysqli_fetch_assoc($result2);

    $sql3="SELECT count(A.Programa) as total3 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
            WHERE (E.ID = 3) AND (A.Programa = 22) AND (A.Semestre = '$sem')";
    $result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

    $sql4="SELECT count(A.Programa) as total4 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
            WHERE (E.ID = 3) AND (A.Programa = 23) AND (A.Semestre = '$sem')";
    $result4=mysqli_query($cn,$sql4);
	$data4=mysqli_fetch_assoc($result4);

    $sql5="SELECT count(A.Programa) as total5 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
            WHERE (E.ID = 3) AND (A.Programa = 24) AND (A.Semestre = '$sem')";
    $result5=mysqli_query($cn,$sql5);    
	$data5=mysqli_fetch_assoc($result5);

    $sql6="SELECT count(A.Programa) as total6 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
            WHERE (E.ID = 3) AND (A.Programa = 25) AND (A.Semestre = '$sem')";
    $result6=mysqli_query($cn,$sql6);
	$data6=mysqli_fetch_assoc($result6);

    $sql7="SELECT count(A.Programa) as total7 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
             WHERE (E.ID = 3) AND (A.Programa = 26) AND (A.Semestre = '$sem')";
    $result7=mysqli_query($cn,$sql7);
    $data7=mysqli_fetch_assoc($result7);

    $sql8="SELECT count(A.Programa) as total8 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
        INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
        WHERE (E.ID = 3) AND (A.Programa = 27) AND (A.Semestre = '$sem')";
    $result8=mysqli_query($cn,$sql8);
    $data8=mysqli_fetch_assoc($result8);

    $sql9="SELECT count(A.Programa) as total9 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
        INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
        WHERE (E.ID = 3) AND (A.Programa = 28) AND (A.Semestre = '$sem')";
    $result9=mysqli_query($cn,$sql9);
    $data9=mysqli_fetch_assoc($result9);

    $sql10="SELECT count(A.Programa) as total10 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
        INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
        WHERE (E.ID = 3) AND (A.Programa = 29) AND (A.Semestre = '$sem')";
    $result10=mysqli_query($cn,$sql10);
    $data10=mysqli_fetch_assoc($result10);

    $sql11="SELECT count(A.Programa) as total11 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
        INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
        WHERE (E.ID = 3) AND (A.Programa = 30) AND (A.Semestre = '$sem')";
    $result11=mysqli_query($cn,$sql11);
    $data11=mysqli_fetch_assoc($result11);

    $sql12="SELECT count(A.Programa) as total12 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
        INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
        WHERE (E.ID = 3) AND (A.Programa = 31) AND (A.Semestre = '$sem')";
    $result12=mysqli_query($cn,$sql12);
    $data12=mysqli_fetch_assoc($result12);

    $sql13="SELECT count(A.Programa) as total13 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
       INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
       WHERE (E.ID = 3) AND (A.Programa = 32) AND (A.Semestre = '$sem')";
    $result13=mysqli_query($cn,$sql13);
    $data13=mysqli_fetch_assoc($result13);

    $sql14="SELECT count(A.Programa) as total14 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
       INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
       WHERE (E.ID = 3) AND (A.Programa = 33) AND (A.Semestre = '$sem')";
    $result14=mysqli_query($cn,$sql14);
    $data14=mysqli_fetch_assoc($result14);

    $sql15="SELECT count(A.Programa) as total15 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
       INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
       WHERE (E.ID = 3) AND (A.Programa = 34) AND (A.Semestre = '$sem')";
    $result15=mysqli_query($cn,$sql15);
    $data15=mysqli_fetch_assoc($result15);
?>