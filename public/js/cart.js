// start here
function numberOnly(evt) {
	var theEvent = evt || window.event;

	// Handle paste
	if (theEvent.type === 'paste') {
			key = event.clipboardData.getData('text/plain');
	} else {
	// Handle key press
			var key = theEvent.keyCode || theEvent.which;
			key = String.fromCharCode(key);
	}
	var regex = /[0-9]|\./;
	if( !regex.test(key) ) {
		theEvent.returnValue = false;
		if(theEvent.preventDefault) theEvent.preventDefault();
	}
}

function currencyFormat(x, separator) {
	if (!separator) {
		separator='.';
	}
	return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g,  separator);
}