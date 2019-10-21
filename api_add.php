<?php

  header('Content-Type: application/json');

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $databasename = "beverangeshop";

  $conn = new mysqli($servername, $username, $password, $databasename);

  if ($conn -> connect_error){

    var_dump($conn);
    var_dump("error");
    die();
  }



  $nome = $_GET["nome"];
  $marca = $_GET["marca"];
  $prezzo = $_GET["prezzo"];
  $scadenza = $_GET["data_di_scadenza"];

  $query = "
    INSERT INTO bevande (nome, marca, prezzo, data_di_scadenza)
    VALUES
      ('" . $nome . "', '" . $marca . "', '" . $prezzo . "', '"  . $scadenza . "')
    ";

  $res = $conn -> query($query);


  // echo $query;
  // die();

  echo json_encode($res);
  $conn -> close();

?>

<!--
-> richiama una funzione o una proprieta di un oggetto
=> assegna un valore alla chiave -->
