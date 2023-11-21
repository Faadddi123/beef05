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
   old_price float,
   new_price float,
   category int 
);

INSERT INTO product (name, old_price, new_price, category) VALUES
("LED", 0.5, 0.25, 1),
("Resistor", 0.1, 0.05, 3),
("Arduino", 10.0, 5.0, 2),
("Raspberry Pi", 35.0, 17.5, 2),
("Capacitor", 0.2, 0.1, 1),
("Transistor", 0.3, 0.15, 1),
("Diode", 0.2, 0.1, 1),
("Potentiometer", 1.0, 0.5, 3),
("Relay", 2.0, 1.0, 2),
("IC", 1.5, 0.75, 1),
("Breadboard", 5.0, 2.5, 2),
("Motor", 8.0, 4.0, 2),
("Sensor", 3.0, 1.5, 1),
("Switch", 0.5, 0.25, 1),
("Battery", 2.0, 1.0, 2),
("Power Supply", 10.0, 5.0, 2),
("Wire", 0.1, 0.05, 1),
("Connector", 0.3, 0.15, 3),
("PCB", 5.0, 2.5, 2),
("Oscillator", 1.5, 0.75, 1);


