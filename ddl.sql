CREATE DATABASE chatapp;

USE chatapp;

CREATE TABLE messages {
    id INT PRIMARY KEY AUTO_INCREMENT,
    message TEXT,
    username VARCHAR(255),
    epoch BIGINT
};