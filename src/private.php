<?php
session_start();
?>

<?php

require("include/connessioneDButenti_palestra.php");


$resultSet = $db->query("SELECT nome, cognome, email, data_iscrizione, tipo_abbonamento FROM utenti_iscritti");

  $table="";  //creo la variabile tabella e la inizializzo a stringa vuota
  while($row = $resultSet->fetch(PDO::FETCH_ASSOC)) {
    $table.= "<tr><td>".$row["nome"]."</td><td>".$row["cognome"]."</td><td> ".$row["email"]."</td><td>".$row["data_iscrizione"]."</td><td>".$row["tipo_abbonamento"]."</td></tr>";
  }
?>


<html>
  <head>
  <title>Area riservata</title>
  
  <meta charset="utf-8">
  
  <!-- Link Bootstrap --> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Link foglio di stile --> 
  <link rel="stylesheet" href="style/style.css">
  </head>


  <body>
    <header>
       <img src="Logo.jpg" title="logo" alt="logo" width="200px" height="80px">
    </header>

  <br>
  <br>

  <div>
   <h2 class="ptitle">Ciao! <br>
    Ecco la lista degli utenti iscritti alla palestra:
    </h2>
    </div>
  <br>
  <div class="container-sm">    

  <table class="table table-dark table-hover">

    <thead>
      <tr>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Email</th>
        <th>Data iscrizione</th>
        <th>Tipo abbonamento</th>
      </tr>
    </thead>
    <tbody>
         <?php 
         echo $table;
         ?>
    </tbody>
  </table>
</div>
</div>

<br>
<br>
<br>

    <div>
      <a href="src/logout.php">Logout</a>
    </div>
     
    
</html>