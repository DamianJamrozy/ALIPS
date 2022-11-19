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
		$destroy = $_POST['destroy'];
		//$lastShoot = $_POST['lastShoot'];

		if($idHost == $playerId){
			$playerHostMove++;

			$joinGameLobby ="UPDATE game_talk_ships SET guestDashboard = '$tabShip', destroyGuest = '$destroy', playerHostMove = '$playerHostMove' WHERE id = '$id'";
			if (mysqli_query($dbconect, $joinGameLobby)) {}	
		}
		else if($idGuest == $playerId){
			$playerGuestMove++;
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
		<input type="text" name="destroy" id="destroy" style="visibility: hidden;">
		<!-- <input type="text" name="lastShoot" id="lastShoot"> -->
		<input type="submit" id="sendRocket" name="fire" style="visibility: hidden;">
	</form>
	<script src="../../../js/voiceController.js"></script>
	<!-- <script src="script.js"></script> -->


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

		/* START SHIP CONFIGURATION */
		

		console.log(enemyDashboard);
		var array = enemyDashboard.split(''); // zastosowano pusty separator

		console.log(array[0]);

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
				console.log(locationY+''+locationX);
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
			console.log(locationY + ' ' + locationX);
		}

		console.log(tabShip);

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

			if(tabShip[setShipY][setShipX] == 0 && wait == 0){
				tabShip[setShipY][setShipX] = 8;
				document.getElementById("messageArea").innerHTML = "Pudło! Pozostało: " + i;
				document.getElementById(idShip).setAttribute("class","miss");
				document.getElementById("location").value = tabShip;
				//document.getElementById('sendRocket').submit();
				wait = 1;
				setTimeout(() => {
					console.log("Pudło.");
					document.getElementById("sendRocket").click();
				}, "8000")
			}
			else if (tabShip[setShipY][setShipX] == 1 && wait == 0){
				tabShip[setShipY][setShipX] = 2;
				wait = 1;
				enemyHit++; 
				document.getElementById("messageArea").innerHTML = "Okręt trafiony! Pozostało: " + i;
				document.getElementById(idShip).setAttribute("class","hit");
				document.getElementById("location").value = tabShip;
				document.getElementById("destroy").value = enemyHit;
				
				//document.getElementById('sendRocket').submit();
				setTimeout(() => {
					console.log("Delayed for 1 second.");
					//document.sendRocket.submit();
					
					document.getElementById("sendRocket").click();
				}, "8000")
				
				
				
			} 
			else if(wait == 1){
				document.getElementById("messageArea").innerHTML = "Ruch już został wykonany... Zaczekaj na swoją kolej.";
			}
			else{
				document.getElementById("messageArea").innerHTML = "Atakowaliśmy już ten teren!";
			}
			console.log(tabShip);
			
		}
	</script>




</body>
</html>