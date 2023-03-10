<!DOCTYPE html>
<html>
  <head>
    <?php include ("../../../Estructura/head.php")?>
  </head>
  <style>
    @import url("fontawesome-all.min.css");
    body { 
      background-image: url("../../../Imagenes/fondo4.jpg");
      background-repeat: no-repeat;
      background-position-x:center;
      background-size: cover;
      background-attachment: fixed;
    }
    .salida{
      padding-right: 1%;
      padding-top: 1%;
      text-decoration: none;
    }
    .dropbtn {
      background-color: #ffffff;
      color: #5F5E5F;
      padding: 0.1% 150%;
      font-size: 18px;
      border-color: #a974e3;
      border-radius: 10px 10px 10px 10px;
    }
    .dropdown {
      padding-left: 4%;
      padding-top: 10%;
      position: relative;
      display: inline-block;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    .dropdown-content a {
      color: black;
      padding: 5px 50px;
      text-decoration: none;
      display: block;
      white-space: nowrap;
    }
    .dropdown-content a:hover {background-color: #a974e3;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: #a974e3;}

    .dropbtn2 {
      background-color: #ffffff;
      color: #5F5E5F;
      padding: 0.1% 30%;
      font-size: 18px;
      border-color: #a974e3;
      border-radius: 10px 10px 10px 10px;
    }
    .dropdown2 {
      padding-left: 4%;
      padding-top: 10%;
      position: relative;
      display: inline-block;
    }
    .dropdown-content2 {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 16px 32px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    .dropdown-content2 a {
      color: black;
      padding: 10px 100px;
      text-decoration: none;
      display: block;
      white-space: nowrap;
    }
    .dropdown-content2 a:hover {background-color: #a974e3;}

    .dropdown2:hover .dropdown-content2 {display: block;}

    .dropdown2:hover .dropbtn2 {background-color: #a974e3;}

    .dropbtn3 {
      background-color: #ffffff;
      color: #5F5E5F;
      padding: 0.1% 30%;
      font-size: 18px;
      border-color: #a974e3;
      border-radius: 10px 10px 10px 10px;
    }
    .dropdown3 {
      padding-left: 14%;
      padding-top: 10%;
      position: relative;
      display: inline-block;
    }
    .dropdown-content3 {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 16px 32px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    .dropdown-content3 a {
      color: black;
      padding: 10px 100px;
      text-decoration: none;
      display: block;
      white-space: nowrap;
    }
    .dropdown-content3 a:hover {background-color: #a974e3;}

    .dropdown3:hover .dropdown-content3 {display: block;}

    .dropdown3:hover .dropbtn3 {background-color: #a974e3;}

    input[type=submit]{
      background-color:  #a974e3 ;
      border: none;
      color: white;
      padding: 2% 15%;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 100%;
      border-radius: 10px 10px 10px 10px ;
      margin: 8px 20px;
    }
    input[type=text]
    {
      margin: 8px 20px;
    }
    form{
      padding: 8% 0;
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
        height: 50px;
        vertical-align: center;
    }
    td {
        vertical-align: center;
    }
    table th, td{
      font-size: 200%;
      border: 1px solid black;
      border-collapse: collapse;
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
    .contenedor{
            padding: 1%;
    }
    .titulo{
            text-align: center;
            padding: 1%;
    }
  </style>
  <body> 
    <?php include ("../../../A_conexion.php")?>
    <?php error_reporting (0);?>
    <header>
      <div class="salida" style="text-align:right;">
        <a href="../../reportes.php" style="font-size:160%;color:#ffffff;">
          Inicio &nbsp;
        </a>
        <a href="../../facultades.php" style="font-size:160%;color:#ffffff;">
          Facultades &nbsp;
        </a>
        <a href="../humanidades.php" style="font-size:160%;color:#ffffff;">
          Humanidades &nbsp;
        </a>
        <a href="maeinnedu.php" style="font-size:160%;color:#ffffff;">
          Regresar &nbsp;
        </a>
        <a href="../../../index.php"><img src="../../../Imagenes/salir.png" style="width:7%;"/></a>
      </div> 
      <div class="Titulo" style="text-align:center;">
        <h1 style="color:#ffffff;">
            Maestr??a en Innovaci??n Educativa
        </h1>
      </div> 
    </header> 
		<div class="dropdown2">
  		<button class="dropbtn2">Semestre</button>
  		<div class="dropdown-content2">
			  	<form action="maeinnedu.php" method="post">
		        <input type="text" name="semestre">
		        <input type="submit" value="Buscar" name="Buscar">
          </form>
  		</div>
		</div>
		<div class="dropdown">
      <button class="dropbtn">Categorias</button>
      <div class="dropdown-content">
        <ul style="list-style-type:none;">
          <li><a href="#sec2">General</a></li>
          <li><a href="#sec3">Mediaci??n tecnol??gica</a></li>
              <ul style="list-style-type:none;">
                  <li><a href="#sec3.1">Calificaci??n de conocimientos ofimaticos</a></li>
                  <li><a href="#sec3.2">Calificaci??n de conocimientos sobre internet y aplicaciones web</a></li>
                  <li><a href="#sec3.3">Calificaci??n de conocimientos sobre las aplicaciones de google</a></li>
                  <li><a href="#sec3.4">Calificaci??n de uso y frecuenencia de los sistemas institucionales</a></li>
              </ul>
          <li><a href="#sec4">Gesti??n de la Informaci??n</a></li>
              <ul style="list-style-type:none;">
                  <li><a href="#sec4.1">Calificaci??n de conocimientos de bases de datos</a></li>
                  <li><a href="#sec4.2">Calificaci??n de conocimientos sobre software y otras herramientas para investigar</a></li>
                  <li><a href="#sec4.3">Calificaci??n de conocimientos de poratales para la divulgaci??n de la actividad acad??mica</a></li>
                  <li><a href="#sec4.4">Calificaci??n de uso de otros recursos electronicos para la busqueda de informaci??n acad??mica</a></li>
              </ul>
          <li><a href="#sec5">Comunicaci??n Digital</a></li>
              <ul style="list-style-type:none;">
                  <li><a href="#sec5.1">Califiaci??n de frecuencia de uso de redes sociales</a></li>
              </ul>
          <li><a href="#sec6">Identidad Digital</a></li>
              <ul style="list-style-type:none;">
                  <li><a href="#sec6.1">Calificaci??n segun la frecuencia de uso cotidiano de netiqueta</a></li>
              </ul>
          <li><a href="#sec7">Ubicaci??n de competencias</a></li>
          <li><a href="#sec8">Canales de aprendizaje</a></li>
              <ul style="list-style-type:none;">
                  <li><a href="#sec8.1">Resultados totales del test para determinar el canal de aprendizaje</a></li>
              </ul>
        </ul>
      </div>
		</div>
    <?php
	    $sem = $_POST['semestre'];
	    if(isset($_POST["Buscar"])){//inicio al darle en buscar	
		?>
			<?php include "semestres.php";?>
		<?php
	    }else{ //inicio al no darle en buscar
    ?>
      <div class="contenedor">
        <!--inicio seccion 2-->
        <section id="sec2">
          <div class ="titulo">
            <h2 style="margin: 0 auto;">
                Reporte general
            </h2>
          </div>
          <div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <!--Tabla 3 Inscritos por semestre-->
                <?php 	$tama??o = 5;
                    $columna = "Semestre";
                    $d1 = "2021-1";
                    $d2 = "2021-2";
                    $d3 = "2022-1";
                    $d4 = "2022-2";
                    include "Datos_tablas/0_consultas.php";
                ?>
                <table border="1" style="margin: 0 auto;">
                  <tr>
                    <th colspan=3>Semestre de inicio</th>
                  </tr>
                  <tr>
                    <th>Semestre</th><th>Frecuencia</th><th>Porcentaje %</th>
                  </tr>
                  <tr>
                    <td>2021-1</td>
                    <td><?php echo $data1['total1'];?></td>
                    <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                  </tr>
                  <tr>
                    <td>2021-2</td>
                    <td><?php echo $data2['total2'];?></td>
                    <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                  </tr>
                  <tr>
                    <td>2022-1</td>
                    <td><?php echo $data3['total3'];?></td>
                    <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                  </tr>
                  <tr>
                    <td>2022-2</td>
                    <td><?php echo $data4['total4'];?></td>
                    <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td><?php echo $data['total'];?></td>
                    <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                  </tr>
                </table>
                <!--Tabla 3 Inscritos por semestre-->
              </div>
              <div class="carousel-item">
                <!--Tabla 4 Tipo de documento de inscritos-->
                <?php 	$tama??o = 5;
                        $columna = "Documento";
                        $d1 = "TI";
                        $d2 = "CC";
                        $d3 = "PA";
                        $d4 = "CE";
                        include "Datos_tablas/0_consultas.php";
                ?>
                <table border="1" style="margin: 0 auto;">
                    <tr>
                        <th colspan=3>Documento de identidad</th>
                    </tr>
                    <tr>
                        <th>Tipo</th><th>Frecuencia</th><th>Porcentaje %</th>
                    </tr>
                    <tr>
                        <td>Tarjeta de identidad</td>
                        <td><?php echo $data1['total1'];?></td>
                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Cedula de ciudadania</td>
                        <td><?php echo $data2['total2'];?></td>
                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Pasaporte</td>
                        <td><?php echo $data3['total3'];?></td>
                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Cedula extranjera</td>
                        <td><?php echo $data4['total4'];?></td>
                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td><?php echo $data['total'];?></td>
                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                    </tr>
                </table>
                <!--Tabla 4 Tipo de documento de inscritos-->
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
        </section>
        <!--fin seccion 2-->
      </div>
      <div class="contenedor">
                <!--inicio seccion 3-->
                <section id="sec3">
                    <div class ="titulo">
                        <h2 style="margin: 0 auto;">
                            Mediaci??n tecnol??gica
                        </h2>
                    </div>
                    <!--inicio sub-seccion 1-->
                    <div id="demo2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!--Tabla 5 conocimiento adquirido-->
                                <?php include "Datos_tablas/1_conocimiento.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>??C??mo ha adquirido los conocimientos actuales sobre tecnolog??a?</th>
                                    </tr>
                                    <tr>
                                        <th>Metodo</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>De manera autodidacta, (recursos de Internet, exploraci??n)</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Cursos presenciales y/o virtuales</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Otra</td>
                                        <td><?php echo $data['total']-$data3['total3'];?></td>
                                        <td><?php echo round((($data['total']-$data3['total3'])/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 5 conocimiento adquirido-->
                            </div> 
                            <div class="carousel-item"> 
                                <!--Tabla 6 habilidades digitales-->
                                <?php 	$tama??o = 4;
                                        $columna = "Habilidades_digitales";
                                        $do1 = "Basico";
                                        $do2 = "Intermedio";
                                        $do3 = "Avanzado";
                                        include "Datos_tablas/0_consultas.php";
                                ?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>??C??mo evalua qu?? son sus habilidades digitales para dar respuesta a los requerimientos, actividades y tareas acad??micas?</th>
                                    </tr>
                                    <tr>
                                        <th>Evaluacion</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Basicas</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Intermedias</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Avanzadas</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round((($data3['total3'])/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 6 habilidades digitales-->
                            </div>  
                            <div class="carousel-item"> 
                                <!--Tabla 7 Servicios de la ucp-->
                                <?php 	$tama??o = 3;
                                        $dt1 = "Si";
                                        $dt2 = "No";
                                        $columna = "Servicios_ucp";
                                        include "Datos_tablas/0_consultas.php";
                                ?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>??Conoce todos los servicios disponibles para los estudiantes, en la P??gina Web de la Universidad?</th>
                                    </tr>
                                    <tr>
                                        <th>Respuesta</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Si</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>			
                                <!--Tabla 7 Servicios de la ucp-->
                            </div> 
                        </div>
                        <!-- controles derecha-izquierda -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo2" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>    
                    </div>
                    <!--fin sub-seccion 1-->
                    <!--inicio sub-seccion 2-->
                    <section id="sec3.1">
                        <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Calificaci??n de conocimientos ofimaticos
                            </h3>
                        </div>
                        <div id="demo3" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 8 habilidades procesador de texto-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_texto";
                                            $d1 = "Ninguno";
                                            $d2 = "Basico";
                                            $d3 = "Avanzado";
                                            $d4 = "Experto";
                                            include "Datos_tablas/0_onsultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Procesador de texto</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 8 habilidades procesador de texto-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 9 habilidades hoja de calculo-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_calculo";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Hoja de calculo</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 9 habilidades hoja de calculo-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 10 habilidades presentacion-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_presentacion";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Herramientas de presentaci??n</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 10 habilidades presentacion-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 11 habilidades datos-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_datos";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Bases de datos</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 11 habilidades datos-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 12 habilidades herramientas-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_herramientas";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Utilidades (agendas, calculadoras, etc)</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 12 habilidades herramientas-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 13 habilidades correo-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_correo";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Programas de correo electr??nico, de voz, mensajer??a.</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 13 habilidades correo-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 14 habilidades hardware-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_hardware";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Manejo b??sico de Hardware (impresoras, teclado, mouse)</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 14 habilidades hardware-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 15 habilidades software-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_software";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Software: sistemas operativos y aplicaciones</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 15 habilidades software-->
                                </div>  
                            </div>
                            <!-- controles derecha-izquierda -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo3" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>    
                        </div>
                    </section>
                    <!--fin sub-seccion 2-->
                    <!--inicio sub-seccion 3-->
                    <section id="sec3.2">
                        <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Califiaci??n de conocimientos sobre internet y aplicaciones web
                            </h3>
                        </div>
                        <div id="demo4" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 16 habilidades Navegadores-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_navegador";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Navegadores</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 16 habilidades Navegadores-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 17 habilidades Buscadores-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_buscadores";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Buscadores</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 17 habilidades Buscadores-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 18 habilidades Correo electronico-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_correo_electronico";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Correo electronico</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 18 habilidades Correo electronico-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 19 Seguridad en internet-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_seguridad";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Seguridad en internet</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 19 Seguridad en internet-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 20 habilidades Redes sociales-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_redes_sociales";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Redes sociales</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 20 habilidades Redes sociales-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 21 habilidades Foros y grupos de discusi??n-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_foros";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Foros y grupos de discusi??n</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 21 habilidades Foros y grupos de discusi??n-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 22 habilidades Blogs-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_blogs";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Blogs</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 22 habilidades Blogs-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 23 habilidades Servicios en la nube (Dropbox, Drive, etc)-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_nube";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Servicios en la nube (Dropbox, Drive, etc)</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 23 habilidades Servicios en la nube (Dropbox, Drive, etc)-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 24 habilidades Video conferencia (Meet, Zoom, otro)-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_conferencias";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Video conferencia (Meet, Zoom, otro)</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 24 habilidades Video conferencia (Meet, Zoom, otro)-->
                                </div> 
                            </div>
                            <!-- controles derecha-izquierda -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo4" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo4" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>    
                        </div>
                    </section>
                    <!--fin sub-seccion 3-->
                    <!--inicio sub-seccion 4-->
                    <section id="sec3.3">
                        <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Califiaci??n de conocimientos sobre las aplicaciones de google
                            </h3>
                        </div>
                        <div id="demo5" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 25 habilidades B??squeda-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_buscador";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>B??squeda</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 25 habilidades B??squeda-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 26 habilidades Correo-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_correos";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Correo</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 26 habilidades Correo-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 27 habilidades Calendario-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_calendario";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Calendario</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 27 habilidades Calendario-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 28 Drive-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_drive";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Drive</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 28 Seguridad en Drive-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 29 habilidades Documentos-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_documentos";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Documentos</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 29 habilidades Documentos-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 30 habilidades Hoja de C??lculo-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_calculos";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Hoja de C??lculo</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 30 habilidades Hoja de C??lculo-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 31 habilidades Presentaciones-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_presentaciones";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Presentaciones</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 31 habilidades Presentaciones-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 32 habilidades Formularios-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_formularios";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Formularios</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 32 habilidades Formularios-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 33 habilidades Keep-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_keep";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Keep</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 33 habilidades Keep-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 34 habilidades Jamboard-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Habilidades_jamboard";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Jamboard</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 34 habilidades Jamboard-->
                                </div>  
                            </div>
                            <!-- controles derecha-izquierda -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo5" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo5" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>    
                        </div>
                    </section>
                    <!--fin sub-seccion 4-->
                    <!--inicio sub-seccion 5-->
                    <section id="sec3.4">
                        <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Califiaci??n de uso y frecuenencia de los sistemas institucionales
                            </h3>
                        </div>
                        <div id="demo6" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 35-->
                                    <?php 	$tama??o = 9;
                                            $columna = "1.2_Moodle";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Moodle</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Manejo</td>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Frecuencia de uso</td>
                                            <td>Nunca</td>
                                            <td><?php echo $data5['total5'];?></td>
                                            <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Poco</td>
                                            <td><?php echo $data6['total6'];?></td>
                                            <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Frecuente</td>
                                            <td><?php echo $data7['total7'];?></td>
                                            <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Muy Frecuente</td>
                                            <td><?php echo $data8['total8'];?></td>
                                            <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 35-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 36-->
                                    <?php 	$tama??o = 9;
                                            $columna = "1.3_Portal_estudiantil";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Portal del estudiante</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Manejo</td>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Frecuencia de uso</td>
                                            <td>Nunca</td>
                                            <td><?php echo $data5['total5'];?></td>
                                            <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Poco</td>
                                            <td><?php echo $data6['total6'];?></td>
                                            <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Frecuente</td>
                                            <td><?php echo $data7['total7'];?></td>
                                            <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Muy Frecuente</td>
                                            <td><?php echo $data8['total8'];?></td>
                                            <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 36-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 37-->
                                    <?php 	$tama??o = 9;
                                            $columna = "1.4_Solicitudes";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Sistema de solicitudes</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Manejo</td>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Frecuencia de uso</td>
                                            <td>Nunca</td>
                                            <td><?php echo $data5['total5'];?></td>
                                            <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Poco</td>
                                            <td><?php echo $data6['total6'];?></td>
                                            <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Frecuente</td>
                                            <td><?php echo $data7['total7'];?></td>
                                            <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Muy Frecuente</td>
                                            <td><?php echo $data8['total8'];?></td>
                                            <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 37-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 38-->
                                    <?php 	$tama??o = 9;
                                            $columna = "1.5_Bases_datos";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Bases de datos suscritas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Manejo</td>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Frecuencia de uso</td>
                                            <td>Nunca</td>
                                            <td><?php echo $data5['total5'];?></td>
                                            <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Poco</td>
                                            <td><?php echo $data6['total6'];?></td>
                                            <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Frecuente</td>
                                            <td><?php echo $data7['total7'];?></td>
                                            <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Muy Frecuente</td>
                                            <td><?php echo $data8['total8'];?></td>
                                            <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 38-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 39-->
                                    <?php 	$tama??o = 9;
                                            $columna = "1.6_Catalogo";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Cat??logo en linea de la biblioteca</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Manejo</td>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Frecuencia de uso</td>
                                            <td>Nunca</td>
                                            <td><?php echo $data5['total5'];?></td>
                                            <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Poco</td>
                                            <td><?php echo $data6['total6'];?></td>
                                            <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Frecuente</td>
                                            <td><?php echo $data7['total7'];?></td>
                                            <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Muy Frecuente</td>
                                            <td><?php echo $data8['total8'];?></td>
                                            <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 39-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 40-->
                                    <?php 	$tama??o = 9;
                                            $columna = "1.7_Repositorio";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Ribul (Repositorio institucional)</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Manejo</td>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Frecuencia de uso</td>
                                            <td>Nunca</td>
                                            <td><?php echo $data5['total5'];?></td>
                                            <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Poco</td>
                                            <td><?php echo $data6['total6'];?></td>
                                            <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Frecuente</td>
                                            <td><?php echo $data7['total7'];?></td>
                                            <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Muy Frecuente</td>
                                            <td><?php echo $data8['total8'];?></td>
                                            <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 40-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 41-->
                                    <?php 	$tama??o = 9;
                                            $columna = "1.8_Publicaciones";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Sistema de publicaciones</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Manejo</td>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Frecuencia de uso</td>
                                            <td>Nunca</td>
                                            <td><?php echo $data5['total5'];?></td>
                                            <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Poco</td>
                                            <td><?php echo $data6['total6'];?></td>
                                            <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Frecuente</td>
                                            <td><?php echo $data7['total7'];?></td>
                                            <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Muy Frecuente</td>
                                            <td><?php echo $data8['total8'];?></td>
                                            <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 41-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 42-->
                                    <?php 	$tama??o = 9;
                                            $columna = "1.9_Libros";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Libros electronicos</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Manejo</td>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Frecuencia de uso</td>
                                            <td>Nunca</td>
                                            <td><?php echo $data5['total5'];?></td>
                                            <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Poco</td>
                                            <td><?php echo $data6['total6'];?></td>
                                            <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Frecuente</td>
                                            <td><?php echo $data7['total7'];?></td>
                                            <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Muy Frecuente</td>
                                            <td><?php echo $data8['total8'];?></td>
                                            <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 42-->
                                </div>  
                            </div>
                            <!-- controles derecha-izquierda -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo6" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo6" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>    
                        </div>
                    </section>
                    <!--fin sub-seccion 5-->
                </section>
                <!--fin seccion 3-->
            </div>
            <div class="contenedor">
                <!--inicio seccion 4-->
                <section id="sec4">
                    <div class ="titulo">
                        <h2 style="margin: 0 auto;">
                            Gesti??n de la Informaci??n
                        </h2>
                    </div>
                    <!--inicio sub-seccion 1-->
                    <div id="demo7" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!--Tabla 43 guardar informacion-->
                                <?php include "Datos_tablas/2_guardar.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>??C??mo guarda la informaci??n?</th>
                                    </tr>
                                    <tr>
                                        <th>Formas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>No la guardo, tengo buena memoria</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Me env??o la informaci??n por e-mail para guardarla</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>La guardo en alguna herramienta de lectura</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>La guardo en favoritos</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>La comparto para poderla encontrar cuando la busque</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 43 guardar informacion-->
                            </div> 
                            <div class="carousel-item">
                                <!--Tabla 44 contrastar informacion-->
                                <?php include "Datos_tablas/3_contrastar.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>??Contrasta con diferentes fuentes: la calidad, fiabilidad y pertinencia de la informaci??n que obtiene en Internet? </th>
                                    </tr>
                                    <tr>
                                        <th>Formas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>No se puede creer nada de lo que se publica en Internet, todo es falso</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Lo que aparece en los medios de comunicaci??n siempre es cierto</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Yo reenv??o todo lo que me llega, nunca me equivoco</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Cuando me llega algo demasiado sorprendente siempre contrasto con otras fuentes</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Busco de forma activa y tengo el sentido cr??tico muy despierto</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 44 contrastar informacion-->
                            </div> 
                        </div>
                        <!-- controles derecha-izquierda -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo7" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo7" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>    
                    </div> 
                    <!--fin sub-seccion 1-->
                    <!--inicio sub-seccion 2-->
                    <section id="sec4.1">
                        <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Calificaci??n de conocimientos de bases de datos
                            </h3>
                        </div>
                        <div id="demo8" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 45 Scopus-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Scopus";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Scopus</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 45 Scopus-->
                                </div>
                      		    <div class="carousel-item">
                                    <!--Tabla 46 Sage-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Sage";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Sage</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 46 Sage-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 47 Ebsco-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Ebsco";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Ebsco</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 47 Ebsco-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 48 Legiscomex-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Legiscomex";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Legiscomex</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 48 Legiscomex-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 49 Redalyc-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Redalyc";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Redalyc</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 49 Redalyc-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 50 Scielo-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Scielo";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Scielo</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 50 Scielo-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 51 Dialnet-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Dialnet";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Dialnet</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 51 Dialnet-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 52 Science-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Science";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Science</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 52 Science-->
                                </div>
                            </div>
                            <!-- controles derecha-izquierda -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo8" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo8" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>    
                        </div>                       
                    </section>
                    <!--fin sub-seccion 2-->
                    <!--inicio sub-seccion 3-->
                    <section id="sec4.2">
                    <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Calificaci??n de conocimientos sobre software y otras herramientas para investigar
                            </h3>
                        </div>
                        <div id="demo9" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 53 Zootero-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Zootero";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Zootero</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 53 Zootero-->
                                </div>
                      		    <div class="carousel-item">
                                    <!--Tabla 54 Mendeley-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Mendeley";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Mendeley</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 54 Mendeley-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 55 Refworks-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Refworks";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Refworks</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 55 Refworks-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 56 Atlasti-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Atlasti";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>AtlasTI</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 56 Atlasti-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 57 Spss-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Spss";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Spss</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 57 Spss-->
                                </div>
                            </div>
                            <!-- controles derecha-izquierda -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo9" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo9" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>    
                        </div> 
                    </section>
                    <!--fin sub-seccion 3-->
                    <!--inicio sub-seccion 4-->
                    <section id="sec4.3">
                    <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Calificaci??n de conocimientos de portales para la divulgaci??n de la actividad acad??mica
                            </h3>
                        </div>
                        <div id="demo10" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 58 Researchgate-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Researchgate";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Researchgate</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 58 Researchgate-->
                                </div>
                      		    <div class="carousel-item">
                                    <!--Tabla 59 Google_academico-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Google_academico";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Google academico</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 59 Google_academico-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 60 Cvlac-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Cvlac";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Cvlac</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 60 Cvlac-->
                                </div>
                            </div>
                            <!-- controles derecha-izquierda -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo10" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo10" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>    
                        </div> 
                    </section>
                    <!--fin sub-seccion 4-->
                    <!--inicio sub-seccion 5-->
                    <section id="sec4.4">
                    <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Calificaci??n de uso de otros recursos electronicos para la busqueda de informaci??n acad??mica
                            </h3>
                        </div>
                        <div id="demo11" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 61 Ebooks-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Ebooks";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Ebooks</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 61 Ebooks-->
                                </div>
                      		    <div class="carousel-item">
                                    <!--Tabla 62 Ribuc-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Ribuc";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Ribuc</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 62 Ribuc-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 63 BiblioTechnia-->
                                    <?php 	$tama??o = 5;
                                            $columna = "BiblioTechnia";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>BiblioTechnia</th>
                                        </tr>
                                        <tr>
                                            <th>Califiaci??n</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>Ninguno</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Experto</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                        </table>
                                    <!--Tabla 63 BiblioTechnia-->
                                </div>
                            </div>
                            <!-- controles derecha-izquierda -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo11" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo11" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>    
                        </div> 
                    </section>
                    <!--fin sub-seccion 5-->
                </section>
                <!--fin seccion 4-->
            </div>
            <div class="contenedor">
                <!--inicio seccion 5-->
                <section id="sec5">
                    <div class ="titulo">
                        <h2 style="margin: 0 auto;">
                            Comunicaci??n Digital
                        </h2>
                    </div>
                    <!--inicio sub-seccion 1-->
                    <div id="demo12" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!--Tabla 64 uso redes sociales-->
                                <?php 	$tama??o = 6;
                                        $columna = "Uso_redes_sociales";
                                        $da1 = "Respuesta1";
                                        $da2 = "Respuesta2";
                                        $da3 = "Respuesta3";
                                        $da4 = "Respuesta4";
                                        $da5 = "Respuesta5";
                                        include "Datos_tablas/0_consultas.php";
                                ?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>??C??mo utiliza las Redes Sociales?</th>
                                    </tr>
                                    <tr>
                                        <th>Uso</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>No las utilizo</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Las utilizo para estar informado de lo que hacen mis amigos</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Comparto de vez en cuando contenidos interesantes</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Las utilizo como fuente de informaci??n m??s all?? del ??mbito personal</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Soy un difusor constante de contenidos, una referencia profesional para mis contactos</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 64 uso redes sociales-->
                            </div> 
                            <div class="carousel-item">
                                <!--Tabla 65 criterio-->
                                <?php 	$tama??o = 5;
                                        $columna = "Criterios";
                                        $d1 = "Respuesta1";
                                        $d2 = "Respuesta2";
                                        $d3 = "Respuesta3";
                                        $d4 = "Respuesta4";
                                        include "Datos_tablas/0_consultas.php";
                                ?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>Cuando tiene que comunicarse con una persona ??cu??l de los siguientes criterios utiliza?</th>
                                    </tr>
                                    <tr>
                                        <th>Criterio</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>No suelo hablar, ni comunicarme con nadie</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Principalmente el e-mail o tel??fono</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Env??o un e-mail y si quiero que me contesten r??pido, tambi??n un WhatsApp y luego una llamada</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Dependiendo del mensaje utilizo un canal u otro: e-mail no es para todo y s?? que no es eficiente</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 65 criterio-->
                            </div> 
                        </div>
                        <!-- controles derecha-izquierda -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo12" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo12" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>    
                    </div> 
                    <!--fin sub-seccion 1-->
                    <!--inicio sub-seccion 2-->
                    <section id="sec5.1">
                        <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Califiaci??n de frecuencia de uso de redes sociales
                            </h3>
                        </div>
                        <div id="demo13" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 66 redes sociales-->
                                    <?php 	$tama??o = 7;
                                            $columna = "Whatsapp";
                                            $dat1 = "0";
                                            $dat2 = "1";
                                            $dat3 = "2";
                                            $dat4 = "3";
                                            $dat5 = "4";
                                            $dat6 = "5";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Whatsapp</th>
                                        </tr>
                                        <tr>
                                            <th>Uso</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>0</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><?php echo $data5['total5'];?></td>
                                            <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><?php echo $data6['total6'];?></td>
                                            <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 66 redes sociales-->
                                </div>
                      		    <div class="carousel-item">
                                    <!--Tabla 67 redes sociales-->
                                    <?php 	$tama??o = 7;
                                            $columna = "Facebook";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Facebook</th>
                                        </tr>
                                        <tr>
                                            <th>Uso</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>0</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><?php echo $data5['total5'];?></td>
                                            <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><?php echo $data6['total6'];?></td>
                                            <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 67 redes sociales-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 68 redes sociales-->
                                    <?php 	$tama??o = 7;
                                            $columna = "Youtube";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Youtube</th>
                                        </tr>
                                        <tr>
                                            <th>Uso</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>0</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><?php echo $data5['total5'];?></td>
                                            <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><?php echo $data6['total6'];?></td>
                                            <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 68 redes sociales-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 69 redes sociales-->
                                    <?php 	$tama??o = 7;
                                            $columna = "Instagram";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Instagram</th>
                                        </tr>
                                        <tr>
                                            <th>Uso</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>0</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><?php echo $data5['total5'];?></td>
                                            <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><?php echo $data6['total6'];?></td>
                                            <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 69 redes sociales-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 70 redes sociales-->
                                    <?php 	$tama??o = 7;
                                            $columna = "Twitter";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Twitter</th>
                                        </tr>
                                        <tr>
                                            <th>Uso</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>0</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><?php echo $data5['total5'];?></td>
                                            <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><?php echo $data6['total6'];?></td>
                                            <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 70 redes sociales-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 71 redes sociales-->
                                    <?php 	$tama??o = 7;
                                                $columna = "Linkedin";
                                                include "Datos_tablas/0_consultas.php";
                                        ?>
                                        <table border="1" style="margin: 0 auto;">
                                            <tr>
                                                <th colspan=3>Linkedin</th>
                                            </tr>
                                            <tr>
                                                <th>Uso</th><th>Frecuencia</th><th>Porcentaje %</th>
                                            </tr>
                                            <tr>
                                                <td>0</td>
                                                <td><?php echo $data1['total1'];?></td>
                                                <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td><?php echo $data2['total2'];?></td>
                                                <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><?php echo $data3['total3'];?></td>
                                                <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><?php echo $data4['total4'];?></td>
                                                <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><?php echo $data5['total5'];?></td>
                                                <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><?php echo $data6['total6'];?></td>
                                                <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td><?php echo $data['total'];?></td>
                                                <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                            </tr>
                                        </table>
                                        <!--Tabla 71 redes sociales-->
                                </div>
                                <div class="carousel-item">
                                        <!--Tabla 72 redes sociales-->
                                        <?php 	$tama??o = 7;
                                                $columna = "Tiktok";
                                                include "Datos_tablas/0_consultas.php";
                                        ?>
                                        <table border="1" style="margin: 0 auto;">
                                            <tr>
                                                <th colspan=3>Tiktok</th>
                                            </tr>
                                            <tr>
                                                <th>Uso</th><th>Frecuencia</th><th>Porcentaje %</th>
                                            </tr>
                                            <tr>
                                                <td>0</td>
                                                <td><?php echo $data1['total1'];?></td>
                                                <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td><?php echo $data2['total2'];?></td>
                                                <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><?php echo $data3['total3'];?></td>
                                                <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><?php echo $data4['total4'];?></td>
                                                <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><?php echo $data5['total5'];?></td>
                                                <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><?php echo $data6['total6'];?></td>
                                                <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td><?php echo $data['total'];?></td>
                                                <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                            </tr>
                                        </table>
                                        <!--Tabla 72 redes sociales-->
                                </div>
                            </div>
                            <!-- controles derecha-izquierda -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo13" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo13" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>    
                        </div>                       
                    </section>
                    <!--fin sub-seccion 2-->
                </section>
                <!--fin seccion 5-->
            </div>
            <div class="contenedor">
                <!--inicio seccion 6-->
                <section id="sec6">
                    <div class ="titulo">
                        <h2 style="margin: 0 auto;">
                            Identidad Digital
                        </h2>
                    </div>
                    <!--inicio sub-seccion 1-->
                    <div id="demo14" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!--Tabla 73 privasidad-->
                                <?php 	$tama??o = 5;
                                        $columna = "Privasidad";
                                        $d1 = "Respuesta1";
                                        $d2 = "Respuesta2";
                                        $d3 = "Respuesta3";
                                        $d4 = "Respuesta4";
                                        include "Datos_tablas/0_consultas.php";
                                ?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>??C??mo afecta internet a lo p??blico/privado?</th>
                                    </tr>
                                    <tr>
                                        <th>Respuesta</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>En Internet todo es p??blico</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>En Internet los dos ??mbitos est??n expuestos y no se pueden gestionar</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Yo gestiono mi privacidad y presencia en Internet de forma activa</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>En Internet lo dos ??mbitos est??n expuestos y podemos controlarlos</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 73 privasidad-->
                            </div> 
                            <div class="carousel-item">
                                <!--Tabla 74 derechos de autor-->
                                <?php 	$tama??o = 3;
                                        $columna = "Derechos";
                                        include "Datos_tablas/0_consultas.php";
                                ?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>??Sabe que son los derechos de autor?</th>
                                    </tr>
                                    <tr>
                                        <th>Respuesta</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Si</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 74 derechos de autor-->
                            </div>
                            <div class="carousel-item">
                                <!--Tabla 75 norma para referenciar -->
                                <?php 	$tama??o = 3;
                                        $columna = "Norma";
                                        include "Datos_tablas/0_consultas.php";
                                ?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>??Conoce alguna norma para referenciar documentos en sus trabajos escritos?</th>
                                    </tr>
                                    <tr>
                                        <th>Respuesta</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Si</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 75 norma para referenciar -->
                            </div> 
                            <div class="carousel-item">
                                <!--Tabla 76 netiqueta -->
                                <?php 	$tama??o = 3;
                                        $columna = "Netiqueta";
                                        include "Datos_tablas/0_consultas.php";
                                ?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>??Sabe qu?? es netiqueta?</th>
                                    </tr>
                                    <tr>
                                        <th>Respuesta</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Si</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 76 netiqueta -->
                            </div>  
                        </div>
                        <!-- controles derecha-izquierda -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo14" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo14" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>    
                    </div> 
                    <!--fin sub-seccion 1-->
                    <!--inicio sub-seccion 2-->
                    <section id="sec6.1">
                        <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Calificaci??n de la frecuencia de uso cotidiano de netiqueta
                            </h3>
                        </div>
                        <div id="demo15" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 77 netiqueta-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Trato";
                                            $d1 = "A veces";
                                            $d2 = "Muchas veces";
                                            $d3 = "Siempre";
                                            $d4 = "No";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Trato a las personas con respeto</th>
                                        </tr>
                                        <tr>
                                            <th>Respuesta</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>A veces</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Muchas veces</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Siempre</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>No lo hago</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 77 netiqueta-->
                                </div>
                      		    <div class="carousel-item">
                                    <!--Tabla 78 netiqueta-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Ignorar";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Ignoro a las persona cuando no quiero o puedo hablar</th>
                                        </tr>
                                        <tr>
                                            <th>Respuesta</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>A veces</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Muchas veces</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Siempre</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>No lo hago</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 78 netiqueta-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 79 netiqueta-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Breve";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Soy breve y conciso con lo que env??o</th>
                                        </tr>
                                        <tr>
                                            <th>Respuesta</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>A veces</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Muchas veces</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Siempre</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>No lo hago</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 79 netiqueta-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 80 netiqueta-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Preocupacion";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Me preocupo por la redacci??n y gram??tica</th>
                                        </tr>
                                        <tr>
                                            <th>Respuesta</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>A veces</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Muchas veces</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Siempre</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>No lo hago</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 80 netiqueta-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 81 netiqueta-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Demas";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Me pongo en el lugar de los dem??s</th>
                                        </tr>
                                        <tr>
                                            <th>Respuesta</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>A veces</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Muchas veces</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Siempre</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>No lo hago</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 81 netiqueta-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 82 netiqueta-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Respeto";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Respeto la privacidad de otro</th>
                                        </tr>
                                        <tr>
                                            <th>Respuesta</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>A veces</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Muchas veces</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Siempre</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>No lo hago</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 82 netiqueta-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 83 netiqueta-->
                                    <?php 	$tama??o = 5;
                                            $columna = "Mucho_texto";
                                            include "Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Escribo mucho texto en may??scula</th>
                                        </tr>
                                        <tr>
                                            <th>Respuesta</th><th>Frecuencia</th><th>Porcentaje %</th>
                                        </tr>
                                        <tr>
                                            <td>A veces</td>
                                            <td><?php echo $data1['total1'];?></td>
                                            <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Muchas veces</td>
                                            <td><?php echo $data2['total2'];?></td>
                                            <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Siempre</td>
                                            <td><?php echo $data3['total3'];?></td>
                                            <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>No lo hago</td>
                                            <td><?php echo $data4['total4'];?></td>
                                            <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><?php echo $data['total'];?></td>
                                            <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                        </tr>
                                    </table>
                                    <!--Tabla 83 netiqueta-->
                                </div>
                            </div>
                            <!-- controles derecha-izquierda -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo15" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo15" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>    
                        </div>                       
                    </section>
                    <!--fin sub-seccion 2-->
                </section>
                <!--fin seccion 6-->
            </div>
            <div class="contenedor">
                <!--inicio seccion 7-->
                <section id="sec7">
                    <div class ="titulo">
                        <h2 style="margin: 0 auto;">
                            Ubicaci??n de competencias
                        </h2>
                    </div>
                    <div id="demo16" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!--Tabla 84 -->
                                <?php include "Datos_tablas/4_creatividad.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>Creatividad e innovaci??n</th>
                                    </tr>
                                    <tr>
                                        <th>Respuestas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Aplico el conocimiento existente para generar nuevos ideas, productos o procesos</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Creo obras originales como un medio de personal o expresi??n grupal</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Uso modelos y simulaciones para explorar complejos sistemas y problemas</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Identifico tendencias y posibilidades de pron??stico</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Ninguna</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 84 -->
                            </div>
                            <div class="carousel-item">
                                <!--Tabla 85 -->
                                <?php include "Datos_tablas/5_comunicacion.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>Comunicaci??n y colaboraci??n</th>
                                    </tr>
                                    <tr>
                                        <th>Respuestas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Interact??o, colaboro y publico con mis compa??eros, expertos u otros que emplean una variedad de digital ambientes y medios</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Comunico informaci??n e ideas de manera efectiva a m??ltiples audiencias usando una variedad de medios y formatos</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Desarrollo la comprensi??n cultural y global al relacionarme con estudiantes de otras culturas</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Contribuyo a los equipos de proyecto para producir trabajos originales o resolver problemas</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Ninguna</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 85 -->
                            </div>
                            <div class="carousel-item">
                                <!--Tabla 86 -->
                                <?php include "Datos_tablas/6_investigacion.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>Investigaci??n y fluidez de la informaci??n</th>
                                    </tr>
                                    <tr>
                                        <th>Respuestas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Planifico estrategias para guiar la investigaci??n</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Localizo, organizo, analizo, eval??o, sintetizo, y uso ??ticamente la informaci??n de una variedad de fuentes y medios</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Eval??o y selecciono fuentes de informaci??n y herramientas digitales basadas en la idoneidad para Tareas espec??ficas</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Proceso datos e informo resultados</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Ninguna</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 86 -->
                            </div>
                            <div class="carousel-item">
                                <!--Tabla 87 -->
                                <?php include "Datos_tablas/7_pensamiento.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>Pensamiento cr??tico, resoluci??n de problemas, y toma de decisiones</th>
                                    </tr>
                                    <tr>
                                        <th>Respuestas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Identifico y defino problemas aut??nticos y preguntas importantes para la investigaci??n</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Planifico y gestiono actividades para desarrollar una soluci??n o completar un proyecto</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Recopilo y analizo datos para identificar soluciones y / o tomar decisiones</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Utilizo m??ltiples procesos y diversas perspectivas para explorar soluciones alternativas</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Ninguna</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 87 -->
                            </div>
                            <div class="carousel-item">
                                <!--Tabla 88 -->
                                <?php include "Datos_tablas/8_ciudadania.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>Ciudadan??a Digital</th>
                                    </tr>
                                    <tr>
                                        <th>Respuestas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Hago uso responsable de la informaci??n y la tecnolog??a</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Exhibo una actitud positiva hacia el uso tecnolog??a que apoya la colaboraci??n, aprendizaje y productividad</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Demuestro responsabilidad personal por el aprendizaje permanente</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Exhibo liderazgo para la ciudadan??a digital</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Ninguna</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 88 -->
                            </div>
                            <div class="carousel-item">
                                <!--Tabla 89 -->
                                <?php include "Datos_tablas/9_operaciones.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>Operaciones tecnol??gicas y conceptos</th>
                                    </tr>
                                    <tr>
                                        <th>Respuestas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Comprendo y utilizo sistemas tecnol??gicos</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Selecciono y uso aplicaciones de manera efectiva y productivamente</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Soluciono problemas de sistemas y aplicaciones</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Transfiero el conocimiento actual al aprendizaje de nuevas tecnolog??as</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Ninguna</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 89 -->
                            </div>
                        </div>
                        <!-- controles derecha-izquierda -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo16" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo16" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </section>
                <!--fin seccion 7-->
            </div>
            <div class="contenedor">
                <!--inicio seccion 8-->
                <section id="sec8">
                    <div class ="titulo">
                        <h2 style="margin: 0 auto;">
                            Test para determinar el canal de aprendizaje de preferencia
                        </h2>
                    </div>
                    <!--inicio sub-seccion 1-->
                    <div id="demo17" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!--Tabla 90 canales de aprendisaje visual-->
                                <?php include "Datos_tablas/10_can_vis.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=2>Aprendizajes por canales visuales</th>
                                    </tr>
                                    <tr>
                                        <th>Pregunta</th><th>Valores</th>
                                    </tr>
                                    <tr>
                                        <td>Puedo recordar algo mejor si lo escribo</td>
                                        <td><?php echo $data1['total1'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Puedo visualizar im??genes en mi cabeza</td>
                                        <td><?php echo $data2['total2'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Tomo muchas notas de lo que leo y escucho</td>
                                        <td><?php echo $data3['total3'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Me ayuda MIRAR a la persona que est?? hablando. Me mantiene enfocado</td>
                                        <td><?php echo $data4['total4'];?></td>
                                    </tr>
                                    <tr>
                                        <td>se me hace dif??cil entender lo que una persona est?? diciendo si hay ruidos alrededor</td>
                                        <td><?php echo $data5['total5'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Es m??s f??cil para m?? hacer un trabajo en un lugar tranquilo</td>
                                        <td><?php echo $data6['total6'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Me resulta f??cil entender mapas, tablas y gr??ficos</td>
                                        <td><?php echo $data7['total7'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Cuando estoy concentrado leyendo o escribiendo, la radio me molesta</td>
                                        <td><?php echo $data8['total8'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Cuando estoy en un examen, puedo ???ver??? la p??gina en el libro de textos y la respuesta</td>
                                        <td><?php echo $data9['total9'];?></td>
                                    </tr>
                                    <tr>
                                        <td>No puedo recordar una broma lo suficiente para contarla luego</td>
                                        <td><?php echo $data10['total10'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Cuando estoy tratando de recordar algo nuevo, por ejemplo, un n??mero de telef??no, me ayuda formarme una imagen mental para lograrlo</td>
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
                                <!--Tabla 90 canales de aprendisaje visual-->
                            </div> 
                            <div class="carousel-item">
                                <!--Tabla 91 canales de aprendisaje auditivo-->
                                <?php include "Datos_tablas/11_can_aud.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=2>Aprendizajes por canales auditivos</th>
                                    </tr>
                                    <tr>
                                        <th>Pregunta</th><th>Valores</th>
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
                                        <td>se me hace dif??cil entender lo que una persona est?? diciendo si hay ruidos alrededor.</td>
                                        <td><?php echo $data15['total15'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Prefiero escuchar una conferencia o una grabaci??n a leer un libro.</td>
                                        <td><?php echo $data16['total16'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Puedo seguir f??cilmente a una persona que est?? hablando aunque mi cabeza est?? hacia abajo o me encuentre mirando por la ventana.</td>
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
                                        <td>Me resulta dif??cil crear im??genes en mi cabeza.</td>
                                        <td><?php echo $data20['total20'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Me resulta ??til decir en voz alta las tareas que tengo para hacer.</td>
                                        <td><?php echo $data21['total21'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Al aprender algo nuevo, prefiero escuchar la informaci??n, luego leer y luego hacerlo.</td>
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
                                <!--Tabla 91 canales de aprendisaje auditivo-->
                            </div> 
                            <div class="carousel-item">
                                <!--Tabla 92 canales de aprendisaje Kinest??sico-->
                                <?php include "Datos_tablas/12_can_kin.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=2>Aprendizajes por canales Kinest??sicos</th>
                                    </tr>
                                    <tr>
                                        <th>Pregunta</th><th>Valores</th>
                                    </tr>
                                    <tr>
                                        <td>No me gusta leer o escuchar instrucciones, prefiero simplemente comenzar a hacer las cosas.</td>
                                        <td><?php echo $data25['total25'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Puedo estudiar mejor si escucho m??sica.</td>
                                        <td><?php echo $data26['total26'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Necesito recreos frecuentes cuando estudio.</td>
                                        <td><?php echo $data27['total27'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Pienso mejor cuando tengo la libertad de moverme, estar sentado detr??s de un escritorio no es para m?? escritorio no es para mi.</td>
                                        <td><?php echo $data28['total28'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Cuando no puedo pensar en una palabra espec??fica, uso mis manos y llamo al objeto "coso".</td>
                                        <td><?php echo $data29['total29'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Cuando comienzo un art??culo o un libro, prefiero espiar la ??ltima p??gina.</td>
                                        <td><?php echo $data30['total30'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Tomo notas, pero nunca vuelvo a releerlas.</td>
                                        <td><?php echo $data31['total31'];?></td>
                                    </tr>
                                    <tr>
                                        <td>PMi cuaderno y mi escritorio pueden verse un desastre, pero s?? exactamente d??nde est?? cada cosa.</td>
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
                                        <td>Para obtener una calificaci??n extra, prefiero crear un proyecto a escribir un  informe.</td>
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
                                <!--Tabla 92 canales de aprendisaje Kinest??sico-->
                            </div>
                        </div>
                        <!-- controles derecha-izquierda -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo17" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo17" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>    
                    </div> 
                    <!--fin sub-seccion 1-->
                    <!--inicio sub-seccion 2-->
                    <section id="sec8.1">
                        <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Resultados totales del test para determinar el canal de aprendizaje
                            </h3>
                        </div>
                        <!--Tabla total canales-->
                        <?php $total = $vis+$aud+$kin;?>
                        <table border="1" style="margin: 0 auto;">
                            <tr>
                                <th colspan=3>Total aprendizajes</th>
                            </tr>
                            <tr>
                                <th>Categoria</th><th>Total</th><th>Porcentaje %</td>
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
                                <td>Kinest??sico</td>
                                <td><?php echo ($kin);?></td>
                                <td><?php echo round(($kin/$total)*100,2);?></td>
                            </tr> 
                            <tr>
                                <td>Total categorias</td>
                                <td><?php echo ($total);?></td>
                                <td><?php echo round(($total/$total)*100,2);?></td>
                            </tr>  
                        </table>
                        <!--Tabla total canales-->                      
                    </section>
                    <!--fin sub-seccion 2-->
                </section>
                <!--fin seccion 8-->
            </div>
		<?php
			}  // Fin al no darle en buscar
		?>
    <?php include ("../../../C_conexion.php")?>
</body>
</html> 

