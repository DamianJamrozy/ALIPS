
<title><?php print $PAGE_TITLE;?> | ALIPS</title>
<meta name="author" content="Damian Jamroży">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" type="text/css" href="style/style.css"> -->

<?php
error_reporting(0);
ini_set('display_errors', 0);
?>

<?php if ($CURRENT_PAGE == "Home") { ?>
	<meta name="description" content="ALIPS to aplikacja utworzona przez Damiana Jamroży w 2022 roku. Wykorzystuje ona potencjał drzemiący w językach weebowych, pozwalając tym samym na kontrolę aplikacji poprzez eye tracking oraz speech recognition.">
	<meta name="keywords" content="Damian Jamroży, Eye tracking, speech recognition, HTML, CSS, JavaScript">
	<link rel="icon" type="image/x-icon" href="files/img/primary/icon.ico">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	
<?php } 
	else if ($CURRENT_PAGE == "ERROR") { 
	?>
		<meta name="description" content="ALIPS to aplikacja utworzona przez Damiana Jamroży w 2022 roku. Wykorzystuje ona potencjał drzemiący w językach weebowych, pozwalając tym samym na kontrolę aplikacji poprzez eye tracking oraz speech recognition.">
		<meta name="keywords" content="Damian Jamroży, Eye tracking, speech recognition, HTML, CSS, JavaScript">
		<link rel="icon" type="image/x-icon" href="files/img/primary/icon.ico">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	
	<?php }
 //elseif ($CURRENT_PAGE == "Games") { 
	else {?>
	<meta name="description" content="ALIPS to aplikacja utworzona przez Damiana Jamroży w 2022 roku. Wykorzystuje ona potencjał drzemiący w językach weebowych, pozwalając tym samym na kontrolę aplikacji poprzez eye tracking oraz speech recognition.">
	<meta name="keywords" content="Damian Jamroży, Eye tracking, speech recognition, HTML, CSS, JavaScript">
	<link rel="icon" type="image/x-icon" href="../files/img/primary/icon.ico">
	<link rel="stylesheet" type="text/css" href="../style/style.css">

<?php } ?>

<!-- REDIRECT IF USER IS NOT LOGGED -->
<?php if ($CURRENT_PAGE != "Home" && $CURRENT_PAGE != "Start" && $CURRENT_PAGE != "ERROR") {
	if(!isset($_SESSION['UserName'])){ ?>
		<script>
			window.location.href= '../Index.php'; // the redirect goes here 
		</script>
	<?php }
	} else{
		if(isset($_SESSION['UserName'])){ ?>
			<script>
				window.location.href= 'templates/dashboard.php'; // the redirect goes here 
			</script>
		<?php }
	}
?>