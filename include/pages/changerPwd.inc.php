<?php

if (!isConnected() || !is_numeric($_GET['id']) || $_GET['id'] != getPersonneConnectee()->getPerNum()) {
  throw new ExceptionPerso("Vous semblez astucieux, mais à malin, malin et demi ! <br/>Vous n'avez pas les droits pour afficher cette page !", ExceptionPerso::ERR_DROITS);
}

if(intval($_GET['id']) === SANDBOX) {
  throw new ExceptionPerso("Il est impossible de changer le mot de passe de cet utilisateur, il s'agit d'un utilisateur démo ! <br/>Merci de vous créer un compte si vous souhaitez modifier vos informations.", ExceptionPerso::ERR_PERSONNE);
}

?> <h1> Changement de votre mot de passe </h1> <?php
if (empty($_POST['oldPwd']) && empty($_POST['newPwd']) && empty($_POST["newPwdConfirmation"])) {
  include("include/pages/form/modifierPwd.form.inc.php");
} else {
  $pdo = new Mypdo();
  $personneManager = new PersonneManager($pdo);

  if ($_POST["newPwd"] != $_POST["newPwdConfirmation"]) {
    throw new ExceptionPerso("Les mots de passe saisis ne correspondent pas.", ExceptionPerso::ERR_PERSONNE);
  }

  $retour = $personneManager->updatePwd(getPersonneConnectee()->getPerNum(), $_POST['oldPwd'], $_POST['newPwd']);

  if ($retour == true ) {
    afficherMessageSucces("Votre mot de passe a été mis à jour !");
    redirection(1, ACCUEIL);
  } else {
    afficherMessageSucces("Erreur lors de la mise à jour de votre mot de passe..");
    redirection(10, ACCUEIL);
  }
}


?>
