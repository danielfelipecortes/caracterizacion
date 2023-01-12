CREATE TABLE `1.1_Conocimiento_adquirido` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Autodidacta` varchar(3) NOT NULL,
  `Curso` varchar(3) NOT NULL,
  `Otra` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.1_Conocimiento_adquirido`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.1_Conocimiento_adquirido`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.1_Conocimiento_adquirido`
  ADD CONSTRAINT `1.1_Conocimiento_adquirido_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.2_Moodle` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.2_Moodle`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.2_Moodle`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.2_Moodle`
  ADD CONSTRAINT `1.2_Moodle_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.3_Portal_estudiantil` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.3_Portal_estudiantil`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.3_Portal_estudiantil`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.3_Portal_estudiantil`
  ADD CONSTRAINT `1.3_Portal_estudiantil_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.4_Solicitudes` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.4_Solicitudes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.4_Solicitudes`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.4_Solicitudes`
  ADD CONSTRAINT `1.4_Solicitudes_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.5_Bases_datos` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.5_Bases_datos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.5_Bases_datos`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.5_Bases_datos`
  ADD CONSTRAINT `1.5_Bases_datos_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.6_Catalogo` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.6_Catalogo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.6_Catalogo`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.6_Catalogo`
  ADD CONSTRAINT `1.6_Catalogo_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.7_Repositorio` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.7_Repositorio`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.7_Repositorio`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.7_Repositorio`
  ADD CONSTRAINT `1.7_Repositorio_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.8_Publicaciones` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.8_Publicaciones`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.8_Publicaciones`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.8_Publicaciones`
  ADD CONSTRAINT `1.8_Publicaciones_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.9_Libros` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.9_Libros`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.9_Libros`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.9_Libros`
  ADD CONSTRAINT `1.9_Libros_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.10_Guardar` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.10_Guardar`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.10_Guardar`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.10_Guardar`
  ADD CONSTRAINT `1.10_Guardar_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.11_Contrastar` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.11_Contrastar`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.11_Contrastar`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.11_Contrastar`
  ADD CONSTRAINT `1.11_Contrastar_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.12_Creatividad` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.12_Creatividad`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.12_Creatividad`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.12_Creatividad`
  ADD CONSTRAINT `1.12_Creatividad_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.13_Comunicacion` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.13_Comunicacion`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.13_Comunicacion`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.13_Comunicacion`
  ADD CONSTRAINT `1.13_Comunicacion_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.14_Investigacion` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.14_Investigacion`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.14_Investigacion`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.14_Investigacion`
  ADD CONSTRAINT `1.14_Investigacion_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.15_Pensamiento` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.15_Pensamiento`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.15_Pensamiento`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.15_Pensamiento`
  ADD CONSTRAINT `1.15_Pensamiento_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.16_Ciudadania` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.16_Ciudadania`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.16_Ciudadania`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.16_Ciudadania`
  ADD CONSTRAINT `1.16_Ciudadania_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

CREATE TABLE `1.17_Operaciones` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Semestre` varchar(7) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `1.17_Operaciones`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`);

ALTER TABLE `1.17_Operaciones`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `1.17_Operaciones`
  ADD CONSTRAINT `1.17_Operaciones_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programas` (`ID`);

