
<html>

<html lang="it">

<head> 
    <meta charset="UTF-8">
    <title>Log in area riservata</title>
    
    <!-- Font Awesome per icona lucchetto -->
    <script src="https://kit.fontawesome.com/cc614c5a37.js" crossorigin="anonymous"></script> 
     <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- link al foglio di stile css --> 
    <link rel="stylesheet" href="style/formstyle.css">

    <!-- Javascript -->
    <script>   
    function goBack() {
    window.history.back();   // chiedo all'oggetto history di eseguire l'operazione back() per tornare alla pagina precedente
    }
    </script>   
</head>


<body>

<form METHOD="POST" ACTION="src/controllalogin.php" id="mioform" target="_blank">
<div class="container">   <!-- contenitore larghezza fissa --> 
  <div class="row">
    <div class="col-lg-3 col-md-2"></div>
    <div class="col-lg-6 col-md-8 login-box">
      <div class="col-lg-12 login-key">
        <i class="fa fa-key" aria-hidden="true"></i>
      </div>
      <div class="col-lg-12 login-title">
          Accedi all'area riservata<br>
      <i class="fas fa-user-lock"></i>  
      </div>
      <div class="col-lg-12 login-form">
        <div class="col-lg-12 login-form">
          <form>
            <div class="form-group">
                <label for="username" class="form-control-label">USERNAME</label>
              <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
              <label for="pwd" class="form-control-label">PASSWORD</label>
              <input type="password" class="form-control" name="password">
            </div>

            <div class="col-lg-12 loginbttm">
              <div class="col-lg-6 login-btm login-text">
                <!-- Error Message -->
              </div>
              <div class="col-lg-6 login-btm login-button">
                <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                <br> 
                <br>
                <button type="button" class="btn btn-link" onclick="goBack()">TORNA INDIETRO</button>  <!-- richiamo il metodo history back --> 
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-3 col-md-2"></div>
    </div>
  </div>
         </form>

</body> 

</html>