<?php

namespace DTO;

class Etudiant
{
    private int $id_etu;
    private string $nom_etu;
    private string $pre_etu;
    private string $tel_etu;
    private string $mail_etu;
    private string $spe_etu;
    private string $classe_etu;
    private string $autres_etu;
    private string $log_etu;
    private string $mdp_etu;
    private int $id_ent;


    public function __construct($data)
    {
        $this->id_etu = $data["id_etu"];
        $this->nom_etu = $data["nom_etu"];
        $this->pre_etu = $data["pre_etu"];
        $this->tel_etu = $data["tel_etu"];
        $this->mail_etu = $data["mail_etu"];
        $this->spe_etu = $data["spe_etu"];
        $this->classe_etu = $data["classe_etu"];
        $this->autres_etu = $data["autres_etu"];
        $this->log_etu = $data["log_etu"];
        $this->mdp_etu = $data["mdp_etu"];
        $this->id_ent = $data["id_ent"];
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
    public function getNomEtu(): mixed
    {
        return $this->nom_etu;
    }

    /**
     * @param mixed|string $nom_etu
     */
    public function setNomEtu(mixed $nom_etu): void
    {
        $this->nom_etu = $nom_etu;
    }

    /**
     * @return mixed|string
     */
    public function getPreEtu(): mixed
    {
        return $this->pre_etu;
    }

    /**
     * @param mixed|string $pre_etu
     */
    public function setPreEtu(mixed $pre_etu): void
    {
        $this->pre_etu = $pre_etu;
    }

    /**
     * @return mixed|string
     */
    public function getTelEtu(): mixed
    {
        return $this->tel_etu;
    }

    /**
     * @param mixed|string $tel_etu
     */
    public function setTelEtu(mixed $tel_etu): void
    {
        $this->tel_etu = $tel_etu;
    }

    /**
     * @return mixed|string
     */
    public function getMailEtu(): mixed
    {
        return $this->mail_etu;
    }

    /**
     * @param mixed|string $mail_etu
     */
    public function setMailEtu(mixed $mail_etu): void
    {
        $this->mail_etu = $mail_etu;
    }

    /**
     * @return mixed|string
     */
    public function getSpeEtu(): mixed
    {
        return $this->spe_etu;
    }

    /**
     * @param mixed|string $spe_etu
     */
    public function setSpeEtu(mixed $spe_etu): void
    {
        $this->spe_etu = $spe_etu;
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
    public function getAutresEtu(): mixed
    {
        return $this->autres_etu;
    }

    /**
     * @param mixed|string $autres_etu
     */
    public function setAutresEtu(mixed $autres_etu): void
    {
        $this->autres_etu = $autres_etu;
    }

    /**
     * @return mixed|string
     */
    public function getLogEtu(): mixed
    {
        return $this->log_etu;
    }

    /**
     * @param mixed|string $log_etu
     */
    public function setLogEtu(mixed $log_etu): void
    {
        $this->log_etu = $log_etu;
    }

    /**
     * @return mixed|string
     */
    public function getMdpEtu(): mixed
    {
        return $this->mdp_etu;
    }

    /**
     * @param mixed|string $mdp_etu
     */
    public function setMdpEtu(mixed $mdp_etu): void
    {
        $this->mdp_etu = $mdp_etu;
    }

    /**
     * @return int|mixed
     */
    public function getIdEnt(): mixed
    {
        return $this->id_ent;
    }

    /**
     * @param int|mixed $id_ent
     */
    public function setIdEnt(mixed $id_ent): void
    {
        $this->id_ent = $id_ent;
    }

}
