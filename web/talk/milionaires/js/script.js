if (annyang) {
	// choose language
	annyang.setLanguage('pl-PL');
	// Let's define a command.
	const commands2 = {
		/* TYPE for Microsoft Edge */
		'graj.': play,
		
		'koło ratunkowe.':help,
		'koło ratunkowe, pół na pół.':helpHalf,
		'koło ratunkowe telefon do przyjaciela.':helpCall,
		'koło ratunkowe publiczność.':helpPublic,

		'graj dalej.':nextq,

		'odbierz nagrodę.':end_game,

		'zagraj ponownie.':new_game,

		'powrót.':backPlay,

		'odpowiedź a.': a,
		'odpowiedź b.': b,
		'odpowiedź c.': c,
		'odpowiedź d.': d,
		'odpowiedź. d.': d,

		'tak.': yes,
		'nie.': no,

		// SELECT
		'definitywnie odpowiedź a.': adef,
		'definitywnie odpowiedź b.': bdef,
		'definitywnie odpowiedź c.': cdef,
		'definitywnie odpowiedź d.': ddef,
		'definitywnie odpowiedź, d.': ddef,


		/* TYPE for Chrome */
		'graj': play,
		
		'koło ratunkowe':help,
		'koło ratunkowe, pół na pół':helpHalf,
		'koło ratunkowe telefon do przyjaciela':helpCall,
		'koło ratunkowe publiczność':helpPublic,

		'graj dalej':nextq,

		'odbierz nagrodę':end_game,

		'zagraj ponownie':new_game,

		'powrót':backPlay,

		'odpowiedź a': a,
		'odpowiedź b': b,
		'odpowiedź c': c,
		'odpowiedź d': d,
		'odpowiedź. d': d,

		'tak': yes,
		'nie': no,

		// SELECT
		'definitywnie odpowiedź a': adef,
		'definitywnie odpowiedź b': bdef,
		'definitywnie odpowiedź c': cdef,
		'definitywnie odpowiedź d': ddef,
		'definitywnie odpowiedź, d': ddef,
	};

	/* START GAME */
	function play() { document.getElementsByName("play")[0].click();}
	function nextq() { document.getElementsByName("next")[0].click();}
	function end_game() { document.getElementById("end").click();}
	function new_game() { document.getElementsByName("new_game")[0].click();}
	function backPlay() { document.getElementsByName("backPlay")[0].click();}

	/* START HELP */
	function help() {document.getElementsByName("sure")[0].innerHTML = `Koła ratunkowe: pół na pół | telefon do przyjaciela | publiczność`;}
	function helpHalf() { document.getElementsByName("fif_fif_on")[0].click();}
	function helpCall() { document.getElementsByName("phone_on")[0].click();}
	function helpPublic() { document.getElementsByName("people_on")[0].click();}
	/* END HELP */
	
	var sure = '';
	var sureX = '';

	/* START SELECT */
	function a() { 
		sure = 1;
		sureX = "A";
		document.getElementsByName("sure")[0].innerHTML = `Czy definitywnie chcesz zaznaczyć odpowiedź A? (Tak/Nie)`;
	}

	function b() { 
		sure = 1;
		sureX = "B";
		document.getElementsByName("sure")[0].innerHTML = `Czy definitywnie chcesz zaznaczyć odpowiedź B? (Tak/Nie)`;
	}

	function c() { 
		sure = 1;
		sureX = "C";
		document.getElementsByName("sure")[0].innerHTML = `Czy definitywnie chcesz zaznaczyć odpowiedź C? (Tak/Nie)`;
	}

	function d() { 
		sure = 1;
		sureX = "D";
		document.getElementsByName("sure")[0].innerHTML = `Czy definitywnie chcesz zaznaczyć odpowiedź D? (Tak/Nie)`;
	}

	/* CONFIRM DECISION */
	function yes(){
		document.getElementsByName("sure")[0].innerHTML = ``;
		if(sure == 1 && sureX == "A"){
			sure = 0;
			sureX = '';
			document.getElementsByName("A")[0].click();
		}
		else if(sure == 1 && sureX == "B"){
			sure = 0;
			sureX = '';
			document.getElementsByName("B")[0].click();
		}
		else if(sure == 1 && sureX == "C"){
			sure = 0;
			sureX = '';
			document.getElementsByName("C")[0].click();
		}
		else if(sure == 1 && sureX == "D"){
			sure = 0;
			sureX = '';
			document.getElementsByName("D")[0].click();
		}else{

		}
	}

	/* DENIE DECISION */
	function no(){
		document.getElementsByName("sure")[0].innerHTML = ``;
		sure = 0;
		sureX = '';
	}
	/* END SELECT */


	/* DEFINITIVE SELECTION */
	/* START SELECT */
	function adef() { 
		console.log(document.getElementsByName("A")[0]);
		document.getElementsByName("A")[0].click();
	}

	function bdef() { 
		console.log(document.getElementsByName("B")[0]);
		document.getElementsByName("B")[0].click();
	}

	function cdef() { 
		console.log(document.getElementsByName("C")[0]);
		document.getElementsByName("C")[0].click();
	}

	function ddef() { 
		console.log(document.getElementsByName("D")[0]);
		document.getElementsByName("D")[0].click();
	}
	/* END SELECT */


	// END Speak Shoot functions

	// Add our commands to annyang
	annyang.addCommands(commands2);

	// Start listening.
	annyang.start();

	// Show whats happend
	annyang.addCallback('result', function(phrases) {
		phrases[0] = phrases[0].toLowerCase();

		// Write text from voice
		document.getElementById("speak_text").innerHTML = phrases[0];
	});
}


