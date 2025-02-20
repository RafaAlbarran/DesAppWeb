CREATE TABLE `Socios` (
  `id` int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `imagen` varchar(255) NULL,
  `nombre_socio` varchar(255) NOT NULL,
  `apellidos_socio` varchar(255) NOT NULL,
  `fecha_nac` date NOT NULL,
  `peso` int NULL,
  `altura` int NULL,
  `categoria` enum('Prebenjamín','Benjamín','Alevín','Infantil','Juvenil','Cadete','Junior','Senior','Veterano') NOT NULL
);

Infantil: Generalmente para niños menores de 12 años.
Alevín: Para niños de 10 a 12 años.
Benjamín: Para niños de 8 a 10 años.
Prebenjamín: Para niños menores de 8 años.
Juvenil: Para jóvenes de 13 a 17 años.
Cadete: Suele incluir a jóvenes de 14 a 16 años.
Junior: Para deportistas de 16 a 19 años.
Senior: Para adultos, generalmente a partir de 18 años.
Veterano: Para deportistas mayores, usualmente a partir de 35 años.

INSERT INTO Socios (imagen, nombre_socio, apellidos_socio, fecha_nac, peso, altura, categoria) VALUES
('imagen1.jpg', 'Juan', 'Pérez', '2010-05-15', 30, 140, 'Alevín'),
('imagen2.jpg', 'María', 'García', '2008-03-22', 35, 145, 'Benjamín'),
('imagen3.jpg', 'Carlos', 'López', '2005-07-10', 55, 160, 'Infantil'),
('imagen4.jpg', 'Ana', 'Martínez', '2000-12-01', 65, 165, 'Juvenil'),
('imagen5.jpg', 'Luis', 'Fernández', '1995-09-30', 75, 175, 'Senior'),
('imagen6.jpg', 'Laura', 'Sánchez', '1985-11-12', 70, 170, 'Veterano'),
('imagen7.jpg', 'Pedro', 'Ramírez', '2003-01-05', 60, 155, 'Cadete'),
('imagen8.jpg', 'Sofia', 'Torres', '2002-06-25', 50, 150, 'Junior'),
('imagen9.jpg', 'Diego', 'Hernández', '2011-04-20', 28, 138, 'Prebenjamín'),
('imagen10.jpg', 'Clara', 'Jiménez', '2007-08-18', 40, 148, 'Benjamín');
