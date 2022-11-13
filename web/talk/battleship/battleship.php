<!-- It's a simple battleship game. This is the second version (my own) of game I wrote during learning with book "Head First - JavaScript programming" by Freeman, Robson. I changed by myself the way of playing. Instead of writing the location, you have to click on chosen cell.
The graphic design is mine. I styled this game with my own ideas and my own HTML and CSS code. -->

<!DOCTYPE html>
<html lang="pl-PL">
<?php include("../../../generator/setings.php");?>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Battleship</title>
</head>
<body>
	<div id="board">	
		<div id="messageArea">Rozstaw 9 okrętów.</div>
		<table>
			<tr>
				<th class="numbers"></th>
				<th class="numbers">0</th>
				<th class="numbers">1</th>
				<th class="numbers">2</th>
				<th class="numbers">3</th>
				<th class="numbers">4</th>
				<th class="numbers">5</th>
				<th class="numbers">6</th>
			</tr>

			<tr>
				<th class="letters">A</th>
				<td><div id="00" onClick="reply_click(this.id)"></div></td>
				<td><div id="01" onClick="reply_click(this.id)"></div></td>
				<td><div id="02" onClick="reply_click(this.id)"></div></td>
				<td><div id="03" onClick="reply_click(this.id)"></div></td>
				<td><div id="04" onClick="reply_click(this.id)"></div></td>
				<td><div id="05" onClick="reply_click(this.id)"></div></td>
				<td><div id="06" onClick="reply_click(this.id)"></div></td>
			</tr>
				<tr>
				<th class="letters">B</th>
				<td><div id="10" onClick="reply_click(this.id)"></div></td>
				<td><div id="11" onClick="reply_click(this.id)"></div></td>
				<td><div id="12" onClick="reply_click(this.id)"></div></td>
				<td><div id="13" onClick="reply_click(this.id)"></div></td>
				<td><div id="14" onClick="reply_click(this.id)"></div></td>
				<td><div id="15" onClick="reply_click(this.id)"></div></td>
				<td><div id="16" onClick="reply_click(this.id)"></div></td>
			<tr>
				<th class="letters">C</th>
				<td><div id="20" onClick="reply_click(this.id)"></div></td>
				<td><div id="21" onClick="reply_click(this.id)"></div></td>
				<td><div id="22" onClick="reply_click(this.id)"></div></td>
				<td><div id="23" onClick="reply_click(this.id)"></div></td>
				<td><div id="24" onClick="reply_click(this.id)"></div></td>
				<td><div id="25" onClick="reply_click(this.id)"></div></td>
				<td><div id="26" onClick="reply_click(this.id)"></div></td>
			</tr>
				</tr>
				<tr>
				<th class="letters">D</th>
				<td><div id="30" onClick="reply_click(this.id)"></div></td>
				<td><div id="31" onClick="reply_click(this.id)"></div></td>
				<td><div id="32" onClick="reply_click(this.id)"></div></td>
				<td><div id="33" onClick="reply_click(this.id)"></div></td>
				<td><div id="34" onClick="reply_click(this.id)"></div></td>
				<td><div id="35" onClick="reply_click(this.id)"></div></td>
				<td><div id="36" onClick="reply_click(this.id)"></div></td>
			</tr>
			<tr>
				<th class="letters">E</td>
				<td><div id="40" onClick="reply_click(this.id)"></div></td>
				<td><div id="41" onClick="reply_click(this.id)"></div></td>
				<td><div id="42" onClick="reply_click(this.id)"></div></td>
				<td><div id="43" onClick="reply_click(this.id)"></div></td>
				<td><div id="44" onClick="reply_click(this.id)"></div></td>
				<td><div id="45" onClick="reply_click(this.id)"></div></td>
				<td><div id="46" onClick="reply_click(this.id)"></div></td>
			</tr>
			<tr>
				<th class="letters">F</td>
				<td><div id="50" onClick="reply_click(this.id)"></div></td>
				<td><div id="51" onClick="reply_click(this.id)"></div></td>
				<td><div id="52" onClick="reply_click(this.id)"></div></td>
				<td><div id="53" onClick="reply_click(this.id)"></div></td>
				<td><div id="54" onClick="reply_click(this.id)"></div></td>
				<td><div id="55" onClick="reply_click(this.id)"></div></td>
				<td><div id="56" onClick="reply_click(this.id)"></div></td>
			</tr>
			<tr>
				<th class="letters">G</td>
				<td><div id="60" onClick="reply_click(this.id)"></div></td>
				<td><div id="61" onClick="reply_click(this.id)"></div></td>
				<td><div id="62" onClick="reply_click(this.id)"></div></td>
				<td><div id="63" onClick="reply_click(this.id)"></div></td>
				<td><div id="64" onClick="reply_click(this.id)"></div></td>
				<td><div id="65" onClick="reply_click(this.id)"></div></td>
				<td><div id="66" onClick="reply_click(this.id)"></div></td>
			</tr>
		</table>
		<center>
			<form method="POST" >
				<input class="inShip" id="startGame" type="submit" value="Rozpocznij"> 
			</form>
			<input id="resetShip" type="button" value="Resetuj ustawienie" onclick=resetShip()> 
			
		<br><div>Powiedziałeś</div><div id="speak_text"></div>
	</div></center>
	<script src="../../../js/voiceController.js"></script>
	<script src="script.js"></script>
</body>
</html>