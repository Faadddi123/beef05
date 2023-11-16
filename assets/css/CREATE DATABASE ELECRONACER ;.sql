CREATE DATABASE ELECRONACER ;
USE ELECTRONACER;

CREATE TABLE user (
   id int PRIMARY KEY AUTO_INCREMENT, 
   username varchar(25),
   password varchar(25)

);
CREATE TABLE product (
   id int PRIMARY KEY AUTO_INCREMENT, 
   name varchar(25),
   price float,
   category int 
);


INSERT INTO product (name, price, category) VALUES 
("arduino", 25.3, 1),
("arduino", 25.3, 1),
("arduino", 25.3, 1),
("arduino", 25.3, 1),
("arduino", 25.3, 1),
("arduino", 25.3, 1),
("arduino", 25.3, 1),
("arduino", 25.3, 1),
("arduino", 25.3, 1);

 INSERT INTO user (username, password) VALUE
("test", "test"),