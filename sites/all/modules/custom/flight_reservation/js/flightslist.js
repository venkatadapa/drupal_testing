//$Id$
var minimum_value;
var max_value;
Drupal.behaviors.flightslist = function(context) { 
  $('#flights-list #pre-flights-search-info').css('display', 'block');
  var path = Drupal.settings.basePath + 'flights/show2' 
  $.ajax({
    url: path,
    data:'searchkey='+$("input[name=searchkey_values]").val(),
    error: function() {
      $('#flights-list #pre-flights-search-info').css('display', 'none');
      alert('Internal Server error, Please Try again later');
      document.location.href = Drupal.settings.basePath+'flights/search';
   },
   success: function(data) {
       $('#flights-list #pre-flights-search-info').css('display', 'none');
       $('#flight-search-result-params').css('display','block');
       $('#flights-list').html(data);
   }
  });
}
