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








var model = {
	boardSize: 7,
	numShips: 3,
	shipLength: 3,
	shipsSunk: 0,

	ships:[
		{ locations: [0, 0, 0], hits: ["", "", ""] },
		{ locations: [0, 0, 0], hits: ["", "", ""] },
		{ locations: [0, 0, 0], hits: ["", "", ""] }
	],

	fire: function(guess) {
		for (var i = 0; i < this.numShips; i++) {
			var ship = this.ships[i];
			var index = ship.locations.indexOf(guess); // przesukuje tablice w celu znalezienia guess i zwraca indeks
		  if (ship.hits[index] === "hit") {
				view.displayMessage("Ten okręt został już trafiony.");
				return true;
			} else if (index >= 0) {
					ship.hits[index] = "hit!";
					view.displayHit(guess);
					view.displayMessage("Trafiony!");
					if (this.isSunk(ship)) {
						view.displayMessage("Trafiony, zatopiony!");
						this.shipsSunk++;
					}
					return true;
				}
		}
		view.displayMiss(guess);
		view.displayMessage("Pudło!");
		return false;
	},

	isSunk: function(ship) {
		for (i = 0; i < this.shipLength; i++) {
			if (ship.hits[i] !== "hit!") {
				return false;
			}
		}
		return true;
	},

	generateShipLocations: function() {
		var locations;
		for (var i = 0; i < this.numShips; i++) {
			do {
				locations = this.generateShip();
			} while (this.collision(locations));
				this.ships[i].locations = locations;
		}
				console.log("Tablica okrętów: ");
		console.log(this.ships);
	},

	generateShip: function() {
		var direction = Math.floor(Math.random() * 2);
		var row, col;

		if (direction === 1) {  //rozmieszczamy w poziomie
			row = Math.floor(Math.random() * this.boardSize);
			col = Math.floor(Math.random() * (this.boardSize - this.shipLength));
		} else { //rozmieszczmay w pionie
			row = Math.floor(Math.random() * (this.boardSize - this.shipLength));
			col = Math.floor(Math.random() * this.boardSize);
		}

		var newShipLocations = [];
		for (var i = 0; i < this.shipLength; i++) {
			if (direction === 1) {
				newShipLocations.push(row + "" + (col + i));
			} else {
				newShipLocations.push((row + i) + "" + col);
			}
		}
		return newShipLocations;
	},

	collision: function(locations) {
		for (var i = 0; i < this.numShips; i++) {
			var ship = this.ships[i];
			for (var j = 0; j < locations.length; j++) {
				if (ship.locations.indexOf(locations[j]) >= 0) {
					return true;
				}
			}
		}
		return false;
	}

};

var view = {
	displayMessage: function(msg) {
		var messageArea = document.getElementById("messageArea");
		messageArea.innerHTML = msg;
	},

	displayHit: function(location) {
		var cell = document.getElementById(location);
		cell.setAttribute("class","hit");

	},

	displayMiss: function(location) {
		var cell = document.getElementById(location);
		cell.setAttribute("class","miss");
	}
};

var controller = {
	guesses: 0,
	processGuess: function(location) {
		if (location) {
			this.guesses++;
			var hit = model.fire(location);
			if (hit && model.shipsSunk === model.numShips) {
				view.displayMessage("You sunk all of my battleships in " + this.guesses + " tries.");
				var end = document.getElementById("guessInput").disabled = true;
			}
		}
	}
}

window.onload = init;

function init() {

	var guessClick = document.getElementsByTagName("td");
		for (var i = 0; i < guessClick.length; i++) {
			guessClick[i].onclick = answer;
		}

	model.generateShipLocations();
	view.displayMessage("Hello, let's play! There are 3 ships, each 3 cells long");
}

function answer(eventObj) {
	var shot = eventObj.target;
	var location = shot.id;
	controller.processGuess(location);
}