var funfifon = getElementById('fif_fif_on');
var funphoneon = getElementById('phone_on');
var funpeopleon = getElementById('people_on');
var quests = getElementById('content_question');
var answer = getElementById('content_options');
var i = 0, q = 0;
var a;
var audio_bad = document.getElementById("bad");
var audio_git = document.getElementById("git");
var audio_wait = document.getElementById("wait");

// Pierwsze pytanie + Dodawanie kół ratunkowych
function play_v1(){
	document.getElementById("fif_fif_on").innerHTML='<img src="img/50-50-on.png" width="85%" name="fif_fif_on" onclick="fif_fif()">';
	document.getElementById("phone_on").innerHTML='<img src="img/phone-on.png" width="85%" name="phone_on" onclick="phone()">';
	document.getElementById("people_on").innerHTML='<img src="img/people-on.png" width="85%" name="people_on" onclick="people()">';
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Oczekiwanie.mp3"> </audio>';
	
	
	a=Math.floor(Math.random()*4)+1;
	q=1;
	i=0;
	if(a===1){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 1 <br>Do parzenia herbaty używa się jakiej części rośliny?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()"name="A" >A. Liści</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Ziaren</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Łodyżek</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Korzeni</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 1 <br>Jak nazywa się lew z głową człowieka?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Centaur</button><button class="answer_btn" id="second_q" onclick="check_me_correct()"name="B" >B. Sfinks</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Chimera</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Ibis</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 1 <br>Sąsiadem Polski nie jest:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Rosja</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Litwa</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()"name="C" >C. Estonia</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Białoruś</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 1 <br>Jakie mityczne stworzenie miało się żywić ludzką krwią?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Wilkołak</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Yeti</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Duch</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()"name="D" >D. Wampir</button>';
	}
}


//Drugie pytanie
function play_v2(){
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Oczekiwanie.mp3"> </audio>';
	q=2;
	i=1;
	a=Math.floor(Math.random()*4)+1;
	if(a===1){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 2 <br>W której dyscyplinie sportu uderza się kijem o krążek ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()"name="A" >A. W hokeju</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. W golfie</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. W piłce nożnej</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. W kręglach</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 2 <br>Centralna Agencja Wywiadowcza to w Stanach Zjednoczonych:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. ONZ</button><button class="answer_btn" id="second_q" onclick="check_me_correct()"name="B" >B. CIA</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. FBI</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. WHO</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 2 <BR>Jak nazywa się urządzenie do zapisu danych komputerowych na taśmie magnetycznej?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Flash</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Subwoofer</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()"name="C" >C. Streamer</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. DVD</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 2 <BR>Styl walki wschodniej z ewentualnym użyciem kija lub miecza:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Karate</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Judo</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Kung Fu</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()"name="D" >D. Aikido</button>';
	}
}

