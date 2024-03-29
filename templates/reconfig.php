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


<?php include("../generator/footer.php");?>
</body>
</html>

<script>
	//Reconfig
	function clear_config(){
		//window.saveDataAcrossSessions = false;
		localStorage.clear();
		sessionStorage.clear();
		window.location.reload();
	}

	//Config
	function start_config(){
		// ZMIENNE i, k, c SŁUŻĄ DO KONFIGURATORA
		let i = 0; // DEFAULT ITERATOR
		let k = 0; // ID ITERATOR
		let c = 'con'; // ID START NAME

		document.getElementById('parallax').innerHTML = `<div class="central-container-side">
			<div class="grid conactive" id='con1'></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid" id='con2'></div>
			<div class="grid" id='con6'></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid" id='con7'></div>
			<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>
			<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>
			<div class="grid"></div>	<div class="grid"></div>	<div class="grid" id='con5'></div>	<div class="grid"></div>	<div class="grid"></div>
			<div class="grid"></div>	<div class="grid"></div>	<div class="grid" id='con10'></div>	<div class="grid"></div>	<div class="grid"></div>
			<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>
			<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>
			<div class="grid" id='con3'></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid" id='con4'></div>
			<div class="grid" id='con8'></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid" id='con9'></div>

			<div class="grid" id='con11'></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid" id='con12'></div>
			<div class="grid" id='con16'></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid" id='con17'></div>
			<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>
			<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>
			<div class="grid"></div>	<div class="grid"></div>	<div class="grid" id='con15'></div>	<div class="grid"></div>	<div class="grid"></div>
			<div class="grid"></div>	<div class="grid"></div>	<div class="grid" id='con20'></div>	<div class="grid"></div>	<div class="grid"></div>
			<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>
			<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>
			<div class="grid" id='con13'></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid" id='con14'></div>
			<div class="grid" id='con18'></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid"></div>	<div class="grid" id='con19'></div>
		</div>`;

		// Create new script element
		const script2 = document.createElement('script');
		script2.src = '../generator/eye_tracking/script.js';

		// Append to the `head` element
		document.head.appendChild(script2);

		document.getElementById("navi").style.display = "none";

		document.addEventListener('click',(e) =>
		{
			// Get element class(es)
			let elementClass = e.target.className;
		
			// If element has class(es)
			if (elementClass == 'grid conactive' || elementClass == 'grid conactivate2') {
				i++;
				if(i==2) {
					k++;
					let x = document.getElementById(c+k);
					x.classList.remove("conactive");
					x.classList.add("conactivate2");
				}
				else if(i==3){
					let x = document.getElementById(c+k);
					x.classList.remove("conactivate2");
					x.classList.add("condeactivate");
					
					//	End config
					if(k==20){
						window.setTimeout(end_config, 3000);
					}else{
						let y = document.getElementById(c+(k+1));
						y.classList.add("conactive");
						// Reset config
						i=0;
					}	
				}
				//console.log(elementClass);
			}
			// If element has no classes
			else {
				console.log('WRONG ELEMENT WAS CLICKED! CONFIG MAY BE USELESS...');
			}
		});
		function end_config (){
			alert(" Gratulacje! \n Konfiguracja przebiegła pomyślnie.");
			location.href = 'dashboard.php';
		}
	}
</script>

<script src="../generator/eye_tracking/webgazer.js"></script>

<!-- <div class="central-container-side">
		<div class="grid conactive" id='con1'>1a</div>	<div class="grid">2a</div>	<div class="grid">3a</div>	<div class="grid">4a</div>	<div class="grid" id='con2'>5a</div>
			<div class="grid" id='con6'>1b</div>	<div class="grid">2b</div>	<div class="grid">3b</div>	<div class="grid">4b</div>	<div class="grid" id='con7'>5b</div>
			<div class="grid">1c</div>	<div class="grid">2c</div>	<div class="grid">3c</div>	<div class="grid">4c</div>	<div class="grid">5c</div>
			<div class="grid">1d</div>	<div class="grid">2d</div>	<div class="grid">3d</div>	<div class="grid">4d</div>	<div class="grid">5d</div>
			<div class="grid">1e</div>	<div class="grid">2e</div>	<div class="grid" id='con5'>3e</div>	<div class="grid">4e</div>	<div class="grid">5e</div>
			<div class="grid">1f</div>	<div class="grid">2f</div>	<div class="grid" id='con10'>3f</div>	<div class="grid">4f</div>	<div class="grid">5f</div>
			<div class="grid">1g</div>	<div class="grid">2g</div>	<div class="grid">3g</div>	<div class="grid">4g</div>	<div class="grid">5g</div>
			<div class="grid">1h</div>	<div class="grid">2h</div>	<div class="grid">3h</div>	<div class="grid">4h</div>	<div class="grid">5h</div>
			<div class="grid" id='con3'>1i</div>	<div class="grid">2i</div>	<div class="grid">3i</div>	<div class="grid">4i</div>	<div class="grid" id='con4'>5i</div>
			<div class="grid" id='con8'>1j</div>	<div class="grid">2j</div>	<div class="grid">3j</div>	<div class="grid">4j</div>	<div class="grid" id='con9'>5j</div>

			<div class="grid" id='con11'>1a</div>	<div class="grid">2a</div>	<div class="grid">3a</div>	<div class="grid">4a</div>	<div class="grid" id='con12'>5a</div>
			<div class="grid" id='con16'>1b</div>	<div class="grid">2b</div>	<div class="grid">3b</div>	<div class="grid">4b</div>	<div class="grid" id='con17'>5b</div>
			<div class="grid">1c</div>	<div class="grid">2c</div>	<div class="grid">3c</div>	<div class="grid">4c</div>	<div class="grid">5c</div>
			<div class="grid">1d</div>	<div class="grid">2d</div>	<div class="grid">3d</div>	<div class="grid">4d</div>	<div class="grid">5d</div>
			<div class="grid">1e</div>	<div class="grid">2e</div>	<div class="grid" id='con15'>3e</div>	<div class="grid">4e</div>	<div class="grid">5e</div>
			<div class="grid">1f</div>	<div class="grid">2f</div>	<div class="grid" id='con20'>3f</div>	<div class="grid">4f</div>	<div class="grid">5f</div>
			<div class="grid">1g</div>	<div class="grid">2g</div>	<div class="grid">3g</div>	<div class="grid">4g</div>	<div class="grid">5g</div>
			<div class="grid">1h</div>	<div class="grid">2h</div>	<div class="grid">3h</div>	<div class="grid">4h</div>	<div class="grid">5h</div>
			<div class="grid" id='con13'>1i</div>	<div class="grid">2i</div>	<div class="grid">3i</div>	<div class="grid">4i</div>	<div class="grid" id='con14'>5i</div>
			<div class="grid" id='con18'>1j</div>	<div class="grid">2j</div>	<div class="grid">3j</div>	<div class="grid">4j</div>	<div class="grid" id='con19'>5j</div>
	</div> -->