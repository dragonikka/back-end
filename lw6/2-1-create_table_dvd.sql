CREATE TABLE `laboratory_work`.`dvd` (
  `dvd_id` BIGINT NOT NULL AUTO_INCREMENT,   //BIGINT SERIAL
  `title` VARCHAR(255) NOT NULL,
  `production_year` INT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`dvd_id`));