//Trzecie pytanie
function play_v3(){
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Oczekiwanie.mp3"> </audio>';
	q=3;
	i=2;
	a=Math.floor(Math.random()*4)+1;
	if(a===1){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 3 <br>W jakich górach leży Bhutan ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()"name="A" >A. W Himalajach</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. W Uralu</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. W Stołowych</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. W Atlasie</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 3 <br>Która z nazw nie oznacza skoku w łyżwiarstwie figurowym?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. AWK</button><button class="answer_btn" id="second_q" onclick="check_me_correct()"name="B" >B. Rittberger</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Axel</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Lutz</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 3 <br>Potoczne określenie marihuany to:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Malinka</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Bagienko</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()"name="C" >C. Trawka</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Jabłonka</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 3 <br>Indyjski traktat o miłosci i życiu seksualnym to:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Bodhisattwa</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Mahaja</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Ars Amandi</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()"name="D" >D. Kamasutra</button>';
	}
}

//Czwarte pytanie
function play_v4(){
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Oczekiwanie.mp3"> </audio>';
	q=4;
	i=3;
	a=Math.floor(Math.random()*4)+1;
	if(a===1){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 4 <br>Która z wymienionych planet układu słonecznego jest największa?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()"name="A" >A. Jowisz</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Saturn</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Uran</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Ziemia</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 4 <br>W których pojazdach rolę biegów pełnią przerzutki ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. W samochodach</button><button class="answer_btn" id="second_q" onclick="check_me_correct()"name="B" >B. W rowerach</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. W furmankach</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. W rydwanach</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 4 <br>W której dyscyplinie sportu mamy do czynienia z hat-trickami ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. W polo</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. W golfie</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()"name="C" >C. W piłce nożnej</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. W krykiecie</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 4 <br>Spalone zwłoki są w Indiach:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Zakopywane</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Rozsypywane</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Przechowywane w domu</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()"name="D" >D. Wrzucane do rzek</button>';
	}
}

//Piąte pytanie
function play_v5(){
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Oczekiwanie.mp3"> </audio>';
	q=5;
	i=4;
	a=Math.floor(Math.random()*4)+1;
	if(a===1){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 5 <br>Na jakich terenach żyją potomkowie Inków?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()"name="A" >A. Peru</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Meksyku</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Brazylii</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Wygineli</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 5 <br>Jadalne mięczaki to:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Rogowce</button><button class="answer_btn" id="second_q" onclick="check_me_correct()"name="B" >B. Omółki</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Łódziki</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Perłopławy</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 5 <br>Islamabad znajduje się w jakim państwie?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. W Syrii</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. W Emiratach</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()"name="C" >C. W Pakistanie</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. W Iranie</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 5 <br>Który jubileusz obchodziła telewizja POLSAT w 2002 roku ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. 6</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. 15</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. 5</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()"name="D" >D. 10</button>';
	}
}

//Szóste pytanie
function play_v6(){
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Oczekiwanie.mp3"> </audio>';
	q=6;
	i=5;
	a=Math.floor(Math.random()*4)+1;
	if(a===1){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 6 <BR>Długość panowania prezydenta w danym państwie określa:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()"name="A" >A. Kadencja</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Sancja</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Kanacja</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Karencja</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 6 <br>Zespół komórek o podobnej budowie i spełniających w organizmie podobne funkcje to:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Gruczoł</button><button class="answer_btn" id="second_q" onclick="check_me_correct()"name="B" >B. Tkanka</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Zrost</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Zarodek</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 6 <br>Który z aktorów znany był jako Zulu-Gula ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Jan Suzin</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Jerzy Trela</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()"name="C" >C. Tadeusz Ross</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Jan Englert</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 6 <br>Osoba składająca niegdyś w drukarni teksty z czcionek to:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Zdun</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Płatnerz</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Szkutnik</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()"name="D" >D. Zacer</button>';
	}
}

//Siódme pytanie
function play_v7(){
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Oczekiwanie.mp3"> </audio>';
	q=7;
	i=6;
	a=Math.floor(Math.random()*4)+1;
	if(a===1){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 7<br> Na jakim instrumencie grał Jankiel z "Pana Tadeusza"?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()"name="A" >A. Na cymbałkach</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Na organach</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Na rogu</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Na trąbce</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 7 <br>Druga część serialu "Czterdziestolatek" Jerzego Gruzy nosiła podtytuł:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. ...5 lat później</button><button class="answer_btn" id="second_q" onclick="check_me_correct()"name="B" >B. ...20 lat później</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. ...15 lat później</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. ...10 lat później</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 7 <br>Drakkar i tiera to rodzaje:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Pługów</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Lotni</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()"name="C" >C. Łodzi</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Skrzypiec</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 7 <br>Być pijanym do nieprzytomności to "upić się w...":';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Palanta</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Niedźwiedzia</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Kłódkę</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()"name="D" >D. Sztok</button>';
	}
}

