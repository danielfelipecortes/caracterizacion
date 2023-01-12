<?php
if($programa = 35){
	$sql1="SELECT sum(Pre1) as total1 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1);

	$sql2="SELECT sum(Pre5) as total2 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result2=mysqli_query($cn,$sql2);
	$data2=mysqli_fetch_assoc($result2);

	$sql3="SELECT sum(Pre9) as total3 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

	$sql4="SELECT sum(Pre10) as total4 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result4=mysqli_query($cn,$sql4);
	$data4=mysqli_fetch_assoc($result4);

	$sql5="SELECT sum(Pre11) as total5 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result5=mysqli_query($cn,$sql5);
	$data5=mysqli_fetch_assoc($result5); 

	$sql6="SELECT sum(Pre16) as total6 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result6=mysqli_query($cn,$sql6);
	$data6=mysqli_fetch_assoc($result6); 

	$sql7="SELECT sum(Pre17) as total7 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result7=mysqli_query($cn,$sql7);
	$data7=mysqli_fetch_assoc($result7);

	$sql8="SELECT sum(Pre22) as total8 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result8=mysqli_query($cn,$sql8);
	$data8=mysqli_fetch_assoc($result8);

	$sql9="SELECT sum(Pre26) as total9 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result9=mysqli_query($cn,$sql9);
	$data9=mysqli_fetch_assoc($result9); 

	$sql10="SELECT sum(Pre27) as total10 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result10=mysqli_query($cn,$sql10);
	$data10=mysqli_fetch_assoc($result10); 

	$sql11="SELECT sum(Pre32) as total11 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result11=mysqli_query($cn,$sql11);
	$data11=mysqli_fetch_assoc($result11);
	
	$sql12="SELECT sum(Pre36) as total12 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result12=mysqli_query($cn,$sql12);
	$data12=mysqli_fetch_assoc($result12);    
}
if($programa = 36){
	$sql1="SELECT sum(Pre1) as total1 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1);

	$sql2="SELECT sum(Pre5) as total2 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result2=mysqli_query($cn,$sql2);
	$data2=mysqli_fetch_assoc($result2);

	$sql3="SELECT sum(Pre9) as total3 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

	$sql4="SELECT sum(Pre10) as total4 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result4=mysqli_query($cn,$sql4);
	$data4=mysqli_fetch_assoc($result4);

	$sql5="SELECT sum(Pre11) as total5 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result5=mysqli_query($cn,$sql5);
	$data5=mysqli_fetch_assoc($result5); 

	$sql6="SELECT sum(Pre16) as total6 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result6=mysqli_query($cn,$sql6);
	$data6=mysqli_fetch_assoc($result6); 

	$sql7="SELECT sum(Pre17) as total7 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result7=mysqli_query($cn,$sql7);
	$data7=mysqli_fetch_assoc($result7);

	$sql8="SELECT sum(Pre22) as total8 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result8=mysqli_query($cn,$sql8);
	$data8=mysqli_fetch_assoc($result8);

	$sql9="SELECT sum(Pre26) as total9 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result9=mysqli_query($cn,$sql9);
	$data9=mysqli_fetch_assoc($result9); 

	$sql10="SELECT sum(Pre27) as total10 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result10=mysqli_query($cn,$sql10);
	$data10=mysqli_fetch_assoc($result10); 

	$sql11="SELECT sum(Pre32) as total11 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result11=mysqli_query($cn,$sql11);
	$data11=mysqli_fetch_assoc($result11);
	
	$sql12="SELECT sum(Pre36) as total12 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result12=mysqli_query($cn,$sql12);
	$data12=mysqli_fetch_assoc($result12);    
}
if($programa = 37){
	$sql1="SELECT sum(Pre1) as total1 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1);

	$sql2="SELECT sum(Pre5) as total2 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result2=mysqli_query($cn,$sql2);
	$data2=mysqli_fetch_assoc($result2);

	$sql3="SELECT sum(Pre9) as total3 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

	$sql4="SELECT sum(Pre10) as total4 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result4=mysqli_query($cn,$sql4);
	$data4=mysqli_fetch_assoc($result4);

	$sql5="SELECT sum(Pre11) as total5 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result5=mysqli_query($cn,$sql5);
	$data5=mysqli_fetch_assoc($result5); 

	$sql6="SELECT sum(Pre16) as total6 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result6=mysqli_query($cn,$sql6);
	$data6=mysqli_fetch_assoc($result6); 

	$sql7="SELECT sum(Pre17) as total7 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result7=mysqli_query($cn,$sql7);
	$data7=mysqli_fetch_assoc($result7);

	$sql8="SELECT sum(Pre22) as total8 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result8=mysqli_query($cn,$sql8);
	$data8=mysqli_fetch_assoc($result8);

	$sql9="SELECT sum(Pre26) as total9 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result9=mysqli_query($cn,$sql9);
	$data9=mysqli_fetch_assoc($result9); 

	$sql10="SELECT sum(Pre27) as total10 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result10=mysqli_query($cn,$sql10);
	$data10=mysqli_fetch_assoc($result10); 

	$sql11="SELECT sum(Pre32) as total11 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result11=mysqli_query($cn,$sql11);
	$data11=mysqli_fetch_assoc($result11);
	
	$sql12="SELECT sum(Pre36) as total12 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = '$programa'";
	$result12=mysqli_query($cn,$sql12);
	$data12=mysqli_fetch_assoc($result12);    
}
	$sql1="SELECT sum(Pre1) as total1 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 ";
	$result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1);

	$sql2="SELECT sum(Pre5) as total2 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 ";
	$result2=mysqli_query($cn,$sql2);
	$data2=mysqli_fetch_assoc($result2);

	$sql3="SELECT sum(Pre9) as total3 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 ";
	$result3=mysqli_query($cn,$sql3);
	$data3=mysqli_fetch_assoc($result3);

	$sql4="SELECT sum(Pre10) as total4 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 ";
	$result4=mysqli_query($cn,$sql4);
	$data4=mysqli_fetch_assoc($result4);

	$sql5="SELECT sum(Pre11) as total5 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 ";
	$result5=mysqli_query($cn,$sql5);
	$data5=mysqli_fetch_assoc($result5); 

	$sql6="SELECT sum(Pre16) as total6 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 ";
	$result6=mysqli_query($cn,$sql6);
	$data6=mysqli_fetch_assoc($result6); 

	$sql7="SELECT sum(Pre17) as total7 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 ";
	$result7=mysqli_query($cn,$sql7);
	$data7=mysqli_fetch_assoc($result7);

	$sql8="SELECT sum(Pre22) as total8 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 ";
	$result8=mysqli_query($cn,$sql8);
	$data8=mysqli_fetch_assoc($result8);

	$sql9="SELECT sum(Pre26) as total9 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 ";
	$result9=mysqli_query($cn,$sql9);
	$data9=mysqli_fetch_assoc($result9); 

	$sql10="SELECT sum(Pre27) as total10 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 ";
	$result10=mysqli_query($cn,$sql10);
	$data10=mysqli_fetch_assoc($result10); 

	$sql11="SELECT sum(Pre32) as total11 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 ";
	$result11=mysqli_query($cn,$sql11);
	$data11=mysqli_fetch_assoc($result11);
	
	$sql12="SELECT sum(Pre36) as total12 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 ";
	$result12=mysqli_query($cn,$sql12);
	$data12=mysqli_fetch_assoc($result12);         
?>