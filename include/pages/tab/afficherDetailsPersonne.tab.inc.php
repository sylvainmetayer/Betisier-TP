  <?php
  //ATTENTION A L'APPELANT !
  if ($detailPersonne->isPerAdmin()) {
    ?> <img alt="avatar <?php echo $detailPersonne->getPerPrenom(); ?>" src="image/avatars/rootAvatar.gif" /> <?php
  } else {
    $nb = rand(1,getNbFile("image/avatars", "jpg")); ?>
    <img alt="avatar <?php echo $detailPersonne->getPerPrenom(); ?>" src="image/avatars/<?php echo $nb; ?>.jpg" /> <?php
  } ?>
  <?php $divisionManager = new DivisionManager($pdo);?>
  <table class="tableDetailPersonne sortable">
    <tr>
      <th>Pr&eacute;nom</th>
      <th>Mail</th>
      <th>T&eacute;l&eacute;phone</th>
      <?php if ($personneManager->isEtudiant($id)) {
        ?>
        <th>D&eacute;partement</th>
        <th>Ville</th>
      <?php } else {
        ?>
          <th>T&eacute;l&eacute;phone professionnel</th>
          <th>Fonction</th>
        <?php
      } ?>
    </tr>
    <tr>
      <td> <?php echo $detailPersonne->getPerPrenom(); ?> </td>
      <td> <?php echo $detailPersonne->getPerMail(); ?> </td>
      <td> <?php echo $detailPersonne->getPerTel(); ?> </td>
      <?php if ($personneManager->isEtudiant($id)) {
        $division = $divisionManager->getDivision($detailPersonne->getDivNum());
        ?>
          <td> <?php echo $detailsDepartement['dep_nom'].", ".$division->getDivNom(); ?> </td>
          <td> <?php echo $detailsDepartement['vil_nom']; ?> </td>
        <?php } else {
          ?>
          <td> <?php echo $detailPersonne->getSalTelprof(); ?> </td>
          <td> <?php echo $fonction->getFonLibelle(); ?> </td>
          <?php } ?>
    </tr>
  </table>
  <p>Appuyez sur F5 pour un autre avatar !</p>
  <div class="bottomDocument"></div>
