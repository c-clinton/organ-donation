$(document).foundation();

(function() {

	"use strict";

	var vidcon = document.querySelector('#introvid');
	var vid = document.querySelector('#vid');
	var header = document.querySelector('.largeimgcon');
	var skip = document.querySelector('#skip');

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