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
						<!--inicio tabla canal visual-->
						<table style="margin: 0 auto;">
							<tr>
								<th>Visual</th><th>Valores</th>
							</tr>
							<tr>
								<td>Puedo recordar algo mejor si lo escribo</td>
								<td><?php echo $data1['total1'];?></td>
							</tr>
							<tr>
								<td>Puedo visualizar imágenes en mi cabeza</td>
								<td><?php echo $data2['total2'];?></td>
							</tr>
							<tr>
								<td>Tomo muchas notas de lo que leo y escucho</td>
								<td><?php echo $data3['total3'];?></td>
							</tr>
							<tr>
								<td>Me ayuda MIRAR a la persona que está hablando. Me mantiene enfocado</td>
								<td><?php echo $data4['total4'];?></td>
							</tr>
							<tr>
								<td>se me hace difícil entender lo que una persona está diciendo si hay ruidos alrededor</td>
								<td><?php echo $data5['total5'];?></td>
							</tr>
							<tr>
								<td>Es más fácil para mí hacer un trabajo en un lugar tranquilo</td>
								<td><?php echo $data6['total6'];?></td>
							</tr>
							<tr>
								<td>Me resulta fácil entender mapas, tablas y gráficos</td>
								<td><?php echo $data7['total7'];?></td>
							</tr>
							<tr>
								<td>Cuando estoy concentrado leyendo o escribiendo, la radio me molesta</td>
								<td><?php echo $data8['total8'];?></td>
							</tr>
							<tr>
								<td>Cuando estoy en un examen, puedo “ver” la página en el libro de textos y la respuesta</td>
								<td><?php echo $data9['total9'];?></td>
							</tr>
							<tr>
								<td>No puedo recordar una broma lo suficiente para contarla luego</td>
								<td><?php echo $data10['total10'];?></td>
							</tr>
							<tr>
								<td>Cuando estoy tratando de recordar algo nuevo, por ejemplo, un número de telefóno, me ayuda formarme una imagen mental para lograrlo</td>
								<td><?php echo $data11['total11'];?></td>
							</tr>
							<tr>
								<td>Cuando tengo una gran idea, debo escribirla inmediatamente, o la olvido con facilidad</td>
								<td><?php echo $data12['total12'];?></td>
							</tr>
							<tr>
								<td>Total</td>
								<td>
									<?php 
										$vis = $data1['total1']+
										$data2['total2']+
										$data3['total3']+
										$data4['total4']+
										$data5['total5']+
										$data6['total6']+
										$data7['total7']+
										$data8['total8']+
										$data9['total9']+
										$data10['total10']+
										$data11['total11']+
										$data12['total12'];
										echo ($vis);
									?>
								</td>
							</tr>
						</table>
						<!--fin tabla canal visual-->
					</div>
                    <div class="carousel-item">
						<!--inicio tabla canal auditivo-->
						<table style="margin: 0 auto;">
							<tr>
								<th>Auditivos</th><th>Valores</th>
							</tr> 
							<tr>
								<td>Al leer, oigo las palabras en mi cabeza o leo en voz alta.</td>
								<td><?php echo $data13['total13'];?></td>
							</tr>
							<tr>
								<td>Necesito hablar las cosas para entenderlas mejor.</td>
								<td><?php echo $data14['total14'];?></td>
							</tr>
							<tr>
								<td>se me hace difícil entender lo que una persona está diciendo si hay ruidos alrededor.</td>
								<td><?php echo $data15['total15'];?></td>
							</tr>
							<tr>
								<td>Prefiero escuchar una conferencia o una grabación a leer un libro.</td>
								<td><?php echo $data16['total16'];?></td>
							</tr>
							<tr>
								<td>Puedo seguir fácilmente a una persona que está hablando aunque mi cabeza esté hacia abajo o me encuentre mirando por la ventana.</td>
								<td><?php echo $data17['total17'];?></td>
							</tr>
							<tr>
								<td>Recuerdo mejor lo que la gente dice que su aspecto.</td>
								<td><?php echo $data18['total18'];?></td>
							</tr>
							<tr>
								<td>Recuerdo mejor si estudio en voz alta con alguien.</td>
								<td><?php echo $data19['total19'];?></td>
							</tr>
							<tr>
								<td>Me resulta difícil crear imágenes en mi cabeza.</td>
								<td><?php echo $data20['total20'];?></td>
							</tr>
							<tr>
								<td>Me resulta útil decir en voz alta las tareas que tengo para hacer.</td>
								<td><?php echo $data21['total21'];?></td>
							</tr>
							<tr>
								<td>Al aprender algo nuevo, prefiero escuchar la información, luego leer y luego hacerlo.</td>
								<td><?php echo $data22['total22'];?></td>
							</tr>
							<tr>
								<td>Me gusta completar una tarea antes de comenzar otra.</td>
								<td><?php echo $data23['total23'];?></td>
							</tr>
							<tr>
								<td>Para obtener una nota extra, prefiero grabar un informe a escribirlo.</td>
								<td><?php echo $data24['total24'];?></td>
							</tr>
							<tr>
								<td>Total</td>
								<td>
									<?php  
										$aud = $data13['total13']+
										$data14['total14']+
										$data15['total15']+
										$data16['total16']+
										$data17['total17']+
										$data18['total18']+
										$data19['total19']+
										$data20['total20']+
										$data21['total21']+
										$data22['total22']+
										$data23['total23']+
										$data24['total24'];
										echo ($aud);
									?>
								</td>
							</tr> 
						</table> 
						<!--fin tabla canal auditivo-->
					</div>
                    <div class="carousel-item">
						<!--inicio tabla canal Kinestésico-->
						<table style="margin: 0 auto;">
							<tr>
								<th>Kinestésicos</th><th>Valores</th>
							</tr>
							<tr>
								<td>No me gusta leer o escuchar instrucciones, prefiero simplemente comenzar a hacer las cosas.</td>
								<td><?php echo $data25['total25'];?></td>
							</tr>
							<tr>
								<td>Puedo estudiar mejor si escucho música.</td>
								<td><?php echo $data26['total26'];?></td>
							</tr>
							<tr>
								<td>Necesito recreos frecuentes cuando estudio.</td>
								<td><?php echo $data27['total27'];?></td>
							</tr>
							<tr>
								<td>Pienso mejor cuando tengo la libertad de moverme, estar sentado detrás de un escritorio no es para mí escritorio no es para mi.</td>
								<td><?php echo $data28['total28'];?></td>
							</tr>
							<tr>
								<td>Cuando no puedo pensar en una palabra específica, uso mis manos y llamo al objeto "coso".</td>
								<td><?php echo $data29['total29'];?></td>
							</tr>
							<tr>
								<td>Cuando comienzo un artículo o un libro, prefiero espiar la última página.</td>
								<td><?php echo $data30['total30'];?></td>
							</tr>
							<tr>
								<td>Tomo notas, pero nunca vuelvo a releerlas.</td>
								<td><?php echo $data31['total31'];?></td>
							</tr>
							<tr>
								<td>PMi cuaderno y mi escritorio pueden verse un desastre, pero sé exactamente dónde está cada cosa.</td>
								<td><?php echo $data32['total32'];?></td>
							</tr>
							<tr>
								<td>Uso mis dedos para contar y muevo los labios cuando leo.</td>
								<td><?php echo $data33['total33'];?></td>
							</tr>
							<tr>
								<td>No me gusta releer mi trabajo.</td>
								<td><?php echo $data34['total34'];?></td>
							</tr>
							<tr>
								<td>Fantaseo en clase.</td>
								<td><?php echo $data35['total35'];?></td>
							</tr>
							<tr>
								<td>Para obtener una calificación extra, prefiero crear un proyecto a escribir un  informe.</td>
								<td><?php echo $data36['total36'];?></td>
							</tr>
							<tr>
								<td>Total</td>
								<td>
									<?php 
										$kin = $data25['total25']+
										$data26['total26']+
										$data27['total27']+
										$data28['total28']+
										$data29['total29']+
										$data30['total30']+
										$data31['total31']+
										$data32['total32']+
										$data33['total33']+
										$data34['total34']+
										$data35['total35']+
										$data36['total36'];
										echo ($kin);
									?>
								</td>
							</tr> 
						</table> 
						<!--fin tabla canal Kinestésico-->
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
			<?php $total = $vis+$aud+$kin;?>
			<table style="margin: 0 auto;">
				<tr>
					<th>Categoria</th><th>Total</th><th>Porcentaje %</th>
				</tr> 
				<tr>
					<td>Visual</td>
					<td><?php echo ($vis);?></td>
					<td><?php echo round(($vis/$total)*100,2);?></td>
				</tr> 
				<tr>
					<td>Auditivo</td>
					<td><?php echo ($aud);?></td>
					<td><?php echo round(($aud/$total)*100,2);?></td>
				</tr> 
				<tr>
					<td>Kinestésico</td>
					<td><?php echo ($kin);?></td>
					<td><?php echo round(($kin/$total)*100,2);?></td>
				</tr> 
				<tr>
					<td>Total categorias</td>
					<td><?php echo ($total);?> </td>
					<td><?php echo round(($total/$total)*100,2);?></td>
				</tr>   
			</table>
		</div>
        <?php mysqli_close($cn); ?>
	</body>
</html> 