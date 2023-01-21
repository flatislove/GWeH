CREATE DATABASE IF NOT EXISTS class_db;

USE class_db;

CREATE TABLE IF NOT EXISTS classmates
(
    id      INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name    VARCHAR(70)     NOT NULL,
    age     INT             NOT NULL,
    address VARCHAR(70)     NOT NULL
);

INSERT INTO classmates
    (name, age, address)
VALUES ('Gauhar', 19, 'Almaty'),
       ('David', 32, 'Kyiv'),
       ('Federico', 29, 'Minsk'),
       ('Yauheni', 18, 'Minsk'),
       ('Milena', 17, 'Minsk'),
       ('Maksim', 31, 'Batumi'),
       ('Alisa', 21, 'Moscow'),
       ('Patric', 35, 'Warsaw'),
       ('Martin', 30, 'Minsk'),
       ('Harry', 30, 'Riga'),
       ('Dinara', 32, 'Minsk');

SELECT name
FROM classmates
WHERE address = 'Minsk'
  AND age >= 18
  AND age < 30;

DROP TABLE classmates;
