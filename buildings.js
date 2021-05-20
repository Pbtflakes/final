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

/* Create our list of buildings to be shown and hidden */
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

/* Get the elements we'll need for show/hide of video */
function videoSetup() {
	videoButton = document.getElementById("videobutton");
	videoElement = document.getElementById("gropius-doc");
	videoButton.addEventListener('click', toggleShowVideo);
}

/* If we click the button while the video is shown, hide it; vice
versa for while the video is hidden.  We also toggle the text
shown in the button.  Hiding is now done purely with Javascript,
since we can't do transitions while switching display modes. */
function toggleShowVideo(e) {
	if (videoElement.classList.contains("hidden")) {
		videoElement.classList.toggle("hidden");
		videoButton.innerHTML = 'Hide';
	} else {
		videoElement.classList.toggle("hidden");
		videoButton.innerHTML = 'Show';
	}
}
