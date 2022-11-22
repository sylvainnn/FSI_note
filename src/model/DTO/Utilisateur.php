<?php

namespace DTO;

class Utilisateur
{
    protected int $id;
    private string $nom;
    protected string $prenom;
    protected string $login;
    protected string $mdp;

    /**
     * @param int $id
     * @param string $nom
     * @param string $prenom
     * @param string $login
     * @param string $mdp
     */

    public function __construct($data)
    {
        $this->id = $data["id_uti"];
        $this->nom = $data["nom_uti"];
        $this->prenom = $data["prenom_uti"];
        $this->login = $data["login_uti"];
        $this->mdp = $data["mbp_uti"];
    }

    /**
     * @return int|mixed
     */
    public function getId(): mixed
    {
        return $this->id;
    }

    /**
     * @param int|mixed $id
     */
    public function setId(mixed $id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed|string
     */
    public function getNom(): mixed
    {
        return $this->nom;
    }

    /**
     * @param mixed|string $nom
     */
    public function setNom(mixed $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed|string
     */
    public function getPrenom(): mixed
    {
        return $this->prenom;
    }

    /**
     * @param mixed|string $prenom
     */
    public function setPrenom(mixed $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed|string
     */
    public function getLogin(): mixed
    {
        return $this->login;
    }

    /**
     * @param mixed|string $login
     */
    public function setLogin(mixed $login): void
    {
        $this->login = $login;
    }

    /**
     * @return mixed|string
     */
    public function getMdp(): mixed
    {
        return $this->mdp;
    }

    /**
     * @param mixed|string $mdp
     */
    public function setMdp(mixed $mdp): void
    {
        $this->mdp = $mdp;
    }

}


