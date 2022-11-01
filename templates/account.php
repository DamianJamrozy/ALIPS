<?php include("../generator/setings.php");?>

<!DOCTYPE html>
<html>
<head>
	<?php include("../generator/head-info.php");?>
	<link rel="stylesheet" href="../style/style_backside.css">
</head>

<body>

<?php include("../generator/header.php");?>
<div id="parallax">
<div class="container" id="main-content">

	<div class="right-side lef">
		<br>
		<b>Sprawdź inne moje projekty:</b> <br><br><br><br>
		<a href="https://github.com/DamianJamrozy">	
			<div class="nav_link">
				<hr>
				<ul class="ulsmicon">
				<li class="lismicon"><a href=""><i class="fa fa-github" aria-hidden="true"></i></a></li></ul>
				Github
				<hr>
			</div>
		</a>
		<a href="https://drive.google.com/drive/u/0/folders/1iO_GKEyLnbx0YPPabxCht1a2is-1CmQK">
			<div class="nav_link">
				<hr>
				Google Drive
				<hr>
			</div>
		</a>
		<a href="https://youtube.com/@djamrozy">
			<div class="nav_link_last">
				<hr>
				Youtube
				<hr>
			</div>
		</a>
		<b>Kontakt:</b> <br><br>
			<div class="nav_link">
				<hr>
				Email
				<hr>
			</div>
			<div class="nav_link">
				<hr>
				Facebook
				<hr>
			</div>
	</div>
	<div class="right-side rig" id="rig_vid">
		
		<br><h4> MOJE KONTO </h4><br>
		<div class="changeone" id="changeone">
			<hr>
			Zmień hasło 
			<hr>
		</div>
			<div id="changefirst">
				<div class="left_section">
					<br>Chcesz zmienić hasło? <br>Pamiętaj, że po wprowadzeniu zmian, Twoje stare hasło przestanie działać. <br>
					<img src="../files/img/primary/cyber1.png" style='width:150px; margin-top:50px;'>
				</div>
				<div class="right_section">
					<form onsubmit="return validateForm()" method="POST" >
						<div class="form-group">
							<label class="form-control-label">STARE HASŁO</label>
							<input type="password" name="password" class="form-control" pattern="[^&#39;&#34;=()/><\][\\\x22,;:|]+" i required>
						</div>
						<div class="form-group">
							<label class="form-control-label">NOWE HASŁO</label>
							<input type="password" name="password" class="form-control" pattern="[^&#39;&#34;=()/><\][\\\x22,;:|]+" i required>
						</div>

						<div class="form-group">
							<label class="form-control-label">POWTÓRZ NOWE HASŁO</label>
							<input type="password" name="password" class="form-control" pattern="[^&#39;&#34;=()/><\][\\\x22,;:|]+" i required>
						</div>

						<div class="col-lg-12 loginbttm">
							<div class="col-lg-6 login-btm login-text">
								<!-- Error Message -->
							</div>
							<div class="col-lg-6 login-btm login-button">
								<button type="submit" name="login-form" class="btn btn-outline-primary">ZMIEŃ HASŁO</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		<!-- </div> -->
	<br>
		<div class="changetwo" id="changetwo">
			<hr>
			Zmień identyfikator
			<hr>
		</div>
			<div id="changesec">
				<div class="left_section">
					

					<br>
					Identyfikator służy do łączenia się z videoczatem wybranego użytkownika. <br> Może występować w dwóch formach. Skróconej oraz pełnej.<br>
					<img src="../files/img/primary/cyber2.png" style='width:150px; margin-top:30px;'>
				</div>
				<div class="right_section">
					Twój aktualny identyfikator rozmowy to: <br>
					Klucz: <?php echo ($_SESSION['keyHost'])?> <br>
					Link: https://meet.jit.si/<?php echo ($_SESSION['keyHost'])?><br><br><br>

					<form onsubmit="return validateForm()" method="POST" >
						<div class="form-group">
							<label class="form-control-label">NOWY IDENTYFIKATOR</label>
							<input type="text" name="login" class="form-control" pattern="[^&#39;&#34;=()/><\][\\\x22,;:|]+" required >
						</div>
							<div class="col-lg-12 loginbttm">
							<div class="col-lg-6 login-btm login-text">
								<!-- Error Message -->
							</div>
							<div class="col-lg-6 login-btm login-button">
								<button type="submit" name="login-form" class="btn btn-outline-primary">ZMIEŃ IDENTYFIKATOR</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		

	</div>
</div>


<script>
	var btn1 = document.getElementById("changeone");
	var btn2 = document.getElementById("changetwo");


	var inside1 = document.getElementById("changefirst");
	var inside2 = document.getElementById("changesec");

	btn1.onclick = function() {
		if(inside1.style.display == "block"){
			inside1.style.display = "none";
		}else{
			inside1.style.display = "block";
			inside2.style.display = "none";
		}
    }
	btn2.onclick = function() {
		if(inside2.style.display == "block"){
			inside2.style.display = "none";
		}else{
			inside2.style.display = "block";
			inside1.style.display = "none";
		}
    }
</script>


<script src="../js/index.js"></script>
<?php include("../generator/footer.php");?>
</body>
</html>