//Ósme pytanie
function play_v8(){
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Oczekiwanie.mp3"> </audio>';
	q=8;
	i=7;
	a=Math.floor(Math.random()*4)+1;
	if(a===1){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 8 <br>Japoński politeistyczny system religijny, obejmujący też oddawanie boskiej czci cesarzowi to:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()"name="A" >A. Szinoizm</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Buddyzm</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Taoizm</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Konfucjanizm</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 8 <br>Znany rzymski historyk to:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Wergiliusz</button><button class="answer_btn" id="second_q" onclick="check_me_correct()"name="B" >B. Liwiusz</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Sokrates</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Aleksander</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 8 <br>Jeśli coś ułożono chronologicznie, to ułożono to w porządku:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Ilościowym</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Alfabetycznym</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()"name="C" >C. Czasowym</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Wielkościowym</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 8 <br>Przed Władimirem Putinem prezydentem Rosji był:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Michaił Gorbaczow</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Szamir Basajew</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Jewgienij Primakow</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()"name="D" >D. Borys Jelcyn</button>';
	}
}

//Dziewiąte pytanie
function play_v9(){
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Oczekiwanie.mp3"> </audio>';
	q=9;
	i=8;
	a=Math.floor(Math.random()*4)+1;
	if(a===1){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 9 <br>Gdzie znajduje się Statua Wolności?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()"name="A" >A. W Nowym Jorku</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. W Waszyngtonie</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. W San Francisco</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. W Los Angeles</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 9 <br>Jaki tytuł nosi najnowszy film o Hanibalu Lecterze ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Zielony Jaszczur</button><button class="answer_btn" id="second_q" onclick="check_me_correct()"name="B" >B. Czerwony Smok</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Czarny Koń</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Niebieski Ptak</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 9 <br>Denis Diderot jest autorem przygód Kubusia:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Pesymisty</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Optymisty</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()"name="C" >C. Fatalisty</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Poligamisty</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 9 <br>Jak miała na imię ukochana Robin Hooda?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Miriama</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Mona</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Magdalena</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()"name="D" >D. Marion</button>';
	}
}

//Dziesiąte pytanie
function play_v10(){
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Oczekiwanie.mp3"> </audio>';
	q=10;
	i=9;
	a=Math.floor(Math.random()*4)+1;
	if(a===1){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 10 <br>Jakie miasto jest stolicą Gwatemali?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()"name="A" >A. Gwatemala</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. San Salwador</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. San Jose</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Lima</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 10 <br>Welodrom to tor:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Wyścigów Konnych</button><button class="answer_btn" id="second_q" onclick="check_me_correct()"name="B" >B. Kolarski</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Gokartów</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Żużlowy</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 10 <br>Jakie zwierze śpi z "otwartymi" oczami, tzn zasłoniętymi błonką a nie powiekami?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Chomik</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Żółw</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()"name="C" >C. Zając</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Mysz</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 10 <br>Kto wynalazł telefon?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Franklin</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Marshall</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Pasteur</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()"name="D" >D. Bell</button>';
	}
}

//Jedenaste pytanie
function play_v11(){
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Oczekiwanie.mp3"> </audio>';
	q=11;
	i=10;
	a=Math.floor(Math.random()*4)+1;
	if(a===1){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 11 <br>Czym żywi się wieloryb?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()"name="A" >A. Planktonem</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Koralowcami</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Gąbkami</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Algami</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 11 <br>Ile pól na szachownicy zajmują wszystkie bierki przed rozpoczęciem partii ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. 8</button><button class="answer_btn" id="second_q" onclick="check_me_correct()"name="B" >B. 32</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. 24</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. 16</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 11 <BR>Emilia Plater zasłużyła się dla Polski podczas powstania:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Kościuszkowskiego</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Styczniowego</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()"name="C" >C. Listopadowego</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Śląskiego</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 11 <BR>Jak nazywa sie ogół bóstw w religii politeistycznej?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Olimp</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Parnas</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Portyk</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()"name="D" >D. Panteon</button>';
	}
}

