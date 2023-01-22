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
		.statistic-games{
			margin-top:2%;
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

		/* width */
		::-webkit-scrollbar {
		width: 20px;
		}

		/* Track */
		::-webkit-scrollbar-track {
		box-shadow: inset 0 0 5px grey; 
		border-radius: 10px;
		}
		
		/* Handle */
		::-webkit-scrollbar-thumb {
		background: #339aaf; 
		border-radius: 10px;
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
		background: #b30000; 
		}

		table{
			color:white;
			width:100%;
			text-align:center;
		}

	</style>
</head>

<?php
	$UserId = $_SESSION["UserName"];
	$date = date("Y-m-d");
	
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

	$last5Milionaires = "SELECT * FROM game_talk_milionaires WHERE idPlayer = '$UserId' ORDER BY money DESC LIMIT 3";
	$result_last5Milionaires = mysqli_query($dbconect, $last5Milionaires);

	if (mysqli_num_rows($result_last5Milionaires) > 0) {
		while($row = mysqli_fetch_assoc($result_last5Milionaires)) {
			$question[] = $row['question'];
			$money[] = $row['money'];
			$gameDatem[] = date("Y-m-d", strtotime($row["gameDate"]));
		}
	}

	$last5Milionaires = "SELECT * FROM game_talk_milionaires WHERE idPlayer = '$UserId' ORDER BY gameDate DESC LIMIT 3";
	$result_last5Milionaires = mysqli_query($dbconect, $last5Milionaires);

	if (mysqli_num_rows($result_last5Milionaires) > 0) {
		while($row = mysqli_fetch_assoc($result_last5Milionaires)) {
			$question1[] = $row['question'];
			$money1[] = $row['money'];
			$gameDatem1[] = date("Y-m-d", strtotime($row["gameDate"]));
		}
	}

	$last5Milionaires = "SELECT * FROM game_talk_milionaires WHERE idPlayer = '$UserId' ORDER BY gameDate DESC LIMIT 3";
	$result_last5Milionaires = mysqli_query($dbconect, $last5Milionaires);

	if (mysqli_num_rows($result_last5Milionaires) > 0) {
		while($row = mysqli_fetch_assoc($result_last5Milionaires)) {
			$question1[] = $row['question'];
			$money1[] = $row['money'];
			$gameDatem1[] = date("Y-m-d", strtotime($row["gameDate"]));
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
		
		DASHBOARD<br>
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
		<div id="dashboard">
			<br><h4> DASHBOARD </h4><br>
		</div>
		Dziękujemy za wybranie naszej aplikacji! <br><br>
		Alips jest to aplikacja, która powstała w celach zaprezentowania możliwości jakie dają języki webowe.<br>
		Użytkownik może wchodzić w interakcję z komputerem pomimo braku specjalistycznego sprzętu eye trackingowego. <br><br>
		Rozwiązanie to znacznie obniża koszt np. leczenia, bądź ćwiczeń z pacjentami, które wymagają kontaktu wzrokowego. <br>
		Oprogramowanie można rozwinąć w kierunku zwiększonej interaakcji z użytkownikami np. dodając badania sprawdzające czas reakcji lub poprawność wymowy.<br>
		
		<div class="statistic-games">
			<h4> STATYSTYKI KONTA </h4>
			<div class="left-side-statistic">
				<h5> TETRIS </h5>


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
			</div>
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../js/index.js"></script>
<?php include("../generator/footer.php");?>

<script>
	const ctx = document.getElementById('milionaires');

	new Chart(ctx, {
		type: 'bar',
		data: {
		labels: [
				<?php 
					for($i=0; $i<5;$i++){
						echo("'".$gameDate[$i]."',");
					};
				?>],
		datasets: [{
			label: 'Najwyższe wygrane',
			data: [
				<?php 
					for($i=0; $i<5;$i++){
						echo($money[$i].",");
						
					};
				?>],
			borderWidth: 1
		}]
		},
		options: {
		scales: {
			y: {
			beginAtZero: true
			}
		}
		}
	});
</script>

</body>
</html>