<?php

namespace DAO;

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

    public function getAll() : ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM tuteur');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new tuteur($row);
            }
        }
        return $resultSet;
    }

    public function GetById(int $id): ?array{
        $resultSet = NULL;
        $query = 'SELECT * FROM tuteur WHERE id_tut=:id_tut;';

        // On prépare la rêquete
        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_tut' => $id]);

        if ($res !== FALSE) {
            $tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {

                $resultSet = new tuteur($tab);
            }
        }
        return $resultSet;
    }

    public function authentify(Administrateur $entity, $tuteur): bool{
        $resultSet = NULL;
        if ($entity != NULL) {
            if ($this->bdd) {
                //  Conversion de l'entité en tableau associatif
                $query = 'SELECT * FROM Tuteur WHERE log_tut = :login';
                //  Préparation et exécution de la requête
                $reqPrep = $this->bdd->prepare($query);
                $reqPrep->bindValue(':login', $entity->getlog_tut());
                $rqtResult = $reqPrep->execute();
                if ($rqtResult) {
                    //  Récupération des résultats d'exécution de la requête
                    $row = $reqPrep->fetch(\PDO::FETCH_ASSOC);
                    if ($row) {
                        //  On a un résultat
                        $administrateur = new tuteur($row);

                        if (password_verify($entity->getMdp_tut(), $tuteur->getMdp_tut())) {
                            //  On ne conserve nulle part le password en dehors de la bdd...
                            $tuteur->setMdp_log('');
                            //  Mise en place des variables de session
                            $_SESSION['Tuteur'] = $tuteur;
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