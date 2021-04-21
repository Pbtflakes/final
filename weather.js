"use strict";
const wxLocation = "https://api.weather.gov/stations/KBED/observations/latest";

window.onload = async () => {
	let wxReport = document.getElementById('wxreport');
	wxReport.innerHTML = await processWX();
}

async function processWX() {
	let wxRaw = await fetchAsync(wxLocation);
	return wxRaw.properties.rawMessage;
}

/* Helper function, a wrapper around the Fetch API. */
async function fetchAsync(url) {
	let response = await fetch(url).catch(function(e) {
		console.log('Fetch error :-S', e)
	});
	/* Extract the JSON contents of the Promise */
	let data = await response.json();
	return data;
}
