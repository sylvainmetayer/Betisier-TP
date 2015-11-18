<script>changerTitre("Contact");</script>
<h1>Contact</h1>

<?php if (empty($_POST)) {
  include("include/pages/form/contact.form.inc.php");
} else {
  //var_dump($_POST);

  if (empty($_POST['nom']) || empty($_POST["prenom"]) || empty($_POST['mail']) || empty($_POST['message']) ) {
    throw new ExceptionPerso("Votre demande de contact est incomplète, merci de recommencer", ExceptionPerso::ERR_PEBCAK);
  }

  $date = date("d/m/Y H:i");
  $sujet = (empty($_POST["sujet"])) ? "Pas de sujet précisé" : $_POST["sujet"];
  $message_txt = "\n\nNouveau message de ".$_POST["nom"]." ".$_POST["prenom"]." le $date.\n";
  $message_txt .= "Sujet : ".$sujet."\n";
  $message_txt .= "Contenu de la demande de contact : "."\n".$_POST["message"]."\n";
  $message_txt .= "Adresse de réponse : ".$_POST["mail"]."\n";

  ecrireDans(SIMUL_MAIL, $message_txt);

  afficherMessageSucces("Votre demande a été prise en compte !");
  redirection(1, ACCUEIL);
}
