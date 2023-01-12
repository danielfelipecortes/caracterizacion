<!DOCTYPE html>
<html>
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
				    <h2>Diagnóstico de acceso y competencias TIC/Profesores</h2>
                    <a>La Universidad Católica de Pereira, a través del Centro de Innovación Educativa, está interesada en formular y  desarrollar un plan de apropiación de TIC que se ajuste a las condiciones reales encontradas en la comunidad profesoral, para esto se requiere diagnosticar las competencias tecnológicas que posee en su calidad de docente. 
                       <br>Por lo anterior, se propone el siguiente formulario que busca, en primer lugar, identificar el desarrollo de competencias TIC de los docentes según los parámetros establecidos por el Ministerio de Educación, donde se examinan competencias tecnológicas, pedagógicas, comunicativas, de gestión y de investigación, a través de la incorporación de las TIC en los procesos educativos.
                       <br>En segundo lugar, el formulario busca identificar el nivel de mediación tecnológica en el aula, según los conocimientos y apropiación de herramientas usadas por los docentes. 
                       <br>Por último, se pretende indagar sobre la apropiación de los diferentes sistemas de información institucionales y la cobertura de la infraestructura tecnológica.
                       <br>Es importante resaltar que este formulario no se configura en un instrumento de evaluación sino en una herramienta para un diagnóstico en TIC que permita caracterizar y a partir de allí proponer estrategias para el mejoramiento de las competencias en la comunidad docente, por esto les solicitamos sean lo más sinceros en sus respuestas.
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
					<tr><td>Numero</td><td><input type="text" name="Numero" id="Numero"></td></tr>
					<tr><td>Programa al que pertenece</td><td><select type="number" name="Programa" id="Programa">
                                                                <?php include ("../Estructura/Listas/programasdocentes.php")?>
                                                              </select>
														  </td>
					</tr>
					<tr><td>Contratacion</td><td><select type="number" name="Contratacion" id="Contratacion">
                                                <?php include ("../Estructura/Listas/contrato.php")?>
                                             </select>
										 </td>
					</tr>				
					<tr><td>Ciudad</td><td><select type="number" name="Ciudad" id="Ciudad">
                                                <?php include ("../Estructura/Listas/ciudades.php")?>
                                           </select>
									   </td>
					</tr>	
				</table>
			</section>
            <section id="sec3">
				<h2>Mediación tecnológica</h2>
                <a>
                    En este apartado, se logra identificar los saberes actuales sobre TIC que posee:<br>
                    En las siguientes tablas se listan las principales herramientas TIC.<br>
                    En cada una de las filas debe seleccionar su respuesta según las siguientes indicaciones:<br>
                    •  En las primeras 4 columnas, selecciona el nivel de manejo del programa.<br>
                    •  En las últimas 4 columnas, responde la frecuencia de uso del programa en sus clases.<br>
                    M = Manejo 
                    F = Frecuencia
                </a><br> 
				<table style="margin: 0 auto;">
                    <tr><td colspan=2>Conocimientos ofimáticos</td></tr>
                    <tr><td>Procesador de texto</td><td><input type="radio" id="Ninguno" name="Habilidades_texto_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                    <input type="radio" id="Basico" name="Habilidades_texto_a" value="B"><label for="Basico">M.Basico</label>
                                    <input type="radio" id="Avanzado" name="Habilidades_texto_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                    <input type="radio" id="Experto" name="Habilidades_texto_a" value="D"><label for="Experto">M.Experto</label>
                                </td>
                                <td>
                                    <input type="radio" id="Nunca" name="Habilidades_texto_b" value="A"><label for="Nunca">F.Nunca</label>
                                    <input type="radio" id="Poco" name="Habilidades_texto_b" value="B"><label for="Poco">F.Poco</label>
                                    <input type="radio" id="Frecuente" name="Habilidades_texto_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                    <input type="radio" id="Muy" name="Habilidades_texto_b" value="D"><label for="Muy">F.Muy frecuente</label>
                                </td>
                    </tr>
                    <tr><td>Hoja de Calculo</td><td><input type="radio" id="Ninguno" name="Habilidades_calculo_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_calculo_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_calculo_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_calculo_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_calculo_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_calculo_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_calculo_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_calculo_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Herramientas de presentacion</td><td><input type="radio" id="Ninguno" name="Habilidades_presentacion_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_presentacion_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_presentacion_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_presentacion_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_presentacion_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_presentacion_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_presentacion_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_presentacion_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Bases de datos</td><td><input type="radio" id="Ninguno" name="Habilidades_datos_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                    <input type="radio" id="Basico" name="Habilidades_datos_a" value="B"><label for="Basico">M.Basico</label>
                                    <input type="radio" id="Avanzado" name="Habilidades_datos_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                    <input type="radio" id="Experto" name="Habilidades_datos_a" value="D"><label for="Experto">M.Experto</label>
                                </td>
                                <td>
                                    <input type="radio" id="Nunca" name="Habilidades_datos_b" value="A"><label for="Nunca">F.Nunca</label>
                                    <input type="radio" id="Poco" name="Habilidades_datos_b" value="B"><label for="Poco">F.Poco</label>
                                    <input type="radio" id="Frecuente" name="Habilidades_datos_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                    <input type="radio" id="Muy" name="Habilidades_datos_b" value="D"><label for="Muy">F.Muy frecuente</label>
                                </td>
                    </tr>
                    <tr><td>Utilidades</td><td><input type="radio" id="Ninguno" name="Habilidades_herramientas_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_herramientas_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_herramientas_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_herramientas_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_herramientas_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_herramientas_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_herramientas_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_herramientas_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Porgramas de correo electronico</td><td><input type="radio" id="Ninguno" name="Habilidades_correo_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_correo_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_correo_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_correo_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_correo_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_correo_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_correo_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_correo_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Manejo basico de hardware</td><td><input type="radio" id="Ninguno" name="Habilidades_hardware_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_hardware_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_hardware_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_hardware_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_hardware_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_hardware_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_hardware_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_hardware_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Software</td><td><input type="radio" id="Ninguno" name="Habilidades_software_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_software_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_software_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_software_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_software_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_software_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_software_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_software_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_uno"></td></tr>
                    <tr><td colspan=2>Conocimientos de internet</td></tr>
                    <tr><td>Navegadores</td><td><input type="radio" id="Ninguno" name="Habilidades_navegador_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_navegador_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_navegador_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_navegador_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_navegador_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_navegador_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_navegador_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_navegador_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Buscadores</td><td><input type="radio" id="Ninguno" name="Habilidades_buscadores_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_buscadores_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_buscadores_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_buscadores_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_buscadores_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_buscadores_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_buscadores_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_buscadores_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Correo electronico</td><td><input type="radio" id="Ninguno" name="Habilidades_correo_electronico_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_correo_electronico_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_correo_electronico_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_correo_electronico_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_correo_electronico_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_correo_electronico_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_correo_electronico_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_correo_electronico_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Seguridad</td><td><input type="radio" id="Ninguno" name="Habilidades_seguridad_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_seguridad_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_seguridad_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_seguridad_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_seguridad_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_seguridad_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_seguridad_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_seguridad_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Redes sociales</td><td><input type="radio" id="Ninguno" name="Habilidades_redes_sociales_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_redes_sociales_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_redes_sociales_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_redes_sociales_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_redes_sociales_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_redes_sociales_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_redes_sociales_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_redes_sociales_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Foros</td><td><input type="radio" id="Ninguno" name="Habilidades_foros_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_foros_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_foros_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_foros_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_foros_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_foros_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_foros_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_foros_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Blogs</td><td><input type="radio" id="Ninguno" name="Habilidades_blogs_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_blogs_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_blogs_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_blogs_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_blogs_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_blogs_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_blogs_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_blogs_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Nube</td><td><input type="radio" id="Ninguno" name="Habilidades_nube_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_nube_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_nube_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_nube_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_nube_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_nube_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_nube_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_nube_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Video conferencia</td><td><input type="radio" id="Ninguno" name="Habilidades_conferencias_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_conferencias_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_conferencias_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_conferencias_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_conferencias_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_conferencias_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_conferencias_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_conferencias_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Web 2.0</td><td><input type="radio" id="Ninguno" name="Habilidades_web2_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_web2_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_web2_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_web2_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_web2_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_web2_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_web2_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_web2_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Web 3.0</td><td><input type="radio" id="Ninguno" name="Habilidades_web3_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_web3_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_web3_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_web3_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_web3_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_web3_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_web3_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_web3_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Web 4.0</td><td><input type="radio" id="Ninguno" name="Habilidades_web4_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_web4_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_web4_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_web4_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_web4_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_web4_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_web4_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_web4_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_dos"></td></tr>
                    <tr><td colspan=2>Conocimientos en aplicaciones de google</td></tr>
                    <tr><td>Busqueda</td><td><input type="radio" id="Ninguno" name="Habilidades_buscador_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_buscador_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_buscador_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_buscador_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_buscador_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_buscador_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_buscador_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_buscador_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Correo</td><td><input type="radio" id="Ninguno" name="Habilidades_correos_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_correos_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_correos_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_correos_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_correos_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_correos_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_correos_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_correos_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Calendario</td><td><input type="radio" id="Ninguno" name="Habilidades_calendario_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_calendario_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_calendario_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_calendario_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_calendario_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_calendario_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_calendario_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_calendario_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Drive</td><td><input type="radio" id="Ninguno" name="Habilidades_drive_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_drive_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_drive_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_drive_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_drive_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_drive_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_drive_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_drive_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Documentos</td><td><input type="radio" id="Ninguno" name="Habilidades_documentos_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_documentos_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_documentos_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_documentos_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_documentos_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_documentos_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_documentos_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_documentos_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Hoja de calculo</td><td><input type="radio" id="Ninguno" name="Habilidades_calculos_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_calculos_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_calculos_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_calculos_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_calculos_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_calculos_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_calculos_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_calculos_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Presentaciones</td><td><input type="radio" id="Ninguno" name="Habilidades_presentaciones_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_presentaciones_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_presentaciones_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_presentaciones_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_presentaciones_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_presentaciones_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_presentaciones_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_presentaciones_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Formularios</td><td><input type="radio" id="Ninguno" name="Habilidades_formularios_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_formularios_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_formularios_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_formularios_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_formularios_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_formularios_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_formularios_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_formularios_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Keep</td><td><input type="radio" id="Ninguno" name="Habilidades_keep_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_keep_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_keep_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_keep_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_keep_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_keep_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_keep_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_keep_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Tareas</td><td><input type="radio" id="Ninguno" name="Habilidades_tareas_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Habilidades_tareas_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Habilidades_tareas_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Habilidades_tareas_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Habilidades_tareas_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Habilidades_tareas_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Habilidades_tareas_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Habilidades_tareas_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_tres"></td></tr>
                    <tr><td colspan=2>Manejo de reses sociales</td></tr>
                    <tr><td>Whatapp</td><td><input type="radio" id="Ninguno" name="Whatsapp_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Whatsapp_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Whatsapp_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Whatsapp_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Whatsapp_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Whatsapp_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Whatsapp_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Whatsapp_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Facebook</td><td><input type="radio" id="Ninguno" name="Facebook_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Facebook_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Facebook_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Facebook_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Facebook_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Facebook_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Facebook_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Facebook_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Youtube</td><td><input type="radio" id="Ninguno" name="Youtube_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Youtube_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Youtube_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Youtube_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Youtube_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Youtube_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Youtube_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Youtube_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Instagram</td><td><input type="radio" id="Ninguno" name="Instagram_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Instagram_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Instagram_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Instagram_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Instagram_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Instagram_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Instagram_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Instagram_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Twitter</td><td><input type="radio" id="Ninguno" name="Twitter_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Twitter_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Twitter_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Twitter_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Twitter_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Twitter_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Twitter_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Twitter_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Linkedin</td><td><input type="radio" id="Ninguno" name="Linkedin_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Linkedin_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Linkedin_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Linkedin_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Linkedin_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Linkedin_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Linkedin_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Linkedin_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
					<tr><td>Tiktok</td><td><input type="radio" id="Ninguno" name="Tiktok_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Tiktok_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Tiktok_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Tiktok_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Tiktok_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Tiktok_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Tiktok_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Tiktok_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_cuatro"></td></tr>
                    <tr><td colspan=2>Conocimientos de herramientas educativas</td></tr>
                    <tr><td>Docs</td><td><input type="radio" id="Ninguno" name="Docs_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Docs_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Docs_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Docs_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Docs_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Docs_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Docs_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Docs_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Kahoot</td><td><input type="radio" id="Ninguno" name="Kahoot_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Kahoot_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Kahoot_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Kahoot_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Kahoot_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Kahoot_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Kahoot_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Kahoot_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Moodle</td><td><input type="radio" id="Ninguno" name="Moodle_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Moodle_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Moodle_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Moodle_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Moodle_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Moodle_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Moodle_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Moodle_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Classroom</td><td><input type="radio" id="Ninguno" name="Classroom_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Classroom_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Classroom_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Classroom_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Classroom_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Classroom_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Classroom_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Classroom_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Evernote</td><td><input type="radio" id="Ninguno" name="Evernote_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Evernote_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Evernote_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Evernote_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Evernote_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Evernote_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Evernote_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Evernote_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Slideshare</td><td><input type="radio" id="Ninguno" name="Slideshare_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Slideshare_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Slideshare_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Slideshare_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Slideshare_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Slideshare_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Slideshare_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Slideshare_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Prezi</td><td><input type="radio" id="Ninguno" name="Prezi_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Prezi_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Prezi_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Prezi_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Prezi_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Prezi_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Prezi_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Prezi_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Blogger</td><td><input type="radio" id="Ninguno" name="Blogger_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Blogger_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Blogger_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Blogger_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Blogger_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Blogger_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Blogger_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Blogger_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Edmodo</td><td><input type="radio" id="Ninguno" name="Edmodo_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Edmodo_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Edmodo_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Edmodo_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Edmodo_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Edmodo_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Edmodo_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Edmodo_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Sites</td><td><input type="radio" id="Ninguno" name="Sites_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Sites_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Sites_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Sites_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Sites_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Sites_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Sites_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Sites_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Powtoon</td><td><input type="radio" id="Ninguno" name="Powtoon_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Powtoon_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Powtoon_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Powtoon_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Powtoon_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Powtoon_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Powtoon_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Powtoon_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Khan</td><td><input type="radio" id="Ninguno" name="Khan_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Khan_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Khan_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Khan_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Khan_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Khan_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Khan_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Khan_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Mindjet</td><td><input type="radio" id="Ninguno" name="Mindjet_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Mindjet_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Mindjet_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Mindjet_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Mindjet_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Mindjet_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Mindjet_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Mindjet_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Onenote</td><td><input type="radio" id="Ninguno" name="Onenote_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Onenote_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Onenote_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Onenote_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Onenote_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Onenote_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Onenote_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Onenote_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Cam</td><td><input type="radio" id="Ninguno" name="Cam_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Cam_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Cam_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Cam_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Cam_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Cam_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Cam_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Cam_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Canva</td><td><input type="radio" id="Ninguno" name="Canva_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Canva_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Canva_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Canva_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Canva_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Canva_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Canva_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Canva_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Dropbox</td><td><input type="radio" id="Ninguno" name="Dropbox_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Dropbox_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Dropbox_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Dropbox_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Dropbox_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Dropbox_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Dropbox_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Dropbox_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Socrative</td><td><input type="radio" id="Ninguno" name="Socrative_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Socrative_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Socrative_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Socrative_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Socrative_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Socrative_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Socrative_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Socrative_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Expediciones</td><td><input type="radio" id="Ninguno" name="Expediciones_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Expediciones_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Expediciones_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Expediciones_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Expediciones_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Expediciones_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Expediciones_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Expediciones_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Wix</td><td><input type="radio" id="Ninguno" name="Wix_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Wix_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Wix_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Wix_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Wix_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Wix_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Wix_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Wix_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Vyond</td><td><input type="radio" id="Ninguno" name="Vyond_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Vyond_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Vyond_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Vyond_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Vyond_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Vyond_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Vyond_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Vyond_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_cinco"></td></tr>
                    <tr><td colspan=2>Uso de plataformas institucionales</td></tr>
                    <tr><td>Intranet</td><td><input type="radio" id="Ninguno" name="Intranet_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Intranet_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Intranet_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Intranet_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Intranet_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Intranet_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Intranet_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Intranet_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Portal docente</td><td><input type="radio" id="Ninguno" name="Portal_docente_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Portal_docente_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Portal_docente_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Portal_docente_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Portal_docente_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Portal_docente_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Portal_docente_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Portal_docente_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Sistema de escalafon scalafon</td><td><input type="radio" id="Ninguno" name="Escalafon_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Escalafon_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Escalafon_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Escalafon_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Escalafon_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Escalafon_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Escalafon_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Escalafon_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Sistema de publicaciones</td><td><input type="radio" id="Ninguno" name="Publicaciones_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Publicaciones_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Publicaciones_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Publicaciones_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Publicaciones_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Publicaciones_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Publicaciones_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Publicaciones_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Moodle</td><td><input type="radio" id="Ninguno" name="Moodle_ucp_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Moodle_ucp_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Moodle_ucp_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Moodle_ucp_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Moodle_ucp_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Moodle_ucp_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Moodle_ucp_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Moodle_ucp_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Bases de datos suscritas</td><td><input type="radio" id="Ninguno" name="Datos_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Datos_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Datos_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Datos_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Datos_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Datos_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Datos_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Datos_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Catálogo en línea de la biblioteca</td><td><input type="radio" id="Ninguno" name="Catalogo_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Catalogo_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Catalogo_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Catalogo_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Catalogo_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Catalogo_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Catalogo_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Catalogo_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>RibUC (Repositorio Institucional)</td><td><input type="radio" id="Ninguno" name="Repositorio_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Repositorio_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Repositorio_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Repositorio_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Repositorio_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Repositorio_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Repositorio_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Repositorio_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Libros electronicos</td><td><input type="radio" id="Ninguno" name="Libros_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Libros_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Libros_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Libros_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Libros_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Libros_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Libros_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Libros_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Sistema Integrado de Gestión</td><td><input type="radio" id="Ninguno" name="Gestion_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Gestion_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Gestion_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Gestion_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Gestion_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Gestion_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Gestion_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Gestion_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_sies"></td></tr>
					<tr><td>¿Conoce todos los servicios disponibles para los profesores, en la Página Web de la Universidad?</td><td><input type="radio" id="Si" name="Servicios_ucp" value="Si"><label for="Si">Si</label>&nbsp;
  					                                    <input type="radio" id="No" name="Servicios_ucp" value="No"><label for="No">No</label>
													</td>
                    </tr>
                </table>
			</section>
            <section id="sec4">
				<h2>Gestión de la informacion</h2>
                <a>
                    En este apartado encuentra las preguntas referentes a cómo gestiona la información en su rol de profesor
                </a><br>
				<table style="margin: 0 auto;">
                    <tr><td colspan=2>Conocimiento de Bases de datos</td></tr>
                    <tr><td>Scopus</td><td><input type="radio" id="Ninguno" name="Scopus_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Scopus_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Scopus_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Scopus_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Scopus_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Scopus_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Scopus_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Scopus_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Sage</td><td><input type="radio" id="Ninguno" name="Sage_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Sage_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Sage_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Sage_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Sage_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Sage_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Sage_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Sage_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Ebsco</td><td><input type="radio" id="Ninguno" name="Ebsco_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Ebsco_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Ebsco_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Ebsco_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Ebsco_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Ebsco_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Ebsco_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Ebsco_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Legiscomex</td><td><input type="radio" id="Ninguno" name="Legiscomex_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Legiscomex_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Legiscomex_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Legiscomex_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Legiscomex_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Legiscomex_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Legiscomex_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Legiscomex_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Redalyc</td><td><input type="radio" id="Ninguno" name="Redalyc_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Redalyc_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Redalyc_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Redalyc_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Redalyc_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Redalyc_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Redalyc_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Redalyc_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Scielo</td><td><input type="radio" id="Ninguno" name="Scielo_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Scielo_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Scielo_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Scielo_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Scielo_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Scielo_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Scielo_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Scielo_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Dialnet</td><td><input type="radio" id="Ninguno" name="Dialnet_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Dialnet_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Dialnet_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Dialnet_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Dialnet_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Dialnet_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Dialnet_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Dialnet_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Science</td><td><input type="radio" id="Ninguno" name="Science_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Science_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Science_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Science_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Science_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Science_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Science_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Science_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_siete"></td></tr>
                    <tr><td colspan=2>Conocimiento sobre software y otras herramientas para investigar</td></tr>
                    <tr><td>Zootero</td><td><input type="radio" id="Ninguno" name="Zootero_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Zootero_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Zootero_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Zootero_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Zootero_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Zootero_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Zootero_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Zootero_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Mendeley</td><td><input type="radio" id="Ninguno" name="Mendeley_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Mendeley_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Mendeley_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Mendeley_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Mendeley_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Mendeley_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Mendeley_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Mendeley_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Refworks</td><td><input type="radio" id="Ninguno" name="Refworks_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Refworks_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Refworks_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Refworks_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Refworks_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Refworks_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Refworks_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Refworks_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Atlasti</td><td><input type="radio" id="Ninguno" name="Atlasti_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Atlasti_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Atlasti_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Atlasti_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Atlasti_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Atlasti_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Atlasti_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Atlasti_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Spss</td><td><input type="radio" id="Ninguno" name="Spss_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Spss_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Spss_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Spss_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Spss_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Spss_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Spss_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Spss_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Turnitin</td><td><input type="radio" id="Ninguno" name="Turnitin_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Turnitin_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Turnitin_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Turnitin_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Turnitin_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Turnitin_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Turnitin_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Turnitin_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Plagium</td><td><input type="radio" id="Ninguno" name="Plagium_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Plagium_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Plagium_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Plagium_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Plagium_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Plagium_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Plagium_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Plagium_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Plagtracker</td><td><input type="radio" id="Ninguno" name="Plagtracker_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Plagtracker_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Plagtracker_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Plagtracker_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Plagtracker_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Plagtracker_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Plagtracker_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Plagtracker_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_ocho"></td></tr>
                    <tr><td colspan=2>Conocimiento de portales para la divulgación de la actividad académica</td></tr>
                    <tr><td>Researchgate</td><td><input type="radio" id="Ninguno" name="Researchgate_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Researchgate_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Researchgate_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Researchgate_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Researchgate_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Researchgate_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Researchgate_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Researchgate_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Google</td><td><input type="radio" id="Ninguno" name="Google_academico_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Google_academico_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Google_academico_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Google_academico_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Google_academico_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Google_academico_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Google_academico_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Google_academico_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Cvlac</td><td><input type="radio" id="Ninguno" name="Cvlac_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Cvlac_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Cvlac_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Cvlac_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Cvlac_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Cvlac_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Cvlac_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Cvlac_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_nueve"></td></tr>
                    <tr><td colspan=2>¿Qué otros recursos electrónicos utiliza para la búsqueda de información Académica?</td></tr>
                    <tr><td>Ebooks</td><td><input type="radio" id="Ninguno" name="Ebooks_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Ebooks_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Ebooks_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Ebooks_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Ebooks_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Ebooks_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Ebooks_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Ebooks_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Ribuc</td><td><input type="radio" id="Ninguno" name="Ribuc_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="Ribuc_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="Ribuc_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="Ribuc_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="Ribuc_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="Ribuc_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="Ribuc_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="Ribuc_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>BiblioTechnia</td><td><input type="radio" id="Ninguno" name="BiblioTechnia_a" value="A"><label for="Ninguno">M.Ninguno</label>
                                  <input type="radio" id="Basico" name="BiblioTechnia_a" value="B"><label for="Basico">M.Basico</label>
                                  <input type="radio" id="Avanzado" name="BiblioTechnia_a" value="C"><label for="Avanzado">M.Avanzado</label>
                                  <input type="radio" id="Experto" name="BiblioTechnia_a" value="D"><label for="Experto">M.Experto</label>
                              </td>
                              <td>
                                  <input type="radio" id="Nunca" name="BiblioTechnia_b" value="A"><label for="Nunca">F.Nunca</label>
                                  <input type="radio" id="Poco" name="BiblioTechnia_b" value="B"><label for="Poco">F.Poco</label>
                                  <input type="radio" id="Frecuente" name="BiblioTechnia_b" value="C"><label for="Frecuente">F.Frecuente</label>
                                  <input type="radio" id="Muy" name="BiblioTechnia_b" value="D"><label for="Muy">F.Muy frecuente</label>
                              </td>
                    </tr>
                    <tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_dies"></td></tr>
                    <tr><td>¿Qué otras herramientas de la Biblioteca considera necesario incorporar en sus procesos enseñanza y aprendizaje?</td><td><input type="text" name="Opiniones"></td>
     				</tr>
                </table>
			</section>
			<section id="sec5">
				<h2>Ubicacion de competencia</h2>
                <a>Competencias TIC:<br>
                    Seleccione de cada una de las competencias, las opciones que se ajusten a su condición de implementación en la clase:<br>
                    El Ministerio de Educación a través de la Oficina de Innovación Educativa, presenta el documento<br>
                    "Competencias TIC para el Desarrollo Profesional Docente", con el fin de guiar a los docentes del<br>
                    país en su proceso de innovación enfocada en el uso pedagógico de las Tecnologías de la Información y<br>
                    la Comunicación.  Se proponen cinco competencias: Tecnológica, Comunicativa, Pedagógica, Gestión e Investigativa.
                </a><br>
                <h2>Pentágono de competencias TIC </h2>
                <a>La competencia Tecnológica busca que la educación se integre con las TIC para mejorar los espacios de enseñanza<br>
                    y aprendizaje; pretende desarrollar la capacidad de seleccionar y utilizar de la mejor manera las herramientas tecnológicas.<br>
                    La segunda competencia, la Comunicativa, permite una conexión de expresión entre estudiantes, docentes e investigadores,<br>
                    entre otros, para relacionarse en espacios virtuales y audiovisuales. La competencia Pedagógica, las TIC han consolidado<br>
                    formas de aproximación al quehacer docente, con el fin de enriquecer las formas de enseñar. La última competencia,<br>
                    la Investigativa, se liga con la de gestión y creación del conocimiento. <br>
                    (http://www.colombiaaprende.edu.co/html/micrositios/1752/articles-318264_recurso_tic.pdf)
                </a><br>
				<table style="margin: 0 auto;">
                    <tr><td>Ubicación de competencia tecnológica<br>
                            Capacidad para seleccionar y utilizar de forma pertinente, responsable y eficiente una variedad de herramientas<br>
                            tecnológicas entendiendo los principios que las rigen, la forma de combinarlas y las licencias que las amparan.
                                                                  </td><td><input type="checkbox" name="Si1" id="Si1" value="Si"><label for="Si1">Identifico las características, usos y oportunidades que ofrecen las herramientas tecnológicas y medios audiovisuales, en los procesos educativos.</label><br>
                                                                            <input type="checkbox" name="Si2" id="Si2" value="Si"><label for="Si2">Elaboro actividades de aprendizaje utilizando aplicativos, contenidos, herramientas informáticas y medios  audiovisuales.</label><br>
                                                                            <input type="checkbox" name="Si3" id="Si3" value="Si"><label for="Si3">Evalúo la calidad, pertinencia y veracidad de la información disponible en diversos medios como portales educativos y especializados, motores de búsqueda y material audiovisual.</label><br>
                                                                            <input type="checkbox" name="Si4" id="Si4" value="Si"><label for="Si4">Combino una amplia variedad de herramientas tecnológicas, para mejorar la planeación e implementación de mis prácticas educativas.</label><br>
                                                                            <input type="checkbox" name="Si5" id="Si5" value="Si"><label for="Si5">Diseño y publico contenidos digitales u objetos virtuales de aprendizaje mediante el uso adecuado de herramientas tecnológicas.</label><br>
                                                                            <input type="checkbox" name="Si6" id="Si6" value="Si"><label for="Si6">Analizo los riesgos y potencialidades de publicar y compartir distintos tipos de información a través de Internet.</label><br>
                                                                            <input type="checkbox" name="Si7" id="Si7" value="Si"><label for="Si7">Utilizo herramientas tecnológicas complejas o especializadas para diseñar ambientes virtuales o aprendizaje que favorecen el desarrollo de competencias en mis estudiantes y la conformación de comunidades y/o redes de aprendizaje.</label><br>
                                                                            <input type="checkbox" name="Si8" id="Si8" value="Si"><label for="Si8">Utilizo herramientas tecnológicas para ayudar a mis estudiantes a construir aprendizajes significativos y desarrollar pensamiento crítico.</label><br>
                                                                            <input type="checkbox" name="Si9" id="Si9" value="Si"><label for="Si9">Aplico las normas de propiedad intelectual y licenciamiento existentes, referentes al uso de información ajena y propia.</label>
                                                                     </td>
					</tr>
                    <tr><td>Ubicación de competencia pedagógica<br>
                            Capacidad de utilizar las TIC para fortalecer los procesos de enseñanza y aprendizaje, reconociendo alcances y<br>
                            limitaciones de la incorporación de estas tecnologías en la formación integral de los estudiantes y en su propio<br>
                            desarrollo profesional.
                                                               </td><td><input type="checkbox" name="Bd1" id="Bd1" value="Si"><label for="Bd1">Utilizo las TIC para aprender por iniciativa personal y para actualizar los conocimientos y prácticas propios de mi disciplina.</label><br>
                                                                        <input type="checkbox" name="Bd2" id="Bd2" value="Si"><label for="Bd2">Identifico problemáticas educativas en mi práctica docente y las oportunidades, implicaciones y riesgos del uso de las TIC para atenderlas.</label><br>
                                                                        <input type="checkbox" name="Bd3" id="Bd3" value="Si"><label for="Bd3">Conozco una variedad de estrategias y metodologías apoyadas por las TIC, para planear y hacer seguimiento a mi labor docente.</label><br>
                                                                        <input type="checkbox" name="Bd4" id="Bd4" value="Si"><label for="Bd4">Incentivo en mis estudiantes el aprendizaje autónomo y el aprendizaje colaborativo apoyados por TIC.</label><br>
                                                                        <input type="checkbox" name="Bd5" id="Bd5" value="Si"><label for="Bd5">Utilizo TIC con mis estudiantes para atender sus necesidades e intereses y proponer soluciones a problemas de aprendizaje.</label><br>
                                                                        <input type="checkbox" name="Bd6" id="Bd6" value="Si"><label for="Bd6">Implemento estrategias didácticas mediadas por TIC, para fortalecer en mis estudiantes aprendizajes que le permiten resolver problemas de la vida real.</label><br>
                                                                        <input type="checkbox" name="Bd7" id="Bd7" value="Si"><label for="Bd7">Diseño ambientes de aprendizaje mediados por TIC de acuerdo con el desarrollo cognitivo, físico, psicológico y social de mis estudiantes para fomentar el desarrollo de sus competencias.</label><br>
                                                                        <input type="checkbox" name="Bd8" id="Bd8" value="Si"><label for="Bd8">Propongo proyectos educativos mediados con TIC, que permiten la reflexión sobre el aprendizaje propio y la producción de conocimiento.</label><br>
                                                                        <input type="checkbox" name="Bd9" id="Bd9" value="Si"><label for="Bd9">Evalúo los resultados obtenidos con la implementación de estrategias que hacen uso de las TIC y promuevo una cultura del seguimiento, realimentación y mejoramiento permanente.</label>
                                                                    </td>
					</tr>
                    <tr><td>Ubicación de competencia comunicativa<br>
                            Capacidad para expresarse, establecer contacto y relacionarse en espacios virtuales y audiovisuales a través<br>
                            de diversos medios y con el manejo de múltiples lenguajes, de manera sincrónica y asincrónica.    
                                                                   </td><td><input type="checkbox" name="Ca1" id="Ca1" value="Si"><label for="Ca1">Me comunico adecuadamente con mis estudiantes y familiares, mis colegas e investigadores usando TIC de manera sincrónica y asincrónica.</label><br>
                                                                            <input type="checkbox" name="Ca2" id="Ca2" value="Si"><label for="Ca2">Navego eficientemente en internet integrando fragmentos de información presentados de forma no lineal.</label><br>
                                                                            <input type="checkbox" name="Ca3" id="Ca3" value="Si"><label for="Ca3">Evalúo la pertinencia de compartir información a través de canales públicos y masivos, respetando las normas de propiedad intelectual y licenciamento.</label><br>
                                                                            <input type="checkbox" name="Ca4" id="Ca4" value="Si"><label for="Ca4">Participa activamente en redes y practicas mediadas por TIC y facilito a la participación de mis estudiantes en las mismas, de una forma pertinente y respetuosa.</label><br>
                                                                            <input type="checkbox" name="Ca5" id="Ca5" value="Si"><label for="Ca5">Sistematizo y hago seguimiento a experiencias significativas de uso de TIC.</label><br>
                                                                            <input type="checkbox" name="Ca6" id="Ca6" value="Si"><label for="Ca6">Promuevo en la comunidad educativa comunicaciones efectivas que aportan al mejoramiento de los procesos de convivencia escolar.</label><br>
                                                                            <input type="checkbox" name="Ca7" id="Ca7" value="Si"><label for="Ca7">Utilizo variedad de textos e interfaces para transmitir información y expresar ideas propias combinando texto, audio, imágenes estáticas y dinámicas, videos y gestos.</label><br>
                                                                            <input type="checkbox" name="Ca8" id="Ca8" value="Si"><label for="Ca8">Interpreto y produzco íconos, símbolos, y otros símbolos de representación de la información, para ser  utilizados con propósitos educativos.</label><br>
                                                                            <input type="checkbox" name="Ca9" id="Ca9" value="Si"><label for="Ca9">Contribuyo con mis conocimientos y los de mis estudiantes a repositorios de la humanidad de internet, con textos de diversa naturaleza.</label>
                                                                      </td>
					</tr>
                    <tr><td>Ubicación de competencia de gestión<br>
                            Capacidad para utilizar las TIC en la planeación, organización , administración y evaluación de manera efectiva<br>
                            en los procesos educativos; tanto a nivel de prácticas pedagógicas como de desarrollo institucional.
                                                               </td><td><input type="checkbox" name="Re1" id="Re1" value="Si"><label for="Re1">Identifico los elementos de la gestión institucional que pueden ser mejorados con el uso de las TIC, en las diferentes actividades institucionales.</label><br>
                                                                        <input type="checkbox" name="Re2" id="Re2" value="Si"><label for="Re2">Conozco políticas institucionales para el uso de las TIC que contemplan la privacidad, en impacto ambiental y la salud de los usuarios.</label><br>
                                                                        <input type="checkbox" name="Re3" id="Re3" value="Si"><label for="Re3">Identifico mis necesidades de desarrollo profesional para la innovación educativa con TIC.</label><br>
                                                                        <input type="checkbox" name="Re4" id="Re4" value="Si"><label for="Re4">Propongo y desarrollo procesos de mejoramiento y seguimiento del uso de TIC en la gestión institucional.</label><br>
                                                                        <input type="checkbox" name="Re5" id="Re5" value="Si"><label for="Re5">Adopto políticas institucionales existentes para el uso de las TIC en trabajo que contemplan la privacidad, el impacto ambiental y la salud de los usuarios.</label><br>
                                                                        <input type="checkbox" name="Re6" id="Re6" value="Si"><label for="Re6">Selecciono y accedo a programas de formación, apropiados para mis necesidades de desarrollo profesional, para la innovación educativa con TIC.</label><br>
                                                                        <input type="checkbox" name="Re7" id="Re7" value="Si"><label for="Re7">Evalúo los beneficios y  utilidades de herramientas TIC en la gestión institucional y en la proyección del PEI dando respuesta a las necesidades de mi institución.</label><br>
                                                                        <input type="checkbox" name="Re8" id="Re8" value="Si"><label for="Re8">Desarrollo políticas institucionales para el uso de las TIC en mi institución que contemplan la privacidad, el impacto ambiental y la salud de los usuarios.</label><br>
                                                                        <input type="checkbox" name="Re9" id="Re9" value="Si"><label for="Re9">Dinamizo la formación de mis colegas y los apoyo para que integren las TIC de forma innovadora en sus prácticas pedagógicas.</label>
                                                                    </td>
					</tr>
                    <tr><td>Ubicación de competencia investigativa<br>
                            Capacidad de utilizar las TIC para la transformación del saber y la generación de nuevos conocimientos.
                                                                   </td><td><input type="checkbox" name="Pu1" id="Pu1" value="Si"><label for="Pu1">Documento observaciones de mi entorno y mi práctica con el apoyo de TIC.</label><br>
                                                                            <input type="checkbox" name="Pu2" id="Pu2" value="Si"><label for="Pu2">Identifico redes, bases de datos y fuentes de información que facilitan mis procesos de investigación.</label><br>
                                                                            <input type="checkbox" name="Pu3" id="Pu3" value="Si"><label for="Pu3">Sé buscar, ordenar, filtrar, conectar y analizar información disponible en internet.</label><br>
                                                                            <input type="checkbox" name="Pu4" id="Pu4" value="Si"><label for="Pu4">Represento e interpreto datos e información de mis investigaciones en diversos formatos digitales.</label><br>
                                                                            <input type="checkbox" name="Pu5" id="Pu5" value="Si"><label for="Pu5">Utilizo redes profesionales y plataformas especializadas en el desarrollo de mis investigaciones.</label><br>
                                                                            <input type="checkbox" name="Pu6" id="Pu6" value="Si"><label for="Pu6">Contrasto y analizo con mis estudiantes información proveniente de múltiples fuentes digitales.</label><br>
                                                                            <input type="checkbox" name="Pu7" id="Pu7" value="Si"><label for="Pu7">Divulgo los resultados de mis investigaciones utilizando las herramientas que ofrecen las TIC.</label><br>
                                                                            <input type="checkbox" name="Pu8" id="Pu8" value="Si"><label for="Pu8">Participo activamente en redes y comunidades de práctica, para la construcción colectiva de conocimientos con estudiantes y colegas, con el apoyo de TIC.</label><br>
                                                                            <input type="checkbox" name="Pu9" id="Pu9" value="Si"><label for="Pu9">Utilizo la información disponible en internet con una actitud crítica y reflexiva.</label>
                                                                       </td>
					</tr>
                    <tr><td>¿En qué tema le gustaría que el Centro de Innovación Educativa profundizara para mejorar sus procesos de enseñanza en ambientes mediados por tecnologías o ambientes virtuales de aprendizaje?</td><td><input type="text" name="Opiniones2"></td>
				</table>
                <input type="submit" value="Enviar" name="Enviar">
			</section>
		</form>
	</body>
</html> 