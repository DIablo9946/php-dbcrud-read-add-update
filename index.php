<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php crud add and update</title>
    <link rel="stylesheet" href="style.css">
    <script  src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.4.2/handlebars.js" integrity="sha256-hSzapznWRy/aOZkctlN03an9DxCLlN8ZCQS0lxntiHg=" crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="container">
      <h2 class="add">Add new information <input type="button"></input></h2>
    </div>
  <script id="template" type="text/x-handlebars-template">
      <div class="wrapper" data-id="{{id}}">
        <p>Nome bevanda: {{nome}}</p>
        <p>Marca della bevanda: {{marca}}</p>
        <p>Prezzo : {{prezzo}} euro</p>
        <p>Data di scadenza: {{data_di_scadenza}}</p>
        <button class="del">X</button>
        <h4 class="update">Update</h4>
      <div>
  </script>
  <script type="text/javascript" src="action.js"></script>
  </body>
</html>
