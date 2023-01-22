<?php include("../generator/setings.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("../generator/head-info.php");?>
	<style>
		.lef{
			margin-top:4%;
			margin-left:-20%;
			width:25%;
		}

		.rig{
			margin-top:4%;
			margin-right:-20%;
			width:110%;
		}

		#statistic-games{
			margin-top:2%;
			display:none;
		}

		.left-side-statistic, .center-side-statistic, .right-side-statistic{
			width:33%;
			height:50%;
			position:relative;
			float:left;
		}

		.left-side-statistic{
			background: rgba(255, 255, 255, 0.07);
			border-radius: 16px;
			box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
			backdrop-filter: blur(9.1px);
			-webkit-backdrop-filter: blur(9.1px);
			border: 1px solid rgba(255, 255, 255, 0.29);
			overflow-y: scroll;
		}

		.center-side-statistic{
			background: rgba(255, 255, 255, 0.07);
			border-radius: 16px;
			box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
			backdrop-filter: blur(9.1px);
			-webkit-backdrop-filter: blur(9.1px);
			border: 1px solid rgba(255, 255, 255, 0.29);
			overflow-y: scroll;
			margin-left:0.5%;
		}

		.right-side-statistic{
			background: rgba(255, 255, 255, 0.07);
			border-radius: 16px;
			box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
			backdrop-filter: blur(9.1px);
			-webkit-backdrop-filter: blur(9.1px);
			border: 1px solid rgba(255, 255, 255, 0.29);
			overflow-y: scroll;
			margin-left:0.5%;
		}

		.down-side-statistic{
			width:100%;
			height:40%;
			position:relative;
			float:left;
			background: rgba(255, 255, 255, 0.07);
			border-radius: 16px;
			box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
			backdrop-filter: blur(9.1px);
			-webkit-backdrop-filter: blur(9.1px);
			border: 1px solid rgba(255, 255, 255, 0.29);
			overflow-y: scroll;
			margin-top:0.5%;
		}

		::-webkit-scrollbar {
		width: 20px;
		}

		::-webkit-scrollbar-track {
		box-shadow: inset 0 0 5px grey; 
		border-radius: 10px;
		}
		
		::-webkit-scrollbar-thumb {
		background: #339aaf; 
		border-radius: 10px;
		}

		::-webkit-scrollbar-thumb:hover {
		background: #2b8092; 
		}

		table{
			color:white;
			width:100%;
			text-align:center;
		}

		.start{
			display:block;
		}

		#statistic, #startDashboard{
			cursor:pointer;
		}

	</style>
</head>

