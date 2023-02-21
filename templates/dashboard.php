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
	$UserId = $_SESSION["UserId"];
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


	// Research
	$ResearchColorSelected = "SELECT BCU.idColor, SUM(BCU.points) AS SumSP, SUM(BCU.lookTimePoints) AS SumLP, BC.Name FROM business_color_user AS BCU INNER JOIN business_color AS BC ON BC.id = BCU.idColor GROUP BY BCU.idColor ORDER BY SumSP DESC;";
	$result_ResearchColorSelected = mysqli_query($dbconect, $ResearchColorSelected);

	if (mysqli_num_rows($result_ResearchColorSelected) > 0) {
		while($row = mysqli_fetch_assoc($result_ResearchColorSelected)) {
			$R1idColorS[] = $row['idColor'];
			$R1PointsS[] = $row['SumSP'];
			$R1TimeS[] = $row['SumLP'];
			$R1NameS[] = $row['Name'];
		}
	}

	$ResearchColorLook = "SELECT BCU.idColor, SUM(BCU.points) AS SumSP, SUM(BCU.lookTimePoints) AS SumLP, BC.Name FROM business_color_user AS BCU INNER JOIN business_color AS BC ON BC.id = BCU.idColor GROUP BY BCU.idColor ORDER BY SumLP DESC;";
	$result_ResearchColorLook = mysqli_query($dbconect, $ResearchColorLook);

	if (mysqli_num_rows($result_ResearchColorLook) > 0) {
		while($row = mysqli_fetch_assoc($result_ResearchColorLook)) {
			$R1idColorL[] = $row['idColor'];
			$R1PointsL[] = $row['SumSP'];
			$R1TimeL[] = $row['SumLP'];
			$R1NameL[] = $row['Name'];
		}
	}

	$ResearchFoodSelected = "SELECT BCU.idFood, SUM(BCU.points) AS SumSP, SUM(BCU.lookTimePoints) AS SumLP, BC.Name FROM business_food_user AS BCU INNER JOIN business_food AS BC ON BC.id = BCU.idFood GROUP BY BCU.idFood ORDER BY SumSP DESC;";
	$result_ResearchFoodSelected = mysqli_query($dbconect, $ResearchFoodSelected);

	if (mysqli_num_rows($result_ResearchFoodSelected) > 0) {
		while($row = mysqli_fetch_assoc($result_ResearchFoodSelected)) {
			$R2idFoodS[] = $row['idFood'];
			$R2PointsS[] = $row['SumSP'];
			$R2TimeS[] = $row['SumLP'];
			$R2NameS[] = $row['Name'];
		}
	}

	$ResearchFoodLook = "SELECT BCU.idFood, SUM(BCU.points) AS SumSP, SUM(BCU.lookTimePoints) AS SumLP, BC.Name FROM business_food_user AS BCU INNER JOIN business_food AS BC ON BC.id = BCU.idFood GROUP BY BCU.idFood ORDER BY SumLP DESC;";
	$result_ResearchFoodLook = mysqli_query($dbconect, $ResearchFoodLook);

	if (mysqli_num_rows($result_ResearchFoodLook) > 0) {
		while($row = mysqli_fetch_assoc($result_ResearchFoodLook)) {
			$R2idFoodL[] = $row['idFood'];
			$R2PointsL[] = $row['SumSP'];
			$R2TimeL[] = $row['SumLP'];
			$R2NameL[] = $row['Name'];
		}
	}
	
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
		<p id="statistic" onclick=Speech()>Komendy głosowe</p>
		<hr>
		<p id="statistic" onclick=Eye()>Śledzenie wzroku</p>
		
		<hr>

	

	</div>
	<div class="right-side rig" id="rig_vid" style="overflow-y: visible;">
		<div id="start">
			<div id="dashboard">
				<br><h4> DASHBOARD </h4><br>
			</div>
			<img src="../files/img/primary/Logov3.png" width="20%"><br>
			Dziękujemy za wybranie naszej aplikacji! <br><br>
			Alips jest to aplikacja, która powstała w celach zaprezentowania możliwości jakie dają języki webowe.<br>
			Użytkownik może wchodzić w interakcję z komputerem pomimo braku specjalistycznego sprzętu eye trackingowego. <br><br>
			Rozwiązanie to znacznie obniża koszt np. leczenia, bądź ćwiczeń z pacjentami, które wymagają kontaktu wzrokowego. <br>
			Oprogramowanie można rozwinąć w kierunku zwiększonej interakcji z użytkownikami np. dodając badania sprawdzające czas reakcji lub poprawność wymowy.<br>
		
			
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
				<br>
				<b>Logotyp:</b> <br>
				Top 5 wybranych przez użytkowników<br><br>
				
				<table>
					<tr><th>TOP 1</th><th>TOP 2</th><th>TOP 3</th><th>TOP 4</th><th>TOP 5</th></tr>
					<tr><td><img src="../web/business/logo/img/<?php echo($R1idColorS[0]+1)?>.png" width="60%"></td><td><img src="../web/business/logo/img/<?php echo($R1idColorS[1]+1)?>.png" width="60%"></td><td><img src="../web/business/logo/img/<?php echo($R1idColorS[2]+1)?>.png" width="60%"></td><td><img src="../web/business/logo/img/<?php echo($R1idColorS[3]+1)?>.png" width="60%"></td><td><img src="../web/business/logo/img/<?php echo($R1idColorS[4]+1)?>.png" width="60%"></td></tr>
					<tr><td><?php echo($R1NameS[0])?></td><td><?php echo($R1NameS[1])?></td><td><?php echo($R1NameS[2])?></td><td><?php echo($R1NameS[3])?></td><td><?php echo($R1NameS[4])?></td></tr>
					<tr><td><?php echo($R1PointsS[0])?></td><td><?php echo($R1PointsS[1])?></td><td><?php echo($R1PointsS[2])?></td><td><?php echo($R1PointsS[3])?></td><td><?php echo($R1PointsS[4])?></td></tr>
				</table>
				<hr>
				<br>
				Top 5 najdłuższego skupienia wzroku<br><br>
				
				<table>
					<tr><th>TOP 1</th><th>TOP 2</th><th>TOP 3</th><th>TOP 4</th><th>TOP 5</th></tr>
					<tr><td><img src="../web/business/logo/img/<?php echo($R1idColorL[0]+1)?>.png" width="60%"></td><td><img src="../web/business/logo/img/<?php echo($R1idColorL[1]+1)?>.png" width="60%"></td><td><img src="../web/business/logo/img/<?php echo($R1idColorL[2]+1)?>.png" width="60%"></td><td><img src="../web/business/logo/img/<?php echo($R1idColorL[3]+1)?>.png" width="60%"></td><td><img src="../web/business/logo/img/<?php echo($R1idColorL[4]+1)?>.png" width="60%"></td></tr>
					<tr><td><?php echo($R1NameL[0])?></td><td><?php echo($R1NameL[1])?></td><td><?php echo($R1NameL[2])?></td><td><?php echo($R1NameL[3])?></td><td><?php echo($R1NameL[4])?></td></tr>
					<tr><td><?php echo($R1TimeL[0])?></td><td><?php echo($R1TimeL[1])?></td><td><?php echo($R1TimeL[2])?></td><td><?php echo($R1TimeL[3])?></td><td><?php echo($R1TimeL[4])?></td></tr>
				</table>
				<hr>
				<br><br>
				<b>Kuchnie świata:</b> <br>
				Top 5 wybranych przez użytkowników<br><br>
				
				<table>
					<tr><th>TOP 1</th><th>TOP 2</th><th>TOP 3</th><th>TOP 4</th><th>TOP 5</th></tr>
					<tr><td><img src="../web/business/food/img/<?php echo($R2NameS[0])?>.jpg" width="60%"></td><td><img src="../web/business/food/img/<?php echo($R2NameS[1])?>.jpg" width="60%"></td><td><img src="../web/business/food/img/<?php echo($R2NameS[2])?>.jpg" width="60%"></td><td><img src="../web/business/food/img/<?php echo($R2NameS[3])?>.jpg" width="60%"></td><td><img src="../web/business/food/img/<?php echo($R2NameS[4])?>.jpg" width="60%"></td></tr>
					<tr><td><?php echo($R2NameS[0])?></td><td><?php echo($R2NameS[1])?></td><td><?php echo($R2NameS[2])?></td><td><?php echo($R2NameS[3])?></td><td><?php echo($R2NameS[4])?></td></tr>
					<tr><td><?php echo($R2PointsS[0])?></td><td><?php echo($R2PointsS[1])?></td><td><?php echo($R2PointsS[2])?></td><td><?php echo($R2PointsS[3])?></td><td><?php echo($R2PointsS[4])?></td></tr>
				</table>
					<hr>
				<br>
				Top 5 najdłuższego skupienia wzroku<br><br>
				
				<table>
					<tr><th>TOP 1</th><th>TOP 2</th><th>TOP 3</th><th>TOP 4</th><th>TOP 5</th></tr>
					<tr><td><img src="../web/business/food/img/<?php echo($R2NameL[0])?>.jpg" width="60%"></td><td><img src="../web/business/food/img/<?php echo($R2NameL[1])?>.jpg" width="60%"></td><td><img src="../web/business/food/img/<?php echo($R2NameL[2])?>.jpg" width="60%"></td><td><img src="../web/business/food/img/<?php echo($R2NameL[3])?>.jpg" width="60%"></td><td><img src="../web/business/food/img/<?php echo($R2NameL[4])?>.jpg" width="60%"></td></tr>
					<tr><td><?php echo($R2NameL[0])?></td><td><?php echo($R2NameL[1])?></td><td><?php echo($R2NameL[2])?></td><td><?php echo($R2NameL[3])?></td><td><?php echo($R2NameL[4])?></td></tr>
					<tr><td><?php echo($R2TimeL[0])?></td><td><?php echo($R2TimeL[1])?></td><td><?php echo($R2TimeL[2])?></td><td><?php echo($R2TimeL[3])?></td><td><?php echo($R2TimeL[4])?></td></tr>
				</table>
				
				<br><br>

			</div>
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../js/index.js"></script>
<?php include("../generator/footer.php");?>

<script>

	function showStats(){
		document.getElementById("start").style.display = "none";
		document.getElementById("statistic-games").style.display = "block";
	}
	function showStart(){
		document.getElementById("statistic-games").style.display = "none";
		document.getElementById("start").style.display = "block";
	}
	function Speech(){
		window.open("../files/pdf/PoleceniaGlosowe.pdf");
	}
	function Eye(){
		window.open("../files/pdf/KonfiguracjaWzroku.pdf");
	}
</script>

</body>
</html>