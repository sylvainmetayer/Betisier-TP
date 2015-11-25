# Betisier-TP
Dépôt pour le rendu du TP Bêtisier - DUT Informatique 2A - IUT du Limousin

Détails :
- Les mots interdits doivent obligatoirement être constitué de 3 lettres, il s'agit d'un réglage MySQL. [Détails ici](http://stackoverflow.com/a/17797003)
- Le fichier "simulationMail.txt" doit obligatoirement avoir les droits rw-, car des écritures sont faites sur ce fichier.
- Dans le jeu d'essais initial (script SQL importé), une erreur est présente. En effet, la citation "Tous les 4, vous commencez à me casser les pieds" est validé (cit_valide = 1) mais la date de validation de citation (cit_date_valide) est NULL.
- Voir la page "INFORMATIONS" pour les fonctionnalités.
- Dans le jeu d'essai initial, table citation, une erreur dans la structure de la table est présente. En effet, le "cit_valide" est un "bit(1)" alors qu'il devrait être un "char(1)"