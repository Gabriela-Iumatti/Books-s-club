-- edit--
DELIMITER $$

CREATE OR REPLACE PROCEDURE sp_edit_title(IN title_title VARCHAR(70), autor_title (60), publ_title (50)), OUT back VARCHAR(80))

BEGIN
IF NOT EXISTS (SELECT* FROM books WHERE title = title_title OR autor= autor_title OR publ= publ_title THEN

    BEGIN 
        UPDATE books
        SET title = title_title, autor= autor_title, publ= publ_title
        WHERE id = id_title
        IF ROW_COUNT()= 0 THEN
            SET back = "Book was not edited.";
        ELSE
            SET back = "Book proprely edited";
        END IF;
    END;

        ELSE 
            SET back = "Book is already exist, please try an other.";
    END IF;
SELECT back
END $$

DELIMITER;
