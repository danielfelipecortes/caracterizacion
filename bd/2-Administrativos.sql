CREATE TABLE `2.0_Administrativos` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Documento` varchar(3) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Ciudad` int(10) NOT NULL,
  `Habilidades_digitales` varchar(12) NOT NULL,
  `Habilidades_texto` varchar(12) NOT NULL,
  `Habilidades_calculo` varchar(12) NOT NULL,
  `Habilidades_presentacion` varchar(12) NOT NULL,
  `Habilidades_datos` varchar(12) NOT NULL,
  `Habilidades_herramientas` varchar(12) NOT NULL,
  `Habilidades_correo` varchar(12) NOT NULL,
  `Habilidades_hardware` varchar(12) NOT NULL,
  `Habilidades_software` varchar(12) NOT NULL,
  `Otro_uno` varchar(50) NOT NULL,
  `Habilidades_navegador` varchar(12) NOT NULL,
  `Habilidades_buscadores` varchar(12) NOT NULL,
  `Habilidades_correo_electronico` varchar(12) NOT NULL,
  `Habilidades_seguridad` varchar(12) NOT NULL,
  `Habilidades_web2` varchar(12) NOT NULL,
  `Habilidades_web3` varchar(12) NOT NULL,
  `Habilidades_web4` varchar(12) NOT NULL,
  `Habilidades_redes_sociales` varchar(12) NOT NULL,
  `Habilidades_foros` varchar(12) NOT NULL,
  `Habilidades_blogs` varchar(12) NOT NULL,
  `Habilidades_nube` varchar(12) NOT NULL,
  `Habilidades_conferencias` varchar(12) NOT NULL,
  `Otro_dos` varchar(50) NOT NULL,
  `Habilidades_buscador` varchar(12) NOT NULL,
  `Habilidades_correos` varchar(12) NOT NULL,
  `Habilidades_calendario` varchar(12) NOT NULL,
  `Habilidades_drive` varchar(12) NOT NULL,
  `Habilidades_documentos` varchar(12) NOT NULL,
  `Habilidades_calculos` varchar(12) NOT NULL,
  `Habilidades_presentaciones` varchar(12) NOT NULL,
  `Habilidades_formularios` varchar(12) NOT NULL,
  `Habilidades_keep` varchar(12) NOT NULL,
  `Habilidades_Jamboard` varchar(12) NOT NULL,
  `Otro_tres` varchar(50) NOT NULL,
  `Otro_cuatro` varchar(50) NOT NULL,
  `Servicios_ucp` varchar(3) NOT NULL,
  `Whatsapp` varchar(2) NOT NULL,
  `Facebook` varchar(2) NOT NULL,
  `Youtube` varchar(2) NOT NULL,
  `Instagram` varchar(2) NOT NULL,
  `Twitter` varchar(2) NOT NULL,
  `Linkedin` varchar(2) NOT NULL,
  `Tiktok` varchar(2) NOT NULL,
  `Otro_cinco` varchar(50) NOT NULL,
  `Uso_redes_sociales` varchar(11) NOT NULL,
  `Criterios` varchar(11) NOT NULL,
  `Privasidad` varchar(11) NOT NULL,
  `Netiqueta` varchar(3) NOT NULL,
  `Trato` varchar(13) NOT NULL,
  `Ignorar` varchar(13) NOT NULL,
  `Breve` varchar(13) NOT NULL,
  `Preocupacion` varchar(13) NOT NULL,
  `Demas` varchar(13) NOT NULL,
  `Respeto` varchar(13) NOT NULL,
  `Mucho_texto` varchar(13) NOT NULL,
  `Opiniones` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.0_Administrativos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`),
  ADD KEY `Ciudad` (`Ciudad`);

ALTER TABLE `2.0_Administrativos`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.0_Administrativos`
  ADD CONSTRAINT `2.0_Administrativos_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.0_Administrativos_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`),
  ADD CONSTRAINT `2.0_Administrativos_ibfk_3` FOREIGN KEY (`Ciudad`) REFERENCES `0_Ciudades` (`ID`);