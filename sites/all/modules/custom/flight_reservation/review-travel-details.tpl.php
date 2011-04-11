<?php
//$Id$
$session_id = $details['sessionID'];
if($details['responsecode']=='200-success') {
  $onward_flight_reference_id = $details['onward_flight_reference_id'];
  $onward_seat_available = $details['onward_seat_available'];
  $onward_fare = $details['onward_FareAmount'];
  $onward_taxes = $details['onward_taxes'];
  $onward_fare_changed = $details['onward_FareChanged'];
  $onward_discount = $details['onward_Discount'];
  $onward_seat_available = $details['onward_seat_available'];
  $return_flight_reference_id = $details['return_flight_reference_id'];
  $return_seat_available = $details['return_seat_available'];
  $return_fare = $details['return_FareAmount'];
  $return_taxes = $details['return_taxes'];
  $return_fare_changed = $details['return_FareChanged'];
  $return_discount = $details['return_Discount'];
  $return_seat_available = $details['return_seat_available'];  
}
//drupal_set_message('<pre>'.print_r($flight_details_onward['Onward'],TRUE));
//print 'Linked flight basefare info:'. $flight_details_onward['Onward']['linked_flight']['0']['basefare']['0'];
/*echo "<h2>Onward Flight information</h2>"; 
echo 'Ref ID:'. $onward_flight_reference_id .'<br />';
echo 'Seat Available:'. $onward_seat_available .'<br />';
echo 'Fare:'. $onward_fare .'<br />';
echo 'Taxes:'. $onward_taxes .'<br />';
echo 'fare_changed:'. $onward_fare_changed .'<br />';
echo 'Discount:'. $onward_discount .'<br />'; 
$return_flight_info = ''; 
if(!empty($return_flight_reference_id)) {
echo '<hr />';
echo "<h2>Return Flight information</h2>";
echo 'Ref ID:'. $return_flight_reference_id .'<br />';
echo 'Seat Available:'. $return_seat_available .'<br />';
echo 'Fare:'. $return_fare .'<br />';
echo 'Taxes:'. $return_taxes .'<br />';
echo 'fare_changed:'. $return_fare_changed .'<br />';
echo 'Discount:'. $return_discount .'<br />';
$return_flight_info = '&ReturnFid='.$return_flight_reference_id; 
}*/
//drupal_set_message('<pre>Onward'.print_r($flight_details_onward,TRUE));
// drupal_set_message('<pre>Return'.print_r($flight_details_return,TRUE));

?>
<div class="review-item">
  <table class="review-item-tbl" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td class="review-num">1.</td>
    <td class="review-hdg">Review Travel Details</td>
  </tr>
  </table>
</div>
<table id="review-travel-details" cellpadding="0" cellspacing="0" border="0">
<tr>
  <th></th>
  <th>Airline/Carrier</th>
  <th>FareType</th>
  <th>Departure</th>
  <th>Arrival</th>
  <th>Stops</th>
  <th>Duration</th>
