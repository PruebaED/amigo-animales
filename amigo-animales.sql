CREATE TABLE provinces (
  province_id int,
  name varchar(255) NOT NULL,
	PRIMARY KEY (province_id)
);

INSERT INTO provinces VALUES (1, 'Álava');
INSERT INTO provinces VALUES (2, 'Albacete');
INSERT INTO provinces VALUES (3, 'Alicante');
INSERT INTO provinces VALUES (4, 'Almería');
INSERT INTO provinces VALUES (5, 'Asturias');
INSERT INTO provinces VALUES (6, 'Badajoz');
INSERT INTO provinces VALUES (7, 'Barcelona');
INSERT INTO provinces VALUES (8, 'Burgos');
INSERT INTO provinces VALUES (9, 'Cáceres');
INSERT INTO provinces VALUES (10, 'Cádiz');
INSERT INTO provinces VALUES (11, 'Cantabria');
INSERT INTO provinces VALUES (12, 'Castellón');
INSERT INTO provinces VALUES (13, 'Ciudad Real');
INSERT INTO provinces VALUES (14, 'Córdoba');
INSERT INTO provinces VALUES (15, 'Cuenca');
INSERT INTO provinces VALUES (16, 'Girona');
INSERT INTO provinces VALUES (17, 'Granada');
INSERT INTO provinces VALUES (18, 'Guadalajara');
INSERT INTO provinces VALUES (19, 'Guipúzcoa');
INSERT INTO provinces VALUES (20, 'Huelva');
INSERT INTO provinces VALUES (21, 'Huesca');
INSERT INTO provinces VALUES (22, 'Islas Baleares');
INSERT INTO provinces VALUES (23, 'Jaén');
INSERT INTO provinces VALUES (24, 'La Coruña');
INSERT INTO provinces VALUES (25, 'La Rioja');
INSERT INTO provinces VALUES (26, 'Las Palmas');
INSERT INTO provinces VALUES (27, 'León');
INSERT INTO provinces VALUES (28, 'Lérida');
INSERT INTO provinces VALUES (29, 'Lugo');
INSERT INTO provinces VALUES (30, 'Madrid');
INSERT INTO provinces VALUES (31, 'Málaga');
INSERT INTO provinces VALUES (32, 'Murcia');
INSERT INTO provinces VALUES (33, 'Navarra');
INSERT INTO provinces VALUES (34, 'Orense');
INSERT INTO provinces VALUES (35, 'Palencia');
INSERT INTO provinces VALUES (36, 'Pontevedra');
INSERT INTO provinces VALUES (37, 'Salamanca');
INSERT INTO provinces VALUES (38, 'Santa Cruz de Tenerife');
INSERT INTO provinces VALUES (39, 'Segovia');
INSERT INTO provinces VALUES (40, 'Sevilla');
INSERT INTO provinces VALUES (41, 'Soria');
INSERT INTO provinces VALUES (42, 'Tarragona');
INSERT INTO provinces VALUES (43, 'Teruel');
INSERT INTO provinces VALUES (44, 'Toledo');
INSERT INTO provinces VALUES (45, 'Valencia');
INSERT INTO provinces VALUES (46, 'Valladolid');
INSERT INTO provinces VALUES (47, 'Vizcaya');
INSERT INTO provinces VALUES (48, 'Zamora');
INSERT INTO provinces VALUES (49, 'Zaragoza');
														 
CREATE TABLE users (
	user_id int AUTO_INCREMENT,
	name varchar(255) NOT NULL,
	surnames varchar(255) NOT NULL,
	email varchar(320) NOT NULL,
	password varchar(255) NOT NULL,
	phone varchar(255) NOT NULL,
	province_id int NOT NULL,
	UNIQUE (email),
	PRIMARY KEY (user_id),
	FOREIGN KEY (province_id) REFERENCES provinces(province_id) ON DELETE CASCADE
);

INSERT INTO users VALUES (1, 'nombre_prueba', 'apellidos_prueba', 'email_prueba', 'password_prueba', 'tlf_prueba', 32);
																						 
CREATE TABLE animals (
  animal_id int AUTO_INCREMENT,
  name varchar(255) NOT NULL,
	age int NOT NULL,
	gender enum('macho', 'hembra') NOT NULL,
	breed varchar(255) NOT NULL,
	weight decimal NOT NULL,
	reccord date NOT NULL, # reccord == date == fecha
	image varchar(255) NOT NULL,
	situation enum('en acogida', 'en adopcion', 'urgente', 'desaparecido') NOT NULL,
	description varchar(750) NOT NULL,
	vaccinated tinyint(1) NOT NULL,
	healthy tinyint(1) NOT NULL,
	sterilize tinyint(1) NOT NULL,
	castrated tinyint(1) NOT NULL,
	dewormed tinyint(1) NOT NULL,
	microchip tinyint(1) NOT NULL,
	user_id int NOT NULL,
	location_id int NOT NULL,
	PRIMARY KEY (animal_id),
	FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE,
	FOREIGN KEY (location_id) REFERENCES provinces(province_id) ON DELETE CASCADE
);

INSERT INTO animals VALUES (1, 'Pepe', 5, 'macho', 'mestizo', 20.4, '1990-09-01', 'https://www.animalesomnivoros.es/wp-content/uploads/2020/08/comida-casera-perros-proteinas.jpg', 'en adopcion', 'Animal con mucha proactividad', true, false, false, false, true, true, 1, 25);

/* INSERT INTO Provinces
VALUES (('Álava'), ('Albacete'), ('Alicante'), ('Almería'), ('Asturias'),
        ('Ávila'), ('Badajoz'), ('Barcelona'), ('Burgos'), ('Cáceres'),
        ('Cádiz'), ('Cantabria'), ('Castellón'), ('Ciudad Real'), ('Córdoba'),
        ('Cuenca'), ('Girona'), ('Granada'), ('Guadalajara'), ('Guipúzcoa'), 
        ('Huelva'), ('Huesca'), ('Islas Baleares'), ('Jaén'), ('La Coruña'),
        ('La Rioja'), ('Las Palmas'), ('León'), ('Lérida'), ('Lugo'), 
        ('Madrid'), ('Málaga'), ('Murcia'), ('Navarra'), ('Orense'), 
        ('Palencia'), ('Pontevedra'), ('Salamanca'), ('Santa Cruz de Tenerife'),
        ('Segovia'), ('Sevilla'), ('Soria'), ('Tarragona'), ('Teruel'),
        ('Toledo'), ('Valencia'), ('Valladolid'), ('Vizcaya'), ('Zamora'),
        ('Zaragoza')); */
