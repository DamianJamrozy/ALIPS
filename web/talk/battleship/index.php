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
		<div class="formShips">
			<center>
				Dołącz do gry:
			<form method="POST" onsubmit="return validateShips()" action="set_ship.php">
				<input name="keyToHostGame" type="text" placeholder="Klucz rozgrywki" class="outShip" pattern="[^&#39;&#34;&#783;&#757;&#96;&#x60;=()/><\][\\\x22,;:|]+"  onclick=validateForm() required ><br>
				<input type="submit" class="inShip" name="joinGame" value="Dołącz"><br>
			</form>
			<br><br>
				Utwórz grę
				<br>
				
			<form method="POST" action="set_ship.php">
				<input type="submit" name="setGame" value="Utwórz grę" class="inShip">
			</form>
				<!-- <input type="submit" value="Wygeneruj nowy kod" class="inShip"> -->
			</center>
		</div>
</body>

<script>
// Second Validate Form 
    function validateForm(){
        let v_key = document.getElementsByName("keyToHostGame")[0].value;
        let t1 = '"';
        let t2 = "'";
		let t3 = "`";

        if(v_key.includes(t1) || v_key.includes(t2) || v_key.includes(t3)){
            console.log("Walidacja 2 wykryła błąd! Pole zawiera niedozwolone znaki!"); 
            return false;
        }else{
            console.log("Walidacja przeszła poprawnie"); 
            return true;
        }
    }
</script>

</html>