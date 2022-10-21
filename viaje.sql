create table
    empresa(
        id_empresa int PRIMARY KEY,
        nombre VARCHAR (20) NOT NULL,
        dueño VARCHAR (50) NOT NULL,
        direccion VARCHAR (50) NOT NULL,
        celular VARCHAR(50) NOT NULL,
        correo VARCHAR(50) NOT NULL
    );

CREATE TABLE
    sexo(
        id_sex INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(10) NOT NULL
    );

CREATE table
    cliente(
        rut VARCHAR (12) PRIMARY KEY,
        nombre VARCHAR (20) NOT NULL,
        apellido VARCHAR (20) NOT NULL,
        nacionalidad VARCHAR(20) NOT NULL,
        edad int not null,
        sexo int NOT NULL,
        celular VARCHAR(50) NOT NULL,
        correo VARCHAR(50) NOT NULL,
        login VARCHAR (20) NOT NULL,
        password VARCHAR (50) NOT NULL,
        constraint FKclientesexo foreign key(sexo) references sexo(id_sex)
    );

CREATE TABLE
    cargo(
        id_carg INT PRIMARY KEY AUTO_INCREMENT,
        nom_carg VARCHAR(20) NOT null,
        pre_carg int NOT null
    );

CREATE table
    administrador(
        rut VARCHAR (12) PRIMARY KEY,
        nombre VARCHAR (20) NOT NULL,
        apellido VARCHAR (20) NOT NULL,
        edad int not null,
        sexo int NOT NULL,
        celular VARCHAR(50) NOT NULL,
        correo VARCHAR(50) NOT NULL,
        cargo int not NULL,
        login VARCHAR (20) NOT NULL,
        password VARCHAR (50) NOT NULL,
        constraint FKadministradorsexo foreign key(sexo) references sexo(id_sex),
        constraint FKadministradorcargo foreign key(cargo) references cargo(id_carg)
    );