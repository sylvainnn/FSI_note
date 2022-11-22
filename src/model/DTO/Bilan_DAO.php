<?php

namespace DAO;

use DTO\Bilan;
class Bilan_DAO
{

    private PDO $bdd;

    /**
     * @param PDO $bdd
     */
    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    public function getAll(): ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM bilan');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new bilan($row);
            }
        }
        return $resultSet;
    }

    public function ajoutBilan(\DTO\Bilan $entity): ?Bilan
    {
        $resultat = true;
        $query = "INSERT INTO Bilan" .
            " (id_bil,dat_bil,Not_ent_bil,Not_oral_bil,Not_dos_bil,Not_dos_fin_bil,Not_oral_fin_bil,id_etu)"
            . " VALUES (:id_bil, :dat_bil, :Not_ent_bil, :Not_oral_bil, :Not_dos_bil, :Not_dos_fin_bil, :Not_oral_fin_bil, :id_etu)";
        $reqPrep = $this->bdd->prepare($query);
        $res = $reqPrep->execute(
            [':id_bil' => $entity->id_bil(),
                ':dat_bil' => $entity->dat_bil(),
                ':Not_ent_bil' => $entity->Not_ent_bil(),
                ':Not_oral_bil' => $entity->Not_oral_bil(),
                ':Not_dos_bil' => $entity->Not_dos_bil(),
                ':Not_dos_fin_bil' => $entity->Not_dos_fin_bil(),
                ':Not_oral_fin_bil' => $entity->Not_oral_fin_bil(),
                ':id_etu' => $entity->id_etu(),
            ]
        );
        if ($res == FALSE) {
            $resultat = false;
        } else {
            $entity->setIdBil();
            ($this->bdd->lastInsertId());
            $_SESSION['Bilan'] = $entity;
        }

        return $entity;
    }

    public function ModifBilan(int $id, float $Not_ent_bil, float $Not_dos_bil, float $Not_oral_fin_bil): void
    {

        $query = 'UPDATE bilan set Not_ent_bil =:Not_ent_bil,Not_dos_bil =:Not_dos_bil,Not_oral_fin_bil =:Not_oral_fin_bil where id_etu =:id_etu';

        // On prépare la rêquete
        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([
            ':not_ent' => $not_ent,
            ':not_dos' => $not_dos,
            ':not_ora' => $not_ora,
            ':id_etu' => $id,
        ]);
    }
}