-- -----------------------------------------------------
-- Database `gezonheidsmeter`
-- -----------------------------------------------------

CREATE DATABASE IF NOT EXISTS `gezondheidsmeter`;

-- -----------------------------------------------------
-- Table `gezonheidsmeter`.`Awnsers`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `gezondheidsmeter`.`Awnsers`;

CREATE TABLE `gezondheidsmeter`.`Awnsers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `awnsers` varchar(45) DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- -----------------------------------------------------
-- Table `gezonheidsmeter`.`Questions`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `gezondheidsmeter`.`Questions`;

CREATE TABLE `gezondheidsmeter`.`Questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `section_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- -----------------------------------------------------
-- Table `gezonheidsmeter`.`Results`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `gezondheidsmeter`.`Results`;

CREATE TABLE `gezondheidsmeter`.`Results` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `question_id` int(11) unsigned NOT NULL,
  `awnser_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- -----------------------------------------------------
-- Table `gezonheidsmeter`.`Sections`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `gezondheidsmeter`.`Sections`;

CREATE TABLE `gezondheidsmeter`.`Sections` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `section` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- -----------------------------------------------------
-- Table `gezonheidsmeter`.`Users`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `gezondheidsmeter`.`Users`;

CREATE TABLE `gezondheidsmeter`.`Users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL DEFAULT '',
  `username` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(200) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -----------------------------------------------------
-- Add Constraints
-- -----------------------------------------------------

ALTER TABLE `gezondheidsmeter`.`Questions` 
  ADD CONSTRAINT `fk_Questions_Sections` FOREIGN KEY (`section_id`) REFERENCES `gezondheidsmeter`.`Sections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `gezondheidsmeter`.`Results` 
  ADD CONSTRAINT `fk_Results_Awnsers` FOREIGN KEY (`awnser_id`) REFERENCES `gezondheidsmeter`.`Awnsers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Results_Questions` FOREIGN KEY (`question_id`) REFERENCES `gezondheidsmeter`.`Questions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Results_Users` FOREIGN KEY (`user_id`) REFERENCES `gezondheidsmeter`.`Users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

-- -----------------------------------------------------
-- Database updates
-- -----------------------------------------------------