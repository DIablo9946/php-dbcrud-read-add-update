function init(){
  console.log("Hello");
  getData();
  $(document).on("click", ".wrapper .del", deleteData);
  $(document).on("click", "#container .add", addData);
};

$(document).ready(init);

function getData(){

  $(".wrapper").html("");

  $.ajax({
    url : "api.php",
    method : "GET",
    success : function(data){
      console.log(data);
      printData(data);
    },
    error : function(data){

    }
  });
};

function printData(data){

  for (var i =0; i < data.length; i++){
    var d = data[i];

    var source   = $("#template").html();
    var template = Handlebars.compile(source);

    var context = {
      id: d.id,
      nome : d.nome,
      marca : d.marca,
      prezzo : d.prezzo,
      data_di_scadenza: d.data_di_scadenza
    };
    var html = template(context);

    $("#container").append(html);
  }
}

function getElementId(me){
  var choose = me.parent();
  var id = choose.data("id");

  return id;
  console.log(id);
};


function deleteData(){

  var id = getElementId($(this));

  $.ajax({
    url : "api_delete.php",
    method : "GET",
    data : {
      id : id
    },
    success : function(data){
      getData();
    },
    error : function(data){

    }
  });
};


function addData(){

  var nome = prompt("Iserisci il nome della bevanda");
  var marca = prompt("Inserisci la marca della bevanda");
  var prezzo = prompt("Inserisci il prezzo del prodotto");
  var data_di_scadenza = prompt("Inserisci la data della scadenza");

  $.ajax({
    url : "api_add.php",
    method : "GET",
    data : {
      nome : nome,
      marca : marca,
      prezzo : prezzo,
      data_di_scadenza: data_di_scadenza
    },
    success : function(data){
      console.log(data);
      getData();
    },
    error : function(data){

    }
  });
};
