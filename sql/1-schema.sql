CREATE DATABASE IF NOT EXISTS sample_database;

USE sample_database;

CREATE TABLE IF NOT EXISTS authors (
    id INT, 
    name VARCHAR(20), 
    email VARCHAR(20)
);

CREATE USER 'sammy'@'localhost' IDENTIFIED BY 'sammyspassword';
GRANT CREATE, ALTER, DROP, INSERT, UPDATE, DELETE, SELECT ON sample_database.authors TO 'sammy'@'localhost';

CREATE USER 'sammy'@'%' IDENTIFIED BY 'sammyspassword';
GRANT CREATE, ALTER, DROP, INSERT, UPDATE, DELETE, SELECT ON sample_database.authors TO 'sammy'@'%';
