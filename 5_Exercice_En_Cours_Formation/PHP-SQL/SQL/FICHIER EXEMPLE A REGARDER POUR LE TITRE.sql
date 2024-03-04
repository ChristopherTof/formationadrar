-- REQUETE DE JOINTURE

-- requête jointure simple entre 2 tables (produit et categorie)
SELECT nom_produit,description_produit,prix_produit,nom_categorie FROM produit
INNER JOIN categorie
ON produit.id_categorie = categorie.id_categorie
ORDER BY prix_produit ASC;
-- Requête qui affiche les montants TTC des tickets et les sous totaux (produit * quantite)
SELECT ticket.id_ticket, date_ticket,
group_concat(
concat(round(prix_produit*quantite,2)
,' ')
) AS sous_total, 
sum(round((prix_produit*quantite),2)) AS total_TTC FROM ajouter
INNER JOIN produit
ON ajouter.id_produit = produit.id_produit
INNER JOIN ticket
ON ajouter.id_ticket = ticket.id_ticket
GROUP BY ajouter.id_ticket;

-- Requête qui affiche les tickets avec les informations vendeur, ticket, montant TTC
SELECT ajouter.id_ticket AS id_ticket, nom_vendeur, prenom_vendeur, date_ticket,
 round(sum(quantite*prix_produit),2) AS total_TTC
FROM ajouter
INNER JOIN produit
ON ajouter.id_produit = produit.id_produit
INNER JOIN ticket
ON ajouter.id_ticket = ticket.id_ticket
INNER JOIN vendeur
ON ticket.id_vendeur = vendeur.id_vendeur
GROUP BY ticket.id_ticket;

-- REQUETE DE JOINTURE LEFT ET RIGHT

-- Affiche la liste des produits qui n'ont pas de catégorie
SELECT nom_produit, description_produit, prix_produit, nom_categorie
FROM produit
LEFT JOIN categorie
ON produit.id_categorie = categorie.id_categorie
WHERE nom_categorie IS NULL;
-- Affiche la liste des catégories qui ne sont rattachées à aucun produit
SELECT nom_produit, description_produit, prix_produit, nom_categorie
FROM produit
RIGHT JOIN categorie
ON produit.id_categorie = categorie.id_categorie
WHERE produit.id_categorie IS NULL;

SELECT ajouter.id_ticket FROM ajouter
INNER JOIN produit
ON ajouter.id_produit = produit.id_produit
INNER JOIN ticket
ON ajouter.id_ticket = ticket.id_ticket
INNER JOIN vendeur 
ON ticket.id_vendeur = vendeur.id_vendeur
INNER JOIN categorie
ON produit.id_categorie = categorie.id_categorie
WHERE produit.nom_produit LIKE '%a%';