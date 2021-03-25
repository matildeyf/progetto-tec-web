<html> 
<body>
<?php

if (isset($_SESSION["user"])) { // controllo se la variabile di sessione user è impostata

?>
 <h2 class="welcome">Ciao <?= $_SESSION["user"] ?>!
 
<?php
		session_unset(); 	//resetta le variabili di sessione
		session_destroy();  // distrugge il session ID (quindi la sessione)
?>
      Sessione chiusa, arrivederci!</h2>
<?php
  }
  else {   //se la variabile di sessione non è impostata
?>
      <p>Sessione NON valida!</p>
<?php
  }
?>
</body>
</html>