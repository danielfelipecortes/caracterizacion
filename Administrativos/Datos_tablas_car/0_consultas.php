<?php 
if($areas == 1){
    if($tamaño == 3){
        $sql="SELECT count($columna) as total FROM `2.0_Administrativos` WHERE Cargo = '$car' AND Programa = '$area'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `2.0_Administrativos` WHERE $columna = '$dt1' AND Cargo = '$car' AND Programa = '$area'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `2.0_Administrativos` WHERE $columna = '$dt2' AND Cargo = '$car' AND Programa = '$area'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    }
    if($tamaño == 4){
        $sql="SELECT count($columna) as total FROM `2.0_Administrativos` WHERE Cargo = '$car' AND Programa = '$area'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `2.0_Administrativos` WHERE $columna = '$do1' AND Cargo = '$car' AND Programa = '$area'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `2.0_Administrativos` WHERE $columna = '$do2' AND Cargo = '$car' AND Programa = '$area'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `2.0_Administrativos` WHERE $columna = '$do3' AND Cargo = '$car' AND Programa = '$area'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    }
    if($tamaño == 5){
        $sql="SELECT count($columna) as total FROM `2.0_Administrativos` WHERE Cargo = '$car' AND Programa = '$area'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `2.0_Administrativos` WHERE $columna = '$d1' AND Cargo = '$car' AND Programa = '$area'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `2.0_Administrativos` WHERE $columna = '$d2' AND Cargo = '$car' AND Programa = '$area'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `2.0_Administrativos` WHERE $columna = '$d3' AND Cargo = '$car' AND Programa = '$area'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count($columna) as total4 FROM `2.0_Administrativos` WHERE $columna = '$d4' AND Cargo = '$car' AND Programa = '$area'";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);
    }
    if($tamaño == 6){
        $sql="SELECT count($columna) as total FROM `2.0_Administrativos` WHERE Cargo = '$car' AND Programa = '$area'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `2.0_Administrativos` WHERE $columna = '$da1' AND Cargo = '$car' AND Programa = '$area'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `2.0_Administrativos` WHERE $columna = '$da2' AND Cargo = '$car' AND Programa = '$area'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `2.0_Administrativos` WHERE $columna = '$da3' AND Cargo = '$car' AND Programa = '$area'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count($columna) as total4 FROM `2.0_Administrativos` WHERE $columna = '$da4' AND Cargo = '$car' AND Programa = '$area'";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);

        $sql5="SELECT count($columna) as total5 FROM `2.0_Administrativos` WHERE $columna = '$da5' AND Cargo = '$car' AND Programa = '$area'";
        $result5=mysqli_query($cn,$sql5);
        $data5=mysqli_fetch_assoc($result5);
    }
    if($tamaño == 7){
        $sql="SELECT count($columna) as total FROM `2.0_Administrativos` WHERE Cargo = '$car' AND Programa = '$area'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `2.0_Administrativos` WHERE $columna = '$dat1' AND Cargo = '$car' AND Programa = '$area'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `2.0_Administrativos` WHERE $columna = '$dat2' AND Cargo = '$car' AND Programa = '$area'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `2.0_Administrativos` WHERE $columna = '$dat3' AND Cargo = '$car' AND Programa = '$area'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count($columna) as total4 FROM `2.0_Administrativos` WHERE $columna = '$dat4' AND Cargo = '$car' AND Programa = '$area'";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);
    
        $sql5="SELECT count($columna) as total5 FROM `2.0_Administrativos` WHERE $columna = '$dat5' AND Cargo = '$car' AND Programa = '$area'";
        $result5=mysqli_query($cn,$sql5);
        $data5=mysqli_fetch_assoc($result5);
    
        $sql6="SELECT count($columna) as total6 FROM `2.0_Administrativos` WHERE $columna = '$dat6' AND Cargo = '$car' AND Programa = '$area'";
        $result6=mysqli_query($cn,$sql6);
        $data6=mysqli_fetch_assoc($result6);
    }
    if($tamaño == 8){
        $sql="SELECT count($columna) as total FROM `2.0_Administrativos` WHERE Cargo = '$car' AND Programa = '$area'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `2.0_Administrativos` WHERE $columna = '$dat01' AND Cargo = '$car' AND Programa = '$area'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `2.0_Administrativos` WHERE $columna = '$dat02' AND Cargo = '$car' AND Programa = '$area'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `2.0_Administrativos` WHERE $columna = '$dat03' AND Cargo = '$car' AND Programa = '$area'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count($columna) as total4 FROM `2.0_Administrativos` WHERE $columna = '$dat04' AND Cargo = '$car' AND Programa = '$area'";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);
    
        $sql5="SELECT count($columna) as total5 FROM `2.0_Administrativos` WHERE $columna = '$dat05' AND Cargo = '$car' AND Programa = '$area'";
        $result5=mysqli_query($cn,$sql5);
        $data5=mysqli_fetch_assoc($result5);
    
        $sql6="SELECT count($columna) as total6 FROM `2.0_Administrativos` WHERE $columna = '$dat06' AND Cargo = '$car' AND Programa = '$area'";
        $result6=mysqli_query($cn,$sql6);
        $data6=mysqli_fetch_assoc($result6);

        $sql7="SELECT count($columna) as total7 FROM `2.0_Administrativos` WHERE $columna = '$dat07' AND Cargo = '$car' AND Programa = '$area'";
        $result7=mysqli_query($cn,$sql7);
        $data7=mysqli_fetch_assoc($result7);

        $sql8="SELECT count($columna) as total8 FROM `2.0_Administrativos` WHERE $columna = '$dat08' AND Cargo = '$car' AND Programa = '$area'";
        $result8=mysqli_query($cn,$sql8);
        $data8=mysqli_fetch_assoc($result8);
    }    
    if($tamaño == 9){
        $sql="SELECT count('Correo') as total FROM `$columna` WHERE Cargo = '$car' AND Programa = '$area'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
        
        $sql1="SELECT count(Correo) as total1 FROM `$columna` WHERE Op1 = 'Si' AND Cargo = '$car' AND Programa = '$area'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
        
        $sql2="SELECT count(Correo) as total2 FROM `$columna` WHERE Op2 = 'Si' AND Cargo = '$car' AND Programa = '$area'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count(Correo) as total3 FROM `$columna` WHERE Op3 = 'Si' AND Cargo = '$car' AND Programa = '$area'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count(Correo) as total4 FROM `$columna` WHERE Op4 = 'Si' AND Cargo = '$car' AND Programa = '$area'";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);
    
        $sql5="SELECT count(Correo) as total5 FROM `$columna` WHERE Op5 = 'Si' AND Cargo = '$car' AND Programa = '$area'";
        $result5=mysqli_query($cn,$sql5);
        $data5=mysqli_fetch_assoc($result5);
    
        $sql6="SELECT count(Correo) as total6 FROM `$columna` WHERE Op6 = 'Si' AND Cargo = '$car' AND Programa = '$area'";
        $result6=mysqli_query($cn,$sql6);
        $data6=mysqli_fetch_assoc($result6);
    
        $sql7="SELECT count(Correo) as total7 FROM `$columna` WHERE Op7 = 'Si' AND Cargo = '$car' AND Programa = '$area'";
        $result7=mysqli_query($cn,$sql7);
        $data7=mysqli_fetch_assoc($result7);
    
        $sql8="SELECT count(Correo) as total8 FROM `$columna` WHERE Op8 = 'Si' AND Cargo = '$car' AND Programa = '$area'";
        $result8=mysqli_query($cn,$sql8);
        $data8=mysqli_fetch_assoc($result8);
    }
}else{
    if($tamaño == 3){
        $sql="SELECT count($columna) as total FROM `2.0_Administrativos` WHERE Cargo = '$car'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `2.0_Administrativos` WHERE $columna = '$dt1' AND Cargo = '$car'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `2.0_Administrativos` WHERE $columna = '$dt2' AND Cargo = '$car'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    }
    if($tamaño == 4){
        $sql="SELECT count($columna) as total FROM `2.0_Administrativos` WHERE Cargo = '$car'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `2.0_Administrativos` WHERE $columna = '$do1' AND Cargo = '$car'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `2.0_Administrativos` WHERE $columna = '$do2' AND Cargo = '$car'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `2.0_Administrativos` WHERE $columna = '$do3' AND Cargo = '$car'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    }
    if($tamaño == 5){
        $sql="SELECT count($columna) as total FROM `2.0_Administrativos` WHERE Cargo = '$car'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `2.0_Administrativos` WHERE $columna = '$d1' AND Cargo = '$car'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `2.0_Administrativos` WHERE $columna = '$d2' AND Cargo = '$car'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `2.0_Administrativos` WHERE $columna = '$d3' AND Cargo = '$car'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count($columna) as total4 FROM `2.0_Administrativos` WHERE $columna = '$d4' AND Cargo = '$car'";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);
    }
    if($tamaño == 6){
        $sql="SELECT count($columna) as total FROM `2.0_Administrativos` WHERE Cargo = '$car'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `2.0_Administrativos` WHERE $columna = '$da1' AND Cargo = '$car'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `2.0_Administrativos` WHERE $columna = '$da2' AND Cargo = '$car'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `2.0_Administrativos` WHERE $columna = '$da3' AND Cargo = '$car'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count($columna) as total4 FROM `2.0_Administrativos` WHERE $columna = '$da4' AND Cargo = '$car'";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);

        $sql5="SELECT count($columna) as total5 FROM `2.0_Administrativos` WHERE $columna = '$da5' AND Cargo = '$car'";
        $result5=mysqli_query($cn,$sql5);
        $data5=mysqli_fetch_assoc($result5);
    }
    if($tamaño == 7){
        $sql="SELECT count($columna) as total FROM `2.0_Administrativos` WHERE Cargo = '$car'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `2.0_Administrativos` WHERE $columna = '$dat1' AND Cargo = '$car'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `2.0_Administrativos` WHERE $columna = '$dat2' AND Cargo = '$car'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `2.0_Administrativos` WHERE $columna = '$dat3' AND Cargo = '$car'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count($columna) as total4 FROM `2.0_Administrativos` WHERE $columna = '$dat4' AND Cargo = '$car'";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);
    
        $sql5="SELECT count($columna) as total5 FROM `2.0_Administrativos` WHERE $columna = '$dat5' AND Cargo = '$car'";
        $result5=mysqli_query($cn,$sql5);
        $data5=mysqli_fetch_assoc($result5);
    
        $sql6="SELECT count($columna) as total6 FROM `2.0_Administrativos` WHERE $columna = '$dat6' AND Cargo = '$car'";
        $result6=mysqli_query($cn,$sql6);
        $data6=mysqli_fetch_assoc($result6);
    }
    if($tamaño == 8){
        $sql="SELECT count($columna) as total FROM `2.0_Administrativos` WHERE Cargo = '$car'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
    
        $sql1="SELECT count($columna) as total1 FROM `2.0_Administrativos` WHERE $columna = '$dat01' AND Cargo = '$car'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
    
        $sql2="SELECT count($columna) as total2 FROM `2.0_Administrativos` WHERE $columna = '$dat02' AND Cargo = '$car'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count($columna) as total3 FROM `2.0_Administrativos` WHERE $columna = '$dat03' AND Cargo = '$car'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count($columna) as total4 FROM `2.0_Administrativos` WHERE $columna = '$dat04' AND Cargo = '$car'";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);
    
        $sql5="SELECT count($columna) as total5 FROM `2.0_Administrativos` WHERE $columna = '$dat05' AND Cargo = '$car'";
        $result5=mysqli_query($cn,$sql5);
        $data5=mysqli_fetch_assoc($result5);
    
        $sql6="SELECT count($columna) as total6 FROM `2.0_Administrativos` WHERE $columna = '$dat06' AND Cargo = '$car'";
        $result6=mysqli_query($cn,$sql6);
        $data6=mysqli_fetch_assoc($result6);

        $sql7="SELECT count($columna) as total7 FROM `2.0_Administrativos` WHERE $columna = '$dat07' AND Cargo = '$car'";
        $result7=mysqli_query($cn,$sql7);
        $data7=mysqli_fetch_assoc($result7);

        $sql8="SELECT count($columna) as total8 FROM `2.0_Administrativos` WHERE $columna = '$dat08' AND Cargo = '$car'";
        $result8=mysqli_query($cn,$sql8);
        $data8=mysqli_fetch_assoc($result8);
    }    
    if($tamaño == 9){
        $sql="SELECT count('Correo') as total FROM `$columna` WHERE Cargo = '$car'";
        $result=mysqli_query($cn,$sql);
        $data=mysqli_fetch_assoc($result);
        
        $sql1="SELECT count(Correo) as total1 FROM `$columna` WHERE Op1 = 'Si' AND Cargo = '$car'";
        $result1=mysqli_query($cn,$sql1);
        $data1=mysqli_fetch_assoc($result1);
        
        $sql2="SELECT count(Correo) as total2 FROM `$columna` WHERE Op2 = 'Si' AND Cargo = '$car'";
        $result2=mysqli_query($cn,$sql2);
        $data2=mysqli_fetch_assoc($result2);
    
        $sql3="SELECT count(Correo) as total3 FROM `$columna` WHERE Op3 = 'Si' AND Cargo = '$car'";
        $result3=mysqli_query($cn,$sql3);
        $data3=mysqli_fetch_assoc($result3);
    
        $sql4="SELECT count(Correo) as total4 FROM `$columna` WHERE Op4 = 'Si' AND Cargo = '$car'";
        $result4=mysqli_query($cn,$sql4);
        $data4=mysqli_fetch_assoc($result4);
    
        $sql5="SELECT count(Correo) as total5 FROM `$columna` WHERE Op5 = 'Si' AND Cargo = '$car'";
        $result5=mysqli_query($cn,$sql5);
        $data5=mysqli_fetch_assoc($result5);
    
        $sql6="SELECT count(Correo) as total6 FROM `$columna` WHERE Op6 = 'Si' AND Cargo = '$car'";
        $result6=mysqli_query($cn,$sql6);
        $data6=mysqli_fetch_assoc($result6);
    
        $sql7="SELECT count(Correo) as total7 FROM `$columna` WHERE Op7 = 'Si' AND Cargo = '$car'";
        $result7=mysqli_query($cn,$sql7);
        $data7=mysqli_fetch_assoc($result7);
    
        $sql8="SELECT count(Correo) as total8 FROM `$columna` WHERE Op8 = 'Si' AND Cargo = '$car'";
        $result8=mysqli_query($cn,$sql8);
        $data8=mysqli_fetch_assoc($result8);
    }
}
?>