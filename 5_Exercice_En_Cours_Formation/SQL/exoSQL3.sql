insert into produit(nom_produit,description_produit,prix_produit,id_categorie) values 
('Lardons', 'paquet de lardon de 250g',1.99, 1),
('Gouda', 'paquet de 300g',4.54, 1),
('Chips', 'saveur vinaigre',2.49, 1),
('Jus d\'ananas', 'bouteille de 1L',2.05, 2),
('Gel Douche', 'Senteur Vanille',3.59, 3);

insert into vendeur(nom_vendeur, prenom_vendeur) values 
('Chiarandini', 'Christopher'),
('Chiarandini Bolioli', 'Julie');

insert into ticket(date_ticket,id_vendeur) values 
('2023/12/05', 2),
('2023/12/05', 1);

insert into ajouter (id_produit,id_ticket, quantité) values
(2,2,1),(4,2,2),
(1,1,2),(3,1,1);