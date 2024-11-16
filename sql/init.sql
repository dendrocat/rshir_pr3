CREATE DATABASE IF NOT EXISTS appDB;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT,DELETE ON appDB.* TO 'user'@'%';
FLUSH PRIVILEGES;

USE appDB;
CREATE TABLE IF NOT EXISTS products (
  ID INT AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  price int NOT NULL,
  PRIMARY KEY (ID)
);
INSERT INTO products (name, price) VALUES
('Кольцо 1', 10000), ('Колье 1', 15000), 
('Серьги', 3000), ('Кольцо 2', 5000);


CREATE TABLE IF NOT EXISTS user_group (
    gID INT AUTO_INCREMENT,
    gName VARCHAR(20) NOT NULL,
    PRIMARY KEY (gID)
);
INSERT INTO user_group (gName) VALUES ('admin'), ('user');


CREATE TABLE IF NOT EXISTS users (
    ID INT AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    passwd VARCHAR(20) NOT NULL,
    groupID INT NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (groupID) REFERENCES user_group (gID)
);
INSERT INTO users (name, passwd, groupID) VALUES 
('admin', '1234', 1), ('root', 'root', 1),
('user', '1234', 2), ('user1', 'user', 2), ('user2', 'user', 2);