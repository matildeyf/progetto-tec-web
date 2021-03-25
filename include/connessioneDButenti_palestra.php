<?php
// creo la connessone al DB utenti

$erroreDB = "";     //se non c'è errore, connessione al DB
try {
    $db = new PDO ("mysql:dbname=utenti_palestra;host=localhost", "root", ""); 
}
catch (PDOException $ex) {       //se invece c'è errore, dai messaggio di errore; la catch non viene eseguita se nella try è andato tutto bene
    $erroreDB = $ex->getMessage();
}

?>