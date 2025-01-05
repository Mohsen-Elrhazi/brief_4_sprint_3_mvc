CREATE DATABASE gestionProduits_b4s3;

use gestionProduits_b4s3;

CREATE TABLE users(
    userID int AUTO_INCREMENT PRIMARY KEY ,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'client') DEFAULT 'client',
    statusClient ENUM('active', 'inactive') DEFAULT 'active'
);

CREATE TABLE produits(
    produitID int AUTO_INCREMENT PRIMARY KEY ,
    name VARCHAR(255) NOT NULL,
    prix DECIMAL(8,2) NOT NULL,
    quantite INT NOT NULL
);

-- ajouter un colonne pour marquer si un produit a ete supprime avec le principe de (soft delete)
ALTER TABLE produits
ADD COLUMN supprime INT DEFAULT 0;




CREATE TABLE commandes (
    commandeID INT AUTO_INCREMENT PRIMARY KEY,
    userID INT NOT NULL,
    montantTotal DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (userID) REFERENCES users(userID) ON DELETE CASCADE
);

CREATE TABLE details_commandes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    commandeID INT NOT NULL,
    produitID INT NOT NULL,
    quantite INT NOT NULL,
    prix_unitaire DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (commandeID) REFERENCES commandes(commandeID) ON DELETE CASCADE,
    FOREIGN KEY (produitID) REFERENCES produits(produitID) ON DELETE CASCADE
);
