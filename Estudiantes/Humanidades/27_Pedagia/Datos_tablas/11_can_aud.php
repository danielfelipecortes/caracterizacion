<?php
	$sql13="SELECT sum(Pre2) as total13 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND A.Programa = 27";
	$result13=mysqli_query($cn,$sql13);
	$data13=mysqli_fetch_assoc($result13); 

	$sql14="SELECT sum(Pre3) as total14 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND A.Programa = 27";
	$result14=mysqli_query($cn,$sql14);
	$data14=mysqli_fetch_assoc($result14);

	$sql15="SELECT sum(Pre12) as total15 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND A.Programa = 27";
	$result15=mysqli_query($cn,$sql15);
	$data15=mysqli_fetch_assoc($result15);

	$sql16="SELECT sum(Pre13) as total16 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND A.Programa = 27";
	$result16=mysqli_query($cn,$sql16);
	$data16=mysqli_fetch_assoc($result16); 

	$sql17="SELECT sum(Pre15) as total17 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND A.Programa = 27";
	$result17=mysqli_query($cn,$sql17);
	$data17=mysqli_fetch_assoc($result17); 

	$sql18="SELECT sum(Pre19) as total18 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND A.Programa = 27";
	$result18=mysqli_query($cn,$sql18);
	$data18=mysqli_fetch_assoc($result18); 

	$sql19="SELECT sum(Pre20) as total19 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND A.Programa = 27";
	$result19=mysqli_query($cn,$sql19);
	$data19=mysqli_fetch_assoc($result19);

	$sql20="SELECT sum(Pre23) as total20 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND A.Programa = 27";
	$result20=mysqli_query($cn,$sql20);
	$data20=mysqli_fetch_assoc($result20);

	$sql21="SELECT sum(Pre24) as total21 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND A.Programa = 27";
	$result21=mysqli_query($cn,$sql21);
	$data21=mysqli_fetch_assoc($result21); 

	$sql22="SELECT sum(Pre28) as total22 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND A.Programa = 27";
	$result22=mysqli_query($cn,$sql22);
	$data22=mysqli_fetch_assoc($result22); 

	$sql23="SELECT sum(Pre29) as total23 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND A.Programa = 27";
	$result23=mysqli_query($cn,$sql23);
	$data23=mysqli_fetch_assoc($result23);
	
	$sql24="SELECT sum(Pre33) as total24 FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID INNER JOIN `0_Facultades` E ON C.Facultad = E.ID WHERE E.ID = 3 AND A.Programa = 27";
	$result24=mysqli_query($cn,$sql24);
	$data24=mysqli_fetch_assoc($result24);         
?> 