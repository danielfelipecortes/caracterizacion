CREATE TABLE `0_Facultades` (
  `ID` int(10) NOT NULL,
  `Facultad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `0_Facultades`
  ADD PRIMARY KEY (`ID`);
  
ALTER TABLE `0_Facultades`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

INSERT INTO `0_Facultades` (`ID`, `Facultad`) VALUES
(1, 'Facultad de Ciencias Económicas y Administrativas'),
(2, 'Facultad de Arquitectura y Diseño'),
(3, 'Facultad de Ciencias Humanas, Sociales y de la Edu'),
(4, 'Facultad de Ciencias Básicas e Ingeniería');

CREATE TABLE `0_Programas` (
  `ID` int(11) NOT NULL,
  `Programa` varchar(120) NOT NULL,
  `Facultad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `0_Programas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Facultad` (`Facultad`);
  
ALTER TABLE `0_Programas`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `0_Programas`
  ADD CONSTRAINT `Programas_ibfk_1` FOREIGN KEY (`Facultad`) REFERENCES `0_Facultades` (`ID`);

INSERT INTO `0_Programas` (`ID`, `Programa`, `Facultad`) VALUES
(1, 'Administración de Empresas', 1),
(2, 'Negocios Internacionales', 1),
(3, 'Mercadeo', 1),
(4, 'Tecnología en Gestión de Mercadeo', 1),
(5, 'Maestría en Mercadeo', 1),
(6, 'Maestría en Gestión de Proyectos', 1),
(7, 'Maestría en Gestión del Desarrollo Regional', 1),
(8, 'Maestría en Finanzas', 1),
(9, 'Maestría en Gestión de la Innovación', 1),
(10, 'Especialización en Finanzas', 1),
(11, 'Especialización en Ciberasesoría Financiera', 1),
(12, 'Especialización en Economía Pública y Gestión Territorial', 1),
(13, 'Técnica Profesional en Video, Disc-jockey y Sonido', 2),
(14, 'Arquitectura', 2),
(15, 'Diseño Industrial', 2),
(16, 'Especialización en Gestión de Proyectos e Innovación', 2),
(17, 'Maestría en Arquitectura y Urbanismo', 2),
(18, 'Especialización en Arquitectura Bioclimática', 2),
(19, 'Especialización en Gestión de la Construcción Sostenible', 2),
(20, 'Psicología', 3),
(21, 'Comunicación Social - Periodismo', 3),
(22, 'Licenciatura en Educación Religiosa', 3),
(23, 'Doctorado en Educación en Desarrollo Humano', 3),
(24, 'Maestría en Innovación Educativa', 3),
(25, 'Maestría en Gestión Estratégica de la Comunicación', 3),
(26, 'Maestría en Memoria y Escenarios Transicionales', 3),
(27, 'Maestría en Pedagogía y Desarrollo Humano', 3),
(28, 'Maestría en Estudios Culturales', 3),
(29, 'Especialización en Pedagogía y Desarrollo Humano', 3),
(30, 'Especialización en Edumática Innovación Educativa Mediada por TIC', 3),
(31, 'Especialización en Gerencia de la Comunicación Corporativa', 3),
(32, 'Especialización en Psicología Clínica con énfasis en Psicoterapia con niños y adolescentes', 3),
(33, 'Especialización en Psicología Social Comunitaria y Acción Psicosocial', 3),
(34, 'Especialización en Gestión Humana en las Organizaciones', 3),
(35, 'Ingeniería de Sistemas y Telecomunicaciones', 4),
(36, 'Ingeniería Industrial', 4),
(37, 'Tecnología en Desarrollo de Software', 4);

CREATE TABLE `0_Ciudades` (
  `ID` int(10) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Departamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `0_Ciudades`
  ADD PRIMARY KEY (`ID`);
  
ALTER TABLE `0_Ciudades`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

INSERT INTO `0_Ciudades` (`ID`, `Ciudad`, `Departamento`) VALUES
(1, 'Manizales', 'Caldas'),
(2, 'Armenia', 'Quindio'),
(3, 'Circasia', 'Quindio'),
(4, 'Belén de Umbría', 'Risaralda'),
(5, 'Dosquebradas', 'Risaralda'),
(6, 'La Virginia', 'Risaralda'),
(7, 'Pereira', 'Risaralda'),
(8, 'Santa Rosa de Cabal', 'Risaralda'),
(9, 'Cartago', 'Valle del Cauca');

CREATE TABLE `0_Rol` (
  `ID` int(10) NOT NULL,
  `Rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `0_Rol`
  ADD PRIMARY KEY (`ID`);
  
ALTER TABLE `0_Rol`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

INSERT INTO `0_Rol` (`ID`, `Rol`) VALUES
(1, 'Auxiliar operativo'),
(2, 'Auxiliar administrativo'),
(3, 'Profesional administrativo'),
(4, 'Coordinador de area'),
(5, 'Directivo'),
(6, 'Director de programa'),
(7, 'Aprendiz'),
(8, 'Practicante');

CREATE TABLE `0_Contrato` (
  `ID` int(10) NOT NULL,
  `Tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `0_Contrato`
  ADD PRIMARY KEY (`ID`);
  
ALTER TABLE `0_Contrato`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

INSERT INTO `0_Contrato` (`ID`, `Tipo`) VALUES
(1, 'Docente catedratico'),
(2, 'Docente de planta'),
(3, 'Docente medio tiempo');

CREATE TABLE `0_Areas` (
  `ID` int(11) NOT NULL,
  `Programa` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `0_Areas`
  ADD PRIMARY KEY (`ID`);
  
ALTER TABLE `0_Areas`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

INSERT INTO `0_Areas` (`ID`, `Programa`) VALUES
(1, 'Acompañamiento académico'),
(2, 'Administración de Empresas'),
(3, 'Admisiones y registro'),
(4, 'Almacén'),
(5, 'Arquitectura'),
(6, 'Biblioteca Cardenal Darío Castrillón Hoyos'),
(7, 'Bienestar Social'),
(8, 'Centro de Actividades Culturales'),
(9, 'Centro de Atención Psicológica (CPSI)'),
(10, 'Centro de Familia'),
(11, 'Centro de Graduados'),
(12, 'Centro de Idiomas (CIUC)'),
(13, 'Centro de Innovación Educativa'),
(14, 'Centro de Medios'),
(15, 'Comunicación Social – Periodismo'),
(16, 'Comunicaciones'),
(17, 'Departamento de Ciencias Básicas'),
(18, 'Departamento de Humanidades'),
(19, 'Departamento Financiero'),
(20, 'Desarrollo Humano'),
(21, 'Dirección Administrativa y Financiera'),
(22, 'Dirección de Investigación e Innovación'),
(23, 'Diseño Audiovisual'),
(24, 'Diseño Industrial'),
(25, 'Doctorado en Educación en Desarrollo Humano'),
(26, 'Economía'),
(27, 'Especialización en Arquitectura y Urbanismo Bioclimático'),
(28, 'Especialización en Ciberasesoría Financiera'),
(29, 'Especialización en Desarrollo de Software'),
(30, 'Especialización en Economía Pública y Gestión Territorial'),
(31, 'Especialización en Edumática'),
(32, 'Especialización en Finanzas'),
(33, 'Especialización en Gerencia de la Comunicación Corporativa'),
(34, 'Especialización en Gestión de la Construcción Sostenible'),
(35, 'Especialización en Gestión de Proyectos de Diseño e Innovación'),
(36, 'Especialización en Gestión Humana en las Organizaciones'),
(37, 'Especialización en intervenciones Psicosociales para la Reducción del Consumo de Sustancias Psicoactivas'),
(38, 'Especialización en Pedagogía y Desarrollo Humano'),
(39, 'Especialización en Producción con Calidad Total'),
(40, 'Especialización en Psicología Clínica'),
(41, 'Especialización en Psicología Social Comunitaria y Acción Psicosocial'),
(42, 'Especialización Psicología Clínica con Énfasis en Psicoterapia con Niños'),
(43, 'Especialización Tecnológica en Empresas Agroindustriales'),
(44, 'Facultad de Arquitectura y Diseño'),
(45, 'Facultad de Ciencias Básicas e Ingeniería'),
(46, 'Facultad de Ciencias Económicas y Administrativas'),
(47, 'Facultad de Ciencias Humanas Sociales y de la Educación'),
(48, 'Gestión del Campus'),
(49, 'Gestión Humana'),
(50, 'Gestión Tecnológica'),
(51, 'Ingenería Industrial'),
(52, 'Ingeniería de Sistemas y Telecomunicaciones'),
(53, 'Internacionalización y Relaciones Interinstitucionales'),
(54, 'Licenciatura en Educación Religiosa'),
(55, 'Logistica y Servicios Generales'),
(56, 'Maestría en Arquitectura y Urbanismo'),
(57, 'Maestría en Estudios Culturales'),
(58, 'Maestría en Finanzas'),
(59, 'Maestría en Gestión de la Innovación'),
(60, 'Maestría en Gestión de Proyectos'),
(61, 'Maestría en Gestión del Desrrollo Regional'),
(62, 'Maestría en Innovación Educativa'),
(63, 'Maestría en Memoria y Escenarios Transicionales'),
(64, 'Maestría en Mercadeo'),
(65, 'Maestría en Pedagogía y Desarrollo Humano'),
(66, 'Negocios Internacionales'),
(67, 'Oficina de Mercadeo'),
(68, 'Pastoral Universitaria'),
(69, 'Planeación'),
(70, 'Practicas Académicas'),
(71, 'Programa de Mercadeo'),
(72, 'Proyección Social'),
(73, 'Psicología'),
(74, 'Punto de Bolsa Laboratorio de Econometría y Finanzas'),
(75, 'Recreación y Deporte'),
(76, 'Rectoría'),
(77, 'Secretaría General'),
(78, 'Técnico profesional en video DJ y sonido'),
(79, 'Tecnología en Desarrollo de Software'),
(80, 'Tecnología en Gestión de Empresas AgroIndustriales'),
(81, 'Tecnología en Mercadeo'),
(82, 'Tecnología en producción de imagen y sonido'),
(83, 'Tecnología en Sistemas'),
(84, 'Vicerrectoría Académica'),
(85, 'Vicerrectoría de Proyecto de Vida');

CREATE TABLE `0_Login` (
  `ID` int(10) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `0_Login`
  ADD PRIMARY KEY (`ID`);
  
ALTER TABLE `0_Login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

INSERT INTO `0_Login` (`ID`, `Usuario`, `Password`) VALUES
(1, 'dan', '123'),
(2, 'jef', '123'),
(3, 'viviana.ortiz@ucp.edu.co', 'coordinadora123');

CREATE TABLE `0_Programasdocentes` (
  `ID` int(10) NOT NULL,
  `Programas` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `0_Programasdocentes`
  ADD PRIMARY KEY (`ID`);
  
ALTER TABLE `0_Programasdocentes`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

INSERT INTO `0_Programasdocentes` (`ID`, `Programas`) VALUES
(1, 'Facultad de Arquitectura y Diseño'),
(2, 'Arquitectura'),
(3, 'Diseño Industrial'),
(4, 'Facultad de Ciencias Humanas, Sociales y de la Educación'),
(5, 'Comunicación Social - Periodismo'),
(6, 'Psicología'),
(7, 'Licenciatura en Educación Religiosa'),
(8, 'Facultad de Ciencias Económicas y Administrativas'),
(9, 'Negocios Internacionales'),
(10, 'Administración de empresas'),
(11, 'Economía'),
(12, 'Mercadeo'),
(13, 'Tecnología en Mercadeo'),
(14, 'Técnica Profesional en Operación y Logística de Empresas Agroindustriales'),
(15, 'Tecnología en Gestión de Empresas Agroindustriales'),
(16, 'Facultad de Ciencias Básicas e Ingeniería'),
(17, 'Ingeniería de Sistemas y Telecomunicaciones'),
(18, 'Ingeniería Industrial'),
(19, 'Tecnología en Desarrollo de Software'),
(20, 'Maestría en Arquitectura y Urbanismo'),
(21, 'Especialización en Arquitectura y Urbanismo Bioclimático'),
(22, 'Especialización en Gestión de Proyectos e Innovación'),
(23, 'Maestría en Pedagogía y Desarrollo Humano'),
(24, 'Maestría en Estudios Culturales'),
(25, 'Especialización en Pedagogía y Desarrollo Humano'),
(26, 'Especialización en Edumática Innovación de los procesos educativos a través de herramientas multimediales'),
(27, 'Especialización en Gerencia de la Comunicación Corporativa'),
(28, 'Especialización en Psicología Clínica con énfasis en psicoterapia con niños y adolescentes'),
(29, 'Especialización en Intervenciones Psicosociales para la Reducción del Consumo de Sustancias Psicoactivas'),
(30, 'Especialización en Psicología Social Comunitaria y Acción Psicosocial'),
(31, 'Especialización en Gestión Humana en las Organizaciones'),
(32, 'Maestría en Gestión del Desarrollo Regional'),
(33, 'Especialización en Finanzas'),
(34, 'Especialización en Economía Pública y Gestión Territorial'),
(35, 'Especialización Tecnológica en Empresas Agroindustriales'),
(36, 'Especialización en Desarrollo del Software'),
(37, 'Especialización en Producción con Calidad Total'),
(38, 'Departamento de Humanidades'),
(39, 'Departamento de Ciencias Básicas'),
(40, 'CIUC'),
(41, 'Técnica Profesional en Video, Disc-jockey y Sonido'),
(42, 'Tecnólogo En Producción De Imagen Y Sonido'),
(43, 'Diseño Audiovisual');
