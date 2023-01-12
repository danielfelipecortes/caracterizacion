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
                    Facultad de Ciencias Económicas y Administrativas
                </h1>
            </div>
        </header> 
        <div class="dropdown2">
            <button class="dropbtn2">Contratacion</button>
            <div class="dropdown-content2">
                <form action="8_economicas.php" method="post">
                    <select type="number" name="contrato" id="contrato">
                        <?php include ("../../Estructura/Listas/contrato.php")?>
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
                            <li><a href="#sec3.4">Calificación de conocimientos sobre redes sociales</a></li>
                            <li><a href="#sec3.5">Calificación de conocimientos sobre herramientas educativas</a></li>
                            <li><a href="#sec3.6">Calificación de manejo y frecuenencia de los sistemas institucionales</a></li>
                        </ul>
                    <li><a href="#sec4">Gestión de la Información</a></li>
                        <ul style="list-style-type:none;">
                            <li><a href="#sec4.1">Calificación de conocimientos de bases de datos</a></li>
                            <li><a href="#sec4.2">Calificación de conocimientos sobre software y otras herramientas para investigar</a></li>
                            <li><a href="#sec4.3">Calificación de conocimientos de poratales para la divulgación de la actividad académica</a></li>
                            <li><a href="#sec4.4">Calificación de uso de otros recursos electronicos para la busqueda de información académica</a></li>
                        </ul>
                    <li><a href="#sec5">Ubicación de competencias</a></li>
                </ul>
            </div>
        </div>
        <?php
            $programas = 1;
            $programa = 8;
            $con = $_POST['contrato'];
            if(isset($_POST["Buscar"])){//inicio al darle en buscar
        ?>
            <?php include "contratos.php";?>
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
                                <!--Tabla 2 -->
                                <?php 	$tamaño = 4;
                                        $columna = "Contratacion";
                                        $do1 = 1;
                                        $do2 = 2;
                                        $do3 = 3;
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
                                        <td>Docente catedrático</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Docente de planta</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Docente de medio tiempo</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 2 -->
                            </div>
                            <div class="carousel-item">
                                <!--Tabla 3 -->
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
                                <!--Tabla 3 -->
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
                            <div class="carousel-item  active"> 
                                <!--Tabla 4-->
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
                                <!--Tabla 4-->
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
                                    <!--Tabla 5-->
                                    <?php 	$tamaño = 9;
                                            $columnaa = "Habilidades_texto_a";
                                            $columnab = "Habilidades_texto_b";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Procesador de texto</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 5-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 6-->
                                    <?php 	$tamaño = 9;
                                            $columnaa = "Habilidades_calculo_a";
                                            $columnab = "Habilidades_calculo_b";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Hoja de Cálculo</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 6-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 7-->
                                    <?php 	$tamaño = 9;
                                            $columnaa = "Habilidades_presentacion_a";
                                            $columnab = "Habilidades_presentacion_a";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Herramientas de presentación</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 7-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 8-->
                                    <?php 	$tamaño = 9;
                                            $columnaa = "Habilidades_datos_a";
                                            $columnab = "Habilidades_datos_b";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Bases de datos</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 8-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 9-->
                                    <?php 	$tamaño = 9;
                                            $columnaa = "Habilidades_herramientas_a";
                                            $columnab = "Habilidades_herramientas_b";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Utilidades (agendas, calculadoras, etc)</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 9-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 10-->
                                    <?php 	$tamaño = 9;
                                            $columnaa = "Habilidades_correo_a";
                                            $columnab = "Habilidades_correo_b";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Programas de correo electrónico, de voz, mensajería.</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 10-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 11-->
                                    <?php 	$tamaño = 9;
                                            $columnaa = "Habilidades_hardware_a";
                                            $columnab = "Habilidades_hardware_b";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Manejo básico de Hardware (impresoras, teclado, mouse)</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 11-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 12-->
                                    <?php 	$tamaño = 9;
                                            $columnaa = "Habilidades_software_a";
                                            $columnab = "Habilidades_software_b";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Software: sistemas operativos y aplicaciones.</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 12-->
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
                                    <!--Tabla 13-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_navegador_a";
                                            $columnab = "Habilidades_navegador_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Navegadores</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 13-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 14-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_buscadores_a";
                                            $columnab = "Habilidades_buscadores_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Buscadores</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 14-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 15-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_correo_electronico_a";
                                            $columnab = "Habilidades_correo_electronico_b";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Correo electrónico</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 15-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 16-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_seguridad_a";
                                            $columnab = "Habilidades_seguridad_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Seguridad en internet</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 16-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 17-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_redes_sociales_a";
                                            $columnab = "Habilidades_redes_sociales_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Redes sociales</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 17-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 18-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_foros_a";
                                            $columnab = "Habilidades_foros_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Foros y grupos de discusión</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 18-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 19-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_blogs_a";
                                            $columnab = "Habilidades_blogs_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Blogs</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 19-->
                                </div>
                                <div class="carousel-item"> 
                                    <!--Tabla 20-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_nube_a";
                                            $columnab = "Habilidades_nube_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Servicios en la nube (Dropbox, Drive, etc)</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 20-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 21-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_conferencias_a";
                                            $columnab = "Habilidades_conferencias_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Video conferencia (Meet, Zoom, otro)</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 22-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 23-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_web2_a";
                                            $columnab = "Habilidades_web2_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Web 2.0</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 23-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 24-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_web3_a";
                                            $columnab = "Habilidades_web3_b";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Web 3.0</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 24-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 25-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_web4_a";
                                            $columnab = "Habilidades_web4_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Web 4.0</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 25-->
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
                                    <!--Tabla 26-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_buscador_a";
                                            $columnab = "Habilidades_buscador_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Búsqueda</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 26-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 27-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_correos_a";
                                            $columnab = "Habilidades_correos_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Correo</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 27-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 28-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_calendario_a";
                                            $columnab = "Habilidades_calendario_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Calendario</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 28-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 29-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_drive_a";
                                            $columnab = "Habilidades_drive_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Drive</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 29-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 30-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_documentos_a";
                                            $columnab = "Habilidades_documentos_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Documentos</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 30-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 31-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_calculos_a";
                                            $columnab = "Habilidades_calculos_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Hoja de Cálculo</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 31-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 32-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_presentaciones_a";
                                            $columnab = "Habilidades_presentaciones_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Presentaciones</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 32-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 33-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_formularios_a";
                                            $columnab = "Habilidades_formularios_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Formularios</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 33-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 34-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_keep_a";
                                            $columnab = "Habilidades_keep_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Keep</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 34-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 35-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Habilidades_tareas_a";
                                            $columnab = "Habilidades_tareas_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Tareas</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                Calificación de conocimientos sobre redes sociales
                            </h3>
                        </div>
                        <div id="demo6" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 36-->
                                    <?php   $tamaño = 9;
                                            $columnab = "Whatsapp_a";
                                            $columnaa = "Whatsapp_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Whatsapp</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <?php   $tamaño = 9;
                                            $columnab = "Facebook_a";
                                            $columnaa = "Facebook_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Facebook</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <?php   $tamaño = 9;
                                            $columnab = "Youtube_a";
                                            $columnaa = "Youtube_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Youtube</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <?php   $tamaño = 9;
                                            $columnab = "Instagram_a";
                                            $columnaa = "Instagram_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Instagram</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <?php   $tamaño = 9;
                                            $columnab = "Twitter_a";
                                            $columnaa = "Twitter_b";                                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Twitter</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <?php   $tamaño = 9;
                                            $columnab = "Linkedin_a";
                                            $columnaa = "Linkedin_b";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Linkedin</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <?php   $tamaño = 9;
                                            $columnab = "Tiktok_a";
                                            $columnaa = "Tiktok_b";                                            
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Tiktok</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                    <!--inicio sub-seccion 6-->
                    <section id="sec3.5">
                        <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Calificación de conocimientos sobre herramientas educativas
                            </h3>
                        </div>
                        <div id="demo7" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 43-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Docs_a";
                                            $columnab = "Docs_b";                       
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Google Docs / Drive</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <?php   $tamaño = 9;   
                                            $columnaa = "Kahoot_a";
                                            $columnab = "Kahoot_b";                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Kahoot</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Moodle_a";
                                            $columnab = "Moodle_b";                      
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
                                    <!--Tabla 45-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 46-->
                                    <?php   $tamaño = 9;   
                                            $columnaa = "Classroom_a";
                                            $columnab = "Classroom_b";                  
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Classroom</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                <div class="carousel-item"> 
                                    <!--Tabla 47-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Evernote_a";
                                            $columnab = "Evernote_b";                      
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Evernote</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 47-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 48-->
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Slideshare_a";
                                            $columnab = "Slideshare_b";                      
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Slideshare</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 48-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 49-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Prezi_a";
                                            $columnab = "Prezi_b";                          
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Prezi</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 49-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 50-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Blogger_a";
                                            $columnab = "Blogger_b";                          
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Blogger / Blogspot</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 50-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 51-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Edmodo_a";
                                            $columnab = "Edmodo_b";                         
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Edmodo</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 51-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 52-->
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Sites_a";
                                            $columnab = "Sites_b";                         
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Google Sites</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 52-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 53-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Powtoon_a";
                                            $columnab = "Powtoon_b";                          
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Powtoon</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 53-->
                                </div>
                                <div class="carousel-item">
                                    <!--Tabla 54-->
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Khan_a";
                                            $columnab = "Khan_b";                                
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Khan Academy</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 54-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 55-->
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Mindjet_a";
                                            $columnab = "Mindjet_b";                             
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Mindjet</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 55-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 56-->
                                    <?php   $tamaño = 9;   
                                            $columnaa = "Onenote_a";
                                            $columnab = "Onenote_b";                                       
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">OneNote</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 56-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 57-->
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Cam_a";
                                            $columnab = "Cam_b";                              
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">CamScanner</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 57-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 58-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Canva_a";
                                            $columnab = "Canva_b";                                       
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Canva</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 58-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 59-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Dropbox_a";
                                            $columnab = "Dropbox_b";                                       
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Dropbox</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 59-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 60-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Socrative_a";
                                            $columnab = "Socrative_b";                                      
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Socrative</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 60-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 61-->
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Expediciones_a";
                                            $columnab = "Expediciones_b";                                     
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Google Expediciones</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 61-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 62-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Wix_a";
                                            $columnab = "Wix_b";                                
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Wix</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 62-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 63-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Vyond_a";
                                            $columnab = "Vyond_b";                                                        
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Vyond</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 63-->
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
                    </section>
                    <!--fin sub-seccion 6-->
                    <!--inicio sub-seccion 7-->
                    <section id="sec3.6">
                        <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Califiación de uso y frecuenencia de los sistemas institucionales
                            </h3>
                        </div>
                        <div id="demo8" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 64-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Intranet_a";
                                            $columnab = "Intranet_b";                                
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
                                    <!--Tabla 64-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 65-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Portal_docente_a";
                                            $columnab = "Portal_docente_b";                               
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Portal docente</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 65-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 65-->
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Escalafon_a";
                                            $columnab = "Escalafon_b";                                
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Sistema de escalafón docente</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 65-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 66-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Publicaciones_a";
                                            $columnab = "Publicaciones_b";                       
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
                                    <!--Tabla 66-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 67-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Moodle_ucp_a";
                                            $columnab = "Moodle_ucp_b";                               
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
                                    <!--Tabla 67-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 68-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Datos_a";
                                            $columnab = "Datos_b";                               
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
                                    <!--Tabla 68-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 69-->
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Catalogo_a";
                                            $columnab = "Catalogo_b";                                
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Catálogo en línea de la biblioteca</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 69-->
                                </div>  
                                <div class="carousel-item"> 
                                    <!--Tabla 70-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Repositorio_a";
                                            $columnab = "Repositorio_b";                          
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">RibUC (Repositorio Institucional)</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 70-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 71-->
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Libros_a";
                                            $columnab = "Libros_b";                           
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Libros electrónicos</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 71-->
                                </div> 
                                <div class="carousel-item"> 
                                    <!--Tabla 72-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Gestion_a";
                                            $columnab = "Gestion_b";                                                                                          
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Sistema Integrado de Gestión</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 72-->
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
                    <!--fin sub-seccion 7-->
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
                    <section id="sec4.1">
                        <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Calificación de conocimientos de bases de datos
                            </h3>
                        </div>
                        <div id="demo9" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 73 -->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Scopus_a";
                                            $columnab = "Scopus_b";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Scopus</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 73-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 74-->
                                    <?php   $tamaño = 9;
                                            $columnaa = "Sage_a";
                                            $columnab = "Sage_b";    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Sage Journals</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 74-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 75-->
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Ebsco_a";
                                            $columnab = "Ebsco_b"; 
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">EBSCO</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 75-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 76-->
                                    <?php   $tamaño = 9;   
                                            $columnaa = "Legiscomex_a";
                                            $columnab = "Legiscomex_b";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Legiscomex</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 76-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 77-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Redalyc_a";
                                            $columnab = "Redalyc_b";  
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Redalyc</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 77-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 78-->
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Scielo_a";
                                            $columnab = "Scielo_b";  
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Scielo</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 78-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 79-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Dialnet_a";
                                            $columnab = "Dialnet_b";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Dialnet</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 79-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 80-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Science_a";
                                            $columnab = "Science_b";
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Science direct</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 80-->
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
                    <!--fin sub-seccion 1-->
                    <!--inicio sub-seccion 2-->
                    <section id="sec4.2">
                        <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Calificación de conocimientos sobre software y otras herramientas para investigar
                            </h3>
                        </div>
                        <div id="demo10" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 81 -->
                                    <?php   $tamaño = 9; 
                                            $columnab = "Zootero_a";
                                            $columnaa = "Zootero_b";                       
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Zootero</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 81-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 82-->
                                    <?php   $tamaño = 9; 
                                            $columnab = "Mendeley_a";
                                            $columnaa = "Mendeley_b";                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Mendeley</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 82-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 83-->
                                    <?php   $tamaño = 9; 
                                            $columnab = "Refworks_a";
                                            $columnaa = "Refworks_b";                     
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">RefWorks</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 83-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 84-->
                                    <?php   $tamaño = 9; 
                                            $columnab = "Atlasti_a";
                                            $columnaa = "Atlasti_b";                      
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">AtlasTI</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 84-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 85-->
                                    <?php   $tamaño = 9;  
                                            $columnab = "Spss_a";
                                            $columnaa = "Spss_b";                   
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Spss</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 85-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 86-->
                                    <?php   $tamaño = 9;  
                                            $columnab = "Turnitin_a";
                                            $columnaa = "Turnitin_b";                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Turnitin</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 86-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 87-->
                                    <?php   $tamaño = 9; 
                                            $columnab = "Plagium_a";
                                            $columnaa = "Plagium_b";                    
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Plagium</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 87-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 88-->
                                    <?php   $tamaño = 9;  
                                            $columnab = "Plagtracker_a";
                                            $columnaa = "Plagtracker_b";                                                                               
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">PlagTracker</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 88-->
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
                    <!--fin sub-seccion 2-->
                    <!--inicio sub-seccion 3-->
                    <section id="sec4.3">
                        <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Calificación de conocimientos de poratales para la divulgación de la actividad académica
                            </h3>
                        </div>
                        <div id="demo11" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 89 -->
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Researchgate_a";
                                            $columnab = "Researchgate_b";                                              
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Researchgate</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 89-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 90-->
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Google_academico_a";
                                            $columnab = "Google_academico_b";                                                
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">Google Académico</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 90-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 91-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "Cvlac_a";
                                            $columnab = "Cvlac_b";                                                                                                      
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">CvLAC</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 91-->
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
                    <!--fin sub-seccion 3-->
                    <!--inicio sub-seccion 4-->
                    <section id="sec4.4">
                        <div class ="titulo">
                            <h3 style="margin: 0 auto;">
                                Calificación de uso de otros recursos electronicos para la busqueda de información académica
                            </h3>
                        </div>
                        <div id="demo12" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!--Tabla 92 -->
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Ebooks_a";
                                            $columnab = "Ebooks_b";                                                                      
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">EBooks</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 92-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 93-->
                                    <?php   $tamaño = 9;  
                                            $columnaa = "Ribuc_a";
                                            $columnab = "Ribuc_b";                                                                 
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">RiBUC</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 93-->
                                </div> 
                                <div class="carousel-item">
                                    <!--Tabla 94-->
                                    <?php   $tamaño = 9; 
                                            $columnaa = "BiblioTechnia_a";
                                            $columnab = "BiblioTechnia_b";                                                                 
                                            include "../Datos_tablas/0_consultas.php";
                                    ?>
                                    <table border="1" style="margin: 0 auto;">
                                        <tr>
                                            <th colspan="2">BiblioTechnia</th><th>Frecuencia</th><th>Porcentaje %</th>
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
                                    <!--Tabla 94-->
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
                    </section>
                    <!--fin sub-seccion 4-->
                </section>
                <!--fin seccion 4-->
            </div>
            <div class="contenedor">
                <!--inicio seccion 5-->
                <section id="sec5">
                    <div class ="titulo">
                        <h2 style="margin: 0 auto;">
                            Ubicación de competencias
                        </h2>
                    </div>
                    <div id="demo13" class="carousel slide" data-bs-ride="carousel" data-bs-interval="0">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!--Tabla 95 -->
                                <?php include "../Datos_tablas/2_tecnologica.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>Ubicación de competencia tecnológica</th>
                                    </tr>
                                    <tr>
                                        <th>Respuestas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Identifico las características, usos y oportunidades que ofrecen las herramientas tecnológicas y medios audiovisuales, en los procesos educativos.</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Elaboro actividades de aprendizaje utilizando aplicativos, contenidos, herramientas informáticas y medios  audiovisuales.</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Evalúo la calidad, pertinencia y veracidad de la información disponible en diversos medios como portales educativos y especializados, motores de búsqueda y material audiovisual.</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Combino una amplia variedad de herramientas tecnológicas, para mejorar la planeación e implementación de mis prácticas educativas.</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Diseño y publico contenidos digitales u objetos virtuales de aprendizaje mediante el uso adecuado de herramientas tecnológicas.</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Analizo los riesgos y potencialidades de publicar y compartir distintos tipos de información a través de Internet.</td>
                                        <td><?php echo $data6['total6'];?></td>
                                        <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Utilizo herramientas tecnológicas complejas o especializadas para diseñar ambientes virtuales o aprendizaje que favorecen el desarrollo de competencias en mis estudiantes y la conformación de comunidades y/o redes de aprendizaje.</td>
                                        <td><?php echo $data7['total7'];?></td>
                                        <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Utilizo herramientas tecnológicas para ayudar a mis estudiantes a construir aprendizajes significativos y desarrollar pensamiento crítico.</td>
                                        <td><?php echo $data8['total8'];?></td>
                                        <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Aplico las normas de propiedad intelectual y licenciamiento existentes, referentes al uso de información ajena y propia.</td>
                                        <td><?php echo $data9['total9'];?></td>
                                        <td><?php echo round(($data9['total9']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 95 -->
                            </div>
                            <div class="carousel-item">
                                <!--Tabla 96 -->
                                <?php include "../Datos_tablas/3_pedagogica.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>Ubicación de competencia pedagógica</th>
                                    </tr>
                                    <tr>
                                        <th>Respuestas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Utilizo las TIC para aprender por iniciativa personal y para actualizar los conocimientos y prácticas propios de mi disciplina.</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Identifico problemáticas educativas en mi práctica docente y las oportunidades, implicaciones y riesgos del uso de las TIC para atenderlas.</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Conozco una variedad de estrategias y metodologías apoyadas por las TIC, para planear y hacer seguimiento a mi labor docente.</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Incentivo en mis estudiantes el aprendizaje autónomo y el aprendizaje colaborativo apoyados por TIC.</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Utilizo TIC con mis estudiantes para atender sus necesidades e intereses y proponer soluciones a problemas de aprendizaje.</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Implemento estrategias didácticas mediadas por TIC, para fortalecer en mis estudiantes aprendizajes que le permiten resolver problemas de la vida real.</td>
                                        <td><?php echo $data6['total6'];?></td>
                                        <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Diseño ambientes de aprendizaje mediados por TIC de acuerdo con el desarrollo cognitivo, físico, psicológico y social de mis estudiantes para fomentar el desarrollo de sus competencias.</td>
                                        <td><?php echo $data7['total7'];?></td>
                                        <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Propongo proyectos educativos mediados con TIC, que permiten la reflexión sobre el aprendizaje propio y la producción de conocimiento.</td>
                                        <td><?php echo $data8['total8'];?></td>
                                        <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Evalúo los resultados obtenidos con la implementación de estrategias que hacen uso de las TIC y promuevo una cultura del seguimiento, realimentación y mejoramiento permanente.</td>
                                        <td><?php echo $data9['total9'];?></td>
                                        <td><?php echo round(($data9['total9']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 96 -->
                            </div>
                            <div class="carousel-item">
                                <!--Tabla 97 -->
                                <?php include "../Datos_tablas/4_comunicativa.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>Ubicación de competencia comunicativa</th>
                                    </tr>
                                    <tr>
                                        <th>Respuestas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Me comunico adecuadamente con mis estudiantes y familiares, mis colegas e investigadores usando TIC de manera sincrónica y asincrónica.</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Navego eficientemente en internet integrando fragmentos de información presentados de forma no lineal.</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Evalúo la pertinencia de compartir información a través de canales públicos y masivos, respetando las normas de propiedad intelectual y licenciamento.</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Participa activamente en redes y practicas mediadas por TIC y facilito a la participación de mis estudiantes en las mismas, de una forma pertinente y respetuosa.</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Sistematizo y hago seguimiento a experiencias significativas de uso de TIC.</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Promuevo en la comunidad educativa comunicaciones efectivas que aportan al mejoramiento de los procesos de convivencia escolar.</td>
                                        <td><?php echo $data6['total6'];?></td>
                                        <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Utilizo variedad de textos e interfaces para transmitir información y expresar ideas propias combinando texto, audio, imágenes estáticas y dinámicas, videos y gestos.</td>
                                        <td><?php echo $data7['total7'];?></td>
                                        <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Interpreto y produzco íconos, símbolos, y otros símbolos de representación de la información, para ser  utilizados con propósitos educativos.</td>
                                        <td><?php echo $data8['total8'];?></td>
                                        <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Contribuyo con mis conocimientos y los de mis estudiantes a repositorios de la humanidad de internet, con textos de diversa naturaleza.</td>
                                        <td><?php echo $data9['total9'];?></td>
                                        <td><?php echo round(($data9['total9']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 97 -->
                            </div>
                            <div class="carousel-item">
                                <!--Tabla 98 -->
                                <?php include "../Datos_tablas/5_gestion.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>Ubicación de competencia de gestión</th>
                                    </tr>
                                    <tr>
                                        <th>Respuestas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Identifico los elementos de la gestión institucional que pueden ser mejorados con el uso de las TIC, en las diferentes actividades institucionales.</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Conozco políticas institucionales para el uso de las TIC que contemplan la privacidad, en impacto ambiental y la salud de los usuarios.</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Identifico mis necesidades de desarrollo profesional para la innovación educativa con TIC.</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Propongo y desarrollo procesos de mejoramiento y seguimiento del uso de TIC en la gestión institucional.</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Adopto políticas institucionales existentes para el uso de las TIC en trabajo que contemplan la privacidad, el impacto ambiental y la salud de los usuarios.</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Selecciono y accedo a programas de formación, apropiados para mis necesidades de desarrollo profesional, para la innovación educativa con TIC.</td>
                                        <td><?php echo $data6['total6'];?></td>
                                        <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Evalúo los beneficios y  utilidades de herramientas TIC en la gestión institucional y en la proyección del PEI dando respuesta a las necesidades de mi institución.</td>
                                        <td><?php echo $data7['total7'];?></td>
                                        <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Desarrollo políticas institucionales para el uso de las TIC en mi institución que contemplan la privacidad, el impacto ambiental y la salud de los usuarios.</td>
                                        <td><?php echo $data8['total8'];?></td>
                                        <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Dinamizo la formación de mis colegas y los apoyo para que integren las TIC de forma innovadora en sus prácticas pedagógicas.</td>
                                        <td><?php echo $data9['total9'];?></td>
                                        <td><?php echo round(($data9['total9']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 98 -->
                            </div>
                            <div class="carousel-item">
                                <!--Tabla 99 -->
                                <?php include "../Datos_tablas/6_investigacion.php";?>
                                <table border="1" style="margin: 0 auto;">
                                    <tr>
                                        <th colspan=3>Ubicación de competencia investigativa</th>
                                    </tr>
                                    <tr>
                                        <th>Respuestas</th><th>Frecuencia</th><th>Porcentaje %</th>
                                    </tr>
                                    <tr>
                                        <td>Documento observaciones de mi entorno y mi práctica con el apoyo de TIC.</td>
                                        <td><?php echo $data1['total1'];?></td>
                                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Identifico redes, bases de datos y fuentes de información que facilitan mis procesos de investigación.</td>
                                        <td><?php echo $data2['total2'];?></td>
                                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Sé buscar, ordenar, filtrar, conectar y analizar información disponible en internet.</td>
                                        <td><?php echo $data3['total3'];?></td>
                                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Represento e interpreto datos e información de mis investigaciones en diversos formatos digitales.</td>
                                        <td><?php echo $data4['total4'];?></td>
                                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Utilizo redes profesionales y plataformas especializadas en el desarrollo de mis investigaciones.</td>
                                        <td><?php echo $data5['total5'];?></td>
                                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Contrasto y analizo con mis estudiantes información proveniente de múltiples fuentes digitales.</td>
                                        <td><?php echo $data6['total6'];?></td>
                                        <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Divulgo los resultados de mis investigaciones utilizando las herramientas que ofrecen las TIC.</td>
                                        <td><?php echo $data7['total7'];?></td>
                                        <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Participo activamente en redes y comunidades de práctica, para la construcción colectiva de conocimientos con estudiantes y colegas, con el apoyo de TIC.</td>
                                        <td><?php echo $data8['total8'];?></td>
                                        <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Utilizo la información disponible en internet con una actitud crítica y reflexiva.</td>
                                        <td><?php echo $data9['total9'];?></td>
                                        <td><?php echo round(($data9['total9']/$data['total'])*100,2);?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $data['total'];?></td>
                                        <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                                    </tr>
                                </table>
                                <!--Tabla 99 -->
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
                <!--fin seccion 5-->
            </div>
        <?php
            }  // Fin al no darle en buscar
        ?>
        <?php include ("../C_conexion.php")?>
    </body>
</html> 