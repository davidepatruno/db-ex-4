$(document).ready(function(){
  $.ajax({
    url: 'http://localhost/db-ex-4/server.php',
    method: 'GET',
    success: function(data)
    {
      // var results = JSON.parse(data);
      console.log(data);
      printTable(results);

    },
    error: function()
    {
      alert("si è verificato un errore");
    }
  });
});


function printTable(results){
  for (var i=0; i < results.lenght; i++){
    var result = results[i];
    var source = $('#entry-template').html();
    var template = Handlebars.compile(source);

    var context = {
      'id' : result.id,
      'prenotazione_id' : result.prenotazione_id,
      'ospite_id' : result.ospite_id,
    };
    var html = template(context);

    $('tbody').append(html);
  };
};
