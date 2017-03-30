// JavaScript Document
(function() {

"use strict";
	
var thumbcon = document.querySelector('.thumbcon');
var links = thumbcon.querySelectorAll("a");
var main = document.querySelector("main");
var httpRequest;
var vidcon = document.querySelector('.vidcon');
var mainvid = document.querySelector('.mainvid');
var vidtitle = document.querySelector('.vidtitle');
var viddescp1 = document.querySelector('.viddescp1');
var viddescp2 = document.querySelector('.viddescp2');
var viddescp3 = document.querySelector('.viddescp3');
var vidcaption = document.querySelector('.vidcaption');
var engbut = document.getElementById('1');
var frenchbut = document.getElementById('2');
var names = [null, "Ryley", "Andrea", "Justin", "Carol"];
var nametext = document.querySelector('.nametext');

function change1(){

engbut.classList.add("active");
frenchbut.classList.remove("active");	
	
}

function change2(){

frenchbut.classList.add("active");	
engbut.classList.remove("active");
	
}


function requestvid(evt){
evt.preventDefault();

httpRequest = new XMLHttpRequest();

if(!httpRequest){

main.innerHTML = "Your browser cannot handle AJAX, please consider updating it to the latest version.";
return false;

}


httpRequest.onreadystatechange = loadstoryvid;
httpRequest.open('GET', 'admin/phpscripts/get_vid.php' + '?vid_id=' + evt.target.className);
httpRequest.send();	

nametext.innerHTML = names[evt.target.className];
	
}

function loadstoryvid(){
	
if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
var viddata = JSON.parse(httpRequest.responseText);
mainvid.src= viddata.vid_path;
vidcon.load();
if(engbut.classList.contains('active')){
vidtitle.innerHTML = viddata.vid_title;
viddescp1.innerHTML = viddata.vid_desc_p1;
viddescp2.innerHTML = viddata.vid_desc_p2;
viddescp3.innerHTML = viddata.vid_desc_p3;
vidcaption.innerHTML = viddata.vid_caption;
}else if(frenchbut.classList.contains('active')){
vidtitle.innerHTML = viddata.vid_title_fr;
viddescp1.innerHTML = viddata.vid_desc_p1_fr;
viddescp2.innerHTML = viddata.vid_desc_p2_fr;
viddescp3.innerHTML = viddata.vid_desc_p3_fr;
vidcaption.innerHTML = viddata.vid_caption_fr;
}
}
}

[].forEach.call(links, function(links) {
	//console.log("listener working");
	links.addEventListener('click', requestvid, false);
});

engbut.addEventListener("click", change1, false);
frenchbut.addEventListener("click", change2, false);

})();