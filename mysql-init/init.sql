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
INSERT INTO achivments VALUE (NULL, 'Дизайн-проект "Умный дом"', 'Руководил проектом "Умный дом" в течении 3ех лет, ссылка на Figma//...'); 
INSERT INTO achivments VALUE (NULL, 'Олимпиада русский медвежонок 2012', 'Занял 3 место'); 
INSERT INTO achivments VALUE (NULL, 'Медаль за археологиеческие достижения', 'Откопал ядро Земли'); 
INSERT INTO achivments VALUE (NULL, 'Успешно поднядся с кровати и пришел на пару', 'Важнейшее из достижений! Молодец!');