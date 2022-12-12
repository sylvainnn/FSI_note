<?php

require_once 'globalConfig.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('URL_BASE', "http://localhost/ort/P2023_2SIO_Projet_Tutorat");

use model\dto\Bdd;

$bdd = new \DTO\Bdd("localhost:8889", "P2023_2SIO_FSI", "root", "root");
$bdd = $bdd->getPDO();