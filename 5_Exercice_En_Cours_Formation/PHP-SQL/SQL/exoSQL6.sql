select * from produit;
select (prix_produit*7) AS Prix FROM produit;

select * from ticket;

-- Exercice requête de consultation (fonction agrégation)
-- Afficher le prix total du ticket 1,
SELECT SUM(quantité*prix_produit) FROM ajouter 
INNER JOIN produit ON ajouter.id_produit = produit.id_produit INNER JOIN ticket 
ON ajouter.id_ticket = ticket.id_ticket  WHERE ajouter.id_ticket = 1;

-- Afficher le prix total de tous les tickets (en utilisant les fonction d'agrégation),
SELECT  SUM(quantité*prix_produit) AS prix_total FROM ajouter
INNER JOIN produit ON ajouter.id_produit = produit.id_produit;

-- Afficher le chiffre d'affaire du vendeur (id_vendeur = 1);

SELECT  id_vendeur, SUM(quantité*prix_produit) AS CA_Vendeur FROM ajouter
INNER JOIN produit ON ajouter.id_produit = produit.id_produit
INNER JOIN ticket ON ticket.id_ticket = ajouter.id_ticket
GROUP BY id_vendeur
HAVING id_vendeur = 1;