-- @block
DROP DATABASE ELECTRONACER ; 
-- @block
CREATE DATABASE ELECTRONACER ; 
-- @block
USE ELECTRONACER ; 

CREATE TABLE users (
   id int PRIMARY KEY AUTO_INCREMENT, 
   username varchar(25),
   password varchar(25)

);

INSERT INTO users (username,password) VALUES ('test','test');

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


