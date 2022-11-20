<!DOCTYPE html>
<html lang="pl-PL">
<?php include("../../../generator/setings.php");?>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Battleship</title>
</head>
<?php
	$rows = mysqli_query($dbconect, "SELECT * FROM game_talk_ships");

    $playerId = $_SESSION["UserId"];
    $keyVerify = $_SESSION['keyHostGame'];
    $CheckExist = "SELECT * FROM game_talk_ships WHERE game_key = '$keyVerify' AND gameDate = CURDATE() AND (idHost = '$playerId' OR idGuest = '$playerId')" ;
    $result3 = mysqli_query($dbconect, $CheckExist);
    if (mysqli_num_rows($result3) > 0) {
        while($row = mysqli_fetch_assoc($result3)) {
            $id = $row["id"];
            $idHost = $row["idHost"];
            $idGuest = $row["idGuest"];
            $hostDashboard = $row["hostDashboard"];
            $guestDashboard = $row["guestDashboard"];
			$destroyGuest = $row["destroyGuest"];
			$destroyHost = $row["destroyHost"];
			$playerGuestMove = $row["playerGuestMove"];
			$playerHostMove = $row["playerHostMove"];
        }
    }

	if(isset($_POST['fire'])){
		//$keyVerify = $_SESSION['keyHostGame']; 
		$tabShip = $_POST['location'];
		$destroy = (int)$_POST['destroy'];
		$destroyGuest = (int)$destroyGuest;
		$destroyHost = (int)$destroyHost;

		if($idHost == $playerId){
			$playerHostMove++;
			$destroy = $destroy+$destroyGuest;
			$joinGameLobby ="UPDATE game_talk_ships SET guestDashboard = '$tabShip', destroyGuest = '$destroy', playerHostMove = '$playerHostMove' WHERE id = '$id'";
			if (mysqli_query($dbconect, $joinGameLobby)) {}	
		}
		else if($idGuest == $playerId){
			$playerGuestMove++;
			$destroy = $destroy+$destroyHost;
			$joinGameLobby ="UPDATE game_talk_ships SET hostDashboard = '$tabShip', destroyHost = '$destroy', playerGuestMove = '$playerGuestMove' WHERE id = '$id'";
			if (mysqli_query($dbconect, $joinGameLobby)) {}	
		}		
	}

	$rows = mysqli_query($dbconect, "SELECT * FROM game_talk_ships");

    $playerId = $_SESSION["UserId"];
    $keyVerify = $_SESSION['keyHostGame'];
    $CheckExist = "SELECT * FROM game_talk_ships WHERE game_key = '$keyVerify' AND gameDate = CURDATE() AND (idHost = '$playerId' OR idGuest = '$playerId')" ;
    $result3 = mysqli_query($dbconect, $CheckExist);
    if (mysqli_num_rows($result3) > 0) {
        while($row = mysqli_fetch_assoc($result3)) {
            $id = $row["id"];
            $idHost = $row["idHost"];
            $idGuest = $row["idGuest"];
            $hostDashboard = $row["hostDashboard"];
            $guestDashboard = $row["guestDashboard"];
			$destroyGuest = $row["destroyGuest"];
			$destroyHost = $row["destroyHost"];
			$playerGuestMove = $row["playerGuestMove"];
			$playerHostMove = $row["playerHostMove"];
        }
    }

	if($playerId == $idHost){
		echo("<script> var whoIam = '1'; </script>");
		echo("<script> var enemyDashboard = '".$guestDashboard."'; </script>");
		echo("<script> var enemyHit = '".$destroyGuest."'; </script>");
	}else{
		echo("<script> var whoIam = '2'; </script>");
		echo("<script> var enemyDashboard = '".$hostDashboard."'; </script>");
		echo("<script> var enemyHit = '".$destroyHost."'; </script>");
	}


?>
<body onload = "table();">
<script type="text/javascript">

	function table(){
	const xhttp = new XMLHttpRequest();
	xhttp.onload = function(){
		document.getElementById("table").innerHTML = this.responseText;
	}
	xhttp.open("GET", "system.php");
	xhttp.send();
	}

	setInterval(function(){
	table();
	}, 10);
</script>

