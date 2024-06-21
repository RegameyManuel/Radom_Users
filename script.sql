-- Création de la base de données
DROP DATABASE gestion_utilisateurs;
CREATE DATABASE IF NOT EXISTS gestion_utilisateurs;

-- Sélection de la base de données
USE gestion_utilisateurs;

-- Création de la table 'utilisateur'
CREATE TABLE utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    mdp VARCHAR(255) NOT NULL,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    rue1 VARCHAR(255),
    rue2 VARCHAR(255),
    code_postal VARCHAR(10),
    ville VARCHAR(255),
    telephone VARCHAR(20),
    actif TINYINT(1) NOT NULL DEFAULT 1,
    date_creation DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    date_modification DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    numero_adherent INT NOT NULL
);

-- Exemple d'insertion de données
/*
INSERT INTO utilisateur (email, mdp, nom, prenom, rue1, rue2, code_postal, ville, telephone, actif, date_creation, date_modification, numero_adherent) 
VALUES 
('exemple1@mail.com', 'motdepasse1', 'Nom1', 'Prenom1', 'Rue1', NULL, '75001', 'Paris', '0102030405', 1, '2023-01-01 12:00:00', '2023-01-01 12:00:00', 12345),
('exemple2@mail.com', 'motdepasse2', 'Nom2', 'Prenom2', 'Rue2', 'Complement Rue2', '69001', 'Lyon', '0607080910', 1, '2023-02-02 14:00:00', '2023-02-02 14:00:00', 67890);
*/