</tr>
 <!--Selected Onward flight info start-->
  <?php 
  $onward_direct_flights_count = count($flight_details_onward['Onward']['airline_name']);
  $onward_linked_flights_count = count($flight_details_onward['Onward']['linked_flight']);
  for($index=0; $index < $onward_direct_flights_count; $index++) { 
  ?>
  <tr class="flight-search-row">
  <td>
    <img src="" alt="" />
    Departing Flight
  </td>
  <td id="airline-name-<?php print $index; ?>" class="airline-name">
      <img src="/misc/forum-new.png" alt="dummy-image" /><br />
      <?php print $flight_details_onward['Onward']['airline_name'][$index]; ?><br />
      <?php print $flight_details_onward['Onward']['carrier_code'][$index]. '-'. $flight_details_onward['Onward']['flight_number'][$index]; ?></td>
  <td id="faretype-<?php print $index; ?>" class="faretype"><?php print $flight_details_onward['Onward']['faretype'][$index]; ?> <br />
    <a href="javascript://" onMouseover="showrules('farerules-<?php print $index;?>')" onMouseout="hiderules('farerules-<?php print $index;?>')">Fare rules</a>
    <div id="farerules-<?php print $index; ?>" class="fare-rules"><?php print $flight_details_onward['Onward']['fare_rules'][$index]; ?></div>
  </td>
  <td class="origin"><?php print $flight_details_onward['Onward']['origin'][$index].'<br />'. $flight_details_onward['Onward']['depart_time'][$index]; ?></td>
  <td class="destination"><?php print $flight_details_onward['Onward']['destination'][$index].'<br />'.$flight_details_onward['Onward']['arrival_time'][$index]; ?></td>
  <td class="via-stops"><?php print $flight_details_onward['Onward']['via_stops'][$index]; ?></td>
  <td class="time-slot">Duration:<?php print $flight_details_onward['Onward']['timeslot'][$index]; ?></td>
  </tr>
  <tr class="flight-search-spacing-row">
    <td colspan="6">&nbsp;</td>
  </tr>
<?php } //for loop end here ?> 

<!--Linked Flights Information Start here-->
<?php for($linked_flight_index=0; $linked_flight_index < $onward_linked_flights_count; $linked_flight_index++) { ?>
  <tr class="linked-flight-starting-row">
    <td colspan="6"></td>
  </tr>
 
  <?php for($info_index=0; $info_index < count($flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['airline_name']); $info_index++) { 
  ?>
   <tr class="linked-flight-row">
   <?php if($info_index==0) { ?>
   <td class="price" valign="baseline" rowspan="<?php print count($flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['airline_name'])+
  count($flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['airline_name'])-1; ?>">
  Onward Flight  
  </td>
  <?php } ?>
  <td id="airline-name-<?php print $info_index; ?>" class="airline-name">
      <img src="/misc/forum-new.png" alt="dummy-image" /><br />
      <?php print $flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['airline_name'][$info_index]; ?><br />
      <?php print $flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['carrier_code'][$info_index]. '-'. 
      $flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['flight_number'][$info_index]; ?></td>
  <td id="faretype-<?php print $info_index; ?>" class="faretype"><?php print $flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['faretype'][$info_index]; ?> <br />
   <a href="javascript://" onMouseover="showrules('linked_farerules-<?php print $linked_flight_index.$info_index;?>')" onMouseout="hiderules('linked_farerules-<?php print $linked_flight_index.$info_index;?>')">Fare rules</a>
   <div id="linked_farerules-<?php print $linked_flight_index.$info_index; ?>" class="fare-rules"><?php print $flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['fare_rules'][$info_index]; ?></div>
  </td>
  <td class="origin"><?php print $flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['origin'][$info_index].'<br />'. 
  $flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['depart_time'][$info_index]; ?></td>
  <td class="destination"><?php print $flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['destination'][$info_index].'<br />'.
  $flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['arrival_time'][$info_index]; ?></td>
  <td class="via-stops"><?php print $flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['via_stops'][$info_index]; ?></td>
  <td class="time-slot">Duration:<?php print $flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['timeslot'][$info_index]; ?></td>
 </tr>  
    <?php if (($info_index+1) < count($flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['airline_name'])) {
      print '<tr class="linked-flight-mid-row">';
      print '<td height="13" align="center" class="linked-flight-mid-cell" colspan="6">Change planes in '.$flight_details_onward['Onward']['linked_flight'][$linked_flight_index]['destination'][$info_index].'</td>';
      print '</tr>';
    } 
  }
?>  
  <tr class="linked-flight-ending-row">
    <td colspan="7"></td>
  </tr>
  <tr class="flight-search-spacing-row">
    <td colspan="7">&nbsp;</td>
  </tr>
<?php } //for loop end here ?>
<!--Linked Flights Information End here-->

<!--Onward flight info end here-->

