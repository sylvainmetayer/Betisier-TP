<?php

$pdo = new Mypdo();
$personneManager = new PersonneManager($pdo);

$sandbox = $personneManager->getPersonne(SANDBOX);

if (is_null($sandbox)) {
  afficherMessageErreur("L'utilisateur passe-partout est temporairement indisponible, veuillez m'excuser pour la gêne occasionnée.");
} else {
 ?>

<h2>Informations de connexion passe-partout</h2>
<h3>Identifiant : <?php echo $sandbox->getPerLogin() ?> / mot de passe : IUT </h3>
<p>
  Afin de respecter les contraintes du sujet, la seule façon d'ajouter une personne
  (et donc de bénéficier de plus de fonctionnalités) est... D'être connecté. <br/>
  Je donne donc librement accès à cet utilisateur, ce qui permettra aux personnes souhaitant tester un peu plus le site de pouvoir avoir un premier aperçu,
  et pourquoi pas, de se créer un compte !
</p>

<?php } ?>
