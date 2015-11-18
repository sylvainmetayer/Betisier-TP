<script> changerTitre("Accueil"); </script>
<?php
$pdo = new Mypdo();
$citationManager = new CitationManager($pdo);
$citation = $citationManager->getTopCitation();
$voteManager = new VoteManager($pdo);
$personneManager = new PersonneManager($pdo);

if (is_null($citation)) {
  ?><h2>Aucune top citation à lister !</h2> <?php
} else {
?>
<h2> Actuellement, la meilleure citation est... </h2>

<table class="sortable" >
  <tr>
    <th> &nbsp;Nom de l'enseignant &nbsp;</th>
    <th> Libellé </th>
    <th> Date</th>
    <th> &nbsp; Moyenne des notes &nbsp;</th>
    <?php
    if (isConnected() && $personneManager->isEtudiant(getPersonneConnectee()->getPerNum())) {
    ?>
    <th>Noter</th>
    <?php
    }
    if (isConnected() && getPersonneConnectee()->isPerAdmin()) {
    ?>
    <th> Déposé par </th>
    <th> Validé par </th>
    <th> Modération </th>
    <th> Supprimer </th>
    <?php
    } ?>
  </tr>

  <?php include("include/pages/tab/afficherUneCitation.tab.inc.php"); ?>
</table>
<?php }

//Car il faut toujours garder son système à jour !
$version = explode(".",phpversion());
if (intval($version[0]) < 5 || intval($version[1]) < 5) {
  ?>
  <p>
    <a href="http://php.net/downloads.php">Votre version de php commence à être ancienne... Peut-être devriez vous songer à la mettre à jour</a> ?
  </p>
  <?php
}
?>

<img class="centreImage" src="image/logo.gif" alt="Betisier IUT" title="Betisier IUT Limousin"/>
<div class="bottomDocument"></div>
