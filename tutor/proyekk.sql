-- MySQL Script generated by MySQL Workbench
-- Thu Apr 25 11:41:23 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema PA
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema PA
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS `PA`;
USE `PA` ;

-- -----------------------------------------------------
-- Table `PA`.`Mahasiswa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `PA`.`Mahasiswa` ;

CREATE TABLE IF NOT EXISTS `PA`.`Mahasiswa` (
  `NIM` INT NOT NULL,
  `Nama` VARCHAR(45) NULL,
  `Prodi` VARCHAR(45) NULL,
  `Angkatan` INT NULL,
  `Tutor_ID_Kelas` INT NOT NULL,
  `Mahasiswa_NIM` INT NOT NULL,
  `Mahasiswa_Tutor_ID_Kelas` INT NOT NULL,
  PRIMARY KEY (`NIM`, `Tutor_ID_Kelas`, `Mahasiswa_NIM`, `Mahasiswa_Tutor_ID_Kelas`))
ENGINE = INNODB;


-- -----------------------------------------------------
-- Table `PA`.`Mata Kuliah`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `PA`.`Mata Kuliah` ;

CREATE TABLE IF NOT EXISTS `PA`.`Mata Kuliah` (
  `idMata Kuliah` INT NOT NULL,
  `Nama Mata Kuliah` VARCHAR(45) NULL,
  PRIMARY KEY (`idMata Kuliah`))
ENGINE = INNODB;


-- -----------------------------------------------------
-- Table `PA`.`Tutor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `PA`.`Tutor` ;

CREATE TABLE IF NOT EXISTS `PA`.`Tutor` (
  `ID_Kelas` INT NOT NULL,
  `Angkatan < 2018` VARCHAR(45) NULL,
  `Nama` VARCHAR(45) NULL,
  `Mata Kuliah Yang diambil` VARCHAR(45) NULL,
  `Mahasiswa_NIM` INT NOT NULL,
  `Mahasiswa_Tutor_ID_Kelas` INT NOT NULL,
  `Mahasiswa_Mahasiswa_NIM` INT NOT NULL,
  `Mahasiswa_Mahasiswa_Tutor_ID_Kelas` INT NOT NULL,
  `Mata Kuliah_idMata Kuliah` INT NOT NULL,
  PRIMARY KEY (`ID_Kelas`))
ENGINE = INNODB;


-- -----------------------------------------------------
-- Table `PA`.`Admin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `PA`.`Admin` ;

CREATE TABLE IF NOT EXISTS `PA`.`Admin` (
  `Id_admin` INT NOT NULL,
  `Nama` VARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  PRIMARY KEY (`Id_admin`))
ENGINE = INNODB;


-- -----------------------------------------------------
-- Table `PA`.`Kelas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `PA`.`Kelas` ;

CREATE TABLE IF NOT EXISTS `PA`.`Kelas` (
  `idKelas` INT NOT NULL,
  `ID_matakuliah` VARCHAR(45) NULL,
  `Admin_Id_admin` INT NOT NULL,
  `Mata Kuliah_idMata Kuliah` INT NOT NULL,
  `Mahasiswa_NIM` INT NOT NULL,
  `Mahasiswa_Tutor_ID_Kelas` INT NOT NULL,
  `Mahasiswa_Mahasiswa_NIM` INT NOT NULL,
  `Mahasiswa_Mahasiswa_Tutor_ID_Kelas` INT NOT NULL,
  PRIMARY KEY (`idKelas`))
ENGINE = INNODB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
