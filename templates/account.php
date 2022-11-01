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
		<a href="https://github.com/DamianJamrozy/HTML-CSS-JS---Mini-Game-Milionaires-" title="Mini gra w milionerów napisana w większości w javascripcie">	
			<div class="nav_link">
				<hr>
				Milionerzy (Gra - JavaScript)
				<hr>
			</div>
		</a>
		<a href="https://github.com/DamianJamrozy/Settler-The-Genesis" title="Gra komputerowa tworzona we współpracy z przyjacielem ze studiów">
			<div class="nav_link">
				<hr>
				Settler The Genesis (Gra PC - C#)
				<hr>
			</div>
		</a>
		<a href="https://github.com/DamianJamrozy/HTML-CSS-JS-PHP---Mini-University-Shop-Project-PRZEGRYWY" title="Projekt sklepu internetowego wykonany w html, css, js oraz php">
			<div class="nav_link_last">
				<hr>
				Prze-gry.wy (Projekt Sklepu - PHP)
				<hr>
			</div>
		</a>
		<a href="https://github.com/DamianJamrozy/Graphic" title="Projekty graficzne w technologii 2D">
			<div class="nav_link_last">
				<hr>
				Projekty graficzne
				<hr>
			</div>
		</a>

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
			<div class="simcon" id="simcon">
				<ul class="ulsmicon">
					<li class="lismicon"><a href="https://youtube.com/@djamrozy" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					<li class="lismicon"><a href="https://github.com/DamianJamrozy" title="Github"><i class="fa fa-github" aria-hidden="true"></i></a></li>
					<li class="lismicon"><a href="https://www.instagram.com/skrrr_dj/" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li class="lismicon"><a href="https://www.facebook.com/damian.jamrozy.xD" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li class="lismicon"><a href="https://drive.google.com/drive/u/0/folders/1iO_GKEyLnbx0YPPabxCht1a2is-1CmQK" title="Google Drive"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>

		

	</div>
</div>


<script>
	var btn1 = document.getElementById("changeone");
	var btn2 = document.getElementById("changetwo");


	var inside1 = document.getElementById("changefirst");
	var inside2 = document.getElementById("changesec");

	var simcon = document.getElementById("simcon");
	

	btn1.onclick = function() {
		if(inside1.style.display == "block"){
			inside1.style.display = "none";
			simcon.style.display = "block";
		}else{
			inside1.style.display = "block";
			inside2.style.display = "none";
			simcon.style.display = "none";
		}
    }
	btn2.onclick = function() {
		if(inside2.style.display == "block"){
			inside2.style.display = "none";
			simcon.style.display = "block";
		}else{
			inside2.style.display = "block";
			inside1.style.display = "none";
			simcon.style.display = "none";
		}
    }
</script>


<script src="../js/index.js"></script>
<?php include("../generator/footer.php");?>
</body>
</html>