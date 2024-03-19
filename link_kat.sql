CREATE DATABASE shortener;

USE shortener;

CREATE TABLE `shortener`.`urls` (
  `uid` INT AUTO_INCREMENT,
  `longurl` TEXT(255) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE INDEX `uid_UNIQUE` (`uid` ASC) VISIBLE);


