// Variable for counting the number of available seats
var userChosenReurn = 0;

var AvailElementsReturn=0;

/** This function is used for creating the table dynamically   */

function createRowsReturn(XMLobj,PassengerNo,seatType,rowIdForDiffAmnt)
{

var seatId = 0;
create = create + "";

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
		//alert("seatTpe - " +seats.seatType + " SeatNumber - "+ seats.seatNumber +" SeatStatus - "+seats.seatStatus);
		
		if(seats.seatStatus=='blank'){
		if(seats.seatType!='skip'){
		//alert(seats.seatType);
		create = create + '<td></td>';}
		}
		
		else{
		if(seats.seatStatus!= '0')
		{
		if(seats.seatType == "seat")
		{
		create=create+  "<td value='' class='bookedSeater'>"+seats.seatNumber+"</td>";
		}else
		{
		create=create+  "<td value='' colspan='2' class='bookedSleeper'>"+seats.seatNumber+"</td>";
		}
		}
		
		else
		{
		if(seats.seatType == "seat")
		{
		if(seatType.toLowerCase().indexOf('seat')!=-1)
		{
		create=create+  "<td value='white' class='availableSeater' onclick='javascript:swapImageRetun(this,"+PassengerNo +","+seats.seatFare+","+rowIdForDiffAmnt+");' title='Seat Fare: "+seats.seatFare+"'>"+seats.seatNumber+"</td>";
		}
		else
		{
		create=create+  "<td value='white' class='disabledSeat' onclick='javascript:swapImageRetun(this,"+PassengerNo +");'>"+seats.seatNumber+"</td>";
		}
		}
		else
		{
		if(seatType.toLowerCase().indexOf('sleeper')!=-1)
		{
		create=create+  "<td value='white' colspan='2' class='availableSleeper' onclick='javascript:swapImageRetun(this,"+PassengerNo +","+seats.seatFare+","+rowIdForDiffAmnt+");' title='Sleeper Fare: "+seats.seatFare+"'>"+seats.seatNumber+"</td>";
		}
		else
		{
		create=create+  "<td value='white' colspan='2' class='disabledSleeper' onclick='javascript:swapImageRetun(this,"+PassengerNo +");'>"+seats.seatNumber+"</td>";
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

function swapImageRetun(obj,passNo,seatFare,rowId)
{
userChosenReurn = intializeGlobal('results_return');
if(userChosenReurn < passNo)
{

if(obj.className == 'availableSeater')
{

obj.className='currentSeater';

obj.value='green';

userChosenReurn++;
recalculateFare('results_return',"Add",seatFare,rowId);

}
else if(obj.className == 'currentSeater')
{

obj.className='availableSeater';

obj.value='white';

userChosenReurn--;
recalculateFare('results_return',"",seatFare,rowId);

}
else if(obj.className == 'currentSleeper')
{

obj.className='availableSleeper';
obj.value = 'white';
userChosenReurn--;
recalculateFare('results_return',"",seatFare,rowId);

}
else if(obj.className == 'availableSleeper')
{

obj.className='currentSleeper';
obj.value = 'green';
userChosenReurn++;
recalculateFare('results_return',"Add",seatFare,rowId);

}
}
else
{

if(obj.className == 'currentSeater')
{

obj.className='availableSeater';

obj.value='white';

userChosenReurn--;
recalculateFare('results_return',"",seatFare,rowId);

}
else if(obj.className == 'currentSleeper')
{

obj.className='availableSleeper';

obj.value = 'white';
userChosenReurn--;
recalculateFare('results_return',"",seatFare,rowId);

}

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

