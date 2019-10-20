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

  $query = "DELETE FROM bevande
            WHERE id= ". $id ."";

  $res = $conn -> query($query);




  echo json_encode($res);
  $conn -> close();

?>
