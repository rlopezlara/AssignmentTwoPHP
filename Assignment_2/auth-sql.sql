CREATE table userprofile(
	user_id int not null auto_increment,
	first_name varchar (255),
	last_name varchar (255),
	age varchar(255),
	email varchar(255),
	username varchar (255),
	password varchar (255),
    primary key (user_id)
);
CREATE table informationtoshow(
	ID int not null auto_increment,
	fname varchar (255),
	lname varchar (255),
	position varchar(255),
	email varchar (255),
	telNumber varchar (255),
    primary key (ID)
);
INSERT into informationtoshow(fname, lname, email, telNumber)
VALUES
    ('Kevin', 'Robet', 'Prueba1@assignment2.ca', '123456789'),
    ('Deep', 'Blue', 'Prueba2@assignment2.ca', '123456789'),
    ('Alex', 'Green', 'Prueba3@assignment2.ca', '123456789'),
    ('Rodrigo', 'Red', 'Prueba4@assignment2.ca', '123456789'),
    ('Paula', 'Antonio', 'Prueba5@assignment2.ca', '123456789'),
    ('Emily', 'Daughter', 'Prueba6@assignment2.ca', '123456789'),
    ('Jacinta', 'Tiny', 'Prueba7@assignment2.ca', '123456789'),
	('Brenda', 'Jennifer', 'Prueba8@assignment2.ca', '123456789'),
	('Greta', 'Adrian', 'Prueba9@assignment2.ca', '123456789'),
	('Diana', 'Isi', 'Prueba10@assignment2.ca', '123456789');