<!--Selected Return flight info start-->
  <?php 
  $return_direct_flights_count = count($flight_details_return['Return']['airline_name']);
  $return_linked_flights_count = count($flight_details_return['Return']['linked_flight']);
  for($index=0; $index < $return_direct_flights_count; $index++) { ?>
  <tr class="flight-search-row">
  <td>
    <img src="" alt="" />
    Return Flight
  </td>
  <td id="airline-name-<?php print $index; ?>" class="airline-name">
      <img src="/misc/forum-new.png" alt="dummy-image" /><br />
      <?php print $flight_details_return['Return']['airline_name'][$index]; ?><br />
      <?php print $flight_details_return['Return']['carrier_code'][$index]. '-'. $flight_details_return['Return']['flight_number'][$index]; ?></td>
  <td id="faretype-<?php print $index; ?>" class="faretype"><?php print $flight_details_return['Return']['faretype'][$index]; ?> <br />
    <a href="javascript://" onMouseover="showrules('farerules-return-<?php print $index;?>')" onMouseout="hiderules('farerules-return-<?php print $index;?>')">Fare rules</a>
    <div id="farerules-return-<?php print $index; ?>" class="fare-rules"><?php print $flight_details_return['Return']['fare_rules'][$index]; ?></div>
  </td>
  <td class="origin"><?php print $flight_details_return['Return']['origin'][$index].'<br />'. $flight_details_return['Return']['depart_time'][$index]; ?></td>
  <td class="destination"><?php print $flight_details_return['Return']['destination'][$index].'<br />'.$flight_details_return['Return']['arrival_time'][$index]; ?></td>
  <td class="via-stops"><?php print $flight_details_return['Return']['via_stops'][$index]; ?></td>
  <td class="time-slot">Duration:<?php print $flight_details_return['Return']['timeslot'][$index]; ?></td>
  </tr>
  <tr class="flight-search-spacing-row">
    <td colspan="6">&nbsp;</td>
  </tr>
<?php } //for loop end here 
?> 

<!--Linked Flights Information Start here-->
<?php for($linked_flight_index=0; $linked_flight_index < $return_linked_flights_count; $linked_flight_index++) { ?>
  <tr class="linked-flight-starting-row">
    <td colspan="6"></td>
  </tr>
 
  <?php for($info_index=0; $info_index < count($flight_details_return['Return']['linked_flight'][$linked_flight_index]['airline_name']); $info_index++) { 
  ?>
   <tr class="linked-flight-row">
   <?php if($info_index==0) { ?>
   <td class="price" valign="baseline" rowspan="<?php print count($flight_details_return['Return']['linked_flight'][$linked_flight_index]['airline_name'])+
  count($flight_details_return['Return']['linked_flight'][$linked_flight_index]['airline_name'])-1; ?>">
  Onward Flight  
  </td>
  <?php } ?>
  <td id="airline-name-<?php print $info_index; ?>" class="airline-name">
      <img src="/misc/forum-new.png" alt="dummy-image" /><br />
      <?php print $flight_details_return['Return']['linked_flight'][$linked_flight_index]['airline_name'][$info_index]; ?><br />
      <?php print $flight_details_return['Return']['linked_flight'][$linked_flight_index]['carrier_code'][$info_index]. '-'. 
      $flight_details_return['Return']['linked_flight'][$linked_flight_index]['flight_number'][$info_index]; ?></td>
  <td id="faretype-<?php print $info_index; ?>" class="faretype"><?php print $flight_details_return['Return']['linked_flight'][$linked_flight_index]['faretype'][$info_index]; ?> <br />
   <a href="javascript://" onMouseover="showrules('linked_farerules-<?php print $linked_flight_index.$info_index;?>')" onMouseout="hiderules('linked_farerules-<?php print $linked_flight_index.$info_index;?>')">Fare rules</a>
   <div id="linked_farerules-<?php print $linked_flight_index.$info_index; ?>" class="fare-rules"><?php print $flight_details_return['Return']['linked_flight'][$linked_flight_index]['fare_rules'][$info_index]; ?></div>
  </td>
  <td class="origin"><?php print $flight_details_return['Return']['linked_flight'][$linked_flight_index]['origin'][$info_index].'<br />'. 
  $flight_details_return['Return']['linked_flight'][$linked_flight_index]['depart_time'][$info_index]; ?></td>
  <td class="destination"><?php print $flight_details_return['Return']['linked_flight'][$linked_flight_index]['destination'][$info_index].'<br />'.
  $flight_details_return['Return']['linked_flight'][$linked_flight_index]['arrival_time'][$info_index]; ?></td>
  <td class="via-stops"><?php print $flight_details_return['Return']['linked_flight'][$linked_flight_index]['via_stops'][$info_index]; ?></td>
  <td class="time-slot">Duration:<?php print $flight_details_return['Return']['linked_flight'][$linked_flight_index]['timeslot'][$info_index]; ?></td>
 </tr>  
    <?php if (($info_index+1) < count($flight_details_return['Return']['linked_flight'][$linked_flight_index]['airline_name'])) {
      print '<tr class="linked-flight-mid-row">';
      print '<td height="13" align="center" class="linked-flight-mid-cell" colspan="6">Change planes in '.$flight_details_return['Return']['linked_flight'][$linked_flight_index]['destination'][$info_index].'</td>';
      print '</tr>';
    } 
  }
?>  
  <tr class="linked-flight-ending-row">
    <td colspan="7"></td>
  </tr>
  <tr class="flight-search-spacing-row">
    <td colspan="7">&nbsp;</td>
  </tr>
<?php } //for loop end here ?>
<!--Linked Flights Information End here-->

