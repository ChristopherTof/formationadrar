use exo_view;



-- afficher la liste des tickets avec date_ticket, prenom (vendeur), nom (vendeur),
CREATE VIEW vw_liste1 AS 
(SELECT date_ticket , nom_vendeur AS 'Nom vendeur', prenom_vendeur AS 'Prénom Vendeur' 
FROM ticket 
INNER JOIN vendeur
ON ticket.id_vendeur = vendeur.id_vendeur);
SELECT * FROM vw_liste1;

-- afficher la liste des tickets avec date_ticket, prenom (vendeur), nom (vendeur), le nom des produits, prix produit, quantite,
CREATE VIEW vw_list2 AS (
SELECT date_ticket AS 'Date', prenom_vendeur AS 'Prénom Vendeur', nom_vendeur AS 'Nom vendeur', nom_produit AS 'Produit', prix_produit AS 'Prix', quantite AS 'Quantité'
FROM ticket 
INNER JOIN vendeur
ON ticket.id_vendeur = vendeur.id_vendeur
INNER JOIN ajouter
ON ticket.id_ticket = ajouter.id_ticket
Inner JOIN produit
ON ajouter.id_produit = produit.id_produit);
SELECT * FROM vw_list2;

-- afficher la la liste des produits, avec leur prix et le chiffre d'affaire global (prix x quantite x ticket de caisse) 

CREATE VIEW vw_list3 AS (
SELECT nom_produit AS 'Produit', prix_produit AS 'Prix', SUM(prix_produit*quantite*id_ticket) AS 'C.A Produit'
FROM produit
INNER JOIN ajouter on produit.id_produit = ajouter.id_produit
GROUP BY ajouter.id_produit);
SELECT * FROM vw_list3;
