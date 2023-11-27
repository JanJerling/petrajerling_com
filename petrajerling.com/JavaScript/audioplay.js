var mytrack = document.getElementById('audio');

function playORpause() {

	if (!mytrack.paused) {
		mytrack.pause();
	}
	else {
		mytrack.play()
	}


}