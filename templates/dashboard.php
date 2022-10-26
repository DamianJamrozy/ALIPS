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
		
		Znajomi:<br>
		<hr>

		Contact 1
		<hr>
		Contact 2
		<hr>

		<br><br>
		Zaproszenia: <br>
		<hr>

	</div>
	<div class="right-side rig" id="rig_vid">
		
		<br><h4> DASHBOARD </h4><br>
		<p>
			<button id="start" class="glow-on-hover btn-down" type="button">Zaczynajmy</button>
		</p>


	</div>

</div>
</div>


<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.1/annyang.min.js"></script>
<script>
if (annyang) {
  // Let's define a command.
  const commands = {
    'hello': () => { alert('Hello world!'); }
  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening.
  annyang.start();
}
</script>




<script src="../js/index.js"></script>
<?php include("../generator/footer.php");?>
</body>
</html>