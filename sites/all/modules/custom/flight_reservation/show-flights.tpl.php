<?php
//$Id$
global $base_url, $theme;
$theme_path = $base_url . '/' . drupal_get_path('theme', $theme);
drupal_add_js(drupal_get_path('module', 'flight_reservation') .'/js/flight_search.js');
drupal_add_js('sites/all/libraries/tablesorter/js/jquery.tablesorter.min.js');
drupal_add_css('sites/all/libraries/tablesorter/assets/css/default.css');
$path = 'sites/all/libraries/tablesorter/js/jquery.tablesorter.min.js';
drupal_add_js(drupal_get_path('module', 'flight_reservation').'/js/tablesorter_initialize.js');
//drupal_set_message('<pre>'.print_r($flight_details,TRUE));
if($flight_details['responsecode'] == '200-success') {
?>
<?php  //print 'Min time value:'.$flight_details['time_min_filter'].'<br />';
  // print 'Max time value:'.$flight_details['time_max_filter'];
$direct_flights_count = count($flight_details['airline_name']);
$linked_flights_count = count($flight_details['linked_flight']);
?>
<table id="flightslist" cellspacing="0" cellpadding="0" border="0">
<thead>
<tr class="flight-search-hdr">
  <th><b>Airline<br />& Flt Number</b></th><th><b>Faretype</b></th><th><b>Departure</b></th>
  <th><b>Arival</b></th><th><b>Stops</b></th><th><b>Duration</b></th><th><b>Price</b></th>
</tr>
</thead>
<tbody> 
<?php for($index=0; $index < $direct_flights_count; $index++) { 
  //Filters for price range, time range and refundable start
  if( ($flight_details['price_min_filter'] == '' && $flight_details['price_max_filter'] == '') || 
      ($flight_details['price'][$index] >= $flight_details['price_min_filter'] && $flight_details['price'][$index] <= 
      $flight_details['price_max_filter'])) { 
  
  if( ($flight_details['time_min_filter'] == '' && $flight_details['time_max_filter'] == '') || 
      (str_replace(':','',$flight_details['depart_time_only'][$index]) >= str_replace(':','',$flight_details['time_min_filter']) && 
      str_replace(':','',$flight_details['depart_time_only'][$index]) <= str_replace(':','',$flight_details['time_max_filter']))) { 

     if( $flight_details['refundable'] == 0 || ($flight_details['refundable']=='1' && $flight_details['Isrefundable'][$index]=='true') ) {
?>
  <tr class="flight-search-row">
  <td id="airline-name-<?php print $index; ?>" class="airline-name">
      <img src="/misc/forum-new.png" alt="dummy-image" /><br />
      <?php print $flight_details['airline_name'][$index]; ?><br />
      <?php print $flight_details['carrier_code'][$index]. '-'. $flight_details['flight_number'][$index]; ?></td>
  <td id="faretype-<?php print $index; ?>" class="faretype"><?php print $flight_details['faretype'][$index]; ?> <br />
    <a href="javascript://" onMouseover="showrules('farerules-<?php print $index;?>')" onMouseout="hiderules('farerules-<?php print $index;?>')">Fare rules</a>
    <div id="farerules-<?php print $index; ?>" class="fare-rules"><?php print $flight_details['fare_rules'][$index]; ?></div>
  </td>
  <td class="origin"><?php print $flight_details['origin'][$index].'<br />'. $flight_details['depart_time'][$index]; ?></td>
  <td class="destination"><?php print $flight_details['destination'][$index].'<br />'.$flight_details['arrival_time'][$index]; ?></td>
  <td class="via-stops"><?php print $flight_details['via_stops'][$index]; ?></td>
  <td class="time-slot">Duration:<?php print $flight_details['timeslot'][$index]; ?></td>
  <td class="price">
<span class="price-text">Rs. <?php print number_format($flight_details['price'][$index], 2); ?><br />(All Incl Per Adult)</span>
<span class="price-text"><a href="javascript://" onMouseover="showrules('fare-summary-<?php print $index;?>')" onMouseout="hiderules('fare-summary-<?php print $index;?>')">Fare summary</a></span>
 <span class="book-link-span">
<?php if(isset($flight_details['selected_round_trip'])) { ?>
<a class="book-this-departure" href="/flights/showreturn?onward_fid=<?php print $flight_details['flight_reference_id'][$index];?>&sessID=<?php print $flight_details['sessionID'];?>&searchkey=<?php print $_GET['searchkey'];?>"><img src="<?php print $theme_path; ?>/images/show_return.png" alt="" /></a>
<?php } else { ?>
<a class="book-this-departure" href="/flights/selected?onward_fid=<?php print $flight_details['flight_reference_id'][$index];?>&sessID=<?php print $flight_details['sessionID'];?>&searchkey=<?php print $_GET['searchkey'];?>"><img src="<?php print $theme_path; ?>/images/book_this_departure.png" alt="" /></a>
<?php } ?>
</span>
<!-- Fare summary Started -->
<div id="fare-summary-<?php print $index; ?>" class='fare-rules' style='width:200px;display:none'>
<span class="fare-summary-heading">Fare summary</span>
<table width=100%>
<tr><td colspan="3"><p>Base Fare</p></td></tr>
<?php $adult_fare_total = '0';
$children_fare_total = '0';
$infants_fare_total = '0';
$adult_taxes_total = '0';
$children_taxes_total = '0';
$infants_taxes_total = '0';
?>
<?php if($flight_details['adults'] > 0) { ?>
<tr>
   <td><?php print $flight_details['adults'].' '.'Adult(s):';?><td>
   <td></td>
   <td><?php print $adult_fare_total = $flight_details['adults']*$flight_details['basefare'][$index]; ?></td>
</tr>
<?php } if($flight_details['children'] > 0) { ?>
<tr>
   <td><?php print $flight_details['children'].' '.'Children(s):'; ?><td>
   <td></td>
   <td><?php print $children_fare_total = $flight_details['children']*$flight_details['basefare'][$index]; ?></td>
</tr>
<?php } if($flight_details['infants'] > 0) { ?>
<tr>
  <td><?php print $flight_details['infants'].' '.'Infant(s):'; ?><td>
  <td></td>  
  <td><?php print $infants_fare_total = $flight_details['infants']*$flight_details['basefare'][$index]; ?></td>
</tr>
<?php } ?>
<tr>
  <td><b>Total Fare</b><td>
  <td></td>  
<td><b><?php print $basefares_total = $adult_fare_total+$children_fare_total+$infants_fare_total; ?></b></td>
</tr>
<tr><td colspan="3"><p>Fees and Surcharges</p></td></tr>
<?php if($flight_details['adults'] > 0) { ?>
<tr>
   <td><?php print $flight_details['adults'].' '.'Adult(s):';?><td>
   <td></td>
   <td><?php print $adult_taxes_total = $flight_details['adults']*$flight_details['taxes'][$index]; ?></td>
</tr>
<?php } if($flight_details['children'] > 0) { ?>
<tr>
   <td><?php print $flight_details['children'].' '.'Children(s):'; ?><td>
   <td></td>
   <td><?php print $children_taxes_total = $flight_details['children']*$flight_details['taxes'][$index]; ?></td>
</tr>
<?php } if($flight_details['infants'] > 0) { ?>
<tr>
  <td><?php print $flight_details['infants'].' '.'Infant(s):'; ?><td>
  <td></td>  
  <td><?php print $infants_taxes_total = $flight_details['infants']*$flight_details['taxes'][$index]; ?></td>
</tr>
<?php } ?>
<tr>
<td><b>Total (F & S)</b><td>
  <td></td>  
<td><b><?php print $taxes_total = $adult_taxes_total+$children_taxes_total+$infants_taxes_total; ?></b></td>
</tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr>
<td><b><h2><b>Grand Total Rs.</b></h2></b><td>
  <td></td>  
<td><b><?php print $basefares_total + $taxes_total; ?></b></td>
</tr>
</table>
</div>
<!--Fare summary ended-->
 </td>
  </tr>
  <tr class="flight-search-spacing-row">
    <td colspan="7">&nbsp;</td>
  </tr>
<?php } //if refundable 
    }//if times range end here 
  }  //if price range end here
 } //for loop end here 
?>



<!--Linked Flights Information Start here-->
<?php for($linked_flight_index=0; $linked_flight_index < $linked_flights_count; $linked_flight_index++) { 
  //Filters for price range, time range and refundable start
  if( ($flight_details['price_min_filter'] == '' && $flight_details['price_max_filter'] == '') || 
      ($flight_details['linked_flight'][$linked_flight_index]['price']['0'] >= $flight_details['price_min_filter'] && $flight_details['linked_flight'][$linked_flight_index]['price']['0'] <= 
      $flight_details['price_max_filter'])) { 
  
    if( ($flight_details['time_min_filter'] == '' && $flight_details['time_max_filter'] == '') || 
      (str_replace(':','',$flight_details['linked_flight'][$linked_flight_index]['depart_time_only']['0']) >= str_replace(':','',$flight_details['time_min_filter']) && 
      str_replace(':','',$flight_details['linked_flight'][$linked_flight_index]['depart_time_only']['0']) <= str_replace(':','',$flight_details['time_max_filter']))) { 

      if( $flight_details['refundable'] == 0 || ($flight_details['refundable']=='1' && $flight_details['linked_flight'][$linked_flight_index]['Isrefundable']['0']=='true') ) {  
?>
  <tr class="linked-flight-starting-row">
    <td colspan="7"></td>
  </tr>
  <?php for($info_index=0; $info_index < count($flight_details['linked_flight'][$linked_flight_index]['airline_name']); $info_index++) { 
  ?>
   <tr class="linked-flight-row">
    <td id="airline-name-<?php print $info_index; ?>" class="airline-name">
      <img src="/misc/forum-new.png" alt="dummy-image" /><br />
      <?php print $flight_details['linked_flight'][$linked_flight_index]['airline_name'][$info_index]; ?><br />
      <?php print $flight_details['linked_flight'][$linked_flight_index]['carrier_code'][$info_index]. '-'. 
      $flight_details['linked_flight'][$linked_flight_index]['flight_number'][$info_index]; ?></td>
  <td id="faretype-<?php print $info_index; ?>" class="faretype"><?php print $flight_details['linked_flight'][$linked_flight_index]['faretype'][$info_index]; ?> <br />
   <a href="javascript://" onMouseover="showrules('linked_farerules-<?php print $linked_flight_index.$info_index;?>')" onMouseout="hiderules('linked_farerules-<?php print $linked_flight_index.$info_index;?>')">Fare rules</a>
   <div id="linked_farerules-<?php print $linked_flight_index.$info_index; ?>" class="fare-rules"><?php print $flight_details['linked_flight'][$linked_flight_index]['fare_rules'][$info_index]; ?></div>
  </td>
  <td class="origin"><?php print $flight_details['linked_flight'][$linked_flight_index]['origin'][$info_index].'<br />'. 
  $flight_details['linked_flight'][$linked_flight_index]['depart_time'][$info_index]; ?></td>
  <td class="destination"><?php print $flight_details['linked_flight'][$linked_flight_index]['destination'][$info_index].'<br />'.
  $flight_details['linked_flight'][$linked_flight_index]['arrival_time'][$info_index]; ?></td>
  <td class="via-stops"><?php print $flight_details['linked_flight'][$linked_flight_index]['via_stops'][$info_index]; ?></td>
  <td class="time-slot">Duration:<?php print $flight_details['linked_flight'][$linked_flight_index]['timeslot'][$info_index]; ?></td>
  <?php if($info_index==0) { ?>
  <td class="price" valign="baseline" rowspan="<?php print count($flight_details['linked_flight'][$linked_flight_index]['airline_name'])+
  count($flight_details['linked_flight'][$linked_flight_index]['airline_name'])-1; ?>">
  <?php $price = '';
      for($price_index=0; $price_index < count($flight_details['linked_flight'][$linked_flight_index]['price']); $price_index++) {
         $price += $flight_details['linked_flight'][$linked_flight_index]['price'][$price_index]; 
      }
  ?>
<span class="price-text">Rs <?php print number_format($price, 2); ?><br />(All Incl Per Adult)</span>
<span class="price-text"><a href="javascript://" onMouseover="showrules('linked_fare-summary-<?php print $linked_flight_index.$info_index;?>')" onMouseout="hiderules('linked_fare-summary-<?php print $linked_flight_index.$info_index;?>')">Fare summary</a></span>
 <span class="book-link-span">
<?php if(isset($flight_details['selected_round_trip'])) { ?>
<a class="book-this-departure" href="/flights/showreturn?onward_fid=<?php print $flight_details['flight_reference_id'][$direct_flights_count+$linked_flight_index];?>&sessID=<?php print $flight_details['sessionID'];?>&searchkey=<?php print $_GET['searchkey'];?>"><img src="<?php print $theme_path; ?>/images/show_return.png" alt="" /></a>
<?php } else { ?>
<a class="book-this-departure" href="/flights/selected?onward_fid=<?php print $flight_details['flight_reference_id'][$direct_flights_count+$linked_flight_index];?>&sessID=<?php print $flight_details['sessionID'];?>&searchkey=<?php print $_GET['searchkey'];?>"><img src="<?php print $theme_path; ?>/images/book_this_departure.png" alt="" /></a>
<?php } ?>
</span>
<!-- Fare summary Started -->
<div style='display:none;width:200px' id="linked_fare-summary-<?php print $linked_flight_index.$info_index;?>" class='fare-rules'>
<span class="fare-summary-heading">Fare summary</span>
<table width='200px'>
<tr><td colspan="3"><p>Base Fare</p></td></tr>
<?php
 $linked_base_fare = '';
 $linked_taxes = '';
 $linked_discount = ''; 
 for($fares_index=0; $fares_index < count($flight_details['linked_flight'][$linked_flight_index]['basefare']); $fares_index++) {
         $linked_base_fare += $flight_details['linked_flight'][$linked_flight_index]['basefare'][$fares_index]; 
         $linked_taxes += $flight_details['linked_flight'][$linked_flight_index]['taxes'][$fares_index];
         $linked_discount += $flight_details['linked_flight'][$linked_flight_index]['discount'][$fares_index];
      }
 
$adult_fare_total = '0';
$children_fare_total = '0';
$infants_fare_total = '0';
$adult_taxes_total = '0';
$children_taxes_total = '0';
$infants_taxes_total = '0';
?>
<?php if($flight_details['adults'] > 0) { ?>
<tr>
   <td><?php print $flight_details['adults'].' '.'Adult(s):';?><td>
   <td></td>
   <td><?php print $adult_fare_total = $flight_details['adults']*$linked_base_fare; ?></td>
</tr>
<?php } if($flight_details['children'] > 0) { ?>
<tr>
   <td><?php print $flight_details['children'].' '.'Children(s):'; ?><td>
   <td></td>
   <td><?php print $children_fare_total = $flight_details['children']*$linked_base_fare; ?></td>
</tr>
<?php } if($flight_details['infants'] > 0) { ?>
<tr>
  <td><?php print $flight_details['infants'].' '.'Infant(s):'; ?><td>
  <td></td>  
  <td><?php print $infants_fare_total = $flight_details['infants']*$linked_base_fare; ?></td>
</tr>
<?php } ?>
<tr>
  <td><b>Total Fare</b><td>
  <td></td>  
<td><b><?php print $basefares_total = $adult_fare_total+$children_fare_total+$infants_fare_total; ?></b></td>
</tr>
<tr><td colspan="3"><p>Fees and Surcharges</p></td></tr>
<?php if($flight_details['adults'] > 0) { ?>
<tr>
   <td><?php print $flight_details['adults'].' '.'Adult(s):';?><td>
   <td></td>
   <td><?php print $adult_taxes_total = $flight_details['adults']*$linked_taxes; ?></td>
</tr>
<?php } if($flight_details['children'] > 0) { ?>
<tr>
   <td><?php print $flight_details['children'].' '.'Children(s):'; ?><td>
   <td></td>
   <td><?php print $children_taxes_total = $flight_details['children']*$linked_taxes; ?></td>
</tr>
<?php } if($flight_details['infants'] > 0) { ?>
<tr>
  <td><?php print $flight_details['infants'].' '.'Infant(s):'; ?><td>
  <td></td>  
  <td><?php print $infants_taxes_total = $flight_details['infants']*$linked_taxes; ?></td>
</tr>
<?php } ?>
<tr>
<td><b>Total (F & S)</b><td>
  <td></td>  
<td><b><?php print $taxes_total = $adult_taxes_total+$children_taxes_total+$infants_taxes_total; ?></b></td>
</tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr>
<td><b><h2><b>Grand Total Rs.</b></h2></b><td>
  <td></td>  
<td><b><?php print $basefares_total + $taxes_total; ?></b></td>
</tr>
</table>
</div>
<!--Fare summary ended-->
</td>
<?php } ?>
 </tr>  
    <?php if (($info_index+1) < count($flight_details['linked_flight'][$linked_flight_index]['airline_name'])) {
      print '<tr class="linked-flight-mid-row">';
      print '<td height="13" align="center" class="linked-flight-mid-cell" colspan="6">Change planes in '.$flight_details['linked_flight'][$linked_flight_index]['destination'][$info_index].'</td>';
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
<?php   
   } //if refundable 
  }//if times range end here 
 }  //if price range end here 
} //for loop end here 
?>
<!--Linked Flights Information End here-->
</tbody>
</table>
<?php } else {
  print '<font color="red"><b>'.$flight_details['responsecode'].'</b></font>';
} ?>