<!--Selected return flight info end here-->
</table>
<br />
<div class="review-item">
  <table class="review-item-tbl" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td class="review-num">2.</td>
    <td class="review-hdg">Review Fare Details</td>
  </tr>
  </table>
</div>
<table id="review-fare-details" cellpadding="0" cellspacing="0" border="0">
<tr>
  <th>Traveller Type</th>
  <th>Passengers</th>
  <th>Base Fare</th>
  <th>Fees and Surcharges</th>
  <th>Total</th>
</tr>
<?php
$adult_total = '0';
$children_total = '0';
$infants_total = '0';
$adults_return_basefare = '0';
$adults_return_taxes = '0';
$adults_return_discount = '0';
 if(isset($flight_details_onward['Onward']['linked_flight'])) {
  $adults_onward_basefare = $flight_details_onward['Onward']['linked_flight']['0']['basefare']['0']; 
  $adults_onward_taxes = $flight_details_onward['Onward']['linked_flight']['0']['taxes']['0']; 
  $adults_onward_discount = $flight_details_onward['Onward']['linked_flight']['0']['discount']['0']; 
 } else {
  $adults_onward_basefare = $flight_details_onward['Onward']['basefare']['0'];
  $adults_onward_taxes = $flight_details_onward['Onward']['taxes']['0'];
  $adults_onward_discount = $flight_details_onward['Onward']['linked_flight']['0']['discount']['0']; 
 }
 if(isset($flight_details_return['Return']['linked_flight'])) {
  $adults_return_basefare = $flight_details_return['Return']['linked_flight']['0']['basefare']['0']; 
  $adults_return_taxes = $flight_details_return['Return']['linked_flight']['0']['taxes']['0']; 
  $adults_return_discount = $flight_details_return['Return']['linked_flight']['0']['discount']['0']; 
 } else if(isset($flight_details_return['Return'])) {
  $adults_return_basefare = $flight_details_return['Return']['basefare']['0'];
  $adults_return_taxes = $flight_details_return['Return']['taxes']['0'];
  $adults_return_discount = $flight_details_return['Return']['linked_flight']['0']['discount']['0']; 
 } 
 $adults_final_basefare = $adults_onward_basefare + $adults_return_basefare;
 $adults_final_taxes = $adults_onward_taxes + $adults_return_taxes;
 $adults_final_discount = $adults_onward_discount + $adults_return_discount;
