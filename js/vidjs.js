// JavaScript Document
(function() {

"use strict";
	
var thumbcon = document.querySelector('.thumbcon');
var links = thumbcon.querySelectorAll("a");
var main = document.querySelector("main");
var httpRequest;


var vidtitle = document.querySelector('.vidtitle');
var viddescp1 = document.querySelector('.viddescp1');
var viddescp2 = document.querySelector('.viddescp2');
var viddescp3 = document.querySelector('.viddescp3');
var vidcaption = document.querySelector('.vidcaption');

function requestvid(evt){
evt.preventDefault();
console.log(evt.target.className);

httpRequest = new XMLHttpRequest();

if(!httpRequest){

main.innerHTML = "Your browser cannot handle AJAX, please consider updating it to the latest version.";
return false;

}

httpRequest.onreadystatechange = loadstoryvid;
httpRequest.open('GET', 'admin/phpscripts/get_vid.php' + '?vid_id=' + evt.target.className);
httpRequest.send();	
	
}

function loadstoryvid(){
	
if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
var viddata = JSON.parse(httpRequest.responseText);
vidtitle.innerHTML = viddata.vid_title;
viddescp1.innerHTML = viddata.vid_desc_p1_fr;
viddescp2.innerHTML = viddata.vid_desc_p2_fr;
viddescp3.innerHTML = viddata.vid_desc_p3_fr;
vidcaption.innerHTML = viddata.vid_caption_fr;
	
}
}

[].forEach.call(links, function(links) {
	//console.log("listener working");
	links.addEventListener('click', requestvid, false);
});

})();