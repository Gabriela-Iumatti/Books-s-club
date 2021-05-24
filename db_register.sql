-- register--
DELIMITER $$

CREATE OR REPLACE PROCEDURE sp_register_title(IN title_title VARCHAR(70), autor_title (60), publ_title (50)), OUT back VARCHAR(80))

BEGIN
IF NOT EXISTS (SELECT* FROM books WHERE title = title_title OR autor= autor_title OR publ= publ_title THEN

    BEGIN 
        INSERT INTO books (title, autor, publ)
        VALUES (title_title, autor_title, publi_title);

    IF ROW_COUNT()= 0 THEN
        SET back = "Book is not registed.";

    ELSE
        SET back = "Book proprely registed.";

    END IF;
END;

ELSE 
    SET back = "This book is alredy registed, find in our catalog.";
    END IF;
SELECT back
END $$

DELIMITER;
