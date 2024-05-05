DROP DATABASE IF EXISTS bibliotecas;
CREATE DATABASE bibliotecas;
USE bibliotecas;

CREATE TABLE rols (
    id_rol INT PRIMARY KEY AUTO_INCREMENT,
    rol VARCHAR(50)
);

CREATE TABLE usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre_usuario VARCHAR(50) NOT NULL,
    email VARCHAR(70) NOT NULL,
    documento VARCHAR(60) NOT NULL,
    password VARCHAR(255) NOT NULL,
    id_rol INT,
    FOREIGN KEY(id_rol) REFERENCES rols(id_rol)
);

CREATE TABLE categoria (
    id_categoria INT PRIMARY KEY AUTO_INCREMENT,
    categoria VARCHAR(50)
);

CREATE TABLE llistat_llibres (
    id_llibre INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    num_serie INT,
    preu INT,
    categoria VARCHAR(50)
);



CREATE TABLE llistat_llibres_venuts(
    nombre VARCHAR(70),
    precio INT,
    categoria VARCHAR(50),
    fecha_venta DATE   
);

CREATE TABLE images (
    id INT PRIMARY KEY AUTO_INCREMENT,
    image LONGBLOB NOT NULL,
    created DATETIME NOT NULL,
    price DECIMAL(10,2),
    nom VARCHAR(45) NOT NULL,
    id_categoria INT,
    FOREIGN KEY(id_categoria) REFERENCES categoria(id_categoria),
    categoria VARCHAR(50)
);



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

INSERT INTO categoria VALUES
    (1,'Terror'),
    (2,'Accion'),
    (3,'Ciencia Ficcion'),
    (4,'Infantil'),
    (5,'Suspense'),
    (6,'Policiac'),
    (7,'Drama'),
    (8,'Historico'),
    (9,'Ficcio-cientifico'),
    (10,'Romance');

