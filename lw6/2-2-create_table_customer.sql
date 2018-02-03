CREATE TABLE `laboratory_work`.`customer` (
  `customer_id` INT(10) NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(255) NOT NULL,
  `second_name` VARCHAR(255) NOT NULL,
  `passport_code` VARCHAR(255) NOT NULL,
  `registration_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customer_id`));