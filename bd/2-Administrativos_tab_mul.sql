CREATE TABLE `2.1_Moodle` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.1_Moodle`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.1_Moodle`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.1_Moodle`
  ADD CONSTRAINT `2.1_Moodle_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.1_Moodle_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

CREATE TABLE `2.2_Sistema_academico` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.2_Sistema_academico`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.2_Sistema_academico`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.2_Sistema_academico`
  ADD CONSTRAINT `2.2_Sistema_academico_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.2_Sistema_academico_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

CREATE TABLE `2.3_Bases_datos` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.3_Bases_datos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.3_Bases_datos`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.3_Bases_datos`
  ADD CONSTRAINT `2.3_Bases_datos_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.3_Bases_datos_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

CREATE TABLE `2.4_Catalogo` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.4_Catalogo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.4_Catalogo`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.4_Catalogo`
  ADD CONSTRAINT `2.4_Catalogo_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.4_Catalogo_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

CREATE TABLE `2.5_Repositorio` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.5_Repositorio`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.5_Repositorio`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.5_Repositorio`
  ADD CONSTRAINT `2.5_Repositorio_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.5_Repositorio_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

CREATE TABLE `2.6_Publicaciones` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.6_Publicaciones`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.6_Publicaciones`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.6_Publicaciones`
  ADD CONSTRAINT `2.6_Publicaciones_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.6_Publicaciones_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

CREATE TABLE `2.7_Libros` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.7_Libros`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.7_Libros`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.7_Libros`
  ADD CONSTRAINT `2.7_Libros_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.7_Libros_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

CREATE TABLE `2.8_Yeminus` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.8_Yeminus`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.8_Yeminus`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.8_Yeminus`
  ADD CONSTRAINT `2.8_Yeminus_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.8_Yeminus_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

CREATE TABLE `2.9_Intranet` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.9_Intranet`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.9_Intranet`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.9_Intranet`
  ADD CONSTRAINT `2.9_Intranet_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.9_Intranet_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

CREATE TABLE `2.10_Sevenet` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.10_Sevenet`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.10_Sevenet`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.10_Sevenet`
  ADD CONSTRAINT `2.10_Sevenet_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.10_Sevenet_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

CREATE TABLE `2.11_Sar` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.11_Sar`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.11_Sar`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.11_Sar`
  ADD CONSTRAINT `2.11_Sar_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.11_Sar_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

CREATE TABLE `2.12_Guardar` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.12_Guardar`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.12_Guardar`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.12_Guardar`
  ADD CONSTRAINT `2.12_Guardar_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.12_Guardar_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

CREATE TABLE `2.13_Contrastar` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.13_Contrastar`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.13_Contrastar`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.13_Contrastar`
  ADD CONSTRAINT `2.13_Contrastar_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.13_Contrastar_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

CREATE TABLE `2.14_Aprendizaje` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Otra` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.14_Aprendizaje`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.14_Aprendizaje`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.14_Aprendizaje`
  ADD CONSTRAINT `2.14_Aprendizaje_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.14_Aprendizaje_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

CREATE TABLE `2.15_Necesidad` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.15_Necesidad`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.15_Necesidad`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.15_Necesidad`
  ADD CONSTRAINT `2.15_Necesidad_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.15_Necesidad_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

CREATE TABLE `2.16_Contenido` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `2.16_Contenido`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Cargo` (`Cargo`);

ALTER TABLE `2.16_Contenido`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `2.16_Contenido`
  ADD CONSTRAINT `2.16_Contenido_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Areas` (`ID`),
  ADD CONSTRAINT `2.16_Contenido_ibfk_2` FOREIGN KEY (`Cargo`) REFERENCES `0_Rol` (`ID`);