//Dwunaste pytanie
function play_v12(){
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Oczekiwanie.mp3"> </audio>';
	q=12;
	i=11;
	a=Math.floor(Math.random()*4)+1;
	if(a===1){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 12 <br>Podobny do wilkiny surowiec wykorzystywany do wyrobu mebli to:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()"name="A" >A. Rattan</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Heban</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Mahoń</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Ebonit</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 12 <br>W piosence "To było" Maryli Rodowicz nie raz rano zabolał łeb i mówili:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Klinem się ratuj</button><button class="answer_btn" id="second_q" onclick="check_me_correct()"name="B" >B. Zmiana klimatu</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Że od myślenia</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Żem kawał lenia</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 12 <br>Skąd pochodzi ananas?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Z Afryki</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Z Australii</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()"name="C" >C. Z Ameryki Pd</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()"name="D" >D. Z Madagaskaru</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 12 <br>Ile ewangelii jest uznane przez współczesne kościoły chrześcijańskie za natchnione ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()"name="A" >A. Jedna</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()"name="B" >B. Dwie</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()"name="C" >C. Trzy</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()"name="D" >D. Cztery</button>';
	}
}








// Sprawdzanie poprawności odpowiedzi
function check_me_correct(){
	var tab = [0,500,1000,2000,5000,10000,20000,40000,75000,125000,250000,500000,1000000];
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Poprawna.mp3"> </audio>';
	
	if(q===1){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><button class="answer_btn id="next" name="next" onclick="play_v2()"">Graj Dalej</button><input type="number" class="hiddenInput" name="countCash"><input type="number" class="hiddenInput" name="lvl" value="1"></form>';
		document.getElementById('btn_12').classList.add("coins_gain");
	}
	if(q===2){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś gwarantowane: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><button class="answer_btn id="next" name="next" onclick="play_v3()"">Graj Dalej</button><input type="number" class="hiddenInput" name="countCash"><input type="number" class="hiddenInput" name="lvl" value="2"></form>';
		document.getElementById('btn_11').classList.add("coins_gain");
	}
	if(q===3){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><button class="answer_btn id="next" name="next" onclick="play_v4()"">Graj Dalej</button><input type="number" class="hiddenInput" name="countCash"><input type="number" class="hiddenInput" name="lvl" value="3"></form>';
		document.getElementById('btn_10').classList.add("coins_gain");
	}
	if(q===4){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><button class="answer_btn id="next" name="next" onclick="play_v5()"">Graj Dalej</button><input type="number" class="hiddenInput" name="countCash"><input type="number" class="hiddenInput" name="lvl" value="4"></form>';
		document.getElementById('btn_9').classList.add("coins_gain");
	}
	if(q===5){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><button class="answer_btn id="next" name="next" onclick="play_v6()"">Graj Dalej</button><input type="number" class="hiddenInput" name="countCash"><input type="number" class="hiddenInput" name="lvl" value="5"></form>';
		document.getElementById('btn_8').classList.add("coins_gain");
	}
	if(q===6){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><button class="answer_btn id="next" name="next" onclick="play_v7()"">Graj Dalej</button><input type="number" class="hiddenInput" name="countCash"><input type="number" class="hiddenInput" name="lvl" value="6"></form>';
		document.getElementById('btn_7').classList.add("coins_gain");
	}
	if(q===7){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś gwarantowane: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><button class="answer_btn id="next" name="next" onclick="play_v8()"">Graj Dalej</button><input type="number" class="hiddenInput" name="countCash"><input type="number" class="hiddenInput" name="lvl" value="7"></form>';
		document.getElementById('btn_6').classList.add("coins_gain");
	}
	if(q===8){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><button class="answer_btn id="next" name="next" onclick="play_v9()"">Graj Dalej</button><input type="number" class="hiddenInput" name="countCash"><input type="number" class="hiddenInput" name="lvl" value="8"></form>';
		document.getElementById('btn_5').classList.add("coins_gain");
	}
	if(q===9){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><button class="answer_btn id="next" name="next" onclick="play_v10()"">Graj Dalej</button><input type="number" class="hiddenInput" name="countCash"><input type="number" class="hiddenInput" name="lvl" value="9"></form>';
		document.getElementById('btn_4').classList.add("coins_gain");
	}
	if(q===10){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><button class="answer_btn id="next" name="next" onclick="play_v11()"">Graj Dalej</button><input type="number" class="hiddenInput" name="countCash"><input type="number" class="hiddenInput" name="lvl" value="10"></form>';
		document.getElementById('btn_3').classList.add("coins_gain");
	}
	if(q===11){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz o milion?';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><button class="answer_btn id="next" name="next" onclick="play_v12()"">Graj Dalej</button><input type="number" class="hiddenInput" name="countCash"><input type="number" class="hiddenInput" name="lvl" value="11"></form>';
		document.getElementById('btn_2').classList.add("coins_gain");
	}
	if(q===12){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź!<br>Wygrałeś/aś: '+tab[i]+'<br>Gratulacje!';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><input type="number" class="hiddenInput" name="countCash"><input type="number" class="hiddenInput" name="lvl" value="12"></form>';
		document.getElementById('btn_1').classList.add("coins_gain");
	}
	return i;
}


