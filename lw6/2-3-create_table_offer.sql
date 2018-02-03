CREATE TABLE `laboratory_work`.`offer` (
  `offer_id` INT(10) NOT NULL AUTO_INCREMENT,
  `dvd_id` INT(10) NOT NULL,
  `customer_id` INT(10) NOT NULL,
  `offer_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,  //почему не DATETIME TIMESTAMP DATE
  `return_date` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`offer_id`));