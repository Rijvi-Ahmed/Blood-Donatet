

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



DROP TABLE IF EXISTS `donar`;
CREATE TABLE IF NOT EXISTS `donar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `save_the_life` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `users`
--


INSERT INTO `donar`(`id`, `name`, `gender`, `email`, `city`, `date_of_birth`, `contact_no`, `save_the_life`, `password`, `blood_group`) 
VALUES (0,'Anika Anwer', 'Female','anikaanwer@gmail.com', 'Dhanmondi', '2002-10-01', '01756897611', '2019-10-26', '32c6f620e5de7f1d40528a4e7c8481fd', 'O+')
VALUES (1,'Azmain Anwer Rafi', 'Male','azmainrafi@gmail.com', 'Paba', '2000-05-11', '01722334455', '2019-05-26', '4fd6005df81ffb2ccf9b34a51b085109', 'A+')
COMMIT;

