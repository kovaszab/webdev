
USE `test`;

CREATE TABLE `test` (
  `test` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `test` (`test`) VALUES
('Hello World! It changed...');
INSERT INTO `test` (`test`) VALUES
('Hello World! It changed...');
INSERT INTO `test` (`test`) VALUES
('Every.Time.');
COMMIT;