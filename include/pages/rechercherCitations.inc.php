<script> changerTitre("Rechercher une citation"); </script>
<h1>Rechercher une citation </h1>

<?php
$pdo = new Mypdo();
//1- Afficher select avec prof, un champ note optionnel et une date optionnel
//wrapperl e tout dans un arary et balancer ca a $citationManager->search($array)
//si array vide, on affiche message  Directory
//Affiche resultat
if (empty($_POST)) {
  include("include/pages/form/rechercherCitation.form.inc.php");
} else {

  if (empty($_POST['note']) && empty($_POST["date"]) && empty($_POST["prof"])) {
    throw new ExceptionPerso("Il faut remplir au moins un champ lors d'une recherche, sans quoi votre recherche est sans but !", ExceptionPerso::ERR_PEBCAK);
  }

  $note = $_POST["note"];
  $prof = empty($_POST['prof']) ? '' : $_POST['prof'];
  $date = empty($_POST['date']) ? '' : $_POST['date'];

  $recherche = Array(
    'note' => $note,
    'prof' => $prof,
    'date' => $date
  );

  //var_dump($recherche);

  $citationManager = new CitationManager($pdo);

  $resultat = $citationManager->search($recherche);

  if (empty($resultat)) {
    ?>
    <p>
      Aucun résultat trouvé, voulez vous réessayer en modifiant vos critères de recherche ? <br/>
      <a href="index.php?page=<?php echo RECHERCHER_CITATIONS;?>">
        <b> Faire une nouvelle recherche </b>
      </a>
    </p>

    <?php
  } else {
    $voteManager = new VoteManager($pdo);
    $personneManager = new PersonneManager($pdo);
    ?>
    <table class="sortable" >
  		<tr>
  			<th> &nbsp;Nom de l'enseignant &nbsp;</th>
  			<th> Libellé </th>
  			<th> Date de dépôt</th>
  			<th> &nbsp; Moyenne des notes &nbsp;</th>
  		</tr>
  		<?php
  		foreach ($resultat as $citation) {
  			$moyenneVote = $voteManager->getMoyenneVote($citation->getCitationNum());
  			$detailsPersonne = $personneManager->getPersonne($citation->getCitationPerNum());
  			?> <tr>
  					<td> <?php echo $detailsPersonne->getPerNom()." ". $detailsPersonne->getPerPrenom(); ?> </td>
  					<td> <?php echo $citation->getCitationLibelle(); ?> </td>
  					<td> <?php echo getFrenchDate($citation->getCitationDate()); ?> </td>
  					<td> <?php $moyenneVote ? print $moyenneVote : print "Pas encore de vote !" ;?> </td>
  				</tr>
  		<?php } ?>
  	</table>
    <a href="index.php?page=<?php echo RECHERCHER_CITATIONS;?>">
      <b> Faire une nouvelle recherche </b>
    </a>
    <div class="bottomDocument"></div>
  <?php
  }
}