<?php
	$UserId = $_SESSION["UserName"];
	$date = date("Y-m-d");
	

	// MILIONERZY
	$sumAllMilioneires = "SELECT SUM(money) AS sumaWygranychAllm FROM game_talk_milionaires";
	$result_sumAllMilioneires = mysqli_query($dbconect, $sumAllMilioneires);

	if (mysqli_num_rows($result_sumAllMilioneires) > 0) {
		while($row = mysqli_fetch_assoc($result_sumAllMilioneires)) {
			$sumaWygranychAllm = $row['sumaWygranychAllm'];
		}
	}

	$sumOwnMilioneires = "SELECT SUM(money) AS sumaWygranychm FROM game_talk_milionaires WHERE idPlayer = '$UserId'";
	$result_sumOwnMilioneires = mysqli_query($dbconect, $sumOwnMilioneires);

	if (mysqli_num_rows($result_sumOwnMilioneires) > 0) {
		while($row = mysqli_fetch_assoc($result_sumOwnMilioneires)) {
			$sumaWygranychm = $row['sumaWygranychm'];
		}
	}

	$last3Milionaires = "SELECT * FROM game_talk_milionaires WHERE idPlayer = '$UserId' ORDER BY money DESC LIMIT 3";
	$result_last3Milionaires = mysqli_query($dbconect, $last3Milionaires);

	if (mysqli_num_rows($result_last3Milionaires) > 0) {
		while($row = mysqli_fetch_assoc($result_last3Milionaires)) {
			$question[] = $row['question'];
			$money[] = $row['money'];
			$gameDatem[] = date("Y-m-d", strtotime($row["gameDate"]));
		}
	}

	$last3DateMilionaires = "SELECT * FROM game_talk_milionaires WHERE idPlayer = '$UserId' ORDER BY gameDate DESC LIMIT 3";
	$result_last3DateMilionaires = mysqli_query($dbconect, $last3DateMilionaires);

	if (mysqli_num_rows($result_last3DateMilionaires) > 0) {
		while($row = mysqli_fetch_assoc($result_last3DateMilionaires)) {
			$question1[] = $row['question'];
			$money1[] = $row['money'];
			$gameDatem1[] = date("Y-m-d", strtotime($row["gameDate"]));
		}
	}


	// TETRIS
	$bestTetrisAll = "SELECT G.points, G.date, U.login FROM game_eye_tetris AS G	INNER JOIN user AS U	ON U.id = G.id_user	ORDER BY points DESC LIMIT 1 ;"; //WHERE idPlayer = '$UserId' 
	$result_bestTetrisAll = mysqli_query($dbconect, $bestTetrisAll);

	if (mysqli_num_rows($result_bestTetrisAll) > 0) {
		while($row = mysqli_fetch_assoc($result_bestTetrisAll)) {
			$TPointsAll = $row['points'];
			$TLoginAll = $row['login'];
			$TGameDatemAll = date("Y-m-d", strtotime($row["date"]));
		}
	}

	$bestTetris = "SELECT G.points, G.date, U.login FROM game_eye_tetris AS G	INNER JOIN user AS U	ON U.id = G.id_user WHERE id_user = '$UserId' ORDER BY points DESC LIMIT 1 ;"; //WHERE idPlayer = '$UserId' 
	$result_bestTetris = mysqli_query($dbconect, $bestTetris);

	if (mysqli_num_rows($result_bestTetris) > 0) {
		while($row = mysqli_fetch_assoc($result_bestTetris)) {
			$TPoints = $row['points'];
			$TLogin = $row['login'];
			$TGameDate = date("Y-m-d", strtotime($row["date"]));
		}
	}

	$TLaseTetris = "SELECT G.points, G.date, U.login FROM game_eye_tetris AS G	INNER JOIN user AS U	ON U.id = G.id_user WHERE id_user = '$UserId' ORDER BY date DESC LIMIT 3 ;"; //WHERE idPlayer = '$UserId' 
	$result_TLaseTetris = mysqli_query($dbconect, $TLaseTetris);

	if (mysqli_num_rows($result_TLaseTetris) > 0) {
		while($row = mysqli_fetch_assoc($result_TLaseTetris)) {
			$TPointsD[] = $row['points'];
			$TGameDateD[] = date("Y-m-d", strtotime($row["date"]));
		}
	}

	$TbestTetris = "SELECT G.points, G.date, U.login FROM game_eye_tetris AS G	INNER JOIN user AS U	ON U.id = G.id_user WHERE id_user = '$UserId' ORDER BY points DESC LIMIT 3 ;"; //WHERE idPlayer = '$UserId' 
	$result_TbestTetris = mysqli_query($dbconect, $TbestTetris);

	if (mysqli_num_rows($result_TbestTetris) > 0) {
		while($row = mysqli_fetch_assoc($result_TbestTetris)) {
			$TPointsB[] = $row['points'];
			$TGameDateB[] = date("Y-m-d", strtotime($row["date"]));
		}
	}


	// STATKI
	$BattleSWin = "SELECT count(*) AS Win FROM game_talk_ships WHERE idWinPlayer = '$UserId'";
	$result_BattleSWin = mysqli_query($dbconect, $BattleSWin);

	if (mysqli_num_rows($result_BattleSWin) > 0) {
		while($row = mysqli_fetch_assoc($result_BattleSWin)) {
			$Win = $row['Win'];
		}
	}

	$BattleSLose = "SELECT count(*) AS Lose FROM game_talk_ships WHERE idWinPlayer != '$UserId' AND idWinPlayer != 'NULL' AND (idHost = '$UserId' OR idGuest = '$UserId')";
	$result_BattleSLose = mysqli_query($dbconect, $BattleSLose);

	if (mysqli_num_rows($result_BattleSLose) > 0) {
		while($row = mysqli_fetch_assoc($result_BattleSLose)) {
			$Lose = $row['Lose'];
		}
	}

	$BattleSWait = "SELECT count(*) AS Wait FROM game_talk_ships WHERE idWinPlayer ='NULL' AND (idHost = '$UserId' OR idGuest = '$UserId')"; 
	$result_BattleSWait = mysqli_query($dbconect, $BattleSWait);

	if (mysqli_num_rows($result_BattleSWait) > 0) {
		while($row = mysqli_fetch_assoc($result_BattleSWait)) {
			$Wait = $row['Wait'];
		}
	}


	$BattleS = "SELECT idHost,playerHostMove,idGuest,playerGuestMove,idWinPlayer,gameDate,game_key FROM game_talk_ships AS G	WHERE idHost = '$UserId' OR idGuest = '$UserId' ORDER BY gameDate DESC;"; //WHERE idPlayer = '$UserId' 
	$result_BattleS = mysqli_query($dbconect, $BattleS);

	if (mysqli_num_rows($result_BattleS) > 0) {
		while($row = mysqli_fetch_assoc($result_BattleS)) {
			$idHost[] = $row['idHost'];
			$playerHostMove[] = $row['playerHostMove'];
			$idGuest[] = $row['idGuest'];
			$playerGuestMove[] = $row['playerGuestMove'];
			$idWinPlayer[] = $row['idWinPlayer'];
			$game_key[] = $row['game_key'];
			$gameDateBs[] = date("Y-m-d", strtotime($row["gameDate"]));
		}
	}


	// $last5Milionaires = "SELECT * FROM game_talk_milionaires WHERE idPlayer = '$UserId' ORDER BY money DESC LIMIT 5;";
	// $result_last5Milionaires = mysqli_query($dbconect, $last5Milionaires);

	// if (mysqli_num_rows($result_last5Milionaires) > 0) {
	// 	while($row = mysqli_fetch_assoc($result_last5Milionaires)) {
	// 		$question[] = $row['question'];
	// 		$money[] = $row['money'];
	// 		$gameDate[] = date("Y-m-d", strtotime($row["gameDate"]));
	// 		/* $gameDate[] = date("Y-m-d H:i:s", strtotime($row["gameDate"])); */
	// 	}
	// }
	
	// echo("<script>console.log('".$gameDate[1]."');</script>");

	// $last5Milionaires = "SELECT gameDate FROM game_talk_milionaires WHERE id = '10'";
	// $result_last5Milionaires = mysqli_query($dbconect, $last5Milionaires);

	// if (mysqli_num_rows($result_last5Milionaires) > 0) {
	// 	while($row = mysqli_fetch_assoc($result_last5Milionaires)) {
	// 		echo("<script>console.log(".$game.");</script>");
	// 	}
	// }