if($submitted['adults']>0) {?>
<tr>
<td>Adult</td>
<td><?php print $submitted['adults'];?></td>
<td>Rs. <?php print $submitted['adults']*$adults_final_basefare.' '.'('.$submitted['adults'].'X'.$adults_final_basefare.')';?></td>
<td>Rs. <?php print $submitted['adults']*$adults_final_taxes; ?></td>
<td>Rs. <?php $adult_total = ($submitted['adults']*$adults_final_basefare)+($submitted['adults']*$adults_final_taxes);
print $adult_total;?></td>
</tr>
<?php } ?>
<?php if($submitted['children']>0) {?>
<tr>
<td>Child</td>
<td><?php print $submitted['children'];?></td>
<td>Rs. <?php print $submitted['children']*$adults_final_basefare.' '.'('.$submitted['children'].'X'.$adults_final_basefare.')';?></td>
<td>Rs. <?php print $submitted['children']*$adults_final_taxes; ?></td>
<td>Rs. <?php $children_total = ($submitted['children']*$adults_final_basefare)+($submitted['children']*$adults_final_taxes);
print $adult_total;?></td>
</tr>
<?php } ?>
<?php if($submitted['infants']>0) {?>
<tr>
  <td>Infant</td>
<td><?php print $submitted['infants'];?></td>
<td>Rs. <?php print $submitted['infants']*$adults_final_basefare.' '.'('.$submitted['infants'].'X'.$adults_final_basefare.')';?></td>
<td>Rs. <?php print $submitted['infants']*$adults_final_taxes; ?></td>
<td>Rs. <?php $infants_total = ($submitted['infants']*$adults_final_basefare)+($submitted['infants']*$adults_final_taxes);
print $infants_total;?></td>
</tr>
<tr>
<?php } ?>
  <td colspan="3">&nbsp;</td>
  <td id="total-fare">Total:</td>
  <td id="total-fare-value">Rs. <?php print $adult_total+$children_total+$infants_total;?></td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
  <td id="grand-total-fare">Grand Total:</td>
  <td id="grand-total-fare-value">Rs. <?php print number_format($adult_total+$children_total+$infants_total);?></td>
</tr>
</table>
<br />
<div class="review-item">
  <table class="review-item-tbl" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td class="review-num">3.</td>
    <td class="review-hdg">Review the Rules & Regulations</td>
  </tr>
  </table>
</div>
<table id="rules-restrictions" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td>
    <ul>
      <li>All purchases are subject to cancellation and date change fees.</li>
      <li>Once purchased, tickets are non-transferable and name changes are not permitted.</li>
      <li>Read the overview of all the <a herf="#">Rules & Restrictions</a> applicable to this fare.</li>
    </ul>
    <div class="term-checkbox">
      <input type='checkbox' name='terms_conditions' id="terms_conditions" /> I understand and agree with the rules and restrictions of this fare, the <a href="/node/1" target="_blank">Privacy Policy</a> and the <a href="/node/2" target="_blank">Terms & Conditions (User Agreement)</a> of Spot Online 
    </div>
  </td>
</tr>
</table>
<br />
<div class="review-item">
  <table class="review-item-tbl" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td class="review-num">4.</td>
    <td class="review-hdg">Select a Booking Option</td>
  </tr>
  </table>
</div>
<br />
<table id="without-register" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td class="wr-title"><span>Continue without Registering</span></td>
</tr>
<tr>
  <td class="wr-content">
    <?php if(!empty($return_flight_reference_id)) {
      $return_flight_info = '&ReturnFid='.$return_flight_reference_id;
    }?>
    <div id="wr-hurry-text">In a hurry? Proceed to pay without registering on SpotBillPayment.com</div>
    <div id="wr-link">
    <b><a href="/flights/continuePayment?sessID=<?php print $session_id;?>&OnwardFid=<?php print $onward_flight_reference_id.$return_flight_info;?>&searchkey=<?php print $_GET['searchkey'];?>" id="continue_to_payment">Continue without registering</a></b>   
  </div>
  </td>
</tr>
</table>
