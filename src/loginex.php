<?php 
session_start();
?> 

<html lang="it">

<head> 
    <meta charset="UTF-8">
    <title>Individual Training Susa</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

<?php    
if (isset($_POST["username"]) && isset($_POST["password"])) {  //controllo che siano stati scritti sia username che password
    require("include/connessioneDBareariservata.php"); //includo la connessione al DB
    if ($erroreDB != "") {   //se il DB da errore o da errore la connessione con il DBMS stampo il messaggio di errore sulla pagina con echo
        echo $erroreDB;
}

else {  // se DB e connessione vanno bene...
   $_SESSION["user"] = $db->quote($_POST["username"]);  //inizializzo la variabile di sessione user; la funzione quote elabora una stringa da usare in una query, tra le virgolette è racchiusa la stringa di input
   $tuttto_ok = false; 
   $result = $db->query("SELECT * FROM area_riservata WHERE username=" .$_SESSION["user"]); // cerco nel DB lo username: se non esiste lo registro, se esiste controllo la password

   if ($result->rowCount() == 0) {  //rowCount = numero di righe; se lo username non esiste, registro il nuovo utente
     $pwd = $db->quote($_POST["password"]);  //uso di nuovo quote, inizializzo la variabile password
     $new_ut = $db->query("INSERT INTO area_riservata (username,password) VALUES (".$_SESSION["user"].",".$pwd.")");  //inserimento dati: inserire in area_riservata username e password con i loro valori 
     $tutto_ok = $new_ut; // new_ut vale true se la query va a buon fine, altrimenti vale false 
    }

    else {  //se lo username esiste, controllo la password
        $ut = $result->fetch(PDO::FETCH_ASSOC); //prelevo il primo elemento dal resultSet; la funzione fetch con parametro PDO::FETCH_ASSOC restistuisce un record, in particolare un array le cui chiavi sono i nomi delle colonne della tabella
        if ($_POST["password"] == $ut["password"]) {  //se la password è corretta...
           $tutto_ok = true;
        }
        else {   //se la password non è corretta...
            $tutto_ok = false;
        }
    }
    if ($tutto_ok) { //se tutto ok (utente registrato o trovato)...
?>
    <h2 class="welcome">Buongiorno <?= $_SESSION["user"] ?>!</h2>
    <h2 class="ptitle"> <a name="src/utenti_iscritti"></a>Ecco la lista degli utenti iscritti alla palestra. Attualmente i tuoi iscritti sono :</h2>
   }
}
<P><A HREF="src/logout.php">logout</A></P>
<?php
	  } // chiusura if tutto_ok 
	  else {
?>
		<P>Qualcosa non va con username e/o password...</P>
<?php
	  }
	} // chiusura else DB 

} // chiusura if che controlla se le variabili in $_POST sono settate
?>
</body>
</html>