
USE ELECTRONACER ; 

CREATE TABLE user (
   id int PRIMARY KEY AUTO_INCREMENT, 
   username varchar(25),
   password varchar(25)

);
-- @block
INSERT INTO user (username,password) VALUES ('test','test')
-- @block
CREATE TABLE product (
   id int PRIMARY KEY AUTO_INCREMENT, 
   name varchar(25),
   price float,
   category int 
);
-- @block

INSERT INTO product (name, price, category) VALUES
("arduino", 25.3, 1),
("arduino", 25.3, 1),
("arduino", 25.3, 1),
("arduino", 25.3, 1),
("arduino", 25.3, 1),
("arduino", 25.3, 1),
("arduino", 25.3, 1),
("arduino", 25.3, 1),
("arduino", 25.3, 1)

