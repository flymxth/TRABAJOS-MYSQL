create database sistema;
use sistema;
drop table usuarios;
create table usuarios (
	idUsuario int primary key,
    login varchar (20),
    password varchar (50),
    nombre varchar(50)
);

insert into usuarios values (1, 'ana', SHA1('123'), 'Ana Lopez');
insert into usuarios values (2, 'chencho', SHA1('pass'), 'Jesus Perez');
insert into usuarios values (3, 'tony', SHA1('tony123'), 'Toño Juarez');
-- me esconde la contraseña y la encripta
insert into usuarios values (4, 'LUISANTONIO', SHA1('123'), 'Luis Custodio');
select * from usuarios;

-- ENCRIPTACION --
SELECT MD5('123');
SELECT MD5('flymxth');
SELECT MD5('hola');

SELECT SHA1('HOLAA');




select * from usuarios where login='ana' && password= SHA1('123');