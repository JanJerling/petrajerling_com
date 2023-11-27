<html>
	<head>
		<title>Petra Jerling - Music Therapy</title>
		<!--================== META  ===============================================================================================================!-->
		<meta name="description" content="Petra Jerling is a qualified Music Therapist practicing in Strand, Western Cape. Her degrees in Music Education, Psychology and Music Therapy, along with her extensive experience in these fields, enables her to bring healing to those who are most in need of it. By harnessing the power of music, this sophisticated and nuanced therapy can change the lives of any and all." />
		<meta name="keywords" content="Music Therapy, music therapist, music, therapy, petra, jerling, musiekterapie, musiek, terapie, terapeet, Guided Imagery In Music, GIM, Positive Psychology, psychology, Mandala Assessment Research Instrument, MARI, community, group therapy, individual help, mental health" />
		<meta http-equiv="author" content="Jan Jerling" />
		<meta http-equiv="content-language" content="en-ZA" />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!--================== LINKS  ===============================================================================================================!-->
		<link type="text/css" rel="stylesheet" href="Stylesheets/stylehome.css">
		<link rel="shortcut icon" href="Images/titleicon.ico">
	</head>
		<!--================== MAIN  ===============================================================================================================!-->
	<body>
		<div id="sidenav">

			<div class="HomeImageDiv">
				<a><img class="HomeImage" id="HomeImageSmall" src="Images/Homesmall.png"></a>
			</div>
			
			<button class="sidenav-btn" id="home-btn" onclick="window.location.href='index.php'">Home</button>
			<button class="dropdown-btn">About</button>
				<div class="dropdown-container">
					<a class="droplist" href="Pages/About.html#musictherapy">Music Therapy</a>
					<a class="droplist" href="Pages/About.html#petrajerling">Petra</a>
					<a class="droplist" href="Pages/About.html#pubs">Publications</a>
				</div>
			<button class="dropdown-btn">Services</button>
				<div class="dropdown-container">
					<a class="droplist" href="Pages/Services.html#MI">M I</a>
					<a class="droplist" href="Pages/Services.html#GIM">G I M</a>
					<a class="droplist" href="Pages/Services.html#CreaMT">Creative Music Therapy</a>
					<a class="droplist" href="Pages/Services.html#PosPsy">Positive Psychology</a>
					<a class="droplist" href="Pages/Services.html#MARI">MARI</a>
					<a class="droplist" href="Pages/Services.html#ComMT">Community Music Therapy</a>
					<a class="droplist" href="Pages/Services.html#TB">Team Building</a>
				</div>
			<button class="sidenav-btn" onclick="window.location.href='Pages/Contact.html'">Contact</button>
		
		</div>

		<div id="main">		
			<div id="mainimage">
				<div class="HomeImageDiv">
					<a><img class="HomeImage" id="Home" src="Images/Homep.png" width="1175"     height="274"></a>
				</div>
				<div class="HomeImageDiv">
					<a><img class="HomeImage" id="HomeMed" src="Images/Homemed.png" width="345" height    ="272"></a>
				</div>
				<div class="HomeImageDiv">
					<a><img class="HomeImage" id="HomeLarge" src="Images/Homelarge.png" width="1637" height    ="382"></a>
				</div>
			</div>		
		</div>

		<div id="wrapper">
			<audio id="audio" loop> 
				<source src="Audio/Antonin_Dvorak_SerenadeForStrings.mp3" type="audio/mp3"/>
			</audio>
			<nav>
				<div>
					<button id="pauseplay" onclick="playORpause()" title="You are listening to: Antonin Dvorak - Serenade for Strings in E Opus 22 Moderato"></button>
				</div>
			</nav>
		</div>

		<!--================== SCRIPTS  ===============================================================================================================!-->
		<script type="text/javascript" src="JavaScript/navbar.js" ></script>
		<script type="text/javascript" src="JavaScript/audioplay.js" ></script>
		
	</body>
</html>