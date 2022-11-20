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
	document.getElementById("fif_fif_on").innerHTML='<img src="img/50-50-on.png" width="85%" onclick="fif_fif()">';
	document.getElementById("phone_on").innerHTML='<img src="img/phone-on.png" width="85%" onclick="phone()">';
	document.getElementById("people_on").innerHTML='<img src="img/people-on.png" width="85%" onclick="people()">';
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Oczekiwanie.mp3"> </audio>';
	
	
	a=Math.floor(Math.random()*4)+1;
	q=1;
	i=0;
	if(a===1){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 1 <br>Do parzenia herbaty używa się jakiej części rośliny?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()">A. Liści</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Ziaren</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Łodyżek</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Korzeni</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 1 <br>Jak nazywa się lew z głową człowieka?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Centaur</button><button class="answer_btn" id="second_q" onclick="check_me_correct()">B. Sfinks</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Chimera</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Ibis</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 1 <br>Sąsiadem Polski nie jest:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Rosja</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Litwa</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()">C. Estonia</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Białoruś</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 1 <br>Jakie mityczne stworzenie miało się żywić ludzką krwią?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Wilkołak</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Yeti</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Duch</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()">D. Wampir</button>';
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
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()">A. W hokeju</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. W golfie</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. W piłce nożnej</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. W kręglach</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 2 <br>Centralna Agencja Wywiadowcza to w Stanach Zjednoczonych:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. ONZ</button><button class="answer_btn" id="second_q" onclick="check_me_correct()">B. CIA</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. FBI</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. WHO</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 2 <BR>Jak nazywa się urządzenie do zapisu danych komputerowych na taśmie magnetycznej?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Flash</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Subwoofer</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()">C. Streamer</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. DVD</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 2 <BR>Styl walki wschodniej z ewentualnym użyciem kija lub miecza:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Karate</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Judo</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Kung Fu</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()">D. Aikido</button>';
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
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()">A. W Himalajach</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. W Uralu</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. W Stołowych</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. W Atlasie</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 3 <br>Która z nazw nie oznacza skoku w łyżwiarstwie figurowym?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. AWK</button><button class="answer_btn" id="second_q" onclick="check_me_correct()">B. Rittberger</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Axel</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Lutz</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 3 <br>Potoczne określenie marihuany to:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Malinka</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Bagienko</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()">C. Trawka</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Jabłonka</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 3 <br>Indyjski traktat o miłosci i życiu seksualnym to:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Bodhisattwa</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Mahaja</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Ars Amandi</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()">D. Kamasutra</button>';
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
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()">A. Jowisz</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Saturn</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Uran</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Ziemia</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 4 <br>W których pojazdach rolę biegów pełnią przerzutki ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. W samochodach</button><button class="answer_btn" id="second_q" onclick="check_me_correct()">B. W rowerach</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. W furmankach</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. W rydwanach</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 4 <br>W której dyscyplinie sportu mamy do czynienia z hat-trickami ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. W polo</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. W golfie</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()">C. W piłce nożnej</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. W krykiecie</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 4 <br>Spalone zwłoki są w Indiach:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Zakopywane</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Rozsypywane</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Przechowywane w domu</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()">D. Wrzucane do rzek</button>';
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
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()">A. Peru</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Meksyku</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Brazylii</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Wygineli</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 5 <br>Jadalne mięczaki to:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Rogowce</button><button class="answer_btn" id="second_q" onclick="check_me_correct()">B. Omółki</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Łódziki</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Perłopławy</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 5 <br>Islamabad znajduje się w jakim państwie?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. W Syrii</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. W Emiratach</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()">C. W Pakistanie</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. W Iranie</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 5 <br>Który jubileusz obchodziła telewizja POLSAT w 2002 roku ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. 6</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. 15</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. 5</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()">D. 10</button>';
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
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()">A. Kadencja</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Sancja</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Kanacja</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Karencja</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 6 <br>Zespół komórek o podobnej budowie i spełniających w organizmie podobne funkcje to:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Gruczoł</button><button class="answer_btn" id="second_q" onclick="check_me_correct()">B. Tkanka</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Zrost</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Zarodek</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 6 <br>Który z aktorów znany był jako Zulu-Gula ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Jan Suzin</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Jerzy Trela</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()">C. Tadeusz Ross</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Jan Englert</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 6 <br>Osoba składająca niegdyś w drukarni teksty z czcionek to:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Zdun</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Płatnerz</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Szkutnik</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()">D. Zacer</button>';
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
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()">A. Na cymbałkach</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Na organach</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Na rogu</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Na trąbce</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 7 <br>Druga część serialu "Czterdziestolatek" Jerzego Gruzy nosiła podtytuł:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. ...5 lat później</button><button class="answer_btn" id="second_q" onclick="check_me_correct()">B. ...20 lat później</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. ...15 lat później</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. ...10 lat później</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 7 <br>Drakkar i tiera to rodzaje:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Pługów</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Lotni</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()">C. Łodzi</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Skrzypiec</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 7 <br>Być pijanym do nieprzytomności to "upić się w...":';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Palanta</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Niedźwiedzia</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Kłódkę</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()">D. Sztok</button>';
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
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()">A. Szinoizm</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Buddyzm</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Taoizm</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Konfucjanizm</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 8 <br>Znany rzymski historyk to:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Wergiliusz</button><button class="answer_btn" id="second_q" onclick="check_me_correct()">B. Liwiusz</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Sokrates</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Aleksander</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 8 <br>Jeśli coś ułożono chronologicznie, to ułożono to w porządku:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Ilościowym</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Alfabetycznym</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()">C. Czasowym</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Wielkościowym</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 8 <br>Przed Władimirem Putinem prezydentem Rosji był:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Michaił Gorbaczow</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Szamir Basajew</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Jewgienij Primakow</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()">D. Borys Jelcyn</button>';
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
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()">A. W Nowym Jorku</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. W Waszyngtonie</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. W San Francisco</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. W Los Angeles</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 9 <br>Jaki tytuł nosi najnowszy film o Hanibalu Lecterze ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Zielony Jaszczur</button><button class="answer_btn" id="second_q" onclick="check_me_correct()">B. Czerwony Smok</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Czarny Koń</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Niebieski Ptak</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 9 <br>Denis Diderot jest autorem przygód Kubusia:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Pesymisty</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Optymisty</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()">C. Fatalisty</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Poligamisty</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 9 <br>Jak miała na imię ukochana Robin Hooda?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Miriama</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Mona</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Magdalena</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()">D. Marion</button>';
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
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()">A. Gwatemala</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. San Salwador</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. San Jose</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Lima</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 10 <br>Welodrom to tor:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Wyścigów Konnych</button><button class="answer_btn" id="second_q" onclick="check_me_correct()">B. Kolarski</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Gokartów</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Żużlowy</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 10 <br>Jakie zwierze śpi z "otwartymi" oczami, tzn zasłoniętymi błonką a nie powiekami?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Chomik</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Żółw</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()">C. Zając</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Mysz</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 10 <br>Kto wynalazł telefon?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Franklin</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Marshall</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Pasteur</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()">D. Bell</button>';
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
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()">A. Planktonem</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Koralowcami</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Gąbkami</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Algami</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 11 <br>Ile pól na szachownicy zajmują wszystkie bierki przed rozpoczęciem partii ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. 8</button><button class="answer_btn" id="second_q" onclick="check_me_correct()">B. 32</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. 24</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. 16</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 11 <BR>Emilia Plater zasłużyła się dla Polski podczas powstania:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Kościuszkowskiego</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Styczniowego</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()">C. Listopadowego</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Śląskiego</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 11 <BR>Jak nazywa sie ogół bóstw w religii politeistycznej?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Olimp</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Parnas</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Portyk</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()">D. Panteon</button>';
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
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_correct()">A. Rattan</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Heban</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Mahoń</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Ebonit</button>';
	}
	
	if(a===2){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 12 <br>W piosence "To było" Maryli Rodowicz nie raz rano zabolał łeb i mówili:';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Klinem się ratuj</button><button class="answer_btn" id="second_q" onclick="check_me_correct()">B. Zmiana klimatu</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Że od myślenia</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Żem kawał lenia</button>';
	}
	
	if(a===3){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 12 <br>Skąd pochodzi ananas?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Z Afryki</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Z Australii</button><br><button class="answer_btn" id="third_q" onclick="check_me_correct()">C. Z Ameryki Pd</button><button class="answer_btn" id="fourth_q" onclick="check_me_incorrect()">D. Z Madagaskaru</button>';
	}
	
	if(a===4){
		document.getElementById("content_question").innerHTML='<br><br>Pytanie nr. 12 <br>Ile ewangelii jest uznane przez współczesne kościoły chrześcijańskie za natchnione ?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="first_q" onclick="check_me_incorrect()">A. Jedna</button><button class="answer_btn" id="second_q" onclick="check_me_incorrect()">B. Dwie</button><br><button class="answer_btn" id="third_q" onclick="check_me_incorrect()">C. Trzy</button><button class="answer_btn" id="fourth_q" onclick="check_me_correct()">D. Cztery</button>';
	}
}








