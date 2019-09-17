create database Controldeactivos;
use Controldeactivos;

create table tipo_mantenimiento
(
cod_man varchar(50) primary key,
descripcion varchar(50)
);

create table tecnico
(
cod_tec varchar(50) primary key,
nombre VARCHAR(50)
);

create table cronograma
(
codigo_c varchar(50) primary key,
fecha_rev varchar(50),
tipo_man varchar(50),
fecha_inicio  varchar(50),
fecha_termino varchar(50),
observacion varchar(50),
fallas varchar(50),
cod_tec varchar(50),
cod_maq varchar(50),
cod_man varchar(50),
FOREIGN KEY (cod_tec) REFERENCES tecnico(cod_tec),
FOREIGN KEY (cod_man) REFERENCES tipo_mantenimiento(cod_man),
FOREIGN KEY (cod_maq) REFERENCES lista_activos(cod_maq)
);

create table lista_activos
(
cod_maq varchar(50) primary key,
nombre varchar(50),
des_tecnica varchar(50),
fecha_compra varchar(50),
fecha_insta varchar(50),
vida_horas varchar(50)
);