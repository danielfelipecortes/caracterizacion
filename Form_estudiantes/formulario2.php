<!DOCTYPE html>
<html lang="en-EN">
    <title>Caracterizacion UCP</title>
	<head>
		<?php include ("../Estructura/head.php")?>
        <link rel="stylesheet" type="text/css" href="../css/formulario.css" title="style" />
	</head>
	<body>
        <div class="container w-100 mw-100">

            <form action="form.php" method="post">
                <section id="sec1">
                    <div class="topnav">
                        <img src="../Imagenes/Ucp.png" alt="Logo">
                    </div>
                    <div class="content">
                        <div class="sidenav">
                            <div class="guia">
                                <h1>Caracterización de estudiantes</h1> 
                                <p>
                                    La Universidad Católica de Pereira, a través del Centro de Innovación Educativa, está interesada en formular y desarrollar un plan de capacitación
                                    en competencias digitales, que se ajuste a las condiciones reales encontradas en la comunidad estudiantil. Para esto se requiere diagnosticar las
                                    competencias tecnológicas que posee en su calidad de estudiante.
                                </p>
                                <p>
                                    El tiempo estimado para responder a esta encuesta es de 30 minutos.
                                </p>
                                <p>
                                    Lo invitamos a participar de forma sincera del proceso, diligenciando las siguientes preguntas, tomadas y generadas desde la Sociedad Internacional
                                    de Tecnología en Educación y la UNESCO.
                                </p>
                                <p class="uno">
                                    Comencemos:
                                </p>
                                <input type="email" class="icono-placeholder-image" name="txtusuario" id="txtusuario" placeholder="Correo institucional" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@ucp.edu.co"/>
                                <div class="dos">
                                    <a href="#sec2" class="button">Ingresar</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               <section id="sec2">
                    <div class="topnav">
                        <img src="../Imagenes/Ucp.png" alt="Logo">
                        <button type="submit" class="btn btn-light" name="B1"><a href="#sec3">Continuar <i class="fa fa-share"></i></a></button>
                        <button type="submit" class="btn btn-light" name="B1"><a href="#sec1"><i class="fa fa-reply"></i> Regresar</a></button>
                    </div>
                    <div class="content">
                        <div class="sidenav">
                            <div class="guia2">
                                <h2>Datos personales</h2> 
                                <table style="margin: 0 auto;">
                                    <tr><td><p>En este apartado, por favor diligencie sus datos personales, según corresponda</p></td></tr>
                                    <tr><td><input type="text" name="Nombres" id="Nombres" placeholder="Nombre"></td></tr>
                                    <tr><td><input type="text" name="Apellidos" id="Apellidos" placeholder="Apellido"></td></tr>
                                    <tr><td>
                                        <select type="text" name="Documento" id="select">
                                                    <?php include ("../Estructura/Listas/documentos.php")?>
                                        </select>
                                    </td></tr>
                                    <tr><td><input type="text" name="Numero" id="Numero" placeholder="Numero de documento"></td></tr>
                                    <tr><td>	
                                        <select type="number" name="Programa" id="select">
                                                                    <?php include ("../Estructura/Listas/programas.php")?>
                                        </select>
                                    </td></tr>
                                    <tr><td>	
                                        <select type="number" name="Semestre" id="select">
                                                                    <?php include ("../Estructura/Listas/semestres.php")?>
                                        </select>
                                    </td></tr>
                                    <tr><td>
                                        <select type="number" name="Ciudad" id="select">
                                                    <?php include ("../Estructura/Listas/ciudades.php")?>
                                        </select>
                                    </td></tr>	
                                </table>
                            </div>
                        </div>
                    </div>
                </section>   
                <section id="sec3">
                    <div class="topnav">
                        <img src="../Imagenes/Ucp.png" alt="Logo">
                        <button type="submit" class="btn btn-light" name="B1"><a href="#sec4">Continuar <i class="fa fa-share"></i></a></button>
                        <button type="submit" class="btn btn-light" name="B1"><a href="#sec2"><i class="fa fa-reply"></i> Regresar</a></button>
                    </div>
                    <div class="content">
                        <div class="sidenav">
                            <div class="guia3">
                                <h2>Mediación tecnológica</h2>
                                <p>En este apartado, se logra identificar los saberes actuales sobre TIC que posee</p>
                                <div class="contenedor">
                                    <table class="tabla_v">
                                        <tr>
                                            <th colspan=2>¿Cómo ha adquirido los conocimientos actuales sobre Tecnologías?</th>
                                        </tr>
                                        <tr>
                                            <td>De manera autodidacta,(recursos de Internet, exploración)</td>
                                            <td><input type="checkbox" name="Autodidacta" id="Autodidacta" value="Si"></td>
                                        </tr>
                                        <tr>
                                            <td>Cursos presenciales y/o virtuales</td>
                                            <td><input type="checkbox" name="Curso" id="Curso" value="Si"></td>
                                        </tr>
                                        <tr>
                                            <td>Otra</td>
                                            <td><input type="text" name="Otra"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="contenedor">
                                    <table class="tabla_v">
                                        <tr>
                                            <th colspan=2>Cómo evalúa qué son sus habilidades digitales  para dar respuesta a los requerimientos, actividades y tareas académicas?</th>
                                        </tr>
                                        <tr>
                                            <td>Basico</td>
                                            <td><input type="radio" id="Basico" name="Habilidades_digitales" value="Basico"></td>
                                        </tr>
                                        <tr>
                                            <td>Intermedio</td>
                                            <td><input type="radio" id="Intermedio" name="Habilidades_digitales" value="Intermedio"></td>
                                        </tr>
                                        <tr>
                                            <td>Avanzado</td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_digitales" value="Avanzado"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="contenedor">
                                    <p class="preg">¿Cómo calificaría sus conocimientos ofimáticos?</p>
                                    <table class="tabla_w">
                                        <tr>
                                            <td></td>
                                            <th>Ninguno</th>
                                            <th>Basico</th>
                                            <th>Avanzado</th>
                                            <th>Experto</th>
                                        </tr>
                                        <tr>
                                            <th>Procesador de texto</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_texto" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_texto" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_texto" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_texto" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Hoja de Calculo</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_calculo" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_calculo" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_calculo" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_calculo" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Herramientas de presentacion</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_presentacion" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_presentacion" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_presentacion" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_presentacion" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Bases de datos</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_datos" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_datos" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_datos" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_datos" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Utilidades</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_herramientas" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_herramientas" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_herramientas" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_herramientas" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Programas de correo electronico</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_correo" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_correo" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_correo" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_correo" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Manejo basico de hardware</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_hardware" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_hardware" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_hardware" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_hardware" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Software</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_software" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_software" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_software" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_software" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Si conoce otro indique ¿cuál?</th>
                                            <td colspan=4><input type="text" name="Otro_uno"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="contenedor">
                                    <p class="preg">¿Cómo calificaría sus conocimientos sobre Internet y aplicaciones web?</p>
                                    <table class="tabla_w">
                                        <tr>
                                            <td></td>
                                            <th>Ninguno</th>
                                            <th>Basico</th>
                                            <th>Avanzado</th>
                                            <th>Experto</th>
                                        </tr>
                                        <tr>
                                            <th>Navegadores</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_texto" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_texto" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_texto" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_texto" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Buscadores</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_calculo" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_calculo" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_calculo" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_calculo" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Correo electronico</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_presentacion" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_presentacion" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_presentacion" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_presentacion" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Seguridad</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_datos" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_datos" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_datos" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_datos" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Redes sociales</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_herramientas" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_herramientas" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_herramientas" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_herramientas" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Foros</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_correo" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_correo" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_correo" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_correo" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Blogs</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_hardware" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_hardware" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_hardware" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_hardware" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Nube</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_software" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_software" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_software" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_software" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Video conferencias</th>
                                            <td><input type="radio" id="Ninguno" name="Habilidades_software" value="Ninguno"></td>
                                            <td><input type="radio" id="Basico" name="Habilidades_software" value="Basico"></td>
                                            <td><input type="radio" id="Avanzado" name="Habilidades_software" value="Avanzado"></td>
                                            <td><input type="radio" id="Experto" name="Habilidades_software" value="Experto"></td>
                                        </tr>
                                        <tr>
                                            <th>Si conoce otro indique ¿cuál?</th>
                                            <td colspan=4><input type="text" name="Otro_dos"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
        <script>
            var input = document.getElementById('txtusuario');
            input.oninvalid = function(event) { event.target.setCustomValidity('Se requiere correo institucional @ucp.edu.co'); }
	    </script>
	</body>
</html> 