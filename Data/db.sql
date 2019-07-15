SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
 
 
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
 
--
-- Baza danych: `twitter`
--
 
-- --------------------------------------------------------
 
--
-- Struktura tabeli dla tabeli `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hash_password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE IF NOT EXISTS `Inbox` (
  `message_id` int(11) AUTO_INCREMENT NOT NULL,
  `receiver` int(11) NOT NULL,
  `message` longtext,
  `sender` int(11) NOT NULL,
  `ready` tinyint(1) NOT NULL,
  `date` text NOT NULL
   PRIMARY KEY (`message_id`),
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;



## Ładowanie bazy
 
``mysql -uUŻYTKOWNIK -p NAZWA_BAZY < data/db.sql``