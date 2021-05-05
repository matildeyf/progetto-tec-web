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

         <script>
            //RIPRENDI DA QUIII, l'idea e' di sostituire la roba sopra e utilizzare js per stampare dinamicamente le cards
         </script>
    </tbody>
  </table>
</div>
</div>

<br>
<br>
<br>

    <div>
      <a href="logout.php">Logout</a>
    </div>


</html>
