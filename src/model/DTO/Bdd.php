<?php

namespace DTO;

class Bdd
{
    private \PDO $PDO;
    private $HOST;
    private $NAME;
    private $USERNAME;
    private $PASSWORD;

    public function __construct(string $HOST, string $NAME, string $USERNAME, string $PASSWORD)
    {
        $bdd = new \PDO("mysql:host={$HOST};dbname={$NAME};charset=UTF8", "{$USERNAME}", "{$PASSWORD}");
        $this->PDO = $bdd;
    }
}