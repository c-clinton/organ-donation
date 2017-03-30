// JavaScript Document

(function() {
	
	"use strict";
	
var vidcon = document.querySelector('#introvid');
	var vid = document.querySelector('#vid');
	var imgheader = document.querySelector('.largeimgcon');
	var skip = document.querySelector('#skip');
	
	function showheader(){
	vidcon.classList.add("hidden");
	vidcon.classList.remove("visible");
	imgheader.classList.add("visible");
	imgheader.classList.remove("hidden");
	}
	
	function stopvid(e){
		
	e.preventDefault();
		
	vid.pause();
	
	vidcon.classList.add("hidden");
	vidcon.classList.remove("visible");
	imgheader.classList.add("visible");
	imgheader.classList.remove("hidden");
	}
	
	
	skip.addEventListener("mousedown", stopvid, false);
	vid.addEventListener("ended", showheader, false);
	
	})();