// Niepoprawna odpowiedź
function check_me_incorrect(){
	var tab = ["0 zł","1000 zł","40000 zł"];
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Zła.mp3"> </audio>';
	
	if(q==1){
		document.getElementById("content_question").innerHTML='<br><br>Przykro mi... <br>To była zła odpowiedź<br>Wygrałeś/aś okrągłe: '+tab[0]+'<br>';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><input type="number" class="hiddenInput" name="countCash" value="0"><input type="number" class="hiddenInput" name="lvl"></form>';
	}
	if(q==2){
		document.getElementById("content_question").innerHTML='<br><br>Przykro mi... <br>To była zła odpowiedź<br>Prawie dotarliśmy do gwarantowanego tysiąca złotych...<br>Wygrałeś/aś: '+tab[0]+'<br>';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><input type="number" class="hiddenInput" name="countCash" value="0"><input type="number" class="hiddenInput" name="lvl"></form>';
	}
	if(q===3||q===4||q===5||q===6){
		document.getElementById("content_question").innerHTML='<br><br>Przykro mi... <br>To była zła odpowiedź<br>Wygrałeś/aś gwarantowane: '+tab[1]+'<br>';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><input type="number" class="hiddenInput" name="countCash" value="1000"><input type="number" class="hiddenInput" name="lvl"></form>';
	}

	if(q===7){
		document.getElementById("content_question").innerHTML='<br><br>Przykro mi... <br>To była zła odpowiedź<br>Było blisko do gwarantowanego 40 000zł.<br>Może następnym razem się uda?<br>Wygrałeś/aś gwarantowane: '+tab[1]+'<br>';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><input type="number" class="hiddenInput" name="countCash" value="1000"><input type="number" class="hiddenInput" name="lvl"></form>';
	}
	if(q==8||q===9||q==10){
		document.getElementById("content_question").innerHTML='<br><br>Przykro mi... <br>To była zła odpowiedź<br>Wygrałeś/aś gwarantowane: '+tab[2]+'<br>';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><input type="number" class="hiddenInput" name="countCash" value="40000"><input type="number" class="hiddenInput" name="lvl"></form>';
	}
	if(q===11){
		document.getElementById("content_question").innerHTML='<br><br>Przykro mi... <br>To była zła odpowiedź<br>Brakowało 2 poprawnych odpowiedzi do miliona...<br> No cóż szkoda 250 000 zł... <br>Wygrałeś/aś gwarantowane: '+tab[2]+'<br>';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><input type="number" class="hiddenInput" name="countCash" value="40000"><input type="number" class="hiddenInput" name="lvl"></form>';
	}
	if(q==12){
		document.getElementById("content_question").innerHTML='<br><br>Przykro mi... <br>To była zła odpowiedź<br>Tylko jednego pytania zabrakło do miliona...<br> No cóż powodzenia następnym razem<br>Wygrałeś/aś gwarantowane: '+tab[2]+'<br>';
		document.getElementById("content_options").innerHTML='<form onsubmit="return endGame()" method="POST" action="win.php"><button type="submit" name="cash" class="answer_btn" id="end" name="end_game" >Odbierz nagrodę</button><input type="number" class="hiddenInput" name="countCash" value="40000"><input type="number" class="hiddenInput" name="lvl"></form>';
	}
}


