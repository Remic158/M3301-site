<!DOCTYPE html>
<html lang="fr">
<head>
  <title>SCALE Echirolles - club de cyclisme</title>
  <!-- Custom styles for this template-->
  <link href="../../view/css/sb-admin.css" rel="stylesheet">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body id="page-top">


  <div class="jumbotron text-center" style="margin-bottom:0">
    <img src="../../model/data/images/images_sites/accueil_banniere.jpg" alt="">
  </div>
  <!-- NAV DE BASE !-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="../../controler/tableadherent/tableadherent.ctrl.php"> <img src="../../model/data/images/images_sites/logo-scale.jpg" alt=""></a>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="actualites.view.php">Actualités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lebureau.view.php">Le bureau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lescoureurs.view.php">Les coureurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="histoireclub.view.php">Histoire du club</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.view.php">Nous contacter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controler/tablepaiement/tableUnPaiement.ctrl.php">Tout les paiements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controler/tablearticle/tablearticle.ctrl.php">Tout les articles</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- NAV DE BASE !-->

  <h2>Gestion des adhérents</h2>
  <!-- Tableau !-->
  <?php $chemin='../../controler/tableadherent/tableadherent.ctrl.php' ?>
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr> <!-- remplissage auto avec notre bd -->
        <th><p>Nom
          <a href="<?= $chemin ?>?tri=nomcroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>?tri=nomdecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>

        <th><p>Prenom
          <a href="<?= $chemin ?>?tri=prenomcroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>?tri=prenomdecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>

        <th><p>categorie
          <a href="<?= $chemin ?>?tri=catecroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>?tri=catedecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>
        <th><p>datenaissance
          <a href="<?= $chemin ?>?tri=datenaissancecroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>?tri=datenaissancedecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>
        <th><p>adresse
        <a href="<?= $chemin ?>?tri=adressecroit"><i class="fas fa-sort-up"></i></a>
        <a href="<?= $chemin ?>?tri=adressedecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>
        <th><p>telephone
        </p></th>
        <th><p>mail
        </p></th>
        <th><p>numlicence
        <a href="<?= $chemin ?>?tri=numlicencecroit"><i class="fas fa-sort-up"></i></a>
        <a href="<?= $chemin ?>?tri=numlicencedecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($resadh as $key => $unAdherent){ ?>
        <tr>
          <td><?=$unAdherent->getNom();?></td>
          <td><?=$unAdherent->getPrenom();?></td>
          <td><?=$unAdherent->getCategorie();?></td>
          <td><?=$unAdherent->getDateNaissance();?></td>
          <td><?=$unAdherent->getAdresse();?></td>
          <td><?=$unAdherent->getTelephone();?></td>
          <td><?=$unAdherent->getMail();?></td>
          <td><?=$unAdherent->getNumLicence();?></td>
          <td>
            <a href="../../controler/tablepaiement/tableUnPaiement.ctrl.php?idAdherent=<?=$unAdherent->getIdAdherent();?>"><i class="fas fa-shopping-basket"></i></a>
            <a href="../../controler/tableadherent/updateAdherent.ctrl.php?idAdherent=<?=$unAdherent->getIdAdherent();?>"><i class="fas fa-user-edit"></i></a>
            <a href="<?= $chemin ?>?type=delete&idAdherent=<?=$unAdherent->getIdAdherent();?>"><i class="fas fa-user-times"></i></a>
           </td>
        </tr>
        <?php } ?>
        <p>Ajouter un adherent : <a href="../../view/adherentview/insertAdherent.php"> <i class="fas fa-plus-circle"></i> </a></p>
      </tbody>
    </table>
    <!-- Fin tableau -->
  </body>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </html>
