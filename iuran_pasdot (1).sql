-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 02:57 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iuran_pasdot`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `selecwarga` ()  BEGIN
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getIDwarga` ()  NO SQL
BEGIN
DECLARE id_int int default 0;
DECLARE id_int_new int default 0;
DECLARE id_varchar varchar(10);

    SELECT id_warga INTO id_varchar FROM m_warga
    WHERE id_warga = (SELECT max(id_warga)
                       FROM m_warga);
                       
     set id_int = convert(id_varchar,int);
     
     IF id_int = 0 THEN
    	set id_int = 1;
     ELSE
     	set id_int_new = id_int + 1;
     END IF ;
     
     SELECT id_int_new;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
('b4659fe3-8aa1-11eb-bf19-7085c22fd108', 'muhammad rizal', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1');

-- --------------------------------------------------------

--
-- Table structure for table `m_warga`
--

CREATE TABLE `m_warga` (
  `id_warga` varchar(50) NOT NULL,
  `jns_identitas` varchar(20) DEFAULT NULL,
  `no_identitas` varchar(20) DEFAULT NULL,
  `nama_warga` varchar(80) DEFAULT NULL,
  `alamat` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_warga`
--

INSERT INTO `m_warga` (`id_warga`, `jns_identitas`, `no_identitas`, `nama_warga`, `alamat`) VALUES
('00001', 'ktp', '3502181805870005', 'Abd. Rohman', 'Pasirdoton rt 02'),
('00002', 'ktp', '3502181805870005', 'Abd. Qohar', 'Pasirdoton rt 02 rw 01 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `m_warga`
--
ALTER TABLE `m_warga`
  ADD PRIMARY KEY (`id_warga`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
