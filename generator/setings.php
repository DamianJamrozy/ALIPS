<?php

//START GLOBAL SESSION WORK AND VARIABLE
session_start();

//DB CONNCECTION
$host = "localhost";
$user = "root";
$password = "";
$database = "alips";

$dbconect = mysqli_connect($host,$user,$password,$database) or die ("Nie można połączyć z bazą danych! Połączenie przerwane.");

$filename = $_SERVER["SCRIPT_NAME"];
$without_extension = pathinfo($filename, PATHINFO_FILENAME);

//PHP VERSION
echo '<script> var phpversion="'.phpversion().'"</script>';
?>

<script>
	//CHECK IF PHP VERSION IS OK
	const color = {};
	if(phpversion<"8.1.6"){
		color.red = "\x1b[31m";
		console.log(color[key] + 'PHP version is lower than 8.0.0. Recomended verion is 8.1.6.');
	}else if(phpversion>"8.1.6"){
		color.red = "\x1b[31m";
		console.log(color[key] + 'PHP version is higher than 8.0.0. Recomended verion is 8.1.6.');
	}else{
		color.green = "\x1b[32m";
		for (var key in color) {
            console.log(color[key] + 'Your PHP version is ok! v.8.1.6');
         }
	}
</script>

<?php
//THEME
switch ($_SERVER["SCRIPT_NAME"]) {
		case "/websites/ALIPS/templates/games.php":
			$CURRENT_PAGE = "Games"; 
			$PAGE_TITLE = "Games";
			break;
		case "/websites/ALIPS/templates/videochat.php":
			$CURRENT_PAGE = "Videochat"; 
			$PAGE_TITLE = "Videochat";
			break;
		case "/websites/ALIPS/templates/account.php":
			$CURRENT_PAGE = "Account"; 
			$PAGE_TITLE = "Account";
			break;
		case "/websites/ALIPS/templates/friends.php":
			$CURRENT_PAGE = "Friends"; 
			$PAGE_TITLE = "Friends";
			break;
		case "/websites/ALIPS/templates/reconfig.php":
			$CURRENT_PAGE = "Reconfig"; 
			$PAGE_TITLE = "Reconfig";
			break;
		case "/websites/ALIPS/templates/login.php":
			$CURRENT_PAGE = "Login"; 
			$PAGE_TITLE = "Login";
			break;
		case "/websites/ALIPS/templates/logout.php":
			$CURRENT_PAGE = "Logout"; 
			$PAGE_TITLE = "Logout";
			break;
		case "/websites/ALIPS/web/starting-page.php":
			$CURRENT_PAGE = "Start"; 
			$PAGE_TITLE = "Start";
			break;
		case "/websites/ALIPS/templates/dashboard.php":
			$CURRENT_PAGE = "Dashboard"; 
			$PAGE_TITLE = "Dashboard";
			break;
		default:
			$CURRENT_PAGE = "Home"; 
			$PAGE_TITLE = "Home";
			break;
	}
?>