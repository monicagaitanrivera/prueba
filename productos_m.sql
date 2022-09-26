show databases;
create database productos_m;
use productos_m;
select database();

drop database productos_m;
create table productos (
  id_pdto int auto_increment not null primary key,
  nombre_pdto varchar(50) not null,
  descripcion varchar(1000) not null,
  stock int(11) not null,
  valor decimal(10,0) not null,
  fk_id_categoria  int(11) not null,
  fk_id_marca int(11) not null
);
create table categoria (
  id_categoria int auto_increment not null primary key,
  nombre_c varchar(50) not null,
  descripcion_c varchar(1000) not null
);
create table marca (
  id_marca int auto_increment not null primary key,
  nombre_m varchar(50) not null,
  descripcion_m varchar(1000) not null
) ;
show tables;
     
alter table productos add constraint pdto foreign key (fk_id_categoria) references categoria(id_categoria);
alter table productos add constraint pdto_c foreign key (fk_id_marca) references marca (id_marca);