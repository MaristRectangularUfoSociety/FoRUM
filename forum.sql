SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Users` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Users` (
  `userID` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(15) NULL ,
  `password` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`userID`) )
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `username_UNIQUE` ON `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Users` (`username` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Audit`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Audit` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Audit` (
  `auditID` INT NOT NULL AUTO_INCREMENT ,
  `userID` INT NOT NULL ,
  `referencedTable` ENUM('Users') NOT NULL ,
  `data` TEXT NULL ,
  `occurred` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `primaryKeyOfTable` INT NOT NULL ,
  PRIMARY KEY (`auditID`) ,
  CONSTRAINT `fk_Audits_Users`
    FOREIGN KEY (`userID` )
    REFERENCES `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Users` (`userID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_Audits_Users` ON `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Audit` (`userID` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Categories` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Categories` (
  `categoryID` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(15) NULL ,
  `order` TINYINT UNSIGNED NOT NULL ,
  PRIMARY KEY (`categoryID`) )
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `name_UNIQUE` ON `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Categories` (`name` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Forums`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Forums` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Forums` (
  `forumID` INT NOT NULL AUTO_INCREMENT ,
  `categoryID` INT NOT NULL ,
  `order` TINYINT NOT NULL ,
  `name` VARCHAR(15) NULL ,
  PRIMARY KEY (`forumID`) ,
  CONSTRAINT `fk_Forums_Categories1`
    FOREIGN KEY (`categoryID` )
    REFERENCES `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Categories` (`categoryID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_Forums_Categories1` ON `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Forums` (`categoryID` ASC) ;

SHOW WARNINGS;
CREATE UNIQUE INDEX `uniqueOrderAndCategory` ON `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Forums` (`categoryID` ASC, `order` ASC) ;

SHOW WARNINGS;
CREATE UNIQUE INDEX `uniqueNameandCategory` ON `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Forums` (`name` ASC, `categoryID` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Topics`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Topics` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Topics` (
  `topicID` INT NOT NULL AUTO_INCREMENT ,
  `forumID` INT NOT NULL ,
  `title` VARCHAR(15) NOT NULL ,
  PRIMARY KEY (`topicID`) ,
  CONSTRAINT `fk_Topics_Forums1`
    FOREIGN KEY (`forumID` )
    REFERENCES `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Forums` (`forumID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_Topics_Forums1` ON `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Topics` (`forumID` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Posts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Posts` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Posts` (
  `postID` INT NOT NULL AUTO_INCREMENT ,
  `topicID` INT NOT NULL ,
  `message` TEXT NULL ,
  PRIMARY KEY (`postID`) ,
  CONSTRAINT `fk_Posts_Topics1`
    FOREIGN KEY (`topicID` )
    REFERENCES `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Topics` (`topicID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_Posts_Topics1` ON `d4fd8eb832a57406d9fa57d7a7a85ec0d`.`Posts` (`topicID` ASC) ;

SHOW WARNINGS;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
