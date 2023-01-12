<?php
	$sql25="SELECT sum(Pre4) as total25 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = 35";
	$result25=mysqli_query($cn,$sql25);
	$data25=mysqli_fetch_assoc($result25); 

	$sql26="SELECT sum(Pre6) as total26 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = 35";
	$result26=mysqli_query($cn,$sql26);
	$data26=mysqli_fetch_assoc($result26);

	$sql27="SELECT sum(Pre7) as total27 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = 35";
	$result27=mysqli_query($cn,$sql27);
	$data27=mysqli_fetch_assoc($result27);

	$sql28="SELECT sum(Pre8) as total28 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = 35";
	$result28=mysqli_query($cn,$sql28);
	$data28=mysqli_fetch_assoc($result28); 

	$sql29="SELECT sum(Pre14) as total29 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = 35";
	$result29=mysqli_query($cn,$sql29);
	$data29=mysqli_fetch_assoc($result29); 

	$sql30="SELECT sum(Pre18) as total30 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = 35";
	$result30=mysqli_query($cn,$sql30);
	$data30=mysqli_fetch_assoc($result30);

	$sql31="SELECT sum(Pre21) as total31 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = 35";
	$result31=mysqli_query($cn,$sql31);
	$data31=mysqli_fetch_assoc($result31);

	$sql32="SELECT sum(Pre25) as total32 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = 35";
	$result32=mysqli_query($cn,$sql32);
	$data32=mysqli_fetch_assoc($result32);

	$sql33="SELECT sum(Pre30) as total33 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = 35";
	$result33=mysqli_query($cn,$sql33);
	$data33=mysqli_fetch_assoc($result33); 

	$sql34="SELECT sum(Pre31) as total34 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = 35";
	$result34=mysqli_query($cn,$sql34);
	$data34=mysqli_fetch_assoc($result34); 

	$sql35="SELECT sum(Pre34) as total35 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = 35";
	$result35=mysqli_query($cn,$sql35);
	$data35=mysqli_fetch_assoc($result35);
	
	$sql36="SELECT sum(Pre35) as total36 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 4 AND A.Programa = 35";
	$result36=mysqli_query($cn,$sql36);
	$data36=mysqli_fetch_assoc($result36);         
?> 