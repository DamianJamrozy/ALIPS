<html>
<head>
<title>Milionerzy</title>
<link rel="Shortcut icon" href="img/icon.ico" />

<meta http-equiv="content-type" content="text/html"; charset="UTF-8"/> 
<meta name="keywords" content="milionerzy, web designer, Damian Jamroży">
<meta name="description" content="Milionerzy">
<link rel="stylesheet" href="style/style.css" type="text/css" />

</head>

<body>
<div id="header">
	<div id="napis"> <img src="img/napis.png" width="100%"></div>

	<div id="fif_fif_on" style="display: block;">	</div>
	<div id="phone_on" style="display: block;">	</div>
	<div id="people_on" style="display: block;">	</div>

</div>

<div id="content_left">



	<div id="content_question">
		<br><br>
		Dzień dobry! A może dobry wieczór? Mniejsza o to...<br> Witamy Cię w grze Milionerzy!<br> Sądzisz, że możesz wygrać w naszej grze?<br> Mam nadzieję, że tak aleee... kto wie :) <br> Jeżeli chcesz zagrać kliknij GRAJ. <br> Powodzenia!<br> <a href="INSTRUCTION.pdf" id="instruction">Instrukcja Obsługi</a>
	</div>
	<div id="content_options">
		<button id="play_btn" onclick="play_v1()">GRAJ</button>
	</div>

</div>

<div id="content_right">
	<div id="nr"><span style="color:Cornsilk;">12. </span><br>11. <br> 10. <br> 9. <br> 8. <br><span style="color:Cornsilk;"> 7.</span> <br> 6. <br> 5. <br> 4. <br> 3. <br><span style="color:Cornsilk;"> 2. </span><br> 1.	</div>
	<div id="score"> <button id="btn_1" class="coins"></button><br><br><button id="btn_2" class="coins"></button><br><br><button id="btn_3" class="coins"></button><br><br><button id="btn_4" class="coins"></button><br><br><button id="btn_5" class="coins"></button><br><br><button id="btn_6" class="coins"></button><br><br><button id="btn_7" class="coins"></button><br><br><button id="btn_8" class="coins"></button><br><br><button id="btn_9" class="coins"></button><br><br><button id="btn_10" class="coins"></button><br><br><button id="btn_11" class="coins"></button><br><br><button id="btn_12" class="coins"></button><br></div>
	<div id="money"><span style="color:Cornsilk;">1 000 000 zł </span><br> 500 000 zł <br> 250 000 zł <br> 125 000 zł <br> 75 000 zł <br><span style="color:Cornsilk;"> 40 000 zł </span><br> 20 000 zł <br> 10 000 zł <br> 5 000 zł <br> 2 000 zł <br><span style="color:Cornsilk;"> 1 000 zł </span><br> 500 zł	</div>
	

</div>



<div id="foter"><br><br>
	<audio autoplay="autoplay" controls id="myaudio">   
   		<source src="Sound/Intro.mp3">  
	</audio> 
<div>

</body>
<script>
var audio = document.getElementById("myaudio");
audio.volume = 0.4;
</script>
<script type="text/javascript" src="js/script.js"></script>

</html>