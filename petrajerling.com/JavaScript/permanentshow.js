let widthMatch = window.matchMedia("(min-width: 480px)");

widthMatch.addEventListener('change', function(mm) {
    if (mm.matches) {
        document.getElementById("sidebar").style.display = "block";
    }
	else {
		document.getElementById("sidebar").style.display = "none";
	}
});