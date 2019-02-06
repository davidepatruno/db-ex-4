<?php
  $servername = 'localhost';
  $username = 'root';
  $password = 'asd';
  $dbName = 'hotel-booleana';

  $connessione = new mysqli($servername, $username, $password, $dbName);

    if ($connessione->connect_error){
      die(" si è verificato un errore");
    };

  $sql = 'SELECT `prenotazioni_has_ospiti.id`, `prenotazioni_has_ospiti.prenotazione_id`, `prenotazioni_has_ospiti.ospite_id`, `ospiti.name`
  FROM `prenotazioni_has_ospiti`
  INNER JOIN `ospiti`
  ON `prenotazioni_has_ospiti.ospite_id` = `ospiti.id`';
  $result = $connessione->query($sql);

  $reservations = [];

    if ($result->num_rows > 0){
      while ($row = $result->fetch_assoc()){
        // echo "La stanza" . $row['room_number'] . "si trova al piano" . $row['floor'];
        $reservations[] = $row;
      }
    } else {
      die("non ci sono risultati");
    };



  $connessione->close();


 ?>
