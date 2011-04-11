<div id="bus-reservation-search-results">
<div class="location-params">
<?php if(is_array($trip_details)) { ?>
  <span><?php print $trip_details[0]['fromCity']; ?> to <?php print $trip_details[0]['toCity']; ?></span>
</div>
<div class="other-params">
  <span id="departon-param" class="param-item">Depart on: <span class="departon-value"><?php $departure_time = print date("D M, d",strtotime($trip_details[0]['tripTime'])); ?></span></span>
  <span id="passenger-param" class="param-item">Passengers: <span class="passenger-value"><?php print $passengers; ?></span></span>
  <span id="seattype-param" class="param-item">Type: <span class="passenger-value"><?php print $seat_type; ?></span></span>
</div>
<div class="search-results-title">
  <span class="location-data"><b><?php print $trip_details[0]['fromCity']; ?> to <?php print $trip_details[0]['toCity']; ?></b></span> 
  <span class="results-count">Showing <?php print count($trip_details); ?> of <?php print count($trip_details); ?> buses</span>
</div>
<div class="search-results-params">
<?php $journey_date_next = date("d-m-Y",strtotime(date("Y-m-d", strtotime($trip_details[0]['tripTime'])) . " +1 day")); ?>
<span class="nextday-param"><a href="Javascript:day_results(<?php echo $fromCityid; echo ",".$toCityid; echo ",'".$journey_date_next."'"; echo ",".$seat_type_id; echo ",".$passengers;?>);">Next Day</a></span> 
  <?php $journey_date_prev = date("d-m-Y",strtotime(date("Y-m-d", strtotime($trip_details[0]['tripTime'])) . " -1 day")); ?>
<span class="prevday-param"><a href="Javascript:day_results(<?php echo $fromCityid; echo ",".$toCityid; echo ",'".$journey_date_prev."'"; echo ",".$seat_type_id; echo ",".$passengers;?>);">Previous Day</a></span>

  <span class="pickup-param">Pickup Point: 
  <select id="pickup-points-filter" onChange="filterby_pickup_points(this.value)"> 
  <option value="-1">Any Pickup Point</option>
  <?php foreach($trip_details as $data) { ?>
    <?php if (is_array($data['pickupPoints'])) { ?>
      <?php foreach($data['pickupPoints'] as $pp) { ?>
        <option value =<?php echo $pp['pickupPointid'] ?>>
          <?php foreach($pp as $key => $val) { ?>
            <?php if ($key == 'name') echo $val; ?>
          <?php } ?>
        </option>
      <?php } ?>
    <?php } ?>
  <?php } ?>\
  </select>
  </span>
</div>
	
<table id="bus-reservation-search-results-tbl" border="0" cellpadding="0" cellspacing="0">
<tr>
	<th>Pickup</th>
	<th>Departs</th>
	<th>Reaches</th>
	<th>Bus Type</th>
	<th>Operator</th>
	<th>Price</th>
	<th>Disc.</th>
	<th>Seat/Slp.</th>
	<th>Book Type</th>
</tr>
<?php 
foreach($trip_details as $data) { 
if(is_array($data)) {
?>

<tr id = "<?php echo $data['pickupPoints']['pickupPoint']['pickupPointid']; ?>" class="trip_data">
<td id="pickup">
<?php
if(is_array($data['pickupPoints'])){?>
<select id="pickupPoints" onChange="displayTripTime()">
<?php foreach($data['pickupPoints'] as $pp) {
?><option>
<?php foreach($pp as $key => $val)
{ ?>
<?php if($key == 'name')  echo $val; if($key == 'arivalTime') echo " - ".$val;?>
<?php }?>
</option>
<?php }?>
</select>
<?php  }  ?>

</td>
<?php  
$reaches = strtotime($data['arrivalTime']);
$starts = strtotime($data['tripTime']);
?>
<td id="tripTime"><?php echo date("h:i A",$starts);?></td>
<td id="reaches"><?php echo date("h:i A", $reaches); ?> </td>
<td id="bustype"><?php echo $data['busType']; ?> </td>
<td id="operator"><?php echo $data['groupName']; ?> </td>
<td id="price"><?php echo $data['seatFare']; ?></td>
<td id="discount">0.0</td>
<td id="seattype"><?php echo $data['seatType'];?></td>
<td id="book-button"><button type="button" class="book_button" trip_id=<?php echo $data['tripId']; ?> passengers = <?php echo $passengers;?> seat_type = <?php echo $seat_type_id; ?> >Book</button></td>
</tr>
<?php }
}?>
</table>
<?php } else { ?>
There are no trips available for the route selected.
  <?php } ?>
</div>
