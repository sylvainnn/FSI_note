<?php

namespace DAO;

use DTO\Etudiant;
use DTO\Bilan;

class Etudiant_DAO
{
    private \PDO $bdd;

    public function __construct(\PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    public function getAll(): ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM etudiant');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new Etudiant($row) ;

            }
        }
        return $resultSet;
    }

    public function GetById(int $id): ?array
    {
        $resultSet = NULL;
        $query = 'SELECT * FROM etudiant WHERE id_etu =:id_etu;';

        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_etu' => $id]);

        return $reqPrep->fetch(\PDO::FETCH_ASSOC);
    }
    public function GetBytuteur(int $id): ?array{
        $resultSet = NULL;
        $query = 'SELECT etudiant.* FROM etudiant INNER JOIN tuteur on tuteur.id_tut = etudiant.id_tut where tuteur.id_tut = :id_tut;';

        // On prépare la rêquete
        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_tut' => $id]);

        if ($res !== FALSE) {
            $tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {

                $resultSet[] = new Etudiant($tab);
            }
        }
        return $resultSet;
    }

    public function getAllbilan(): ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM etudiant e INNER JOIN bilan b ON e.id_etu = b.id_etu');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new Bilan($row);

            }
        }
        return $resultSet;
    }
}