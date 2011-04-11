//$Id$
var minimum_value;
var max_value;
Drupal.behaviors.return_flightslist = function(context) {
  $('#flights-list #pre-flights-search-info').css('display', 'block');
  var path = Drupal.settings.basePath + 'flights/showreturn_ajax'; 
  $.ajax({
    url: path,
    data: "searchkey="+$("input[name=searchkey_values]").val()+"&onward_fid="+$('span#spn_onward_fid').attr('value'),
    success: function(data) {
       $('#flights-list #pre-flights-search-info').css('display', 'none');
       $('#flight-search-result-params').css('display','block');
       $('#flights-list').html(data);
   
      }
  });
}
