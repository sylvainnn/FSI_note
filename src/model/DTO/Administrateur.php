<?php

namespace DTO;

use DAO\Administrateur_DAO;

class administrateur extends Utilisateur
{
    private int $id_ad;
    private string $log_ad;
    private string $mdp_ad;

    /**
     * @param int $id_ad
     * @param string $log_ad
     * @param string $mdp_ad
     */

    public function __construct($data)
    {
        $this->id_ad = $data["id_ad"];
        $this->log_ad = $data["log_ad"];
        $this->mdp_ad = $data["mdp_ad"];
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
    public function getLogAd(): string
    {
        return $this->log_ad;
    }

    /**
     * @param string $log_ad
     */
    public function setLogAd(string $log_ad): void
    {
        $this->log_ad = $log_ad;
    }

    /**
     * @return string
     */
    public function getMdpAd(): string
    {
        return $this->mdp_ad;
    }

    /**
     * @param string $mdp_ad
     */
    public function setMdpAd(string $mdp_ad): void
    {
        $this->mdp_ad = $mdp_ad;
    }
}