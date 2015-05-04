function checkMonth(m) {
	if(m==0 || m==2 || m==4 || m==6 || m==7 || m==9 || m==11){
		return 31;}
		else {if(m==1){
			return 28;}
			else{
				return 30;}}

			}

			function checkTime(i) {
				if (i<10) {i = "0" + i};
				return i;
			}

			function targetDate() {
				var currentDate = new Date();
				var futureDate  = new Date(currentDate.getFullYear() + 1, 0, 08,23,59,59);
				var day = calcDate(futureDate);
				var hr = Math.abs(futureDate.getHours()-currentDate.getHours());
				var mn = Math.abs(futureDate.getMinutes()-currentDate.getMinutes());
				var sec = Math.abs(futureDate.getSeconds()-currentDate.getSeconds());
				mn = checkTime(mn);
//sec = checkTime(mn);
if(sec < 10)
	document.getElementById('new').innerHTML = day+":"+hr+":"+mn+":0"+sec;
else
	document.getElementById('new').innerHTML = day+":"+hr+":"+mn+":"+sec;
var ti = setTimeout(function(){targetDate()},500);
//calcDate(futureDate);
}

function calcDate(futureDate) {
	var day = 0;
	var today = new Date();
	if(futureDate.getFullYear() > today.getFullYear()) {
		var mon = 12 - today.getMonth() + futureDate.getMonth();
		for(var i = today.getMonth()+1; i < 12; i++)
			day += checkMonth(i);
		var thisMonth = checkMonth(today.getMonth());
		day = day + (thisMonth - today.getDate())+futureDate.getDate();
	}

//document.getElementById('exp').innerHTML = day+":"+mon;
return day;

}