<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include ("../Estructura/head.php")?>
	</head>
	<style>
		#sec1{
            background-image: url("../Imagenes/fondo5.jpg");
  			background-repeat: no-repeat;
 			background-position-x:center;
  			background-size: cover;
		  	background-attachment: fixed;
		}
		#sec2{
            background-image: url("../Imagenes/fondo6.jpg");
  			background-repeat: no-repeat;
 			background-position-x:center;
  			background-size: cover;
		  	background-attachment: fixed;
		}
		#sec3{
            background-image: url("../Imagenes/fondo6.jpg");
  			background-repeat: no-repeat;
 			background-position-x:center;
  			background-size: cover;
		  	background-attachment: fixed;
		}
		#sec4{
            background-image: url("../Imagenes/fondo6.jpg");
  			background-repeat: no-repeat;
 			background-position-x:center;
  			background-size: cover;
		  	background-attachment: fixed;
		}
		#sec5{
            background-image: url("../Imagenes/fondo6.jpg");
  			background-repeat: no-repeat;
 			background-position-x:center;
  			background-size: cover;
		  	background-attachment: fixed;
		}
		#sec6{
            background-image: url("../Imagenes/fondo6.jpg");
  			background-repeat: no-repeat;
 			background-position-x:center;
  			background-size: cover;
		  	background-attachment: fixed;
		}
		#sec7{
            background-image: url("../Imagenes/fondo6.jpg");
  			background-repeat: no-repeat;
 			background-position-x:center;
  			background-size: cover;
		  	background-attachment: fixed;
		}
		#sec8{
            background-image: url("../Imagenes/fondo6.jpg");
  			background-repeat: no-repeat;
 			background-position-x:center;
  			background-size: cover;
		  	background-attachment: fixed;
		}
		#sec9{
            background-image: url("../Imagenes/fondo6.jpg");
  			background-repeat: no-repeat;
 			background-position-x:center;
  			background-size: cover;
		  	background-attachment: fixed;
		}
        .contenedor{
            width: 46%;
            height: 110em;
            margin-left: 5%;
            padding-top: 10%;
            }
        input[type=submit]{
            background-color:  #a974e3;
            border: none;
            color: white;
            padding: 1% 1%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 100%;
            border-radius: 10px 10px 10px 10px ;
        }
        .button{
            background-color:  #a974e3;
            border: none;
            color: white;
            padding: 2% 10%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 125%;
            border-radius: 10px 10px 10px 10px ;
        }
	</style>
	<body>
		<form action="form.php" method="post">
			<section id="sec1">
                <div class="contenedor">
				    <h2>Diagnóstico de competencias TIC/Estudiantes</h2> 
                    <a>La Universidad Católica de Pereira, a través del Centro de Innovación Educativa, está interesada en formular y  desarrollar un plan de capacitación en competencias digitales, que se ajuste a las condiciones reales encontradas en la comunidad estudiantil. Para esto se requiere  diagnosticar las competencias tecnológicas  que posee en su calidad de estudiante.<br>
                       El tiempo estimado para responder a esta encuesta es de 30 minutos.<br>
                       Lo invitamos a participar de forma sincera del proceso, diligenciando las siguientes preguntas, tomadas y generadas desde la Sociedad Internacional de Tecnología en Educación y la UNESCO.
                    </a><br>
				    <input type="email" name="Correo" id="Correo" placeholder="Correo institucional">
                    <br><a href="#sec2" class="button">Continuar</a> 
                </div>
			</section>
            <section id="sec2">
				<h2>Datos personales</h2> 
				<table style="margin: 0 auto;">
                    <tr><td colspan=2>En este apartado, por favor diligencie sus datos personales, según corresponda:</td></tr>
					<tr><td>Nombres</td><td><input type="text" name="Nombres"></td></tr>
					<tr><td>Apellidos</td><td><input type="text" name="Apellidos"></td></tr>
					<tr><td>Tipo documento</td><td><input type="radio" id="CC" name="Documento" value="CC"><label for="CC">CC</label>&nbsp;
  													<input type="radio" id="TI" name="Documento" value="TI"><label for="TI">TI</label>&nbsp;
  													<input type="radio" id="PA" name="Documento" value="PA"><label for="PA">PA</label>&nbsp;
													<input type="radio" id="CE" name="Documento" value="CE"><label for="CE">CE</label>
												</td>
					</tr>
					<tr><td>Número de documento</td><td><input type="text" name="Numero" id="Numero"></td></tr>
					<tr><td>Programa al que pertenece</td><td><select type="number" name="Programa" id="Programa">
                                                                <?php include ("../Estructura/Listas/programas.php")?>
                                                              </select>
														  </td>
					</tr>
					<tr><td>Semestre</td><td><input type="radio" id="2022-1" name="Semestre" value="2022-1"><label for="2022-1">2022-1</label>&nbsp;
  											 <input type="radio" id="2022-2" name="Semestre" value="2022-2"><label for="2022-2">2022-2</label>&nbsp; 
										 </td>
					</tr>				
					<tr><td>Ciudad en la que se encuentra</td><td><select type="number" name="Ciudad" id="Ciudad">
                                                <?php include ("../Estructura/Listas/ciudades.php")?>
                                           </select>
									   </td>
					</tr>	
				</table>
			</section>
            <section id="sec3">
				<h2>Mediación tecnológica</h2>
				<table style="margin: 0 auto;">
                    <tr><td colspan=2>En este apartado, se logra identificar los saberes actuales sobre TIC que posee:</td></tr>
					<tr><td>¿Cómo ha adquirido los conocimientos actuales sobre Tecnologías?</td><td><input type="checkbox" name="Autodidacta" id="Autodidacta" value="Si"><label for="Autodidacta">De manera autodidacta,(recursos de Internet, exploración)</label><br>
					                                    <input type="checkbox" name="Curso" id="Curso" value="Si"><label for="Curso">Cursos presenciales y/o virtuales</label><br>
					                                    <label for="Otra">Otra:</label><input type="text" name="Otra">
													</td>
					</tr>
                    <tr><td>¿Cómo evalúa qué son sus habilidades digitales  para dar respuesta a los requerimientos, actividades y tareas académicas?</td><td><input type="radio" id="Basico" name="Habilidades_digitales" value="Basico"><label for="Basico">Basico</label>
                                                          <input type="radio" id="Intermedio" name="Habilidades_digitales" value="Intermedio"><label for="Intermedio">Intermedio</label>
                                                          <input type="radio" id="Avanzado" name="Habilidades_digitales" value="Avanzado"><label for="Avanzado">Avanzado</label>
						                              </td>
					</tr>
                    <tr><td colspan=2>¿Cómo calificaría sus conocimientos ofimáticos?</td></tr>
					<tr><td>Procesador de texto</td><td><input type="radio" id="Ninguno" name="Habilidades_texto" value="Ninguno"><label for="Ninguno">Ninguno</label>
														<input type="radio" id="Basico" name="Habilidades_texto" value="Basico"><label for="Basico">Basico</label>
														<input type="radio" id="Avanzado" name="Habilidades_texto" value="Avanzado"><label for="Avanzado">Avanzado</label>
														<input type="radio" id="Experto" name="Habilidades_texto" value="Experto"><label for="Experto">Experto</label>
													</td>
					</tr>
					<tr><td>Hoja de Calculo</td><td><input type="radio" id="Ninguno" name="Habilidades_calculo" value="Ninguno"><label for="Ninguno">Ninguno</label>
													<input type="radio" id="Basico" name="Habilidades_calculo" value="Basico"><label for="Basico">Basico</label>
													<input type="radio" id="Avanzado" name="Habilidades_calculo" value="Avanzado"><label for="Avanzado">Avanzado</label>
													<input type="radio" id="Experto" name="Habilidades_calculo" value="Experto"><label for="Experto">Experto</label>
												</td>
					</tr>
					<tr><td>Herramientas de presentacion</td><td><input type="radio" id="Ninguno" name="Habilidades_presentacion" value="Ninguno"><label for="Ninguno">Ninguno</label>
																 <input type="radio" id="Basico" name="Habilidades_presentacion" value="Basico"><label for="Basico">Basico</label>
                                                                 <input type="radio" id="Avanzado" name="Habilidades_presentacion" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                                 <input type="radio" id="Experto" name="Habilidades_presentacion" value="Experto"><label for="Experto">Experto</label>
															 </td>
					</tr>
					<tr><td>Bases de datos</td><td><input type="radio" id="Ninguno" name="Habilidades_datos" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                                   <input type="radio" id="Basico" name="Habilidades_datos" value="Basico"><label for="Basico">Basico</label>
                                                   <input type="radio" id="Avanzado" name="Habilidades_datos" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                   <input type="radio" id="Experto" name="Habilidades_datos" value="Experto"><label for="Experto">Experto</label>
                                               </td>
					</tr>
					<tr><td>Utilidades</td><td><input type="radio" id="Ninguno" name="Habilidades_herramientas" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                               <input type="radio" id="Basico" name="Habilidades_herramientas" value="Basico"><label for="Basico">Basico</label>
                                               <input type="radio" id="Avanzado" name="Habilidades_herramientas" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                               <input type="radio" id="Experto" name="Habilidades_herramientas" value="Experto"><label for="Experto">Experto</label>
                                           </td>
					</tr>
					<tr><td>Porgramas de correo electronico</td><td><input type="radio" id="Ninguno" name="Habilidades_correo" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                                                    <input type="radio" id="Basico" name="Habilidades_correo" value="Basico"><label for="Basico">Basico</label>
                                                                    <input type="radio" id="Avanzado" name="Habilidades_correo" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                                    <input type="radio" id="Experto" name="Habilidades_correo" value="Experto"><label for="Experto">Experto</label>
                                                                </td>
					</tr>
					<tr><td>Manejo basico de hardware</td><td><input type="radio" id="Ninguno" name="Habilidades_hardware" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                                              <input type="radio" id="Basico" name="Habilidades_hardware" value="Basico"><label for="Basico">Basico</label>
                                                              <input type="radio" id="Avanzado" name="Habilidades_hardware" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                              <input type="radio" id="Experto" name="Habilidades_hardware" value="Experto"><label for="Experto">Experto</label>
                                                          </td>
					</tr>
					<tr><td>Software</td><td><input type="radio" id="Ninguno" name="Habilidades_software" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                             <input type="radio" id="Basico" name="Habilidades_software" value="Basico"><label for="Basico">Basico</label>
                                             <input type="radio" id="Avanzado" name="Habilidades_software" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                             <input type="radio" id="Experto" name="Habilidades_software" value="Experto"><label for="Experto">Experto</label>
                                         </td>
					</tr>
					<tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_uno"></td></tr>
                    <tr><td colspan=2>¿Cómo calificaría sus conocimientos sobre Internet y aplicaciones web?</td></tr>
                    <tr><td>Navegadores</td><td><input type="radio" id="Ninguno" name="Habilidades_navegador" value="Ninguno"><label for="Ninguno">Ninguno</label>
												<input type="radio" id="Basico" name="Habilidades_navegador" value="Basico"><label for="Basico">Basico</label>
												<input type="radio" id="Avanzado" name="Habilidades_navegador" value="Avanzado"><label for="Avanzado">Avanzado</label>
												<input type="radio" id="Experto" name="Habilidades_navegador" value="Experto"><label for="Experto">Experto</label>
											</td>
					</tr>
					<tr><td>Buscadores</td><td><input type="radio" id="Ninguno" name="Habilidades_buscadores" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                               <input type="radio" id="Basico" name="Habilidades_buscadores" value="Basico"><label for="Basico">Basico</label>
                                               <input type="radio" id="Avanzado" name="Habilidades_buscadores" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                               <input type="radio" id="Experto" name="Habilidades_buscadores" value="Experto"><label for="Experto">Experto</label>
                                           </td>
					</tr>
					<tr><td>Correo electronico</td><td><input type="radio" id="Ninguno" name="Habilidades_correo_electronico" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                                       <input type="radio" id="Basico" name="Habilidades_correo_electronico" value="Basico"><label for="Basico">Basico</label>
                                                       <input type="radio" id="Avanzado" name="Habilidades_correo_electronico" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                       <input type="radio" id="Experto" name="Habilidades_correo_electronico" value="Experto"><label for="Experto">Experto</label>
                                                   </td>
					</tr>
					<tr><td>Seguridad</td><td><input type="radio" id="Ninguno" name="Habilidades_seguridad" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                              <input type="radio" id="Basico" name="Habilidades_seguridad" value="Basico"><label for="Basico">Basico</label>
                                              <input type="radio" id="Avanzado" name="Habilidades_seguridad" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                              <input type="radio" id="Experto" name="Habilidades_seguridad" value="Experto"><label for="Experto">Experto</label>
                                          </td>
					</tr>
					<tr><td>Redes sociales</td><td><input type="radio" id="Ninguno" name="Habilidades_redes_sociales" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                                   <input type="radio" id="Basico" name="Habilidades_redes_sociales" value="Basico"><label for="Basico">Basico</label>
                                                   <input type="radio" id="Avanzado" name="Habilidades_redes_sociales" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                   <input type="radio" id="Experto" name="Habilidades_redes_sociales" value="Experto"><label for="Experto">Experto</label>
                                               </td>
					</tr>
					<tr><td>Foros</td><td><input type="radio" id="Ninguno" name="Habilidades_foros" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                          <input type="radio" id="Basico" name="Habilidades_foros" value="Basico"><label for="Basico">Basico</label>
                                          <input type="radio" id="Avanzado" name="Habilidades_foros" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                          <input type="radio" id="Experto" name="Habilidades_foros" value="Experto"><label for="Experto">Experto</label>
                                      </td>
					</tr>
					<tr><td>Blogs</td><td><input type="radio" id="Ninguno" name="Habilidades_blogs" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                          <input type="radio" id="Basico" name="Habilidades_blogs" value="Basico"><label for="Basico">Basico</label>
                                          <input type="radio" id="Avanzado" name="Habilidades_blogs" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                          <input type="radio" id="Experto" name="Habilidades_blogs" value="Experto"><label for="Experto">Experto</label>
                                      </td>
					</tr>
					<tr><td>Nube</td><td><input type="radio" id="Ninguno" name="Habilidades_nube" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                         <input type="radio" id="Basico" name="Habilidades_nube" value="Basico"><label for="Basico">Basico</label>
                                         <input type="radio" id="Avanzado" name="Habilidades_nube" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                         <input type="radio" id="Experto" name="Habilidades_nube" value="Experto"><label for="Experto">Experto</label>
                                     </td>
					</tr>
					<tr><td>Video conferencia</td><td><input type="radio" id="Ninguno" name="Habilidades_conferencias" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                                      <input type="radio" id="Basico" name="Habilidades_conferencias" value="Basico"><label for="Basico">Basico</label>
                                                      <input type="radio" id="Avanzado" name="Habilidades_conferencias" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                      <input type="radio" id="Experto" name="Habilidades_conferencias" value="Experto"><label for="Experto">Experto</label>
                                                  </td>
					</tr>
					<tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_dos"></td></tr>
                    <tr><td colspan=2>¿Cómo calificaría sus conocimientos y uso de las aplicaciones de Google?</td></tr>
                    <tr><td>Busqueda</td><td><input type="radio" id="Ninguno" name="Habilidades_buscador" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                             <input type="radio" id="Basico" name="Habilidades_buscador" value="Basico"><label for="Basico">Basico</label>
                                             <input type="radio" id="Avanzado" name="Habilidades_buscador" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                             <input type="radio" id="Experto" name="Habilidades_buscador" value="Experto"><label for="Experto">Experto</label>
                                         </td>
					</tr>
					<tr><td>Correo</td><td><input type="radio" id="Ninguno" name="Habilidades_correos" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                           <input type="radio" id="Basico" name="Habilidades_correos" value="Basico"><label for="Basico">Basico</label>
                                           <input type="radio" id="Avanzado" name="Habilidades_correos" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                           <input type="radio" id="Experto" name="Habilidades_correos" value="Experto"><label for="Experto">Experto</label>
                                       </td>
					</tr>
					<tr><td>Calendario</td><td><input type="radio" id="Ninguno" name="Habilidades_calendario" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                               <input type="radio" id="Basico" name="Habilidades_calendario" value="Basico"><label for="Basico">Basico</label>
                                               <input type="radio" id="Avanzado" name="Habilidades_calendario" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                               <input type="radio" id="Experto" name="Habilidades_calendario" value="Experto"><label for="Experto">Experto</label>
                                           </td>
					</tr>
					<tr><td>Drive</td><td><input type="radio" id="Ninguno" name="Habilidades_drive" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                          <input type="radio" id="Basico" name="Habilidades_drive" value="Basico"><label for="Basico">Basico</label>
                                          <input type="radio" id="Avanzado" name="Habilidades_drive" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                          <input type="radio" id="Experto" name="Habilidades_drive" value="Experto"><label for="Experto">Experto</label>
                                      </td>
					</tr>
					<tr><td>Documento</td><td><input type="radio" id="Ninguno" name="Habilidades_documentos" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                              <input type="radio" id="Basico" name="Habilidades_documentos" value="Basico"><label for="Basico">Basico</label>
                                              <input type="radio" id="Avanzado" name="Habilidades_documentos" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                              <input type="radio" id="Experto" name="Habilidades_documentos" value="Experto"><label for="Experto">Experto</label>
                                          </td>
					</tr>
					<tr><td>Hoja de calculo</td><td><input type="radio" id="Ninguno" name="Habilidades_calculos" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                                    <input type="radio" id="Basico" name="Habilidades_calculos" value="Basico"><label for="Basico">Basico</label>
                                                    <input type="radio" id="Avanzado" name="Habilidades_calculos" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                    <input type="radio" id="Experto" name="Habilidades_calculos" value="Experto"><label for="Experto">Experto</label>
                                                </td>
					</tr>
					<tr><td>Presentaciones</td><td><input type="radio" id="Ninguno" name="Habilidades_presentaciones" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                                   <input type="radio" id="Basico" name="Habilidades_presentaciones" value="Basico"><label for="Basico">Basico</label>
                                                   <input type="radio" id="Avanzado" name="Habilidades_presentaciones" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                   <input type="radio" id="Experto" name="Habilidades_presentaciones" value="Experto"><label for="Experto">Experto</label>
                                               </td>
					</tr>
					<tr><td>Formularios</td><td><input type="radio" id="Ninguno" name="Habilidades_formularios" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                                <input type="radio" id="Basico" name="Habilidades_formularios" value="Basico"><label for="Basico">Basico</label>
                                                <input type="radio" id="Avanzado" name="Habilidades_formularios" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                <input type="radio" id="Experto" name="Habilidades_formularios" value="Experto"><label for="Experto">Experto</label>
                                            </td>
					</tr>
					<tr><td>Keep</td><td><input type="radio" id="Ninguno" name="Habilidades_keep" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                         <input type="radio" id="Basico" name="Habilidades_keep" value="Basico"><label for="Basico">Basico</label>
                                         <input type="radio" id="Avanzado" name="Habilidades_keep" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                         <input type="radio" id="Experto" name="Habilidades_keep" value="Experto"><label for="Experto">Experto</label>
                                     </td>
					</tr>
					<tr><td>Jamboard</td><td><input type="radio" id="Ninguno" name="Habilidades_jamboard" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                           <input type="radio" id="Basico" name="Habilidades_jamboard" value="Basico"><label for="Basico">Basico</label>
                                           <input type="radio" id="Avanzado" name="Habilidades_jamboard" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                           <input type="radio" id="Experto" name="Habilidades_jamboard" value="Experto"><label for="Experto">Experto</label>
                                       </td>
					</tr>
					<tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_tres"></td></tr>
					<tr><td colspan=2>¿Cómo calificaría el manejo y frecuencia de uso que le da a los sistemas de información Institucionales?</td></tr>
                    <tr><td>Moodle</td><td><input type="checkbox" name="Mo1" id="Mo1" value="Si"><label for="Mo1">M. Ninguno</label>
                                           <input type="checkbox" name="Mo2" id="Mo2" value="Si"><label for="Mo2">M. Basico</label>
                                           <input type="checkbox" name="Mo3" id="Mo3" value="Si"><label for="Mo3">M. Avanzado</label>
                                           <input type="checkbox" name="Mo4" id="Mo4" value="Si"><label for="Mo4">M. Experto</label>
                                           <input type="checkbox" name="Mo7" id="Mo7" value="Si"><label for="Mo7">F. Nunca</label>
                                           <input type="checkbox" name="Mo8" id="Mo8" value="Si"><label for="Mo8">F. Poco</label>
                                           <input type="checkbox" name="Mo9" id="Mo9" value="Si"><label for="Mo9">F. Frecuente</label>
                                           <input type="checkbox" name="Mo10" id="Mo10" value="Si"><label for="Mo10">F. Muy Frecuente</label>
                                       </td>
					</tr>
					<tr><td>Portal estudiantil</td><td><input type="checkbox" name="Pe1" id="Pe1" value="Si"><label for="Pe1">M. Ninguno</label>
                                                       <input type="checkbox" name="Pe2" id="Pe2" value="Si"><label for="Pe2">M. Basico</label>
                                                       <input type="checkbox" name="Pe3" id="Pe3" value="Si"><label for="Pe3">M. Avanzado</label>
                                                       <input type="checkbox" name="Pe4" id="Pe4" value="Si"><label for="Pe4">M. Experto</label>
                                                       <input type="checkbox" name="Pe7" id="Pe7" value="Si"><label for="Pe7">F. Nunca</label>
                                                       <input type="checkbox" name="Pe8" id="Pe8" value="Si"><label for="Pe8">F. Poco</label>
                                                       <input type="checkbox" name="Pe9" id="Pe9" value="Si"><label for="Pe9">F. Frecuente</label>
                                                       <input type="checkbox" name="Pe10" id="Pe10" value="Si"><label for="Pe10">F. Muy Frecuente</label>
                                                   </td>
					</tr>
					<tr><td>Sistema de solicitudes</td><td><input type="checkbox" name="So1" id="So1" value="Si"><label for="So1">M. Ninguno</label>
                                                           <input type="checkbox" name="So2" id="So2" value="Si"><label for="So2">M. Basico</label>
                                                           <input type="checkbox" name="So3" id="So3" value="Si"><label for="So3">M. Avanzado</label>
                                                           <input type="checkbox" name="So4" id="So4" value="Si"><label for="So4">M. Experto</label>
                                                           <input type="checkbox" name="So7" id="So7" value="Si"><label for="So7">F. Nunca</label>
                                                           <input type="checkbox" name="So8" id="So8" value="Si"><label for="So8">F. Poco</label>
                                                           <input type="checkbox" name="So9" id="So9" value="Si"><label for="So9">F. Frecuente</label>
                                                           <input type="checkbox" name="So10" id="So10" value="Si"><label for="So10">F. Muy Frecuente</label>
                                                       </td>
					</tr>
					<tr><td>Bases de datos suscritas</td><td><input type="checkbox" name="Bd1" id="Bd1" value="Si"><label for="Bd1">M. Ninguno</label>
                                                             <input type="checkbox" name="Bd2" id="Bd2" value="Si"><label for="Bd2">M. Basico</label>
                                                             <input type="checkbox" name="Bd3" id="Bd3" value="Si"><label for="Bd3">M. Avanzado</label>
                                                             <input type="checkbox" name="Bd4" id="Bd4" value="Si"><label for="Bd4">M. Experto</label>
                                                             <input type="checkbox" name="Bd7" id="Bd7" value="Si"><label for="Bd7">F. Nunca</label>
                                                             <input type="checkbox" name="Bd8" id="Bd8" value="Si"><label for="Bd8">F. Poco</label>
                                                             <input type="checkbox" name="Bd9" id="Bd9" value="Si"><label for="Bd9">F. Frecuente</label>
                                                             <input type="checkbox" name="Bd10" id="Bd10" value="Si"><label for="Bd10">F. Muy Frecuente</label>
                                                         </td>
					</tr>
					<tr><td>Catalogo en linea de la bliblioteca</td><td><input type="checkbox" name="Ca1" id="Ca1" value="Si"><label for="Ca1">M. Ninguno</label>
                                                      <input type="checkbox" name="Ca2" id="Ca2" value="Si"><label for="Ca2">M. Basico</label>
                                                      <input type="checkbox" name="Ca3" id="Ca3" value="Si"><label for="Ca3">M. Avanzado</label>
                                                      <input type="checkbox" name="Ca4" id="Ca4" value="Si"><label for="Ca4">M. Experto</label>
                                                      <input type="checkbox" name="Ca7" id="Ca7" value="Si"><label for="Ca7">F. Nunca</label>
                                                      <input type="checkbox" name="Ca8" id="Ca8" value="Si"><label for="Ca8">F. Poco</label>
                                                      <input type="checkbox" name="Ca9" id="Ca9" value="Si"><label for="Ca9">F. Frecuente</label>
                                                      <input type="checkbox" name="Ca10" id="Ca10" value="Si"><label for="Ca10">F. Muy Frecuente</label>
                                                  </td>
					</tr>
					<tr><td>RiBuc (Repositorio institucional)</td><td><input type="checkbox" name="Re1" id="Re1" value="Si"><label for="Re1">M. Ninguno</label>
                                          <input type="checkbox" name="Re2" id="Re2" value="Si"><label for="Re2">M. Basico</label>
                                          <input type="checkbox" name="Re3" id="Re3" value="Si"><label for="Re3">M. Avanzado</label>
                                          <input type="checkbox" name="Re4" id="Re4" value="Si"><label for="Re4">M. Experto</label>
                                          <input type="checkbox" name="Re7" id="Re7" value="Si"><label for="Re7">F. Nunca</label>
                                          <input type="checkbox" name="Re8" id="Re8" value="Si"><label for="Re8">F. Poco</label>
                                          <input type="checkbox" name="Re9" id="Re9" value="Si"><label for="Re9">F. Frecuente</label>
                                          <input type="checkbox" name="Re10" id="Re10" value="Si"><label for="Re10">F. Muy Frecuente</label>
                                      </td>
					</tr>
					<tr><td>Sistema de publicaciones</td><td><input type="checkbox" name="Pu1" id="Pu1" value="Si"><label for="Pu1">M. Ninguno</label>
                                                  <input type="checkbox" name="Pu2" id="Pu2" value="Si"><label for="Pu2">M. Basico</label>
                                                  <input type="checkbox" name="Pu3" id="Pu3" value="Si"><label for="Pu3">M. Avanzado</label>
                                                  <input type="checkbox" name="Pu4" id="Pu4" value="Si"><label for="Pu4">M. Experto</label>
                                                  <input type="checkbox" name="Pu7" id="Pu7" value="Si"><label for="Pu7">F. Nunca</label>
                                                  <input type="checkbox" name="Pu8" id="Pu8" value="Si"><label for="Pu8">F. Poco</label>
                                                  <input type="checkbox" name="Pu9" id="Pu9" value="Si"><label for="Pu9">F. Frecuente</label>
                                                  <input type="checkbox" name="Pu10" id="Pu10" value="Si"><label for="Pu10">F. Muy Frecuente</label>
                                              </td>
					</tr>
					<tr><td>Libros electronicos</td><td><input type="checkbox" name="Li1" id="Li1" value="Si"><label for="Li1">M. Ninguno</label>
                                                        <input type="checkbox" name="Li2" id="Li2" value="Si"><label for="Li2">M. Basico</label>
                                                        <input type="checkbox" name="Li3" id="Li3" value="Si"><label for="Li3">M. Avanzado</label>
                                                        <input type="checkbox" name="Li4" id="Li4" value="Si"><label for="Li4">M. Experto</label>
                                                        <input type="checkbox" name="Li7" id="Li7" value="Si"><label for="Li7">F. Nunca</label>
                                                        <input type="checkbox" name="Li8" id="Li8" value="Si"><label for="Li8">F. Poco</label>
                                                        <input type="checkbox" name="Li9" id="Li9" value="Si"><label for="Li9">F. Frecuente</label>
                                                        <input type="checkbox" name="Li10" id="Li10" value="Si"><label for="Li10">F. Muy Frecuente</label>
                                                    </td>
					</tr>
                    <tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_cuatro"></td></tr>
					<tr><td>¿Conoce todos los servicios disponibles para los estudiantes, en la Página Web de la Universidad?</td><td><input type="radio" id="Si" name="Servicios_ucp" value="Si"><label for="Si">Si</label>&nbsp;
  					                                    <input type="radio" id="No" name="Servicios_ucp" value="No"><label for="No">No</label>
													</td>
                    </tr>
                </table>
			</section>
            <section id="sec4">
				<h2>Gestión de la informacion</h2>
				<table style="margin: 0 auto;">
                    <tr><td colspan=2>En este apartado encuentra las preguntas referentes a cómo gestiona la información en su rol de estudiante:</td></tr>
					<tr><td>Cuando encuentra información interesante en la red, ya sea para un trabajo o para algún tema que le interesa a nivel personal, ¿cómo la guarda?</td><td><input type="checkbox" name="Gu1" id="Gu1" value="Si"><label for="Gu1">No la guardo, tengo buena memoria.</label><br>
                                                        <input type="checkbox" name="Gu2" id="Gu2" value="Si"><label for="Gu2">Me envío la información por e-mail para guardarla.</label><br>
                                                        <input type="checkbox" name="Gu3" id="Gu3" value="Si"><label for="Gu3">La guardo en alguna herramienta de lectura.</label><br>
                                                        <input type="checkbox" name="Gu4" id="Gu4" value="Si"><label for="Gu4">La guardo en favoritos.</label><br>
                                                        <input type="checkbox" name="Gu5" id="Gu5" value="Si"><label for="Gu5">La comparto para poderla encontrar cuando la busque.</label>
													</td>
                    </tr>
					<tr><td>¿Contrasta con diferentes fuentes: la calidad, fiabilidad y pertinencia de la información que obtiene en Internet?</td><td><input type="checkbox" name="Co1" id="Co1" value="Si"><label for="Co1">No se puede creer nada de lo que se publica en Internet, todo es falso.</label><br>
                                                           <input type="checkbox" name="Co2" id="Co2" value="Si"><label for="Co2">Lo que aparece en los medios de comunicación siempre es cierto.</label><br>
                                                           <input type="checkbox" name="Co3" id="Co3" value="Si"><label for="Co3">Yo reenvío todo lo que me llega, nunca me equivoco.</label><br>
                                                           <input type="checkbox" name="Co4" id="Co4" value="Si"><label for="Co4">Cuando me llega algo demasiado sorprendente siempre contrasto con otras fuentes.</label><br>
                                                           <input type="checkbox" name="Co5" id="Co5" value="Si"><label for="Co5">Busco de forma activa y tengo el sentido crítico muy despierto.</label>
													   </td>
					</tr>
                    <tr><td colspan=2>Conocimiento de Bases de datos</td></tr>
                    <tr><td>Scopus</td><td><input type="radio" id="Ninguno" name="Scopus" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                           <input type="radio" id="Basico" name="Scopus" value="Basico"><label for="Basico">Basico</label>
                                           <input type="radio" id="Avanzado" name="Scopus" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                           <input type="radio" id="Experto" name="Scopus" value="Experto"><label for="Experto">Experto</label>
                                       </td>
					</tr>
					<tr><td>Sage joutnals</td><td><input type="radio" id="Ninguno" name="Sage" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                         <input type="radio" id="Basico" name="Sage" value="Basico"><label for="Basico">Basico</label>
                                         <input type="radio" id="Avanzado" name="Sage" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                         <input type="radio" id="Experto" name="Sage" value="Experto"><label for="Experto">Experto</label>
                                     </td>
					</tr>
					<tr><td>Ebsco</td><td><input type="radio" id="Ninguno" name="Ebsco" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                          <input type="radio" id="Basico" name="Ebsco" value="Basico"><label for="Basico">Basico</label>
                                          <input type="radio" id="Avanzado" name="Ebsco" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                          <input type="radio" id="Experto" name="Ebsco" value="Experto"><label for="Experto">Experto</label>
                                      </td>
					</tr>
					<tr><td>Legiscomex</td><td><input type="radio" id="Ninguno" name="Legiscomex" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                               <input type="radio" id="Basico" name="Legiscomex" value="Basico"><label for="Basico">Basico</label>
                                               <input type="radio" id="Avanzado" name="Legiscomex" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                               <input type="radio" id="Experto" name="Legiscomex" value="Experto"><label for="Experto">Experto</label>
                                           </td>
					</tr>
					<tr><td>Redalyc</td><td><input type="radio" id="Ninguno" name="Redalyc" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                            <input type="radio" id="Basico" name="Redalyc" value="Basico"><label for="Basico">Basico</label>
                                            <input type="radio" id="Avanzado" name="Redalyc" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                            <input type="radio" id="Experto" name="Redalyc" value="Experto"><label for="Experto">Experto</label>
                                        </td>
					</tr>
					<tr><td>Scielo</td><td><input type="radio" id="Ninguno" name="Scielo" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                           <input type="radio" id="Basico" name="Scielo" value="Basico"><label for="Basico">Basico</label>
                                           <input type="radio" id="Avanzado" name="Scielo" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                           <input type="radio" id="Experto" name="Scielo" value="Experto"><label for="Experto">Experto</label>
                                       </td>
					</tr>
					<tr><td>Dialnet</td><td><input type="radio" id="Ninguno" name="Dialnet" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                            <input type="radio" id="Basico" name="Dialnet" value="Basico"><label for="Basico">Basico</label>
                                            <input type="radio" id="Avanzado" name="Dialnet" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                            <input type="radio" id="Experto" name="Dialnet" value="Experto"><label for="Experto">Experto</label>
                                        </td>
					</tr>
					<tr><td>Science direct</td><td><input type="radio" id="Ninguno" name="Science" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                            <input type="radio" id="Basico" name="Science" value="Basico"><label for="Basico">Basico</label>
                                            <input type="radio" id="Avanzado" name="Science" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                            <input type="radio" id="Experto" name="Science" value="Experto"><label for="Experto">Experto</label>
                                        </td>
					</tr>
					<tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_cinco"></td></tr>
					<tr><td colspan=2>Conocimiento sobre software y otras herramientas para investigar</td></tr>
                    <tr><td>Zootero</td><td><input type="radio" id="Ninguno" name="Zootero" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                            <input type="radio" id="Basico" name="Zootero" value="Basico"><label for="Basico">Basico</label>
                                            <input type="radio" id="Avanzado" name="Zootero" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                            <input type="radio" id="Experto" name="Zootero" value="Experto"><label for="Experto">Experto</label>
                                        </td>
					</tr>
					<tr><td>Mendeley</td><td><input type="radio" id="Ninguno" name="Mendeley" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                             <input type="radio" id="Basico" name="Mendeley" value="Basico"><label for="Basico">Basico</label>
                                             <input type="radio" id="Avanzado" name="Mendeley" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                             <input type="radio" id="Experto" name="Mendeley" value="Experto"><label for="Experto">Experto</label>
                                         </td>
					</tr>
					<tr><td>Refworks</td><td><input type="radio" id="Ninguno" name="Refworks" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                             <input type="radio" id="Basico" name="Refworks" value="Basico"><label for="Basico">Basico</label>
                                             <input type="radio" id="Avanzado" name="Refworks" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                             <input type="radio" id="Experto" name="Refworks" value="Experto"><label for="Experto">Experto</label>
                                         </td>
					</tr>
					<tr><td>AtlasTi</td><td><input type="radio" id="Ninguno" name="Atlasti" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                            <input type="radio" id="Basico" name="Atlasti" value="Basico"><label for="Basico">Basico</label>
                                            <input type="radio" id="Avanzado" name="Atlasti" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                            <input type="radio" id="Experto" name="Atlasti" value="Experto"><label for="Experto">Experto</label>
                                        </td>
					</tr>
					<tr><td>Spss</td><td><input type="radio" id="Ninguno" name="Spss" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                         <input type="radio" id="Basico" name="Spss" value="Basico"><label for="Basico">Basico</label>
                                         <input type="radio" id="Avanzado" name="Spss" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                         <input type="radio" id="Experto" name="Spss" value="Experto"><label for="Experto">Experto</label>
                                     </td>
					</tr>	
					<tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_seis"></td></tr>
					<tr><td colspan=2>Conocimiento de portales para la divulgación de la actividad académica</td></tr>
                    <tr><td>Researchgate</td><td><input type="radio" id="Ninguno" name="Researchgate" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                                 <input type="radio" id="Basico" name="Researchgate" value="Basico"><label for="Basico">Basico</label>
                                                 <input type="radio" id="Avanzado" name="Researchgate" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                 <input type="radio" id="Experto" name="Researchgate" value="Experto"><label for="Experto">Experto</label>
                                             </td>
					</tr>
					<tr><td>Google academico</td><td><input type="radio" id="Ninguno" name="Google_academico" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                                     <input type="radio" id="Basico" name="Google_academico" value="Basico"><label for="Basico">Basico</label>
                                                     <input type="radio" id="Avanzado" name="Google_academico" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                     <input type="radio" id="Experto" name="Google_academico" value="Experto"><label for="Experto">Experto</label>
                                                 </td>
					</tr>
					<tr><td>Cvlac</td><td><input type="radio" id="Ninguno" name="Cvlac" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                          <input type="radio" id="Basico" name="Cvlac" value="Basico"><label for="Basico">Basico</label>
                                          <input type="radio" id="Avanzado" name="Cvlac" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                          <input type="radio" id="Experto" name="Cvlac" value="Experto"><label for="Experto">Experto</label>
                                      </td>
					</tr>
					<tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_siete"></td></tr>
					<tr><td colspan=2>¿Qué otros recursos electrónicos utiliza para la búsqueda de información Académica?</td></tr>
                    <tr><td>Ebooks</td><td><input type="radio" id="Ninguno" name="Ebooks" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                           <input type="radio" id="Basico" name="Ebooks" value="Basico"><label for="Basico">Basico</label>
                                           <input type="radio" id="Avanzado" name="Ebooks" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                           <input type="radio" id="Experto" name="Ebooks" value="Experto"><label for="Experto">Experto</label>
                                       </td>
					</tr>
					<tr><td>Ribuc</td><td><input type="radio" id="Ninguno" name="Ribuc" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                          <input type="radio" id="Basico" name="Ribuc" value="Basico"><label for="Basico">Basico</label>
                                          <input type="radio" id="Avanzado" name="Ribuc" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                          <input type="radio" id="Experto" name="Ribuc" value="Experto"><label for="Experto">Experto</label>
                                      </td>
					</tr>
					<tr><td>BiblioTechnia</td><td><input type="radio" id="Ninguno" name="BiblioTechnia" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                                  <input type="radio" id="Basico" name="BiblioTechnia" value="Basico"><label for="Basico">Basico</label>
                                                  <input type="radio" id="Avanzado" name="BiblioTechnia" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                  <input type="radio" id="Experto" name="BiblioTechnia" value="Experto"><label for="Experto">Experto</label>
                                              </td>
					</tr>
					<tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_ocho"></td></tr>
					<tr><td>¿Qué otras herramientas de la Biblioteca considera necesario incorporar en sus procesos enseñanza y aprendizaje?</td><td><input type="text" name="Herramienta_biblioteca"></td></tr>
                </table>
			</section>
			<section id="sec5">
				<h2>Comunicación Digital</h2>
				<table style="margin: 0 auto;">
                    <tr><td colspan=2>En este apartado, encuentra las preguntas relacionadas con la web y sus interacciones en ella:</td></tr>
                    <tr><td colspan=2>¿Qué redes sociales utiliza y con qué frecuencia?</td></tr>
					<tr><td>Whatapp</td><td><input type="radio" id="Cero" name="Whatsapp" value="0"><label for="Cero">0</label>&nbsp;
											<input type="radio" id="Uno" name="Whatsapp" value="1"><label for="Uno">1</label>&nbsp;
											<input type="radio" id="Dos" name="Whatsapp" value="2"><label for="Dos">2</label>&nbsp;
											<input type="radio" id="Tres" name="Whatsapp" value="3"><label for="Tres">3</label>&nbsp;
											<input type="radio" id="Cuatro" name="Whatsapp" value="4"><label for="Cuatro">4</label>&nbsp;
											<input type="radio" id="Cinco" name="Whatsapp" value="5"><label for="Cinco">5</label>
										</td>
					</tr>
					<tr><td>Facebook</td><td><input type="radio" id="Cero" name="Facebook" value="0"><label for="Cero">0</label>&nbsp;
                                             <input type="radio" id="Uno" name="Facebook" value="1"><label for="Uno">1</label>&nbsp;
                                             <input type="radio" id="Dos" name="Facebook" value="2"><label for="Dos">2</label>&nbsp;
                                             <input type="radio" id="Tres" name="Facebook" value="3"><label for="Tres">3</label>&nbsp;
                                             <input type="radio" id="Cuatro" name="Facebook" value="4"><label for="Cuatro">4</label>&nbsp;
                                             <input type="radio" id="Cinco" name="Facebook" value="5"><label for="Cinco">5</label>
                                         </td>
					</tr>
					<tr><td>Youtube</td><td><input type="radio" id="Cero" name="Youtube" value="0"><label for="Cero">0</label>&nbsp;
                                            <input type="radio" id="Uno" name="Youtube" value="1"><label for="Uno">1</label>&nbsp;
                                            <input type="radio" id="Dos" name="Youtube" value="2"><label for="Dos">2</label>&nbsp;
                                            <input type="radio" id="Tres" name="Youtube" value="3"><label for="Tres">3</label>&nbsp;
                                            <input type="radio" id="Cuatro" name="Youtube" value="4"><label for="Cuatro">4</label>&nbsp;
                                            <input type="radio" id="Cinco" name="Youtube" value="5"><label for="Cinco">5</label>
										</td>
					</tr>
					<tr><td>Instagram</td><td><input type="radio" id="Cero" name="Instagram" value="0"><label for="Cero">0</label>&nbsp;
                                              <input type="radio" id="Uno" name="Instagram" value="1"><label for="Uno">1</label>&nbsp;
                                              <input type="radio" id="Dos" name="Instagram" value="2"><label for="Dos">2</label>&nbsp;
                                              <input type="radio" id="Tres" name="Instagram" value="3"><label for="Tres">3</label>&nbsp;
                                              <input type="radio" id="Cuatro" name="Instagram" value="4"><label for="Cuatro">4</label>&nbsp;
                                              <input type="radio" id="Cinco" name="Instagram" value="5"><label for="Cinco">5</label>
                                          </td>
					</tr>
					<tr><td>Twitter</td><td><input type="radio" id="Cero" name="Twitter" value="0"><label for="Cero">0</label>&nbsp;
                                            <input type="radio" id="Uno" name="Twitter" value="1"><label for="Uno">1</label>&nbsp;
                                            <input type="radio" id="Dos" name="Twitter" value="2"><label for="Dos">2</label>&nbsp;
                                            <input type="radio" id="Tres" name="Twitter" value="3"><label for="Tres">3</label>&nbsp;
                                            <input type="radio" id="Cuatro" name="Twitter" value="4"><label for="Cuatro">4</label>&nbsp;
                                            <input type="radio" id="Cinco" name="Twitter" value="5"><label for="Cinco">5</label>
                                        </td>
					</tr>
					<tr><td>Linkedin</td><td><input type="radio" id="Cero" name="Linkedin" value="0"><label for="Cero">0</label>&nbsp;
                                             <input type="radio" id="Uno" name="Linkedin" value="1"><label for="Uno">1</label>&nbsp;
                                             <input type="radio" id="Dos" name="Linkedin" value="2"><label for="Dos">2</label>&nbsp;
                                             <input type="radio" id="Tres" name="Linkedin" value="3"><label for="Tres">3</label>&nbsp;
                                             <input type="radio" id="Cuatro" name="Linkedin" value="4"><label for="Cuatro">4</label>&nbsp;
                                             <input type="radio" id="Cinco" name="Linkedin" value="5"><label for="Cinco">5</label>
                                         </td>
					</tr>
					<tr><td>Tiktok</td><td><input type="radio" id="Cero" name="Tiktok" value="0"><label for="Cero">0</label>&nbsp;
                                           <input type="radio" id="Uno" name="Tiktok" value="1"><label for="Uno">1</label>&nbsp;
                                           <input type="radio" id="Dos" name="Tiktok" value="2"><label for="Dos">2</label>&nbsp;
                                           <input type="radio" id="Tres" name="Tiktok" value="3"><label for="Tres">3</label>&nbsp;
                                           <input type="radio" id="Cuatro" name="Tiktok" value="4"><label for="Cuatro">4</label>&nbsp;
                                           <input type="radio" id="Cinco" name="Tiktok" value="5"><label for="Cinco">5</label>
                                       </td>
					</tr>
					<tr><td>Si utiliza otra indique ¿cuál?</td><td><input type="text" name="Otro_nueve"></td></tr>
					<tr><td>¿Cómo utiliza las Redes Sociales?</td><td><input type="radio" id="Respuesta1" name="Uso_redes_sociales" value="Respuesta1"><label for="Respuesta1">No las utilizo.</label><br>
                                                                      <input type="radio" id="Respuesta2" name="Uso_redes_sociales" value="Respuesta2"><label for="Respuesta2">Las utilizo para estar informado de lo que hacen mis amigos.</label><br>
                                                                      <input type="radio" id="Respuesta3" name="Uso_redes_sociales" value="Respuesta3"><label for="Respuesta3">Comparto de vez en cuando contenidos interesantes.</label><br>
                                                                      <input type="radio" id="Respuesta4" name="Uso_redes_sociales" value="Respuesta4"><label for="Respuesta4">Las utilizo como fuente de información más allá del ámbito personal.</label><br>
                                                                      <input type="radio" id="Respuesta5" name="Uso_redes_sociales" value="Respuesta5"><label for="Respuesta5">Soy un difusor constante de contenidos, una referencia profesional para mis contactos.</label>
                                                                  </td>
					</tr>
					<tr><td>Cuando tiene que comunicarse con una persona ¿cuál de los siguientes criterios utiliza?</td><td><input type="radio" id="Respuesta1" name="Criterios" value="Respuesta1"><label for="Respuesta1">No suelo hablar, ni comunicarme con nadie.</label><br>
                                                                                                                            <input type="radio" id="Respuesta2" name="Criterios" value="Respuesta2"><label for="Respuesta2">Principalmente el e-mail o teléfono.</label><br>
                                                                                                                            <input type="radio" id="Respuesta3" name="Criterios" value="Respuesta3"><label for="Respuesta3">Envío un e-mail y si quiero que me contesten rápido, también un WhatsApp y luego una llamada.</label><br>
                                                                                                                            <input type="radio" id="Respuesta4" name="Criterios" value="Respuesta4"><label for="Respuesta4">Dependiendo del mensaje utilizo un canal u otro: e-mail no es para todo y sé que no es eficiente.</label>
                                                                                                                        </td>
					</tr>
				</table>
			</section>
			<section id="sec6">
				<h2>Identidad Digital</h2>
				<table style="margin: 0 auto;">
                    <tr><td colspan=2>En este apartado,  encuentra las preguntas relacionadas con todo lo que identifica a otros y a usted en el entorno online. </td></tr>
					<tr><td>¿Cómo afecta internet a lo público/privado?</td><td><input type="radio" id="Respuesta1" name="Privasidad" value="Respuesta1"><label for="Respuesta1">En Internet todo es público.</label><br>
                                                                                <input type="radio" id="Respuesta2" name="Privasidad" value="Respuesta2"><label for="Respuesta2">En Internet los dos ámbitos están expuestos y no se pueden gestionar.</label><br>
                                                                                <input type="radio" id="Respuesta3" name="Privasidad" value="Respuesta3"><label for="Respuesta3">Yo gestiono mi privacidad y presencia en Internet de forma activa.</label><br>
                                                                                <input type="radio" id="Respuesta4" name="Privasidad" value="Respuesta4"><label for="Respuesta4">En Internet lo dos ámbitos están expuestos y podemos controlarlos.</label>
                                                                            </td>
					</tr>
					<tr><td>¿Sabe qué son los derechos de autor?</td><td><input type="radio" id="Si" name="Derechos" value="Si"><label for="Si">Si</label>&nbsp;
  					                                                     <input type="radio" id="No" name="Derechos" value="No"><label for="No">No</label>
																	 </td>
					</tr>
					<tr><td>¿Conoce alguna norma para referenciar documentos en sus trabajos escritos?</td><td><input type="radio" id="Si" name="Norma" value="Si"><label for="Si">Si</label>&nbsp;
  					                                                                                           <input type="radio" id="No" name="Norma" value="No"><label for="No">No</label>
																										   </td>
					</tr>
					<tr><td>¿Cuál o cuáles?</td><td><input type="text" name="Normas"></td>
					</tr>
					<tr><td>¿Sabe qué es netiqueta?</td><td><input type="radio" id="Si" name="Netiqueta" value="Si"><label for="Si">Si</label>&nbsp;
  					                                        <input type="radio" id="No" name="Netiqueta" value="No"><label for="No">No</label
														></td>
					</tr>
                    <tr><td colspan=2>Seleccione según la frecuencia, las reglas de netiqueta que usa cotidianamente:</td></tr>
					<tr><td>Trato a las personas con respeto</td><td><input type="radio" id="A veces" name="Trato" value="A veces"><label for="A veces">A veces</label>&nbsp;
                                                                     <input type="radio" id="Muchas veces" name="Trato" value="Muchas veces"><label for="Muchas veces">Muchas veces</label>&nbsp;
                                                                     <input type="radio" id="Siempre" name="Trato" value="Siempre"><label for="Siempre">Siempre</label>&nbsp;
                                                                     <input type="radio" id="No" name="Trato" value="No"><label for="No">No lo hago</label>
                                                                 </td>
					</tr>
					<tr><td>Ignoro a las persona cuando no quiero o puedo hablar</td><td><input type="radio" id="A veces" name="Ignorar" value="A veces"><label for="A veces">A veces</label>&nbsp;
                                                                                         <input type="radio" id="Muchas veces" name="Ignorar" value="Muchas veces"><label for="Muchas veces">Muchas veces</label>&nbsp;
                                                                                         <input type="radio" id="Siempre" name="Ignorar" value="Siempre"><label for="Siempre">Siempre</label>&nbsp;
                                                                                         <input type="radio" id="No" name="Ignorar" value="No"><label for="No">No lo hago</label>
                                                                                     </td>
					</tr>
					<tr><td>Soy breve y conciso con lo que envío</td><td><input type="radio" id="A veces" name="Breve" value="A veces"><label for="A veces">A veces</label>&nbsp;
                                                                         <input type="radio" id="Muchas veces" name="Breve" value="Muchas veces"><label for="Muchas veces">Muchas veces</label>&nbsp;
                                                                         <input type="radio" id="Siempre" name="Breve" value="Siempre"><label for="Siempre">Siempre</label>&nbsp;
                                                                         <input type="radio" id="No" name="Breve" value="No"><label for="No">No lo hago</label>
                                                                     </td>
					</tr>
					<tr><td>Me preocupo por la redacción y gramática</td><td><input type="radio" id="A veces" name="Preocupacion" value="A veces"><label for="A veces">A veces</label>&nbsp;
                                                                             <input type="radio" id="Muchas veces" name="Preocupacion" value="Muchas veces"><label for="Muchas veces">Muchas veces</label>&nbsp;
                                                                             <input type="radio" id="Siempre" name="Preocupacion" value="Siempre"><label for="Siempre">Siempre</label>&nbsp;
                                                                             <input type="radio" id="No" name="Preocupacion" value="No"><label for="No">No lo hago</label>
                                                                         </td>
					</tr>
					<tr><td>Me pongo en el lugar de los demás</td><td><input type="radio" id="A veces" name="Demas" value="A veces"><label for="A veces">A veces</label>&nbsp;
                                                                      <input type="radio" id="Muchas veces" name="Demas" value="Muchas veces"><label for="Muchas veces">Muchas veces</label>&nbsp;
                                                                      <input type="radio" id="Siempre" name="Demas" value="Siempre"><label for="Siempre">Siempre</label>&nbsp;
                                                                      <input type="radio" id="No" name="Demas" value="No"><label for="No">No lo hago</label>
                                                                  </td>
					</tr>
					<tr><td>Respeto la privacidad de otro</td><td><input type="radio" id="A veces" name="Respeto" value="A veces"><label for="A veces">A veces</label>&nbsp;
                                                                  <input type="radio" id="Muchas veces" name="Respeto" value="Muchas veces"><label for="Muchas veces">Muchas veces</label>&nbsp;
                                                                  <input type="radio" id="Siempre" name="Respeto" value="Siempre"><label for="Siempre">Siempre</label>&nbsp;
                                                                  <input type="radio" id="No" name="Respeto" value="No"><label for="No">No lo hago</label>
                                                              </td>
					</tr>
					<tr><td>Escribo mucho texto en mayúscula</td><td><input type="radio" id="A veces" name="Mucho_texto" value="A veces"><label for="A veces">A veces</label>&nbsp;
                                                                     <input type="radio" id="Muchas veces" name="Mucho_texto" value="Muchas veces"><label for="Muchas veces">Muchas veces</label>&nbsp;
                                                                     <input type="radio" id="Siempre" name="Mucho_texto" value="Siempre"><label for="Siempre">Siempre</label>&nbsp;
                                                                     <input type="radio" id="No" name="Mucho_texto" value="No"><label for="No">No lo hago</label>
                                                                 </td>
					</tr>
				</table>
			</section>
            <section id="sec7">
				<h2>Ubicación de competencias</h2>
				<table style="margin: 0 auto;">
                    <tr><td colspan=2>Competencias digitales: Se definen como un espectro de competencias que facilitan el uso de los dispositivos digitales, las aplicaciones de la comunicación y las redes para acceder a la información y llevar a cabo una mejor gestión de estas". (Unesco, 2018)</td></tr>
					<tr><td>Creatividad e innovación<br>
                            Usted como estudiante demuestra un pensamiento creativo, construye conocimiento y<br>
                            desarrolla productos innovadores y procesos que utilizan tecnología.
                                                    </td><td><input type="checkbox" name="Crea1" id="Crea1" value="Si"><label for="Crea1">Aplico el conocimiento existente para generar nuevos ideas, productos o procesos.</label><br>
                                                             <input type="checkbox" name="Crea2" id="Crea2" value="Si"><label for="Crea2">Creo obras originales como un medio de personal o expresión grupal.</label><br>
                                                             <input type="checkbox" name="Crea3" id="Crea3" value="Si"><label for="Crea3">Uso modelos y simulaciones para explorar complejos sistemas y problemas.</label><br>
                                                             <input type="checkbox" name="Crea4" id="Crea4" value="Si"><label for="Crea4">Identifico tendencias y posibilidades de pronóstico.</label><br>
                                                             <input type="checkbox" name="Crea5" id="Crea5" value="Si"><label for="Crea5">Ninguna.</label>
                                                          </td>
					</tr>
					<tr><td>Comunicación y colaboración<br>
                            Usa medios digitales y entornos para comunicarse y trabajar en colaboración,<br> 
                            incluido a distancia, para apoyar el aprendizaje individual y contribuir al aprendizaje de los demás.
                                                       </td><td><input type="checkbox" name="Com1" id="Com1" value="Si"><label for="Com1">Interactúo, colaboro y publico con mis compañeros, expertos u otros que emplean una variedad de digital ambientes y medios</label><br>
                                                                <input type="checkbox" name="Com2" id="Com2" value="Si"><label for="Com2">Comunico información e ideas de manera efectiva a múltiples audiencias usando una variedad de medios y formatos</label><br>
                                                                <input type="checkbox" name="Com3" id="Com3" value="Si"><label for="Com3">Desarrollo la comprensión cultural y global al relacionarme con estudiantes de otras culturas</label><br>
                                                                <input type="checkbox" name="Com4" id="Com4" value="Si"><label for="Com4">Contribuyo a los equipos de proyecto para producir trabajos originales o resolver problemas</label><br>
                                                                <input type="checkbox" name="Com5" id="Com5" value="Si"><label for="Com5">Ninguna</label>
                                                            </td>
					</tr>
					<tr><td>Investigación y fluidez de la información<br>
                            Aplica herramientas digitales para reunir, evaluar, y usar información.
                                                                </td><td><input type="checkbox" name="Inv1" id="Inv1" value="Si"><label for="Inv1">Planifico estrategias para guiar la investigación</label><br>
                                                                          <input type="checkbox" name="Inv2" id="Inv2" value="Si"><label for="Inv2">Localizo, organizo, analizo, evalúo, sintetizo, y uso éticamente la información de una variedad de fuentes y medios</label><br>
                                                                          <input type="checkbox" name="Inv3" id="Inv3" value="Si"><label for="Inv3">Evalúo y selecciono fuentes de información y herramientas digitales basadas en la idoneidad para Tareas específicas</label><br>
                                                                          <input type="checkbox" name="Inv4" id="Inv4" value="Si"><label for="Inv4">Proceso datos e informo resultados</label><br>
                                                                          <input type="checkbox" name="Inv5" id="Inv5" value="Si"><label for="Inv5">Ninguna</label>
                                                                     </td>
					</tr>
					<tr><td>Pensamiento crítico, resolución de problemas, y toma de decisiones<br>
                            Usa habilidades de pensamiento crítico para planificar y realizar investigaciones,<br>
                            gestionar proyectos, resolver problemas y tomar decisiones informadas utilizando<br>
                            herramientas y recursos digitales apropiados.
                                                                                              </td><td><input type="checkbox" name="Pen1" id="Pen1" value="Si"><label for="Pen1">Identifico y defino problemas auténticos y preguntas importantes para la investigación</label><br>
                                                                                                       <input type="checkbox" name="Pen2" id="Pen2" value="Si"><label for="Pen2">Planifico y gestiono actividades para desarrollar una solución o completar un proyecto</label><br>
                                                                                                       <input type="checkbox" name="Pen3" id="Pen3" value="Si"><label for="Pen3">Recopilo y analizo datos para identificar soluciones y / o tomar decisiones</label><br>
                                                                                                       <input type="checkbox" name="Pen4" id="Pen4" value="Si"><label for="Pen4">Utilizo múltiples procesos y diversas perspectivas para explorar soluciones alternativas</label><br>
                                                                                                       <input type="checkbox" name="Pen5" id="Pen5" value="Si"><label for="Pen5">Ninguna</label>
                                                                                                   </td>
					</tr>
					<tr><td>Ciudadanía Digital<br>
                            Comprende las cuestiones relacionadas con la tecnología, la práctica legal<br>
                            y el comportamiento ético.   
                                              </td><td><input type="checkbox" name="Ciu1" id="Ciu1" value="Si"><label for="Ciu1">Hago uso responsable de la información y la tecnología</label><br>
                                                       <input type="checkbox" name="Ciu2" id="Ciu2" value="Si"><label for="Ciu2">Exhibo una actitud positiva hacia el uso tecnología que apoya la colaboración, aprendizaje y productividad</label><br>
                                                       <input type="checkbox" name="Ciu3" id="Ciu3" value="Si"><label for="Ciu3">Demuestro responsabilidad personal por el aprendizaje permanente</label><br>
                                                       <input type="checkbox" name="Ciu4" id="Ciu4" value="Si"><label for="Ciu4">Exhibo liderazgo para la ciudadanía digital</label><br>
                                                       <input type="checkbox" name="Ciu5" id="Ciu5" value="Si"><label for="Ciu5">Ninguna</label>
                                                   </td>
					</tr>
					<tr><td>Operaciones tecnológicas y conceptos<br>
                            Demuestra una buena comprensión de conceptos tecnológicos, sistemas y operaciones.
                                                                </td><td><input type="checkbox" name="Ope1" id="Ope1" value="Si"><label for="Ope1">Comprendo y utilizo sistemas tecnológicos</label><br>
                                                                         <input type="checkbox" name="Ope2" id="Ope2" value="Si"><label for="Ope2">Selecciono y uso aplicaciones de manera efectiva y productivamente</label><br>
                                                                         <input type="checkbox" name="Ope3" id="Ope3" value="Si"><label for="Ope3">Soluciono problemas de sistemas y aplicaciones</label><br>
                                                                         <input type="checkbox" name="Ope4" id="Ope4" value="Si"><label for="Ope4">Transfiero el conocimiento actual al aprendizaje de nuevas tecnologías</label><br>
                                                                         <input type="checkbox" name="Ope5" id="Ope5" value="Si"><label for="Ope5">Ninguna</label>
                                                                     </td>
					</tr>
                    <tr><td>¿En qué tema le gustaría que el Centro de Innovación Educativa,<br> profundizara para mejorar sus procesos formativos <br>en ambientes mediados por tecnologías?</td><td><input type="text" name="Opiniones"></td>
     				</tr>
                </table>
			</section>
            <section id="sec8">
				<h2>Canales de aprendizaje</h2>
				<table style="margin: 0 auto;">
                    <tr><td colspan=2>TEST PARA DETERMINAR EL CANAL DE APRENDIZAJE DE PREFERENCIA. Lynn O’Brien (1990)<br>
                                      Lea cuidadosamente cada oración y piense de qué manera se aplica a usted.<br> 
                                      En cada línea escriba el número que mejor describe su reacción a cada oración.<br>
                                      Casi siempre: 5.      Frecuentemente: 4.      A veces: 3.      Rara vez: 2.     Casi nunca: 1.
                    </td></tr>
					<tr><td>Puedo recordar algo mejor si lo escribo.</td><td><input type="radio" id="Uno" name="Pre1" value="1"><label for="Uno">1</label>&nbsp;
                                                                             <input type="radio" id="Dos" name="Pre1" value="2"><label for="Dos">2</label>&nbsp;
                                                                             <input type="radio" id="Tres" name="Pre1" value="3"><label for="Tres">3</label>&nbsp;
                                                                             <input type="radio" id="Cuatro" name="Pre1" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                             <input type="radio" id="Cinco" name="Pre1" value="5"><label for="Cinco">5</label>
                                                                         </td>
					</tr>
					<tr><td>Al leer, oigo las palabras en mi cabeza o leo en voz alta.</td><td><input type="radio" id="Uno" name="Pre2" value="1"><label for="Uno">1</label>&nbsp;
                                                                                               <input type="radio" id="Dos" name="Pre2" value="2"><label for="Dos">2</label>&nbsp;
                                                                                               <input type="radio" id="Tres" name="Pre2" value="3"><label for="Tres">3</label>&nbsp;
                                                                                               <input type="radio" id="Cuatro" name="Pre2" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                               <input type="radio" id="Cinco" name="Pre2" value="5"><label for="Cinco">5</label>
                                                                                           </td>
					</tr>
					<tr><td>Necesito hablar las cosas para entenderlas mejor.</td><td><input type="radio" id="Uno" name="Pre3" value="1"><label for="Uno">1</label>&nbsp;
                                                                                      <input type="radio" id="Dos" name="Pre3" value="2"><label for="Dos">2</label>&nbsp;
                                                                                      <input type="radio" id="Tres" name="Pre3" value="3"><label for="Tres">3</label>&nbsp;
                                                                                      <input type="radio" id="Cuatro" name="Pre3" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                      <input type="radio" id="Cinco" name="Pre3" value="5"><label for="Cinco">5</label>
                                                                                  </td>
					</tr>
					<tr><td>No me gusta leer o escuchar instrucciones, prefiero simplemente comenzar a hacer las cosas.</td><td><input type="radio" id="Uno" name="Pre4" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                                                <input type="radio" id="Dos" name="Pre4" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                                                <input type="radio" id="Tres" name="Pre4" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                                                <input type="radio" id="Cuatro" name="Pre4" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                                                <input type="radio" id="Cinco" name="Pre4" value="5"><label for="Cinco">5</label>
                                                                                                                            </td>
					</tr>
					<tr><td>Puedo visualizar imágenes en mi cabeza.</td><td><input type="radio" id="Uno" name="Pre5" value="1"><label for="Uno">1</label>&nbsp;
                                                                            <input type="radio" id="Dos" name="Pre5" value="2"><label for="Dos">2</label>&nbsp;
                                                                            <input type="radio" id="Tres" name="Pre5" value="3"><label for="Tres">3</label>&nbsp;
                                                                            <input type="radio" id="Cuatro" name="Pre5" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                            <input type="radio" id="Cinco" name="Pre5" value="5"><label for="Cinco">5</label>
                                                                        </td>
					</tr>
					<tr><td>Puedo estudiar mejor si escucho música.</td><td><input type="radio" id="Uno" name="Pre6" value="1"><label for="Uno">1</label>&nbsp;
                                                                            <input type="radio" id="Dos" name="Pre6" value="2"><label for="Dos">2</label>&nbsp;
                                                                            <input type="radio" id="Tres" name="Pre6" value="3"><label for="Tres">3</label>&nbsp;
                                                                            <input type="radio" id="Cuatro" name="Pre6" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                            <input type="radio" id="Cinco" name="Pre6" value="5"><label for="Cinco">5</label>
                                                                        </td>
					</tr>
					<tr><td>Necesito recreos frecuentes cuando estudio.</td><td><input type="radio" id="Uno" name="Pre7" value="1"><label for="Uno">1</label>&nbsp;
                                                                                <input type="radio" id="Dos" name="Pre7" value="2"><label for="Dos">2</label>&nbsp;
                                                                                <input type="radio" id="Tres" name="Pre7" value="3"><label for="Tres">3</label>&nbsp;
                                                                                <input type="radio" id="Cuatro" name="Pre7" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                <input type="radio" id="Cinco" name="Pre7" value="5"><label for="Cinco">5</label>
                                                                            </td>
					</tr>
					<tr><td>Pienso mejor cuando tengo la libertad de moverme, estar sentado detrás de un escritorio no es para mí escritorio no es para mi.</td><td><input type="radio" id="Uno" name="Pre8" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                                                                                    <input type="radio" id="Dos" name="Pre8" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                                                                                    <input type="radio" id="Tres" name="Pre8" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                                                                                    <input type="radio" id="Cuatro" name="Pre8" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                                                                                    <input type="radio" id="Cinco" name="Pre8" value="5"><label for="Cinco">5</label>
                                                                                                                                                                </td>
					</tr>
					<tr><td>Tomo muchas notas de lo que leo y escucho.</td><td><input type="radio" id="Uno" name="Pre9" value="1"><label for="Uno">1</label>&nbsp;
                                                                               <input type="radio" id="Dos" name="Pre9" value="2"><label for="Dos">2</label>&nbsp;
                                                                               <input type="radio" id="Tres" name="Pre9" value="3"><label for="Tres">3</label>&nbsp;
                                                                               <input type="radio" id="Cuatro" name="Pre9" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                               <input type="radio" id="Cinco" name="Pre9" value="5"><label for="Cinco">5</label>
                                                                           </td>
					</tr>
					<tr><td>Me ayuda MIRAR a la persona que está hablando. Me mantiene enfocado.</td><td><input type="radio" id="Uno" name="Pre10" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                         <input type="radio" id="Dos" name="Pre10" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                         <input type="radio" id="Tres" name="Pre10" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                         <input type="radio" id="Cuatro" name="Pre10" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                         <input type="radio" id="Cinco" name="Pre10" value="5"><label for="Cinco">5</label>
                                                                                                     </td>
					</tr>
					<tr><td>se me hace difícil entender lo que una persona está diciendo si hay ruidos alrededor.</td><td><input type="radio" id="Uno" name="Pre11" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                                          <input type="radio" id="Dos" name="Pre11" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                                          <input type="radio" id="Tres" name="Pre11" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                                          <input type="radio" id="Cuatro" name="Pre11" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                                          <input type="radio" id="Cinco" name="Pre11" value="5"><label for="Cinco">5</label>
                                                                                                                      </td>
					</tr>
					<tr><td>Prefiero que alguien me diga cómo tengo que hacer las cosas que leer las instrucciones.</td><td><input type="radio" id="Uno" name="Pre12" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                                            <input type="radio" id="Dos" name="Pre12" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                                            <input type="radio" id="Tres" name="Pre12" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                                            <input type="radio" id="Cuatro" name="Pre12" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                                            <input type="radio" id="Cinco" name="Pre12" value="5"><label for="Cinco">5</label>
                                                                                                                        </td>
					</tr>
					<tr><td>Prefiero escuchar una conferencia o una grabación a leer un libro.</td><td><input type="radio" id="Uno" name="Pre13" value="1"><label for="Uno">1</label>&nbsp;
					                                                                                   <input type="radio" id="Dos" name="Pre13" value="2"><label for="Dos">2</label>&nbsp;
					                                                                                   <input type="radio" id="Tres" name="Pre13" value="3"><label for="Tres">3</label>&nbsp;
					                                                                                   <input type="radio" id="Cuatro" name="Pre13" value="4"><label for="Cuatro">4</label>&nbsp;
					                                                                                   <input type="radio" id="Cinco" name="Pre13" value="5"><label for="Cinco">5</label>
																								   </td>
					</tr>
					<tr><td>Cuando no puedo pensar en una palabra específica, uso mis manos y llamo al objeto "coso".</td><td><input type="radio" id="Uno" name="Pre14" value="1"><label for="Uno">1</label>&nbsp;
					                                                                                                          <input type="radio" id="Dos" name="Pre14" value="2"><label for="Dos">2</label>&nbsp;
					                                                                                                          <input type="radio" id="Tres" name="Pre14" value="3"><label for="Tres">3</label>&nbsp;
					                                                                                                          <input type="radio" id="Cuatro" name="Pre14" value="4"><label for="Cuatro">4</label>&nbsp;
					                                                                                                          <input type="radio" id="Cinco" name="Pre14" value="5"><label for="Cinco">5</label>
					                                                                                                      </td>
					</tr>
					<tr><td>Puedo seguir fácilmente a una persona que está hablando aunque mi cabeza esté hacia abajo o me encuentre mirando por la ventana.</td><td><input type="radio" id="Uno" name="Pre15" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                                                                                     <input type="radio" id="Dos" name="Pre15" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                                                                                     <input type="radio" id="Tres" name="Pre15" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                                                                                     <input type="radio" id="Cuatro" name="Pre15" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                                                                                     <input type="radio" id="Cinco" name="Pre15" value="5"><label for="Cinco">5</label>
                                                                                                                                                                 </td>
					</tr>
					<tr><td>Es más fácil para mí hacer un trabajo en un lugar tranquilo.</td><td><input type="radio" id="Uno" name="Pre16" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                 <input type="radio" id="Dos" name="Pre16" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                 <input type="radio" id="Tres" name="Pre16" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                 <input type="radio" id="Cuatro" name="Pre16" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                 <input type="radio" id="Cinco" name="Pre16" value="5"><label for="Cinco">5</label>
                                                                                             </td>
					</tr>
					<tr><td>Me resulta fácil entender mapas, tablas y gráficos.</td><td><input type="radio" id="Uno" name="Pre17" value="1"><label for="Uno">1</label>&nbsp;
                                                                                        <input type="radio" id="Dos" name="Pre17" value="2"><label for="Dos">2</label>&nbsp;
                                                                                        <input type="radio" id="Tres" name="Pre17" value="3"><label for="Tres">3</label>&nbsp;
                                                                                        <input type="radio" id="Cuatro" name="Pre17" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                        <input type="radio" id="Cinco" name="Pre17" value="5"><label for="Cinco">5</label>
                                                                                    </td>
					</tr>
					<tr><td>Cuando comienzo un artículo o un libro, prefiero espiar la última página.</td><td><input type="radio" id="Uno" name="Pre18" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                              <input type="radio" id="Dos" name="Pre18" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                              <input type="radio" id="Tres" name="Pre18" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                              <input type="radio" id="Cuatro" name="Pre18" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                              <input type="radio" id="Cinco" name="Pre18" value="5"><label for="Cinco">5</label>
                                                                                                          </td>
					</tr>
					<tr><td>Recuerdo mejor lo que la gente dice que su aspecto.</td><td><input type="radio" id="Uno" name="Pre19" value="1"><label for="Uno">1</label>&nbsp;
                                                                                        <input type="radio" id="Dos" name="Pre19" value="2"><label for="Dos">2</label>&nbsp;
                                                                                        <input type="radio" id="Tres" name="Pre19" value="3"><label for="Tres">3</label>&nbsp;
                                                                                        <input type="radio" id="Cuatro" name="Pre19" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                        <input type="radio" id="Cinco" name="Pre19" value="5"><label for="Cinco">5</label>
                                                                                    </td>
					</tr>
					<tr><td>Recuerdo mejor si estudio en voz alta con alguien.</td><td><input type="radio" id="Uno" name="Pre20" value="1"><label for="Uno">1</label>&nbsp;
                                                                                       <input type="radio" id="Dos" name="Pre20" value="2"><label for="Dos">2</label>&nbsp;
                                                                                       <input type="radio" id="Tres" name="Pre20" value="3"><label for="Tres">3</label>&nbsp;
                                                                                       <input type="radio" id="Cuatro" name="Pre20" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                       <input type="radio" id="Cinco" name="Pre20" value="5"><label for="Cinco">5</label>
                                                                                   </td>
					</tr>
					<tr><td>Tomo notas, pero nunca vuelvo a releerlas.</td><td><input type="radio" id="Uno" name="Pre21" value="1"><label for="Uno">1</label>&nbsp;
                                                                               <input type="radio" id="Dos" name="Pre21" value="2"><label for="Dos">2</label>&nbsp;
                                                                               <input type="radio" id="Tres" name="Pre21" value="3"><label for="Tres">3</label>&nbsp;
                                                                               <input type="radio" id="Cuatro" name="Pre21" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                               <input type="radio" id="Cinco" name="Pre21" value="5"><label for="Cinco">5</label>
                                                                           </td>
					</tr>
					<tr><td>Cuando estoy concentrado leyendo o escribiendo, la radio me molesta.</td><td><input type="radio" id="Uno" name="Pre22" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                         <input type="radio" id="Dos" name="Pre22" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                         <input type="radio" id="Tres" name="Pre22" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                         <input type="radio" id="Cuatro" name="Pre22" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                         <input type="radio" id="Cinco" name="Pre22" value="5"><label for="Cinco">5</label>
                                                                                                     </td>
					</tr>
					<tr><td>Me resulta difícil crear imágenes en mi cabeza.</td><td><input type="radio" id="Uno" name="Pre23" value="1"><label for="Uno">1</label>&nbsp;
                                                                                    <input type="radio" id="Dos" name="Pre23" value="2"><label for="Dos">2</label>&nbsp;
                                                                                    <input type="radio" id="Tres" name="Pre23" value="3"><label for="Tres">3</label>&nbsp;
                                                                                    <input type="radio" id="Cuatro" name="Pre23" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                    <input type="radio" id="Cinco" name="Pre23" value="5"><label for="Cinco">5</label>
                                                                                </td>
					</tr>
					<tr><td>Me resulta útil decir en voz alta las tareas que tengo para hacer.</td><td><input type="radio" id="Uno" name="Pre24" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                       <input type="radio" id="Dos" name="Pre24" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                       <input type="radio" id="Tres" name="Pre24" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                       <input type="radio" id="Cuatro" name="Pre24" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                       <input type="radio" id="Cinco" name="Pre24" value="5"><label for="Cinco">5</label>
                                                                                                   </td>
					</tr>
					<tr><td>Mi cuaderno y mi escritorio pueden verse un desastre, pero sé exactamente dónde está cada cosa.</td><td><input type="radio" id="Uno" name="Pre25" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                                                    <input type="radio" id="Dos" name="Pre25" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                                                    <input type="radio" id="Tres" name="Pre25" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                                                    <input type="radio" id="Cuatro" name="Pre25" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                                                    <input type="radio" id="Cinco" name="Pre25" value="5"><label for="Cinco">5</label>
                                                                                                                                </td>
					</tr>
					<tr><td>Cuando estoy en un examen, puedo “ver” la página en el libro de textos y la respuesta.</td><td><input type="radio" id="Uno" name="Pre26" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                                           <input type="radio" id="Dos" name="Pre26" value="2"><label for="Dos">2</label>&nbsp;
																														   <input type="radio" id="Tres" name="Pre26" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                                           <input type="radio" id="Cuatro" name="Pre26" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                                           <input type="radio" id="Cinco" name="Pre26" value="5"><label for="Cinco">5</label>
                                                                                                                       </td>
					</tr>
					<tr><td>No puedo recordar una broma lo suficiente para contarla luego.</td><td><input type="radio" id="Uno" name="Pre27" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                   <input type="radio" id="Dos" name="Pre27" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                   <input type="radio" id="Tres" name="Pre27" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                   <input type="radio" id="Cuatro" name="Pre27" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                   <input type="radio" id="Cinco" name="Pre27" value="5"><label for="Cinco">5</label>
                                                                                               </td>
					</tr>
					<tr><td>Al aprender algo nuevo, prefiero escuchar la información, luego leer y luego hacerlo.</td><td><input type="radio" id="Uno" name="Pre28" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                                          <input type="radio" id="Dos" name="Pre28" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                                          <input type="radio" id="Tres" name="Pre28" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                                          <input type="radio" id="Cuatro" name="Pre28" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                                          <input type="radio" id="Cinco" name="Pre28" value="5"><label for="Cinco">5</label>
                                                                                                                      </td>
					</tr>
					<tr><td>Me gusta completar una tarea antes de comenzar otra.</td><td><input type="radio" id="Uno" name="Pre29" value="1"><label for="Uno">1</label>&nbsp;
                                                                                         <input type="radio" id="Dos" name="Pre29" value="2"><label for="Dos">2</label>&nbsp;
                                                                                         <input type="radio" id="Tres" name="Pre29" value="3"><label for="Tres">3</label>&nbsp;
                                                                                         <input type="radio" id="Cuatro" name="Pre29" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                         <input type="radio" id="Cinco" name="Pre29" value="5"><label for="Cinco">5</label>
                                                                                     </td>
					</tr>
					<tr><td>Uso mis dedos para contar y muevo los labios cuando leo.</td><td><input type="radio" id="Uno" name="Pre30" value="1"><label for="Uno">1</label>&nbsp;
                                                                                             <input type="radio" id="Dos" name="Pre30" value="2"><label for="Dos">2</label>&nbsp;
                                                                                             <input type="radio" id="Tres" name="Pre30" value="3"><label for="Tres">3</label>&nbsp;
                                                                                             <input type="radio" id="Cuatro" name="Pre30" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                             <input type="radio" id="Cinco" name="Pre30" value="5"><label for="Cinco">5</label>
                                                                                         </td>
					</tr>
					<tr><td>No me gusta releer mi trabajo.</td><td><input type="radio" id="Uno" name="Pre31" value="1"><label for="Uno">1</label>&nbsp;
                                                                   <input type="radio" id="Dos" name="Pre31" value="2"><label for="Dos">2</label>&nbsp;
                                                                   <input type="radio" id="Tres" name="Pre31" value="3"><label for="Tres">3</label>&nbsp;
                                                                   <input type="radio" id="Cuatro" name="Pre31" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                   <input type="radio" id="Cinco" name="Pre31" value="5"><label for="Cinco">5</label>
                                                               </td>
					</tr>
					<tr><td>Cuando estoy tratando de recordar algo nuevo, por ejemplo, un número de telefóno, me ayuda formarme una imagen mental para lograrlo.</td><td><input type="radio" id="Uno" name="Pre32" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                                                                                         <input type="radio" id="Dos" name="Pre32" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                                                                                         <input type="radio" id="Tres" name="Pre32" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                                                                                         <input type="radio" id="Cuatro" name="Pre32" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                                                                                         <input type="radio" id="Cinco" name="Pre32" value="5"><label for="Cinco">5</label>
                                                                                                                                                                     </td>
					</tr>
					<tr><td>Para obtener una nota extra, prefiero grabar un informe a escribirlo.</td><td><input type="radio" id="Uno" name="Pre33" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                          <input type="radio" id="Dos" name="Pre33" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                          <input type="radio" id="Tres" name="Pre33" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                          <input type="radio" id="Cuatro" name="Pre33" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                          <input type="radio" id="Cinco" name="Pre33" value="5"><label for="Cinco">5</label>
                                                                                                      </td>
					</tr>
					<tr><td>Fantaseo en clase.</td><td><input type="radio" id="Uno" name="Pre34" value="1"><label for="Uno">1</label>&nbsp;
                                                       <input type="radio" id="Dos" name="Pre34" value="2"><label for="Dos">2</label>&nbsp;
                                                       <input type="radio" id="Tres" name="Pre34" value="3"><label for="Tres">3</label>&nbsp;
                                                       <input type="radio" id="Cuatro" name="Pre34" value="4"><label for="Cuatro">4</label>&nbsp;
                                                       <input type="radio" id="Cinco" name="Pre34" value="5"><label for="Cinco">5</label>
                                                   </td>
					</tr>
					<tr><td>Para obtener una calificación extra, prefiero crear un proyecto a escribir un  informe.</td><td><input type="radio" id="Uno" name="Pre35" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                                            <input type="radio" id="Dos" name="Pre35" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                                            <input type="radio" id="Tres" name="Pre35" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                                            <input type="radio" id="Cuatro" name="Pre35" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                                            <input type="radio" id="Cinco" name="Pre35" value="5"><label for="Cinco">5</label>
                                                                                                                        </td>
					</tr>
					<tr><td>Cuando tengo una gran idea, debo escribirla inmediatamente, o la olvido con facilidad.</td><td><input type="radio" id="Uno" name="Pre36" value="1"><label for="Uno">1</label>&nbsp;
                                                                                                                           <input type="radio" id="Dos" name="Pre36" value="2"><label for="Dos">2</label>&nbsp;
                                                                                                                           <input type="radio" id="Tres" name="Pre36" value="3"><label for="Tres">3</label>&nbsp;
                                                                                                                           <input type="radio" id="Cuatro" name="Pre36" value="4"><label for="Cuatro">4</label>&nbsp;
                                                                                                                           <input type="radio" id="Cinco" name="Pre36" value="5"><label for="Cinco">5</label>
                                                                                                                       </td>
					</tr>
				</table>
                <input type="submit" value="Enviar" name="Enviar">
			</section>
		</form>
	</body>
</html> 