<?php
session_start();
?>

<?php

  require("../classes/DaoUsers.php");

  $DAO_Users = new DaoUsers();
  $user_list = $DAO_Users->getUsers();
?>


<html>
  <head>
  <title>Area riservata</title>

  <meta charset="utf-8">

  <!-- Link Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Link foglio di stile -->
  <link rel="stylesheet" href="../style/style.css">
  </head>


  <body>
    <header>
       <img src="../img/Logo.jpg" title="logo" alt="logo" width="200px" height="80px">
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
         foreach($user_list as $user) {
           echo "<tr><td>" . $user->getNome() . "</td>" .
                "<td>" . $user->getCognome() . "</td>" .
                "<td>" . $user->getEmail() . "</td>" .
                "<td>" . $user->getData_iscrizione() . "</td>" .
                "<td>" . $user->getTipo_abbonamento() . "</td></tr>";
         } 
         ?>
    </tbody>
  </table>

<!-- PROVARE A FARE FORM PER INSERIRE CANCELLARE -->

<div>


</div>

        <?php
        //  $DAO_Users->addUser(new Utente("MARIO", "ROSSI", "MARIOROSSI@OUTLOOK.IT", "2020-08-14", "PROVA"));
        $DAO_Users->removeUser("MARIOROSSI@OUTLOOK.IT");
       ?>
</div>
   <form name="utente" action="private.php">
   <p>Inserisci un nuovo utente</p>
      <label for="nome">Nome:</label><br>
         <input type="text" id="nome" name="nome" required><br>
      <label for="cognome">Cognome:</label><br>
         <input type="text" id="cognome" name="cognome" required><br><br>
      <label for="email">Email:</label><br>
         <input type="email" id="email" name="email" required><br><br>
      <label for="data_iscrizione">Data iscrizione:</label><br>
         <input type="date" id="data_iscrizione" name="data_iscrizione" required><br><br>
      <label for="tipo_abbonamento">Tipo abbonamento:</label><br>
         <input type="radio" id="sala_corsi" name="sala_corsi" value="sala_corsi" required>
           <label for="sala_corsi">Sala corsi</label><br>
         <input type="radio" id="sala_pesi" name="sala_pesi" value="sala_pesi" required>
           <label for="sala_pesi">Sala pesi</label><br>
    <input type="button" id="button" value="Seleziona">
    </action=> 
   </form>
</div>

<br>
<br>
<br>

    <div>
      <a href="logout.php">Logout</a>
    </div>


</html>
