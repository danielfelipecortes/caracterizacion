<?php 
    $sql="SELECT count('C.Facultad') as total FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID  
    INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
    WHERE (E.ID = 1)";
    $result=mysqli_query($cn,$sql);
	$data=mysqli_fetch_assoc($result);
    
    $sql1="SELECT count(A.Programa) as total1 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
            WHERE (E.ID = 1) AND (A.Programa = 1)";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count(A.Programa) as total2 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
            WHERE (E.ID = 1) AND (A.Programa = 2)";
    $result2=mysqli_query($cn,$sql2);
    $data2=mysqli_fetch_assoc($result2);

    $sql3="SELECT count(A.Programa) as total3 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
            WHERE (E.ID = 1) AND (A.Programa = 3)";
    $result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

    $sql4="SELECT count(A.Programa) as total4 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
            WHERE (E.ID = 1) AND (A.Programa = 4)";
    $result4=mysqli_query($cn,$sql4);
	$data4=mysqli_fetch_assoc($result4);

    $sql5="SELECT count(A.Programa) as total5 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
            WHERE (E.ID = 1) AND (A.Programa = 5)";
    $result5=mysqli_query($cn,$sql5);    
	$data5=mysqli_fetch_assoc($result5);

    $sql6="SELECT count(A.Programa) as total6 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
            INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
            WHERE (E.ID = 1) AND (A.Programa = 6)";
    $result6=mysqli_query($cn,$sql6);
	$data6=mysqli_fetch_assoc($result6);

    $sql7="SELECT count(A.Programa) as total7 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
           INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
           WHERE (E.ID = 1) AND (A.Programa = 7)";
    $result7=mysqli_query($cn,$sql7);
	$data7=mysqli_fetch_assoc($result7);

    $sql8="SELECT count(A.Programa) as total8 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
        INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
        WHERE (E.ID = 1) AND (A.Programa = 8)";
    $result8=mysqli_query($cn,$sql8);
    $data8=mysqli_fetch_assoc($result8);

    $sql9="SELECT count(A.Programa) as total9 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
        INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
        WHERE (E.ID = 1) AND (A.Programa = 9)";
    $result9=mysqli_query($cn,$sql9);
    $data9=mysqli_fetch_assoc($result9);

    $sql10="SELECT count(A.Programa) as total10 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
        INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
        WHERE (E.ID = 1) AND (A.Programa = 10)";
    $result10=mysqli_query($cn,$sql10);
    $data10=mysqli_fetch_assoc($result10);

    $sql11="SELECT count(A.Programa) as total11 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
        INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
        WHERE (E.ID = 1) AND (A.Programa = 11)";
    $result11=mysqli_query($cn,$sql11);
    $data11=mysqli_fetch_assoc($result11);

    $sql12="SELECT count(A.Programa) as total12 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
        INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
        WHERE (E.ID = 1) AND (A.Programa = 12)";
    $result12=mysqli_query($cn,$sql12);
    $data12=mysqli_fetch_assoc($result12);
?>