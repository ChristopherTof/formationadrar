create database commerce;
use commerce;

-- Creation des tables 

create table produit (
	id_produit int primary key auto_increment not null,
    nom_produit varchar(50),
    description_produit text,
    prix_produit decimal(4,2),
    id_categorie int
)Engine=InnoDB;

create table categorie (
	id_categorie int primary key auto_increment not null,
    nom_categorie varchar(50)
)Engine=InnoDB;

create table vendeur (
	id_vendeur int primary key auto_increment not null,
    nom_vendeur varchar(50),
    prenom_vendeur varchar(50)
)Engine=InnoDB;

create table ticket (
	id_ticket int primary key auto_increment not null,
    date_ticket datetime,
    id_vendeur int
)Engine=InnoDB;

create table ajouter (
	id_produit int,
    id_ticket int,
    quantité int,
    primary key(id_produit, id_ticket)
)Engine=InnoDB;

alter table produit 
add constraint fk_ajouter_categorie
foreign key (id_categorie)
references categorie(id_categorie);

alter table ticket
add constraint fk_vendre_vendeur
foreign key (id_vendeur)
references vendeur(id_vendeur);

alter table ajouter
add constraint fk_ajouter_produit
foreign key (id_produit)
references produit (id_produit);

alter table ajouter
add constraint fk_ajouter_ticket
foreign key (id_ticket)
references ticket (id_ticket);