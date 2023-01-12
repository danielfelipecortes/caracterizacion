<?php 
if($programas == 1){
    if($tamaño == 3){
        $sql="SELECT count($columna) as total FROM `3.0_Profesores` WHERE Programa = '$programa'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `3.0_Profesores` WHERE $columna = '$dt1' AND Programa = '$programa'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `3.0_Profesores` WHERE $columna = '$dt2' AND Programa = '$programa'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    }
    if($tamaño == 4){
        $sql="SELECT count($columna) as total FROM `3.0_Profesores` WHERE Programa = '$programa'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `3.0_Profesores` WHERE $columna = '$do1' AND Programa = '$programa'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `3.0_Profesores` WHERE $columna = '$do2' AND Programa = '$programa'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `3.0_Profesores` WHERE $columna = '$do3' AND Programa = '$programa'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    }
    if($tamaño == 5){
        $sql="SELECT count($columna) as total FROM `3.0_Profesores` WHERE Programa = '$programa'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `3.0_Profesores` WHERE $columna = '$d1' AND Programa = '$programa'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `3.0_Profesores` WHERE $columna = '$d2' AND Programa = '$programa'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `3.0_Profesores` WHERE $columna = '$d3' AND Programa = '$programa'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count($columna) as total4 FROM `3.0_Profesores` WHERE $columna = '$d4' AND Programa = '$programa'";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);
    }
    if($tamaño == 9){
        $sql="SELECT count('Correo') as total FROM `3.0_Profesores` WHERE Programa = '$programa'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
        
        $sql1="SELECT count(Correo) as total1 FROM `3.0_Profesores` WHERE $columnaa = 'A' AND Programa = '$programa'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
        
        $sql2="SELECT count(Correo) as total2 FROM `3.0_Profesores` WHERE $columnaa = 'B' AND Programa = '$programa'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count(Correo) as total3 FROM `3.0_Profesores` WHERE $columnaa = 'C' AND Programa = '$programa'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count(Correo) as total4 FROM `3.0_Profesores` WHERE $columnaa = 'D' AND Programa = '$programa'";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);
    
        $sql5="SELECT count(Correo) as total5 FROM `3.0_Profesores` WHERE $columnab = 'A' AND Programa = '$programa'";
        $result5=mysqli_query($cn,$sql5);
        $data5=mysqli_fetch_assoc($result5);
    
        $sql6="SELECT count(Correo) as total6 FROM `3.0_Profesores` WHERE $columnab = 'B' AND Programa = '$programa'";
        $result6=mysqli_query($cn,$sql6);
        $data6=mysqli_fetch_assoc($result6);
    
        $sql7="SELECT count(Correo) as total7 FROM `3.0_Profesores` WHERE $columnab = 'C' AND Programa = '$programa'";
        $result7=mysqli_query($cn,$sql7);
        $data7=mysqli_fetch_assoc($result7);
    
        $sql8="SELECT count(Correo) as total8 FROM `3.0_Profesores` WHERE $columnab = 'D' AND Programa = '$programa'";
        $result8=mysqli_query($cn,$sql8);
        $data8=mysqli_fetch_assoc($result8);
    }
}else{
    if($tamaño == 3){
        $sql="SELECT count($columna) as total FROM `3.0_Profesores`";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `3.0_Profesores` WHERE $columna = '$dt1'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `3.0_Profesores` WHERE $columna = '$dt2'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    }
    if($tamaño == 4){
        $sql="SELECT count($columna) as total FROM `3.0_Profesores`";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `3.0_Profesores` WHERE $columna = '$do1'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `3.0_Profesores` WHERE $columna = '$do2'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `3.0_Profesores` WHERE $columna = '$do3'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    }
    if($tamaño == 5){
        $sql="SELECT count($columna) as total FROM `3.0_Profesores`";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `3.0_Profesores` WHERE $columna = '$d1'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `3.0_Profesores` WHERE $columna = '$d2'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `3.0_Profesores` WHERE $columna = '$d3'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count($columna) as total4 FROM `3.0_Profesores` WHERE $columna = '$d4'";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);
    }
    if($tamaño == 9){
        $sql="SELECT count('Correo') as total FROM `3.0_Profesores` ";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
        
        $sql1="SELECT count(Correo) as total1 FROM `3.0_Profesores` WHERE $columnaa = 'A'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
        
        $sql2="SELECT count(Correo) as total2 FROM `3.0_Profesores` WHERE $columnaa = 'B'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count(Correo) as total3 FROM `3.0_Profesores` WHERE $columnaa = 'C'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count(Correo) as total4 FROM `3.0_Profesores` WHERE $columnaa = 'D'";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);
    
        $sql5="SELECT count(Correo) as total5 FROM `3.0_Profesores` WHERE $columnab = 'A'";
        $result5=mysqli_query($cn,$sql5);
        $data5=mysqli_fetch_assoc($result5);
    
        $sql6="SELECT count(Correo) as total6 FROM `3.0_Profesores` WHERE $columnab = 'B'";
        $result6=mysqli_query($cn,$sql6);
        $data6=mysqli_fetch_assoc($result6);
    
        $sql7="SELECT count(Correo) as total7 FROM `3.0_Profesores` WHERE $columnab = 'C'";
        $result7=mysqli_query($cn,$sql7);
        $data7=mysqli_fetch_assoc($result7);
    
        $sql8="SELECT count(Correo) as total8 FROM `3.0_Profesores` WHERE $columnab = 'D'";
        $result8=mysqli_query($cn,$sql8);
        $data8=mysqli_fetch_assoc($result8);
    }
}
?>