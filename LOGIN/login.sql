create database usuario;
use usuario;
drop database usuario;
create table sistema(
	login varchar (30),
    password varchar (30)
);

insert into sistema values ('luis', sha1('siul009'));
insert into sistema values ('juan', sha1('anuj89'));
insert into sistema values ('salvador', sha1('passlwq'));
select * from sistema; 

select * from sistema where login='juan' && password = sha1('anuj89');

