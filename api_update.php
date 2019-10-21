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

  $id = $_GET["id"];
  $nome = $_GET["nome"];
  $marca = $_GET["marca"];
  $prezzo = $_GET["prezzo"];
  $scadenza = $_GET["data_di_scadenza"];

  $query ="
        UPDATE bevande
        SET  nome = '" . $nome . "',
             marca = '" . $marca ."',
             prezzo = '" . $prezzo . "',
             data_di_scadenza = '" . $scadenza . "'
        WHERE id = '" . $id . "'
    ";

  $res = $conn -> query($query);

  // echo $query;
  // die();


  echo json_encode($bevande);
  $conn -> close();

?>
