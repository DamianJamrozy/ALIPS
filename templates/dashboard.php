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
			background-color:red;
		}
		.center-side-statistic{
			background-color:green;
		}
		.right-side-statistic{
			background-color:blue;
		}

	</style>
</head>

<?php
	// $UserId = $_SESSION["UserName"];
	// $date = date("Y-m-d");

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
			<div class="left-side-statistic"></div>
			<div class="center-side-statistic"></div>
			<div class="right-side-statistic"></div>
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