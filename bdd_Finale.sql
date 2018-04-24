-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema projet
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema projet
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `projet` DEFAULT CHARACTER SET utf8 ;
USE `projet` ;

-- -----------------------------------------------------
-- Table `projet`.`université`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projet`.`université` (
  `Nom_Fr` VARCHAR(255) NULL DEFAULT NULL,
  `Nom_Ar` VARCHAR(255) NULL DEFAULT NULL,
  `Adresse` VARCHAR(255) NULL DEFAULT NULL,
  `Tél` VARCHAR(45) NULL DEFAULT NULL,
  `Fax` VARCHAR(45) NULL DEFAULT NULL,
  `Site_Web` VARCHAR(255) NULL DEFAULT NULL,
  `Code` INT(10) UNSIGNED AUTO_INCREMENT NOT NULL,
  PRIMARY KEY (`Code`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

INSERT INTO `université` (`Nom_Fr`, `Nom_Ar`, `Adresse`, `Tél`, `Fax`, `Site_Web`) VALUES
('Ecole nationale supérieure d\'informatique', 'المدرسة الوطنية العليا للإعلام الآلي', 'Oued Smar', '023-93-91-32', '023-93-91-34', 'http://www.esi.dz');

-- -----------------------------------------------------
-- Table `projet`.`laboratoire`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projet`.`laboratoire` ( 
  `Code` INT(10) UNSIGNED AUTO_INCREMENT NOT NULL,
  `Désignation` VARCHAR(255) NULL DEFAULT NULL,
  `Nom_Directeur` VARCHAR(45) NULL DEFAULT NULL,
  `Prénom_Directeur` VARCHAR(45) NULL DEFAULT NULL,
  `Tél` VARCHAR(45) NULL DEFAULT NULL,
  `Fax` VARCHAR(45) NULL DEFAULT NULL,
  `Site_Web` VARCHAR(255) NULL DEFAULT NULL,
  `Université_Code` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`Code`),
  INDEX `fk_Laboratoire_Université1_idx` (`Université_Code` ASC),
  CONSTRAINT `fk_Laboratoire_Université1`
    FOREIGN KEY (`Université_Code`)
    REFERENCES `projet`.`université` (`Code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

INSERT INTO `laboratoire` (`Désignation`, `Nom_Directeur`, `Prénom_Directeur`, `Tél`, `Fax`, `Site_Web`, `Université_Code`) VALUES
('LMCS', 'KHELIFATI', 'Si Larabi', '023-93-91-32', '023-93-91-34', 'http://www.esi.dz',1);


-- -----------------------------------------------------
-- Table `projet`.`chercheur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projet`.`chercheur` (
  `Code` INT(10) UNSIGNED AUTO_INCREMENT NOT NULL,
  `Nom_Fr` VARCHAR(45) NULL DEFAULT NULL,
  `Prénom_Fr` VARCHAR(45) NULL DEFAULT NULL,
  `Nom_Ar` VARCHAR(45) NULL DEFAULT NULL,
  `Prénom_Ar` VARCHAR(45) NULL DEFAULT NULL,
  `Prénom_Père_Ar` VARCHAR(45) NULL DEFAULT NULL,
  `Prénom_Père_Fr` VARCHAR(45) NULL DEFAULT NULL,
  `Sexe` ENUM('Masculin','Féminin') NULL DEFAULT NULL,
  `Etat_Civil` ENUM('Marié','Célébataire','Veuf','Divorcé') NULL DEFAULT NULL,
  `Date_Naissance` VARCHAR(10) NULL DEFAULT NULL,
  `Tél` VARCHAR(45) NULL DEFAULT NULL,
  `Email` VARCHAR(255) NULL DEFAULT NULL,
  `Laboratoire_Code` INT(10) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`Code`),
  INDEX `fk_Chercheur_Laboratoire1_idx` (`Laboratoire_Code` ASC),
  CONSTRAINT `fk_Chercheur_Laboratoire1`
    FOREIGN KEY (`Laboratoire_Code`)
    REFERENCES `projet`.`laboratoire` (`Code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projet`.`doctorant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projet`.`doctorant` (
  `Code_Doctorant` INT(10) UNSIGNED NOT NULL,
  `Diplome_Base` VARCHAR(45) NULL DEFAULT NULL,
  `Diplome_Préparé` VARCHAR(45) NULL DEFAULT NULL,
  `Date_Inscription` VARCHAR(10) NULL DEFAULT NULL,
  `Sujet_Thèse` VARCHAR(255) NULL DEFAULT NULL,
  `Nom_Encadreur` VARCHAR(45) NULL DEFAULT NULL,
  `Prénom_Encadreur` VARCHAR(45) NULL DEFAULT NULL,
  `Grade_Encadreur` VARCHAR(45) NULL DEFAULT NULL,
  `Etablissement_Encadreur` VARCHAR(255) NULL DEFAULT NULL,
  `Nom_Co_Encadreur` VARCHAR(45) NULL DEFAULT NULL,
  `Prénom_Co_Encadreur` VARCHAR(45) NULL DEFAULT NULL,
  `Grade_Co_Encadreur` VARCHAR(45) NULL DEFAULT NULL,
  `Etablissement_Co_Encadreur` VARCHAR(45) NULL DEFAULT NULL,
  `Fonction` VARCHAR(45) NULL DEFAULT NULL,
  `Etablissement_Fonction` VARCHAR(255) NULL DEFAULT NULL,
  `Lieu_Etablissement` VARCHAR(45) NULL DEFAULT NULL,
  `Etablissement_Cotutelle` VARCHAR(255) NULL DEFAULT NULL,
  `Laboratoire_Cotutelle` VARCHAR(25) NULL DEFAULT NULL,
  `Chercheur_Code` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`Code_Doctorant`),
  INDEX `fk_Doctorant_Chercheur1_idx` (`Chercheur_Code` ASC),
  CONSTRAINT `fk_Doctorant_Chercheur1`
    FOREIGN KEY (`Chercheur_Code`)
    REFERENCES `projet`.`chercheur` (`Code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projet`.`enseignant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projet`.`enseignant` (
  `Grade` VARCHAR(45) NULL DEFAULT NULL,
  `Date_Recrutement` VARCHAR(10) NULL DEFAULT NULL,
  `Spécialité` VARCHAR(45) NULL DEFAULT NULL,
  `Nature` ENUM('Permanent','Vacataire','Associé') NULL DEFAULT NULL,
  `Date_Nomination` VARCHAR(10) NULL DEFAULT NULL,
  `Date_1_Insc` VARCHAR(10) NULL DEFAULT NULL,
  `Code_Enseignant` INT(10) UNSIGNED NOT NULL,
  `Chercheur_Code` INT(10) UNSIGNED NOT NULL,
  `Université_Code` INT(10) UNSIGNED NULL DEFAULT NULL,
  `Date_ position_actuelle` VARCHAR(10) NULL DEFAULT NULL,
  PRIMARY KEY (`Code_Enseignant`),
  INDEX `fk_Enseignant_Chercheur1_idx` (`Chercheur_Code` ASC),
  INDEX `fk_Enseignant_Université1_idx` (`Université_Code` ASC),
  CONSTRAINT `fk_Enseignant_Chercheur1`
    FOREIGN KEY (`Chercheur_Code`)
    REFERENCES `projet`.`chercheur` (`Code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Enseignant_Université1`
    FOREIGN KEY (`Université_Code`)
    REFERENCES `projet`.`université` (`Code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `projet`.`suivi_stage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projet`.`suivi_stage` (
  `Code_Stage` INT(10) UNSIGNED AUTO_INCREMENT NOT NULL,   
  `Attestation_Stage` TINYINT(1) NULL DEFAULT NULL,
  `Frais` TINYINT(1) NULL DEFAULT NULL,
  `Transport` TINYINT(1) NULL DEFAULT NULL,
  `Document` ENUM('Retour','Annulation') NULL DEFAULT NULL, 
  `Etat` ENUM('En Cours','Cloturé','Annulé') NULL DEFAULT NULL,
  PRIMARY KEY (`Code_Stage`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projet`.`stage`
-- ----------------------------------------------------- 
CREATE TABLE IF NOT EXISTS `projet`.`stage` (
  `Pays` VARCHAR(45) NULL DEFAULT NULL,
  `Ville` VARCHAR(45) NULL DEFAULT NULL,
  `Etablissement` VARCHAR(255) NULL DEFAULT NULL,
  `Adr_Etablissement` VARCHAR(255) NULL DEFAULT NULL,
  `Tél_Etablissement` VARCHAR(45) NULL DEFAULT NULL,
  `Email_Etablissement` VARCHAR(255) NULL DEFAULT NULL,
  `Frais_de_Séjour` DECIMAL(10,0) UNSIGNED NULL DEFAULT NULL,
  `Site_Web_Etablissement` VARCHAR(255) NULL DEFAULT NULL,
  `Frais_Transport` DECIMAL(10,0) UNSIGNED NULL DEFAULT NULL,
  `Frais_Visa` DECIMAL(10,0) UNSIGNED NULL DEFAULT NULL,
  `Frais_Assurance` DECIMAL(10,0) UNSIGNED NULL DEFAULT NULL,
  `Date_Prévue_Départ` VARCHAR(10) NULL DEFAULT NULL,
  `Date_Prévue_Retour` VARCHAR(10) NULL DEFAULT NULL,          
  `Date_Effective_Départ` VARCHAR(10) NULL DEFAULT NULL,
  `Date_Effective_Retour` VARCHAR(10) NULL DEFAULT NULL,
  `Moyen_Transport` ENUM('Avion','Bateau','Voiture','Train') NULL DEFAULT NULL,
  `Etat_Stage` ENUM('En Cours','Cloturé','Annulé') NULL DEFAULT NULL,
  `Code` INT(10) UNSIGNED NOT NULL,
  `Code_PV` INT(10) UNSIGNED NOT NULL,
  `Chercheur_Code` INT(10) UNSIGNED NOT NULL,
  `Durée` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`Code`),
  INDEX `fk_Stage_Chercheur1_idx` (`Chercheur_Code` ASC),
  CONSTRAINT `fk_Stage_Chercheur1`
    FOREIGN KEY (`Chercheur_Code`)
    REFERENCES `projet`.`chercheur` (`Code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Stage_Suivi_Stage1`
    FOREIGN KEY (`Code`)
    REFERENCES `projet`.`suivi_stage` (`Code_Stage`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projet`.`manifestation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projet`.`manifestation` ( 
  `Code_Manifestation` VARCHAR(45) NOT NULL,
  `Désignation` VARCHAR(255) NULL DEFAULT NULL,
  `Acronyme` VARCHAR(45) NULL DEFAULT NULL,
  `Tél_Manifestation` VARCHAR(45) NULL DEFAULT NULL,
  `Email_Manifestation` VARCHAR(255) NULL DEFAULT NULL,
  `Site_Web_Manifestation` VARCHAR(255) NULL DEFAULT NULL,
  `Titre_Article` VARCHAR(255) NULL DEFAULT NULL,
  `Frais_Inscription` DECIMAL(10,0) NULL DEFAULT NULL,
  `Stage_Code` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`Code_Manifestation`),
  INDEX `fk_Manifestation_Stage1_idx` (`Stage_Code` ASC),
  CONSTRAINT `fk_Manifestation_Stage1`
    FOREIGN KEY (`Stage_Code`)
    REFERENCES `projet`.`stage` (`Code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projet`.`perfectionnement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projet`.`perfectionnement` ( 
  `Code_Perfectionnement` VARCHAR(45) NOT NULL,
  `Objectif` VARCHAR(500) NULL DEFAULT NULL,
  `Missions` VARCHAR(500) NULL DEFAULT NULL,
  `Résultat` VARCHAR(500) NULL DEFAULT NULL,
  `Stage_Code` INT(10) UNSIGNED NOT NULL,
  `Communiquer` TINYINT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`Code_Perfectionnement`),
  INDEX `fk_Perfectionnement_Stage1_idx` (`Stage_Code` ASC),
  CONSTRAINT `fk_Perfectionnement_Stage1`
    FOREIGN KEY (`Stage_Code`)
    REFERENCES `projet`.`stage` (`Code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projet`.`Users`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `members` (
`memberID` int(11) AUTO_INCREMENT NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No',
  `Type` enum('CS','DG','AD') DEFAULT NULL,
PRIMARY KEY (`memberID`)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;
--
-- Contenu de la table `members`
--
INSERT INTO `members` (`memberID`, `username`, `password`, `email`, `active`, `resetToken`, `resetComplete`, `Type`) VALUES
(30, 'djedaini', '$2y$10$INf53LOuGmleYg.U3Lj3/.6aqdFjHHuUuEQxJVRC5y0loqq20Fdu.', 'da_djedaini@esi.dz', 'Yes', NULL, 'No', 'AD'),
(34, 'ali', '$2y$10$N44.MaeRA8CnHNxTEaWgOecoDWX3Te7CqgTnXnqf8.mtbqIk5xJ0y', 'dwjadjs@fjs.dz', '8ac60f74039b418443eee78a0d7592f0', NULL, 'No', 'DG');
--
-- Index pour les tables exportées
--

--
-- Index pour la table `members`
--

--
-- AUTO_INCREMENT pour les tables exportées
--
--
-- AUTO_INCREMENT pour la table `members`

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
