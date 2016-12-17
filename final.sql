CREATE DATABASE finaldb;

USE finaldb;

CREATE TABLE Auth
(
   UserID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   Username varchar(60),
   Password varchar(60),
   FirstName varchar(60),
   LastName varchar(60),
   email varchar(60),
   phone varchar(60)
);

INSERT INTO Auth (Username,Password,FirstName,LastName,email,phone) 
   VALUES ('patperez125','star123','Patrick','Perez','patrickraphaelperez@gmail.com', '(818) 288-1694');
INSERT INTO Auth (Username,Password,FirstName,LastName,email,phone) 
   VALUES ('mattythematador','csun64','Matty','Matador','mattythematador@csun.edu', '(818) 555-5555');
INSERT INTO Auth (Username,Password,FirstName,LastName,email,phone)
   VALUES ('spongebobsquarepants','bikinibottom','Spongebob','Squarepants','spongebobsquarepants@gmail.com', '(123) 123-1234');

