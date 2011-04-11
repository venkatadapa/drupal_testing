<?php 
$xml = $xml_seatmap; 
$limit = 4;
$sleep = 1;
$seat = 0;
?>

<div id="wrap1" class="seat_selection" style="display: block;">
    <span onclick="document.getElementById('wrap1').style.display='none'" class="x">X</span>

    <div id="showErrror6" style="display: none;" class="noResult"></div>

    <div style="float: left; display: none;" class="seatErr" id="Select6">
      No Seat Selected <span>Please choose the seats/ The seats you have selected are not
      available. Please select some other seats.</span>
    </div>

    <div id="seatdetails">
      <h6>Choose your seats ></h6>

      <p>Available :<img alt="Available" src="/sites/default/files/images/seat_image.gif" class=
      "availableSeater" /></p>

      <p>Booked :<img alt="Booked" src="/sites/default/files/images/seat_image.gif" class=
      "bookedSeater" /></p>

      <p>Female Seat :<img alt="Female Seat" src="/sites/default/files/images/seat_image.gif"
      class="bookedFemaleSeater" /></p>

      <p>Current Selection :<img alt="Current Selection" src="/sites/default/files/images/seat_image.gif" class="currentSeater" /></p>
    </div>

    <div id="seatselector">
      <table cellspacing="0" cellpadding="0" border="0" style="width: auto;" class=
      "shell">
        <tbody>
          <tr>
            <td rowspan="3" class="left"><img height="40" width="61" border="0" alt=""
            src="/sites/default/files/images/bus-left-top.gif" /><span>Lower Deck</span></td>

            <td class="top"></td>

            <td rowspan="3" class="right"><img height="13" width="5" border="0" alt=""
            src="/sites/default/files/images/bus-right-top.gif" /></td>
          </tr>

          <tr>
            <td class="center">
              <table cellspacing="0" cellpadding="0" border="0" align="right" id="table"  style="padding-bottom:10px">
                <tbody>
                 <tr>
<?php $lower_details1= $xml->xpath('//Seat-Map/Lower-Deck/column[@id=1]/row');   
foreach($lower_details1 as $lower_detail) {
  if(count($lower_detail->seat)>0) {
			foreach($lower_detail->seat as $seatinfo) {
					 $seat_type = $seatinfo['type']=='seat' ? 'Seater' : 'Sleeper';
					 $colspan =  $seatinfo['type']=='sleeper' ? "colspan='2'" : '';
					 if($seatinfo['status']==1) { ?>
					   <td id="selection" class="booked<?php print $seat_type;?>" value=""  <?php print $colspan ?>>
					   <?php print $seatinfo['number']; ?>
					   </td>
			     <?php } else { ?>
					   <td id="selection" title="<?php print str_replace('Seater','Seat',$seat_type);?> Fare: <?php print  $seatinfo['fare'];?>" onclick="javascript:swapImage(this,1,310.0,3,<?php echo $limit;?>,<?php echo $seat;?>,<?php echo $sleep;?>);" class="available<?php print $seat_type;?>" 
					   value="white" <?php print $colspan ?>>
					   <?php print $seatinfo['number'];?>
					   </td>
			     <?php } 
			} //inner foreach end here   
	} //if count($seat_detal->seat) end here 
	else if(isset($lower_detail->blank))   {
					 echo '<td></td>';
	}
	else if(isset($lower_detail->skip))   {
					 //Write what do you want when skip exist in row
	}
}//main foreach end here ?>		
                    
                  </tr>

                  <tr>
