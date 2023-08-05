SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `board` (
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `board` (`title`, `author`, `content`) VALUES
('3', 'ela', '202cb962ac59075b964b07152d234b70'),
('4', 'elias', '202cb962ac59075b964b07152d234b70');

ALTER TABLE `board`
  ADD PRIMARY KEY (`title`);

COMMIT;

