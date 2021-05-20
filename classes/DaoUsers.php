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

// TODO proteggere sql injections
 
    public function addUser($user) {  //funzione addUser su un oggetto utente
        $sql = " INSERT into utenti_iscritti (nome, cognome, email, data_iscrizione, tipo_abbonamento) values('" .  //creo la query
                 $user->getNome() . "', '" .  //funzioni concatenate che ritornano stringhe
                 $user->getCognome() . "', '" .
                 $user->getEmail() . "', '" .
                 $user->getData_iscrizione() . "', '" .
                 $user->getTipo_abbonamento() . "');"; 
       
        $resultSet = $this->connect()->query($sql);  //eseguo la query

        if($resultSet){
            echo("<br>Inserimento avvenuto correttamente");
        } 
        else{
            echo("<br>Inserimento non eseguito");
        }
    }

    public function removeUser($email) {
        $sql = " DELETE from utenti_iscritti WHERE email = '" . $email . "' "; 
        $resultSet = $this->connect()->query($sql);

        if($resultSet){
            echo("<br>Cancellazione avvenuta correttamente");
        } 
        else{
            echo("<br>Cancellazione non eseguita");
        }
    }

    public function modifyUser($email, $user) { //questa operazione e' opzionale
        //TODO
    }
}




