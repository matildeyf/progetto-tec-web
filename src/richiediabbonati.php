<?php
session_start();
require("include/connessioneDButenti_palestra.php");
?>

<?php

if ($_GET["abbonamento"] == "sala_pesi") {
    $resultSet = $salapesi->query("SELECT nome, cognome FROM utenti_palestra WHERE tipo_abbonamento=sala pesi");
    while ($row=$resultSet->fetch(PDO::FETCH_ASSOC)) {
        echo $row["nome"]. ":" . $record["cognome"];
    }

}
else {
 echo "";
}

?>