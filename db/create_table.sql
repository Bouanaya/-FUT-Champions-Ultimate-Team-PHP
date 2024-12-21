CREATE DATABASE FUT;
USE FUT;

CREATE TABLE Nationality (
    `id_nationality` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `nationality` VARCHAR(100) NOT NULL,
    `flag` VARCHAR(100) NOT NULL
);

CREATE TABLE phisique_GK (
    `id_phisiqueGK` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `diving` INT NOT NULL CHECK (diving BETWEEN 0 AND 100),
    `handling` INT NOT NULL CHECK (handling BETWEEN 0 AND 100),
    `kicking` INT NOT NULL CHECK (kicking BETWEEN 0 AND 100),
    `reflexes` INT NOT NULL CHECK (reflexes BETWEEN 0 AND 100),
    `speed` INT NOT NULL CHECK (speed BETWEEN 0 AND 100),
    `positioning` INT NOT NULL CHECK (positioning BETWEEN 0 AND 100)
);

CREATE TABLE Club (
    `id_Club` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `club` VARCHAR(255) NOT NULL,
    `logo` VARCHAR(255) NOT NULL
);

CREATE TABLE phisique_players (
    `id_phisiquePlayers` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `pace` INT NOT NULL CHECK (pace BETWEEN 0 AND 100),
    `shooting` INT NOT NULL CHECK (shooting BETWEEN 0 AND 100),
    `passing` INT NOT NULL CHECK (passing BETWEEN 0 AND 100),
    `dribbling` INT NOT NULL CHECK (dribbling BETWEEN 0 AND 100),
    `defending` INT NOT NULL CHECK (defending BETWEEN 0 AND 100),
    `physical` INT NOT NULL CHECK (physical BETWEEN 0 AND 100)
);

CREATE TABLE PLAYERS (
    `id_Player` INT AUTO_INCREMENT PRIMARY KEY,
    `fullName` VARCHAR(255) NOT NULL,
    `position` ENUM(
        'RW',
        'ST',
        'CM',
        'CB',
        'LW',
        'GK',
        'LB'
    ) NOT NULL,
    `rating` INT NOT NULL,
    `id_nationality` INT NOT NULL,
    `id_Club` INT NOT NULL,
    `id_phisiquePlayers` INT NULL,
    `id_phisiqueGK` INT NULL,
    `imgPlayer` VARCHAR(255),
    FOREIGN KEY (`id_phisiquePlayers`) REFERENCES `phisique_players`(`id_phisiquePlayers`) ON DELETE CASCADE,
    FOREIGN KEY (`id_nationality`) REFERENCES `Nationality`(`id_nationality`) ON DELETE CASCADE,
    FOREIGN KEY (`id_Club`) REFERENCES `Club`(`id_Club`) ON DELETE CASCADE,
    FOREIGN KEY (`id_phisiqueGK`) REFERENCES `phisique_GK`(`id_phisiqueGK`) ON DELETE CASCADE
);


DROP DATABASE IF EXISTS FUT;
