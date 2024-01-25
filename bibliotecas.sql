DROP DATABASE IF exists bibliotecas;
CREATE DATABASE bibliotecas;
USE bibliotecas;

CREATE TABLE usuaris (
    id_usuari INT PRIMARY KEY AUTO_INCREMENT,
    nom_usuari VARCHAR(50) NOT NULL,
    correu VARCHAR(70) NOT NULL,
    dni VARCHAR (60) NOT NULL,
    contrasenya VARCHAR(255) NOT NULL,
    rol VARCHAR(150) NOT NULL


);


CREATE TABLE rols (
    id_rol INT PRIMARY KEY AUTO_INCREMENT,
    rol VARCHAR (50)
);




CREATE TABLE treballadors (
    id_treballador INT PRIMARY KEY AUTO_INCREMENT ,
    nom VARCHAR (50),
    cognom VARCHAR (50),
    email VARCHAR (50),
    direccio VARCHAR (50),
    data_creacio DATE,
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
    (2, 'Empleado'),
    (3, 'Cliente');


INSERT INTO treballadors  VALUES
    (1, 'Juan', 'Perez', 'juan.perez@example.com', 'Calle A, Ciudad', '2023-11-14', 1),
    (2, 'Maria', 'Gomez', 'maria.gomez@example.com', 'Calle B, Ciudad', '2023-01-13', 2),
    (3, 'Carlos', 'Rodriguez', 'carlos.rodriguez@example.com', 'Calle C, Ciudad', '2023-10-11', 2);







INSERT INTO llistat_llibres VALUES
    (1, 'El señor de los anillos', 12345, 25, 'Fantasía'),
    (2, '1984', 67890, 20, 'Ciencia Ficción'),
    (3, 'Cien años de soledad', 54321, 30, 'Realismo Mágico');


INSERT INTO llistat_llibres_venuts VALUES
    (1, '1984', 'Ciencia Ficción', 20, '2024-01-16'),
    (2, 'Cien años de soledad', 'Realismo Mágico', 30, '2024-01-15');