<?php $lower_details2= $xml->xpath('//Seat-Map/Lower-Deck/column[@id=2]/row');   
foreach($lower_details2 as $lower_detail) {
  if(count($lower_detail->seat)>0) {
			foreach($lower_detail->seat as $seatinfo) {
					 $seat_type = $seatinfo['type']=='seat' ? 'Seater' : 'Sleeper';
					 $colspan =  $seatinfo['type']=='sleeper' ? "colspan='2'" : '';
					 if($seatinfo['status']==1) { ?>
					   <td id="selection" class="booked<?php print $seat_type;?>" value=""  <?php print $colspan ?>>
					   <?php print $seatinfo['number']; ?>
					   </td>
			     <?php } else { ?>
					   <td id="selection" title="<?php print str_replace('Seater','Seat',$seat_type);?> Fare: <?php print  $seatinfo['fare'];?>" onclick="javascript:swapImage(this,1,310.0,3,<?php echo $limit;?>,<?php echo $seat;?>,<?php echo $sleep;?>);" class="available<?php print $seat_type;?>" 
					   value="white" <?php print $colspan ?>>
					   <?php print $seatinfo['number'];?>
					   </td>
			     <?php } 
			} //inner foreach end here   
	} //if count($seat_detal->seat) end here 
	else if(isset($lower_detail->blank))   {
					 echo '<td></td>';
	}
	else if(isset($lower_detail->skip))   {
					 //Write what do you want when skip exist in row
	}
}//main foreach end here ?>	                
                  </tr>
		  <!--Seperator-->
		  <tr>
		     <td></td>
		  </tr>

                  <tr>
<?php $lower_details3= $xml->xpath('//Seat-Map/Lower-Deck/column[@id=3]/row');   
foreach($lower_details3 as $lower_detail) {
  if(count($lower_detail->seat)>0) {
			foreach($lower_detail->seat as $seatinfo) {
					 $seat_type = $seatinfo['type']=='seat' ? 'Seater' : 'Sleeper';
					 $colspan =  $seatinfo['type']=='sleeper' ? "colspan='2'" : '';
					 if($seatinfo['status']==1) { ?>
					   <td id="selection" class="booked<?php print $seat_type;?>" value=""  <?php print $colspan ?>>
					   <?php print $seatinfo['number']; ?>
					   </td>
			     <?php } else { ?>
					   <td id="selection" title="<?php print str_replace('Seater','Seat',$seat_type);?> Fare: <?php print  $seatinfo['fare'];?>" onclick="javascript:swapImage(this,1,310.0,3,<?php echo $limit;?>,<?php echo $seat;?>,<?php echo $sleep;?>);" class="available<?php print $seat_type;?>" 
					   value="white" <?php print $colspan ?>>
					   <?php print $seatinfo['number'];?>
					   </td>
			     <?php } 
			} //inner foreach end here   
	} //if count($seat_detal->seat) end here 
	else if(isset($lower_detail->blank))   {
					 echo '<td></td>';
	}
	else if(isset($lower_detail->skip))   {
					 //Write what do you want when skip exist in row
	}
}//main foreach end here ?>	               
                      
                    
                  </tr>


                  <tr>
                   
  <?php $lower_details4= $xml->xpath('//Seat-Map/Lower-Deck/column[@id=4]/row');   
foreach($lower_details4 as $lower_detail) {
  if(count($lower_detail->seat)>0) {
			foreach($lower_detail->seat as $seatinfo) {
					 $seat_type = $seatinfo['type']=='seat' ? 'Seater' : 'Sleeper';
					 $colspan =  $seatinfo['type']=='sleeper' ? "colspan='2'" : '';
					 if($seatinfo['status']==1) { ?>
					   <td id="selection" class="booked<?php print $seat_type;?>" value=""  <?php print $colspan ?>>
					   <?php print $seatinfo['number']; ?>
					   </td>
			     <?php } else { ?>
					   <td id="selection" title="<?php print str_replace('Seater','Seat',$seat_type);?> Fare: <?php print  $seatinfo['fare'];?>" onclick="javascript:swapImage(this,1,310.0,3,<?php echo $limit;?>,<?php echo $seat;?>,<?php echo $sleep;?>);" class="available<?php print $seat_type;?>" 
					   value="white" <?php print $colspan ?>>
					   <?php print $seatinfo['number'];?>
					   </td>
			     <?php } 
			} //inner foreach end here   
	} //if count($seat_detal->seat) end here 
	else if(isset($lower_detail->blank))   {
					 echo '<td></td>';
	}
	else if(isset($lower_detail->skip))   {
					 //Write what do you want when skip exist in row
	}
}//main foreach end here ?>	                 
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>

          <tr>
            <td class="bottom"></td>
          </tr>
        </tbody>
      </table>

      <table cellspacing="0" cellpadding="0" border="0" style="width: auto;margin-top:20px" class=
      "shell">
        <tbody>
          <tr>
            <td rowspan="3" class="left"><img height="40" width="61" border="0" src="/sites/default/files/images/bus-left-top.gif" /><span>Upper Deck</span></td>

            <td class="top"></td>

            <td rowspan="3" class="right"><img height="13" width="5" border="0" src="/sites/default/files/images/bus-right-top.gif" /></td>
          </tr>

          <tr>
            <td class="center">
              <table cellspacing="0" cellpadding="0" border="0" align="right" id=
              "upperDeckTable" style="padding-bottom:10px">
                <tbody>
                  <tr>
