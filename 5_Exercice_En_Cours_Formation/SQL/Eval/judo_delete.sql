use judoka;
--
-- ajout de 2 nouveaux judokas
--
insert into judoka(nom_judoka, prenom_judoka, age_judoka, sexe_judoka, id_niveau) 
VALUES("Mithridate", "mathieu", 41, "H", 6),
("Dupont", "Jean", 30, "H", 4);
--
-- suppression des 2 derniers judokas
--
delete from judoka Where id_judoka =11;
delete from judoka where id_judoka =12;

delete from judoka where id_judoka > 10;