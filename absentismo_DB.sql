drop database if exists absentismodb;

create database absentismodb character set UTF8 collate utf8_general_ci;

create table empresas (
	id_empresa int primary key auto_increment not null,
	nombre_empresa varchar(255),
	direccion varchar(255),
	telefono int(9)
);
create table roles (
	id_rol int primary key auto_increment not null,
	nombre_rol varchar(255)
);
create table users(
	id_usuario int primary key auto_increment not null,
	name varchar(255),
	apellidos varchar(255),
    nick varchar(255),
    password varchar(255),
	puesto varchar(255),
	id_jefe int,
	id_rol int,
	id_empresa int,
	jornada_laboral int,
	salario decimal (15,2),
	email varchar(255),
	remember_token varchar(255),
	constraint rol_fk foreign key (id_rol) references roles (id_rol),
	constraint empresa_fk foreign key (id_empresa) references empresas (id_empresa),
	constraint jefe_fk foreign key (id_jefe) references users (id_usuario)
);

create table calendario_empresa(
	id_calendario int primary key auto_increment not null,
	fecha_inicio datetime,
	fecha_fin datetime,
	descripcion text,
	id_empresa int,
	constraint empresa_fk_calendario foreign key (id_empresa) references empresas(id_empresa)
);

create table tipo_ausencia(
	id_tipo int primary key auto_increment not null,
	nombre_tipo varchar(255)
);

create table ausencias(
	id_ausencia int primary key auto_increment not null,
	fecha_inicio datetime,
	fecha_fin datetime,
	descripcion text,
	id_usuario int,
    tipo_ausencia int,
	constraint personal_fk foreign key (id_usuario) references users (id_usuario),
    constraint ausencia_fk foreign key (tipo_ausencia) references tipo_ausencia(id_tipo)
);

create table informes_usuarios(
	id_informe int primary key auto_increment not null,
	fecha_creado timestamp,
	contenido varchar(255),
	id_usuario int,
	constraint personal_informe_fk foreign key (id_usuario) references users(id_usuario)
);


create table informes_empresa(
	id_informe int primary key auto_increment not null,
	fecha_creado timestamp,
	contenido varchar(255),
	id_empresa int,
	constraint empresa_informe_fk foreign key (id_empresa) references empresas(id_empresa)
);

INSERT INTO `empresas` (`id_empresa`, `nombre_empresa`, `direccion`, `telefono`) VALUES (NULL, 'VAO', 'LA CUPULA', '620189965');
INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES (NULL, 'Admin'), (NULL, 'User');
