if (annyang) {
    // choose language
annyang.setLanguage('pl-PL');
  // Let's define a command.
  const commands = {
    // Navigation
    'Strona home': sHome,
    'Strona gry': sGry,
    'Strona Wideoczat': sVideochat,
    'Strona Video Chat': sVideochat,
    'Strona Moje Konto': sMyAccount,
    'Strona Moi Znajomi': sMyFriends,
    'Strona Konfiguracja': sConfig,
    'Strona Wyloguj się': sLogout,
    
    // Help command
    'A lips': sAlips,
    'Elips': sAlips,
    'Alice': sAlips,
    'OLX': sAlips,
  };

  function sHome() { location.href = "dashboard.php"; } //alert('Home');

  function sGry() { location.href = "games.php"; }

  function sVideochat() { location.href = "videochat.php"; }

  function sMyAccount() { location.href = "account.php"; }

  function sMyFriends() { location.href = "friends.php"; }

  function sConfig() { location.href = "reconfig.php"; }

  function sLogout() { location.href = "logout.php"; }

  function sAlips() { alert('Tak?');}

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening.
  annyang.start();

  // Show whats happend
  annyang.addCallback('result', function(phrases) {
    document.getElementById("speak_text").innerHTML = phrases[0];
    console.log("I think the user said: ", phrases[0]);
    console.log("But then again, it could be any of the following: ", phrases);
  });
  
}

// Aktywacja na kliknięcie
/* <script src="//cdnjs.cloudflare.com/ajax/libs/SpeechKITT/1.0.0/speechkitt.min.js"></script>
<script>
// Init the browser's own Speech Recognition
var recognition = new webkitSpeechRecognition();

// Tell KITT the command to use to start listening
SpeechKITT.setStartCommand(function() {recognition.start()});

// Tell KITT the command to use to abort listening
SpeechKITT.setAbortCommand(function() {recognition.abort()});

// Register KITT's recognition start event with the browser's Speech Recognition
recognition.addEventListener('start', SpeechKITT.onStart);

// Register KITT's recognition end event with the browser's Speech Recognition
recognition.addEventListener('end', SpeechKITT.onEnd);

// Define a stylesheet for KITT to use
SpeechKITT.setStylesheet('//cdnjs.cloudflare.com/ajax/libs/SpeechKITT/1.0.0/themes/flat.css');

// Render KITT's interface
SpeechKITT.vroom(); // SpeechKITT.render() does the same thing, but isn't as much fun!
</script> */