CREATE database Proyecto_Kardex;
Use Proyecto_Kardex;

CREATE TABLE estudiantes(
    id int primary key auto_increment,
    matricula int not null unique,
    nombre varchar(255) not null,
    apellido_p varchar(255) not null,
    apellido_m varchar(255) not null,
    grupo varchar(255) not null,
    carrera varchar(255) not null
);

CREATE TABLE usuarios(
    id int primary key auto_increment,
    usuario int,
    contraseña blob,
    foreign key (usuario) references estudiantes(matricula)
);

CREATE TABLE materias(
    id int primary key auto_increment,
    clave varchar(255) not null,
    nombre varchar(255) not null
);


CREATE TABLE notas_estudiantes_materias(
    id int primary key auto_increment,
    id_estudiante int,
    id_materia int,
    calificacion decimal(9,2),
    fecha datetime,
    foreign key (id_estudiante) references estudiantes(id),
    foreign key (id_materia) references materias(id)
);