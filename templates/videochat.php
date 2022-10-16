<?php include("./../generator/setings.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("./../generator/head-info.php");?>
	<script src='https://meet.jit.si/external_api.js'></script>
	<style>
		.lef{
			margin-top:4%;
			margin-left:-20%;
			width:85%;
		}
		.rig{
			margin-top:4%;
			margin-right:-20%
		}
		.jss14{
			visibility:hidden;
		}
	</style>
</head>

<body>

<?php include("./../generator/header.php");?>
<div id="parallax">
<div class="container" id="main-content">

	<div class="right-side lef">
		<iframe src="../Index.php" title="Games" width="100%" height="100%"></iframe>
	</div>
	<div class="right-side rig" id="rig_vid">
		
		<br><br><br><h4> Chcesz porozmawiać? </h4><br>
  <div id="jitsi-container">
  </div>
  
  

		<p>
			<button id="start" class="glow-on-hover btn-down" type="button">Zaczynajmy</button>
		</p>


	</div>

</div>
</div>

<script>
		var button = document.querySelector('#start');
		var container = document.querySelector('#jitsi-container');
		var api = null;

		button.addEventListener('click', () => {
			var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
			var stringLength = 30;
			button.style.display = "none";
			

			function pickRandom() {
				return possible[Math.floor(Math.random() * possible.length)];
			}
			
			var randomString = Array.apply(null, Array(stringLength)).map(pickRandom).join('');

			var roomname = "Wartości z PHP id_usera";

			var domain = "meet.jit.si";
			var options = {
				"roomName": roomname,	//randomString,
				"parentNode": container,
				"width": 600,
				"height": 600,
			};
			api = new JitsiMeetExternalAPI(domain, options);
			
			document.getElementsByClassName('jss14')[0].style.visibility = 'hidden';
			
			var end_call = document.getElementsByClassName('hangup-button')[0];
		});

		

	</script>

<script>
    window.addEventListener('beforeunload', (event) => {
        event.returnValue = `Are you sure you want to leave?`;
    });
</script>

<script src="../js/index.js"></script>
<?php include("../generator/footer.php");?>
</body>
</html>