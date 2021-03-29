
DELIMITER $$
DROP PROCEDURE IF EXISTS selecwarga;
CREATE DEFINER=`root`@`localhost` PROCEDURE `selecwarga`()
/**********************/
/*created by : ridwan 	*/
/*created at : mei 2021 */
/*description :           */
/*********************/
BEGIN
DECLARE max_id int default 0;
DECLARE id varchar(30) ;
    
    SELECT id_warga into id
      FROM iuran_pasdot.m_warga
     WHERE id_warga = (SELECT MAX(ID_WARGA) 
                        FROM m_warga) ;
                        
	SET max_id = CONVERT(id, int);
    SELECT max_id;
    /*
    IF MAX_ID = '' 
    BEGIN
		SELECT 'A';
    END
    */
    
    
END$$
DELIMITER ;
/*call selecwarga();*/