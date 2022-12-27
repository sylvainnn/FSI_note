<?php

namespace DAO;

use DTO\Entreprise;

class Entreprise_DAO
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
        $req = $this->bdd->query('SELECT * FROM Entreprise');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new Entreprise($row);

            }
        }
        return $resultSet;
    }

    public function GetById(int $id): ?Entreprise{
        $resultSet = NULL;
        $query = 'SELECT * FROM entreprise WHERE id_ent=:id_ent;';

        // On prépare la rêquete
        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_ent' => $id]);

        if ($res !== FALSE) {
            $tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {

                $resultSet = new tuteur($tab);
            }
        }
        return $resultSet;
    }
}