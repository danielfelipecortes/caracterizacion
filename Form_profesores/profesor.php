<!DOCTYPE html>
<html>
	<head>
		<?php include ("../Estructura/head.php")?>
	</head>
	<style>
		body { 
			background-image: url("../Imagenes/fondo5.jpg");
			background-repeat: no-repeat;
			background-position-x:center;
			background-size: cover;
			background-attachment: fixed;
		}
		table {
            border-collapse: collapse;
            text-align: center;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        tr {
            background-color: #ffffff;
        }
        th {
            background-color: #7D3C98;
            color: white;
            text-align: center;
            vertical-align: center;
        }
        td {
            vertical-align: center;
        }
        table th, td{
			border: 1px solid black;
  			border-collapse: collapse;
		}
		.contenedor{
			width: 48.8%;
			height: 50em;
			margin-left: 3.9%;
			padding-top: 15%;
		}
		.carousel-control-prev-icon {
    		width: 30px;
    		height: 30px;
    		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23c593d8' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
		}
		.carousel-control-next-icon{
    		width: 30px;
    		height: 30px;
    		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23c593d8' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
		}
		.carousel-control-prev,
		.carousel-control-next{
      		bottom: 0%;
      		width:2%
		}
	</style>
	<body>  
		<?php include ("../A_conexion.php");?>
		<?php error_reporting (0);?>
		<?php echo ($Correo);?>
		<?php include ("datos.php");?>
		<div class="contenedor">
			<div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<table style="margin: 0 auto;">
							<?php
								$sql="SELECT A.Op1,A.Op2,A.Op3,A.Op4,A.Op5,A.Op6,A.Op7,A.Op8,A.Op9 FROM `3.1_Tecnologica` A  WHERE (A.Correo = '$Correo') ";
								$result=mysqli_query($cn,$sql);
								while($mostrar=mysqli_fetch_array($result)){
							?>
						<tr>
							<th colspan="2">Ubicaci??n de competencia tecnol??gica</th>
						</tr>
						<tr>
							<th>Opcion</th><th>Respuesta</th>
						</tr>
						<tr>
							<td>Identifico las caracter??sticas, usos y oportunidades que ofrecen las herramientas tecnol??gicas y medios audiovisuales, en los procesos educativos.</td><td><?php echo $mostrar['Op1'] ?></td>
						</tr>
						<tr>
							<td>Elaboro actividades de aprendizaje utilizando aplicativos, contenidos, herramientas inform??ticas y medios  audiovisuales.</td><td><?php echo $mostrar['Op2'] ?></td>
						</tr>
						<tr>
							<td>Eval??o la calidad, pertinencia y veracidad de la informaci??n disponible en diversos medios como portales educativos y especializados, motores de b??squeda y material audiovisual.</td><td><?php echo $mostrar['Op3'] ?></td>
						</tr>
						<tr>
							<td>Combino una amplia variedad de herramientas tecnol??gicas, para mejorar la planeaci??n e implementaci??n de mis pr??cticas educativas.</td><td><?php echo $mostrar['Op4'] ?></td>
						</tr>
						<tr>
							<td>Dise??o y publico contenidos digitales u objetos virtuales de aprendizaje mediante el uso adecuado de herramientas tecnol??gicas.</td><td><?php echo $mostrar['Op5'] ?></td>
						</tr>
						<tr>
							<td>Analizo los riesgos y potencialidades de publicar y compartir distintos tipos de informaci??n a trav??s de Internet.</td><td><?php echo $mostrar['Op6'] ?></td>
						</tr>
						<tr>
							<td>Utilizo herramientas tecnol??gicas complejas o especializadas para dise??ar ambientes virtuales o aprendizaje que favorecen el desarrollo de competencias en mis estudiantes y la conformaci??n de comunidades y/o redes de aprendizaje.</td><td><?php echo $mostrar['Op7'] ?></td>
						</tr>
						<tr>
							<td>Utilizo herramientas tecnol??gicas para ayudar a mis estudiantes a construir aprendizajes significativos y desarrollar pensamiento cr??tico.</td><td><?php echo $mostrar['Op8'] ?></td>
						</tr>
						<tr>
							<td>Aplico las normas de propiedad intelectual y licenciamiento existentes, referentes al uso de informaci??n ajena y propia.</td><td><?php echo $mostrar['Op9'] ?></td>
						</tr>
							<?php
								}
							?>
						</table>
					</div>
					<div class="carousel-item">	
					<table style="margin: 0 auto;">
							<?php
								$sql="SELECT A.Op1,A.Op2,A.Op3,A.Op4,A.Op5,A.Op6,A.Op7,A.Op8,A.Op9 FROM `3.2_Pedagogica` A  WHERE (A.Correo = '$Correo') ";
								$result=mysqli_query($cn,$sql);
								while($mostrar=mysqli_fetch_array($result)){
							?>
						<tr>
							<th colspan="2">Ubicaci??n de competencia pedag??gica</th>
						</tr>
						<tr>
							<th>Opcion</th><th>Respuesta</th>
						</tr>
						<tr>
							<td>Utilizo las TIC para aprender por iniciativa personal y para actualizar los conocimientos y pr??cticas propios de mi disciplina.</td><td><?php echo $mostrar['Op1'] ?></td>
						</tr>
						<tr>
							<td>Identifico problem??ticas educativas en mi pr??ctica docente y las oportunidades, implicaciones y riesgos del uso de las TIC para atenderlas.</td><td><?php echo $mostrar['Op2'] ?></td>
						</tr>
						<tr>
							<td>Conozco una variedad de estrategias y metodolog??as apoyadas por las TIC, para planear y hacer seguimiento a mi labor docente.</td><td><?php echo $mostrar['Op3'] ?></td>
						</tr>
						<tr>
							<td>Incentivo en mis estudiantes el aprendizaje aut??nomo y el aprendizaje colaborativo apoyados por TIC.</td><td><?php echo $mostrar['Op4'] ?></td>
						</tr>
						<tr>
							<td>Utilizo TIC con mis estudiantes para atender sus necesidades e intereses y proponer soluciones a problemas de aprendizaje.</td><td><?php echo $mostrar['Op5'] ?></td>
						</tr>
						<tr>
							<td>Implemento estrategias did??cticas mediadas por TIC, para fortalecer en mis estudiantes aprendizajes que le permiten resolver problemas de la vida real.</td><td><?php echo $mostrar['Op6'] ?></td>
						</tr>
						<tr>
							<td>Dise??o ambientes de aprendizaje mediados por TIC de acuerdo con el desarrollo cognitivo, f??sico, psicol??gico y social de mis estudiantes para fomentar el desarrollo de sus competencias.</td><td><?php echo $mostrar['Op7'] ?></td>
						</tr>
						<tr>
							<td>Propongo proyectos educativos mediados con TIC, que permiten la reflexi??n sobre el aprendizaje propio y la producci??n de conocimiento.</td><td><?php echo $mostrar['Op8'] ?></td>
						</tr>
						<tr>
							<td>Eval??o los resultados obtenidos con la implementaci??n de estrategias que hacen uso de las TIC y promuevo una cultura del seguimiento, realimentaci??n y mejoramiento permanente.</td><td><?php echo $mostrar['Op9'] ?></td>
						</tr>
							<?php
								}
							?>
						</table>
					</div>
					<div class="carousel-item">	
					<table style="margin: 0 auto;">
							<?php
								$sql="SELECT A.Op1,A.Op2,A.Op3,A.Op4,A.Op5,A.Op6,A.Op7,A.Op8,A.Op9 FROM `3.3_Comunicativa` A  WHERE (A.Correo = '$Correo') ";
								$result=mysqli_query($cn,$sql);
								while($mostrar=mysqli_fetch_array($result)){
							?>
						<tr>
							<th colspan="2">Ubicaci??n de competencia comunicativa</th>
						</tr>
						<tr>
							<th>Opcion</th><th>Respuesta</th>
						</tr>
						<tr>
							<td>Me comunico adecuadamente con mis estudiantes y familiares, mis colegas e investigadores usando TIC de manera sincr??nica y asincr??nica.</td><td><?php echo $mostrar['Op1'] ?></td>
						</tr>
						<tr>
							<td>Navego eficientemente en internet integrando fragmentos de informaci??n presentados de forma no lineal.</td><td><?php echo $mostrar['Op2'] ?></td>
						</tr>
						<tr>
							<td>Eval??o la pertinencia de compartir informaci??n a trav??s de canales p??blicos y masivos, respetando las normas de propiedad intelectual y licenciamento.</td><td><?php echo $mostrar['Op3'] ?></td>
						</tr>
						<tr>
							<td>Participa activamente en redes y practicas mediadas por TIC y facilito a la participaci??n de mis estudiantes en las mismas, de una forma pertinente y respetuosa.</td><td><?php echo $mostrar['Op4'] ?></td>
						</tr>
						<tr>
							<td>Sistematizo y hago seguimiento a experiencias significativas de uso de TIC.</td><td><?php echo $mostrar['Op5'] ?></td>
						</tr>
						<tr>
							<td>Promuevo en la comunidad educativa comunicaciones efectivas que aportan al mejoramiento de los procesos de convivencia escolar.</td><td><?php echo $mostrar['Op6'] ?></td>
						</tr>
						<tr>
							<td>Utilizo variedad de textos e interfaces para transmitir informaci??n y expresar ideas propias combinando texto, audio, im??genes est??ticas y din??micas, videos y gestos.</td><td><?php echo $mostrar['Op7'] ?></td>
						</tr>
						<tr>
							<td>Interpreto y produzco ??conos, s??mbolos, y otros s??mbolos de representaci??n de la informaci??n, para ser  utilizados con prop??sitos educativos.</td><td><?php echo $mostrar['Op8'] ?></td>
						</tr>
						<tr>
							<td>Contribuyo con mis conocimientos y los de mis estudiantes a repositorios de la humanidad de internet, con textos de diversa naturaleza.</td><td><?php echo $mostrar['Op9'] ?></td>
						</tr>
							<?php
								}
							?>
						</table>
					</div>
					<div class="carousel-item">	
					<table style="margin: 0 auto;">
							<?php
								$sql="SELECT A.Op1,A.Op2,A.Op3,A.Op4,A.Op5,A.Op6,A.Op7,A.Op8,A.Op9 FROM `3.4_Gestion` A  WHERE (A.Correo = '$Correo') ";
								$result=mysqli_query($cn,$sql);
								while($mostrar=mysqli_fetch_array($result)){
							?>
						<tr>
							<th colspan="2">Ubicaci??n de competencia de gesti??n</th>
						</tr>
						<tr>
							<th>Opcion</th><th>Respuesta</th>
						</tr>
						<tr>
							<td>Identifico los elementos de la gesti??n institucional que pueden ser mejorados con el uso de las TIC, en las diferentes actividades institucionales.</td><td><?php echo $mostrar['Op1'] ?></td>
						</tr>
						<tr>
							<td>Conozco pol??ticas institucionales para el uso de las TIC que contemplan la privacidad, en impacto ambiental y la salud de los usuarios.</td><td><?php echo $mostrar['Op2'] ?></td>
						</tr>
						<tr>
							<td>Identifico mis necesidades de desarrollo profesional para la innovaci??n educativa con TIC.</td><td><?php echo $mostrar['Op3'] ?></td>
						</tr>
						<tr>
							<td>Propongo y desarrollo procesos de mejoramiento y seguimiento del uso de TIC en la gesti??n institucional.</td><td><?php echo $mostrar['Op4'] ?></td>
						</tr>
						<tr>
							<td>Adopto pol??ticas institucionales existentes para el uso de las TIC en trabajo que contemplan la privacidad, el impacto ambiental y la salud de los usuarios.</td><td><?php echo $mostrar['Op5'] ?></td>
						</tr>
						<tr>
							<td>Selecciono y accedo a programas de formaci??n, apropiados para mis necesidades de desarrollo profesional, para la innovaci??n educativa con TIC.</td><td><?php echo $mostrar['Op6'] ?></td>
						</tr>
						<tr>
							<td>Eval??o los beneficios y  utilidades de herramientas TIC en la gesti??n institucional y en la proyecci??n del PEI dando respuesta a las necesidades de mi instituci??n.</td><td><?php echo $mostrar['Op7'] ?></td>
						</tr>
						<tr>
							<td>Desarrollo pol??ticas institucionales para el uso de las TIC en mi instituci??n que contemplan la privacidad, el impacto ambiental y la salud de los usuarios.</td><td><?php echo $mostrar['Op8'] ?></td>
						</tr>
						<tr>
							<td>Dinamizo la formaci??n de mis colegas y los apoyo para que integren las TIC de forma innovadora en sus pr??cticas pedag??gicas.</td><td><?php echo $mostrar['Op9'] ?></td>
						</tr>
							<?php
								}
							?>
						</table>
					</div>
					<div class="carousel-item">	
					<table style="margin: 0 auto;">
							<?php
								$sql="SELECT A.Op1,A.Op2,A.Op3,A.Op4,A.Op5,A.Op6,A.Op7,A.Op8,A.Op9 FROM `3.5_Investigativa` A  WHERE (A.Correo = '$Correo') ";
								$result=mysqli_query($cn,$sql);
								while($mostrar=mysqli_fetch_array($result)){
							?>
						<tr>
							<th colspan="2">Ubicaci??n de competencia investigativa</th>
						</tr>
						<tr>
							<th>Opcion</th><th>Respuesta</th>
						</tr>
						<tr>
							<td>Documento observaciones de mi entorno y mi pr??ctica con el apoyo de TIC.</td><td><?php echo $mostrar['Op1'] ?></td>
						</tr>
						<tr>
							<td>Identifico redes, bases de datos y fuentes de informaci??n que facilitan mis procesos de investigaci??n.</td><td><?php echo $mostrar['Op2'] ?></td>
						</tr>
						<tr>
							<td>S?? buscar, ordenar, filtrar, conectar y analizar informaci??n disponible en internet.</td><td><?php echo $mostrar['Op3'] ?></td>
						</tr>
						<tr>
							<td>Represento e interpreto datos e informaci??n de mis investigaciones en diversos formatos digitales.</td><td><?php echo $mostrar['Op4'] ?></td>
						</tr>
						<tr>
							<td>Utilizo redes profesionales y plataformas especializadas en el desarrollo de mis investigaciones.</td><td><?php echo $mostrar['Op5'] ?></td>
						</tr>
						<tr>
							<td>Contrasto y analizo con mis estudiantes informaci??n proveniente de m??ltiples fuentes digitales.</td><td><?php echo $mostrar['Op6'] ?></td>
						</tr>
						<tr>
							<td>Divulgo los resultados de mis investigaciones utilizando las herramientas que ofrecen las TIC.</td><td><?php echo $mostrar['Op7'] ?></td>
						</tr>
						<tr>
							<td>Participo activamente en redes y comunidades de pr??ctica, para la construcci??n colectiva de conocimientos con estudiantes y colegas, con el apoyo de TIC.</td><td><?php echo $mostrar['Op8'] ?></td>
						</tr>
						<tr>
							<td>Utilizo la informaci??n disponible en internet con una actitud cr??tica y reflexiva.</td><td><?php echo $mostrar['Op9'] ?></td>
						</tr>
							<?php
								}
							?>
						</table>
					</div>
				</div>
				<!-- controles derecha-izquierda -->
				<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
					<span class="carousel-control-next-icon"></span>
				</button>
			</div>
		</div>
        <?php mysqli_close($cn); ?>
	</body>
</html> 