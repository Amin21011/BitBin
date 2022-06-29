DROP DATABASE IF EXISTS `project2`;

CREATE DATABASE `project2`;

USE `project2`;

CREATE TABLE gebruikers (
    ID int,
    Username varchar(255),
    Wachtwoord varchar(255)
);

INSERT INTO gebruikers (ID, Username, Wachtwoord)
VALUES (1, 'test-user', 'wachtwoord');
