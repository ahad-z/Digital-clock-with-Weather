 
function clock(){

 	var time = new Date();

 	var hh = time.getHours();

 	var mm = time.getMinutes();

 	var ss = time.getSeconds();

 	var times = time.toDateString();

 	var session = "AM";

 	if(hh == 0){
 		hh = 12;
 	}
 		if(hh > 12){
 			hh = hh-12;
 			session = "PM";
 		}
 		// if(hh<10){

 		// 	hh = "0" + hh;
 		// }
 		// we can also do it using  ternary operation...

 		hh = (hh<10) ? "0" + hh : hh;

 		mm = (mm<10) ? "0" + mm : mm;

 		ss = (ss<10) ? "0" + ss : ss;

 	

 	document.getElementsByClassName('clock')[0].innerHTML = `${hh} : ${mm} : ${ss} ` + session;

 	document.getElementsByClassName('date')[0].innerHTML  = times;



 
 }
 clock();

 setInterval(clock, 1000);



	