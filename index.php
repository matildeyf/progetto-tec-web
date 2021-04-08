<?php
    include_once 'classes/DaoUsers.php';
?>

<!DOCTYPE html>
<html lang="it">

    <head>
        <meta charset="UTF-8">
        <title>Individual Training Susa</title>
        <link rel="stylesheet" href="style/style.css">
        <script src="https://kit.fontawesome.com/cc614c5a37.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.min.js"></script>


        <script>
            jQuery(document).ready(function() {

              $("#button").click(function(){  //al click sul bottone del form
                var corsi = $("#corsi").val(); //associo la variabile corsi

                $.ajax({  //chiamata ajax
                  type: "POST",
                  url: "src/corsi.php",
                  data: "cor="+ $("#corsi").val(),

                  //Inizio visualizzazione errori
                  success: function(msg)
                  {
                    $("#risultato").html(msg);
                  },
                  error: function()
                  {
                    alert("Si prega di riprovare...");
                  }
                });
              });
            });
            </script>

    </head>

    <body>
        <header>
           <a href="https://www.facebook.com/individualtrainingsusa" target="blank"><i class="fab fa-facebook"></i></a>
           <a href="https://www.instagram.com/individualtrainingsusa/?hl=fr" target="blank"><i class="fab fa-instagram"></i></a>
           <a href="https://www.youtube.com/user/IndividualTSusa" target="blank"><i class="fab fa-youtube"></i></a>
           <a href="src/login.php">Accedi all'area riservata</a>
        </header>

        <div>
            <img src="img/Logo.jpg" title="logo" alt="logo" width="200px" height="80px">
        </div>
        <br>
        <br>
    </div>
      <ul>
          <li>
            <a href="index.html">Home</a></li>
            <a href="#lapalestra">La palestra</a></li>
            <a href="#corsi">Corsi</a></li>
            <a href="#servizi">Servizi</a></li>
            <a href="#orari">Orari</a></li>
            <a href="#contatti">Contatti</a></li>
        </li>
      </ul>
    <div>
            <h1 class="title">Individual Training Susa</h1>
            <h2 class="welcome">Benvenuto!</h2>

            <!-- TODO cancellami -->
            <?php
                $users = new DaoUsers();
                $res = $users->getUsers();

                foreach($res as $user) {
                    echo 'voila: ' . $user['nome'] . '</br>';
                }
            ?>
            <!-- TODO cancellami -->

            <div style="text-align: center;">
                <img src="img/esternopalestra.HEIC" title="esternopalestra" alt="esternopalestra" width="600" height="400">
            </div>
            <h2 class="address">Ci trovi qui:</h2>
            <br>
            <h3 class="address"><i class="fas fa-map-marker-alt"></i> Regione Priorale, 34 - 10059 SUSA (TO)</h3>
            <div class="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                var setting = {"height":194,"width":336,"zoom":17,"queryString":"Individual Training Susa, Regione Priorale, Susa, TO, Italia","place_id":"ChIJHW0PJCC3iUcRvT8-Xw8b-HU","satellite":false,"centerCoord":[45.135859615955795,7.069167000000016],"cid":"0x75f81b0f5f3e3fbd","lang":"it","cityUrl":"/italy/sauze-d-oulx-52164","cityAnchorText":"Mappa di Oulx, Area Nord, Italia","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"236328"};
                var d = document;
                var s = d.createElement('script');
                s.src = 'https://1map.com/js/script-for-user.js?embed_id=236328';
                s.async = true;
                s.onload = function (e) {
                  window.OneMap.initMap(setting)
                };
                var to = d.getElementsByTagName('script')[0];
                to.parentNode.insertBefore(s, to);
              })();</script><a href="https://1map.com/it/map-embed">1 Map</a></div>
    </div>

    <hr>

    <div>
        <h2 class="ptitle"> <a name="lapalestra"></a>La palestra</h2>
        <br>
        <p>
            La nostra idea di Sala Pesi è quella di offrire un ambiente piacevole in cui fare attività fisica in modo corretto.
            <br>Macchinari isotonici, pesi liberi, attrezzi cardiofitness, TRX, Kettlebell, strutture per il Calisthenics; tutti attrezzi che il personale qualificato ti guiderà nell’usare al meglio per il raggiungimento dei tuoi obiettivi.
            <br>Gli istruttori saranno a tua disposizione nel redigere piani di allenamento o darti semplicemente consigli su tipologia di esercizi e correttezza tecnica di movimento.
        </p>
        <img src="img/salapesi1.HEIC" class="salapesi" title="salapesi" alt="salapesi" width="380" height="280">
        <img src="img/salapesi2.HEIC" class="salapesi" title="salapesi" alt="salapesi" width="380" height="280">
        <img src="img/salapesi3.HEIC" class="salapesi" title="salapesi" alt="salapesi" width="380" height="280">
    </div>

    <hr>

    <div>
        <h2 class="ptitle"><a name="corsi"></a>Corsi</h2>
        <p>Offriamo una varietà di corsi aerobici e non, attività che ti consentiranno di mantenerti in forma divertendoti in gruppo.
            <br> Prenotati attraverso l'app di <a id="sportclubby" href="https://www.sportclubby.com/it-IT/" target="blank">Sportclubby</a>! Chiedi informazioni in reception in merito al suo funzionamento.
            <form name="corsi" >
                <p>Visualizza i nostri corsi</p>
                <select name="corsi" id="corsi">
                <option value="aerobico">Aerobici</option>
                <option value="posturale">Posturali</option>
                <input type="button" id="button" value="Seleziona">
                </select>
            </form>

            <div id="risultato"></div>


        </p>
        <br>
        <img src="img/salacorsi.HEIC" class="salacorsi" title="salacorsi" alt="salacorsi" width="500" height="400">



    </div>

    <hr>

    <div>
        <h2 class="ptitle"><a name="servizi"></a>Servizi</h2>
        <h3 class="service">Osteopata <i class="fas fa-user-md"></i></h3>
        <p>
            L’osteopata, mediante l’utilizzo di tecniche diverse, tratta le aree del corpo del paziente in disfunzione per permettere al suo organismo di avviare i processi di auto guarigione e migliorare il suo stato di salute. Il trattamento manipolativo osteopatico ha il fine di eliminare le restrizioni e ristabilire mobilità e compenso alle zone che dopo la diagnosi presentano anomalie funzionali.
            <br> L’osteopata tratta le problematiche muscolo scheletriche, le alterazioni funzionali di visceri ed organi e del sistema cranio sacrale: ognuno di questi aspetti può influenzare negativamente la fisiologia e la postura dell’individuo.
        </p>
        <h3 class="service">Dietista <i class="fas fa-apple-alt"></i></h3>
        <p>
            Il servizio di dietistica offre una consulenza nutrizionale in cui vengono rilevati e monitorati i valori antropometrici e la bioimpedenzometria corporea e in cui viene programmata una dieta personalizzata per i soggetti sani che desiderano perdere peso e/o impostare una corretta alimentazione e per tutti i soggetti affetti da patologie in cui un’alimentazione non corretta è causa o fattore aggravante della patologia stessa.
            <br>Un’attenzione particolare è data all’alimentazione dello sportivo in cui i fabbisogni alimentari e gli obiettivi antropometrici sono molto diversi da quelli del soggetto sedentario.
        </p>
        <h3 class="service">Bia ACC <i class="fas fa-laptop-medical"></i></h3>
        <p>
            L’analisi della composizione corporea basata sulla misura della bioimpedenza Bia ACC è un test semplice e veloce. Viene effettuata tramite quattro patch cutanei che vengono posizionati sulla mano e sul piede, permettendo di valutare: massa magra e massa grassa, acqua corporea totale (come è distribuita, come viene persa e quanta ne dobbiamo assumere ogni giorno), metabolismo basale totale e per organo, peso ideale.
            <br> Sull’analisi dei dati, si potrà sviluppare un adeguato piano di allenamento, che unito ad una adeguata nutrizione, porti all’ottenimento di risultati misurati con dati certi.
        </p>
        <h3 class="service">Massaggi <i class="fas fa-spa"></i></h3>
        <p>
            Stress, affaticamento, contrazioni, dolori o semplicemente la voglia di un po’ di coccole. Sono diversi i motivi per cui un buon massaggio può far bene alla nostra salute. Oltre agli effetti rilassanti, tonificanti, drenanti e decontratturanti, elenchiamo solo alcuni dei benefici non meno importanti come: miglioramento sulla circolazione, stimolazione linfatica, diminuzione dello stress e miglioramento nella qualità del sonno, miglioramento della digestione e della peristalsi, miglioramento della respirazione (più lenta e profonda), potenziamento del sistema immunitario aumento del flusso di ossigeno nei tessuti.
        </p>
    </div>

    <hr>

    <div id="orari">
        <h2 class="ptitle"><a name="orari"></a>Orari</h2>
        <table style="margin-left: auto; margin-right: auto;">
            <tr>
                <th>Lunedì</th>
                <th>Martedì</th>
                <th>Mercoledì</th>
                <th>Giovedì</th>
                <th>Venerdì</th>
                <th>Sabato</th>
                <th>Domenica</th>
            </tr>
            <tr>
                <td>12:00 - 22:00</td>
                <td>10:00 - 22:00</td>
                <td>10:00 - 22:00</td>
                <td>10:00 - 22:00</td>
                <td>10:00 - 22:00</td>
                <td>10:00 - 14:00</td>
                <td>Chiuso</td>
            </tr>
        </table>
    </div>

    <hr>

    <div>
        <h2 class="ptitle"><a name="contatti"></a>Contatti</h2>
        <p>
            Telefona in reception tutte le mattine e i pomeriggi dopo le 16:30 per conoscere i prezzi dei nostri abbonamenti e per ogni altra informazione. Altrimenti, invia una e.mail in qualsiasi momento.
            <br>Matilde sarà felice di risponderti e risolvere ogni tuo dubbio!
            <br>
            <h3 class="contacts"><i class="fas fa-phone"></i>Telefono fisso: 0122 622965</h3>
            <h3 class="contacts"><i class="fas fa-mobile-alt"></i>Telefono cellulare: 392 4865774</h3>
            <h3 class="contacts"><i class="fas fa-envelope"></i>E-mail: individualsusa@gmail.com</h3>
        </p>
    </div>

    </body>
</html>
