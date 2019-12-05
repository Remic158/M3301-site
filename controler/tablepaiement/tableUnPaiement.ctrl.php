<?php
require_once('../../model/classPaiement/paiement.class.php');
require_once('../../model/classPaiement/paiementDAO.class.php');

// Creation de l'instance DAO
$paiements = new paiementDAO('../../model/data/db');

if (isset($_GET['type'])) {
  $type = $_GET['type'];
  if ($type == 'delete'){
    $id=$_GET['idPaiement'];
    $paiements->supprUnPaiement($id);
  }
}

if (isset($_GET['idAdherent']) && ($paiements->paiementExiste($_GET['idAdherent']) != 0) ){
  $id=$_GET['idAdherent'];
  $res = $paiements->getLesPaiementsDunAdherent($id);
}else if(isset($_GET['idAdherent'])){
  $res = 0;
}else{
  $res = $paiements->getLesPaiements();
}

$respaiement = $res;

//recuperation des donnes pour recup le nom et prenom de l'id qui correspond
require_once('../../model/classAdherent/adherent.class.php');
require_once('../../model/classAdherent/adherentDAO.class.php');
$config = parse_ini_file('../../config/config.ini');
$adherents = new adherentDAO($config['database_path']);

//view
include('../../view/paiementview/adminpage.paiement.php');
?>
