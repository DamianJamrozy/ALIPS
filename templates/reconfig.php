<?php include("./../generator/setings.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("./../generator/head-info.php");?>
	<link rel="stylesheet" type="text/css" href="../style/e-s-visual.css">
</head>

<body>

<?php include("./../generator/header.php");?>
<div id="parallax">
	
		<div id="con"><br><br>
			Do poprawnego działania aplikacji ALIPS wymagana jest konfiguracja.<br>
			<br>
				<button class="glow-on-hover btn-down" type="button" onclick="start_config()">Konfiguruj</button>
			<br>
			<br><br><br><br><br>
			Konfiguracja się nie powiodła?<br>
			<br>
				<button class="glow-on-hover btn-down" type="button" onclick="clear_config()">Przywróć ustawienia domyślne</button>
			<br>
		</div>	

</div>


<script src="../js/index.js"></script>
<script src="../generator/eye_tracking/webgazer.js"></script>

<?php include("../generator/footer.php");?>
</body>
</html>

<script>
	//Reconfig
	function clear_config(){
		window.saveDataAcrossSessions = false;
		localStorage.clear();
		sessionStorage.clear();
		window.location.reload();
	}

	//Config
	function start_config(){
	

		document.getElementById('parallax').innerHTML = `<div class="central-container-side">
		<div class="grid">1a</div>	<div class="grid">2a</div>	<div class="grid">3a</div>	<div class="grid">4a</div>	<div class="grid">5a</div>
		<div class="grid">1b</div>	<div class="grid">2b</div>	<div class="grid">3b</div>	<div class="grid">4b</div>	<div class="grid">5b</div>
		<div class="grid">1c</div>	<div class="grid">2c</div>	<div class="grid">3c</div>	<div class="grid">4c</div>	<div class="grid">5c</div>
		<div class="grid">1d</div>	<div class="grid">2d</div>	<div class="grid">3d</div>	<div class="grid">4d</div>	<div class="grid">5d</div>
		<div class="grid">1e</div>	<div class="grid">2e</div>	<div class="grid">3e</div>	<div class="grid">4e</div>	<div class="grid">5e</div>
		<div class="grid">1f</div>	<div class="grid">2f</div>	<div class="grid">3f</div>	<div class="grid">4f</div>	<div class="grid">5f</div>
		<div class="grid">1g</div>	<div class="grid">2g</div>	<div class="grid">3g</div>	<div class="grid">4g</div>	<div class="grid">5g</div>
		<div class="grid">1h</div>	<div class="grid">2h</div>	<div class="grid">3h</div>	<div class="grid">4h</div>	<div class="grid">5h</div>
		<div class="grid">1i</div>	<div class="grid">2i</div>	<div class="grid">3i</div>	<div class="grid">4i</div>	<div class="grid">5i</div>
		<div class="grid">1j</div>	<div class="grid">2j</div>	<div class="grid">3j</div>	<div class="grid">4j</div>	<div class="grid">5j</div>
	</div>`;

		// Create new script element
		const script2 = document.createElement('script');
		script2.src = '../generator/eye_tracking/script.js';

		// Append to the `head` element
		document.head.appendChild(script2);

	document.getElementById("navi").style.display = "none";

	}
</script>



<!-- <div class="central-container-side">
		<div class="grid">1a</div>	<div class="grid">2a</div>	<div class="grid">3a</div>	<div class="grid">4a</div>	<div class="grid">5a</div>
		<div class="grid">1b</div>	<div class="grid">2b</div>	<div class="grid">3b</div>	<div class="grid">4b</div>	<div class="grid">5b</div>
		<div class="grid">1c</div>	<div class="grid">2c</div>	<div class="grid">3c</div>	<div class="grid">4c</div>	<div class="grid">5c</div>
		<div class="grid">1d</div>	<div class="grid">2d</div>	<div class="grid">3d</div>	<div class="grid">4d</div>	<div class="grid">5d</div>
		<div class="grid">1e</div>	<div class="grid">2e</div>	<div class="grid">3e</div>	<div class="grid">4e</div>	<div class="grid">5e</div>
		<div class="grid">1f</div>	<div class="grid">2f</div>	<div class="grid">3f</div>	<div class="grid">4f</div>	<div class="grid">5f</div>
		<div class="grid">1g</div>	<div class="grid">2g</div>	<div class="grid">3g</div>	<div class="grid">4g</div>	<div class="grid">5g</div>
		<div class="grid">1h</div>	<div class="grid">2h</div>	<div class="grid">3h</div>	<div class="grid">4h</div>	<div class="grid">5h</div>
		<div class="grid">1i</div>	<div class="grid">2i</div>	<div class="grid">3i</div>	<div class="grid">4i</div>	<div class="grid">5i</div>
		<div class="grid">1j</div>	<div class="grid">2j</div>	<div class="grid">3j</div>	<div class="grid">4j</div>	<div class="grid">5j</div>
	</div> -->