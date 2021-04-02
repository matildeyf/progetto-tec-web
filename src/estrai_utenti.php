<?php

//includo la classe utenti
include("../include/classe_utente.php");

//e includo la connessione al DB
require("../include/connessioneDButenti_palestra.php");
if ($erroreDB != "") {   //se il DB da errore o da errore la connessione con il DBMS stampo il messaggio di errore sulla pagina con echo
    echo $erroreDB;
}

else { //altrimenti, se non c'è errore, estraggo dal DB tutti gli utenti
  $listaUt = $db->query("SELECT * FROM utenti_palestra");
  $utenti = array();
  foreach ($listaUt as $u) {
    $id = $u['id'];
    $ut = new Utente($u["id"], $u["nome"], $u["cognome"], $u["email"], $u["data_iscrizione"], $u["tipo_abbonamento"]);  //creo un nuovo utente con i valori estratti dal DB 
    $utenti[] = $ut;  //aggiungo l'utente all'array 
  }
  
}
 
?>

