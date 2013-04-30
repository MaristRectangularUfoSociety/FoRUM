SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `venus` ;
CREATE SCHEMA IF NOT EXISTS `venus` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
SHOW WARNINGS;
USE `venus` ;

-- -----------------------------------------------------
-- Table `venus`.`Users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `venus`.`Users` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `venus`.`Users` (
  `userID` INT NOT NULL ,
  `username` VARCHAR(15) NULL ,
  `password` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`userID`) )
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `username_UNIQUE` ON `venus`.`Users` (`username` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `venus`.`Audit`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `venus`.`Audit` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `venus`.`Audit` (
  `auditID` INT NOT NULL ,
  `userID` INT NOT NULL ,
  `referencedTable` ENUM('Users') NOT NULL ,
  `data` TEXT NULL ,
  `occurred` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `primaryKeyOfTable` INT NOT NULL ,
  PRIMARY KEY (`auditID`) ,
  CONSTRAINT `fk_Audits_Users`
    FOREIGN KEY (`userID` )
    REFERENCES `venus`.`Users` (`userID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_Audits_Users` ON `venus`.`Audit` (`userID` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `venus`.`Categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `venus`.`Categories` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `venus`.`Categories` (
  `categoryID` INT NOT NULL ,
  `name` VARCHAR(15) NULL ,
  `order` TINYINT UNSIGNED NOT NULL ,
  PRIMARY KEY (`categoryID`) )
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `name_UNIQUE` ON `venus`.`Categories` (`name` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `venus`.`Forums`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `venus`.`Forums` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `venus`.`Forums` (
  `forumID` INT NOT NULL ,
  `categoryID` INT NOT NULL ,
  `order` TINYINT NOT NULL ,
  `name` VARCHAR(15) NULL ,
  PRIMARY KEY (`forumID`) ,
  CONSTRAINT `fk_Forums_Categories1`
    FOREIGN KEY (`categoryID` )
    REFERENCES `venus`.`Categories` (`categoryID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_Forums_Categories1` ON `venus`.`Forums` (`categoryID` ASC) ;

SHOW WARNINGS;
CREATE UNIQUE INDEX `uniqueOrderAndCategory` ON `venus`.`Forums` (`categoryID` ASC, `order` ASC) ;

SHOW WARNINGS;
CREATE UNIQUE INDEX `uniqueNameandCategory` ON `venus`.`Forums` (`name` ASC, `categoryID` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `venus`.`Topics`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `venus`.`Topics` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `venus`.`Topics` (
  `topictID` INT NOT NULL ,
  `forumID` INT NOT NULL ,
  `title` VARCHAR(15) NOT NULL ,
  PRIMARY KEY (`topictID`) ,
  CONSTRAINT `fk_Topics_Forums1`
    FOREIGN KEY (`forumID` )
    REFERENCES `venus`.`Forums` (`forumID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_Topics_Forums1` ON `venus`.`Topics` (`forumID` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `venus`.`Posts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `venus`.`Posts` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `venus`.`Posts` (
  `postID` INT NOT NULL ,
  `Topics_topictID` INT NOT NULL ,
  `message` TEXT NULL ,
  PRIMARY KEY (`postID`) ,
  CONSTRAINT `fk_Posts_Topics1`
    FOREIGN KEY (`Topics_topictID` )
    REFERENCES `venus`.`Topics` (`topictID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_Posts_Topics1` ON `venus`.`Posts` (`Topics_topictID` ASC) ;

SHOW WARNINGS;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
