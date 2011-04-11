// Variable for counting the number of available seats
var userChosen = 0;

var AvailElements=0;

/** This function is used for creating the table dynamically   */

function createRows(XMLobj,PassengerNo,seatType,rowIdForDiffAmnt)
{

var seatId = 0;

var createSeatId = 0;

seatId = createSeatId;
var test =true;
var create= '';

for(q=0;q<XMLobj.length;q++)
{

//alert("the length of seatmap is--------->"+XMLobj.length);
var seatmap = XMLobj[q];

//alert("length we require for deck-------------->"+seatmap.deck.length);
for (t=0;t<seatmap.deck.length;t++)
{
decks = seatmap.deck[t];

if(t==1){

create =create + "</table></td></tr><tr><td class='bottom'></td></tr></table>"
			+	"<table class='shell' border='0' cellspacing='0' cellpadding='0' style='width:auto'>"
			+  "<tr>"
			+	"<td class='left' rowspan='3'><img src='images/bus-left-top.gif' height='40' width='61' border='0'/><span>Upper Deck</span></td>"
			+	"<td class='top'></td>"
			+	"<td class='right' rowspan='3'><img src='images/bus-right-top.gif' height='13' width='5' border='0'/></td>"
			+   "</tr><tr><td class='center'><table id='upperDeckTable' border='0' cellspacing='0' cellpadding='0' align='right'>";



	





}



//alert("length we require for deck-------------->"+decks.column);
for (i=0;i<decks.column.length;i++)
{
//alert("length we require for column------->"+decks.column.length);
create = create+ "<tr>";
//alert("has");
columns = decks.column[i];
//alert("start");
colId = columns.id;
//alert("ColumId for Col "+i +" = " + colId );
	var j=0;
	//alert("length we require------->"+columns.row.length);
	for(j=0; j<columns.row.length ;j++){

	rows = columns.row[j];
	rowId= rows.id;
	//alert("row id for column "+ i+ " -->"+rowId);
	var k=0;
	
		for(k=0;k<rows.seat.length;k++){


		seats =rows.seat[k];
		//alert("seatTpe - " +seats.seatType + " SeatNumber - "+ seats.seatNumber +" SeatStatus - "+seats.seatStatus+" SeatFare - "+seats.seatFare);
		
		if(seats.seatStatus=='blank'){
		if(seats.seatType!='skip'){
		//alert(seats.seatType);
		create = create + '<td></td>';}
		}
		
		else{
		if(seats.seatStatus!= '0')
		{
			if(seats.seatStatus == '1012'){
				if(seats.seatType == "seat")
				{
					create=create+  "<td value='' class='bookedFemaleSeater'>"+seats.seatNumber+"</td>";
				}else{
					create=create+  "<td value='' colspan='2' class='bookedFemaleSleeper'>"+seats.seatNumber+"</td>";
				}
			}else if(seats.seatStatus == '1010'){
				if(seats.seatType == "seat")
				{
					create=create+  "<td value='' class='bookedFemaleSeater'>"+seats.seatNumber+"</td>";
				}else{
					create=create+  "<td value='' colspan='2' class='bookedFemaleSleeper'>"+seats.seatNumber+"</td>";
				}
			}else{
				if(seats.seatType == "seat")
				{
					create=create+  "<td value='' class='bookedSeater'>"+seats.seatNumber+"</td>";
				}else
				{
					create=create+  "<td value='' colspan='2' class='bookedSleeper'>"+seats.seatNumber+"</td>";
				}
			}
		}
		
		else
		{
		if(seats.seatType == "seat")
		{
		if(seatType.toLowerCase().indexOf('seat')!=-1)
		{
		create=create+  "<td value='white' class='availableSeater' onclick='javascript:swapImage(this,"+PassengerNo +","+seats.seatFare+","+rowIdForDiffAmnt+");' title='Seat Fare: "+seats.seatFare+"'>"+seats.seatNumber+"</td>";
		}
		else
		{
		create=create+  "<td value='white' class='disabledSeat' onclick='javascript:swapImage(this,"+PassengerNo +");'>"+seats.seatNumber+"</td>";
		}
		}
		else
		{
		if(seatType.toLowerCase().indexOf('sleeper')!=-1)
		{
		create=create+  "<td value='white' colspan='2' class='availableSleeper' onclick='javascript:swapImage(this,"+PassengerNo +","+seats.seatFare+","+rowIdForDiffAmnt+");' title='Sleeper Fare: "+seats.seatFare+"'>"+seats.seatNumber+"</td>";
		}
		else
		{
		create=create+  "<td value='white' colspan='2' class='disabledSleeper' onclick='javascript:swapImage(this,"+PassengerNo +");'>"+seats.seatNumber+"</td>";
		}
		}
		}
		}
	


		}
		}
		}
		
		create=create+ "</tr>";
		//alert(create);
		
		}
		
		}
//		create=create+ "</table>";
		//alert("value of create------>"+create);
return create;
		} //end of function


  



/**  THIS FUNCTION IS USED FOR SWAPPING AS REQUIRED ACCORDING TO CONDITIONS*/

