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
    categoria VARCHAR (50),
    id_usuario INT,
    FOREIGN KEY(id_usuario) REFERENCES usuarios(id_usuario)


);

CREATE TABLE llistat_llibres_venuts(
    id_llibre_venut INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR (50),
    categoria VARCHAR (50),
    preu INT,
    data_venta DATE
);

CREATE TABLE `images` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `image` longblob NOT NULL,
    `created` datetime NOT NULL,
    `price` DECIMAL(10,2), -- Nueva columna para el precio
    PRIMARY KEY (`id`),
    `nom`  varchar(45) NOT NULL,
    `categoria`  varchar(45) not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


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
    (1, 'El señor de los anillos', 12345, 25, 'Fantasía',1),
    (2, '1984', 67890, 20, 'Ciencia Ficción',2),
    (3, 'Cien años de soledad', 54321, 30, 'Realismo Mágico',3),
    (4, 'Harry potter', 67890, 20, 'Ciencia Ficción',4),
    (5, ' Tres enigmas para la Organización ', 67890, 20, 'Fantasía',5),
    (6, ' Bajo tierra seca ', 34342, 20, 'Fantasía',4),
    (7, ' La última función ', 12144, 20, 'Ciencia Ficción',5),
    (8, ' El hijo olvidado ', 56574, 20, 'Ciencia Ficción',7),
    (9, ' El sentido de consentir ', 99754, 20, 'Realismo Mágico',8),
    (10, 'Meawing i la piedra filosofal ', 43656, 34, 'Historia de terror', 1),
    (11, 'Sombras en el Horizonte', 11111, 15, 'Fantasía', 3),
    (12, 'El Círculo de los Destinos', 22222, 18, 'Fantasía Épica', 5),
    (13, 'El Último Suspiro del Ocaso', 33333, 20, 'Ciencia Ficción', 1),
    (14, 'Caminos de Cristal', 44444, 12, 'Aventura', 8),
    (15, 'La Canción del Viento Errante', 55555, 17, 'Fantasía', 3),
    (16, 'El Laberinto de los Sueños', 66666, 16, 'Misterio', 7),
    (17, 'Estrellas en la Oscuridad', 77777, 14, 'Ciencia Ficción', 1),
    (18, 'El Secreto de las Estaciones', 88888, 19, 'Fantasía', 6),
    (19, 'Atrapados en el Tiempo Perdido', 99999, 21, 'Aventura', 4),
    (20, 'La Promesa del Alba', 10101, 22, 'Romance', 1),
    (21, 'El Misterio de la Noche Eterna', 12121, 25, 'Misterio', 1),
    (22, 'El Jardín de las Maravillas', 23232, 18, 'Fantasía', 1),
    (23, 'El Último Recurso', 34343, 20, 'Suspenso', 2),
    (24, 'Aguas Profundas', 45454, 16, 'Aventura', 1),
    (25, 'La Senda del Guerrero', 56565, 23, 'Fantasía Épica', 1),
    (26, 'La Ciudad de los Sueños', 67676, 19, 'Ciencia Ficción', 1),
    (27, 'Entre Sombras y Espadas', 78787, 21, 'Fantasía', 1),
    (28, 'El Susurro del Viento', 89898, 17, 'Misterio', 3),
    (29, 'El Destino del Errante', 90909, 20, 'Aventura', 1),
    (30, 'El Legado Perdido', 10101, 22, 'Fantasía', 2),
    (31, 'El Canto de las Estrellas', 11211, 24, 'Romance', 3),
    (32, 'El Último Vuelo', 22322, 19, 'Ciencia Ficción', 5),
    (33, 'Sombras en el Abismo', 33433, 18, 'Terror', 2),
    (34, 'El Pergamino Antiguo', 44544, 26, 'Fantasía', 2),
    (35, 'El Silencio de la Tormenta', 55655, 20, 'Misterio', 3),
    (36, 'Bajo el Manto de las Estrellas', 66766, 23, 'Fantasía Épica', 3),
    (37, 'El Eco del Pasado', 77877, 17, 'Suspenso', 2),
    (38, 'Las Ruinas Olvidadas', 88988, 20, 'Aventura', 2),
    (39, 'El Último Amanecer', 99099, 21, 'Ciencia Ficción', 1),
    (40, 'El Destino del Errante', 100100, 22, 'Fantasía', 3),
    (41, 'El Rostro en la Sombra', 121212, 24, 'Misterio', 3),
    (42, 'El Laberinto de los Recuerdos', 232323, 19, 'Fantasía', 4),
    (43, 'La Torre de los Secretos', 343434, 20, 'Aventura', 3),
    (44, 'El Oráculo del Tiempo', 454545, 23, 'Ciencia Ficción', 3),
    (45, 'Caminos en la Niebla', 565656, 18, 'Fantasía Épica', 1),
    (46, 'El Último Guardián', 676767, 20, 'Suspenso', 3),
    (47, 'El Sendero del Guerrero', 787878, 17, 'Aventura', 3),
    (48, 'El Canto del Ocaso', 898989, 21, 'Fantasía', 2),
    (49, 'La Danza de las Estrellas', 909090, 22, 'Romance', 4),
    (50, 'El Silencio del Espacio', 101010, 24, 'Ciencia Ficción', 4),
    (51, 'La Sombra del Terror', 112121, 19, 'Terror', 4),
    (52, 'El Reino Olvidado', 223232, 20, 'Fantasía', 4),
    (53, 'El Misterio del Abismo', 334343, 23, 'Misterio', 5),
    (54, 'La Cripta de los Secretos', 445454, 17, 'Fantasía', 2),
    (55, 'El Susurro del Pasado', 556565, 20, 'Misterio', 4),
    (56, 'El Legado Perdido', 667676, 22, 'Fantasía Épica', 4),
    (57, 'El Eco de las Sombras', 778787, 18, 'Suspenso', 1),
    (58, 'El Sendero del Explorador', 889898, 21, 'Aventura', 5),
    (59, 'La Última Esperanza', 990909, 22, 'Ciencia Ficción', 5),
    (60, 'Los Guardianes de la Noche', 100010, 24, 'Fantasía', 3),
    (61, 'El Secreto de la Eternidad', 121212, 19, 'Romance', 4),
    (62, 'El Despertar del Caos', 232323, 20, 'Ciencia Ficción', 2),
    (63, 'Las Sombras del Pasado', 343434, 23, 'Terror', 6),
    (64, 'El Destino del Guerrero', 454545, 17, 'Fantasía', 5),
    (65, 'El Laberinto de los Sueños', 565656, 20, 'Misterio', 2);





INSERT INTO llistat_llibres_venuts VALUES
    (1, '1984', 'Ciencia Ficción', 20, '2024-01-16'),
    (2, 'Cien años de soledad', 'Realismo Mágico', 30, '2024-01-15');


CREATE VIEW vista_llibres_venuts AS
SELECT id_llibre_venut, nom AS nombre_libro, categoria, preu AS precio, data_venta
FROM llistat_llibres_venuts;
