if (annyang) {
    // choose language
annyang.setLanguage('pl-PL');
  // Let's define a command.
  const commands2 = {
    // Shoot board
    'a zero.': a0,
    'a 0.': a0,
    'a jeden.': a1,
    'a 1.': a1,
    'a dwa.': a2,
    'a 2.': a2,
    'a trzy.': a3,
    'a 3.': a3,
	'a cztery.': a4,
    'a 4.': a4,
    'a pięć.': a5,
    'a 5.': a5,
    'a sześć.': a6,
    'a 6.': a6,


    

  };

   // START Navigation functions
  function a0() { location.href = "dashboard.php"; } //alert('Home');

  function a1() { location.href = "games.php"; }

  function a2() { location.href = "videochat.php"; }

  function a3() { location.href = "account.php"; }

  function a4() { location.href = "friends.php"; }

  function a5() { location.href = "reconfig.php"; }

  function a6() { location.href = "logout.php"; }

  function a7() { alert('Tak?');}
  // END Navigation functions



 

  // Add our commands to annyang
  annyang.addCommands(commands2);

  // Start listening.
  annyang.start();

  // Show whats happend
  annyang.addCallback('result', function(phrases) {
    phrases[0] = phrases[0].toLowerCase();

    // Write text from voice
    document.getElementById("speak_text").innerHTML = phrases[0];
  });
}



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