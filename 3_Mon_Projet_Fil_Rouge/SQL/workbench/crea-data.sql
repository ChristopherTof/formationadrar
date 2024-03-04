
-- Création de la Base de Donnée

CREATE DATABASE change_ton_climat;

USE change_ton_climat;
-- Création des tables 

CREATE TABLE users (
	id_users INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    username_users VARCHAR(50) UNIQUE NOT NULL,
    firstname_users VARCHAR(50),
    lastname_users VARCHAR(50),
    email_users VARCHAR(50) NOT NULL UNIQUE,
    password_users VARCHAR(100) NOT NULL,
    image_users VARCHAR(100),
    date_inscription_users DATE,
    is_moderator TINYINT(1) DEFAULT 0
)Engine=InnoDB;

CREATE TABLE theme (
	id_theme INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name_theme VARCHAR(50)
)Engine=InnoDB;

CREATE TABLE discuss (
	id_discuss INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title_discuss VARCHAR(50) NOT NULL,
    body_discuss TEXT NOT NULL,
    date_discuss DATETIME,
    is_hidden_discuss TINYINT(1) DEFAULT 0,
    author INT,
    id_theme INT
)Engine=InnoDB;

CREATE TABLE notif(
	id_notif INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name_notif VARCHAR(50)
)Engine=InnoDB;

CREATE TABLE message (
	id_message INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    text_message TEXT,
    date_message DATETIME,
    sender INT,
    recipient INT
)Engine=InnoDB;

-- Création des tables d'association

CREATE TABLE response (
	id_users INT,
    id_discuss INT,
    text_response TEXT,
    date_response DATETIME,
    PRIMARY KEY (id_users, id_discuss)
)Engine=InnoDB;

-- Création des Foreign key 

	-- Table accept
 ALTER TABLE accept 
 ADD CONSTRAINT fk_users_accept
 FOREIGN KEY (id_users)
 REFERENCES users(id_users); 
 
 ALTER TABLE accept 
 ADD CONSTRAINT fk_notif_accept
 FOREIGN KEY (id_notif)
 REFERENCES notif(id_notif);
 
	-- Table response

ALTER TABLE response
ADD CONSTRAINT fk_users_response
FOREIGN KEY (id_users)
REFERENCES users(id_users);

ALTER TABLE response
ADD CONSTRAINT id_discuss
FOREIGN KEY (id_discuss)
REFERENCES discuss(id_discuss);

	-- Table discuss

ALTER TABLE discuss
ADD CONSTRAINT fk_author_discuss
FOREIGN KEY (author)
REFERENCES users(id_users);

ALTER TABLE discuss
ADD CONSTRAINT fk_theme_discuss
FOREIGN KEY (id_theme)
REFERENCES theme(id_theme);

	-- Table message
    
ALTER TABLE message 
ADD CONSTRAINT fk_recipient_message
FOREIGN KEY (recipient)
REFERENCES users(id_users);

ALTER TABLE message 
ADD CONSTRAINT fk_sender_message
FOREIGN KEY (sender)
REFERENCES users(id_users);

-- Ajout 
SELECT id_messages, text_messages, date_messages, recipient, read_messages, users.username_users sender, users.email_users 
FROM messages 
INNER JOIN users 
ON messages.sender = users.id_users;