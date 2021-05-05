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

// esempio di insert:
// INSERT into utenti_iscritti (nome, cognome, email, data_iscrizione, tipo_abbonamento) values('Irene', 'Tudisco', 'irenetudisco@outlook.it', '2016-03-01', 'sala pesi');
    public function addUser($user) {
        $sql = "insert into utenti_iscritti (nome, cognome, email, data_iscrizione, tipo_abbonamento) values(" .
                $user->getNome() .
                "" .
                "" .; //TODO finire l'inserimento con tutti i parametri dell'utente. FILTRARE INPUT PER sql injections

        // esecuzione della query
    }

    public function removeUser($email) {
        //TODO $sql = ;
    }

    public function modifyUser($email, $user) { //questa operazione e' opzionale
        //TODO
    }
}
