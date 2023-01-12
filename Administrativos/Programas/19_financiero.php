<!DOCTYPE html>
<html>
    <head>
	    <?php include ("../../Estructura/head.php")?>
    </head>
	<style>
        body { 
  			background-image: url("../../Imagenes/fondo4.jpg");
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
            padding: 0.1% 250%;
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
        
        .dropdown2:hover .dropdown-content2 {display: block;}

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
        <?php include ("../../A_conexion.php")?>
        <?php error_reporting (0);?>   
        <header>
            <div class="salida" style="text-align:right;">
                <a href="../reportes.php" style="font-size:160%;color:#ffffff;">
                    Inicio &nbsp;
                </a>
                <a href="../1_acompañamiento.php" style="font-size:160%;color:#ffffff;">
                    Regresar &nbsp;
                </a>
                <a href="../../../index.html"><img src="../../Imagenes/salir.png" style="width:7%;"/></a>
            </div> 
            <div class="Titulo" style="text-align:center;">
                <h1 style="color:#ffffff;">
                    Departamento Financiero
                </h1>
            </div>
        </header> 
        <div class="dropdown2">
            <button class="dropbtn2">Cargo</button>
            <div class="dropdown-content2">
            <form action="1_acompañamiento.php" method="post">
                    <select type="number" name="cargo" id="Cargo">
                        <?php include ("../../Estructura/Listas/cargos.php")?>
                    </select>
                    <input type="submit" value="Buscar" name="Buscar">
                </form>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Categorias</button>
            <div class="dropdown-content">
                <ul style="list-style-type:none;">
                    <li><a href="#sec2">General</a></li>
                    <li><a href="#sec3">Mediación tecnológica</a></li>
                        <ul style="list-style-type:none;">
                            <li><a href="#sec3.1">Calificación de conocimientos ofimaticos</a></li>
                            <li><a href="#sec3.2">Calificación de conocimientos sobre internet y aplicaciones web</a></li>
                            <li><a href="#sec3.3">Calificación de conocimientos sobre las aplicaciones de google</a></li>
                            <li><a href="#sec3.4">Calificación de uso y frecuenencia de los sistemas institucionales</a></li>
                        </ul>
                    <li><a href="#sec4">Gestión de la Información</a></li>
                    <li><a href="#sec5">Comunicación Digital</a></li>
                        <ul style="list-style-type:none;">
                            <li><a href="#sec5.1">Califiación de frecuencia de uso de redes sociales</a></li>
                        </ul>
                    <li><a href="#sec6">Identidad Digital</a></li>
                        <ul style="list-style-type:none;">
                            <li><a href="#sec6.1">Calificación segun la frecuencia de uso cotidiano de netiqueta</a></li>
                        </ul>
                    <li><a href="#sec7">Aprendizaje Continuo</a></li>
                </ul>
            </div>
        </div>
        <?php
            $areas = 1;
            $area = 19;
            $car = $_POST['cargo'];
            if(isset($_POST["Buscar"])){//inicio al darle en buscar
        ?>
            <?php include "cargos.php";?>
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
                                <!--Tabla 2 cargo de administrativos-->
                                <?php 	$tamaño = 8;
                                        $columna = "Cargo";
                                        $dat01 = 1;
                                        $dat02 = 2;
                                        $dat03 = 3;
                                        $dat04 = 4;
                                        $dat05 = 5;
                                        $dat06 = 6;
                                        $dat07 = 7;
                                        $dat08 = 8;
                                        include "../Datos_tablas/0_consultas.php";
                                ?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>Cargos ocupados</th>
                                    </tr>
                                    <tr>
                                        <th>Rol</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Auxiliar operativo</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Auxiliar administrativo</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Profesional administrativo</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Coordinador de área</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Directivo</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Director de programa</td>
                                        <td><?php echo $data6['total6'];?></td>
                                        <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Aprendiz</td>
                                        <td><?php echo $data7['total7'];?></td>
                                        <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Practicante</td>
                                        <td><?php echo $data8['total8'];?></td>
                                        <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 2 cargo de administrativos-->
                            </div>
                            <div class="carousel-item">
                                <!--Tabla 3 Tipo de documento de administrativos-->
                                <?php 	$tamaño = 5;
                                        $columna = "Documento";
                                        $d1 = "TI";
                                        $d2 = "CC";
                                        $d3 = "PA";
                                        $d4 = "CE";
                                        include "../Datos_tablas/0_consultas.php";
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
                                <!--Tabla 3 Tipo de documento de administrativos-->
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
                            Mediación tecnológica
                        </h2>
                    </div>
                    <!--inicio sub-seccion 1-->
                    <div id="demo2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                        <div class="carousel-inner">
                            <div class="carousel-item active"> 
                                <!--Tabla 4 habilidades digitales-->
                                <?php 	$tamaño = 4;
                                        $columna = "Habilidades_digitales";
                                        $do1 = "Basico";
                                        $do2 = "Intermedio";
                                        $do3 = "Avanzado";
                                        include "../Datos_tablas/0_consultas.php";
                                ?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>¿Cómo evalua qué son sus habilidades digitales para dar respuesta a los requerimientos, actividades y tareas académicas?</th>
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
                                <!--Tabla 4 habilidades digitales-->
                            </div>  
                            <div class="carousel-item"> 
                                <!--Tabla 5 Servicios de la ucp-->
                                <?php 	$tamaño = 3;
                                        $dt1 = "Si";
                                        $dt2 = "No";
                                        $columna = "Servicios_ucp";
                                        include "../Datos_tablas/0_consultas.php";
                                ?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>¿Conoce todos los servicios disponibles para los estudiantes, en la Página Web de la Universidad?</th>
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
                                <!--Tabla 5 Servicios de la ucp-->
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
                                Calificación de conocimientos ofimaticos
                            </h3>
                        </div>
                        <div id="demo3" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 6 habilidades procesador de texto-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_texto";
                                            $d1 = "Ninguno";
                                            $d2 = "Basico";
                                            $d3 = "Avanzado";
                                            $d4 = "Experto";
                                            include "../Datos_tablas/0_onsultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Procesador de texto</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 6 habilidades procesador de texto-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 7 habilidades hoja de calculo-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_calculo";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Hoja de calculo</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 7 habilidades hoja de calculo-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 8 habilidades presentacion-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_presentacion";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Herramientas de presentación</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 8 habilidades presentacion-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 9 habilidades datos-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_datos";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Bases de datos</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 9 habilidades datos-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 10 habilidades herramientas-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_herramientas";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Utilidades (agendas, calculadoras, etc)</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 10 habilidades herramientas-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 11 habilidades correo-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_correo";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Programas de correo electrónico, de voz, mensajería.</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 11 habilidades correo-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 12 habilidades hardware-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_hardware";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Manejo básico de Hardware (impresoras, teclado, mouse)</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 12 habilidades hardware-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 13 habilidades software-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_software";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Software: sistemas operativos y aplicaciones</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 13 habilidades software-->
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
                                Califiación de conocimientos sobre internet y aplicaciones web
                            </h3>
                        </div>
                        <div id="demo4" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 14 habilidades Navegadores-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_navegador";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Navegadores</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 14 habilidades Navegadores-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 15 habilidades Buscadores-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_buscadores";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Buscadores</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 15 habilidades Buscadores-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 16 habilidades Correo electronico-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_correo_electronico";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Correo electronico</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 16 habilidades Correo electronico-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 17 Seguridad en internet-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_seguridad";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Seguridad en internet</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 17 Seguridad en internet-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 18 Web2-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_web2";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Web 2.0</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 18 Web2-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 19 Web3-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_web3";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Web 3.0</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 19 Web3-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 20 Web4-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_web4";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Web 4.0</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 20 Web4-->
                                </div>
                                <div class="carousel-item"> 
                                    <!--Tabla 21 habilidades Redes sociales-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_redes_sociales";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Redes sociales</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 21 habilidades Redes sociales-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 22 habilidades Foros y grupos de discusión-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_foros";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Foros y grupos de discusión</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 22 habilidades Foros y grupos de discusión-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 23 habilidades Blogs-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_blogs";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Blogs</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 23 habilidades Blogs-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 24 habilidades Servicios en la nube (Dropbox, Drive, etc)-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_nube";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Servicios en la nube (Dropbox, Drive, etc)</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 24 habilidades Servicios en la nube (Dropbox, Drive, etc)-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 25 habilidades Video conferencia (Meet, Zoom, otro)-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_conferencias";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Video conferencia (Meet, Zoom, otro)</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 25 habilidades Video conferencia (Meet, Zoom, otro)-->
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
                                Califiación de conocimientos sobre las aplicaciones de google
                            </h3>
                        </div>
                        <div id="demo5" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 26 habilidades Búsqueda-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_buscador";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Búsqueda</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 26 habilidades Búsqueda-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 27 habilidades Correo-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_correos";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Correo</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 267 habilidades Correo-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 28 habilidades Calendario-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_calendario";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Calendario</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 28 habilidades Calendario-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 29 Drive-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_drive";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Drive</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 29 Seguridad en Drive-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 30 habilidades Documentos-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_documentos";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Documentos</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 30 habilidades Documentos-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 31 habilidades Hoja de Cálculo-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_calculos";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Hoja de Cálculo</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 31 habilidades Hoja de Cálculo-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 32 habilidades Presentaciones-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_presentaciones";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Presentaciones</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 32 habilidades Presentaciones-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 33 habilidades Formularios-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_formularios";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Formularios</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 33 habilidades Formularios-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 34 habilidades Keep-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_keep";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Keep</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 34 habilidades Keep-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 35 habilidades Jamboard-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Habilidades_jamboard";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Jamboard</th>
                                        </tr>
                                        <tr>
                                            <th>Califiación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 35 habilidades Jamboard-->
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
                                Califiación de uso y frecuenencia de los sistemas institucionales
                            </h3>
                        </div>
                        <div id="demo6" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 36-->
                                    <?php 	$tamaño = 9;
                                            $columna = "2.1_Moodle";
                                            include "../Datos_tablas/0_consultas.php";
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
                                    <!--Tabla 36-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 37-->
                                    <?php 	$tamaño = 9;
                                            $columna = "2.2_Sistema_academico";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Sistemas academicos</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <?php 	$tamaño = 9;
                                            $columna = "2.3_Bases_datos";
                                            include "../Datos_tablas/0_consultas.php";
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
                                    <?php 	$tamaño = 9;
                                            $columna = "2.4_Catalogo";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Catalogo</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <?php 	$tamaño = 9;
                                            $columna = "2.5_Repositorio";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Ribuc</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <?php 	$tamaño = 9;
                                            $columna = "2.6_Publicaciones";
                                            include "../Datos_tablas/0_consultas.php";
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
                                    <?php 	$tamaño = 9;
                                            $columna = "2.7_Libros";
                                            include "../Datos_tablas/0_consultas.php";
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
                                <div class="carousel-item"> 
                                    <!--Tabla 43-->
                                    <?php 	$tamaño = 9;
                                            $columna = "2.8_Yeminus";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Yeminus</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 43-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 44-->
                                    <?php 	$tamaño = 9;
                                            $columna = "2.9_Intranet";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Intranet</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 44-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 45-->
                                    <?php 	$tamaño = 9;
                                            $columna = "2.10_Sevenet";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Sevenet</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 45-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 46-->
                                    <?php 	$tamaño = 9;
                                            $columna = "2.11_Sar";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">SAR</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 46-->
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
                            Gestión de la Información
                        </h2>
                    </div>
                    <!--inicio sub-seccion 1-->
                    <div id="demo7" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!--Tabla 47 guardar informacion-->
                                <?php include "../Datos_tablas/2_guardar.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>¿Cómo guarda la información?</th>
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
                                        <td>Me envío la información por e-mail para guardarla</td>
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
                                <!--Tabla 47 guardar informacion-->
                            </div> 
                            <div class="carousel-item">
                                <!--Tabla 48 contrastar informacion-->
                                <?php include "../Datos_tablas/3_contrastar.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>¿Contrasta con diferentes fuentes: la calidad, fiabilidad y pertinencia de la información que obtiene en Internet? </th>
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
                                        <td>Lo que aparece en los medios de comunicación siempre es cierto</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Yo reenvío todo lo que me llega, nunca me equivoco</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Cuando me llega algo demasiado sorprendente siempre contrasto con otras fuentes</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Busco de forma activa y tengo el sentido crítico muy despierto</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 48 contrastar informacion-->
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
                </section>
                <!--fin seccion 4-->
            </div>
            <div class="contenedor">
                <!--inicio seccion 5-->
                <section id="sec5">
                    <div class ="titulo">
                        <h2 style="margin: 0 auto;">
                            Comunicación Digital
                        </h2>
                    </div>
                    <!--inicio sub-seccion 1-->
                    <div id="demo12" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!--Tabla 49 uso redes sociales-->
                                <?php 	$tamaño = 6;
                                        $columna = "Uso_redes_sociales";
                                        $da1 = "Respuesta1";
                                        $da2 = "Respuesta2";
                                        $da3 = "Respuesta3";
                                        $da4 = "Respuesta4";
                                        $da5 = "Respuesta5";
                                        include "../Datos_tablas/0_consultas.php";
                                ?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>¿Cómo utiliza las Redes Sociales?</th>
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
                                        <td>Las utilizo como fuente de información más allá del ámbito personal</td>
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
                                <!--Tabla 49 uso redes sociales-->
                            </div> 
                            <div class="carousel-item">
                                <!--Tabla 50 criterio-->
                                <?php 	$tamaño = 5;
                                        $columna = "Criterios";
                                        $d1 = "Respuesta1";
                                        $d2 = "Respuesta2";
                                        $d3 = "Respuesta3";
                                        $d4 = "Respuesta4";
                                        include "../Datos_tablas/0_consultas.php";
                                ?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>Cuando tiene que comunicarse con una persona ¿cuál de los siguientes criterios utiliza?</th>
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
                                        <td>Principalmente el e-mail o teléfono</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Envío un e-mail y si quiero que me contesten rápido, también un WhatsApp y luego una llamada</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Dependiendo del mensaje utilizo un canal u otro: e-mail no es para todo y sé que no es eficiente</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 50 criterio-->
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
                                Califiación de frecuencia de uso de redes sociales
                            </h3>
                        </div>
                        <div id="demo13" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 51 redes sociales-->
                                    <?php 	$tamaño = 7;
                                            $columna = "Whatsapp";
                                            $dat1 = "0";
                                            $dat2 = "1";
                                            $dat3 = "2";
                                            $dat4 = "3";
                                            $dat5 = "4";
                                            $dat6 = "5";
                                            include "../Datos_tablas/0_consultas.php";
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
                                    <!--Tabla 51 redes sociales-->
                                </div>
                      		    <div class="carousel-item">
                                    <!--Tabla 52 redes sociales-->
                                    <?php 	$tamaño = 7;
                                            $columna = "Facebook";
                                            include "../Datos_tablas/0_consultas.php";
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
                                    <!--Tabla 52 redes sociales-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 53 redes sociales-->
                                    <?php 	$tamaño = 7;
                                            $columna = "Youtube";
                                            include "../Datos_tablas/0_consultas.php";
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
                                    <!--Tabla 53 redes sociales-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 54 redes sociales-->
                                    <?php 	$tamaño = 7;
                                            $columna = "Instagram";
                                            include "../Datos_tablas/0_consultas.php";
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
                                    <!--Tabla 54 redes sociales-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 55 redes sociales-->
                                    <?php 	$tamaño = 7;
                                            $columna = "Twitter";
                                            include "../Datos_tablas/0_consultas.php";
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
                                    <!--Tabla 55 redes sociales-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 56 redes sociales-->
                                    <?php 	$tamaño = 7;
                                                $columna = "Linkedin";
                                                include "../Datos_tablas/0_consultas.php";
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
                                        <!--Tabla 56 redes sociales-->
                                </div>
                                <div class="carousel-item">
                                        <!--Tabla 57 redes sociales-->
                                        <?php 	$tamaño = 7;
                                                $columna = "Tiktok";
                                                include "../Datos_tablas/0_consultas.php";
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
                                        <!--Tabla 57 redes sociales-->
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
                                <!--Tabla 58 privasidad-->
                                <?php 	$tamaño = 5;
                                        $columna = "Privasidad";
                                        $d1 = "Respuesta1";
                                        $d2 = "Respuesta2";
                                        $d3 = "Respuesta3";
                                        $d4 = "Respuesta4";
                                        include "../Datos_tablas/0_consultas.php";
                                ?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>¿Cómo afecta internet a lo público/privado?</th>
                                    </tr>
                                    <tr>
                                        <th>Respuesta</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>En Internet todo es público</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>En Internet los dos ámbitos están expuestos y no se pueden gestionar</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Yo gestiono mi privacidad y presencia en Internet de forma activa</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>En Internet lo dos ámbitos están expuestos y podemos controlarlos</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 58 privasidad-->
                            </div>  
                            <div class="carousel-item">
                                <!--Tabla 59 netiqueta -->
                                <?php 	$tamaño = 3;
                                        $columna = "Netiqueta";
                                        include "../Datos_tablas/0_consultas.php";
                                ?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>¿Sabe qué es netiqueta?</th>
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
                                <!--Tabla 59 netiqueta -->
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
                                Calificación de la frecuencia de uso cotidiano de netiqueta
                            </h3>
                        </div>
                        <div id="demo15" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 60 netiqueta-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Trato";
                                            $d1 = "A veces";
                                            $d2 = "Muchas veces";
                                            $d3 = "Siempre";
                                            $d4 = "No";
                                            include "../Datos_tablas/0_consultas.php";
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
                                    <!--Tabla 60 netiqueta-->
                                </div>
                      		    <div class="carousel-item">
                                    <!--Tabla 61 netiqueta-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Ignorar";
                                            include "../Datos_tablas/0_consultas.php";
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
                                    <!--Tabla 61 netiqueta-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 62 netiqueta-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Breve";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Soy breve y conciso con lo que envío</th>
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
                                    <!--Tabla 62 netiqueta-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 63 netiqueta-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Preocupacion";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Me preocupo por la redacción y gramática</th>
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
                                    <!--Tabla 63 netiqueta-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 64 netiqueta-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Demas";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Me pongo en el lugar de los demás</th>
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
                                    <!--Tabla 64 netiqueta-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 65 netiqueta-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Respeto";
                                            include "../Datos_tablas/0_consultas.php";
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
                                    <!--Tabla 65 netiqueta-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 66 netiqueta-->
                                    <?php 	$tamaño = 5;
                                            $columna = "Mucho_texto";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan=3>Escribo mucho texto en mayúscula</th>
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
                                    <!--Tabla 66 netiqueta-->
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
                            Aprendizaje continuo
                        </h2>
                    </div>
                    <div id="demo16" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!--Tabla 67 -->
                                <?php include "../Datos_tablas/4_aprendizaje.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>¿Cómo aprende cosas nuevas?</th>
                                    </tr>
                                    <tr>
                                        <th>Respuestas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Sólo aprendo de verdad yendo a clase</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Busco presentaciones y vídeos por Internet</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Suelo leer muchas noticias y enlaces por Internet</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Leo de forma periódica libros o ebooks</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>A partir de explicar, escribir, estructurar y analizar las nuevas ideas que descubro</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>A partir de notas y resúmenes de aquello que me interesa</td>
                                        <td><?php echo $data6['total6'];?></td>
                                        <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Otra</td>
                                        <td><?php echo $data['total']-$data7['total7'];?></td>
                                        <td><?php echo round((($data['total']-$data7['total7'])/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 67 -->
                            </div>
                            <div class="carousel-item">
                                <!--Tabla 68 -->
                                <?php include "../Datos_tablas/5_necesidad.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>Cuando necesita algún software o aplicación... </th>
                                    </tr>
                                    <tr>
                                        <th>Respuestas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Se lo pide a algún conocido o familiar</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Se queda con las ganas</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>No suele necesitar nada</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Lo baja directamente de Internet</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Consulta el tipo de licencia que requiere y la compra</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 68 -->
                            </div>
                            <div class="carousel-item">
                                <!--Tabla 69 -->
                                <?php include "../Datos_tablas/6_contenido.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>¿Qué tipo de contenido le interesa mirar en internet?</th>
                                    </tr>
                                    <tr>
                                        <th>Respuestas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Noticias</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Series</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Juegos</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Nuevas aplicaciones</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Aplicaciones educativas</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Contenidos relacionados con mi profesión o mi labor</td>
                                        <td><?php echo $data6['total6'];?></td>
                                        <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 69 -->
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
        <?php
            }  // Fin al no darle en buscar
        ?>
        <?php include ("../../C_conexion.php")?>
    </body>
</html> 