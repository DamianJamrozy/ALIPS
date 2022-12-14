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
	</style>
</head>

<?php
	$UserId = $_SESSION["UserName"];

	$CheckModify = "SELECT * FROM game_talk_milionaires WHERE idPlayer = '$UserId' ORDER BY date DESC LIMIT 5;";
	$result2 = mysqli_query($dbconect, $CheckModify);

	if (mysqli_num_rows($result2) > 0) {
		while($row = mysqli_fetch_assoc($result2)) {
			$modify = $row['keyModified'];
			$keyHost = $row['keyHost'];
		}
	}
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
	<div class="right-side rig" id="rig_vid">
		<div id="dashboard">
			<br><h4> DASHBOARD </h4><br>
		</div>

		<div style="width:25%;">
			<canvas id="milionaires"></canvas>
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
		labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
		datasets: [{
			label: '# of Votes',
			data: [12, 19, 3, 5, 2, 3],
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