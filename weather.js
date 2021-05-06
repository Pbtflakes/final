"use strict";
const wxLocation = "https://api.weather.gov/stations/KBED/observations/latest";

/* We send our asynchronous weather function off to do its work, changing
the DOM when it's done. */
window.onload = () => {
	processWX();
}

async function processWX() {
	let wxReport = document.getElementById('wxreport');
        /* We only really want the properties of the weather report,
        the rest is metadata. */
	let wxProp = (await fetchAsync(wxLocation)).properties;
	/* Unit conversions, since NWS data is metric */
	let tempF = (9 * wxProp.temperature.value) / 5 + 32;
	let windMPH = 0.6214 * wxProp.windSpeed.value;
	/* Assemble the contents of our report into string form */
	let wxParts = [wxProp.textDescription,
		'<br>Temp: ', tempF.toFixed(),
		'&deg;F<br>Wind: ', windMPH.toFixed(),
		' MPH'];
	/* Reduce it all together into one, place into DOM */
	let wxStr = wxParts.reduce((a, b) => a.concat(b));
	wxReport.innerHTML = wxStr;
}

/* Helper function, a wrapper around the Fetch API. */
async function fetchAsync(url) {
	let response = await fetch(url).then(result => {
		/* Handle non-success states */
		if (result.status !== 200) {
			return "Status error: " + result.status;
		} else {
			return result;
		}
	}).catch(function(e) {
		/* Catch any errors internal to the Fetch API */
		console.log('Fetch error :-S', e)
	});
	/* Extract the JSON contents of the Promise */
	let data = await response.json();
	return data;
}
