USE kamoulox;
-- Creer les tables
CREATE TABLE article (
id_article INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
titre_article VARCHAR(100) NOT NULL, 
date_article DATE NOT NULL,
contenu_article TEXT NOT NULL
)Engine = InnoDB;

CREATE TABLE commentaire (
id_commentaire INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
text_commentaire TEXT NOT NULL,
date_commentaire DATE NOT NULL
)Engine=InnoDB;

-- Ajout de id utilisateur dans les tables 
ALTER TABLE article ADD COLUMN id_utilisateur INT;
ALTER TABLE commentaire ADD COLUMN id_utilisateur INT;

-- Ajout de la table d'association 
CREATE TABLE ajouter (
id_article INT,
id_commentaire INT,
PRIMARY KEY (id_article,id_commentaire)
)Engine = InnoDB;

-- Ajout des contrainte
ALTER TABLE article 
ADD CONSTRAINT fk_id_utilisateur
FOREIGN KEY (id_utilisateur)
REFERENCES utilisateur(id_utilisateur);

ALTER TABLE commentaire 
ADD CONSTRAINT fk_add_utilisateur
FOREIGN KEY (id_utilisateur)
REFERENCES utilisateur(id_utilisateur);

ALTER TABLE ajouter 
ADD CONSTRAINT fk_add_article
FOREIGN KEY (id_article)
REFERENCES article(id_article);

ALTER TABLE ajouter
ADD CONSTRAINT fk_add_commentaire
FOREIGN KEY (id_commentaire)
REFERENCES commentaire(id_commentaire);

-- Création de compte 
CREATE USER 'visiteur' @'%' IDENTIFIED BY 'visiteur';

--  Affecter les droits a visiteur
GRANT SELECT, INSERT ON kamoulox.utilisateur TO 'visiteur'@'%';
GRANT SELECT ON kamoulox. * TO 'visiteur'@'%'; 
GRANT INSERT ON kamoulox.utilisateur TO 'visiteur'@'%';
FLUSH PRIVILEGES;


-- creer un compte utilisateur
CREATE USER 'utilisateur' @'%' IDENTIFIED BY 'utilisateur';

-- Affecter les droits a utilisateurs
GRANT SELECT, INSERT, UPDATE, DELETE ON kamoulox.utilisateur TO 'utilisateur'@'%';
GRANT SELECT, INSERT, UPDATE, DELETE ON kamoulox.article TO 'utilisateur'@'%';
GRANT SELECT, INSERT, UPDATE, DELETE ON kamoulox.commentaire TO 'utilisateur'@'%';
GRANT SELECT, INSERT ON kamoulox.ajouter TO 'utilisateur'@'%';
FLUSH PRIVILEGES;

-- creer un compte admin
CREATE USER 'administrateur' @'%' IDENTIFIED BY 'administrateur';

-- Affecter les droits à administrateur
GRANT SELECT, INSERT, UPDATE, DELETE ON kamoulox.utilisateur TO 'administrateur'@'%';
GRANT SELECT, INSERT, UPDATE, DELETE ON kamoulox.article TO 'administrateur'@'%';
GRANT SELECT, INSERT, UPDATE, DELETE ON kamoulox.commentaire TO 'administrateur'@'%';
GRANT SELECT, INSERT, DELETE ON kamoulox.ajouter TO 'administrateur'@'%';
FLUSH PRIVILEGES;

SELECT * FROM mysql.user;

CREATE VIEW vw_article AS (SELECT titre_article AS titre, date_article AS 'date' FROM article);

SELECT * FROM vw_article;