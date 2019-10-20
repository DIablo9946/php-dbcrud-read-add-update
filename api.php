<?php

  header('Content-Type: application/json');

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "beverangeshop";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn -> connect_error){

    var_dump($conn);
    var_dump("error");
    die();
  }


  $bevande = [];

  $query = "SELECT id, nome, marca, prezzo, data_di_scadenza
                  FROM bevande";

  $res = $conn -> query($query);

  if ($res && $res -> num_rows > 0) {

        while($row = $res -> fetch_assoc()) {

        $bevande[] = $row;

        }
      };


  $bevande[] = $res;

  echo json_encode($bevande);
  $conn -> close();

?>
