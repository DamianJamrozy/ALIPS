<html>
<head>
<title>Milionerzy</title>
<link rel="Shortcut icon" href="img/icon.ico" />

<meta http-equiv="content-type" content="text/html"; charset="UTF-8"/> 
<meta name="keywords" content="milionerzy, web designer, Damian Jamroży">
<meta name="description" content="Milionerzy">
<link rel="stylesheet" href="style/style.css" type="text/css" />
<?php include("../../../generator/setings.php");?>
</head>


<?php
	if(isset($_POST['cash'])){
		$playerId = $_SESSION["UserId"];
		$countCash = $_POST['countCash'];
		$dateGame = date("Y-m-d");
		$tab = [0,500,1000,2000,5000,10000,20000,40000,75000,125000,250000,500000,1000000];
		$i = 0;
		$lvl = 0;
		while($countCash!=$tab[$i]){
			$i++;
			if($countCash == $tab[$i]){
				$lvl = $i;
			}
		}
		if($lvl > 0){
			$setNewGameLobby ="INSERT INTO game_talk_milionaires (id,idPlayer,question,money,date) VALUES ('','$playerId','$lvl','$countCash','$dateGame')";
            if (mysqli_query($dbconect, $setNewGameLobby)) {}	
		}
	}
?>

<body>
<div id="header">
	<div id="napis"> <img src="img/napis.png" width="100%"></div>

	<div id="fif_fif_on" style="display: block;">	</div>
	<div id="phone_on"  style="display: block;">	</div>
	<div id="people_on" style="display: block;">	</div>

</div>

<div id="content_left">



	<div id="content_question">
		<br><br> Gratulacje! Wygrałeś/aś <br> <?php echo($countCash); ?> złotych.<br>
	</div>
	<div id="sure" name="sure"></div>

	<div id="content_options">
		<a href="index.php"><button id="play_btn" name="backPlay">POWRÓT</button></a>
	</div>

</div>

<div id="content_right">
	<div id="nr"><span style="color:Cornsilk;">12. </span><br>11. <br> 10. <br> 9. <br> 8. <br><span style="color:Cornsilk;"> 7.</span> <br> 6. <br> 5. <br> 4. <br> 3. <br><span style="color:Cornsilk;"> 2. </span><br> 1.	</div>
	<div id="score"> <button id="btn_1" class="coins"></button><br><br><button id="btn_2" class="coins"></button><br><br><button id="btn_3" class="coins"></button><br><br><button id="btn_4" class="coins"></button><br><br><button id="btn_5" class="coins"></button><br><br><button id="btn_6" class="coins"></button><br><br><button id="btn_7" class="coins"></button><br><br><button id="btn_8" class="coins"></button><br><br><button id="btn_9" class="coins"></button><br><br><button id="btn_10" class="coins"></button><br><br><button id="btn_11" class="coins"></button><br><br><button id="btn_12" class="coins"></button><br></div>
	<div id="money"><span style="color:Cornsilk;">1 000 000 zł </span><br> 500 000 zł <br> 250 000 zł <br> 125 000 zł <br> 75 000 zł <br><span style="color:Cornsilk;"> 40 000 zł </span><br> 20 000 zł <br> 10 000 zł <br> 5 000 zł <br> 2 000 zł <br><span style="color:Cornsilk;"> 1 000 zł </span><br> 500 zł	</div>
	<center>
		<div class="say">
			<br><div>Powiedziałeś</div><div id="speak_text"></div>
		</div>
	</center>

</div>



<div id="foter"><br><br>
	<audio autoplay="autoplay" controls id="myaudio">   
   		<source src="Sound/Intro.mp3">  
	</audio> 
<div>

</body>
<script>
var audio = document.getElementById("myaudio");
audio.volume = 0.4;
</script>

<script>
	function end(){return false}
</script>

<script src="../../../js/voiceController.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</html>