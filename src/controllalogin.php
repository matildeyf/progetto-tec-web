<?php
session_start();
?>
<html>
  <head>
  <link rel="stylesheet" href="../style/style.css">       
  <title>Controllo login</title>
 </head>

<?php
$username = $_POST['username'];   
$password = $_POST['password'];


if($username == "" or $password == ""){
   echo "Non puoi accedere senza username o password!";
   }else if($username == "" and $password == ""){
   echo "Non puoi accedere senza username e password!";
   }else{
// configure your username and password
  if($username == "Matilde" AND $password == "palestra"){
    echo "Ciao $username !";
    echo "<a href='private.php'>Clicca qui</a> per controllare la lista degli utenti iscritti alla palestra.";
    }else{
    echo "Accesso negato!";
}
}

function loggeduser($username){

}


?>

</html>