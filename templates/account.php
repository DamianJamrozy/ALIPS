<?php include("../generator/setings.php");?>
<link rel="stylesheet" href="../style/modal.css">
<!DOCTYPE html>
<html>
<head>
	<?php include("../generator/head-info.php");?>
	<style>
		.lef{
			margin-top:4%;
			margin-left:-20%;
			width:25%;
		}
		.rig{
			margin-top:4%;
			margin-right:-20%;
			width:110%;
		}
	</style>
</head>

<body>

<?php include("../generator/header.php");?>
<div id="parallax">
<div class="container" id="main-content">

	<div class="right-side lef">

<br>
	<b>Sprawdź inne moje projekty:</b> <br><br><br><br>
		<hr>
		Github
		<hr>
		Drive
		<hr>
		Youtube
		<hr>
		<br><br><br><br><br><br><br><br>
	<b>Kontakt:</b> <br><br><br><br>
		<hr>
		Email
		<hr>
		Facebook
		<hr>

	</div>
	<div class="right-side rig" id="rig_vid">
		
		<br><h4> MOJE KONTO </h4><br>
		<div id="change_pass_div">
			<hr>
			<large>Zmień hasło: </large>
			<hr>
			<br>
			Chcesz zmienić hasło? Pamiętaj, że po wprowadzeniu zmian, Twoje stare hasło przestanie działać, a co za tym idzie nie będziesz posiadać możliwości zalogowania się na nie w przypadku utraty nowego hasła. 
			
		</div>
		<br><br><br>
		<div id="change_id_div">
			<hr>
			Zmień identyfikator: <br>
			<hr>
			Twój aktualny identyfikator rozmowy to <?php echo ($_SESSION['keyHost'])?>? Pamiętaj, że po wprowadzeniu zmian, Twoje stare hasło przestanie działać, a co za tym idzie nie będziesz posiadać możliwości zalogowania się na nie w przypadku utraty nowego hasła. 
		</div>

		

	</div>
</div>




<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box" id="log-reg">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                   LOGOWANIE
                </div>
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">

                        <form onsubmit="return validateForm()" method="POST" >
                            <div class="form-group">
                                <label class="form-control-label">USERNAME/EMAIL</label>
                                <input type="text" name="login" class="form-control" pattern="[^&#39;&#34;=()/><\][\\\x22,;:|]+" required >
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password" class="form-control" pattern="[^&#39;&#34;=()/><\][\\\x22,;:|]+" i required>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" name="login-form" class="btn btn-outline-primary">ZALOGUJ SIĘ</button>
                                </div>
								<br><br><br><p> <a href="#" onclick="show_reg()">Nie posiadasz konta? Zarejestruj się!</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
  </div>
</div>








<script src="../js/index.js"></script>
<?php include("../generator/footer.php");?>
</body>
</html>