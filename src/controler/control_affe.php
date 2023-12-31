<?php

//  Les inclusions nécessaires
require_once '../../config/appConfig.php';

$connexion = new DTO\Bdd($Bdd);
$filters = array(
    'id_tut' => FILTER_VALIDATE_INT,
    'id_etu' => FILTER_VALIDATE_INT
);
$datas = filter_input_array(INPUT_POST, $filters);
dump_var($datas, DUMP, '$_POST filtré');
$userConnect = new DTO\Etudiant($datas);
$repo = new DAO\Etudiant_DAO($connexion->getPDO());
$MesEtudiants = $repo->affecter($userConnect);
header('location: ../view/listeEtudiants.php');