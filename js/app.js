$(document).foundation();

(function() {

	"use strict";

	
	var engbut = document.getElementById('1');
	var frenchbut = document.getElementById('2');
	var includeeng = [document.querySelector('.naveng'), document.querySelector('.baneng'), document.querySelector('.footereng')]; 
	var includefr = [document.querySelector('.navfr'), document.querySelector('.footerfr'),  document.querySelector('.banfr')];

function changenaveng(){

for(var i=0; i<includefr.length; i++){

includefr[i].style.display="none";	
	
}

for(i=0; i<includeeng.length; i++){

includeeng[i].style.display="block";	
	
}
	
}

function changenavfr(){

for(var j=0; j<includeeng.length; j++){

includeeng[j].style.display="none";	
	
}

for(j=0; j<includefr.length; j++){

includefr[j].style.display="block";	
	
}
}
	
engbut.addEventListener("click", changenaveng, false);
frenchbut.addEventListener("click", changenavfr, false);


})();