"use strict";
var buttonlist;
var buildingList;
var videoElement;
var videoButton;
window.onload = () => {
	buildingSetup();
	buttonSetup();
  videoSetup();
}

function buttonSetup() {
	var buttondiv = document.getElementById("buttondiv");
	/* Almost an array, but not quite.  Don't use a for-each! */
	buttonlist = buttondiv.children;
	for (var i = 0; i < buttonlist.length; i++) {
		buttonlist[i].addEventListener('click', loadBuilding);
		buttonlist[i].number = i;
	}
}

function buildingSetup() {
	var buildingdiv = document.getElementById("buildings");
	buildingList = buildingdiv.children;
}

function loadBuilding(e) {
	var target = e.currentTarget.number;
	/* Hide any other building divs which are opened */
	for (var i = 0; i < buildingList.length; i++) {
		if (i != target) {
			buildingList[i].style.display = 'none';
		}
	}
        /* We have to account for the initial state, since the
        Javascript style checking doesn't handle the initial state
        which is determined by the stylesheet. */
	var targetStyle = buildingList[target].style.display;
	if (targetStyle == 'none' || targetStyle == '') {
		buildingList[target].style.display = 'block';
	} else {
		buildingList[target].style.display = 'none';
	}
}

function videoSetup() {
  videoButton = document.getElementById("videobutton");
  videoElement = document.getElementById("gropiusdoc");
  videoElement.style.display = 'none';
  videoButton.addEventListener('click', toggleShowVideo);
}

function toggleShowVideo(e) {
  var disp = videoElement.style.display;
  if (disp == 'none' || disp == '') {
    videoElement.style.display = 'block';
    videoButton.innerHTML = 'Hide';
  } else {
    videoElement.style.display = 'none';
    videoButton.innerHTML = 'Show';
    videoElement.load();
  }
}
