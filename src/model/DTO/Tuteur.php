<?php

namespace DTO;

class Tuteur
{
    private int $id_tut;
    private string $nom_tut;
    private string $pre_tut;
    private string $tel_tut;
    private string $email_tut;
    private string $log_tut;
    private string $mdp_tut;
    private string $id_etu;

    /**
     * @param int $id_tut
     * @param string $nom_tut
     * @param string $pre_tut
     * @param string $tel_tut
     * @param string $email_tut
     * @param string $log_tut
     * @param string $mdp_tut
     * @param string $id_etu
     */
    public function __construct($data)
    {
        $this->id_tut = $data["id_tut"];
        $this->nom_tut = $data["nom_tut"];
        $this->pre_tut = $data["pre_tut"];
        $this->tel_tut = $data["tel_tut"];
        $this->email_tut = $data["email_tut"];
        $this->log_tut = $data["log_tut"];
        $this->mdp_tut = $data["mdp_tut"];
        $this->id_etu = $data["id_etu"];
    }

    /**
     * @return int
     */
    public function getIdTut(): int
    {
        return $this->id_tut;
    }

    /**
     * @param int $id_tut
     */
    public function setIdTut(int $id_tut): void
    {
        $this->id_tut = $id_tut;
    }

    /**
     * @return string
     */
    public function getNomTut(): string
    {
        return $this->nom_tut;
    }

    /**
     * @param string $nom_tut
     */
    public function setNomTut(string $nom_tut): void
    {
        $this->nom_tut = $nom_tut;
    }

    /**
     * @return string
     */
    public function getPreTut(): string
    {
        return $this->pre_tut;
    }

    /**
     * @param string $pre_tut
     */
    public function setPreTut(string $pre_tut): void
    {
        $this->pre_tut = $pre_tut;
    }

    /**
     * @return string
     */
    public function getTelTut(): string
    {
        return $this->tel_tut;
    }

    /**
     * @param string $tel_tut
     */
    public function setTelTut(string $tel_tut): void
    {
        $this->tel_tut = $tel_tut;
    }

    /**
     * @return string
     */
    public function getEmailTut(): string
    {
        return $this->email_tut;
    }

    /**
     * @param string $email_tut
     */
    public function setEmailTut(string $email_tut): void
    {
        $this->email_tut = $email_tut;
    }

    /**
     * @return string
     */
    public function getLogTut(): string
    {
        return $this->log_tut;
    }

    /**
     * @param string $log_tut
     */
    public function setLogTut(string $log_tut): void
    {
        $this->log_tut = $log_tut;
    }

    /**
     * @return string
     */
    public function getMdpTut(): string
    {
        return $this->mdp_tut;
    }

    /**
     * @param string $mdp_tut
     */
    public function setMdpTut(string $mdp_tut): void
    {
        $this->mdp_tut = $mdp_tut;
    }

    /**
     * @return string
     */
    public function getIdEtu(): string
    {
        return $this->id_etu;
    }

    /**
     * @param string $id_etu
     */
    public function setIdEtu(string $id_etu): void
    {
        $this->id_etu = $id_etu;
    }
}
