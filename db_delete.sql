--delete--
DELIMITER $$

CREATE OR REPLACE PROCEDURE sp_delete_title(id_title INT), OUT back VARCHAR(80))

BEGIN
IF NOT EXISTS (SELECT* FROM books WHERE id = id_title) THEN

    BEGIN 

            SET back = "Book not finded, plese try again."
        END;

        ELSE
            DELETE FROM books WHERE id= id_title;
        I   IF ROW_COUNT()= 0 THEN
            SET back = "Book not excluded.";

        ELSE
            SET back = "Book proprely excluded.";

        END IF;

    END IF;
SELECT back
END $$

DELIMITER;