INSERT INTO llistat_llibres VALUES
(1, 'El señor de los anillos', 12345, 25, 'Fantasía'),
    (2, '1984', 67890, 20, 'Ciencia Ficción'),
    (3, 'Cien años de soledad', 54321, 30, 'Realismo Mágico'),
    (4, 'Harry potter', 67890, 20, 'Ciencia Ficción'),
    (5, 'El Laberinto de los Sueños', 565656, 20, 'Misterio'),
    (6, 'Crepúsculo', 98765, 15, 'Romance'),
    (7, 'El código Da Vinci', 23456, 18, 'Misterio'),
    (8, 'Don Quijote de la Mancha', 78901, 28, 'Clásico'),
    (9, 'Orgullo y prejuicio', 13579, 22, 'Romance'),
    (10, 'Las crónicas de Narnia', 24680, 20, 'Fantasía'),
    (11, 'La sombra del viento', 11111, 20, 'Misterio'),
    (12, 'El alquimista', 22222, 18, 'Ficción'),
    (13, 'El código Da Vinci 2', 33333, 25, 'Misterio'),
    (14, 'El nombre del viento', 44444, 30, 'Fantasía'),
    (15, 'La hoguera de las vanidades', 55555, 22, 'Drama'),
    (16, 'Matar a un ruiseñor', 66666, 21, 'Clásico'),
    (17, 'El retrato de Dorian Gray', 77777, 23, 'Ficción'),
    (18, 'La ladrona de libros', 88888, 19, 'Drama'),
    (19, '1984', 99999, 20, 'Ciencia Ficción'),
    (20, 'Cien años de soledad 2', 101010, 28, 'Realismo Mágico'),
    (21, 'El hobbit', 111111, 25, 'Fantasía'),
    (22, 'Crepúsculo 2', 121212, 15, 'Romance'),
    (23, 'El código Da Vinci 3', 131313, 18, 'Misterio'),
    (24, 'Don Quijote de la Mancha 2', 141414, 28, 'Clásico'),
    (25, 'Orgullo y prejuicio 2', 151515, 22, 'Romance'),
    (26, 'Las crónicas de Narnia 2', 161616, 20, 'Fantasía'),
    (27, 'El señor de los anillos 2', 171717, 25, 'Fantasía'),
    (28, '1984 2', 181818, 20, 'Ciencia Ficción'),
    (29, 'Cien años de soledad 3', 191919, 30, 'Realismo Mágico'),
    (30, 'Harry potter 2', 202020, 20, 'Ciencia Ficción'),
    (31, 'El Laberinto de los Sueños 2', 212121, 20, 'Misterio'),
    (32, 'La ciudad y los perros', 131415, 26, 'Ficción'),
    (33, 'Crónica de una muerte anunciada', 161820, 22, 'Drama'),
    (34, 'Rayuela', 192021, 24, 'Ficción'),
    (35, 'Cumbres borrascosas', 222324, 27, 'Romance'),
    (36, 'El retrato de Dorian Gray 2', 252627, 23, 'Clásico'),
    (37, 'La casa de los espíritus', 282930, 25, 'Realismo Mágico'),
    (38, 'La insoportable levedad del ser', 313233, 20, 'Filosófico'),
    (39, 'El amor en los tiempos del cólera', 343536, 28, 'Romance'),
    (40, '1984 3', 373839, 20, 'Ciencia Ficción'),
    (41, 'Los miserables', 404142, 30, 'Clásico'),
    (42, 'La naranja mecánica', 434445, 21, 'Ciencia Ficción'),
    (43, 'Drácula', 464748, 23, 'Terror'),
    (44, 'Frankenstein', 495051, 22, 'Terror'),
    (45, 'Los pilares de la Tierra', 525354, 28, 'Histórico'),
    (46, 'Moby Dick', 555657, 26, 'Aventura'),
    (47, 'El guardián entre el centeno', 585960, 24, 'Drama'),
    (48, 'La metamorfosis', 616263, 20, 'Clásico'),
    (49, 'El gran Gatsby', 646566, 27, 'Drama'),
    (50, 'Anna Karenina', 676869, 29, 'Romance'),
    (51, 'El conde de Montecristo', 707172, 30, 'Aventura');



DELIMITER //
CREATE TRIGGER llistat_llibres_BEFORE_UPDATE BEFORE UPDATE ON llistat_llibres FOR EACH ROW
BEGIN
    IF OLD.nom != NEW.nom THEN
        INSERT INTO llistat_llibres_venuts (nom, categoria, preu, data_venta)
        VALUES (OLD.nom, OLD.categoria, OLD.preu, CURDATE());
    END IF;
END;
//
DELIMITER ;


DELIMITER //

CREATE PROCEDURE InsertarLibro(
    IN nombre_libro VARCHAR(50),
    IN num_serie INT,
    IN precio INT,
    IN nombre_categoria VARCHAR(50)
)
BEGIN
    DECLARE categoria_id INT;

    -- Obtener el ID de la categoría
    SELECT id_categoria INTO categoria_id FROM categoria WHERE categoria = nombre_categoria;

    -- Insertar el libro en la tabla llistat_llibres
    INSERT INTO llistat_llibres (nom, num_serie, preu, categoria)
    VALUES (nombre_libro, num_serie, precio, nombre_categoria);

    -- Si la categoría no existe, insertarla en la tabla categoria
    IF categoria_id IS NULL THEN
        INSERT INTO categoria (categoria) VALUES (nombre_categoria);
    END IF;
END;
//

DELIMITER ;

CALL InsertarLibro('Procedure3', 123456, 15, 'Ficción');





SELECT * FROM llistat_llibres WHERE nom = 'Nuevo Libro';



CREATE VIEW VistaUsuarios AS
SELECT id_usuario, nombre_usuario, email, documento, r.rol AS rol
FROM usuarios u
INNER JOIN rols r ON u.id_rol = r.id_rol;
