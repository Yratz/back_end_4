CREATE DATABASE IF NOT EXISTS appDB2;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT ON appDB2.* TO 'user'@'%';

FLUSH PRIVILEGES;
set names 'utf8';
CREATE TABLE IF NOT EXISTS users (user varchar(191) not null, passwd varchar(191), primary key (user));
INSERT INTO users VALUE ('Yratz', '{SHA}W6ph5Mm5Pz8GgiULbPgzG37mj9g='); 

CREATE TABLE `achivments` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	`info` VARCHAR(1000),
	PRIMARY KEY (`id`)
);
INSERT INTO achivments VALUE (NULL, 'Юрий"', 'Руководил проектом "Умный дом" в течении 3ех лет, ссылка на Figma//...'); 
INSERT INTO achivments VALUE (NULL, 'Алексей', 'Занял 3 место'); 
INSERT INTO achivments VALUE (NULL, 'Александр', 'Откопал ядро Земли'); 
INSERT INTO achivments VALUE (NULL, 'Георгий', 'Важнейшее из достижений! Молодец!');

CREATE TABLE `typesAchivments` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`type` VARCHAR(200),
	`name` VARCHAR(1000),
	PRIMARY KEY (`id`)
);

INSERT INTO typesAchivments VALUE (NULL, 'Творческое"', 'Руководил проектом "Умный дом" в течении 3ех лет, ссылка на Figma//...'); 
INSERT INTO typesAchivments VALUE (NULL, 'Спортивное', 'Занял 3 место в соревновании по бегу'); 