?>

<body>

<?php include("../generator/header.php");?>
<div id="parallax">
<div class="container" id="main-content">

	<div class="right-side lef">
		
		<p id="startDashboard" onclick=showStart()>DASHBOARD</p>
		<hr>
		<br><br><br>

		<hr>
		<p id="statistic" onclick=showStats()>STATYSTYKI</p>
		<hr>
		<br><br><br>

		POMOC<br>
		<hr>

		Komendy głosowe
		<hr>
		Śledzenie wzroku
		<hr>

	

	</div>
	<div class="right-side rig" id="rig_vid" style="overflow-y: visible;">
		<div id="start">
			<div id="dashboard">
				<br><h4> DASHBOARD </h4><br>
			</div>
			Dziękujemy za wybranie naszej aplikacji! <br><br>
			Alips jest to aplikacja, która powstała w celach zaprezentowania możliwości jakie dają języki webowe.<br>
			Użytkownik może wchodzić w interakcję z komputerem pomimo braku specjalistycznego sprzętu eye trackingowego. <br><br>
			Rozwiązanie to znacznie obniża koszt np. leczenia, bądź ćwiczeń z pacjentami, które wymagają kontaktu wzrokowego. <br>
			Oprogramowanie można rozwinąć w kierunku zwiększonej interaakcji z użytkownikami np. dodając badania sprawdzające czas reakcji lub poprawność wymowy.<br>
		
		</div>
		<div id="statistic-games">
			<h4> STATYSTYKI KONTA </h4>
			<div class="left-side-statistic">
				<h5> TETRIS </h5>

				Najlepszy wynik osiągnął: <br>
				<table>
					<tr><th>Data</th><th>Punkty</th><th>Login/id</th></tr>
					<tr><td><?php echo($TGameDatemAll);?></td><td><?php echo($TPointsAll);?></td><td><?php echo($TLoginAll);?></td></tr>
				</table>
				<br><br>
				Twój najwyższy wynik:<br>
				<table>
					<tr><th>Data</th><th>Punkty</th><th>Login/id</th></tr>
					<tr><td><?php echo($TGameDate);?></td><td><?php echo($TPoints);?></td><td><?php echo($TLogin);?></td></tr>
				</table>
				<br>
				<hr>
				3 najlepsze wyniki <br><br>
				<table>
					<tr><th>Data</th><th>Punkty</th></tr>
					<tr><td><?php echo($TGameDateB[0]);?></td><td><?php echo($TPointsB[0]);?></td></tr>
					<?php if($TGameDateB[1] != NULL){	?>
						<tr><td><?php echo($TGameDateB[1]);?></td><td><?php echo($TPointsB[1]);?></tr>
					<?php } if($TGameDateB[2] != NULL){	?>
						<tr><td><?php echo($TGameDateB[2]);?></td><td><?php echo($TPointsB[2]);?></td></tr>
					<?php } ?>
				</table>
				<hr>
				
				3 ostatnie wyniki<br><br>
				<table>
					<tr><th>Data</th><th>Punkty</th></tr>
					<tr><td><?php echo($TGameDateD[0]);?></td><td><?php echo($TPointsD[0]);?></td></tr>
					<?php if($TGameDateD[1] != NULL){	?>
						<tr><td><?php echo($TGameDateD[1]);?></td><td><?php echo($TPointsD[1]);?></tr>
					<?php } if($TGameDateD[2] != NULL){	?>
						<tr><td><?php echo($TGameDateD[2]);?></td><td><?php echo($TPointsD[2]);?></td></tr>
					<?php } ?>
				</table>
				
			</div>




			<div class="center-side-statistic">
				<h5> MILIONERZY </h5>
				Wszyscy gracze wygrali w sumie: <br>
				<?php echo($sumaWygranychAllm);?> PLN
				<br><br>
				Twoja wygrana:<br>
				<?php echo($sumaWygranychm);?> PLN
				<br>
				<hr>
				
				3 ostatnie wyniki<br><br>
				<table>
					<tr><th>Data</th><th>Pytanie</th><th>Wygrana</th></tr>
					<tr><td><?php echo($gameDatem1[0]);?></td><td><?php echo($question1[0]);?></td><td><?php echo($money1[0]);?> PLN</td></tr>
					<?php if($gameDatem1[1] != NULL){	?>
						<tr><td><?php echo($gameDatem1[1]);?></td><td><?php echo($question1[1]);?></td><td><?php echo($money1[1]);?> PLN</td></tr>
					<?php } else if($gameDatem1[2] != NULL){	?>
						<tr><td><?php echo($gameDatem1[2]);?></td><td><?php echo($question1[2]);?></td><td><?php echo($money1[2]);?> PLN</td></tr>
					<?php } ?>
				</table>
				<hr>
				3 najlepsze wyniki <br><br>
				<table>
					<tr><th>Data</th><th>Pytanie</th><th>Wygrana</th></tr>
					<tr><td><?php echo($gameDatem[0]);?></td><td><?php echo($question[0]);?></td><td><?php echo($money[0]);?> PLN</td></tr>
					<?php if($gameDatem[1] != NULL){	?>
						<tr><td><?php echo($gameDatem[1]);?></td><td><?php echo($question[1]);?></td><td><?php echo($money[1]);?> PLN</td></tr>
					<?php } else if($gameDatem[2] != NULL){	?>
						<tr><td><?php echo($gameDatem[2]);?></td><td><?php echo($question[2]);?></td><td><?php echo($money[2]);?> PLN</td></tr>
					<?php } ?>
				</table>

			</div>
			<div class="right-side-statistic">
				<h5> STATKI </h5>
				<table>
					<tr><th><span style='color:green'><b>Wygrane</b></span></th><th><span style='color:orange'><b>Nierozegrane</b></span></th><th><span style='color:red'><b>Przegrane</b></span></th></tr>
					<tr><td><?php echo("<span style='color:green'><b>".$Win."</b></span>");?></td><td><?php echo("<span style='color:orange'><b>".$Wait."</b></span>");?></td><td><?php echo("<span style='color:red'><b>".$Lose."</b></span>");?></td></tr>
				</table>
				
				<br><br>
				Historia gier: <br><br><hr>
				<?php
					for($i=0;$i!=count($idHost);$i++){
						if($idWinPlayer[$i] == $UserId){
							echo("<span style='color:green'><b>Wygrana <br>(".$game_key[$i].")</b></span>");
						}else if ($idWinPlayer[$i] == NULL){
							echo("<span style='color:orange'><b>Nierozegrana<br>(".$game_key[$i].")</b></span>");
						}else{
							echo("<span style='color:red'><b>Przegrana<br>(".$game_key[$i].")</b></span>");
						}
						?>
						<table>
							<tr><th>Data</th><th>Host</th><th>Ruchy H</th><th>Gość</th><th>Ruchy G</th></tr>
							<tr><td><?php echo($gameDateBs[$i]);?></td><td><?php echo($idHost[$i]);?></td><td><?php echo($playerHostMove[$i]);?></td><td><?php echo($idGuest[$i]);?></td><td><?php echo($playerGuestMove[$i]);?></td></tr>
						</table>
						<hr><br>
						<?php
					}

				?>
				
			</div>

			<div class="down-side-statistic">
				<h5> BADANIE RYNKU </h5>
			</div>
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../js/index.js"></script>
<?php include("../generator/footer.php");?>

<script>
	// const ctx = document.getElementById('milionaires');

	// new Chart(ctx, {
	// 	type: 'bar',
	// 	data: {
	// 	labels: [
	// 			<?php 
	// 				for($i=0; $i<5;$i++){
	// 					echo("'".$gameDate[$i]."',");
	// 				};
	// 			?>],
	// 	datasets: [{
	// 		label: 'Najwyższe wygrane',
	// 		data: [
	// 			<?php 
	// 				for($i=0; $i<5;$i++){
	// 					echo($money[$i].",");
						
	// 				};
	// 			?>],
	// 		borderWidth: 1
	// 	}]
	// 	},
	// 	options: {
	// 	scales: {
	// 		y: {
	// 		beginAtZero: true
	// 		}
	// 	}
	// 	}
	// });

	function showStats(){
		document.getElementById("start").style.display = "none";
		document.getElementById("statistic-games").style.display = "block";
		// document.getElementById("myDIV").style.display = "none";
	}
	function showStart(){
		document.getElementById("statistic-games").style.display = "none";
		document.getElementById("start").style.display = "block";
	}
</script>

</body>
</html>