-- Creation de la Base

create database blog;
use blog;

-- Creation des tables
create table utilisateur (
	id_utilisateur int primary key auto_increment not null,
    nom_utilisateur varchar(50),
    prenom_utilisateur varchar(50),
    email_utilisateur varchar(50) not null unique,
    password_utilisateur varchar(100) not null,
    active_utilisateur tinyint(1) default 1
)Engine=InnoDB;

create table roles (
	id_role int primary key auto_increment not null,
    nom_role varchar(50)
)Engine=InnoDB;

alter table utilisateur 
add column id_role int;

create table commentaire(
	id_commentaire int primary key auto_increment not null,
    texte_commentaire varchar(255) not null,
    date_creation_commentaire datetime not null,
	active_commentaire tinyint(1) not null default 1,
    id_article int,
    id_utilisateur int
)Engine=InnoDB;

drop table role;

create table article(
	id_article int primary key auto_increment not null,
    titre_article varchar(50) not null,
    contenu_article text not null,
    date_creation_article date,
    active_article tinyint(1) default 1,
    id_utilisateur int
)Engine=InnoDB;

create table categorie (
	id_categorie int primary key auto_increment not null,
    nom_categorie varchar(50)
)Engine=InnoDB;

create table completer (
	id_article int,
    id_categorie int,
    primary key (id_article, id_categorie)
)Engine=InnoDB;

-- Creation des Foreign Key

alter table utilisateur
add constraint fk_posseder_role
foreign key (id_role)
references roles(id_role);

alter table article
add constraint fk_rediger_utilisateur
foreign key(id_utilisateur)
references utilisateur(id_utilisateur);

alter table commentaire
add constraint fk_ajouter_article
foreign key (id_article)
references article(id_article);

alter table commentaire 
add constraint fk_ecrire_utilisateur
foreign key (id_utilisateur)
references utilisateur(id_utilisateur);

alter table completer
add constraint fk_completer_article
foreign key (id_article)
references article(id_article);

alter table completer
add constraint fk_completer_categorie
foreign key (id_categorie)
references categorie(id_categorie);

-- Ajout d'un attribut dans utilisateur
Alter table utilisateur
add column code_postal_utilisateur varchar(50);

-- Ajout d'une contrainte

alter table utilisateur
add constraint verif_code_postal
check (code_postal_utilisateur like '_____');

