<!DOCTYPE html>
<html lang="pl-PL">
<?php include("../../../generator/setings.php");?>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Battleship</title>
</head>

<?php

	if(isset($_SESSION['keyHostGame'])){
		$playerId = $_SESSION["UserId"];
		$keyVerify = $_SESSION['keyHostGame'];
		$CheckExist = "SELECT * FROM game_talk_ships WHERE game_key = '$keyVerify' AND gameDate = CURDATE() AND (idHost = '$playerId' OR idGuest = '$playerId')" ;
		$result3 = mysqli_query($dbconect, $CheckExist);
		if (mysqli_num_rows($result3) > 0) {
			while($row = mysqli_fetch_assoc($result3)) {
				$id = $row["id"];
				$idHost = $row["idHost"];
				$idGuest = $row["idGuest"];
				$hostRedy = $row["hostRedy"];
				$guestRedy = $row["guestRedy"];
			}
			if(($playerId == $idHost && $hostRedy == 1) || ($playerId == $idGuest && $guestRedy == 1) ){
				echo '<script> window.location.href = "battleship.php";</script>';
			}
		}
	}

	if(isset($_POST['startGame'])){
		//$hostId = $_SESSION['keyHost'];
		//$playerId = $_SESSION["UserId"];
		$keyVerify = $_SESSION['keyHostGame']; 
		$tabShip = $_POST['location'];

		if($idHost == $playerId){
			$joinGameLobby ="UPDATE game_talk_ships SET hostDashboard = '$tabShip', hostRedy = 1 WHERE id = '$id'";
			if (mysqli_query($dbconect, $joinGameLobby)) {}	
		}
		else if($idGuest == $playerId){
			$joinGameLobby ="UPDATE game_talk_ships SET guestDashboard = '$tabShip', guestRedy = 1 WHERE id = '$id'";
			if (mysqli_query($dbconect, $joinGameLobby)) {}	
		}		
	}


	 if(isset($_POST['setGame'])){
		//$hostId = $_SESSION['keyHost'];

		$hostId = $_SESSION["UserId"];

		$v = 0;

		// VERIFY IS KEY USED
		while($v==0){
			$ran = rand(100000,999999);
			
			$keyVerify =  $ran.$hostId;

			$CheckExist = "SELECT * FROM game_talk_ships WHERE game_key = '$keyVerify' AND gameDate != CURDATE()";
			$result3 = mysqli_query($dbconect, $CheckExist);
			if (mysqli_num_rows($result3) < 1) {
				// KEY IS FREE - GO TO NEXT STEP
				$v = 1;
				$_SESSION['keyHostGame'] = $keyVerify;
			} 
			// IF KEY IS USED - TRY AGAIN
		}

		$dateGame = date("Y-m-d");

		$setNewGameLobby ="INSERT INTO game_talk_ships (id,idHost,hostDashboard,idGuest,guestDashboard,game_key,Public,idWinPlayer,gameDate,hostRedy,guestRedy) VALUES ('','$hostId',NULL,NULL,NULL,'$keyVerify',NULL,NULL,'$dateGame','0','0')";
            if (mysqli_query($dbconect, $setNewGameLobby)) {}		
	}	
	

	if(isset($_POST['joinGame'])){
		//$hostId = $_SESSION['keyHost'];
		$playerId = $_SESSION["UserId"];
		$keyJoin = $_POST['keyToHostGame'];
		$keyVerify = $keyJoin;
		$_SESSION['keyHostGame'] = $keyVerify;

		$CheckExist = "SELECT * FROM game_talk_ships WHERE game_key = '$keyJoin' AND gameDate = CURDATE() AND idHost != '$playerId' AND (idGuest IS NULL OR idGuest = '$playerId')" ;
		$result3 = mysqli_query($dbconect, $CheckExist);
		if (mysqli_num_rows($result3) > 0) {
			while($row = mysqli_fetch_assoc($result3)) {
				$id = $row["id"];
				$hostDashboard = $row["hostDashboard"];
				$guestRedy = $row["guestRedy"];
			}

			if($guestRedy == 1){
				echo '<script> window.location.href = "battleship.php";</script>';
			}else{
				$joinGameLobby ="UPDATE game_talk_ships SET idGuest = '$playerId' WHERE id = '$id'";
           		if (mysqli_query($dbconect, $joinGameLobby)) {}	
			}	
		}else{
			echo '<script>alert("Rozgrywka zakończyła się lub klucz rozgrywki jest błędny."); window.location.href= "index.php";</script>';
		}
	} 


	
		

?>

<body>
	
	<div id="board">	
	<div class = "key_game" style="position: fixed;">Kod: <?php echo($keyVerify)?></div>
		<div id="messageArea">Rozstaw 9 okrętów.</div>
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
			<form method="POST" >
				<input class="inShip" name="startGame" id="startGame" type="submit" value="Rozpocznij"> <br>
				<input id="btnhid" name="location" type="text" > 
			</form>
			<input id="resetShip" type="button" value="Resetuj ustawienie" onclick=resetShip()> 
			
		<br><div>Powiedziałeś</div><div id="speak_text"></div>
	</div></center>
	<!-- <script src="../../../js/voiceController.js"></script> -->
	<script src="set_script.js"></script>
</body>
</html>