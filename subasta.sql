show databases;
create database subasta;
use subasta;
select database();

drop database subasta;
create table login(
     id_login int not null auto_increment primary key,
     identificacion varchar(50),
     nombre_login varchar(50),
     contrasena varchar(50)
);

create table usuarios(
	 id_usuarios int auto_increment not null primary key,
     tipo_documento varchar(50) not null,
     numero_documento varchar(50) not null,
     nombre_usuario varchar(50) not null,
     genero varchar(50) not null,
     fecha_nacimiento date not null,
     telefono varchar(50) not null,
     correo varchar(50) not null,
     califiacion int
     );
     
create table finca(
     id_finca int auto_increment not null primary key,
     nombre_finca varchar(50) not null,
     hectarea varchar(50) not null,
     municipio varchar(50) not null,
     vereda varchar(50) not null,
     altura varchar(50) not null,
     estado varchar(50) not null,
     fk_usuarios int
     );
	
create table productos(
     id_producto int auto_increment not null primary key,
     variedad_cafe varchar(50) not null,
     imagen varchar(250),
     unidad_medida varchar(50) not null,
     fk_finca int
     );
     
create table subasta(
     id_subasta int auto_increment not null primary key,
     valor_minimo varchar(50),
     fecha_inicial date,
     hora_inicio datetime,
     fecha_final date,
     hora_final datetime,
     cantidad int,
     estado varchar(50) not null,
     fk_producto int
     );

create table oferta(
     id_oferta int auto_increment not null primary key,
     valor_ofertado varchar(50),
     fecha_oferta date,
     hora_oferta datetime,
     estado varchar(50) not null,
     fk_usuario int,
	 fk_subasta int
     );
     
     create table comentarios(
     id_comentarios int auto_increment not null primary key,
	 descripcion varchar(250) not null,
     fk_usuario int
     );
    
    show tables;
     
alter table finca add constraint fin_usu foreign key (fk_usuarios) references usuarios(id_usuarios);
alter table productos add constraint pdto_fin foreign key (fk_finca) references finca(id_finca);
alter table subasta add constraint suba_pdto foreign key (fk_producto) references productos(id_producto);
alter table oferta add constraint suba_ofe foreign key (fk_usuario) references usuarios(id_usuarios);
alter table oferta add constraint ofe_usu foreign key (fk_subasta) references subasta(id_subasta);
alter table comentarios add constraint com_usu foreign key (fk_usuario) references usuarios(id_usuarios);