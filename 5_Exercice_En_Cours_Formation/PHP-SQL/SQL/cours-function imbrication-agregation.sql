SELECT id_categorie FROM categorie WHERE nom_categorie = "Alimentaire";
use commerce;
select * from produit;

-- Inserer un produit avec une fonction imbriqué
INSERT INTO produit(nom_produit, description_produit, prix_produit, id_categorie) 
VALUE ('pain', 'baguette de pain', '1.1', (SELECT id_categorie FROM categorie WHERE nom_categorie = "Alimentaire"));

-- Compte par Fonction d'agregation
SELECT COUNT(nom_produit) AS nombre FROM produit;

SELECT COUNT(ajouter.id_produit) AS nombre from ajouter 
INNER JOIN produit ON ajouter.id_produit = produit.id_produit 
INNER JOIN ticket ON ajouter.id_ticket = ticket.id_ticket
GROUP BY ajouter.id_ticket;

SELECT (quatite*prix_produit) AS prix;


-- Afficher le ticket avec la date et les quantités vendu

SELECT ajouter.id_ticket, date_ticket, GROUP_CONCAT(CONCAT('Nom : ',nom_produit,' prix : ',prix_produit)) AS Produits, GROUP_CONCAT(quantité) AS Quantité FROM ajouter
INNER JOIN produit ON ajouter.id_produit = produit.id_produit
INNER JOIN ticket ON ajouter.id_ticket = ticket.id_ticket
WHERE ajouter.id_ticket = 1;