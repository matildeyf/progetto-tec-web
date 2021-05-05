<?php

class Dao { //DAO = Data Access Object
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "utenti_palestra";

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);

        //settando FETCH_ASSOC, quando chiamiamo fetch() ci ritorna in automatico un
        //array associativo che possiamo utilizzare utilizzando i nomi degli attributi degli utenti
        //per come sono salvati nel Database
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }
}
