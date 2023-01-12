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
				    <h2>Diagnóstico de competencias TIC/Administrativos</h2>  
                    <a>La Universidad Católica de Pereira, a través del Centro de Innovación Educativa, está interesada en formular y  desarrollar un plan de apropiación de TIC que se ajuste a las condiciones reales encontradas en la comunidad administrativa. Para esto se requiere diagnosticar las competencias tecnológicas y las condiciones de acceso remoto que posee en su calidad de Administrativo.<br>
                       El tiempo estimado para responder a esta encuesta es de 30 minutos.<br>
                       Lo invitamos a participar de forma sincera del proceso, diligenciando las siguientes preguntas.
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
					<tr><td>Programa o área a la que pertenece</td><td><select type="number" name="Programa" id="Programa">
                                                                <?php include ("../Estructura/Listas/areas.php")?>
                                                              </select>
														  </td>
					</tr>
					<tr><td>Cargo</td><td><select type="number" name="Cargo" id="Cargo">
                                                <?php include ("../Estructura/Listas/cargos.php")?>
                                             </select>
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
                    <tr><td>¿Cómo evalúa qué son sus habilidades digitales  para dar respuesta a los requerimientos laborales?</td><td><input type="radio" id="Basico" name="Habilidades_digitales" value="Basico"><label for="Basico">Basico</label>
                                                          <input type="radio" id="Intermedio" name="Habilidades_digitales" value="Intermedio"><label for="Intermedio">Intermedio</label>
                                                          <input type="radio" id="Avanzado" name="Habilidades_digitales" value="Avanzado"><label for="Avanzado">Avanzado</label>
						                              </td>
					</tr>
                    <tr><td colspan=2>En las siguientes tablas listan algunas herramientas TIC. <br>En cada una de las filas debe seleccionar su respuesta según su conocimiento frente a ellas:</td></tr>
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
                    <tr><td>Web 2.0</td><td><input type="radio" id="Ninguno" name="Web2" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                                       <input type="radio" id="Basico" name="Web2" value="Basico"><label for="Basico">Basico</label>
                                                       <input type="radio" id="Avanzado" name="Web2" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                       <input type="radio" id="Experto" name="Web2" value="Experto"><label for="Experto">Experto</label>
                                                   </td>
					</tr>
                    <tr><td>Web 3.0</td><td><input type="radio" id="Ninguno" name="Web3" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                                       <input type="radio" id="Basico" name="Web3" value="Basico"><label for="Basico">Basico</label>
                                                       <input type="radio" id="Avanzado" name="Web3" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                       <input type="radio" id="Experto" name="Web3" value="Experto"><label for="Experto">Experto</label>
                                                   </td>
					</tr>
                    <tr><td>Web 4.0</td><td><input type="radio" id="Ninguno" name="Web4" value="Ninguno"><label for="Ninguno">Ninguno</label>
                                                       <input type="radio" id="Basico" name="Web4" value="Basico"><label for="Basico">Basico</label>
                                                       <input type="radio" id="Avanzado" name="Web4" value="Avanzado"><label for="Avanzado">Avanzado</label>
                                                       <input type="radio" id="Experto" name="Web4" value="Experto"><label for="Experto">Experto</label>
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
                    <tr><td colspan=2>En las siguientes tablas se listan los principales sistemas de información institucionales.  Para ir al final de las opciones,<br>
                                      deberá mover la barra de desplazamiento. En cada una de las filas debe seleccionar su respuesta según las siguientes indicaciones:<br>
                                      •  En las primeras 4 columnas, selecciona el nivel de manejo del sistema.<br>
                                      •  En las últimas 4 columnas, responde la frecuencia de uso del sistema.<br>
                                        M = Manejo 
                                        F = Frecuencia 
                    </td></tr>
                    <tr><td colspan=2>¿Cómo calificaría el manejo, uso y frecuencia que le da a los sistemas de información Institucionales?</td></tr>
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
                    <tr><td>Sistema academico</td><td><input type="checkbox" name="Si1" id="Si1" value="Si"><label for="Si1">M. Ninguno</label>
                                           <input type="checkbox" name="Si2" id="Si2" value="Si"><label for="Si2">M. Basico</label>
                                           <input type="checkbox" name="Si3" id="Si3" value="Si"><label for="Si3">M. Avanzado</label>
                                           <input type="checkbox" name="Si4" id="Si4" value="Si"><label for="Si4">M. Experto</label>
                                           <input type="checkbox" name="Si7" id="Si7" value="Si"><label for="Si7">F. Nunca</label>
                                           <input type="checkbox" name="Si8" id="Si8" value="Si"><label for="Si8">F. Poco</label>
                                           <input type="checkbox" name="Si9" id="Si9" value="Si"><label for="Si9">F. Frecuente</label>
                                           <input type="checkbox" name="Si10" id="Si10" value="Si"><label for="Si10">F. Muy Frecuente</label>
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
					<tr><td>Catalogo en linea</td><td><input type="checkbox" name="Ca1" id="Ca1" value="Si"><label for="Ca1">M. Ninguno</label>
                                                      <input type="checkbox" name="Ca2" id="Ca2" value="Si"><label for="Ca2">M. Basico</label>
                                                      <input type="checkbox" name="Ca3" id="Ca3" value="Si"><label for="Ca3">M. Avanzado</label>
                                                      <input type="checkbox" name="Ca4" id="Ca4" value="Si"><label for="Ca4">M. Experto</label>
                                                      <input type="checkbox" name="Ca7" id="Ca7" value="Si"><label for="Ca7">F. Nunca</label>
                                                      <input type="checkbox" name="Ca8" id="Ca8" value="Si"><label for="Ca8">F. Poco</label>
                                                      <input type="checkbox" name="Ca9" id="Ca9" value="Si"><label for="Ca9">F. Frecuente</label>
                                                      <input type="checkbox" name="Ca10" id="Ca10" value="Si"><label for="Ca10">F. Muy Frecuente</label>
                                                  </td>
					</tr>
					<tr><td>RibUC (Repositorio institucional)</td><td><input type="checkbox" name="Re1" id="Re1" value="Si"><label for="Re1">M. Ninguno</label>
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
					<tr><td>Yéminus-ERP</td><td><input type="checkbox" name="Pe1" id="Pe1" value="Si"><label for="Pe1">M. Ninguno</label>
                                                       <input type="checkbox" name="Pe2" id="Pe2" value="Si"><label for="Pe2">M. Basico</label>
                                                       <input type="checkbox" name="Pe3" id="Pe3" value="Si"><label for="Pe3">M. Avanzado</label>
                                                       <input type="checkbox" name="Pe4" id="Pe4" value="Si"><label for="Pe4">M. Experto</label>
                                                       <input type="checkbox" name="Pe7" id="Pe7" value="Si"><label for="Pe7">F. Nunca</label>
                                                       <input type="checkbox" name="Pe8" id="Pe8" value="Si"><label for="Pe8">F. Poco</label>
                                                       <input type="checkbox" name="Pe9" id="Pe9" value="Si"><label for="Pe9">F. Frecuente</label>
                                                       <input type="checkbox" name="Pe10" id="Pe10" value="Si"><label for="Pe10">F. Muy Frecuente</label>
                                                   </td>
					</tr>
					<tr><td>Intranet</td><td><input type="checkbox" name="So1" id="So1" value="Si"><label for="So1">M. Ninguno</label>
                                                           <input type="checkbox" name="So2" id="So2" value="Si"><label for="So2">M. Basico</label>
                                                           <input type="checkbox" name="So3" id="So3" value="Si"><label for="So3">M. Avanzado</label>
                                                           <input type="checkbox" name="So4" id="So4" value="Si"><label for="So4">M. Experto</label>
                                                           <input type="checkbox" name="So7" id="So7" value="Si"><label for="So7">F. Nunca</label>
                                                           <input type="checkbox" name="So8" id="So8" value="Si"><label for="So8">F. Poco</label>
                                                           <input type="checkbox" name="So9" id="So9" value="Si"><label for="So9">F. Frecuente</label>
                                                           <input type="checkbox" name="So10" id="So10" value="Si"><label for="So10">F. Muy Frecuente</label>
                                                       </td>
					</tr>
					<tr><td>Sevenet</td><td><input type="checkbox" name="Se1" id="Se1" value="Si"><label for="Se1">M. Ninguno</label>
                                                           <input type="checkbox" name="Se2" id="Se2" value="Si"><label for="Se2">M. Basico</label>
                                                           <input type="checkbox" name="Se3" id="Se3" value="Si"><label for="Se3">M. Avanzado</label>
                                                           <input type="checkbox" name="Se4" id="Se4" value="Si"><label for="Se4">M. Experto</label>
                                                           <input type="checkbox" name="Se7" id="Se7" value="Si"><label for="Se7">F. Nunca</label>
                                                           <input type="checkbox" name="Se8" id="Se8" value="Si"><label for="Se8">F. Poco</label>
                                                           <input type="checkbox" name="Se9" id="Se9" value="Si"><label for="Se9">F. Frecuente</label>
                                                           <input type="checkbox" name="Se10" id="Se10" value="Si"><label for="Se10">F. Muy Frecuente</label>
                                                       </td>
					</tr>
					<tr><td>SAR: Sistema Administrador de Recursos</td><td><input type="checkbox" name="Sa1" id="Sa1" value="Si"><label for="Sa1">M. Ninguno</label>
                                                           <input type="checkbox" name="Sa2" id="Sa2" value="Si"><label for="Sa2">M. Basico</label>
                                                           <input type="checkbox" name="Sa3" id="Sa3" value="Si"><label for="Sa3">M. Avanzado</label>
                                                           <input type="checkbox" name="Sa4" id="Sa4" value="Si"><label for="Sa4">M. Experto</label>
                                                           <input type="checkbox" name="Sa7" id="Sa7" value="Si"><label for="Sa7">F. Nunca</label>
                                                           <input type="checkbox" name="Sa8" id="Sa8" value="Si"><label for="Sa8">F. Poco</label>
                                                           <input type="checkbox" name="Sa9" id="Sa9" value="Si"><label for="Sa9">F. Frecuente</label>
                                                           <input type="checkbox" name="Sa10" id="Sa10" value="Si"><label for="Sa10">F. Muy Frecuente</label>
                                                       </td>
					</tr>
                    <tr><td>Si conoce otro indique ¿cuál?</td><td><input type="text" name="Otro_cuatro"></td></tr>
					<tr><td>¿Conoce todos los servicios disponibles en la Página Web de la Universidad?</td><td><input type="radio" id="Si" name="Servicios_ucp" value="Si"><label for="Si">Si</label>&nbsp;
  					                                    <input type="radio" id="No" name="Servicios_ucp" value="No"><label for="No">No</label>
													</td>
                    </tr>
                </table>
			</section>
            <section id="sec4">
				<h2>Gestión de la informacion</h2>
				<table style="margin: 0 auto;">
                    <tr><td colspan=2>En este apartado encuentra las preguntas referentes a cómo gestiona la información en su rol de administrativo:</td></tr>
					<tr><td>Cuando encuentra información interesante en la red, ya sea para un trabajo o para algún tema que le interesa a nivel personal, ¿cómo la guarda?</td><td><input type="checkbox" name="Gu1" id="Gu1" value="Si"><label for="Gu1">No la guardo, tengo buena memoria.</label><br>
                                                        <input type="checkbox" name="Gu2" id="Gu2" value="Si"><label for="Gu2">Me envío la información por e-mail para guardarla.</label><br>
                                                        <input type="checkbox" name="Gu3" id="Gu3" value="Si"><label for="Gu3">La guardo en alguna herramienta de lectura.</label><br>
                                                        <input type="checkbox" name="Gu4" id="Gu4" value="Si"><label for="Gu4">La guardo en favoritos.</label><br>
                                                        <input type="checkbox" name="Gu5" id="Gu5" value="Si"><label for="Gu5">La comparto para poderla encontrar cuando la busque.</label>
													</td>
					<tr><td>¿Contrasta con diferentes fuentes: la calidad, fiabilidad y pertinencia de la información que obtiene en Internet?</td><td><input type="checkbox" name="Co1" id="Co1" value="Si"><label for="Co1">No se puede creer nada de lo que se publica en Internet, todo es falso.</label><br>
                                                           <input type="checkbox" name="Co2" id="Co2" value="Si"><label for="Co2">Lo que aparece en los medios de comunicación siempre es cierto.</label><br>
                                                           <input type="checkbox" name="Co3" id="Co3" value="Si"><label for="Co3">Yo reenvío todo lo que me llega, nunca me equivoco.</label><br>
                                                           <input type="checkbox" name="Co4" id="Co4" value="Si"><label for="Co4">Cuando me llega algo demasiado sorprendente siempre contrasto con otras fuentes.</label><br>
                                                           <input type="checkbox" name="Co5" id="Co5" value="Si"><label for="Co5">Busco de forma activa y tengo el sentido crítico muy despierto.</label>
													   </td>
					</tr>
                </table>
			</section>
			<section id="sec5">
				<h2>Comunicación Digital</h2>
				<table style="margin: 0 auto;">
                    <tr><td colspan=2>En este apartado, encuentra las preguntas relacionadas con la web y sus interacciones en ella:</td></tr>
                    <tr><td colspan=2>¿Qué redes sociales utiliza y con qué frecuencia?  Seleccione una respuesta de 0 a 5, siendo 0 la menor frecuencia y 5 la mayor.</td></tr>
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
					<tr><td>Si utiliza otra indique ¿cuál?</td><td><input type="text" name="Otro_cinco"></td></tr>
					<tr><td>¿Cómo utiliza las Redes Sociales?</td><td><input type="radio" id="Respuesta1" name="Uso_redes_sociales" value="Respuesta1"><label for="Respuesta1">No las utilizo.</label><br>
                                                                      <input type="radio" id="Respuesta2" name="Uso_redes_sociales" value="Respuesta2"><label for="Respuesta2">Las utilizo para estar informado de lo que hacen mis amigos.</label><br>
                                                                      <input type="radio" id="Respuesta3" name="Uso_redes_sociales" value="Respuesta3"><label for="Respuesta3">Comparto de vez en cuando contenidos interesantes.</label><br>
                                                                      <input type="radio" id="Respuesta4" name="Uso_redes_sociales" value="Respuesta4"><label for="Respuesta4">Las utilizo como fuente de información más allá del ámbito personal.</label><br>
                                                                      <input type="radio" id="Respuesta5" name="Uso_redes_sociales" value="Respuesta5"><label for="Respuesta5">Soy un difusor constante de contenidos, una referencia profesional para mis contactos.</label>
                                                                  </td>
					</tr>
					<tr><td>Cuando tiene que comunicarse con una persona ¿cuál de los siguientes criterios utiliza?</td><td><input type="radio" id="Respuesta1" name="Criterios" value="Respuesta1"><label for="Respuesta1">Principalmente el e-mail o teléfono.</label><br>
                                                                                                                            <input type="radio" id="Respuesta2" name="Criterios" value="Respuesta2"><label for="Respuesta2">Envío un e-mail y si quiero que me contesten rápido, también un WhatsApp y luego una llamada.</label><br>
                                                                                                                            <input type="radio" id="Respuesta3" name="Criterios" value="Respuesta3"><label for="Respuesta3">Dependiendo del mensaje utilizo un canal u otro: e-mail no es para todo y sé que no es eficiente.</label>
                                                                                                                        </td>
					</tr>
				</table>
			</section>
			<section id="sec6">
				<h2>Identidad Digital</h2>
				<table style="margin: 0 auto;">
                    <tr><td colspan=2>En este apartado, encuentra las preguntas relacionadas con todo lo que identifica a otros y a usted en el entorno online.</td></tr>
					<tr><td>¿Cómo afecta internet a lo público/privado?</td><td><input type="radio" id="Respuesta1" name="Privasidad" value="Respuesta1"><label for="Respuesta1">En Internet todo es público.</label><br>
                                                                                <input type="radio" id="Respuesta2" name="Privasidad" value="Respuesta2"><label for="Respuesta2">En Internet los dos ámbitos están expuestos y no se pueden gestionar.</label><br>
                                                                                <input type="radio" id="Respuesta3" name="Privasidad" value="Respuesta3"><label for="Respuesta3">Yo gestiono mi privacidad y presencia en Internet de forma activa.</label><br>
                                                                                <input type="radio" id="Respuesta4" name="Privasidad" value="Respuesta4"><label for="Respuesta4">En Internet lo dos ámbitos están expuestos y podemos controlarlos.</label>
                                                                            </td>
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
				<h2>Aprendizaje continuo</h2>
				<table style="margin: 0 auto;">
                    <tr><td colspan=2>Este apartado, despliega las preguntas sobre las formas y estrategias que contribuyen a su aprendizaje: </td></tr>
					<tr><td>¿Cómo aprende cosas nuevas?</td><td><input type="checkbox" name="Crea1" id="Crea1" value="Si"><label for="Crea1">Sólo aprendo de verdad yendo a clase</label><br>
                                                                <input type="checkbox" name="Crea2" id="Crea2" value="Si"><label for="Crea2">Busco presentaciones y vídeos por Internet</label><br>
                                                                <input type="checkbox" name="Crea3" id="Crea3" value="Si"><label for="Crea3">Suelo leer muchas noticias y enlaces por Internet</label><br>
                                                                <input type="checkbox" name="Crea4" id="Crea4" value="Si"><label for="Crea4">Leo de forma periódica libros o ebooks</label><br>
                                                                <input type="checkbox" name="Crea5" id="Crea5" value="Si"><label for="Crea5">A partir de explicar, escribir, estructurar y analizar las nuevas ideas que descubro</label><br>
                                                                <input type="checkbox" name="Crea6" id="Crea6" value="Si"><label for="Crea6">A partir de notas y resúmenes de aquello que me interesa</label><br>
                                                                <label for="Otra">Otra:</label><input type="text" name="Otra">
                                                            </td>
					</tr>
					<tr><td>Cuando necesita algún software o aplicación... </td><td><input type="checkbox" name="Com1" id="Com1" value="Si"><label for="Com1">Se lo pide a algún conocido o familiar</label><br>
                                                                                    <input type="checkbox" name="Com2" id="Com2" value="Si"><label for="Com2">Se queda con las ganas</label><br>
                                                                                    <input type="checkbox" name="Com3" id="Com3" value="Si"><label for="Com3">No suele necesitar nada</label><br>
                                                                                    <input type="checkbox" name="Com4" id="Com4" value="Si"><label for="Com4">Lo baja directamente de Internet</label><br>
                                                                                    <input type="checkbox" name="Com5" id="Com5" value="Si"><label for="Com5">Consulta el tipo de licencia que requiere y la compra</label>
                                                                                </td>
					</tr>
					<tr><td>¿Qué tipo de contenido le interesa mirar en internet?</td><td><input type="checkbox" name="Inv1" id="Inv1" value="Si"><label for="Inv1">Noticias</label><br>
                                                                                          <input type="checkbox" name="Inv2" id="Inv2" value="Si"><label for="Inv2">Series</label><br>
                                                                                          <input type="checkbox" name="Inv3" id="Inv3" value="Si"><label for="Inv3">Juegos</label><br>
                                                                                          <input type="checkbox" name="Inv4" id="Inv4" value="Si"><label for="Inv4">Nuevas aplicaciones</label><br>
                                                                                          <input type="checkbox" name="Inv5" id="Inv5" value="Si"><label for="Inv5">Aplicaciones educativas</label><br>
                                                                                          <input type="checkbox" name="Inv6" id="Inv6" value="Si"><label for="Inv6">Contenidos relacionados con mi profesión o mi labor</label>
                                                                                      </td>
					</tr>
                    <tr><td>¿En qué tema le gustaría que el Centro de Innovación Educativa,<br> profundizara para mejorar sus procesos formativos <br>en ambientes mediados por tecnologías?</td><td><input type="text" name="Opiniones"></td>
     				</tr>
                </table>
                <input type="submit" value="Enviar" name="Enviar">
			</section>
		</form>
	</body>
</html> 