//Koniec gry - zerowanie wyniku (odebranie nagrody)
function endGame(){
	var z=12;
	var tab = [0,500,1000,2000,5000,10000,20000,40000,75000,125000,250000,500000,1000000];
	document.getElementById("content_question").innerHTML='<br><br> Gratulacje! Wygrałeś/aś <br>'+tab[i]+' złotych.';
	var moneyHoney = document.getElementsByName("countCash")[0].value;
	if(moneyHoney != "0" && moneyHoney != "1000" && moneyHoney != "40000"){
		document.getElementsByName("countCash")[0].value = tab[i];
	}

	document.getElementsByName("lvl")[0].value = i;

	//document.getElementById("content_options").innerHTML='<button class="answer_btn" id="new_game" name="new_game" onclick="play_v1()">Zagraj ponownie</button>';
	while(z!=0){
		x = 'btn_'+z;
		document.getElementById(x).classList.remove("coins_gain");
		z--;
	}

	console.log(document.getElementsByName("countCash")[0]);
	console.log(document.getElementsByName("countCash")[0].value);

	let countMoney = document.getElementsByName("countCash")[0].value;
	let t1 = '"';
	let t2 = "'";
	let t3 = "`";


	if(countMoney.includes(t1) || countMoney.includes(t2) || countMoney.includes(t3)){
		console.log("Walidacja 2 wykryła błąd! Login lub hasło zawiera niedozwolone znaki!"); 
		return false;
	}else{
		return true;	
	}
}

//Koniec gry - zerowanie wyniku (zła odpowiedź)
function end_bad(){
	var z=12;
	while(z!=0){
		x = 'btn_'+z;
		document.getElementById(x).classList.remove("coins_gain");
		z--;
	}
}



// Koło ratunkowe - Pół na pół
function fif_fif(){
	var x_v1,x_v2,p=1000;
	
	//Jeżeli poprawna odpowiedź to A
	if(a===1){
		while(p!=0){
			x_v1=Math.floor(Math.random()*4)+1;
			x_v2=Math.floor(Math.random()*4)+1;

			if(x_v1!=x_v2 && x_v1!=1 && x_v2!=1){
				break;
			}
			p--;
		}
		
		if(x_v1===2 || x_v2===2){
			document.getElementById('second_q').style.display = "none";
		}
		if(x_v1===3 || x_v2===3){
			document.getElementById('third_q').style.display = "none";
		}
		if(x_v1===4 || x_v2===4){
			document.getElementById('fourth_q').style.display = "none";
		}
	}
	
	//Jeżeli poprawna odpowiedź to B
	if(a===2){
		while(p!=0){
			x_v1=Math.floor(Math.random()*4)+1;
			x_v2=Math.floor(Math.random()*4)+1;

			if(x_v1!=x_v2 && x_v1!=2 && x_v2!=2){
				break;
			}
			p--;
		}
		
		if(x_v1===1 || x_v2===1){
			document.getElementById('first_q').style.display = "none";
		}
		if(x_v1===3 || x_v2===3){
			document.getElementById('third_q').style.display = "none";
		}
		if(x_v1===4 || x_v2===4){
			document.getElementById('fourth_q').style.display = "none";
		}
	}
	
	//Jeżeli poprawna odpowiedź to C
	if(a===3){
		while(p!=0){
			x_v1=Math.floor(Math.random()*4)+1;
			x_v2=Math.floor(Math.random()*4)+1;

			if(x_v1!=x_v2 && x_v1!=3 && x_v2!=3){
				break;
			}
			p--;
		}
		
		if(x_v1===2 || x_v2===2){
			document.getElementById('second_q').style.display = "none";
		}
		if(x_v1===1 || x_v2===1){
			document.getElementById('first_q').style.display = "none";
		}
		if(x_v1===4 || x_v2===4){
			document.getElementById('fourth_q').style.display = "none";
		}
	}
	
	//Jeżeli poprawna odpowiedź to D
	if(a===4){
		while(p!=0){
			x_v1=Math.floor(Math.random()*4)+1;
			x_v2=Math.floor(Math.random()*4)+1;

			if(x_v1!=x_v2 && x_v1!=4 && x_v2!=4){
				break;
			}
			p--;
		}
		
		if(x_v1===2 || x_v2===2){
			document.getElementById('second_q').style.display = "none";
		}
		if(x_v1===3 || x_v2===3){
			document.getElementById('third_q').style.display = "none";
		}
		if(x_v1===1 || x_v2===1){
			document.getElementById('first_q').style.display = "none";
		}
	}
	alert("Nie jest to odpowiedź: "+x_v1+" i "+x_v2);
	document.getElementById("fif_fif_on").innerHTML='<img src="img/50-50-off.png" width="85%">';
}

