function init(){
  console.log("Hello");
  getData();
};

$(document).ready(init);

function getData(){

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
