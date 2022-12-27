<?php
require_once "../../config/appConfig.php";

$connexion = new DTO\Bdd($Bdd);
$DAO = new DAO\Etudiant_DAO($connexion->getPDO());
$MesEtudiants = $DAO->getAll();
?>

<link href="/public/css/style.css" rel="stylesheet">
<table class="content-table3">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Téléphone</th>
        <th>Mail</th>
        <th>Spécialité</th>
        <th>Classe</th>
        <th>Autres</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($MesEtudiants as $etudiant) {?>
    <tr>
        <td><?= $etudiant->getNomEtu()?></td>
        <td><?= $etudiant->getPreEtu()?></td>
        <td><?= $etudiant->getTelEtu()?></td>
        <td><?= $etudiant->getMailEtu()?></td>
        <td><?= $etudiant->getSpeEtu()?></td>
        <td><?= $etudiant->getClasseEtu()?></td>
        <td><?= $etudiant->getAutresEtu()?></td>
       <!-- <td> <a href="../controller/modif_etudiant_control.php" style="color:floralwhite;"><img src="../../public/img/1160515.png" alt="" style="width:40px"/> </a></td>
        <td> <a href="../controller/modif_etudiant_control.php" style="color:floralwhite;"><img src="../../public/img/51646.png" alt="" style="width:40px"/> </a></td>
        <td> <a href="../controller/modif_etudiant_control.php" style="color:floralwhite;"><img src="../../public/img/51646.png" alt="" style="width:40px"/> </a></td>-->
    </tr>
    <?php }?>
    </tbody>
</table>
