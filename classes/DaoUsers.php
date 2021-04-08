<?php
include_once 'Dao.php';
include_once 'Utente.php';

class DaoUsers extends Dao {
    public function getUsers() {
        $sql = "SELECT * FROM utenti_iscritti";
        $statement = $this->connect()->query($sql);
        $result = $statement->fetchAll();
        $users = array();

        foreach($result as $user) {
          array_push($users, new Utente($user['nome'], $user['cognome'], $user['email'], $user['data_iscrizione'], $user['tipo_abbonamento']));
        }

        return $users;
    }
}
