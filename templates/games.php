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

<body>

<?php include("../generator/header.php");?>
<div id="parallax">
<div class="container" id="main-content">

	<div class="right-side lef">

		Instrukcja obsługi
		<hr>

	</div>
	<div class="right-side rig" id="rig_vid">
		
		<br><h4> DJ-Games </h4>

		<iframe src="../web/gamesHub.php" title="Games" width="100%" height="90%"></iframe>
		<!-- <iframe src="../web/eye/tetris-game/index.php" title="Games" width="100%" height="100%"></iframe> -->


	</div>

</div>
</div>

<script>
    window.addEventListener('beforeunload', (event) => {
        event.returnValue = `Are you sure you want to leave?`;
    });
</script>

<script src="../js/index.js"></script>
<?php include("../generator/footer.php");?>
</body>
</html>