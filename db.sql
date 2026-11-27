-- Crear la db
create database crud_app;
-- selecciona la base de datos
use crud_app;
-- Crear la tabla
create table users(
    id int primary key auto_increment,
    name varchar(150) not null,
    email varchar(150) not null unique,
    telefono varchar(15) not null
);
