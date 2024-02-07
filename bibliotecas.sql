DROP DATABASE IF exists bibliotecas;
CREATE DATABASE bibliotecas;
USE bibliotecas;



CREATE TABLE rols (
    id_rol INT PRIMARY KEY AUTO_INCREMENT,
    rol VARCHAR (50)
);


CREATE TABLE usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre_usuario VARCHAR(50) NOT NULL,
    email VARCHAR(70) NOT NULL,
    documento VARCHAR (60) NOT NULL,
    password VARCHAR(255) NOT NULL,
    id_rol INT,
    FOREIGN KEY(id_rol) REFERENCES rols(id_rol)


);









CREATE TABLE llistat_llibres(
    id_llibre INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR (50),
    num_serie INT,
    preu INT,
    categoria VARCHAR (50)
);

CREATE TABLE llistat_llibres_venuts(
    id_llibre_venut INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR (50),
    categoria VARCHAR (50),
    preu INT,
    data_venta DATE
);

/*CREATE TABLE detall(
    id_detall INT,
    nom VARCHAR,


    id_llistat_llibres_venuts INT,
    FOREIGN KEY(id_llistat_llibres_venuts) REFERENCES llistat_llibres_venuts(id_llistat_llibres_venuts)

);
*/



INSERT INTO rols VALUES
    (1, 'Administrador'),
    (2, 'Empleado');


INSERT INTO usuarios VALUES 
    (1,'David', 'david@example.com', '123456789', '12',2),
    (2,'Joel','joel@example.com', '123456789', '123',2),
    (3,'Arnau','arnau@example.com', '123223','1234',2),
    (4, 'Pau', 'pau@example.com', '987654321', '12342', 2),
    (5, 'Javi', 'javi@example.com', '111222333', '123456', 2),
    (6, 'Miquel', 'miquel@example.com', '456789123', '1234567', 2),
    (7, 'Alberto', 'alberto@example.com', '789123456', '12345678', 2),
    (8, 'Admin', 'admin@example.com', '789123456', 'root', 1);










INSERT INTO llistat_llibres VALUES
    (1, 'El señor de los anillos', 12345, 25, 'Fantasía'),
    (2, '1984', 67890, 20, 'Ciencia Ficción'),
    (3, 'Cien años de soledad', 54321, 30, 'Realismo Mágico');


INSERT INTO llistat_llibres_venuts VALUES
    (1, '1984', 'Ciencia Ficción', 20, '2024-01-16'),
    (2, 'Cien años de soledad', 'Realismo Mágico', 30, '2024-01-15');


