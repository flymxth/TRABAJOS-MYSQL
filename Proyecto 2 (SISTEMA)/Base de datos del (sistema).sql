CREATE DATABASE sistema;
USE sistema;

CREATE TABLE Registro (
	Nombre     varchar(30),
    Login      varchar(30),
    Correo     varchar(50),
    Password   varchar(20)
);

CREATE TABLE Alumnos (
	Matricula        varchar(20),
    Nombre           varchar(20),
    Apellidos        varchar(50),
    Fecha_Nacimiento date,
    Direccion        varchar(30),
    Telefono         varchar(15),
    Correo           varchar(35),
    Padre_tutor      varchar(60)
);
SELECT * FROM Alumnos;
insert into Alumnos values ('999ub1jh', 'Dharius', 'Guzman Alvarez', '2002-07-07', 'Calle 24 de abril', '445-157-43-67', 'dha@gmail.com', 'Padre: Juan Perez Perez');
insert into Alumnos values ('8178b2b', 'Angel David', 'Perez solis', '2001-01-02', 'Calle 21 de septiembre', '445-123-98-02', 'angeldv@gmail.com', 'Madre: Celeste Perez Gonzales');
insert into Alumnos values ('bbhya81', 'Jose Miguel', 'Palmerin Villa', '2022-01-07', 'Calle Emiliano Zapata', '445-231-92-77', 'js@gmail.com', 'Padre: Emiliano Villa Zavala');
insert into Alumnos values ('999ub1jh', 'Dharius', 'Guzman Alvarez', '2002-07-07', 'Calle 24 de abril', '445-157-43-67', 'dha@gmail.com', 'Padre: Juan Perez Perez');
insert into Alumnos values ('999ub1jh', 'Dharius', 'Guzman Alvarez', '2002-07-07', 'Calle 24 de abril', '445-157-43-67', 'dha@gmail.com', 'Padre: Juan Perez Perez');
insert into Alumnos values ('999ub1jh', 'Dharius', 'Guzman Alvarez', '2002-07-07', 'Calle 24 de abril', '445-157-43-67', 'dha@gmail.com', 'Padre: Juan Perez Perez');
insert into Alumnos values ('999ub1jh', 'Dharius', 'Guzman Alvarez', '2002-07-07', 'Calle 24 de abril', '445-157-43-67', 'dha@gmail.com', 'Padre: Juan Perez Perez');
insert into Alumnos values ('999ub1jh', 'Dharius', 'Guzman Alvarez', '2002-07-07', 'Calle 24 de abril', '445-157-43-67', 'dha@gmail.com', 'Padre: Juan Perez Perez');
insert into Alumnos values ('999ub1jh', 'Dharius', 'Guzman Alvarez', '2002-07-07', 'Calle 24 de abril', '445-157-43-67', 'dha@gmail.com', 'Padre: Juan Perez Perez');
insert into Alumnos values ('999ub1jh', 'Dharius', 'Guzman Alvarez', '2002-07-07', 'Calle 24 de abril', '445-157-43-67', 'dha@gmail.com', 'Padre: Juan Perez Perez');
insert into Alumnos values ('999ub1jh', 'Dharius', 'Guzman Alvarez', '2002-07-07', 'Calle 24 de abril', '445-157-43-67', 'dha@gmail.com', 'Padre: Juan Perez Perez');
insert into Alumnos values ('999ub1jh', 'Dharius', 'Guzman Alvarez', '2002-07-07', 'Calle 24 de abril', '445-157-43-67', 'dha@gmail.com', 'Padre: Juan Perez Perez');