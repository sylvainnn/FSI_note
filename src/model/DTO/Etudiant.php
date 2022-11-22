<?php
namespace DTO;
require "Utilisateur.php";
//use DTO\Utilisateur;

class Etudiant extends Utilisateur
{
    private int $id_etu;
    private string $classe_etu;
    private string $adresse_etu;
    private Entreprise $entreprise_etu;
    private Tuteur $tuteur_etu;
    private array $mesNotes_etu;

    //HERITAGE
    public string $nom;

    /**
     * @param int $id_etu
     * @param string $classe_etu
     * @param string $adresse_etu
     * @param Entreprise $entreprise_etu
     * @param Tuteur $tuteur_etu
     * @param array $mesNotes_etu
     */
    public function __construct($data)
    {
        $this->id_etu = $data["id_etu"];
        $this->classe_etu = $data["classe_etu"];
        $this->adresse_etu = $data["adresse_etu"];
        $this->entreprise_etu = $data["entreprise_etu"];
        $this->tuteur_etu = $data["tuteur_etu"];
        $this->mesNotes_etu = $data["mesNotes_etu"];
    }
}