// Koło ratunkowe Telefon do przyjaciela
function phone(){
	
	var type1,type2,type3,type4,sum=0;
	
	if(a===1){
		type1 = Math.floor(Math.random()*50)+21;
		while(sum!=100){
			type2 = Math.floor(Math.random()*50)+1;
			type3 = Math.floor(Math.random()*50)+1;
			type4 = Math.floor(Math.random()*50)+1;
			sum=type1+type2+type3+type4;
		}
	}
	
	if(a===2){
		type2 = Math.floor(Math.random()*50)+21;
		while(sum!=100){
			type1 = Math.floor(Math.random()*50)+1;
			type3 = Math.floor(Math.random()*50)+1;
			type4 = Math.floor(Math.random()*50)+1;
			sum=type1+type2+type3+type4;
		}
	}
	
	if(a===3){
		type3 = Math.floor(Math.random()*50)+21;
		while(sum!=100){
			type2 = Math.floor(Math.random()*50)+1;
			type1 = Math.floor(Math.random()*50)+1;
			type4 = Math.floor(Math.random()*50)+1;
			sum=type1+type2+type3+type4;
		}
	}
	
	if(a===4){
		type4 = Math.floor(Math.random()*50)+21;
		while(sum!=100){
			type2 = Math.floor(Math.random()*50)+1;
			type3 = Math.floor(Math.random()*50)+1;
			type1 = Math.floor(Math.random()*50)+1;
			sum=type1+type2+type3+type4;
		}
	}
	
	document.getElementById("phone_on").innerHTML='<img src="img/phone-off.png" width="85%">';
	
	sessionStorage.setItem("t1", type1);
	sessionStorage.setItem("t2", type2);
	sessionStorage.setItem("t3", type3);
	sessionStorage.setItem("t4", type4);
	okno = window.open('Sites/phone.php','Koło Ratunkowe - Telefon do Publiczności','width=800,height=400');
}

// Koło ratunkowe Publiczność
function people(){
	var type1,type2,type3,type4,sum=0;
	
	if(a===1){
		type1 = Math.floor(Math.random()*50)+31;
		while(sum!=100){
			type2 = Math.floor(Math.random()*50)+1;
			type3 = Math.floor(Math.random()*50)+1;
			type4 = Math.floor(Math.random()*50)+1;
			sum=type1+type2+type3+type4;
		}
	}
	
	if(a===2){
		type2 = Math.floor(Math.random()*50)+31;
		while(sum!=100){
			type1 = Math.floor(Math.random()*50)+1;
			type3 = Math.floor(Math.random()*50)+1;
			type4 = Math.floor(Math.random()*50)+1;
			sum=type1+type2+type3+type4;
		}
	}
	
	if(a===3){
		type3 = Math.floor(Math.random()*50)+31;
		while(sum!=100){
			type2 = Math.floor(Math.random()*50)+1;
			type1 = Math.floor(Math.random()*50)+1;
			type4 = Math.floor(Math.random()*50)+1;
			sum=type1+type2+type3+type4;
		}
	}
	
	if(a===4){
		type4 = Math.floor(Math.random()*50)+31;
		while(sum!=100){
			type2 = Math.floor(Math.random()*50)+1;
			type3 = Math.floor(Math.random()*50)+1;
			type1 = Math.floor(Math.random()*50)+1;
			sum=type1+type2+type3+type4;
		}
	}
	
	document.getElementById("people_on").innerHTML='<img src="img/people-off.png" width="85%">';
	
	sessionStorage.setItem("t1", type1);
	sessionStorage.setItem("t2", type2);
	sessionStorage.setItem("t3", type3);
	sessionStorage.setItem("t4", type4);
	okno = window.open('Sites/people.php','Koło Ratunkowe - Publiczność','width=800,height=400');
	
}