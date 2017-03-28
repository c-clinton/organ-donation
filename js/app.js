

(function() {

	"use strict";

	var vidcon = document.querySelector('#introvid');
	var vid = document.querySelector('#vid');
	var header = document.querySelector('.largeimgcon');
	var skip = document.querySelector('#skip');
	var greeting = document.querySelector('#greeting');
		
	var now = new Date();
	var time = now.getHours();

	if (time >  0){ 
	greeting.innerHTML = "Mornin' Sunshine! "; 
	}
	if (time >  6){ 
	greeting.innerHTML = "Good morning ";    
	}
	if (time > 12){ 
	greeting.innerHTML = "Good afternoon ";   
	}
	if (time > 17){ 
	greeting.innerHTML = "Good evening ";    
	} 
	if (time > 22){ 
	greeting.innerHTML = "Go to bed, ";
	}

	function showheader(evt){

	evt.preventDefault();
	vidcon.classList.add("hidden");
	vidcon.classList.remove("visible");
	header.classList.add("visible");
	header.classList.remove("hidden");
	}
	
	function stopvid(e){
		
	e.preventDefault();
		
	vid.pause();
	vidcon.classList.add("hidden");
	vidcon.classList.remove("visible");
	header.classList.add("visible");
	header.classList.remove("hidden");
	}

	skip.addEventListener("click", stopvid, false);
	vidcon.addEventListener("ended", showheader, false);


})();