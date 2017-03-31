// JavaScript Document

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
var engbut = document.getElementById('1');
var frenchbut = document.getElementById('2');

var faqen = document.querySelectorAll('.eng');
var faqfr = document.querySelectorAll('.fr');


function loaddefault(){

for(var i=0; i<faqfr.length;i++){
faqfr[i].style.display="none";
}	
	
}


function change1(){

engbut.classList.add("active");
frenchbut.classList.remove("active");
for(var i=0; i<faqen.length;i++){
faqen[i].style.display="block";
}
for(i=0; i<faqfr.length;i++){
faqfr[i].style.display="none";
}
request();
	
}

function change2(){

frenchbut.classList.add("active");	
engbut.classList.remove("active");
for(var i=0; i<faqen.length;i++){
faqen[i].style.display="none";
}
for(i=0; i<faqfr.length;i++){
faqfr[i].style.display="block";
}
request();
	
}

function request(){
	
httpRequest = new XMLHttpRequest();

if(!httpRequest){

main.innerHTML = "Your browser cannot handle AJAX, please consider updating it to the latest version.";
return false;

}


httpRequest.onreadystatechange = loadstoryvid;
httpRequest.open('GET', 'admin/phpscripts/get_infovid.php' + '?vid_id=1');
httpRequest.send();	
	
	
}


function requestvid(evt){
evt.preventDefault();

httpRequest = new XMLHttpRequest();

if(!httpRequest){

main.innerHTML = "Your browser cannot handle AJAX, please consider updating it to the latest version.";
return false;

}


httpRequest.onreadystatechange = loadstoryvid;
httpRequest.open('GET', 'admin/phpscripts/get_infovid.php' + '?vid_id=' + evt.target.className);
httpRequest.send();	

	
}

function loadstoryvid(){
	
if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
var viddata = JSON.parse(httpRequest.responseText);
mainvid.src= viddata.vid_path;
vidcon.load();
if(engbut.classList.contains('active')){
vidtitle.innerHTML = viddata.vid_title;
}else if(frenchbut.classList.contains('active')){
vidtitle.innerHTML = viddata.vid_title_fr;
}
}
}

[].forEach.call(links, function(links) {
	links.addEventListener('click', requestvid, false);
});

engbut.addEventListener("click", change1, false);
frenchbut.addEventListener("click", change2, false);
window.addEventListener("load", loaddefault, false);

})();