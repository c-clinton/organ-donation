// JavaScript Document

(function() {

	"use strict";

var httpRequest;
var nav = document.querySelector('nav');
var langbuts = nav.querySelectorAll('a');
var infotitle1 = document.querySelector('.infotitle1');
var infotitle2 = document.querySelector('.infotitle2');
var infotitle3 = document.querySelector('.infotitle3');
var process1 = document.querySelector('.donationprocess1');
var process2 = document.querySelector('.donationprocess2');
var process3 = document.querySelector('.donationprocess3');
var process4 = document.querySelector('.donationprocess4');
var process5 = document.querySelector('.donationprocess5');
var process6 = document.querySelector('.donationprocess6');
var main = document.querySelector("main");


function requestinfo(evt){

httpRequest = new XMLHttpRequest();

if(!httpRequest){

main.innerHTML = "Your browser cannot handle AJAX, please consider updating it to the latest version.";
return false;

}

httpRequest.onreadystatechange = loadinfocontent;
httpRequest.open('GET', 'admin/phpscripts/get_info.php' + '?info_id=' + evt.target.id);
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
}

[].forEach.call(langbuts, function(langbuts) {
	langbuts.addEventListener("click", requestinfo, false);
	});
	
	})();