function swapImage(obj,passNo,seatFare,rowId)
{

if(document.getElementById("showErrror"+rowId)!=null){
	document.getElementById("showErrror"+rowId).style.display='none';
}
if(document.getElementById("proceed"+seatId)!=null){
	document.getElementById("proceed"+seatId).disabled=false;
}



userChosen = intializeGlobal('results_depart');
//alert(userChosen+'------'+seatFare+'----'+rowId);
if(userChosen < passNo)
{

if(obj.className == 'availableSeater')
{

obj.className='currentSeater';

obj.value='green';

userChosen++;
recalculateFare('results_depart',"Add",seatFare,rowId);

}
else if(obj.className == 'currentSeater')
{

obj.className='availableSeater';

obj.value='white';

userChosen--;
recalculateFare('results_depart',"",seatFare,rowId);

}
else if(obj.className == 'availableSleeper')
{

obj.className='currentSleeper';
obj.value = 'green';

userChosen++;
recalculateFare('results_depart',"Add",seatFare,rowId);
//alert("avail after"+ userChosen);

}
else if(obj.className == 'currentSleeper')
{

obj.className='availableSleeper';
obj.value = 'white';

userChosen--;
recalculateFare('results_depart',"",seatFare,rowId);

}

}
else
{

if(obj.className == 'currentSeater')
{

obj.className='availableSeater';

obj.value='white';

userChosen--;
recalculateFare('results_depart',"",seatFare,rowId);

}
else if(obj.className == 'currentSleeper')
{

obj.className='availableSleeper';
obj.value='white';
userChosen--;
recalculateFare('results_depart',"",seatFare,rowId);

}



}
//alert("@@ obj.value "+ obj.value);
}





function recalculateFare(tableId,operation,seatFare,rowId){
	
	
	if(seatFare > 0){
		
		var tripOneWay = false;
		if(tableId == 'results_depart'){
			tripOneWay = true;
		}
		
		
	
		//alert(passNo+'----selected----seatFare--------'+seatFare);
		
		var departTable = document.getElementById(tableId);
		var fromprice;
		//alert('----selected----fromprice--------'+fromprice);
		var dt = 1;
			while(departTable.rows[dt]!=null){
				var row = departTable .rows[dt];
				var radioButton = row.cells[0].getElementsByTagName('input')[0];
				//alert('--checking--got the checked  one---'+dt);
				if(dt==rowId){
					//alert('----got the checked  one---'+dt);
					fromprice = row.cells[5].innerHTML;
					break;
				}
				dt++;
			}
		
		var fromprice1 = parseFloat(fromprice);
		var seatFare1 = parseFloat(seatFare);
		var differenceFare = parseFloat(seatFare1 - fromprice1);
		var totalFare = parseFloat(document.getElementById("resultstotal"+rowId).innerHTML);
		
		
		//alert(seatFare1+'----selected----fromprice---$$$$$-----'+fromprice1);
		
	 
			var previousDiffamnt;
			if(tripOneWay){
				previousDiffamnt = parseFloat(document.getElementById('diffSeatAmountDepart'+rowId).value);
			}else{
				previousDiffamnt = parseFloat(document.getElementById('diffSeatAmountReturn'+rowId).value);
			}	
			
			
			
			//alert(totalFare+'---seatFare Greater than fromprice--'+differenceFare);
			var price; 
			if(operation == 'Add'){
				price = '' + parseFloat(totalFare + differenceFare);
				if(tripOneWay){
					document.getElementById('diffSeatAmountDepart'+rowId).value = previousDiffamnt + differenceFare;
					var hiddentotalChargesForDerpart = parseFloat(document.getElementById('hiddentotalChargesForDerpart').value);	
					document.getElementById('hiddentotalChargesForDerpart').value = hiddentotalChargesForDerpart + differenceFare;
				}else{
					document.getElementById('diffSeatAmountReturn'+rowId).value = previousDiffamnt + differenceFare;
					//var hiddentotalChargesForReturn = parseFloat(document.getElementById('hiddentotalChargesForReturn').value);	
					//document.getElementById('hiddentotalChargesForReturn').value = hiddentotalChargesForReturn + differenceFare;
					
				}
			}else{
				price = '' + parseFloat(totalFare - differenceFare);
				if(tripOneWay){
					document.getElementById('diffSeatAmountDepart'+rowId).value = previousDiffamnt - differenceFare;
					var hiddentotalChargesForDerpart = parseFloat(document.getElementById('hiddentotalChargesForDerpart').value);	
					document.getElementById('hiddentotalChargesForDerpart').value = hiddentotalChargesForDerpart - differenceFare;
				}else{
					document.getElementById('diffSeatAmountReturn'+rowId).value = previousDiffamnt - differenceFare;
					//var hiddentotalChargesForReturn = parseFloat(document.getElementById('hiddentotalChargesForReturn').value);	
					//document.getElementById('hiddentotalChargesForReturn').value = hiddentotalChargesForReturn - differenceFare;
					//alert('-------minusing---'+document.getElementById('diffSeatAmountReturn'+rowId).value);
				}
			}
			//alert(document.getElementById('diffSeatAmountDepart'+rowId).value);
			//alert(document.getElementById('diffSeatAmountReturn'+rowId).value);
			//price = '' + parseFloat(totalFare + differenceFare);
			
			if(price.indexOf('.')==-1){
				
				price =price+".00";
			}
			var index =price.substring(price.indexOf('.')+3,price.indexOf('.')+4);0
			price=price.substring(0, price.indexOf('.')+3);
			document.getElementById("resultstotal"+rowId).innerHTML = ''+ price;
			
		 
		
		
		//alert('not gone naywhere');
	}


}









function checkBooked(identity, arrUser)
{

var tempQty = new Array();

tempQty = arrUser.split(",")

for(tempIncr =0; tempIncr< tempQty.length; tempIncr++)
{

if(identity == parseInt(tempQty[tempIncr]))
{

return 0;

}
else
{}

}

}






function changebgcolor(rowno) {


document.getElementById('results_depart').rows[rowno].style.color='#336699';

}
