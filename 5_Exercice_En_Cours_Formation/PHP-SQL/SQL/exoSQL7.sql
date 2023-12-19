-- Update une élément d'un table
select * from commerce.produit;
UPDATE produit SET nom_produit = "Lardon" WHERE id_produit = 9;
-- apres le where on peut mettre n'importe quelle colonne

-- Methode de suppression
DELETE FROM produit;
-- cette ligne va vider complétement la  table sauf les éléments attachés à une foreign key

DELETE FROM produit WHERE id_produit = 15;

-- incrementer touts les prix d'un coup avec 1 euro de plus : 
UPDATE produit SET prix_produit = prix_produit+1;
-- ajoute un suffixe sur toutes les lignes des nom_produits : 
UPDATE produit SET nom_produit = CONCAT("pdt_",nom_produit);

select * from ticket;
show tables from change_ton_climat;