<!DOCTYPE html>
<html lang="en-EN">
    <title>Caracterizacion UCP</title>
    <head>
        <?php include ("../Estructura/head.php")?>
        <link rel="stylesheet" type="text/css" href="../css/general.css" title="style" />
    </head>
    <body> 
        <div class="container w-100 mw-100"><!-- container w-100 mw-100 -->
            <?php include ("../A_conexion.php")?>
            <?php error_reporting (0);?>
            <div class="topnav"><!-- topnav -->
                <img src="../Imagenes/Ucp.png" alt="Logo">
                <button type="submit" class="btn btn-light" name="B1" id="imprimir"><a><i class="fa fa-print"></i></a></button>
                <button type="submit" class="btn btn-light" name="B1"><a href="../inicio.php">Salir <i class="fa fa-sign-out"></i></a></button>
                <button type="submit" class="btn btn-light" name="B1"><a href="../caracterizaciones.php">Inicio</a></button>
                <button type="submit" class="btn btn-light" name="B1"><a href="general.php">Regresar</a></button>
                <div class="dropdown">
                    <button class="dropbtn">Areas <i class="fa fa-angle-down"></i></button>
                    <div class="dropdown-content">
                        <ul style="list-style-type:none;">
                            <li><a href="Arquitectura/arquitectura.php">En desarrollo</a></li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Cargo <i class="fa fa-angle-down"></i></button>
                    <div class="dropdown-content">
                        <form action="general.php" method="post">
                            <select type="number" name="cargo" id="cargo">
                                <?php include ("../Estructura/Listas/cargos.php")?>
                            </select>
                            <input type="submit" value="Buscar" name="Buscar">
                        </form>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Categorias <i class="fa fa-angle-down"></i></button>
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
            </div><!-- topnav -->
            <div class="topnav2">
                <h1>Diagnóstico de competencias TIC / Administrativos</h1>
		    </div>
            <div class="content"><!-- content -->
                <div class="sidenav"><!-- sidenav -->
                    <?php
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
                                            <!--Tabla 1 Administradores-->
                                            <?php
                                                    $columna = "Programa";
                                                    include "Datos_tablas/1_programa.php";
                                            ?>
                                            <table border="1" style="margin: 0 auto;">
                                            <tr>
                                                <th colspan=3>Áreas y dependencias</th>
                                            </tr>
                                            <tr>
                                                <th>Programa</th><th>Frecuencia</th><th>Porcentaje %</th>
                                            </tr>
                                            <tr>
                                                <td>Acompañamiento académico</td>
                                                <td><?php echo $data1['total1'];?></td>
                                                <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                                            </tr>
                                            <tr>
                                                <td>Administración de Empresas</td>
                                                <td><?php echo $data2['total2'];?></td>
                                                <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                                            </tr>
                                            <tr>
                                                <td>Admisiones y registro</td>
                                                <td><?php echo $data3['total3'];?></td>
                                                <td><?php echo round(($data3['total3']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Almacén</td>
                                                <td><?php echo $data4['total4'];?></td>
                                                <td><?php echo round(($data4['total4']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Arquitectura</td>
                                                <td><?php echo $data5['total5'];?></td>
                                                <td><?php echo round(($data5['total5']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Biblioteca Cardenal Darío Castrillón Hoyos</td>
                                                <td><?php echo $data6['total6'];?></td>
                                                <td><?php echo round(($data6['total6']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Bienestar Social</td>
                                                <td><?php echo $data7['total7'];?></td>
                                                <td><?php echo round(($data7['total7']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Centro de Actividades Culturales</td>
                                                <td><?php echo $data8['total8'];?></td>
                                                <td><?php echo round(($data8['total8']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Centro de Atención Psicológica (CPSI)</td>
                                                <td><?php echo $data9['total9'];?></td>
                                                <td><?php echo round(($data9['total9']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Centro de Familia</td>
                                                <td><?php echo $data10['total10'];?></td>
                                                <td><?php echo round(($data10['total10']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Centro de Graduados</td>
                                                <td><?php echo $data11['total11'];?></td>
                                                <td><?php echo round(($data11['total11']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Centro de Idiomas (CIUC)</td>
                                                <td><?php echo $data12['total12'];?></td>
                                                <td><?php echo round(($data12['total12']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Centro de Innovación Educativa</td>
                                                <td><?php echo $data13['total13'];?></td>
                                                <td><?php echo round(($data13['total13']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Centro de Medios</td>
                                                <td><?php echo $data14['total14'];?></td>
                                                <td><?php echo round(($data14['total14']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Comunicación Social – Periodismo</td>
                                                <td><?php echo $data15['total15'];?></td>
                                                <td><?php echo round(($data15['total15']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Comunicaciones</td>
                                                <td><?php echo $data16['total16'];?></td>
                                                <td><?php echo round(($data16['total16']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Departamento de Ciencias Básicas</td>
                                                <td><?php echo $data17['total17'];?></td>
                                                <td><?php echo round(($data17['total17']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Departamento de Humanidades</td>
                                                <td><?php echo $data18['total18'];?></td>
                                                <td><?php echo round(($data18['total18']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Departamento Financiero</td>
                                                <td><?php echo $data19['total19'];?></td>
                                                <td><?php echo round(($data19['total19']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Desarrollo Humano</td>
                                                <td><?php echo $data20['total20'];?></td>
                                                <td><?php echo round(($data20['total20']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Dirección Administrativa y Financiera</td>
                                                <td><?php echo $data21['total21'];?></td>
                                                <td><?php echo round(($data21['total21']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Dirección de Investigación e Innovación</td>
                                                <td><?php echo $data22['total22'];?></td>
                                                <td><?php echo round(($data22['total22']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Diseño Audiovisual</td>
                                                <td><?php echo $data23['total23'];?></td>
                                                <td><?php echo round(($data23['total23']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Diseño Industrial</td>
                                                <td><?php echo $data24['total24'];?></td>
                                                <td><?php echo round(($data24['total24']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Doctorado en Educación en Desarrollo Humano</td>
                                                <td><?php echo $data25['total25'];?></td>
                                                <td><?php echo round(($data25['total25']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Diseño Audiovisual</td>
                                                <td><?php echo $data26['total26'];?></td>
                                                <td><?php echo round(($data26['total26']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización en Arquitectura y Urbanismo Bioclimático</td>
                                                <td><?php echo $data27['total27'];?></td>
                                                <td><?php echo round(($data27['total27']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización en Ciberasesoría Financiera</td>
                                                <td><?php echo $data28['total28'];?></td>
                                                <td><?php echo round(($data28['total28']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización en Desarrollo de Software</td>
                                                <td><?php echo $data29['total29'];?></td>
                                                <td><?php echo round(($data29['total29']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización en Economía Pública y Gestión Territorial</td>
                                                <td><?php echo $data30['total30'];?></td>
                                                <td><?php echo round(($data30['total30']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización en Edumática</td>
                                                <td><?php echo $data31['total31'];?></td>
                                                <td><?php echo round(($data31['total31']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización en Finanzas</td>
                                                <td><?php echo $data32['total32'];?></td>
                                                <td><?php echo round(($data32['total32']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización en Gerencia de la Comunicación Corporativa</td>
                                                <td><?php echo $data33['total33'];?></td>
                                                <td><?php echo round(($data33['total33']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización en Gestión de la Construcción Sostenible</td>
                                                <td><?php echo $data34['total34'];?></td>
                                                <td><?php echo round(($data34['total34']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización en Gestión de Proyectos de Diseño e Innovación</td>
                                                <td><?php echo $data35['total35'];?></td>
                                                <td><?php echo round(($data35['total35']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización en Gestión Humana en las Organizaciones</td>
                                                <td><?php echo $data36['total36'];?></td>
                                                <td><?php echo round(($data36['total36']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización en intervenciones Psicosociales para la Reducción del Consumo de Sustancias Psicoactivas</td>
                                                <td><?php echo $data37['total37'];?></td>
                                                <td><?php echo round(($data37['total37']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización en Pedagogía y Desarrollo Humano</td>
                                                <td><?php echo $data38['total38'];?></td>
                                                <td><?php echo round(($data38['total38']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización en Producción con Calidad Total</td>
                                                <td><?php echo $data39['total39'];?></td>
                                                <td><?php echo round(($data39['total39']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización en Psicología Clínica</td>
                                                <td><?php echo $data40['total40'];?></td>
                                                <td><?php echo round(($data40['total40']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización en Psicología Social Comunitaria y Acción Psicosocial</td>
                                                <td><?php echo $data41['total41'];?></td>
                                                <td><?php echo round(($data41['total41']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización Psicología Clínica con Énfasis en Psicoterapia con Niños</td>
                                                <td><?php echo $data42['total42'];?></td>
                                                <td><?php echo round(($data42['total42']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Especialización Tecnológica en Empresas Agroindustriales</td>
                                                <td><?php echo $data43['total43'];?></td>
                                                <td><?php echo round(($data43['total43']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Facultad de Arquitectura y Diseño</td>
                                                <td><?php echo $data44['total44'];?></td>
                                                <td><?php echo round(($data44['total44']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Facultad de Ciencias Básicas e Ingeniería</td>
                                                <td><?php echo $data45['total45'];?></td>
                                                <td><?php echo round(($data45['total45']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Facultad de Ciencias Económicas y Administrativas</td>
                                                <td><?php echo $data46['total46'];?></td>
                                                <td><?php echo round(($data46['total46']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Facultad de Ciencias Humanas Sociales y de la Educación</td>
                                                <td><?php echo $data47['total47'];?></td>
                                                <td><?php echo round(($data47['total47']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Gestión del Campus</td>
                                                <td><?php echo $data48['total48'];?></td>
                                                <td><?php echo round(($data48['total48']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Gestión Humana</td>
                                                <td><?php echo $data49['total49'];?></td>
                                                <td><?php echo round(($data49['total49']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Gestión Tecnológica</td>
                                                <td><?php echo $data50['total50'];?></td>
                                                <td><?php echo round(($data50['total50']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Ingenería Industrial</td>
                                                <td><?php echo $data51['total51'];?></td>
                                                <td><?php echo round(($data51['total51']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Ingeniería de Sistemas y Telecomunicaciones</td>
                                                <td><?php echo $data52['total52'];?></td>
                                                <td><?php echo round(($data52['total52']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Internacionalización y Relaciones Interinstitucionales</td>
                                                <td><?php echo $data53['total53'];?></td>
                                                <td><?php echo round(($data53['total53']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Licenciatura en Educación Religiosa</td>
                                                <td><?php echo $data54['total54'];?></td>
                                                <td><?php echo round(($data54['total54']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Logistica y Servicios Generales</td>
                                                <td><?php echo $data55['total55'];?></td>
                                                <td><?php echo round(($data55['total55']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Maestría en Arquitectura y Urbanismo</td>
                                                <td><?php echo $data56['total56'];?></td>
                                                <td><?php echo round(($data56['total56']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Maestría en Estudios Culturales</td>
                                                <td><?php echo $data57['total57'];?></td>
                                                <td><?php echo round(($data57['total57']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Maestría en Finanzas</td>
                                                <td><?php echo $data58['total58'];?></td>
                                                <td><?php echo round(($data58['total58']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Maestría en Gestión de la Innovación</td>
                                                <td><?php echo $data59['total59'];?></td>
                                                <td><?php echo round(($data59['total59']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Maestría en Gestión de Proyectos</td>
                                                <td><?php echo $data60['total60'];?></td>
                                                <td><?php echo round(($data60['total60']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Maestría en Gestión del Desrrollo Regional</td>
                                                <td><?php echo $data61['total61'];?></td>
                                                <td><?php echo round(($data61['total61']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Maestría en Innovación Educativa</td>
                                                <td><?php echo $data62['total62'];?></td>
                                                <td><?php echo round(($data62['total62']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Maestría en Memoria y Escenarios Transicionales</td>
                                                <td><?php echo $data63['total63'];?></td>
                                                <td><?php echo round(($data63['total63']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Maestría en Mercadeo</td>
                                                <td><?php echo $data64['total64'];?></td>
                                                <td><?php echo round(($data64['total64']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Maestría en Pedagogía y Desarrollo Humano</td>
                                                <td><?php echo $data65['total65'];?></td>
                                                <td><?php echo round(($data65['total65']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Negocios Internacionales</td>
                                                <td><?php echo $data66['total66'];?></td>
                                                <td><?php echo round(($data66['total66']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Mercadeo</td>
                                                <td><?php echo $data67['total67'];?></td>
                                                <td><?php echo round(($data67['total67']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Pastoral Universitaria</td>
                                                <td><?php echo $data68['total68'];?></td>
                                                <td><?php echo round(($data68['total68']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Planeación</td>
                                                <td><?php echo $data69['total69'];?></td>
                                                <td><?php echo round(($data69['total69']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Practicas Académicas</td>
                                                <td><?php echo $data70['total70'];?></td>
                                                <td><?php echo round(($data70['total70']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Programa de Mercadeo</td>
                                                <td><?php echo $data71['total71'];?></td>
                                                <td><?php echo round(($data71['total71']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Proyección Social</td>
                                                <td><?php echo $data72['total72'];?></td>
                                                <td><?php echo round(($data72['total72']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Psicología</td>
                                                <td><?php echo $data73['total73'];?></td>
                                                <td><?php echo round(($data73['total73']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Punto de Bolsa Laboratorio de Econometría y Finanzas</td>
                                                <td><?php echo $data74['total74'];?></td>
                                                <td><?php echo round(($data74['total74']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Recreación y Deporte</td>
                                                <td><?php echo $data75['total75'];?></td>
                                                <td><?php echo round(($data75['total75']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Rectoría</td>
                                                <td><?php echo $data76['total76'];?></td>
                                                <td><?php echo round(($data76['total76']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Secretaría General</td>
                                                <td><?php echo $data77['total77'];?></td>
                                                <td><?php echo round(($data77['total77']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Técnico profesional en video DJ y sonido</td>
                                                <td><?php echo $data78['total78'];?></td>
                                                <td><?php echo round(($data78['total78']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Tecnología en Desarrollo de Software</td>
                                                <td><?php echo $data79['total79'];?></td>
                                                <td><?php echo round(($data79['total79']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Tecnología en Gestión de Empresas AgroIndustriales</td>
                                                <td><?php echo $data80['total80'];?></td>
                                                <td><?php echo round(($data80['total80']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Tecnología en Mercadeo</td>
                                                <td><?php echo $data81['total81'];?></td>
                                                <td><?php echo round(($data81['total81']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Tecnología en producción de imagen y sonido</td>
                                                <td><?php echo $data82['total82'];?></td>
                                                <td><?php echo round(($data82['total82']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Tecnología en Sistemas</td>
                                                <td><?php echo $data83['total83'];?></td>
                                                <td><?php echo round(($data83['total83']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Vicerrectoría Académica</td>
                                                <td><?php echo $data84['total84'];?></td>
                                                <td><?php echo round(($data84['total84']/$data['total'])*100,2);?>
                                            </tr>
                                            <tr>
                                                <td>Vicerrectoría de Proyecto de Vida</td>
                                                <td><?php echo $data85['total85'];?></td>
                                                <td><?php echo round(($data85['total85']/$data['total'])*100,2);?>
                                            </tr>
                                            </table>
                                            <!--Tabla 1 Administradores-->
                                        </div>
                                        <div class="carousel-item">
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
                                                    include "Datos_tablas/0_consultas.php";
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
                                                    include "Datos_tablas/0_consultas.php";
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
                                                    include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_onsultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                <!--Tabla 36-->
                                            </div> 
                                            <div class="carousel-item">
                                                <!--Tabla 37-->
                                                <?php 	$tamaño = 9;
                                                        $columna = "2.2_Sistema_academico";
                                                        include "Datos_tablas/0_consultas.php";
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
                                                <?php 	$tamaño = 9;
                                                        $columna = "2.4_Catalogo";
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                <?php 	$tamaño = 9;
                                                        $columna = "2.7_Libros";
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
                                            <div class="carousel-item"> 
                                                <!--Tabla 43-->
                                                <?php 	$tamaño = 9;
                                                        $columna = "2.8_Yeminus";
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                            <?php include "Datos_tablas/2_guardar.php";?>
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
                                            <?php include "Datos_tablas/3_contrastar.php";?>
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
                                                    include "Datos_tablas/0_consultas.php";
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
                                                    include "Datos_tablas/0_consultas.php";
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
                                                <!--Tabla 51 redes sociales-->
                                            </div>
                                            <div class="carousel-item">
                                                <!--Tabla 52 redes sociales-->
                                                <?php 	$tamaño = 7;
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
                                                <!--Tabla 52 redes sociales-->
                                            </div>
                                            <div class="carousel-item">
                                                <!--Tabla 53 redes sociales-->
                                                <?php 	$tamaño = 7;
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
                                                <!--Tabla 53 redes sociales-->
                                            </div>
                                            <div class="carousel-item">
                                                <!--Tabla 54 redes sociales-->
                                                <?php 	$tamaño = 7;
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
                                                <!--Tabla 54 redes sociales-->
                                            </div>
                                            <div class="carousel-item">
                                                <!--Tabla 55 redes sociales-->
                                                <?php 	$tamaño = 7;
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
                                                <!--Tabla 55 redes sociales-->
                                            </div>
                                            <div class="carousel-item">
                                                <!--Tabla 56 redes sociales-->
                                                <?php 	$tamaño = 7;
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
                                                    <!--Tabla 56 redes sociales-->
                                            </div>
                                            <div class="carousel-item">
                                                    <!--Tabla 57 redes sociales-->
                                                    <?php 	$tamaño = 7;
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
                                                    include "Datos_tablas/0_consultas.php";
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
                                                    include "Datos_tablas/0_consultas.php";
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
                                                <!--Tabla 60 netiqueta-->
                                            </div>
                                            <div class="carousel-item">
                                                <!--Tabla 61 netiqueta-->
                                                <?php 	$tamaño = 5;
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
                                                <!--Tabla 61 netiqueta-->
                                            </div>
                                            <div class="carousel-item">
                                                <!--Tabla 62 netiqueta-->
                                                <?php 	$tamaño = 5;
                                                        $columna = "Breve";
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                        include "Datos_tablas/0_consultas.php";
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
                                                <!--Tabla 65 netiqueta-->
                                            </div>
                                            <div class="carousel-item">
                                                <!--Tabla 66 netiqueta-->
                                                <?php 	$tamaño = 5;
                                                        $columna = "Mucho_texto";
                                                        include "Datos_tablas/0_consultas.php";
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
                                            <?php include "Datos_tablas/4_aprendizaje.php";?>
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
                                            <?php include "Datos_tablas/5_necesidad.php";?>
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
                                            <?php include "Datos_tablas/6_contenido.php";?>
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
                </div><!-- sidenav -->
            </div><!-- content -->
            <?php include ("../C_conexion.php")?>
        </div><!-- container w-100 mw-100 -->
    <body> 
</html> 