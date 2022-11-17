<?php

namespace DTO;

class Bilan
{

    private int $id_bil;
    private \DateTime $dat_bil;
    private float $not_ent_bil;
    private float $not_oral_bil;
    private float $not_dos_bil;
    private float $not_dos_fin_bil;
    private float $not_oral_fin_bil;
    private int $id_etu;

    /**
     * @param int $id_bil
     * @param \DateTime $dat_bil
     * @param float $not_ent_bil
     * @param float $not_oral_bil
     * @param float $not_dos_bil
     * @param float $not_dos_fin_bil
     * @param float $not_oral_fin_bil
     * @param int $id_etu
     */
    public function __construct($data)
    {
        $this->id_bil = $data["id_bil"];
        $this->dat_bil = $data["dat_bil"];
        $this->not_ent_bil = $data["not_ent_bil"];
        $this->not_oral_bil = $data["not_oral_bil"];
        $this->not_dos_bil = $data["not_dos_bil"];
        $this->not_dos_fin_bil = $data["not_dos_fin_bil"];
        $this->not_oral_fin_bil = $data["not_oral_fin_bil"];
        $this->id_etu = $data["id_etu"];
    }


    /**
     * @return int
     */
    public function getIdBil(): int
    {
        return $this->id_bil;
    }

    /**
     * @param int $id_bil
     */
    public function setIdBil(int $id_bil): void
    {
        $this->id_bil = $id_bil;
    }

    /**
     * @return \DateTime
     */
    public function getDatBil(): \DateTime
    {
        return $this->dat_bil;
    }

    /**
     * @param \DateTime $dat_bil
     */
    public function setDatBil(\DateTime $dat_bil): void
    {
        $this->dat_bil = $dat_bil;
    }

    /**
     * @return float
     */
    public function getNotEntBil(): float
    {
        return $this->not_ent_bil;
    }

    /**
     * @param float $not_ent_bil
     */
    public function setNotEntBil(float $not_ent_bil): void
    {
        $this->not_ent_bil = $not_ent_bil;
    }

    /**
     * @return float
     */
    public function getNotOralBil(): float
    {
        return $this->not_oral_bil;
    }

    /**
     * @param float $not_oral_bil
     */
    public function setNotOralBil(float $not_oral_bil): void
    {
        $this->not_oral_bil = $not_oral_bil;
    }

    /**
     * @return float
     */
    public function getNotDosBil(): float
    {
        return $this->not_dos_bil;
    }

    /**
     * @param float $not_dos_bil
     */
    public function setNotDosBil(float $not_dos_bil): void
    {
        $this->not_dos_bil = $not_dos_bil;
    }

    /**
     * @return float
     */
    public function getNotDosFinBil(): float
    {
        return $this->not_dos_fin_bil;
    }

    /**
     * @param float $not_dos_fin_bil
     */
    public function setNotDosFinBil(float $not_dos_fin_bil): void
    {
        $this->not_dos_fin_bil = $not_dos_fin_bil;
    }

    /**
     * @return float
     */
    public function getNotOralFinBil(): float
    {
        return $this->not_oral_fin_bil;
    }

    /**
     * @param float $not_oral_fin_bil
     */
    public function setNotOralFinBil(float $not_oral_fin_bil): void
    {
        $this->not_oral_fin_bil = $not_oral_fin_bil;
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

}