<!-- Stampiamo a schermo una tabella con tutte le prenotazioni (id, prenotazione_id e ospite_id) da prenotazioni_has_ospiti. Quando cliccate sul un link (che sia l'id dell'ospite, un bottone o qualsiasi altra cosa) andrete in un'altra pagina che in base all'id dell'ospite cliccato ritornerà i dati anagrafici di quell'ospite. -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div class="container">
      <h1>PRENOTAZIONI STANZE</h1>
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>id prenotazione</th>
            <th>id ospite</th>
          </tr>
        </thead>
        <tbody>
          
        </tbody>
      </table>
    </div>

    <script id="entry-template" type="text/x-handlebars-template">
      <tr>
        <td>{{id}}}</td>
        <td>{{prenotazione_id}}}</td>
        <td>{{ospite_id}}}</td>
        <!-- <td></td> -->
      </tr>
    </script>

    <script src="main.js" charset="utf-8"></script>
  </body>
</html>
