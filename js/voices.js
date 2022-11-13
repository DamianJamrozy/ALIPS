if (annyang) {
    // choose language
annyang.setLanguage('pl-PL');
  // Let's define a command.
  const commands = {
    // Navigation
    'strona home.': sHome,
    'stronach um.': sHome,
    'strona gry.': sGry,
    'strona wideoczat.': sVideochat,
    'strona video chat.': sVideochat,
    'strona moje konto.': sMyAccount,
    'strona moi znajomi.': sMyFriends,
    'strona konfiguracja.': sConfig,
    'strona wyloguj się.': sLogout,
    
    // Help command
    'a lips.': sAlips,
    'elips.': sAlips,
    'alice.': sAlips,
    'OLX.': sAlips
  };

   // START Navigation functions
  function sHome() { location.href = "dashboard.php"; } //alert('Home');

  function sGry() { location.href = "games.php"; }

  function sVideochat() { location.href = "videochat.php"; }

  function sMyAccount() { location.href = "account.php"; }

  function sMyFriends() { location.href = "friends.php"; }

  function sConfig() { location.href = "reconfig.php"; }

  function sLogout() { location.href = "logout.php"; }

  function sAlips() { alert('Tak?');}
  // END Navigation functions



 

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening.
  annyang.start();

  // Show whats happend
  annyang.addCallback('result', function(phrases) {
    phrases[0] = phrases[0].toLowerCase();

    // Write text from voice
    document.getElementById("speak_text").innerHTML = phrases[0];

    // Voice - Fraze test
    console.log("Wydaje mi się że powiedziałeś: ", phrases[0]);
    console.log("Jednakże możliwe że to było również: ", phrases);


    // ROZPOZNAJE SŁOWA ZAWARTE W CAŁYCH ZDANIACH... NIESTETY DRASTYCZNIE ZMNIEJSZA WYDAJNOŚĆ STRONY
/*      // Add table include text and function to start - needed for while()
  const voice_tab = [
    ["strona home", "strona gry", "strona wideo czat", "strona video chat", "strona moje konto", "strona moi znajomi", "strona konfiguracja", "strona wyloguj się"],
    ["sHome", "sGry", "sVideochat", "sVideochat", "sMyAccount", "sMyFriends", "sConfig", "sLogout"]
  ]

  var voice_tab_len = voice_tab[0].length;

    for (let i=0; voice_tab_len>i; i++){
      console.log("jestem ", i);
       // Start functions when string cointains exact word
      if(phrases[0].includes(voice_tab[0][i])){
        console.log("Rozpoznano polecenie: ", voice_tab[0][i]);
        console.log("Funkcja: ", voice_tab[1][i]);
        window[voice_tab[1][i]]();
      };
    } */


  });

  




  
}



//window["functionName"](arguments);

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