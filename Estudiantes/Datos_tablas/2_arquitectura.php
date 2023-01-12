<?php 
        $sql1="SELECT count(A.Programa) as total1 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
                INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
                WHERE (E.ID = 2) AND (A.Programa = 13)";
        $result1=mysqli_query($cn,$sql1);
                $data1=mysqli_fetch_assoc($result1);

        $sql2="SELECT count(A.Programa) as total2 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
                INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
                WHERE (E.ID = 2) AND (A.Programa = 14)";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);

        $sql3="SELECT count(A.Programa) as total3 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
                INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
                WHERE (E.ID = 2) AND (A.Programa = 15)";
        $result3=mysqli_query($cn,$sql3);
                $data3=mysqli_fetch_assoc($result3);

        $sql4="SELECT count(A.Programa) as total4 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
                INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
                WHERE (E.ID = 2) AND (A.Programa = 16)";
        $result4=mysqli_query($cn,$sql4);
                $data4=mysqli_fetch_assoc($result4);

        $sql5="SELECT count(A.Programa) as total5 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
                INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
                WHERE (E.ID = 2) AND (A.Programa = 17)";
        $result5=mysqli_query($cn,$sql5);    
                $data5=mysqli_fetch_assoc($result5);

        $sql6="SELECT count(A.Programa) as total6 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
                INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
                WHERE (E.ID = 2) AND (A.Programa = 18)";
        $result6=mysqli_query($cn,$sql6);
                $data6=mysqli_fetch_assoc($result6);

        $sql7="SELECT count(A.Programa) as total7 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID 
                INNER JOIN `0_Facultades` E ON C.Facultad = E.ID 
                WHERE (E.ID = 2) AND (A.Programa = 19)";
        $result7=mysqli_query($cn,$sql7);
                $data7=mysqli_fetch_assoc($result7);
?>