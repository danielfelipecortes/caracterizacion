<?php 
    if($tamaño == 3){
        $sql="SELECT count($columna) as total FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND Semestre = '$sem' AND A.Programa = 16";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$dt1' AND Semestre = '$sem' AND A.Programa = 16";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$dt2' AND Semestre = '$sem' AND A.Programa = 16";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    }
    if($tamaño == 4){
        $sql="SELECT count($columna) as total FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND Semestre = '$sem' AND A.Programa = 16";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$do1' AND Semestre = '$sem' AND A.Programa = 16";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$do2' AND Semestre = '$sem' AND A.Programa = 16";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$do3' AND Semestre = '$sem' AND A.Programa = 16";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    }
    if($tamaño == 5){
        $sql="SELECT count($columna) as total FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND Semestre = '$sem' AND A.Programa = 16";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$d1' AND Semestre = '$sem' AND A.Programa = 16";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$d2' AND Semestre = '$sem' AND A.Programa = 16";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$d3' AND Semestre = '$sem' AND A.Programa = 16";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count($columna) as total4 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$d4' AND Semestre = '$sem' AND A.Programa = 16";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);
    }
    if($tamaño == 6){
        $sql="SELECT count($columna) as total FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND Semestre = '$sem' AND A.Programa = 16";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$da1' AND Semestre = '$sem' AND A.Programa = 16";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$da2' AND Semestre = '$sem' AND A.Programa = 16";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$da3' AND Semestre = '$sem' AND A.Programa = 16";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count($columna) as total4 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$da4' AND Semestre = '$sem' AND A.Programa = 16";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);

        $sql5="SELECT count($columna) as total5 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$da5' AND Semestre = '$sem' AND A.Programa = 16";
        $result5=mysqli_query($cn,$sql5);
        $data5=mysqli_fetch_assoc($result5);
    }
    if($tamaño == 7){
        $sql="SELECT count($columna) as total FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND Semestre = '$sem' AND A.Programa = 16";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$dat1' AND Semestre = '$sem' AND A.Programa = 16";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$dat2' AND Semestre = '$sem' AND A.Programa = 16";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$dat3' AND Semestre = '$sem' AND A.Programa = 16";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count($columna) as total4 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$dat4' AND Semestre = '$sem' AND A.Programa = 16";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);
    
        $sql5="SELECT count($columna) as total5 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$dat5' AND Semestre = '$sem' AND A.Programa = 16";
        $result5=mysqli_query($cn,$sql5);
        $data5=mysqli_fetch_assoc($result5);
    
        $sql6="SELECT count($columna) as total6 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND $columna = '$dat6' AND Semestre = '$sem' AND A.Programa = 16";
        $result6=mysqli_query($cn,$sql6);
        $data6=mysqli_fetch_assoc($result6);
    }
    if($tamaño == 9){
        $sql="SELECT count('Correo') as total FROM `$columna` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND Semestre = '$sem' AND A.Programa = 16";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
        
        $sql1="SELECT count(Correo) as total1 FROM `$columna` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND Op1 = 'Si' AND Semestre = '$sem' AND A.Programa = 16";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
        
        $sql2="SELECT count(Correo) as total2 FROM `$columna` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND Op2 = 'Si' AND Semestre = '$sem' AND A.Programa = 16";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count(Correo) as total3 FROM `$columna` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND Op3 = 'Si' AND Semestre = '$sem' AND A.Programa = 16";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count(Correo) as total4 FROM `$columna` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND Op4 = 'Si' AND Semestre = '$sem' AND A.Programa = 16";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);
    
        $sql5="SELECT count(Correo) as total5 FROM `$columna` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND Op5 = 'Si' AND Semestre = '$sem' AND A.Programa = 16";
        $result5=mysqli_query($cn,$sql5);
        $data5=mysqli_fetch_assoc($result5);
    
        $sql6="SELECT count(Correo) as total6 FROM `$columna` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND Op6 = 'Si' AND Semestre = '$sem' AND A.Programa = 16";
        $result6=mysqli_query($cn,$sql6);
        $data6=mysqli_fetch_assoc($result6);
    
        $sql7="SELECT count(Correo) as total7 FROM `$columna` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND Op7 = 'Si' AND Semestre = '$sem' AND A.Programa = 16";
        $result7=mysqli_query($cn,$sql7);
        $data7=mysqli_fetch_assoc($result7);
    
        $sql8="SELECT count(Correo) as total8 FROM `$columna` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 2 AND Op8 = 'Si' AND Semestre = '$sem' AND A.Programa = 16";
        $result8=mysqli_query($cn,$sql8);
        $data8=mysqli_fetch_assoc($result8);
    }
?>