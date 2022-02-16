GIRAULT Quentin

Partie 2 :

Question 2 B :
INSERT INTO `personnage` (`id_personnage`, `nom`, `espece`, `age`) VALUES ('1', 'nom', 'espece', 'age');

Question 3 B :
SELECT * FROM personnage INNER JOIN voiture ON personnage.id_voiture = voiture.id WHERE voiture.id LIKE '1'

Question 3 B :
SELECT * FROM personnage INNER JOIN sport ON personnage.id_sport = sport.id WHERE sport.id LIKE '3'

Question 4 :
SELECT * FROM personnage INNER JOIN sport ON personnage.id_sport = sport.id INNER JOIN voiture ON personnage.id_voiture = voiture.id WHERE sport.id LIKE '4' OR voiture.id LIKE '3';