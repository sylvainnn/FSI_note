<?php
require_once "../config/appConfig.php";

$DAO = new \DAO\Etudiant_DAO($bdd);
$MesEtudiants = $DAO->getAll();

$bonbon = new \DTO\Etudiant(["id_uti"]);

var_dump($bonbon->getNom());

?>

<link href="/public/css/style.css" rel="stylesheet">
<table>
    <?php foreach ($MesEtudiants as $etudiant)?>
    <tr>
        <th>Nom: <?= $MesEtudiants->getNomEtu()?></th>
        <th>Prénom: <?= $MesEtudiants->getPreEtu()?></th>
        <th>Téléphone: <?= $MesEtudiants->getTelEtu()?></th>
        <th>Mail: <?= $MesEtudiants->getMailEtu()?></th>
        <th>Spécialité: <?= $MesEtudiants->getSpeEtu()?></th>
        <th>Classe: <?= $MesEtudiants->getClasseEtu()?></th>
        <th>Autres: <?= $MesEtudiants->getAutresEtu()?></th>
        <th>EDIT</th>
    </tr>
</table>