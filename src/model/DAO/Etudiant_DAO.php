<?php

namespace DAO;

use DTO\Etudiant;

class Etudiant_DAO
{
    public function getAll() : ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM Etudiant');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new Etudiant($row);

            }
        }
        return $resultSet;
    }

    public function GetById(int $id): ?Etudiant
    {
        $resultSet = NULL;
        $query = 'SELECT * FROM etudiant WHERE id_ent=:id_etu;';

        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_ent' => $id]);

        if ($res !== FALSE) {
            $tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if (!is_null($tab)) {

                $resultSet = new Etudiant($tab);
            }
        }
        return $resultSet;
    }
}