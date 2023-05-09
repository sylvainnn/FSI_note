<?php
require_once '../../config/appConfig.php';
$id=intval($_GET['id_tut']);
if ('POST' === filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_STRING)) {
    dump_var($_POST, DUMP, '$_POST brut');


    $filters = [
        'nom_tut' => FILTER_SANITIZE_STRING,
        'pre_tut' => FILTER_SANITIZE_STRING,
        'tel_tut' => FILTER_SANITIZE_STRING,
        'email_tut' => FILTER_SANITIZE_STRING,
    ];
    $datas = filter_input_array(INPUT_POST, $filters);
    dump_var($datas, DUMP, '$_POST filtré');
    $userConnect = new DTO\Tuteur($datas);
    $connexion = new DTO\Bdd($Bdd);
    $repo = new DAO\Tuteur_DAO($connexion->getPDO());
    $user = $repo->updateTuteur($id,$userConnect);
    header('location: ../view/parametrage.php');
}