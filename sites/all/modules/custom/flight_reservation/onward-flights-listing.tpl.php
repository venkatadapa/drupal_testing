<?php 
//$Id$ 
?>
<div id="flight-search-result-params" style="display: none;">
  <span id="prevday-param" class="param-item"><a href="javascript://" id="previous_day_link">Previous Day</a></span>
  <span id="mid-area" class="param-item">Book a Departure flight from the below options</span>
  <span id="nextday-param" class="param-item"><a href="javascript://" id="next_day_link">Next Day</a></span>
</div>
<div id="light" class="white_content">Kindly wait for few seconds, we are processing your request.
Below is your filter flight/Carrier.<br /><img src="/sites/all/modules/custom/flight_reservation/images/ajax-loader.gif" /></div>
<div id="fade" class="black_overlay"></div>
  <div id="flights-list">
  <div id="pre-flights-search-info">
  <div id="loaderinfo">
  <p><h2>Searching for the best airfare deals for you</h2></p>
  <img src="/sites/all/modules/custom/flight_reservation/images/ajax-loader.gif"/>
  </div>
  <div id="tripinfo">
  <div class="trip_loc_details">
  From City: <?php print $flight_params['leaving_from'];?><br />
  To City:  <?php print $flight_params['going_to']; ?><br />
  </div>
  <div class="trip_date_details">
    Departure Date: <?php print $flight_params["departure_date"]; ?><br />
 <?php if(!empty($flight_params["return_date"])) { 
    print 'Return Date: '.$flight_params["return_date"]; } ?> <br />
 </div>
  </div>
  <div class="cleardiv"></div>
  <div id="ad-block">
  </div>
  <div class="cleardiv"></div>
  </div>
  </div>
