CREATE DATABASE jesus_mascota;

CREATE TABLE mascotas_j (
id_mascota INT(10) PRIMARY KEY NOT NULL,
nombre_mascota VARCHAR(30) NOT NULL,
tipo_mascota VARCHAR(30) NOT NULL,
raza VARCHAR(30) NOT NULL,
sexo VARCHAR(30) NOT NULL,
nombre_cliente VARCHAR(30) NOT NULL,
fecha_nacimiento VARCHAR(30) NOT NULL,
);

INSERT INTO mascotas_j(id_mascota, nombre_mascota, tipo_mascota, raza, sexo, nombre_cliente, fecha_nacimiento)
VALUES (186759, 'Lassie', 'perro', 'Huskie', 'hembra', 'Alberto', '23/06/2020'), (278913, 'Eros', 'gato', 'Siames', 'macho', 'Laura', '02/03/2018'), (293567, 'Bolt', 'gato', 'Persa', 'macho', 'Genesis', '12/11/2021'), (547639, 'Cora', 'perro', 'Pitbull', 'hembra', 'Daniel', '21/04/2019'), (725638, 'Atenea', 'gato', 'Chausie', 'hembra', 'Federico', '05/10/2021');

