CREATE DATABASE RUpload;

USE RUpload;

CREATE TABLE img(
	img_codigo int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	img_name varchar(250) DEFAULT NULL,
	img_name_random varchar(250) DEFAULT NULL
);
