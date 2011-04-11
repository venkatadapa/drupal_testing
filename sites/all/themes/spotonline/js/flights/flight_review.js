//$Id$
Drupal.behaviors.flight_review = function(context) {
  $("#continue_to_payment").click(function() {
     if( $('input:checkbox[name=terms_conditions]').is(':checked') ) {
         return true;
     } else {
       alert("Check terms and conditions");
       return false;
     }
  });  
}


