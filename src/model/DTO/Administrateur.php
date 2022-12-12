<?php

namespace DTO;

class Administrateur
{
    private int $id_ad;
    private string $nom_ad;
    private string $pre_ad;
    private string $tel_ad;
    private string $email_ad;
    private string $log_ad;
    private int $mdp_ad;

    public function __construct($data)
    {
        $this->id_ad = $data["id_ad"];
        $this->nom = $data["nom"];
        $this->pre = $data["pre"];
        $this->tel = $data["tel"];
        $this->email = $data["email"];
        $this->log = $data["log"];
        $this->mdp = $data["mdp"];
    }

    /**
     * @return int
     */
    public function getIdAd(): int
    {
        return $this->id_ad;
    }

    /**
     * @param int $id_ad
     */
    public function setIdAd(int $id_ad): void
    {
        $this->id_ad = $id_ad;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPre(): string
    {
        return $this->pre;
    }

    /**
     * @param string $pre
     */
    public function setPre(string $pre): void
    {
        $this->pre = $pre;
    }

    /**
     * @return string
     */
    public function getTel(): string
    {
        return $this->tel;
    }

    /**
     * @param string $tel
     */
    public function setTel(string $tel): void
    {
        $this->tel = $tel;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getLog(): string
    {
        return $this->log;
    }

    /**
     * @param string $log
     */
    public function setLog(string $log): void
    {
        $this->log = $log;
    }

    /**
     * @return int
     */
    public function getMdp(): int
    {
        return $this->mdp;
    }

    /**
     * @param int $mdp
     */
    public function setMdp(int $mdp): void
    {
        $this->mdp = $mdp;
    }
}