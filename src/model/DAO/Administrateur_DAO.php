<?php

namespace DAO;

use DTO\administrateur;

class Administrateur_DAO
{
    private PDO $bdd;

    /**
     * @param PDO $bdd
     */
    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    public function getAll() : ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM administrateur');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new administrateur($row);

            }
        }
        return $resultSet;
    }

    public function GetById{
        $resultSet = NULL;
        $query = 'SELECT * FROM administrateur WHERE id_ad=:id_ad;';

        // On prépare la rêquete
        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_ad' => $id]);

        if ($res !== FALSE) {
            $tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {
                // Si on récupère une occurence, on crée un objet PERSONNEL avec cette dernière
                $resultSet = new administrateur($tab);
            }
        }
        return $resultSet;
    }

    public function authentify(Administrateur $entity): bool{
        $resultSet = NULL;
        if ($entity != NULL) {
            if ($this->bdd) {
                //  Conversion de l'entité en tableau associatif (nécessaire pour le binding)
                $query = 'SELECT * FROM Administrateur WHERE logAdmin = :login';
                //  Préparation et exécution de la requête
                $reqPrep = $this->bdd->prepare($query);
                $reqPrep->bindValue(':login', $entity->getLoginPersonnel());
                $rqtResult = $reqPrep->execute();
                if ($rqtResult) {
                    //  Récupération des résultats d'exécution de la requête
                    $row = $reqPrep->fetch(\PDO::FETCH_ASSOC);
                    if ($row) {
                        //  On a un résultat
                        $administrateur = new administrateur($row);

                        if (password_verify($entity->getMdpAd(), $administrateur->getMdpAd())) {
                            // if ($entity->getMdpPersonnel()== $personnel->getMdpPersonnel()){
                            //  On ne conserve nulle part le password en dehors de la bdd...
                            $administrateur->setMdpAd('');
                            //  Mise en place des variables de session
                            // A FIARE PLUS TARD DANS LE SUJET
                            $_SESSION['Administrateur'] = $administrateur;
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