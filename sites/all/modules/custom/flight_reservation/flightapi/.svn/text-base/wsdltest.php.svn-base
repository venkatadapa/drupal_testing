<?php set_time_limit(0); 
try
{
	require_once('nusoap.php'); 
	
	//$wsdl = "http://202.54.232.144/Affiliate/services/CFlightAffiliateWebServices?WSDL";
	//$wsdl = "http://202.54.232.144/Affiliate/services/CFlightAffiliateWebServices?WSDL";
        $wsdl = "http://www.travelpartnernetwork.net/Affiliate/services/CFlightAffiliateWebServices?WSDL";
	$client = new nusoap_client($wsdl);
	$client->setHeaders('<AuthenticationToken><Username>suryaprabha</Username><Password>surya7303</Password></AuthenticationToken>');

	$param = array('param0' => '<MMT_FlightSearchRQ xmlns="http://search.elements.flight.webservices.mmt.com">
<TripType>O</TripType>
<OriginLocation>Hyderabad</OriginLocation>
<DestinationLocation>Bangalore</DestinationLocation>
<DepartureTime>2011-02-28T00:01:00</DepartureTime>
<ReturnDateTime></ReturnDateTime>
<Class>E</Class>
<NoofAdults>6</NoofAdults>
<NoofChildren>0</NoofChildren>
<NoofInfant>0</NoofInfant>
<NoofStops>1</NoofStops>

 <ResidentOfIndia>true</ResidentOfIndia> 
 <DepartureDateRange>
  <from /> 
  <to /> 
  </DepartureDateRange>
 <ReturnDateRange>
  <from /> 
  <to /> 
  </ReturnDateRange>
  <LCCStatus /> 
  <NightFlight>yes</NightFlight> 
  <AirlinePref></AirlinePref>
</MMT_FlightSearchRQ>');

	$client->call('getFlightSearchResults', $param, 'http://flight.webservices.mmt.com');

	// Display the request and response
	//echo '<h2>Request</h2>';
	//echo '<pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
	//echo '<h2>Response</h2>';
	//echo '<pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
}
catch(exception $err)
{
	echo "Error:" . $err -> getMessage();
}

       //print_r($client->call('getFlightSearchResults', $param, 'http://flight.webservices.mmt.com'));
       // Display the request and response
	echo '<h2>Request</h2>';
	echo '<pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
        echo '<h2>Response</h2>';
        echo '<pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
//print '<pre>';
//print_r($client);
//echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
echo '<h1>Errors If any: '.$client->getError().$client->fault.'</h1>';
echo '<h1>Debuging info:</h1> <pre>'.$client->debug_str.'</pre>';

?>	