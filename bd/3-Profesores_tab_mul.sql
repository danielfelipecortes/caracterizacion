CREATE TABLE `3.1_Tecnologica` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Contratacion` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL,
  `Op9` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `3.1_Tecnologica`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Contratacion` (`Contratacion`);

ALTER TABLE `3.1_Tecnologica`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `3.1_Tecnologica`
  ADD CONSTRAINT `3.1_Tecnologica_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programasdocentes` (`ID`),
  ADD CONSTRAINT `3.1_Tecnologica_ibfk_2` FOREIGN KEY (`Contratacion`) REFERENCES `0_Contrato` (`ID`);

CREATE TABLE `3.2_Pedagogica` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Contratacion` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL,
  `Op9` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `3.2_Pedagogica`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Contratacion` (`Contratacion`);

ALTER TABLE `3.2_Pedagogica`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `3.2_Pedagogica`
  ADD CONSTRAINT `3.2_Pedagogica_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programasdocentes` (`ID`),
  ADD CONSTRAINT `3.2_Pedagogica_ibfk_2` FOREIGN KEY (`Contratacion`) REFERENCES `0_Contrato` (`ID`);

CREATE TABLE `3.3_Comunicativa` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Contratacion` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL,
  `Op9` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `3.3_Comunicativa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Contratacion` (`Contratacion`);

ALTER TABLE `3.3_Comunicativa`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `3.3_Comunicativa`
  ADD CONSTRAINT `3.3_Comunicativa_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programasdocentes` (`ID`),
  ADD CONSTRAINT `3.3_Comunicativa_ibfk_2` FOREIGN KEY (`Contratacion`) REFERENCES `0_Contrato` (`ID`);

CREATE TABLE `3.4_Gestion` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Contratacion` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL,
  `Op9` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `3.4_Gestion`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Contratacion` (`Contratacion`);

ALTER TABLE `3.4_Gestion`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `3.4_Gestion`
  ADD CONSTRAINT `3.4_Gestion_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programasdocentes` (`ID`),
  ADD CONSTRAINT `3.4_Gestion_ibfk_2` FOREIGN KEY (`Contratacion`) REFERENCES `0_Contrato` (`ID`);

CREATE TABLE `3.5_Investigativa` (
  `ID` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Numero` varchar(15) NOT NULL,
  `Programa` int(10) NOT NULL,
  `Contratacion` int(10) NOT NULL,
  `Op1` varchar(3) NOT NULL,
  `Op2` varchar(3) NOT NULL,
  `Op3` varchar(3) NOT NULL,
  `Op4` varchar(3) NOT NULL,
  `Op5` varchar(3) NOT NULL,
  `Op6` varchar(3) NOT NULL,
  `Op7` varchar(3) NOT NULL,
  `Op8` varchar(3) NOT NULL,
  `Op9` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `3.5_Investigativa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Programa` (`Programa`),
  ADD KEY `Contratacion` (`Contratacion`);

ALTER TABLE `3.5_Investigativa`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `3.5_Investigativa`
  ADD CONSTRAINT `3.5_Investigativa_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `0_Programasdocentes` (`ID`),
  ADD CONSTRAINT `3.5_Investigativa_ibfk_2` FOREIGN KEY (`Contratacion`) REFERENCES `0_Contrato` (`ID`);
