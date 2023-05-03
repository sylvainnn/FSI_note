<?php


require_once '../../config/appConfig.php';
if($_SESSION){
    header('location: ../view/Accueil.php');
}else {
    if ('POST' === filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_STRING)) {
        dump_var($_POST, DUMP, '$_POST brut');

        $login = $_POST['log_ad'];
        $mdp = $_POST['mdp_ad'];
        if ($login != null && $mdp != null) {
            $filters = array(
                'log_ad' => FILTER_SANITIZE_STRING,
                'mdp_ad' => FILTER_SANITIZE_STRING,
            );
            $datas = filter_input_array(INPUT_POST, $filters);
            dump_var($datas, DUMP, '$_POST filtré');


            //  Instanciation d'un objet User avec les données filtrées
            $userConnect = new DTO\Administrateur($datas);
            $userConnect = new DTO\Tuteur($datas);


            $connexion = new DTO\Bdd($Bdd);

            //  Instanciation du  et authentification de la personne
            $repo = new DAO\Administrateur_DAO($connexion->getPDO());

            $user = $repo->Authentify_ad($login, $mdp);

            dump_var($connexion, DUMP, '$db');
            dump_var($user, DUMP, '$user');
            dump_var($_SESSION, DUMP, '$_SESSION');


            if ($user) {
                $_SESSION['identifiant'] = $user;
                echo '<p>Connexion réussie</p>';
                header('location: ../view/Accueil.php');

            } elseif ($user == false) {
                $repo = new DAO\Tuteur_DAO($connexion->getPDO());
                $user2 = $repo->Authentify_tut($login, $mdp);
                if ($user2) {

                    echo '<p>Connexion réussie2</p>';
                    header('location: ../view/Accueil.php');
                } else {
                    header('location: ../view/Connexion.php');
                    echo '<p>Erreur de connexion !</p>';
                    header('location: ../view/Connexion.php');
                }
            }

        } else {
            header('location: ../view/Connexion.php');
        }
    }
}

