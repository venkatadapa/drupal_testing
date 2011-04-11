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

  //echo "details: <pre>"; print_r($details); echo "</pre>";
}
//echo "session: <pre>"; print_r($_SESSION); echo "</pre>";
echo "<h2>Onward Flight information</h2>"; 
echo 'Ref ID:'. $onward_flight_reference_id .'<br />';
echo 'Seat Available:'. $onward_seat_available .'<br />';
echo 'Onward Fare:'. $onward_fare .'<br />';
echo 'Onward Taxes:'. $onward_taxes .'<br />';
echo 'fare_changed:'. $onward_fare_changed .'<br />';
echo 'Discount:'. $onward_discount .'<br />'; 
$return_flight_info = ''; 
if(!empty($return_flight_reference_id)) {
echo '<hr />';
echo "<h2>Return Flight information</h2>";
echo 'Ref ID:'. $return_flight_reference_id .'<br />';
echo 'Seat Available:'. $return_seat_available .'<br />';
echo 'Return Fare:'. $return_fare .'<br />';
echo 'Return Taxes:'. $return_taxes .'<br />';
echo 'fare_changed:'. $return_fare_changed .'<br />';
echo 'Discount:'. $return_discount .'<br />';
$return_flight_info = '&ReturnFid='.$return_flight_reference_id; 
}
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
  <th>Airline/Carrier</th>
  <th>FareType</th>
  <th>Departure</th>
  <th>Arrival</th>
  <th>Stops</th>
  <th>Duration</th>
</tr>
<tr>
  <td rowspan="2">
    <img src="" alt="" />
    Departing Flight
  </td>
  <td>
    <img src="" alt="" />
    Air India IC<br />
    IC-1918
  </td>
  <td>Refundable <br />
    <a href="#">Fare rules</a>
  </td>
  <td>
    Hyderabad<br />
    Fri, 11 Feb<br />
    16:05
  </td>
  <td>
    Bangalore<br />
    Fri, 11 Feb<br />
    17:05
  </td>
  <td>NonStop</td>
  <td>1h 0m</td>
</tr>
<tr>
  <td rowspan="2">
    <img src="" alt="" />
    Return Flight
  </td>
  <td>
    <img src="" alt="" />
    IndiGO<br />
    6E-256
  </td>
  <td>Refundable <br />
    <a href="#">Fare rules</a>
  </td>
  <td>
    Bangalore<br />
    Sat, 12 Feb<br />
    06:50
  </td>
  <td>
    Hyderabad<br />
    Sat, 12 Feb<br />
    07:50
  </td>
  <td>NonStop</td>
  <td>1h 0m</td>
</tr>
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
<tr>
  <td>Adult</td>
  <td>1</td>
  <td>Rs. 1470 (1X1470)</td>
  <td>Rs. 808</td>
  <td>Rs. 2278</td>
</tr>
<tr>
  <td>Child</td>
  <td>1</td>
  <td>Rs. 1470 (1X1470)</td>
  <td>Rs. 808</td>
  <td>Rs. 2278</td>
</tr>
<tr>
  <td>Infant</td>
  <td>1</td>
  <td>Rs. 0 (1X0)</td>
  <td>Rs. 560</td>
  <td>Rs. 560</td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
  <td id="total-fare">Total:</td>
  <td id="total-fare-value">Rs. 5116</td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
  <td id="grand-total-fare">Grand Total:</td>
  <td id="grand-total-fare-value">Rs. 5,116</td>
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
    <div id="wr-hurry-text">In a hurry? Proceed to pay without registering on SpotBillPayment.com</div>
    <div id="wr-link">
      <b><a href='/flights/continuePayment?sessID=<?php print $session_id;?>&OnwardFid=<?php print $onward_flight_reference_id.$return_flight_info;?>' id="continue_to_payment">Continue without registering</a></b>
    </div>
  </td>
</tr>
</table>
<br />
