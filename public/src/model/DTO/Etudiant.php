<?php

namespace DTO;

class Etudiant
{
    private int $id_etu;
    private string $nom_etu;
    private string $pre_etu;
    private string $tel_etu;
    private string $log_etu;
    private string $mdp_etu;
    private int $id_ent;

    /**
     * @param int $id_etu
     * @param string $nom_etu
     * @param string $pre_etu
     * @param string $tel_etu
     * @param string $log_etu
     * @param string $mdp_etu
     * @param int $id_ent
     */

    public function __construct($data)
    {
        $this->id_etu = $data["id_etu"];
        $this->nom_etu = $data["nom_etu"];
        $this->pre_etu = $data["pre_etu"];
        $this->tel_etu = $data["tel_etu"];
        $this->log_etu = $data["log_etu"];
        $this->mdp_etu = $data["mdp_etu"];
        $this->id_ent = $data["id_ent"];
    }

    /**
     * @return int
     */
    public function getIdEtu(): int
    {
        return $this->id_etu;
    }

    /**
     * @param int $id_etu
     */
    public function setIdEtu(int $id_etu): void
    {
        $this->id_etu = $id_etu;
    }

    /**
     * @return string
     */
    public function getNomEtu(): string
    {
        return $this->nom_etu;
    }

    /**
     * @param string $nom_etu
     */
    public function setNomEtu(string $nom_etu): void
    {
        $this->nom_etu = $nom_etu;
    }

    /**
     * @return string
     */
    public function getPreEtu(): string
    {
        return $this->pre_etu;
    }

    /**
     * @param string $pre_etu
     */
    public function setPreEtu(string $pre_etu): void
    {
        $this->pre_etu = $pre_etu;
    }

    /**
     * @return string
     */
    public function getTelEtu(): string
    {
        return $this->tel_etu;
    }

    /**
     * @param string $tel_etu
     */
    public function setTelEtu(string $tel_etu): void
    {
        $this->tel_etu = $tel_etu;
    }

    /**
     * @return string
     */
    public function getLogEtu(): string
    {
        return $this->log_etu;
    }

    /**
     * @param string $log_etu
     */
    public function setLogEtu(string $log_etu): void
    {
        $this->log_etu = $log_etu;
    }

    /**
     * @return string
     */
    public function getMdpEtu(): string
    {
        return $this->mdp_etu;
    }

    /**
     * @param string $mdp_etu
     */
    public function setMdpEtu(string $mdp_etu): void
    {
        $this->mdp_etu = $mdp_etu;
    }

    /**
     * @return int
     */
    public function getIdEnt(): int
    {
        return $this->id_ent;
    }

    /**
     * @param int $id_ent
     */
    public function setIdEnt(int $id_ent): void
    {
        $this->id_ent = $id_ent;
    }
}