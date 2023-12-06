-- mise à jour des prix de 10%
UPDATE produit SET prix_produit = prix_produit*1.10;
-- Ajout d'un vendeur
INSERT INTO vendeur(nom_vendeur,prenom_vendeur) VALUES ("Chiarandini", "Yolande");
-- Mise en Majuscule des noms et prenoms
UPDATE vendeur SET nom_vendeur = UPPER (nom_vendeur), prenom_vendeur = UPPER (prenom_vendeur);
-- Changer la date
UPDATE ticket SET date_ticket = REPLACE (date_ticket, "2023-12-05", "2023/01/05");
-- Meilleur option 
UPDATE ticket SET date_ticket = date_add(date_ticket, interval 6 month ) WHERE MONTH(date_ticket) = 01;
-- Supprimer le vendeur ajouté plus haut
DELETE FROM vendeur WHERE id_vendeur=3;


