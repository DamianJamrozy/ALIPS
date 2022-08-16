<?php
//DB CONNCECTION
$host = "localhost";
$user = "root";
$password = "";
$database = "alips";

//PHP VERSION
echo '<script> var phpversion="'.phpversion().'"</script>';

//THEME
switch ($_SERVER["SCRIPT_NAME"]) {
		case "/php-template/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "/php-template/contact.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contact Us";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Welcome to my homepage!";
	}
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