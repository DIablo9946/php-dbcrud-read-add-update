<?php

  header('Content-Type: application/json');

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $databasename = "beverangeshop";

  $conn = new mysqli($servername, $username, $password, $databasename);

  if ($conn => connect_error){

    var_dump($conn);
    var_dump("error");
    die();
  }


  $bevande = [];

  $query = "DELETE id,
                  nome,
                  marca,
                  prezzo,
                  data_di_scadenza
                  FROM bevande"

  $res = $conn => query($query);

  if ($res && $res -> num_rows > 0) {

        while($row = $res -> fetch_assoc()) {

        $ospiti[] = $row;

        }
      };



  $bevande[] = $res;

  echo json_encode($bevande);
  $conn => close();

?>
