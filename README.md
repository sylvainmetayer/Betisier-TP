# Betisier-TP
Dépôt pour le rendu du TP Bêtisier - DUT Informatique 2A - IUT du Limousin

**Le fichier include/config.inc.php est à remplir avec les identifiants de connexion à la base de données**

## Informations :
- Les mots interdits doivent être constitué au minimum de 3 lettres, il s'agit d'un réglage MySQL. [Détails ici](http://stackoverflow.com/a/17797003)
- Le fichier "simulationMail.txt" doit avoir les droits rw-, car des écritures sont faites sur ce fichier.
- Dans le jeu d'essais initial (script SQL importé), une erreur est présente. En effet, la citation "Tous les 4, vous commencez à me casser les pieds" est validé (cit_valide = 1) mais la date de validation de citation (cit_date_valide) est NULL.
- Dans le jeu d'essai initial, table citation, une erreur dans la structure de la table est présente. En effet, le "cit_valide" est un "bit(1)" alors qu'il devrait être un "char(1)"


## Fonctionnalités demandées
- Conception Objet (Classe, Manager, PDO, ..)
- Programmation modulaire exigée
- Gestion des droits d'accès aux différentes fonctionnalités (connexion et droits d'accès)
- Listage, modification et suppression des villes
- Listage, ajout, modification et suppression de personne
- Liste, ajout, suppression, et validation de citation
- Lors de l'ajout d'une citation, certains mots sont interdits
- Une citation ne peut-être affichée publiquement et ouverte au vote que si elle a été approuvée par un administrateur
- Possiblité pour les élèves de voter pour des citations
- Le site doit être valide W3C (HTML et CSS)

## Fonctionnalités supplémentaires

- Les tableaux sont triables (cliquer sur l'en-tête pour effectuer un tri)
- Utilisation des exceptions pour contrôler les différentes erreurs possibles
- Contrôle des numéros de téléphone (composé de 10 chiffres)
- Changement du titre de la page de façon dynamique (javascript)
- Affichage aléatoire d'un avatar pour les détails d'une personne
- Affichage d'une phrase aléatoire lors de l'ajout d'une citation
- Il est possible de saisir les dates à l'aide d'un calendrier (jquery)
- Salutation personnalisée selon l'heure (revenez à différentes heures, et vous verrez !)
- Simulation d'un formulaire de contact, avec écriture de la demande dans un fichier texte (SMTP indisponible, donc pas d'envoi de mail possible)
- Gestion des mots interdits (ajout/suppression/modification)
- Lors de l'inscription, interdiction d'utiliser un mot de passe trop simple ([Plus d'informations ici](http://www.businessinsider.com/twitters-list-of-370-banned-passwords-2009-12))
- Une personne connectée peut changer son mot de passe
- Test du référencement (Essayez de rechercher "betisier IUT" ou "betisier sylvain metayer" sur Google)
