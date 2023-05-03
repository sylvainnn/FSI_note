<?php
//  Les inclusions nécessaires
require_once '../../config/appConfig.php';
$id_etu = intval($_GET['id_etu']);
echo $id_etu;



if ('POST' === filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_STRING)) {
    dump_var($_POST, DUMP, '$_POST brut');



    $filters = [
        'dat_bil' => FILTER_SANITIZE_STRING,
        'not_ent_bil' => FILTER_VALIDATE_INT,
        'not_oral_bil' => FILTER_VALIDATE_INT,
        'not_dos_bil' => FILTER_VALIDATE_INT,
        'remarque' => FILTER_SANITIZE_STRING
    ];
    $datas = filter_input_array(INPUT_POST, $filters);
    dump_var($datas, DUMP, '$_POST filtré');
    $userConnect = new DTO\Bilan($datas);
    $connexion = new DTO\Bdd($Bdd);
    $repo = new DAO\Bilan_DAO($connexion->getPDO());
    $user = $repo->ajoutbilan($id_etu,$userConnect );

   //header('location: ../view/NotesBilan1.php?id_etu='.$id_etu);
}

/*
    $bdd = connectBdd($infoBdd);
    dump_var($bdd, DUMP, '$bdd');
    if ($bdd) {
        $newResa = new DTO\Reservation($getFiltre);
        dump_var($newResa, DUMP, '$newUser');
        $repo = new DAO\ReservationDAO($bdd);
        $resa = $repo->ajoutReservation($newResa);
        dump_var($resa, DUMP, '$user');
        if ($resa) {

           header('location: ../view/mesReservations.php');

        }
        else
        {
            header('location: ../view/ajouterUneResa.php');
        }

    }

}
