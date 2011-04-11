//$Id$
Drupal.behaviors.flight_search = function(context) {
  if(Drupal.settings.hide_airlines=="yes") {
    $("[id^=edit-airlines-]").css({display:'none'});
  }
  $('#edit-return-time-datepicker-popup-0').attr("disabled", true);
  if($('input:radio[name=trip_type]:checked').val() == 'R') {
      $('#edit-return-time-datepicker-popup-0').attr("disabled", false);
  }
  $("[id^=edit-airlines-]").attr("checked","checked");
  $("[id^=edit-trip-type-]").click(function () {
        if($('input:radio[name=trip_type]:checked').val() == 'R') {
          $('#edit-return-time-datepicker-popup-0').attr("disabled", false);
        } else {
          $('#edit-return-time-datepicker-popup-0').attr("disabled", true);
          $('#edit-return-time-datepicker-popup-0').val('');
        }  
  });
}
//function to display fare rules when customer hover the mouse to farerules link
function showrules(divid) {
  document.getElementById(divid).style.display='block';
}
function hiderules(divid) {
  document.getElementById(divid).style.display='none';
}

