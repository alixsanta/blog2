CREATE DATABASE blog;
USE blog;

-- Création des tables --
CREATE TABLE role(
	id_role INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom_role VARCHAR(50)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE categorie(
	id_cat INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom_cat VARCHAR(50)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE utilisateur(
	id_util INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom_util VARCHAR(50),
    prenom_util VARCHAR(50),
    mail_util VARCHAR(255),
    mdp_util VARCHAR(255),
    img_util VARCHAR(100) NULL,
    status_util BOOLEAN DEFAULT 0, -- Les status_util 0 => non banni et 1 => banni --
    id_role INT DEFAULT 2 -- Tous les nouveaux utilisateurs seront Utlisateur --
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE article(
	id_art INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom_art VARCHAR(50),
    content_art TEXT,
    date_art DATE,
    id_cat INT
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE commentaire(
	id_com INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    content_com TEXT,
    date_com DATE,
    id_util INT,
    id_art INT
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Ajout des contraintes --
-- Contraintes de la table utilisateur --
ALTER TABLE utilisateur
ADD CONSTRAINT fk_posseder_role
FOREIGN KEY(id_role)
REFERENCES role(id_role);

-- Contraintes de la table article --
ALTER TABLE article
ADD CONSTRAINT fk_filtrer_categorie
FOREIGN KEY(id_cat)
REFERENCES categorie(id_cat);

-- Contraintes de la table commentaire --
ALTER TABLE commentaire
ADD CONSTRAINT fk_ajouter_utilisateur
FOREIGN KEY(id_util)
REFERENCES utilisateur(id_util);

ALTER TABLE commentaire
ADD CONSTRAINT fk_commenter_article
FOREIGN KEY(id_art)
REFERENCES article(id_art);


-- Ajout des roles --
INSERT INTO role(nom_role) VALUES
("Admin"),
("Utilisateur");

-- Ajout d'un utilisateur admin --
INSERT INTO utilisateur(nom_util, prenom_util, mail_util, mdp_util, id_role) VALUES
("Ousseni", "Hafarou-dine", "hafarou@mail.com", "$2y$10$dcbzjwiRzIAlMB8V3N7w1.VJwCcPU8xbJvYr.QXXIfxfHpgwv/qUS", 1); -- mdp = 251020 pour password_verify() --

INSERT INTO utilisateur(nom_util, prenom_util, mail_util, mdp_util) VALUES
("Ousseni", "Hafarou-dine", "hafarou@gmail.com", "$2y$10$dcbzjwiRzIAlMB8V3N7w1.VJwCcPU8xbJvYr.QXXIfxfHpgwv/qUS"),
("Toto", "Martin", "martin@gmail.com", "$2y$10$dcbzjwiRzIAlMB8V3N7w1.VJwCcPU8xbJvYr.QXXIfxfHpgwv/qUS");

-- drop database blog; --

