<script> changerTitre("Informations"); </script>


<h1>Informations sur ce TP</h1>

<table class="pure-table sortable">
    <thead>
        <tr>
            <th>Nombre de</th>
            <th>Valeur</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>Classes PHP</td>
            <td><?php echo getNbFile("classes", "class.php"); ?></td>
        </tr>

        <tr>
            <td>Formulaires</td>
            <td><?php echo getNbFile("include/pages/form", "form.inc.php"); ?></td>
        </tr>

        <tr>
          <td>Tableaux </td>
          <td><?php echo getNbFile("include/pages/tab", "tab.inc.php"); ?></td>
        </tr>

        <tr>
            <td>Feuilles de style</td>
            <td><?php echo getNbFile("css", "css"); ?></td>
        </tr>

        <tr>
            <td>Feuilles javascript</td>
            <td><?php echo getNbFile("js", "js"); ?></td>
        </tr>
    </tbody>
</table>

<div id='infos'>
<?php include("include/pages/idConnexion.inc.php"); ?>

<h2> Détails sur mon travail </h2>
<p>
  Ce site est un TP réalisé lors de ma deuxième année de DUT Informatique à l'IUT du Limousin.<br/>
  Vous trouverez ci-dessous quelques informations supplémentaires <br/> <br/>
  Votre adresse IP : <?php echo $_SERVER["REMOTE_ADDR"]." (port ".$_SERVER["REMOTE_PORT"].")"; ?><br/>
  Vous êtes actuellement sur le serveur  <?php echo $_SERVER["SERVER_NAME"]." (".$_SERVER["SERVER_ADDR"].":".$_SERVER["SERVER_PORT"].")"; ?>
</p>


<p> Fonctionnalités offertes par le site </p>
  <ul>
    <li>Basique (exigées)</li>
    <ul>
      <li>Gestion des droits (notion d'accès restreint)</li>
      <li>Listage, modification et suppression des villes </li>
      <li>Listage, ajout, modification et suppression de personne</li>
      <li>Liste, ajout, suppression, et validation de citation</li>
      <li>Gestion des connexions utilisateurs (notion de session)</li>
      <li>Conception Objet (Classe, Manager, PDO, ..)</li>
      <li>Lors de l'ajout d'une citation, certains mots sont interdits</li>
      <li>Une citation ne peut-être affichée publiquement et ouverte au vote que si elle a été approuvée par un administrateur</li>
      <li>Possiblité pour les élèves de voter pour des citations, avec attribution d'une note</li>
      <li>Site valide W3C (HTML et CSS)</li>
      <li>Programmation modulaire exigée</li>
    </ul>
    <li>Supplémentaires</li>
    <ul>
      <li>Les tableaux sont triables (cliquer sur l'en-tête pour effectuer un tri)</li>
      <li>Utilisation des exceptions pour contrôler les différentes erreurs possibles</li>
      <li>Contrôle des numéros de téléphone</li>
      <li>Changement du titre de la page de façon dynamique (javascript)</li>
      <li>Affichage aléatoire d'un avatar pour les détails d'une personne</li>
      <li>Affichage d'une phrase aléatoire lors de l'ajout d'une citation</li>
      <li>Il est possible de saisir les dates à l'aide d'un calendrier (jquery)</li>
      <li>Salutation personnalisée selon l'heure (revenez à différentes heures, et vous verrez !)</li>
      <li>Simulation d'un formulaire de contact, avec écriture de la demande dans un fichier texte (SMTP indisponible, donc pas d'envoi de mail possible)</li>
      <li>Gestion des mots interdits (ajout/suppression/modification)</li>
      <li>Lors de l'inscription, interdiction d'utiliser un mot de passe trop simple (<a href="http://www.businessinsider.com/twitters-list-of-370-banned-passwords-2009-12">Plus d'informations ici</a>)</li>
      <li>Une personne connectée peut changer son mot de passe</li>
      <li>Gestion d'un utilisateur "sandbox", servant de démonstration au public (et par conséquent, non modifiable)</li>
      <li>Référencement plutôt bon ! (Essayez de rechercher "betisier IUT" ou "betisier sylvain metayer")</li>
    </ul>
  </ul>


<p>
  Ce site est disponible à cette adresse : <a href="http://www.betisier.sylvainmetayer.fr" title="Lien vers le site, mis en ligne"> betisier.sylvainmetayer.fr </a>. <br/>
  Les sources, quand à elles, sont disponibles sur Github (<a href="https://github.com/sylvainmetayer/betisier.sylvainmetayer.fr" title="Lien vers le depot GitHub">Dépôt disponible ici</a>).<br/>
  Pour plus d'informations, je vous invite à lire le README
  (<a href="https://github.com/sylvainmetayer/betisier.sylvainmetayer.fr/blob/master/README.md" title="Lien vers le depot GitHub">disponible ici</a>),
  ou à me <a href="index.php?page=<?php echo CONTACT; ?>">contacter</a>.
</p>

</div>



<div class="bottomDocument"></div>