<div id="table"></div>
	
	<div id="board">	
	<div class = "key_game" style="position: fixed;">Kod: <?php echo($keyVerify)?></div>
		<div id="messageArea">Powiedz nazwę pola aby zaatakować.</div>
		<table>
			<tr>
				<th class="numbers"></th>
				<th class="numbers">0</th>
				<th class="numbers">1</th>
				<th class="numbers">2</th>
				<th class="numbers">3</th>
				<th class="numbers">4</th>
				<th class="numbers">5</th>
				<th class="numbers">6</th>
			</tr>

			<tr>
				<th class="letters">A</th>
				<td><div id="00" onClick="reply_click(this.id)"></div></td>
				<td><div id="01" onClick="reply_click(this.id)"></div></td>
				<td><div id="02" onClick="reply_click(this.id)"></div></td>
				<td><div id="03" onClick="reply_click(this.id)"></div></td>
				<td><div id="04" onClick="reply_click(this.id)"></div></td>
				<td><div id="05" onClick="reply_click(this.id)"></div></td>
				<td><div id="06" onClick="reply_click(this.id)"></div></td>
			</tr>
				<tr>
				<th class="letters">B</th>
				<td><div id="10" onClick="reply_click(this.id)"></div></td>
				<td><div id="11" onClick="reply_click(this.id)"></div></td>
				<td><div id="12" onClick="reply_click(this.id)"></div></td>
				<td><div id="13" onClick="reply_click(this.id)"></div></td>
				<td><div id="14" onClick="reply_click(this.id)"></div></td>
				<td><div id="15" onClick="reply_click(this.id)"></div></td>
				<td><div id="16" onClick="reply_click(this.id)"></div></td>
			<tr>
				<th class="letters">C</th>
				<td><div id="20" onClick="reply_click(this.id)"></div></td>
				<td><div id="21" onClick="reply_click(this.id)"></div></td>
				<td><div id="22" onClick="reply_click(this.id)"></div></td>
				<td><div id="23" onClick="reply_click(this.id)"></div></td>
				<td><div id="24" onClick="reply_click(this.id)"></div></td>
				<td><div id="25" onClick="reply_click(this.id)"></div></td>
				<td><div id="26" onClick="reply_click(this.id)"></div></td>
			</tr>
				</tr>
				<tr>
				<th class="letters">D</th>
				<td><div id="30" onClick="reply_click(this.id)"></div></td>
				<td><div id="31" onClick="reply_click(this.id)"></div></td>
				<td><div id="32" onClick="reply_click(this.id)"></div></td>
				<td><div id="33" onClick="reply_click(this.id)"></div></td>
				<td><div id="34" onClick="reply_click(this.id)"></div></td>
				<td><div id="35" onClick="reply_click(this.id)"></div></td>
				<td><div id="36" onClick="reply_click(this.id)"></div></td>
			</tr>
			<tr>
				<th class="letters">E</td>
				<td><div id="40" onClick="reply_click(this.id)"></div></td>
				<td><div id="41" onClick="reply_click(this.id)"></div></td>
				<td><div id="42" onClick="reply_click(this.id)"></div></td>
				<td><div id="43" onClick="reply_click(this.id)"></div></td>
				<td><div id="44" onClick="reply_click(this.id)"></div></td>
				<td><div id="45" onClick="reply_click(this.id)"></div></td>
				<td><div id="46" onClick="reply_click(this.id)"></div></td>
			</tr>
			<tr>
				<th class="letters">F</td>
				<td><div id="50" onClick="reply_click(this.id)"></div></td>
				<td><div id="51" onClick="reply_click(this.id)"></div></td>
				<td><div id="52" onClick="reply_click(this.id)"></div></td>
				<td><div id="53" onClick="reply_click(this.id)"></div></td>
				<td><div id="54" onClick="reply_click(this.id)"></div></td>
				<td><div id="55" onClick="reply_click(this.id)"></div></td>
				<td><div id="56" onClick="reply_click(this.id)"></div></td>
			</tr>
			<tr>
				<th class="letters">G</td>
				<td><div id="60" onClick="reply_click(this.id)"></div></td>
				<td><div id="61" onClick="reply_click(this.id)"></div></td>
				<td><div id="62" onClick="reply_click(this.id)"></div></td>
				<td><div id="63" onClick="reply_click(this.id)"></div></td>
				<td><div id="64" onClick="reply_click(this.id)"></div></td>
				<td><div id="65" onClick="reply_click(this.id)"></div></td>
				<td><div id="66" onClick="reply_click(this.id)"></div></td>
			</tr>
		</table>
		<center>
		<br><div>Powiedziałeś</div><div id="speak_text"></div>
	</div></center>
	
	<form method="POST" name="sendRocket">
		<input type="text" name="location" id="location" style="visibility: hidden;">
		<input type="number" name="destroy" id="destroy" style="visibility: hidden;">
		<input type="submit" id="sendRocket" name="fire" style="visibility: hidden;">
	</form>
	<script src="../../../js/voiceController.js"></script>


	<?php

	// START END OF GAME
	if($destroyGuest == 9 && $destroyHost == 9){
		// IF HOST WIN
		if($playerGuestMove > $playerHostMove){
			$joinGameLobby ="UPDATE game_talk_ships SET idWinPlayer = '$idHost' WHERE id = '$id'";
			if (mysqli_query($dbconect, $joinGameLobby)) {}	
			if($playerId == $idHost){
				echo('<script>document.getElementById("messageArea").innerHTML = "Kapitanie Wygraliśmy bitwę! Wszystkie okręty wroga zostały zatopione.";</script>');
			}else{
				echo('<script>document.getElementById("messageArea").innerHTML = "Niestety ale polegliśmy. Nasze statki zatonęły.";</script>');
			}
		}
		// IF GUEST WIN
		else if ($playerGuestMove < $playerHostMove){
			$joinGameLobby ="UPDATE game_talk_ships SET idWinPlayer = '$idGuest' WHERE id = '$id'";
			if (mysqli_query($dbconect, $joinGameLobby)) {}	
			if($playerId == $idGuest){
				echo('<script>document.getElementById("messageArea").innerHTML = "Kapitanie Wygraliśmy bitwę! Wszystkie okręty wroga zostały zatopione.";</script>');
			}else{
				echo('<script>document.getElementById("messageArea").innerHTML = "Niestety ale polegliśmy. Nasze statki zatonęły.";</script>');
			}
		}
		// IF DRAW
		else{
			$joinGameLobby ="UPDATE game_talk_ships SET idWinPlayer = '0' WHERE id = '$id'";
			if (mysqli_query($dbconect, $joinGameLobby)) {}	
			echo('<script>document.getElementById("messageArea").innerHTML = "Bitwa zakończona ale nikt nie wygrał...";</script>');
		}
	}
	// END OF GAME

	?>




	<script>

		if (annyang) {
			// choose language
		annyang.setLanguage('pl-PL');
		// Let's define a command.
		const commands2 = {
			// Shoot board for Microsoft Edge
			'a zero.': a0,
			'a 0.': a0,
			'a jeden.': a1,
			'a 1.': a1,
			'a dwa.': a2,
			'a 2.': a2,
			'a trzy.': a3,
			'a 3.': a3,
			'a cztery.': a4,
			'a 4.': a4,
			'a pięć.': a5,
			'a 5.': a5,
			'a sześć.': a6,
			'a 6.': a6,

			'b zero.': b0,
			'b 0.': b0,
			'b jeden.': b1,
			'b 1.': b1,
			'b dwa.': b2,
			'b 2.': b2,
			'b trzy.': b3,
			'b 3.': b3,
			'b cztery.': b4,
			'b 4.': b4,
			'b pięć.': b5,
			'b 5.': b5,
			'b sześć.': b6,
			'b 6.': b6,

			'c zero.': c0,
			'c 0.': c0,
			'c jeden.': c1,
			'c 1.': c1,
			'c dwa.': c2,
			'c 2.': c2,
			'c trzy.': c3,
			'c 3.': c3,
			'c cztery.': c4,
			'c 4.': c4,
			'c pięć.': c5,
			'c 5.': c5,
			'c sześć.': c6,
			'c 6.': c6,

			'd zero.': d0,
			'd 0.': d0,
			'd jeden.': d1,
			'd 1.': d1,
			'd dwa.': d2,
			'd 2.': d2,
			'd trzy.': d3,
			'd 3.': d3,
			'd cztery.': d4,
			'd 4.': d4,
			'd pięć.': d5,
			'd 5.': d5,
			'd sześć.': d6,
			'd 6.': d6,

			'e zero.': e0,
			'e 0.': e0,
			'e jeden.': e1,
			'e 1.': e1,
			'e dwa.': e2,
			'e 2.': e2,
			'e trzy.': e3,
			'e 3.': e3,
			'e cztery.': e4,
			'e 4.': e4,
			'e pięć.': e5,
			'e 5.': e5,
			'e sześć.': e6,
			'e 6.': e6,

			'f zero.': f0,
			'f 0.': f0,
			'ew 0.': f0,
			'ew zero.': f0,
			'f jeden.': f1,
			'f 1.': f1,
			'ew 1.': f1,
			'f dwa.': f2,
			'f 2.': f2,
			'ew 2.': f2,
			'f trzy.': f3,
			'f 3.': f3,
			'ew 3.': f3,
			'f cztery.': f4,
			'f 4.': f4,
			'ew 4.': f4,
			'f pięć.': f5,
			'f 5.': f5,
			'ew 5.': f5,
			'f sześć.': f6,
			'f 6.': f6,
			'ew 6.': f6,

			'g zero.': g0,
			'g 0.': g0,
			'gie 0.': g0,
			'gie zero.': g0,
			'g jeden.': g1,
			'g 1.': g1,
			'gie 1.': g1,
			'g dwa.': g2,
			'g 2.': g2,
			'gie 2.': g2,
			'g trzy.': g3,
			'g 3.': g3,
			'gie 3.': g3,
			'g cztery.': g4,
			'g 4.': g4,
			'gie 4.': g4,
			'g pięć.': g5,
			'g 5.': g5,
			'gie 5.': g5,
			'g sześć.': g6,
			'g 6.': g6,
			'gie 6.': g6,

			// OUT OF RANGE COMM
			'a 7.': outOfRange,
			'b 7.': outOfRange,
			'c 7.': outOfRange,
			'd 7.': outOfRange,
			'e 7.': outOfRange,
			'f 7.': outOfRange,
			'g 7.': outOfRange,
		};

		// START Speak Shoot functions
		function a0() { var speakValue = '00'; reply_click(speakValue); }
		function a1() { var speakValue = '01'; reply_click(speakValue); }
		function a2() { var speakValue = '02'; reply_click(speakValue); }
		function a3() { var speakValue = '03'; reply_click(speakValue); }
		function a4() { var speakValue = '04'; reply_click(speakValue); }
		function a5() { var speakValue = '05'; reply_click(speakValue); }
		function a6() { var speakValue = '06'; reply_click(speakValue); }

		function b0() { var speakValue = '10'; reply_click(speakValue); }
		function b1() { var speakValue = '11'; reply_click(speakValue); }
		function b2() { var speakValue = '12'; reply_click(speakValue); }
		function b3() { var speakValue = '13'; reply_click(speakValue); }
		function b4() { var speakValue = '14'; reply_click(speakValue); }
		function b5() { var speakValue = '15'; reply_click(speakValue); }
		function b6() { var speakValue = '16'; reply_click(speakValue); }
		
		function c0() { var speakValue = '20'; reply_click(speakValue); }
		function c1() { var speakValue = '21'; reply_click(speakValue); }
		function c2() { var speakValue = '22'; reply_click(speakValue); }
		function c3() { var speakValue = '23'; reply_click(speakValue); }
		function c4() { var speakValue = '24'; reply_click(speakValue); }
		function c5() { var speakValue = '25'; reply_click(speakValue); }
		function c6() { var speakValue = '26'; reply_click(speakValue); }		
		
		function d0() { var speakValue = '30'; reply_click(speakValue); }
		function d1() { var speakValue = '31'; reply_click(speakValue); }
		function d2() { var speakValue = '32'; reply_click(speakValue); }
		function d3() { var speakValue = '33'; reply_click(speakValue); }
		function d4() { var speakValue = '34'; reply_click(speakValue); }
		function d5() { var speakValue = '35'; reply_click(speakValue); }
		function d6() { var speakValue = '36'; reply_click(speakValue); }

		function e0() { var speakValue = '40'; reply_click(speakValue); }
		function e1() { var speakValue = '41'; reply_click(speakValue); }
		function e2() { var speakValue = '42'; reply_click(speakValue); }
		function e3() { var speakValue = '43'; reply_click(speakValue); }
		function e4() { var speakValue = '44'; reply_click(speakValue); }
		function e5() { var speakValue = '45'; reply_click(speakValue); }
		function e6() { var speakValue = '46'; reply_click(speakValue); }
		
		function f0() { var speakValue = '50'; reply_click(speakValue); }
		function f1() { var speakValue = '51'; reply_click(speakValue); }
		function f2() { var speakValue = '52'; reply_click(speakValue); }
		function f3() { var speakValue = '53'; reply_click(speakValue); }
		function f4() { var speakValue = '54'; reply_click(speakValue); }
		function f5() { var speakValue = '55'; reply_click(speakValue); }
		function f6() { var speakValue = '56'; reply_click(speakValue); }
		
		function g0() { var speakValue = '60'; reply_click(speakValue); }
		function g1() { var speakValue = '61'; reply_click(speakValue); }
		function g2() { var speakValue = '62'; reply_click(speakValue); }
		function g3() { var speakValue = '63'; reply_click(speakValue); }
		function g4() { var speakValue = '64'; reply_click(speakValue); }
		function g5() { var speakValue = '65'; reply_click(speakValue); }
		function g6() { var speakValue = '66'; reply_click(speakValue); }


		function outOfRange() { alert('Co? Kapitanie, przecież nie ma takiej możliwości... cel jest poza naszym zasięgiem!');}
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


		/* START SHIP CONFIGURATION */
			//console.log(enemyDashboard);
		var array = enemyDashboard.split(''); // zastosowano pusty separator

		var tabShip = [
			[array[0],array[2],array[4],array[6],array[8],array[10],array[12]],
			[array[14],array[16],array[18],array[20],array[22],array[24],array[26]],
			[array[28],array[30],array[32],array[34],array[36],array[38],array[40]],
			[array[42],array[44],array[46],array[48],array[50],array[52],array[54]],
			[array[56],array[58],array[60],array[62],array[64],array[66],array[68]],
			[array[70],array[72],array[74],array[76],array[78],array[80],array[82]],
			[array[84],array[86],array[88],array[90],array[92],array[94],array[96]]
		];

		// LOOKING FOR HIT
		var locationY = 0;
		var locationX = 0;
		for(var x = 0; x<49; x++){
			
			if(tabShip[locationY][locationX]==2){
				document.getElementById(locationX+''+locationY).setAttribute("class","hit");
				console.log("Trafiony.");
			}
			else if (tabShip[locationY][locationX]==8){
				document.getElementById(locationX+''+locationY).setAttribute("class","miss");
				console.log("Pudło.");
			}
			locationY++;

			if(locationY == 7){
				locationY = 0;
				locationX++;
			}
			//console.log(locationY + ' ' + locationX);  //WHAT LOCATION WAS SHOOT?
		}

		//console.log(tabShip); //ALL LOCATION

		var i = 9;
		i = i - enemyHit;

		var wait = 0;

		if(i == 0){
			//document.getElementById("btnhid").value = tabShip;
			//document.getElementById("messageArea").innerHTML = "Kapitanie Wygraliśmy bitwę! Wszystkie okręty wroga zostały zatopione.";
			wait = 1;
		}

		function reply_click(idShip)
		{
			var setShipX = idShip[0];
			var setShipY = idShip[1];
			enemyHit = 0; 

			// IF IS MISS AND NOT LOADING NEW ROCKET
			if(tabShip[setShipY][setShipX] == 0 && wait == 0){
				tabShip[setShipY][setShipX] = 8;
				document.getElementById("messageArea").innerHTML = "Pudło! Pozostało: " + i;
				document.getElementById(idShip).setAttribute("class","miss");
				document.getElementById("location").value = tabShip;
				wait = 1;
				setTimeout(() => {
					console.log("Pudło.");
					document.getElementById("sendRocket").click();
				}, "8000")
			}
			// IF IS HIT AND NOT LOADING NEW ROCKET
			else if (tabShip[setShipY][setShipX] == 1 && wait == 0){
				tabShip[setShipY][setShipX] = 2;
				wait = 1;
				enemyHit = '1'; 
				document.getElementById("messageArea").innerHTML = "Okręt trafiony! Pozostało: " + i;
				document.getElementById(idShip).setAttribute("class","hit");
				document.getElementById("location").value = tabShip;
				document.getElementById("destroy").value = enemyHit;

				setTimeout(() => {
					console.log("Trafiony.");
					document.getElementById("sendRocket").click();
				}, "8000")
			} 
			// IF IS LOADING NEW ROCKET
			else if(wait == 1){
				document.getElementById("messageArea").innerHTML = "Ruch już został wykonany... Zaczekaj na swoją kolej.";
			}
			// IF ROCKET SEND 2x IN THE SAME PLACE
			else{
				document.getElementById("messageArea").innerHTML = "Atakowaliśmy już ten teren!";
			}
		}
	</script>
</body>
</html>