<?php $upper_details1= $xml->xpath('//Seat-Map/Upper-Deck/column[@id=1]/row');   
foreach($upper_details1 as $upper_detail) {
  if(count($upper_detail->seat)>0) {
			foreach($upper_detail->seat as $seatinfo) {
					 $seat_type = $seatinfo['type']=='seat' ? 'Seater' : 'Sleeper';
					 $colspan =  $seatinfo['type']=='sleeper' ? "colspan='2'" : '';
					 if($seatinfo['status']==1) { ?>
					   <td id="selection" class="booked<?php print $seat_type;?>" value=""  <?php print $colspan ?>>
					   <?php print $seatinfo['number']; ?>
					   </td>
			     <?php } else { ?>
					   <td id="selection" title="<?php print str_replace('Seater','Seat',$seat_type);?> Fare: <?php print  $seatinfo['fare'];?>" onclick="javascript:swapImage(this,1,310.0,3,<?php echo $limit;?>,<?php echo $seat;?>,<?php echo $sleep;?>);" class="available<?php print $seat_type;?>" 
					   value="white" <?php print $colspan ?>>
					   <?php print $seatinfo['number'];?>
					   </td>
			     <?php } 
			} //inner foreach end here   
	} //if count($seat_detal->seat) end here 
	else if(isset($upper_detail->blank))   {
					 echo '<td></td>';
	}
	else if(isset($upper_detail->skip))   {
					 //Write what do you want when skip exist in row
	}
}//main foreach end here ?>
                  </tr>
                   <tr>                   
<?php $upper_details2= $xml->xpath('//Seat-Map/Upper-Deck/column[@id=2]/row');   
foreach($upper_details2 as $upper_detail) {
  if(count($upper_detail->seat)>0) {
			foreach($upper_detail->seat as $seatinfo) {
					 $seat_type = $seatinfo['type']=='seat' ? 'Seater' : 'Sleeper';
					 $colspan =  $seatinfo['type']=='sleeper' ? "colspan='2'" : '';
					 if($seatinfo['status']==1) { ?>
					   <td id="selection" class="booked<?php print $seat_type;?>" value=""  <?php print $colspan ?>>
					   <?php print $seatinfo['number']; ?>
					   </td>
			     <?php } else { ?>
					   <td id="selection" title="<?php print str_replace('Seater','Seat',$seat_type);?> Fare: <?php print  $seatinfo['fare'];?>" onclick="javascript:swapImage(this,1,310.0,3,<?php echo $limit;?>,<?php echo $seat;?>,<?php echo $sleep;?>);" class="available<?php print $seat_type;?>" 
					   value="white" <?php print $colspan ?>>
					   <?php print $seatinfo['number'];?>
					   </td>
			     <?php } 
			} //inner foreach end here   
	} //if count($seat_detal->seat) end here 
	else if(isset($upper_detail->blank))   {
					 echo '<td></td>';
	}
	else if(isset($upper_detail->skip))   {
					 //Write what do you want when skip exist in row
	}
}//main foreach end here ?>		  
                  </tr>

                  <tr>
                     <td></td>
                  </tr>

                  <tr>
