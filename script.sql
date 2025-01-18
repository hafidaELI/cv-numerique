CREATE DATABASE IF NOT EXISTS contact_form;

USE contact_form;

CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,          -- Identifiant unique pour chaque message
    nom VARCHAR(100) NOT NULL,                  -- Nom de la personne
    prenom VARCHAR(100) NOT NULL,               -- Prénom de la personne
    societe VARCHAR(100),                       -- Nom de la société (facultatif)
    email VARCHAR(100) NOT NULL,                -- Adresse email
    telephone VARCHAR(20) NOT NULL,             -- Numéro de téléphone
    message TEXT NOT NULL,                      -- Contenu du message
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Date et heure de soumission
);