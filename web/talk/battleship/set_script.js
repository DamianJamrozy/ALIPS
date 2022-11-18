/* START SHIP CONFIGURATION */
var tabShip = [
	[0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0]
];
var i = 9;
function reply_click(idShip)
{
	var setShipX = idShip[0];
	var setShipY = idShip[1];

	if(i != 0 && tabShip[setShipY][setShipX] == 0){
		tabShip[setShipY][setShipX] = 1;
		i--;
		document.getElementById("messageArea").innerHTML = "Okręt gotowy!";
		document.getElementById(idShip).setAttribute("class","hit");
		document.getElementById("messageArea").innerHTML = "Pozostało: " + i;
		if(i == 0){
			document.getElementById("btnhid").value = tabShip;
		}
		
	}
	else if (tabShip[setShipY][setShipX] == 1){
		document.getElementById("messageArea").innerHTML = "Kapitanie, nasz okręt już stacjonuje w wybranym miejscu.";
	}
	else{
		document.getElementById("messageArea").innerHTML = "Wszystkie nasze okręty są gotowe!";
	}
}
/* END SHIP CONFIGURATION */


/* START RESET SHIP LOCATION */
function resetShip(){
	
	for (let k = 0; k != 7; k++){
		for(let j = 0; j != 7; j++){
			if(tabShip[j][k] == 1){
				let z = k+''+j;
				document.getElementById(z).removeAttribute("class","hit");
			}
		}
	}
	
	tabShip = [
		[0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0]
	];

	i = 9;

	document.getElementById("messageArea").innerHTML = "Pozostało: " + i;
}
/* END RESET SHIP LOCATION */

/* START GAME BATTLESHIP */
function validateShips(){
	if(i == 0){
		return true;
	}else{
		console.log("Brak 9 statków"); 
		return false;
	}
}
/* END GAME BATTLESHIP VALIDATE */





/* cell.setAttribute("class","hit");
cell.setAttribute("class","miss"); */