// Sprawdzanie poprawności odpowiedzi
function check_me_correct(){
	var tab = [0,500,1000,2000,5000,10000,20000,40000,75000,125000,250000,500000,1000000];
	document.getElementById("foter").innerHTML='<br><br><audio autoplay="autoplay" controls id="myaudio"><source src="Sound/Poprawna.mp3"> </audio>';
	
	if(q===1){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="end" onclick="end()">Odbierz nagrodę</button><button class="answer_btn id="next" onclick="play_v2()"">Graj Dalej</button>';
		document.getElementById('btn_12').classList.add("coins_gain");
	}
	if(q===2){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś gwarantowane: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="end" onclick="end()">Odbierz nagrodę</button><button class="answer_btn id="next" onclick="play_v3()"">Graj Dalej</button>';
		document.getElementById('btn_11').classList.add("coins_gain");
	}
	if(q===3){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="end" onclick="end()">Odbierz nagrodę</button><button class="answer_btn id="next" onclick="play_v4()"">Graj Dalej</button>';
		document.getElementById('btn_10').classList.add("coins_gain");
	}
	if(q===4){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="end" onclick="end()">Odbierz nagrodę</button><button class="answer_btn id="next" onclick="play_v5()"">Graj Dalej</button>';
		document.getElementById('btn_9').classList.add("coins_gain");
	}
	if(q===5){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="end" onclick="end()">Odbierz nagrodę</button><button class="answer_btn id="next" onclick="play_v6()"">Graj Dalej</button>';
		document.getElementById('btn_8').classList.add("coins_gain");
	}
	if(q===6){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="end" onclick="end()">Odbierz nagrodę</button><button class="answer_btn id="next" onclick="play_v7()"">Graj Dalej</button>';
		document.getElementById('btn_7').classList.add("coins_gain");
	}
	if(q===7){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś gwarantowane: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="end" onclick="end()">Odbierz nagrodę</button><button class="answer_btn id="next" onclick="play_v8()"">Graj Dalej</button>';
		document.getElementById('btn_6').classList.add("coins_gain");
	}
	if(q===8){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="end" onclick="end()">Odbierz nagrodę</button><button class="answer_btn id="next" onclick="play_v9()"">Graj Dalej</button>';
		document.getElementById('btn_5').classList.add("coins_gain");
	}
	if(q===9){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="end" onclick="end()">Odbierz nagrodę</button><button class="answer_btn id="next" onclick="play_v10()"">Graj Dalej</button>';
		document.getElementById('btn_4').classList.add("coins_gain");
	}
	if(q===10){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz dalej?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="end" onclick="end()">Odbierz nagrodę</button><button class="answer_btn id="next" onclick="play_v11()"">Graj Dalej</button>';
		document.getElementById('btn_3').classList.add("coins_gain");
	}
	if(q===11){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź<br>Wygrałeś/aś: '+tab[i]+'<br>Grasz o milion?';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="end" onclick="end()">Odbierz nagrodę</button><button class="answer_btn id="next" onclick="play_v12()"">Graj Dalej</button>';
		document.getElementById('btn_2').classList.add("coins_gain");
	}
	if(q===12){
		i++;
		document.getElementById("content_question").innerHTML='<br><br>Brawo! <br>To była dobra odpowiedź!<br>Wygrałeś/aś: '+tab[i]+'<br>Gratulacje!';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="end" onclick="end()">Odbierz nagrodę</button>';
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
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="new_game" onclick="play_v1(), end_bad()">Zagraj ponownie</button>';
	}
	if(q==2){
		document.getElementById("content_question").innerHTML='<br><br>Przykro mi... <br>To była zła odpowiedź<br>Prawie dotarliśmy do gwarantowanego tysiąca złotych...<br>Wygrałeś/aś: '+tab[0]+'<br>';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="new_game" onclick="play_v1(), end_bad()">Zagraj ponownie</button>';
	}
	if(q===3||q===4||q===5||q===6){
		document.getElementById("content_question").innerHTML='<br><br>Przykro mi... <br>To była zła odpowiedź<br>Wygrałeś/aś gwarantowane: '+tab[1]+'<br>';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="new_game" onclick="play_v1(), end_bad()">Zagraj ponownie</button>';
	}

	if(q===7){
		document.getElementById("content_question").innerHTML='<br><br>Przykro mi... <br>To była zła odpowiedź<br>Było blisko do gwarantowanego 40 000zł.<br>Może następnym razem się uda?<br>Wygrałeś/aś gwarantowane: '+tab[1]+'<br>';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="new_game" onclick="play_v1(), end_bad()">Zagraj ponownie</button>';
	}
	if(q==8||q===9||q==10){
		document.getElementById("content_question").innerHTML='<br><br>Przykro mi... <br>To była zła odpowiedź<br>Wygrałeś/aś gwarantowane: '+tab[2]+'<br>';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="new_game" onclick="play_v1(), end_bad()">Zagraj ponownie</button>';
	}
	if(q===11){
		document.getElementById("content_question").innerHTML='<br><br>Przykro mi... <br>To była zła odpowiedź<br>Brakowało 2 poprawnych odpowiedzi do miliona...<br> No cóż szkoda 250 000 zł... <br>Wygrałeś/aś gwarantowane: '+tab[2]+'<br>';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="new_game" onclick="play_v1(), end_bad()">Zagraj ponownie</button>';
	}
	if(q==12){
		document.getElementById("content_question").innerHTML='<br><br>Przykro mi... <br>To była zła odpowiedź<br>Tylko jednego pytania zabrakło do miliona...<br> No cóż powodzenia następnym razem<br>Wygrałeś/aś gwarantowane: '+tab[2]+'<br>';
		document.getElementById("content_options").innerHTML='<button class="answer_btn" id="new_game" onclick="play_v1(), end_bad()">Zagraj ponownie</button>';
	}
}


//Koniec gry - zerowanie wyniku (odebranie nagrody)
function end(){
	var z=12;
	var tab = [0,500,1000,2000,5000,10000,20000,40000,75000,125000,250000,500000,1000000];
	document.getElementById("content_question").innerHTML='<br><br> Gratulacje! Wygrałeś/aś <br>'+tab[i]+' złotych.';
	document.getElementById("content_options").innerHTML='<button class="answer_btn" id="new_game" onclick="play_v1()">Zagraj ponownie</button>';
	while(z!=0){
		x = 'btn_'+z;
		document.getElementById(x).classList.remove("coins_gain");
		z--;
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