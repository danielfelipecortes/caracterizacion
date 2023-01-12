CREATE TABLE `grafica1` (
  `ID` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `grafica1`
  ADD PRIMARY KEY (`ID`);
  
ALTER TABLE `grafica1`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

INSERT INTO `grafica1` (`ID`, `name`, `rating`) VALUES
(1, 'Facultad de Ciencias Económicas y Administrativas', 1),
(2, 'Facultad de Arquitectura y Diseño', 1),
(3, 'Facultad de Ciencias Humanas, Sociales y de la Educación', 1),
(4, 'Facultad de Ciencias Básicas e Ingeniería', 1);

CREATE TABLE `grafica3` (
  `ID` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `grafica3`
  ADD PRIMARY KEY (`ID`);
  
ALTER TABLE `grafica3`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

INSERT INTO `grafica3` (`ID`, `name`, `rating`) VALUES
(1, '2021-1', 1),
(2, '2021-2', 1),
(3, '2022-1', 1),
(4, '2022-2', 1);