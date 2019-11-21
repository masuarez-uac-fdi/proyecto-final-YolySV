create database niñasstem
use niñasstem
select*from datos


CREATE TABLE datos(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Nombre VARCHAR(45) NOT NULL,
  Apellido VARCHAR(45) NOT NULL,
  Edad INT(10) NOT NULL,
  Sexo VARCHAR(45) NOT NULL,
  Escolaridad VARCHAR(45) NOT NULL,
)

insert into datos (id, Nombre, Apellido, Edad, Sexo, Escolaridad)
values (1,'Fernanda', 'Luna', '22', 'Femenino', 'Licenciatura')
insert into datos (id, Nombre, Apellido, Edad, Sexo, Escolaridad)
values (2,'Laura', 'Pinzón', '20', 'Femenino', 'Preparatoria')
insert into datos (id, Nombre, Apellido, Edad, Sexo, Escolaridad)
values (3,'Karla', 'Vega', '20', 'Femenino', 'Licenciatura')
insert into datos (id, Nombre, Apellido, Edad, Sexo, Escolaridad)
values (4,'Yoly', 'Santos', '20', 'Femenino', 'Licenciatura');
insert into datos (id, Nombre, Apellido, Edad, Sexo, Escolaridad)
values (5,'Claudia', 'Manzanilla', '21', 'Femenino', 'Licenciatura')
