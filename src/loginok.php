<?php
session_start();
if(!isset($_SESSION['username'])) {
header("Location: form.php");
}
?>
<html>
<body>
   Identificazione utente riuscita! <br />
     Benvenuto nell'area riservata <br />
      premi su <a href="logout.php">Logout</a> per disconnetterti
</body>
</html>