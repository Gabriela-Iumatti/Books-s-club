-- reserve--
-- create database table reserve

CREATE TABLE reserve(
id SMALLINT PRIMARY KEY,
title VARCHAR (50),
present DATE,
moment TIME,
);

DELIMITER $$

CREATE OR REPLACE PROCEDURE sp_reserve_title(IN title_title VARCHAR(70)), OUT back VARCHAR(80))

BEGIN
SELECT title FROM books INNER JOIN reserve ON books.title = reserve.title;
IF NOT EXISTS (SELECT* FROM reserve WHERE title = title_title THEN

    BEGIN 
        UPDATE reserve
        SET title = title_title
        WHERE id = id_title
        IF ROW_COUNT()= 0 THEN
            SET back = "Book was not reserved."; -- Value for wait list : SELECT title FROM users INNER JOIN reserve ON users.id = reserve.id; 
            SET back = "Book was proprely reserved"; -- Value for begining and ending time
        END IF;
    END;

        ELSE 
            SET back = "Book is  already reserved, please try an other.";
    END IF;
SELECT back
END $$

DELIMITER;
