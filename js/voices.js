if (annyang) {
    // choose language
annyang.setLanguage('pl-PL');
  // Let's define a command.
  const commands = {
    // Navigation
    'Strona home': sHome,
    'Strona gry': sGry,
    'Strona Wideoczat': sVideochat,
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
    console.log("I think the user said: ", phrases[0]);
    console.log("But then again, it could be any of the following: ", phrases);
  });
  
}