<?php //print_r($ticket_details); 
  //drupal_set_message('<pre>'.print_r($ticket_details,TRUE));?>
<div style="font-family: Arial; margin: 0pt; padding: 0pt;">
  <table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tbody><tr>
      <td align="center" style="border: 2pt solid rgb(188, 188, 188);">
        <table width="96%" cellspacing="0" cellpadding="0" border="0">
          <tbody><tr>
            <td valign="bottom">
              <div style="margin-top: 4pt;">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                  <tbody><tr>
                    <td valign="top" align="left" style="width: 39%;">
                      <div style="margin-top: 5pt; margin-left: 1pt; float: left;">
                        <h2>Spot Online</h2>
                      </div>
                      
                    </td>
                    <td valign="top" align="left" style="width: 32%;">
                      
                      
                    </td>
                    <td valign="top" align="left" style="width: 3%;">
                      <div style="margin-top: 15pt;">
                        <img height="35" title="phone" alt="" src="http://www.redbus.in/images/PhonePic.jpg">
                      </div>
                    </td>
                    <td valign="top" align="left">
                      <div style="margin-top: 10pt; font-size: 10pt; text-decoration: underline; font-weight: bold; color: rgb(48, 90, 160); font-family: Arial;">Travel related queries</div>
                      <div style="margin-top: 5pt; font-size: 10pt; color: rgb(0, 0, 0); padding-top: 3pt; font-family: Arial;">
                        <span>08554241 </span>
                      </div>
                    </td>
                  </tr>
                </tbody></table>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div style="margin-top: 5pt; margin-bottom: 10pt; margin-left: 5pt; text-decoration: underline; font-size: 10pt; color: rgb(188, 188, 188); font-weight: bold; padding-top: 3pt; font-family: Arial;">
                  
              </div>
            </td>
          </tr>
          <tr>
            <td valign="middle" align="center" style="background: none repeat scroll 0pt 0pt rgb(252, 252, 225); border-bottom: 1pt solid rgb(255, 204, 0); border-top: 1pt solid rgb(255, 204, 0); font-size: 10pt; text-align: center; min-height: 30pt;">
             <p></p><p>
                </p><table width="99%" cellspacing="0" cellpadding="0" border="0" style="min-height: 100%;">
                  <tbody><tr>
                    <td style="width: 33%; font-size: 10pt; font-weight: bold; font-family: Arial; padding-left: 3pt;">
                      <div style="text-align: left;">
    <span><?php print $ticket_details['from'] ;?></span>
                         to 
    <span><?php print $ticket_details['to'] ;?></span>
                      </div>
                    </td>
                    <td align="center" style="width: 30%;">
                      <div style="font-size: 10pt; font-weight: normal; color: rgb(0, 0, 0); font-family: Arial;">
    <span><?php print $ticket_details['datetime'] ;?></span>
                      </div>
                    </td>
                    <td style="font-size: 10pt; font-weight: bold; font-family: Arial;">
                      <div style="text-align: right; margin-right: 5pt;">
                        <span>Diwakar Travels</span>
                      </div>
                    </td>
                  </tr>
                </tbody></table><p></p>
              
            </td>
          </tr>
          <tr>
            <td valign="middle">
              <p>
    &nbsp;<br>
    &nbsp;</p>
            </td>
          </tr>
          <tr>
            <td valign="middle">
              <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody><tr style="margin: 3pt; min-height: 1pt;">
                  <td style="border-top: 1px solid rgb(0, 0, 0); border-bottom: 1px solid rgb(0, 0, 0);">
                    <div style="margin: 2pt;">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td style="background: none repeat scroll 0pt 50% rgb(250, 250, 250); min-height: 50pt;">
                    <p>
                    </p>
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                      <tbody><tr>
                        <td valign="middle" align="left" style="width: 30%; min-height: 40px;">
                          <div style="margin-left: 3pt; font-size: 10pt; text-decoration: underline; font-weight: bold; color: rgb(48, 90, 160); font-family: Arial;">
                             Passenger name 
                          </div>
                          <div style="margin-left: 3pt; font-size: 10pt; text-decoration: none; color: rgb(0, 0, 0); padding-top: 6pt; font-family: Arial;">
    <?php foreach($ticket_details['passenger_names'] as $passenger_name) {?>
									  <span> <?php print $passenger_name; ?> </span>
									  <?php } ?>
                          </div>
                        </td>
                        <td valign="middle" align="left" style="width: 23%; min-height: 40px;">
                          <div>
                            <div style="font-size: 10pt; text-decoration: underline; font-weight: bold; color: rgb(48, 90, 160); font-family: Arial;">
                               spot online ticket # 
                            </div>
                            <div style="font-size: 10pt; text-decoration: none; color: rgb(0, 0, 0); padding-top: 6pt; font-family: Arial;">
    <?php foreach($ticket_details['passenger_ticket_nos'] as $ticket_no) {?>
									  <span> <?php print $ticket_no; ?> </span>
									  <?php } ?>
                            </div>
                          </div>
                        </td>
                        <td valign="middle" align="left" style="width: 24%; min-height: 40px;">
                          <div>
                            <div style="font-size: 10pt; text-decoration: underline; font-weight: bold; color: rgb(48, 90, 160); font-family: Arial;">
    Seat number(s) 
                            </div>
                            <div style="font-size: 10pt; text-decoration: none; color: rgb(0, 0, 0); padding-top: 6pt; font-family: Arial;">
    <?php foreach($ticket_details['passenger_seat_nos'] as $seat_no) {?>
								      <span> <?php print $seat_no; ?> </span>
								      <?php } ?>
                            </div>
                          </div>
                        </td>
                        <td valign="middle" align="left" style="width: 33%; min-height: 40px;">
                          <div>
                            <div style="font-size: 10pt; text-decoration: underline; font-weight: bold; color: rgb(48, 90, 160); font-family: Arial;">
                               PNR # 
                            </div>
                            <div style="font-size: 10pt; text-decoration: none; color: rgb(0, 0, 0); padding-top: 6pt; font-family: Arial;">
    <span><?php print $ticket_details['pnr']; ?></span>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody></table>
                    <p>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="border-top: 1px solid rgb(0, 0, 0); border-bottom: 1px solid rgb(0, 0, 0);">
                    <div style="margin: 1pt; min-height: 1pt;">
                    </div>
                  </td>
                </tr>
              </tbody></table>
            </td>
          </tr>
          <tr>
            <td>
              <div style="margin-top: 15pt; margin-bottom: 10pt;">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                  <tbody><tr>
                    <td valign="top" align="left" style="width: 30%;">
                      <div style="font-size: 10pt; text-decoration: underline; font-weight: bold; color: rgb(48, 90, 160); font-family: Arial; margin-left: 3pt;">
                         Bus type 
                      </div>
                      <div style="font-size: 10pt; text-decoration: none; color: rgb(0, 0, 0); padding-top: 6pt; font-family: Arial; margin-left: 5pt; width: 90%;">
    <span><?php print $ticket_details['bus_type']; ?></span>
                      </div>
                    </td>
                    <td valign="top" style="width: 23%;">
                      <div style="font-size: 10pt; text-decoration: underline; font-weight: bold; color: rgb(48, 90, 160); font-family: Arial;">
                         Reporting time 
                      </div>
                      <div style="font-size: 10pt; text-decoration: none; color: rgb(0, 0, 0); padding-top: 6pt; font-family: Arial;">
    <span><?php print $ticket_details['reporting_time']; ?></span>
                      </div>
                    </td>
                    <td valign="top">
                      <div style="font-size: 10pt; text-decoration: underline; font-weight: bold; color: rgb(48, 90, 160); font-family: Arial;">
                         Boarding point address 
                      </div>
                      <div style="margin-top: 5pt;">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size: 10pt; color: rgb(0, 0, 0); font-family: Arial;">
                          <tbody><tr>
                            <td valign="top" style="min-height: 18pt; width: 20%; font-size: 10pt; color: rgb(0, 0, 0); font-family: Arial;">
                              <strong>
    Location:
                              </strong>
                            </td>
                            <td valign="top" style="font-size: 10pt; color: rgb(0, 0, 0); font-family: Arial;">
    <span><?php print $ticket_details['bording_location']; ?></span>
                            </td>
                          </tr>
                          <tr>
                            <td style="width: 20%; font-size: 10pt; color: rgb(0, 0, 0); font-family: Arial;">
                              <strong>
    Landmark:
                              </strong>
                            </td>
                            <td align="left" style="font-size: 10pt; color: rgb(0, 0, 0); font-family: Arial;">
    <span><?php print $ticket_details['bording_landmark']; ?></span>
                            </td>
                          </tr>
                        </tbody></table>
                      </div>
                    </td>
                  </tr>
                </tbody></table>
              </div>
            </td>
          </tr>
          <tr>
            <td valign="top">
              <div style="margin-top: 0pt;">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                  <tbody><tr>
                    <td valign="top" align="left" style="width: 30%;">
                      <div style="font-size: 10pt; text-decoration: underline; font-weight: bold; color: rgb(48, 90, 160); font-family: Arial; margin-left: 3pt;">
                         Total fare 
                      </div>
                      <div style="margin-left: 3pt; font-size: 10pt; text-decoration: none; color: rgb(0, 0, 0); padding-top: 6pt; font-family: Arial;">
    <span><?php print $ticket_details['fare']; ?></span>
                      </div>
                    </td>
                    <td valign="top" align="left" style="width: 23%;">
                      <div style="font-size: 10pt; text-decoration: underline; font-weight: bold; color: rgb(48, 90, 160); font-family: Arial;">
                         Departure time 
                      </div>
                      <div style="font-size: 10pt; text-decoration: none; color: rgb(0, 0, 0); padding-top: 6pt; font-family: Arial;">
    <span><?php print $ticket_details['departure_time']; ?></span>
                      </div>
                    </td>
                    <td valign="top" colspan="2">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size: 10pt; color: rgb(0, 0, 0); font-family: Arial;">
                          <tbody><tr>
                            <td valign="top" style="width: 20%; font-size: 10pt; color: rgb(0, 0, 0); font-family: Arial;">
                              <strong>
    Address:
                              </strong>
                            </td>
                            <td align="left" style="font-size: 10pt; color: rgb(0, 0, 0); font-family: Arial;">
    <span> <?php print $ticket_details['bording_address']; ?> </span>
                            </td>
                          </tr>
                        </tbody></table>
                    </td>
                  </tr>
                </tbody></table>
              </div>
            </td>
          </tr>
          <tr>
            <td style="min-height: 25pt; font-size: 9pt; color: Gray; font-family: Arial; font-weight: bold;">
              <div style="margin-top: 4pt; width: 45%;">
                <span></span>
              </div>
            </td>
          </tr>
        </tbody></table>
      </td>
    </tr>
    
    <tr>
      <td>
        <table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family: Arial; font-size: 10pt;">
    <tbody><tr>
    <td style="text-decoration: underline; font-weight: bold; font-size: 11pt; font-family: Arial;">
        <p>
        </p>
        <p>
          Terms and conditions
        </p>
      </td>
    </tr>
    <tr>
    <td valign="top" style="width: 100%;">
              <table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family: Arial;">
                <tbody><tr>
                  <td valign="top" style="font-size: 8pt; width: 2%;">
                    <p>
                    </p>
                    <p>
                      1.
                    </p>
                  </td>
                  <td valign="top" align="left" style="font-family: Arial; font-size: 8pt; line-height: 1.5; width: 46%;">
                    <p>
                    </p>
                    <p style="line-height: 1.5;">
                      spot online* is ONLY a bus ticket agent. 
                                          It does not operate bus services of its own. 
    In order to provide a comprehensive choice of bus operators, 
    departure times and prices to customers, 
                                          it has tied up with many bus operators.<br> spot online' advice to customers is to choose bus operators they are aware of and whose service they are comfortable with. 
                    </p>
                    <div>
                      <strong>spot online' &nbsp;responsibilities include: 
                      </strong>
                      <ul style="list-style-type: none; padding: 0pt; margin: 1pt 0pt 0pt;">
                        <li style="padding: 0px;">
						   (1) Issuing a valid ticket (a ticket that will be accepted by the bus operator) for its' &nbsp;network of bus operators 
                        </li>
                        <li style="line-height: 1.5;">
                          (2) Providing refund and support in the event of cancellation 
                        </li>
                        <li>
                          (3) Providing customer support and information in case of any delays / inconvenience 
                        </li>
                      </ul>
                    </div>
                    <br>
                    <div style="line-height: 1.5;">
                      <strong>spot online' &nbsp;responsibilities do NOT include:
                      </strong>
                      <ul style="list-style-type: none; padding: 0pt; margin: 1pt 0pt 0pt; line-height: 1.5;">
                        <li>
								       (1) The bus operator's bus not departing / reaching on time 
                        </li>
                        <li>
                          (2) The bus operator's employees being rude 
                        </li>
                        <li>
								       (3) The bus operator's bus seats etc not being up to the customer's expectation 
                        </li>
                        <li>
								       (4) The bus operator canceling the trip due to unavoidable reasons 
                        </li>
                        <li>
								       (5) The baggage of the customer getting lost / stolen / damaged 
                        </li>
                        <li>
								       (6) The bus operator changing a customer's seat at the last minute to accommodate a lady / child 
                        </li>
                        <li>
                          (7) The customer waiting at the wrong boarding point (please call the bus operator to find out the exact boarding point if you are not a regular traveler on that particular bus) 
                        </li>
                        <li>
                          (8) The bus operator changing the boarding point and/or using a pick-up vehicle at the boarding point to take customers to the bus departure point 
                        </li>
                      </ul>
                    </div>
                  </td>
                  <td valign="top" align="right" style="font-size: 8pt; line-height: 1.5; font-family: Arial; width: 52%;">
                    <table width="94%" cellspacing="0" cellpadding="0" border="0" style="font-family: Arial; font-size: 8pt; line-height: 1.5;">
                      <tbody><tr>
                        <td valign="top" style="width: 6%;">
                          <ul style="list-style-type: none; padding: 0pt; margin: 1pt 0pt 0pt; line-height: 1.5;">
                            <li>
                              <p>
                                2.
                              </p>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <ul style="list-style-type: none; padding: 0pt; margin: 1pt 0pt 0pt; line-height: 1.5; text-align: left;">
                            <li style="font-family: Arial; font-size: 8pt;">
                              <p>
                                The departure time mentioned on the ticket are only tentative timings. However the bus will not leave the source before the time that is mentioned on the ticket.
                             </p>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td valign="top" style="width: 4%;">
                          <ul style="list-style-type: none; padding: 0pt; margin: 1pt 0pt 0pt; line-height: 1.5;">
                            <li>                            
                                3.                              
                            </li>
                          </ul>
                        </td>
                        <td>
                          <ul style="list-style-type: none; padding: 0pt; margin: 1pt 0pt 0pt; line-height: 1.5; text-align: left;">
                            <li style="font-family: Arial; font-size: 8pt;">
                              
                                Passengers are required to furnish the following at the time of boarding the bus:<br>(1) A copy of the ticket (A print out of the ticket or the print out of the ticket e-mail). <br>(2) A valid identity proof <br>Failing  to do so, they may not be allowed to board the bus.
                              
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td valign="top" style="width: 4%;">
                          <ul style="list-style-type: none; padding: 0pt; margin: 1pt 0pt 0pt; line-height: 1.5;">
                            <li>
                              <p>
                                4.
                              </p>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <ul style="list-style-type: none; padding: 0pt; margin: 1pt 0pt 0pt; line-height: 1.5; text-align: left;">
                            <li style="font-family: Arial; font-size: 8pt;">
                               <p>
                                <span>Change of bus: In case the bus operator changes the type of bus due to some reason, spot online will refund the differential amount to the customer upon being intimated by the customers in 24 hours of the journey.</span>
                               </p>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td valign="top" style="width: 4%;">
                          <ul style="list-style-type: none; padding: 0pt; margin: 1pt 0pt 0pt; line-height: 1.5;">
                            <li>
                                5.
                            </li>
                          </ul>
                        </td>
                        <td>
                          <ul style="list-style-type: none; padding: 0pt; margin: 1pt 0pt 0pt; line-height: 1.5; text-align: left;">
                            <li style="font-family: Arial; font-size: 8pt;">
                                <span>Cancellation Policy: For Diwakar Travels:Between 0 hours to 3 hours before journey, the cancellation charge is 100.0%.And, above cancellation charge is 10.0%.</span>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td valign="top" style="width: 4%;">
                          <ul style="list-style-type: none; padding: 0pt; margin: 1pt 0pt 0pt; line-height: 1.5;">
                            <li>
                              <p>
                                6.
                              </p>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <ul style="list-style-type: none; padding: 0pt; margin: 1pt 0pt 0pt; line-height: 1.5; text-align: left;">
                            <li style="font-family: Arial; font-size: 8pt;">
                            <p>
                                <span>In case one needs the refund to be credited back to his/her bank account, please write your cash coupon details to <a target="_blank" href="mailto:support@spot online.in">support@spot online.in</a> <br> * The home delivery charges (if any), will not be refunded in the event of ticket cancellation </span>
                            </p>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td valign="top" style="width: 4%;">
                          <ul style="list-style-type: none; padding: 0pt; margin: 1pt 0pt 0pt; line-height: 1.5;">
                            <li>
                                7.
                            </li>
                          </ul>
                        </td>
                        <td>
                          <ul style="list-style-type: none; padding: 0pt; margin: 1pt 0pt 0pt; line-height: 1.5; text-align: left;">
                            <li style="font-family: Arial; font-size: 8pt;">
                                In case a booking confirmation e-mail and sms gets delayed or fails because of technical reasons or as a result of incorrect e-mail ID / phone number provided by the user etc, a ticket will be considered 'booked' as long as the ticket shows up on the 
                                        confirmation page of <a target="_blank" href="http://www.spot online.in">www.spot online.in</a> 
                            </li>
                          </ul>
                        </td>
                      </tr>
                    </tbody></table>
                  </td>
                </tr>
                  <tr>
                      <td valign="top" colspan="3" style="font-size: 8pt; width: 2%;">&nbsp;
                      </td>
                  </tr>
              </tbody></table>
            </td>
