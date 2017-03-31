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
var langbuts = [engbut, frenchbut];
var names = [null, "Ryley", "Andrea", "Justin", "Carol"];
var nametext = document.querySelector('.nametext');
var storyhelp = document.querySelector('.storyHelp');
var startdrivetext = document.querySelector('.startdrivetext');
var drivelink = document.querySelector('.driveLink');

function getstats(evt){
evt.preventDefault();

httpRequest = new XMLHttpRequest();

if(!httpRequest){

main.innerHTML = "Your browser cannot handle AJAX, please consider updating it to the latest version.";
return false;

}

httpRequest.onreadystatechange = loadstats;
httpRequest.open('GET', 'admin/phpscripts/get_stats.php' + '?stats_id=' + evt.target.id);
httpRequest.send();	

if(evt.target.id==="1"){
	
	circletext1.innerHTML = "We reached ";
circletext2.innerHTML = "of our total goal as of December 31 2016";	
	
}else if(evt.target.id==="2"){

circletext1.innerHTML = "Nous avons atteint ";
circletext2.innerHTML = "de notre objectif total au 31 décembre 2016.";	
	
}
	
}

var stats1 = document.querySelector('.statInfo1');
var stats2 = document.querySelector('.statInfo2');
var stats3 = document.querySelector('.statInfo3');
var stats4 = document.querySelector('.statInfo4');
var stats5 = document.querySelector('.statInfo5');
var stats6 = document.querySelector('.statInfo6');
var stats7 = document.querySelector('.statInfo7');
var stats8 = document.querySelector('.statInfo8');
var stats9 = document.querySelector('.statInfo9');
var stats10 = document.querySelector('.statInfo10');
var stats11 = document.querySelector('.statInfo11');
var circletext1 = document.querySelector('.circletext1');
var circletext2 = document.querySelector('.circletext2');

function loadstats(){
	
if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
var statsdata = JSON.parse(httpRequest.responseText);
console.log(statsdata);
stats1.innerHTML = statsdata.stats_stat1;
stats2.innerHTML = statsdata.stats_stat2;
stats3.innerHTML = statsdata.stats_stat3;
stats4.innerHTML = statsdata.stats_stat4;
stats5.innerHTML = statsdata.stats_stat5;
stats6.innerHTML = statsdata.stats_stat6;
stats7.innerHTML = statsdata.stats_stat7;
stats8.innerHTML = statsdata.stats_stat8;
stats9.innerHTML = statsdata.stats_stat9;
stats10.innerHTML = statsdata.stats_stat10;
stats11.innerHTML = statsdata.stats_stat11;
}
}

function change1(){

engbut.classList.add("active");
frenchbut.classList.remove("active");	
storyhelp.innerHTML = "Want to Help Someone Like ";
startdrivetext.innerHTML = "It's easy to start your own registration drive. Do it as an individual or on behalf of your company or community group.";
drivelink.innerHTML = "Start a Drive";
request();
	
}

function change2(){

frenchbut.classList.add("active");	
engbut.classList.remove("active");
request();
	
}

function request(){
	
httpRequest = new XMLHttpRequest();

if(!httpRequest){

main.innerHTML = "Your browser cannot handle AJAX, please consider updating it to the latest version.";
return false;

}


httpRequest.onreadystatechange = loadstoryvid;
httpRequest.open('GET', 'admin/phpscripts/get_vid.php' + '?vid_id=1');
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
storyhelp.innerHTML = "Voulez-vous aider quelqu'un comme ";
startdrivetext.innerHTML = "Il est facile de démarrer votre propre lecteur d'enregistrement. Faites-le en tant qu'individu ou pour le compte de votre entreprise ou groupe communautaire.";
drivelink.innerHTML = "Démarrer un Drive";

}
}
}

[].forEach.call(links, function(links) {
	links.addEventListener('click', requestvid, false);
});


[].forEach.call(langbuts, function(langbuts) {
	langbuts.addEventListener('click', getstats, false);
});


engbut.addEventListener("click", change1, false);
frenchbut.addEventListener("click", change2, false);

})();