<?php $upper_details3= $xml->xpath('//Seat-Map/Upper-Deck/column[@id=3]/row');   
foreach($upper_details3 as $upper_detail) {
  if(count($upper_detail->seat)>0) {
			foreach($upper_detail->seat as $seatinfo) {
					 $seat_type = $seatinfo['type']=='seat' ? 'Seater' : 'Sleeper';
					 $colspan =  $seatinfo['type']=='sleeper' ? "colspan='2'" : '';
					 if($seatinfo['status']==1) { ?>
					   <td id="selection" class="booked<?php print $seat_type;?>" value=""  <?php print $colspan ?>>
					   <?php print $seatinfo['number']; ?>
					   </td>
			     <?php } else { ?>
					   <td id="selection" title="<?php print str_replace('Seater','Seat',$seat_type);?> Fare: <?php print  $seatinfo['fare'];?>" onclick="javascript:swapImage(this,1,310.0,3,<?php echo $limit;?>,<?php echo $seat;?>,<?php echo $sleep;?>);" class="available<?php print $seat_type;?>" 
					   value="white" <?php print $colspan ?>>
					   <?php print $seatinfo['number'];?>
					   </td>
			     <?php } 
			} //inner foreach end here   
	} //if count($seat_detal->seat) end here 
	else if(isset($upper_detail->blank))   {
					 echo '<td></td>';
	}
	else if(isset($upper_detail->skip))   {
					 //Write what do you want when skip exist in row
	}
}//main foreach end here ?>                   
                  </tr>
		  <tr>
                      <?php 
                      $upper_details4= $xml->xpath('//Seat-Map/Upper-Deck/column[@id=4]/row');              
foreach($upper_details4 as $upper_detail) {
  if(count($upper_detail->seat)>0) {
			foreach($upper_detail->seat as $seatinfo) {
					 $seat_type = $seatinfo['type']=='seat' ? 'Seater' : 'Sleeper';
					 $colspan =  $seatinfo['type']=='sleeper' ? "colspan='2'" : '';
					 if($seatinfo['status']==1) { ?>
					   <td id="selection" class="booked<?php print $seat_type;?>" value=""  <?php print $colspan ?> onClick="alert(currentCellText)">
					   <?php print $seatinfo['number']; ?>
					   </td>
			     <?php } else { ?>
					   <td id="selection" title="<?php print str_replace('Seater','Seat',$seat_type);?> Fare: <?php print  $seatinfo['fare'];?>" onclick="javascript:swapImage(this,1,310.0,3,<?php echo $limit;?>,<?php echo $seat;?>,<?php echo $sleep;?>);" class="available<?php print $seat_type;?>" 
					   value="white" <?php print $colspan ?>>
					   <?php print $seatinfo['number'];?>
					   </td>
			     <?php } 
			} //inner foreach end here   
	} //if count($seat_detal->seat) end here 
	else if(isset($upper_detail->blank))   {
					 echo '<td></td>';
	}
	else if(isset($upper_detail->skip))   {
					 //Write what do you want when skip exist in row
	}
}//main foreach end here ?>
                  </tr>
		  
                </tbody>
              </table>
            </td>
          </tr>

          <tr>
            <td class="bottom"></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div style="display: block; float: left; padding-left: 180px; padding-right: 15px; padding-top: 5px; width: 90%; text-align: left;">
    <b>Note:</b> Male bookings adjacent to female booked seat may not be considered
    </div>
  <p id="para" />
    <div id="fareAndProceed6" class="fareAndProceed">
      <button onclick="setValuesintheHiddenFields('1','Book');" id="proceed6" class="button red" href="#"
      type="button"><strong>Proceed</strong></button>
    </div>
  </div>