</tr>
<tr>
<td colspan="2">
              <div>
                <table width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: rgb(250, 250, 250); margin: 0pt; border: 2pt solid rgb(188, 188, 188); line-height: 1.5;">
                  <tbody><tr>
                    <td align="center" style="width: 49%;">
                      <div style="margin-left: 1pt;">
                        <table width="97%" cellspacing="0" cellpadding="0" border="0">
                          <tbody><tr>
                            <td valign="top" style="min-height: 16pt; text-decoration: underline; font-size: 10pt; font-weight: bold; font-family: Arial;" colspan="7">
                               spot online contact details 
                            </td>
                          </tr>
                          <tr>
                            <td align="left" style="font-weight: bold; width: 21%; min-height: 15pt; font-size: 9pt; font-family: Arial;">
                               Ahmedabad 
                            </td>
                            <td align="left" style="color: rgb(188, 188, 188); font-size: 9pt; width: 1%;">
                               | 
                            </td>
                            <td align="right" style="width: 23%; margin-left: 3pt; font-size: 9pt; font-family: Arial;">
                               (079) 39412345 
                            </td>
                            <td style="width: 24px;">
                            </td>
                            <td align="left" style="font-weight: bold; width: 21%; min-height: 15pt; font-size: 9pt; font-family: Arial;">
                               Hyderabad 
                            </td>
                            <td align="left" style="color: rgb(188, 188, 188); font-size: 9pt; width: 1%;">
                               | 
                            </td>
                            <td align="right" style="width: 23%; margin-left: 3pt; font-size: 9pt; font-family: Arial;">
                               (040) 39412345 
                            </td>
                            
                          </tr>
                          <tr>
                            <td align="left" style="font-weight: bold; width: 21%; min-height: 15pt; font-size: 9pt; font-family: Arial;">
                               Bangalore 
                            </td>
                            <td align="left" style="color: rgb(188, 188, 188); font-size: 9pt; width: 1%;">
                               | 
                            </td>
                            <td align="right" style="width: 23%; margin-left: 3pt; font-size: 9pt; font-family: Arial;">
                               (080) 39412345 
                            </td>
                            <td style="width: 24px;">
                            </td>
                            
                            <td align="left" style="font-weight: bold; width: 21%; min-height: 15pt; font-size: 9pt; font-family: Arial;">
                               Mumbai 
                            </td>
                            <td align="left" style="color: rgb(188, 188, 188); font-size: 9pt; width: 1%;">
                               | 
                            </td>
                            <td align="right" style="width: 23%; margin-left: 3pt; font-size: 9pt; font-family: Arial;">
                               (022)  39412345 
                            </td>
                            
                            
                          </tr>
                          <tr>
                            <td align="left" style="font-weight: bold; width: 21%; min-height: 15pt; font-size: 9pt; font-family: Arial;">
                               Chennai 
                            </td>
                            <td align="left" style="color: rgb(188, 188, 188); font-size: 9pt; width: 1%;">
                               | 
                            </td>
                            <td align="right" style="width: 23%; margin-left: 3pt; font-size: 9pt; font-family: Arial;">
                               (044) 39412345 
                            </td>
                            <td style="width: 24px;">
                            </td>
                            
                            <td align="left" style="font-weight: bold; width: 21%; min-height: 15pt; font-size: 9pt; font-family: Arial;">
                               Pune 
                            </td>
                            <td align="left" style="color: rgb(188, 188, 188); font-size: 9pt; width: 1%;">
                               | 
                            </td>
                            <td align="right" style="width: 23%; margin-left: 3pt; font-size: 9pt; font-family: Arial;">
                               (020) 39412345 
                            </td>
                          </tr>
                          <tr>
                            <td align="left" style="font-weight: bold; width: 21%; min-height: 15pt; font-size: 9pt; font-family: Arial;">
                               Coimbatore 
                            </td>
                            <td align="left" style="color: rgb(188, 188, 188); font-size: 8pt; width: 1%;">
                               | 
                            </td>
                            <td align="right" style="width: 23%; margin-left: 3pt; font-size: 9pt; font-family: Arial;">
                               (0422) 3941234
                            </td>
                            <td>
                            </td>
                            <td align="left" style="font-weight: bold; width: 21%; min-height: 15pt; font-size: 9pt; font-family: Arial;">
                               Vijayawada 
                            </td>
                            <td align="left" style="color: rgb(188, 188, 188); font-size: 9pt; width: 1%;">
                               | 
                            </td>
                            <td align="right" style="width: 23%; margin-left: 3pt; font-size: 9pt; font-family: Arial;">
                               (0866) 3941234 
                            </td>
                          </tr>
                          
                          <tr>
                            <td align="left" style="font-weight: bold; width: 21%; min-height: 15pt; font-size: 9pt; font-family: Arial;">
                               Delhi 
                            </td>
                            <td align="left" style="color: rgb(188, 188, 188); font-size: 8pt; width: 1%;">
                               | 
                            </td>
                            <td align="right" style="width: 23%; margin-left: 3pt; font-size: 9pt; font-family: Arial;">
                               (011) 39412345
                            </td>
                            <td>
                            </td>
                            <td align="left" style="font-weight: bold; width: 21%; min-height: 15pt; font-size: 9pt; font-family: Arial;">
                               Vizag 
                            </td>
                            <td align="left" style="color: rgb(188, 188, 188); font-size: 9pt; width: 1%;">
                               | 
                            </td>
                            <td align="right" style="width: 23%; margin-left: 3pt; font-size: 9pt; font-family: Arial;">
                               (0891) 3941234 
                            </td>
                          </tr>
                          
                        </tbody></table>
                      </div>
                    </td>
                    <td style="width: 50%; border-left: 1pt solid rgb(188, 188, 188);">
                      <div>
                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                          <tbody><tr>
                            <td valign="top" style="min-height: 16pt; text-decoration: underline; font-size: 10pt; font-weight: bold; font-family: Arial;" colspan="3">
                               Whom should I call? 
                            </td>
                          </tr>
                          <tr>
                            <td align="left" style="font-weight: bold; width: 21%; font-size: 9pt; font-family: Arial; min-height: 20px;">
                               Boarding point related 
                            </td>
                            <td align="center" style="color: rgb(188, 188, 188); font-size: 9pt; width: 10%;">
                               | 
                            </td>
                            <td align="left" style="margin-left: 3pt; font-size: 9pt; font-family: Arial; min-height: 20px;">
                               Bus operator (# on top of the ticket) 
                            </td>
                          </tr>
                          <tr>
                            <td align="left" style="font-weight: bold; min-height: 15pt; font-size: 9pt; font-family: Arial; width: 35%;">
                               Timing related queries 
                            </td>
                            <td align="center" style="color: rgb(188, 188, 188); font-size: 8pt;">
                               | 
                            </td>
                            <td align="left" style="margin-left: 3pt; font-size: 9pt; font-family: Arial;">
                               Bus operator (# on top of the ticket) 
                            </td>
                          </tr>
                          <tr>
<td align="left" style="font-weight: bold; width: 15%; min-height: 15pt; font-size: 9pt; font-family: Arial;">
                               Cancellation 
                            </td>
<td align="center" style="color: rgb(188, 188, 188); font-size: 9pt;">
                               | 
                            </td>
<td align="left" style="margin-left: 3pt; font-size: 9pt; font-family: Arial;">
                               spot online 
                            </td>
</tr>

                          <tr>
<td align="left" style="font-weight: bold; width: 15%; min-height: 15pt; font-size: 9pt; font-family: Arial;">
                               Refund 
                            </td>
<td align="center" style="color: rgb(188, 188, 188); font-size: 9pt;">
                               | 
                            </td>
<td align="left" style="margin-left: 3pt; font-size: 9pt; font-family: Arial;">
                               spot online 
                            </td>
</tr>

                        </tbody></table>
                      </div>
                    </td>
                  </tr>
                </tbody></table>
              </div>
            </td>
</tr>
</tbody></table>

      </td>
    </tr>
  </tbody></table>
</div>