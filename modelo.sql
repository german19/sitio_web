create schema udo;
use udo;

create table usuarios(
    id int auto_increment comment 'identificador de usuario',
    username varchar(16) not null comment 'Nombre de Usuario',
    password varchar(200) not null comment 'Contraseña',
    nombre varchar(50) not null comment 'nombre de pila',
    apellidos varchar(50) not null comment 'apellidos paterno y materno',
    email varchar(200) not null default 'sin@correo.com' comment 'correo electronico',
    primary key (id),
    index unique idu_username (username)
) engine = MyISAM;
insert into usuarios(username, password, nombre, apellidos, email)
values('german', '202cb962ac59075b964b07152d234b70','Jesus German', 'Alvarez Montoya', 'germanalvarezmontoya@gmail.com')

