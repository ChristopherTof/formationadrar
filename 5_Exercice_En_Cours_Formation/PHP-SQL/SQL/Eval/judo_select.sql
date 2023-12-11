use judoka;
--
-- Requêtes de selection
--

--select 1 judoka étant ceinture verte version inner join
use judo;
select id_judoka, nom_judoka, prenom_judoka, age_judoka, sexe_judoka, niveau.couleur_ceinture 
from judoka inner join niveau where judoka.id_niveau = niveau.id_niveau 
and niveau.couleur_ceinture = "verte";

--select 1 judoka étant ceinture verte version id_niveau = 4
select id_judoka, nom_judoka, prenom_judoka, age_judoka, sexe_judoka, id_niveau 
from judoka where id_niveau = 4;

--select 1 judoka étant ceinture version requête imbriqué
select id_judoka, nom_judoka, prenom_judoka, age_judoka, sexe_judoka, id_niveau 
from judoka where id_niveau = (select id_niveau from niveau where couleur_ceinture ="verte");


--select 2 nombre de participants à la compétition dont le nom est judo31

SELECT COUNT(id_judo) FROM participer inner join competition 
where participer.id_cpt = competition.id_cpt and competition.nom_cpt = "judo31";

--select 2 nombre de participants à la compétition dont le nom est judo31 avec alias

SELECT COUNT(id_judo) AS nbr_participants_judo31 FROM participer inner join competition 
where participer.id_cpt = competition.id_cpt and competition.nom_cpt = "jud031";

--select 3 afficher la liste des participants à la compétition dont le nom est judo81 (avec le nom, prénom, age et sexe du judoka)

SELECT judoka.nom_judoka, judoka.prenom_judoka, judoka.age_judoka, judoka.sexe_judoka from participer, competition  
inner join judoka where participer.id_judo = judoka.id_judoka 
and participer.id_cpt = competition.id_cpt and competition.nom_cpt = "judo31";

--select 4 afficher la liste des judokas étant ceinture marron et dont l’âge est supérieur à 19 ans

SELECT judoka.nom_judoka, judoka.prenom_judoka, judoka.age_judoka, judoka.sexe_judoka from
judoka inner join niveau where judoka.id_niveau = niveau.id_niveau 
and niveau.couleur_ceinture = "marron" and judoka.age_judoka > 19;

--select 5 afficher la liste des judokas avec leurs couleurs de ceinture (inner join avec la table niveau) 
--et trier cette liste par ordre alphabétique (tri sur le champ nom_judoka).

SELECT judoka.nom_judoka, judoka.prenom_judoka, judoka.age_judoka, judoka.sexe_judoka, niveau.couleur_ceinture 
FROM judoka inner join niveau where judoka.id_niveau = niveau.id_niveau ORDER BY judoka.nom_judoka;