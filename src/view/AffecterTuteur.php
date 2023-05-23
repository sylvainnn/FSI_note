<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/>

</head>
<body>
<?php
include_once('../../public/inc/header.php');
include_once  ('../../public/inc/footer.php');
require_once "../../config/appConfig.php";
$connexion = new DTO\Bdd($Bdd);
$DAO = new DAO\Etudiant_DAO($connexion->getPDO());
$MesEtudiants = $DAO->getAll();
$DAOtut = new DAO\Tuteur_DAO($connexion->getPDO());
$MesTuteur = $DAOtut->getAll();
if ($_SESSION){
?>

<div class="sectionLeft"><h1>Affecter tuteur</h1>
    <br><br><br><br><br><br><br><br>
    <span style="position: absolute; top: 110px; left: 90px;">
        <img src="../../public/images/sitting-4.png" height="170px">
    </span>
    <br><br><br><b><h3>Gestion du tutorat</h3></b>
    <br>ORT Etudes Supérieures
    <br><br><br>
    <img src="../../public/images/Slide%20Lines.png" height="4px">
</div>

<div class="sectionRight">
    <span style="position: absolute; top: 10%; left: 40%">
        <div class="select">
            <form method="POST" action="../controler/control_affe.php">
            <select name="id_etu">
                <?php foreach ($MesEtudiants as $etudiant) {?>
                <option  value="<?=  $etudiant->getIdEtu()?>"><?= $etudiant->getNomEtu()?></option>
                <?php }?>
            </select>

    </div>
    </span>
    <span style="position: absolute; top: 30%; left: 40%">
        <div class="select">
            <select name="id_tut">
                <?php foreach ($MesTuteur as $Tuteur) {?>
                    <option  value="<?= $Tuteur->getIdTut()?>"><?= $Tuteur->getNomTut()?></option>
                <?php }?>
            </select>
             </div>
        <span style="position: absolute; top: 60%; left: 40%">
            <input type="submit" value="Enregistrer">
        </span></span>
        </form>
    <?php }else{header('location:Connexion.php');} ?>

</div>



</body>
</html>