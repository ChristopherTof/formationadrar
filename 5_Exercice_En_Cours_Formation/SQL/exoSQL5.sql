-- Afficher toute les catégorie avec (nom),
SELECT nom_categorie FROM categorie;
-- Afficher tous les vendeur avec (nom, prénom) trié par nom et prénom ordre croissant,
SELECT nom_vendeur AS Nom, prenom_vendeur AS Prenom FROM vendeur ORDER BY nom_vendeur ASC , prenom_vendeur ASC;
-- Afficher la liste des tickets avec (date_ticket) du mois de décembre,
Select * FROM ticket  WHERE month(date_ticket) = 12;
-- Afficher la liste des produits dont le prix est supérieur à 2 € et inférieur à 10 €,
SELECT * FROM produit WHERE prix_produit > 2 AND prix_produit < 10;
-- Afficher la liste des produits avec (nom_produit, prix_produit, nom_categorie),
SELECT nom_produit, prix_produit, nom_categorie FROM produit INNER JOIN categorie ON produit.id_categorie = categorie.id_categorie;
-- Afficher la liste des produits avec (nom_produit, description_produit, prix_produit, nom_categorie) de type alimentaire (nom_categorie)
SELECT nom_produit, description_produit, prix_produit, nom_categorie FROM produit INNER JOIN categorie ON produit.id_categorie = categorie.id_categorie WHERE categorie.nom_categorie = "alimentaire";
-- Afficher la liste des tickets avec (date_ticket, nom_vendeur, prenom_vendeur),
SELECT date_ticket, nom_vendeur, prenom_vendeur FROM ticket INNER JOIN vendeur ON ticket.id_vendeur = vendeur.id_vendeur;
-- Afficher la liste des produits vendus sur le ticket (id_ticket = 1)  avec le nom_produit, prix_produit, quantite produit
SELECT ajouter.id_produit, quantité, produit.nom_produit, produit.prix_produit FROM ajouter INNER JOIN produit ON ajouter.id_produit = produit.id_produit INNER JOIN ticket 
ON ajouter.id_ticket = ticket.id_ticket WHERE ajouter.id_ticket = 1;

select * from ajouter;

-- Bonus :
-- Afficher la liste des produits qui ne sont pas ajouté sur un ticket avec le (nom_produit, description_produit, prix_produit),
SELECT produit.nom_produit, produit.description_produit, produit.prix_produit FROM produit 
LEFT JOIN ajouter ON produit.id_produit = ajouter.id_produit WHERE ajouter.id_produit IS NULL;

-- Afficher la liste des vendeurs qui ne sont pas sont pas lié à un ticket (nom_vendeur, prenom_vendeur).
SELECT nom_vendeur, prenom_vendeur FROM vendeur LEFT JOIN ticket ON vendeur.id_vendeur = ticket.id_ticket WHERE ticket.id_vendeur IS NULL;

-- NB  : vous allez devoir utiliser les jointures LEFT et RIGHT JOIN  et tester si la foreign key vaut : null

select * from vendeur;

