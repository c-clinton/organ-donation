
$(document).foundation();

(function() {

	"use strict";

	var vid = document.querySelector('#introvid');
	var header = document.querySelector('.largeimgcon');
	var skip = document.querySelector('#skip');

	function showheader(evt){

	evt.preventDefault();
	vid.classList.add("hidden");
	vid.classList.remove("visible");
	header.classList.add("visible");
	header.classList.remove("hidden");
	}

	skip.addEventListener("click", showheader, false);
	vid.addEventListener("ended", showheader, false);


})();