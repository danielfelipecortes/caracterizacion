<?php 
if($programas == 1){
    $sql="SELECT count($columna) as total FROM `3.0_Profesores` WHERE Programa = '$programa'";
    $result=mysqli_query($cn,$sql);
    $data=mysqli_fetch_assoc($result);

    $sql1="SELECT count($columna) as total1 FROM `3.0_Profesores` WHERE Programa = 1 AND Programa = '$programa'";
    $result1=mysqli_query($cn,$sql1);
    $data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count($columna) as total2 FROM `3.0_Profesores` WHERE Programa = 2 AND Programa = '$programa'";
    $result2=mysqli_query($cn,$sql2);
    $data2=mysqli_fetch_assoc($result2);
    
    $sql3="SELECT count($columna) as total3 FROM `3.0_Profesores` WHERE Programa = 3 AND Programa = '$programa'";
    $result3=mysqli_query($cn,$sql3);
    $data3=mysqli_fetch_assoc($result3);
    
    $sql4="SELECT count($columna) as total4 FROM `3.0_Profesores` WHERE Programa = 4 AND Programa = '$programa'";
    $result4=mysqli_query($cn,$sql4);
    $data4=mysqli_fetch_assoc($result4);
    
    $sql5="SELECT count($columna) as total5 FROM `3.0_Profesores` WHERE Programa = 5 AND Programa = '$programa'";
    $result5=mysqli_query($cn,$sql5);
    $data5=mysqli_fetch_assoc($result5);
    
    $sql6="SELECT count($columna) as total6 FROM `3.0_Profesores` WHERE Programa = 6 AND Programa = '$programa'";
    $result6=mysqli_query($cn,$sql6);
    $data6=mysqli_fetch_assoc($result6);
    
    $sql7="SELECT count($columna) as total7 FROM `3.0_Profesores` WHERE Programa = 7 AND Programa = '$programa'";
    $result7=mysqli_query($cn,$sql7);
    $data7=mysqli_fetch_assoc($result7);
    
    $sql8="SELECT count($columna) as total8 FROM `3.0_Profesores` WHERE Programa = 8 AND Programa = '$programa'";
    $result8=mysqli_query($cn,$sql8);
    $data8=mysqli_fetch_assoc($result8);
    
    $sql9="SELECT count($columna) as total9 FROM `3.0_Profesores` WHERE Programa = 9 AND Programa = '$programa'";
    $result9=mysqli_query($cn,$sql9);
    $data9=mysqli_fetch_assoc($result9);
     
    $sql10="SELECT count($columna) as total10 FROM `3.0_Profesores` WHERE Programa = 10 AND Programa = '$programa'";
    $result10=mysqli_query($cn,$sql10);
    $data10=mysqli_fetch_assoc($result10);
    
    $sql11="SELECT count($columna) as total11 FROM `3.0_Profesores` WHERE Programa = 11 AND Programa = '$programa'";
    $result11=mysqli_query($cn,$sql11);
    $data11=mysqli_fetch_assoc($result11);
    
    $sql12="SELECT count($columna) as total12 FROM `3.0_Profesores` WHERE Programa = 12 AND Programa = '$programa'";
    $result12=mysqli_query($cn,$sql12);
    $data12=mysqli_fetch_assoc($result12);
    
    $sql13="SELECT count($columna) as total13 FROM `3.0_Profesores` WHERE Programa = 13 AND Programa = '$programa'";
    $result13=mysqli_query($cn,$sql13);
    $data13=mysqli_fetch_assoc($result13);
    
    $sql14="SELECT count($columna) as total14 FROM `3.0_Profesores` WHERE Programa = 14 AND Programa = '$programa'";
    $result14=mysqli_query($cn,$sql14);
    $data14=mysqli_fetch_assoc($result14);
    
    $sql15="SELECT count($columna) as total15 FROM `3.0_Profesores` WHERE Programa = 15 AND Programa = '$programa'";
    $result15=mysqli_query($cn,$sql15);
    $data15=mysqli_fetch_assoc($result15);
    
    $sql16="SELECT count($columna) as total16 FROM `3.0_Profesores` WHERE Programa = 16 AND Programa = '$programa'";
    $result16=mysqli_query($cn,$sql16);
    $data16=mysqli_fetch_assoc($result16);
    
    $sql17="SELECT count($columna) as total17 FROM `3.0_Profesores` WHERE Programa = 17 AND Programa = '$programa'";
    $result17=mysqli_query($cn,$sql17);
    $data17=mysqli_fetch_assoc($result17);
    
    $sql18="SELECT count($columna) as total18 FROM `3.0_Profesores` WHERE Programa = 18 AND Programa = '$programa'";
    $result18=mysqli_query($cn,$sql18);
    $data18=mysqli_fetch_assoc($result18);
    
    $sql19="SELECT count($columna) as total19 FROM `3.0_Profesores` WHERE Programa = 19 AND Programa = '$programa'";
    $result19=mysqli_query($cn,$sql19);
    $data19=mysqli_fetch_assoc($result19);

    $sql20="SELECT count($columna) as total20 FROM `3.0_Profesores` WHERE Programa = 20 AND Programa = '$programa'";
    $result20=mysqli_query($cn,$sql20);
    $data20=mysqli_fetch_assoc($result20);

    $sql21="SELECT count($columna) as total21 FROM `3.0_Profesores` WHERE Programa = 21 AND Programa = '$programa'";
    $result21=mysqli_query($cn,$sql21);
    $data21=mysqli_fetch_assoc($result21);

    $sql22="SELECT count($columna) as total22  FROM `3.0_Profesores` WHERE Programa = 22 AND Programa = '$programa'";
    $result22=mysqli_query($cn,$sql22);
    $data22=mysqli_fetch_assoc($result22);

    $sql23="SELECT count($columna) as total23 FROM `3.0_Profesores` WHERE Programa = 23 AND Programa = '$programa'";
    $result23=mysqli_query($cn,$sql23);
    $data23=mysqli_fetch_assoc($result23);

    $sql24="SELECT count($columna) as total24 FROM `3.0_Profesores` WHERE Programa = 24 AND Programa = '$programa'";
    $result24=mysqli_query($cn,$sql24);
    $data24=mysqli_fetch_assoc($result24);

    $sql25="SELECT count($columna) as total25 FROM `3.0_Profesores` WHERE Programa = 25 AND Programa = '$programa'";
    $result25=mysqli_query($cn,$sql25);
    $data25=mysqli_fetch_assoc($result25);

    $sql26="SELECT count($columna) as total26 FROM `3.0_Profesores` WHERE Programa = 26 AND Programa = '$programa'";
    $result26=mysqli_query($cn,$sql26);
    $data26=mysqli_fetch_assoc($result26);

    $sql27="SELECT count($columna) as total27 FROM `3.0_Profesores` WHERE Programa = 27 AND Programa = '$programa'";
    $result27=mysqli_query($cn,$sql27);
    $data27=mysqli_fetch_assoc($result27);

    $sql28="SELECT count($columna) as total28 FROM `3.0_Profesores` WHERE Programa = 28 AND Programa = '$programa'";
    $result28=mysqli_query($cn,$sql28);
    $data28=mysqli_fetch_assoc($result28);
    
    $sql29="SELECT count($columna) as total29 FROM `3.0_Profesores` WHERE Programa = 29 AND Programa = '$programa'";
    $result29=mysqli_query($cn,$sql29);
    $data29=mysqli_fetch_assoc($result29);
    
    $sql30="SELECT count($columna) as total30 FROM `3.0_Profesores` WHERE Programa = 30 AND Programa = '$programa'";
    $result30=mysqli_query($cn,$sql30);
    $data30=mysqli_fetch_assoc($result30);
    
    $sql31="SELECT count($columna) as total31  FROM `3.0_Profesores` WHERE Programa = 31 AND Programa = '$programa'";
    $result31=mysqli_query($cn,$sql31);
    $data31=mysqli_fetch_assoc($result31);
    
    $sql32="SELECT count($columna) as total32 FROM `3.0_Profesores` WHERE Programa = 32 AND Programa = '$programa'";
    $result32=mysqli_query($cn,$sql32);
    $data32=mysqli_fetch_assoc($result32);
    
    $sql33="SELECT count($columna) as total33 FROM `3.0_Profesores` WHERE Programa = 33 AND Programa = '$programa'";
    $result33=mysqli_query($cn,$sql33);
    $data33=mysqli_fetch_assoc($result33);
    
    $sql34="SELECT count($columna) as total34 FROM `3.0_Profesores` WHERE Programa = 34 AND Programa = '$programa'";
    $result34=mysqli_query($cn,$sql34);
    $data34=mysqli_fetch_assoc($result34);
    
    $sql35="SELECT count($columna) as total35 FROM `3.0_Profesores` WHERE Programa = 35 AND Programa = '$programa'";
    $result35=mysqli_query($cn,$sql35);
    $data35=mysqli_fetch_assoc($result35);
    
    $sql36="SELECT count($columna) as total36 FROM `3.0_Profesores` WHERE Programa = 36 AND Programa = '$programa'";
    $result36=mysqli_query($cn,$sql36);
    $data36=mysqli_fetch_assoc($result36);

    $sql37="SELECT count($columna) as total37 FROM `3.0_Profesores` WHERE Programa = 37 AND Programa = '$programa'";
    $result37=mysqli_query($cn,$sql37);
    $data37=mysqli_fetch_assoc($result37);
    
    $sql38="SELECT count($columna) as total38 FROM `3.0_Profesores` WHERE Programa = 38 AND Programa = '$programa'";
    $result38=mysqli_query($cn,$sql38);
    $data38=mysqli_fetch_assoc($result38);
    
    $sql39="SELECT count($columna) as total39 FROM `3.0_Profesores` WHERE Programa = 39 AND Programa = '$programa'";
    $result39=mysqli_query($cn,$sql39);
    $data39=mysqli_fetch_assoc($result39);
    
    $sql40="SELECT count($columna) as total40 FROM `3.0_Profesores` WHERE Programa = 40 AND Programa = '$programa'";
    $result40=mysqli_query($cn,$sql40);
    $data40=mysqli_fetch_assoc($result40);
    
    $sql41="SELECT count($columna) as total41 FROM `3.0_Profesores` WHERE Programa = 41 AND Programa = '$programa'";
    $result41=mysqli_query($cn,$sql41);
    $data41=mysqli_fetch_assoc($result41);
    
    $sql42="SELECT count($columna) as total42 FROM `3.0_Profesores` WHERE Programa = 42 AND Programa = '$programa'";
    $result42=mysqli_query($cn,$sql42);
    $data42=mysqli_fetch_assoc($result42);
    
    $sql43="SELECT count($columna) as total43 FROM `3.0_Profesores` WHERE Programa = 43 AND Programa = '$programa'";
    $result43=mysqli_query($cn,$sql43);
    $data43=mysqli_fetch_assoc($result43);
}else{
    $sql="SELECT count($columna) as total FROM `3.0_Profesores`";
    $result=mysqli_query($cn,$sql);
    $data=mysqli_fetch_assoc($result);

    $sql1="SELECT count($columna) as total1 FROM `3.0_Profesores` WHERE Programa = 1";
    $result1=mysqli_query($cn,$sql1);
    $data1=mysqli_fetch_assoc($result1);

    $sql2="SELECT count($columna) as total2 FROM `3.0_Profesores` WHERE Programa = 2";
    $result2=mysqli_query($cn,$sql2);
    $data2=mysqli_fetch_assoc($result2);
    
    $sql3="SELECT count($columna) as total3 FROM `3.0_Profesores` WHERE Programa = 3";
    $result3=mysqli_query($cn,$sql3);
    $data3=mysqli_fetch_assoc($result3);
    
    $sql4="SELECT count($columna) as total4 FROM `3.0_Profesores` WHERE Programa = 4";
    $result4=mysqli_query($cn,$sql4);
    $data4=mysqli_fetch_assoc($result4);
    
    $sql5="SELECT count($columna) as total5 FROM `3.0_Profesores` WHERE Programa = 5";
    $result5=mysqli_query($cn,$sql5);
    $data5=mysqli_fetch_assoc($result5);
    
    $sql6="SELECT count($columna) as total6 FROM `3.0_Profesores` WHERE Programa = 6";
    $result6=mysqli_query($cn,$sql6);
    $data6=mysqli_fetch_assoc($result6);
    
    $sql7="SELECT count($columna) as total7 FROM `3.0_Profesores` WHERE Programa = 7";
    $result7=mysqli_query($cn,$sql7);
    $data7=mysqli_fetch_assoc($result7);
    
    $sql8="SELECT count($columna) as total8 FROM `3.0_Profesores` WHERE Programa = 8";
    $result8=mysqli_query($cn,$sql8);
    $data8=mysqli_fetch_assoc($result8);
    
    $sql9="SELECT count($columna) as total9 FROM `3.0_Profesores` WHERE Programa = 9";
    $result9=mysqli_query($cn,$sql9);
    $data9=mysqli_fetch_assoc($result9);
     
    $sql10="SELECT count($columna) as total10 FROM `3.0_Profesores` WHERE Programa = 10";
    $result10=mysqli_query($cn,$sql10);
    $data10=mysqli_fetch_assoc($result10);
    
    $sql11="SELECT count($columna) as total11 FROM `3.0_Profesores` WHERE Programa = 11";
    $result11=mysqli_query($cn,$sql11);
    $data11=mysqli_fetch_assoc($result11);
    
    $sql12="SELECT count($columna) as total12 FROM `3.0_Profesores` WHERE Programa = 12";
    $result12=mysqli_query($cn,$sql12);
    $data12=mysqli_fetch_assoc($result12);
    
    $sql13="SELECT count($columna) as total13 FROM `3.0_Profesores` WHERE Programa = 13";
    $result13=mysqli_query($cn,$sql13);
    $data13=mysqli_fetch_assoc($result13);
    
    $sql14="SELECT count($columna) as total14 FROM `3.0_Profesores` WHERE Programa = 14";
    $result14=mysqli_query($cn,$sql14);
    $data14=mysqli_fetch_assoc($result14);
    
    $sql15="SELECT count($columna) as total15 FROM `3.0_Profesores` WHERE Programa = 15";
    $result15=mysqli_query($cn,$sql15);
    $data15=mysqli_fetch_assoc($result15);
    
    $sql16="SELECT count($columna) as total16 FROM `3.0_Profesores` WHERE Programa = 16";
    $result16=mysqli_query($cn,$sql16);
    $data16=mysqli_fetch_assoc($result16);
    
    $sql17="SELECT count($columna) as total17 FROM `3.0_Profesores` WHERE Programa = 17";
    $result17=mysqli_query($cn,$sql17);
    $data17=mysqli_fetch_assoc($result17);
    
    $sql18="SELECT count($columna) as total18 FROM `3.0_Profesores` WHERE Programa = 18";
    $result18=mysqli_query($cn,$sql18);
    $data18=mysqli_fetch_assoc($result18);
    
    $sql19="SELECT count($columna) as total19 FROM `3.0_Profesores` WHERE Programa = 19";
    $result19=mysqli_query($cn,$sql19);
    $data19=mysqli_fetch_assoc($result19);

    $sql20="SELECT count($columna) as total20 FROM `3.0_Profesores` WHERE Programa = 20";
    $result20=mysqli_query($cn,$sql20);
    $data20=mysqli_fetch_assoc($result20);

    $sql21="SELECT count($columna) as total21 FROM `3.0_Profesores` WHERE Programa = 21";
    $result21=mysqli_query($cn,$sql21);
    $data21=mysqli_fetch_assoc($result21);

    $sql22="SELECT count($columna) as total22  FROM `3.0_Profesores` WHERE Programa = 22";
    $result22=mysqli_query($cn,$sql22);
    $data22=mysqli_fetch_assoc($result22);

    $sql23="SELECT count($columna) as total23 FROM `3.0_Profesores` WHERE Programa = 23";
    $result23=mysqli_query($cn,$sql23);
    $data23=mysqli_fetch_assoc($result23);

    $sql24="SELECT count($columna) as total24 FROM `3.0_Profesores` WHERE Programa = 24";
    $result24=mysqli_query($cn,$sql24);
    $data24=mysqli_fetch_assoc($result24);

    $sql25="SELECT count($columna) as total25 FROM `3.0_Profesores` WHERE Programa = 25";
    $result25=mysqli_query($cn,$sql25);
    $data25=mysqli_fetch_assoc($result25);

    $sql26="SELECT count($columna) as total26 FROM `3.0_Profesores` WHERE Programa = 26";
    $result26=mysqli_query($cn,$sql26);
    $data26=mysqli_fetch_assoc($result26);

    $sql27="SELECT count($columna) as total27 FROM `3.0_Profesores` WHERE Programa = 27";
    $result27=mysqli_query($cn,$sql27);
    $data27=mysqli_fetch_assoc($result27);

    $sql28="SELECT count($columna) as total28 FROM `3.0_Profesores` WHERE Programa = 28";
    $result28=mysqli_query($cn,$sql28);
    $data28=mysqli_fetch_assoc($result28);
    
    $sql29="SELECT count($columna) as total29 FROM `3.0_Profesores` WHERE Programa = 29";
    $result29=mysqli_query($cn,$sql29);
    $data29=mysqli_fetch_assoc($result29);
    
    $sql30="SELECT count($columna) as total30 FROM `3.0_Profesores` WHERE Programa = 30";
    $result30=mysqli_query($cn,$sql30);
    $data30=mysqli_fetch_assoc($result30);
    
    $sql31="SELECT count($columna) as total31  FROM `3.0_Profesores` WHERE Programa = 31";
    $result31=mysqli_query($cn,$sql31);
    $data31=mysqli_fetch_assoc($result31);
    
    $sql32="SELECT count($columna) as total32 FROM `3.0_Profesores` WHERE Programa = 32";
    $result32=mysqli_query($cn,$sql32);
    $data32=mysqli_fetch_assoc($result32);
    
    $sql33="SELECT count($columna) as total33 FROM `3.0_Profesores` WHERE Programa = 33";
    $result33=mysqli_query($cn,$sql33);
    $data33=mysqli_fetch_assoc($result33);
    
    $sql34="SELECT count($columna) as total34 FROM `3.0_Profesores` WHERE Programa = 34";
    $result34=mysqli_query($cn,$sql34);
    $data34=mysqli_fetch_assoc($result34);
    
    $sql35="SELECT count($columna) as total35 FROM `3.0_Profesores` WHERE Programa = 35";
    $result35=mysqli_query($cn,$sql35);
    $data35=mysqli_fetch_assoc($result35);
    
    $sql36="SELECT count($columna) as total36 FROM `3.0_Profesores` WHERE Programa = 36";
    $result36=mysqli_query($cn,$sql36);
    $data36=mysqli_fetch_assoc($result36);

    $sql37="SELECT count($columna) as total37 FROM `3.0_Profesores` WHERE Programa = 37";
    $result37=mysqli_query($cn,$sql37);
    $data37=mysqli_fetch_assoc($result37);
    
    $sql38="SELECT count($columna) as total38 FROM `3.0_Profesores` WHERE Programa = 38";
    $result38=mysqli_query($cn,$sql38);
    $data38=mysqli_fetch_assoc($result38);
    
    $sql39="SELECT count($columna) as total39 FROM `3.0_Profesores` WHERE Programa = 39";
    $result39=mysqli_query($cn,$sql39);
    $data39=mysqli_fetch_assoc($result39);
    
    $sql40="SELECT count($columna) as total40 FROM `3.0_Profesores` WHERE Programa = 40";
    $result40=mysqli_query($cn,$sql40);
    $data40=mysqli_fetch_assoc($result40);
    
    $sql41="SELECT count($columna) as total41 FROM `3.0_Profesores` WHERE Programa = 41";
    $result41=mysqli_query($cn,$sql41);
    $data41=mysqli_fetch_assoc($result41);
    
    $sql42="SELECT count($columna) as total42 FROM `3.0_Profesores` WHERE Programa = 42";
    $result42=mysqli_query($cn,$sql42);
    $data42=mysqli_fetch_assoc($result42);
    
    $sql43="SELECT count($columna) as total43 FROM `3.0_Profesores` WHERE Programa = 43";
    $result43=mysqli_query($cn,$sql43);
    $data43=mysqli_fetch_assoc($result43);
}
?>