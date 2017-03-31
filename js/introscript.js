// JavaScript Document

(function() {
	
	"use strict";
	
var vidcon = document.querySelector('#introvid');
	var vid = document.querySelector('#vid');
	var imgheader = document.querySelector('.largeimgcon');
	var skip = document.querySelectorAll('.skip');
	var things = [document.querySelector('.thing1'), document.querySelector('.thing2'), document.querySelector('.thing3')];
	
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
	anim();
	}
	
	function anim(){
	
	things[0].style.animation = "fadein 2s linear";		
	things[1].style.animation = "fadein 4s linear";	
	things[2].style.animation = "fadein 6s linear";	
		
		
	}
	
	[].forEach.call(skip, function(skip) {
	skip.addEventListener('click', stopvid, false);
});
	vid.addEventListener("ended", showheader, false);
	vid.addEventListener("ended", anim, false);
	
	})();