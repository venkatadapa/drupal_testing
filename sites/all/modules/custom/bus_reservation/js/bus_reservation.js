var source_destination_pairs = new Array();
var from_cities = new Array();

Drupal.behaviors.bus_reservation = function () {
source_destination_pairs = Drupal.settings.source_destination_pair;
from_cities = Drupal.settings.from_cities;
$(".book_button").click(bindbookevent);
}

function bindbookevent() {
  getSeatmap($(this).attr('trip_id'), $(this).attr('passengers'),$(this).attr('seat_type'));
}

function filterby_pickup_points(pickupPointid) {
  $(".trip_data").each(function() {
    $(this).show();
    if (pickupPointid != $(this).attr('id') && pickupPointid != -1)
      $(this).hide();
  });
}

function day_results(fromCity,toCity,journey_date,seat_type_id,passengers) {
  window.location = Drupal.settings.basePath +'bus_reservation/check_availability/'+fromCity+"/"+toCity+"/"+journey_date+"/"+seat_type_id+"/"+passengers;
}

function get_destination_cities(cityId) {
  document.getElementById('edit-to-cities').options.length=0;
  if (source_destination_pairs[cityId].length > 0) {
    var destinations = new Array();
    var destinations_object = new Object();
    destinations = source_destination_pairs[cityId].split(",");
    var x;
    var source_destinations = new Object();
    for (x in destinations)
      {
	source_destinations[destinations[x]]= from_cities[destinations[x]];
	destinations_object[from_cities[destinations[x]]] = destinations[x];
      }
    //using the same variable destinations array below to store only the values for sorting.
    var i=0;
    for (x in source_destinations)
      {
	destinations[i] = source_destinations[x];
	i++;
      }
    
    destinations.sort();
    var i=0;
    var optn;
    for (x in destinations)
      {
	optn = document.createElement("OPTION");
	optn.text = destinations[x];
	optn.value = destinations_object[destinations[x]];
	document.getElementById('edit-to-cities').options.add(optn);
	i++;
      }
  }

}

function getSeatmap(tripId,no_of_passengers,seat_type)
{ 
  window.location = Drupal.settings.basePath +'bus_reservation/popupSeatMap?id='+tripId+'&no_of_passengers='+no_of_passengers;
}

function swapImage(obj,passNo,seatFare,rowId,limit, seat, sleep){
     //alert(obj.className);
     //alert(obj.innerHTML); //gives seat number
     var passengers_limit = limit;
     var seater_selectors = document.getElementsByClassName("currentSeater");
     var sleeper_selectors = document.getElementsByClassName("currentSleeper");
     var total_selectors = seater_selectors.length + sleeper_selectors.length;
     var fare = obj.title;
     var seatFare = fare.split(" ")[2];
        if (obj.className=='availableSleeper'  && total_selectors < passengers_limit+1 && sleep) {
         obj.className='currentSleeper';
         } else if (obj.className=='availableSeater' && total_selectors < passengers_limit+1 && seat){
           obj.className='currentSeater';
         } else if (obj.className=='currentSleeper'){
          obj.className='availableSleeper';
         } else if (obj.className=='currentSeater'){
          obj.className='availableSeater';
         }
     
}

function holdSeat() {

window.location = Drupal.settings.basePath +'bus_reservation/booking'

}
