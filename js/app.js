$(document).foundation();

(function() {

	"use strict";

	var vidcon = document.querySelector('#introvid');
	var vid = document.querySelector('#vid');
	var header = document.querySelector('.largeimgcon');
	var skip = document.querySelector('#skip');
	
	function showheader(){
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
	
var nav = document.querySelector('nav');
	
var langbuts = nav.querySelectorAll('a');


	
	var main = document.querySelector("main");
	var httpRequest;
	
function requesthome(evt){

httpRequest = new XMLHttpRequest();

if(!httpRequest){

main.innerHTML = "Your browser cannot handle AJAX, please consider updating it to the latest version.";
return false;

}

httpRequest.onreadystatechange = loadhomecontent;
httpRequest.open('GET', 'admin/phpscripts/get_home.php' + '?home_id=' + evt.target.id);
httpRequest.send();

}


var hometitlesmall = document.querySelector('.hometitle1-0');
var hometitlebig = document.querySelector('.hometitle1-1');
var hometitle2 = document.querySelector('.hometitle2');
var s1p1small = document.querySelector('.ourmission1-0');
var s1p2small = document.querySelector('.ourmission2-0');
var s1p1big = document.querySelector('.ourmission1-1');
var s1p2big = document.querySelector('.ourmission2-1');
var s2p1 = document.querySelector('.getinvolved1');
var s2p2 = document.querySelector('.getinvolved2');
var s2p3 = document.querySelector('.getinvolved3');

function loadhomecontent(){
	
if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){

var homedata = JSON.parse(httpRequest.responseText);
hometitlesmall.innerHTML = homedata.home_section_1_title;
hometitlebig.innerHTML = homedata.home_section_1_title;
hometitle2.innerHTML = homedata.home_section_2_title;
s1p1small.innerHTML = homedata.home_s1_p1;
s1p2small.innerHTML = homedata.home_s1_p2;
s1p1big.innerHTML = homedata.home_s1_p1;
s1p2big.innerHTML = homedata.home_s1_p2;
s2p1.innerHTML = homedata.home_s2_p1;
s2p2.innerHTML = homedata.home_s2_p2;
s2p3.innerHTML = homedata.home_s2_p3;
	
}
}

	skip.addEventListener("mousedown", stopvid, false);
	vid.addEventListener("ended", showheader, false);
	window.addEventListener("load", requesthome, false);
	[].forEach.call(langbuts, function(langbuts) {
	langbuts.addEventListener("click", requesthome, false);
	});

/*var infotitle1 = document.querySelector('.infotitle1');
var infotitle2 = document.querySelector('.infotitle2');
var infotitle3 = document.querySelector('.infotitle3');
var process1 = document.querySelector('.donationprocess1');
var process2 = document.querySelector('.donationprocess2');
var process3 = document.querySelector('.donationprocess3');
var process4 = document.querySelector('.donationprocess4');
var process5 = document.querySelector('.donationprocess5');
var process6 = document.querySelector('.donationprocess6');


function requestinfo(){

httpRequest = new XMLHttpRequest();

if(!httpRequest){

main.innerHTML = "Your browser cannot handle AJAX, please consider updating it to the latest version.";
return false;

}

httpRequest.onreadystatechange = loadinfocontent;
httpRequest.open('GET', 'admin/phpscripts/get_info.php' + '?info_id=2');
httpRequest.send();

}

function loadinfocontent(){
	
if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){

var infodata = JSON.parse(httpRequest.responseText);
infotitle1.innerHTML = infodata.info_title1;
infotitle2.innerHTML = infodata.info_title2;
infotitle3.innerHTML = infodata.info_title3;
process1.innerHTML = infodata.info_p1;
process2.innerHTML = infodata.info_p2;
process3.innerHTML = infodata.info_p3;
process4.innerHTML = infodata.info_p4;
process5.innerHTML = infodata.info_p5;
process6.innerHTML = infodata.info_p6;
}
}*/

})();