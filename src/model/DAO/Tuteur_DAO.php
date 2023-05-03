<?php

namespace DAO;
use DTO\Tuteur;
use PDO;
class Tuteur_DAO


{
    private PDO $bdd;

    /**
     * @param PDO $bdd
     */
    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }


    public function authentify_tut(string $login, string $mdp): bool
    {
        $resultSet = NULL;
        if ($login != NULL) {
            if ($this->bdd) {
                //  Conversion de l'entité en tableau associatif (nécessaire pour le binding)
                $query = 'SELECT * FROM tuteur WHERE log_tut = :login and mdp_tut = :mdp';
                //  Préparation et exécution de la requête
                $reqPrep = $this->bdd->prepare($query);
                $rqtResult = $reqPrep->execute([
                    ':login' => $login,
                    ':mdp' => $mdp
                ]);
                if ($rqtResult) {
                    //  Récupération des résultats d'exécution de la requête

                    $row = $reqPrep->fetch(\PDO::FETCH_ASSOC);
                    if ($row) {
                        //  On a un résultat
                        $responsable = new tuteur($row);
                        //  Vérification du mot de passe.
                        // A FIARE PLUS TARD DANS LE SUJET
                        if ($row > 0) {
                            // if ($entity->getMdpPersonnel()== $personnel->getMdpPersonnel()){
                            //  On ne conserve nulle part le password en dehors de la bdd...
                            //  Mise en place des variables de session
                            // A FIARE PLUS TARD DANS LE SUJET
                            $_SESSION['tuteur'] = $responsable;
                            //  Authentification réussie, on retournera TRUE
                            $resultSet = TRUE;
                        } else
                            $resultSet = FALSE;
                    } else
                        $resultSet = FALSE;
                } else
                    $resultSet = FALSE;
            } else
                $resultSet = FALSE;
        }
        return $resultSet;
    }
}

