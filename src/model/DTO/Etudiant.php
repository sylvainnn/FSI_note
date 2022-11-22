<?php
namespace DTO;
require "Utilisateur.php";
//use DTO\Utilisateur;

class Etudiant extends Utilisateur
{
    private int $id_etu;
    private string $classe_etu;
    private string $adresse_etu;
    private ?Entreprise $entreprise_etu = null;
    private ?Tuteur $tuteur_etu = null;
    private array $mesNotes_etu;

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

    /**
     * @return int|mixed
     */
    public function getIdEtu(): mixed
    {
        return $this->id_etu;
    }

    /**
     * @param int|mixed $id_etu
     */
    public function setIdEtu(mixed $id_etu): void
    {
        $this->id_etu = $id_etu;
    }

    /**
     * @return mixed|string
     */
    public function getClasseEtu(): mixed
    {
        return $this->classe_etu;
    }

    /**
     * @param mixed|string $classe_etu
     */
    public function setClasseEtu(mixed $classe_etu): void
    {
        $this->classe_etu = $classe_etu;
    }

    /**
     * @return mixed|string
     */
    public function getAdresseEtu(): mixed
    {
        return $this->adresse_etu;
    }

    /**
     * @param mixed|string $adresse_etu
     */
    public function setAdresseEtu(mixed $adresse_etu): void
    {
        $this->adresse_etu = $adresse_etu;
    }

    /**
     * @return Entreprise|mixed
     */
    public function getEntrepriseEtu(): mixed
    {
        return $this->entreprise_etu;
    }

    /**
     * @param Entreprise|mixed $entreprise_etu
     */
    public function setEntrepriseEtu(mixed $entreprise_etu): void
    {
        $this->entreprise_etu = $entreprise_etu;
    }

    /**
     * @return Tuteur|mixed
     */
    public function getTuteurEtu(): mixed
    {
        return $this->tuteur_etu;
    }

    /**
     * @param Tuteur|mixed $tuteur_etu
     */
    public function setTuteurEtu(mixed $tuteur_etu): void
    {
        $this->tuteur_etu = $tuteur_etu;
    }

    /**
     * @return array|mixed
     */
    public function getMesNotesEtu(): mixed
    {
        return $this->mesNotes_etu;
    }

    /**
     * @param array|mixed $mesNotes_etu
     */
    public function setMesNotesEtu(mixed $mesNotes_etu): void
    {
        $this->mesNotes_etu = $mesNotes_etu;
    }

}