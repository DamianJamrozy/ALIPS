<?php
	ini_set('display_errors',0);
?>
<?php include("./../generator/setings.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("./../generator/head-info.php");?>
	<script src='https://meet.jit.si/external_api.js'></script>
	<link rel="stylesheet" type="text/css" href="../style/modal.css">
	<style>
		.lef{
			margin-top:4%;
			margin-left:-20%;
			width:85%;
		}
		.rig{
			margin-top:4%;
			margin-right:-20%
		}
		.jss14{
			visibility:hidden;
		}
		.btn-downr, .btn-downl{
			width:50%;
		}
		.btn-downr{
			right:0;
			margin-left:50%;
			position:absolute;
			bottom: 0;
		}
		.btn-downl{
			left:0;
			position:absolute;
			bottom: 0;
		}
	</style>
</head>

<body>

<?php include("./../generator/header.php");?>
<div id="parallax">
<div class="container" id="main-content">

	<div class="right-side lef">
		<iframe src="../games.php" title="Games" width="100%" height="100%"></iframe>
	</div>
	<div class="right-side rig" id="rig_vid">
		
		<br><br><br><h4> Chcesz porozmawiać? </h4><br>

		
  <div id="jitsi-container">
  </div>
  
<div id="load_place">
	<?php 
	//session_start();
		$UserId = $_SESSION["UserId"];
		date_default_timezone_set('Europe/Warsaw');
		$HostKey = "SELECT keyHost FROM videochat WHERE idUser = '$UserId'";
		$result = mysqli_query($dbconect, $HostKey);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$MyKey = $row['keyHost'];
			}
		}

		echo('<script>var roomname = "'.$MyKey.'";</script>');

		//START JOIN FORM ACTION
		if(isset($_POST['video_connection'])){
			$VideoKeyValue = $_POST['key'];
			$date = date('Y-m-d H:i:s');
			
			$CheckUsr = "SELECT * FROM videochat WHERE (keyHost = '$VideoKeyValue' OR keyHostFull = '$VideoKeyValue')";
			$result = mysqli_query($dbconect, $CheckUsr);

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$_SESSION["keyHostFull"] = $row['keyHostFull'];
					$_SESSION["keyHost"] = $row['keyHost'];
				}

				// INPUT VALUE IS FULL LINK?
				$keyHost = $_SESSION["keyHost"];
				$serv = 'https://meet.jit.si/';
				if (str_contains($VideoKeyValue, $serv)) {
					//echo 'tak';
				}else{
					//echo 'nie';
					$VideoKeyValue = $serv.$VideoKeyValue;
					}


				$UpdateLogVideo = "UPDATE videochat SET lastVideo='$date', keyActive='$keyHost' WHERE idUser = '$UserId'";
					if (mysqli_query($dbconect, $UpdateLogVideo)) {
						echo '<iframe allow="camera; microphone; fullscreen; display-capture; autoplay" src="'.$VideoKeyValue.'" style="height: 84%; width: 100%; border: 0px;"></iframe>';
					}

				
			} else {
				echo '<script>alert("Błędne dane");</script>';
			}
		}
		//END LOGIN FORM ACTION
	?>
</div>
  
  
 		 <p>
			<button id="load" class="glow-on-hover btn-down btn-downl" type="button">Dołącz do spotkania</button>
		</p>
		<p>
			<button id="start" class="glow-on-hover btn-down btn-downr" type="button">Utwórz spotkanie</button>
		</p>


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
                   KOD SPOTKANIA
                </div>
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">

                        <form onsubmit="return validateForm()" method="POST">
                            <div class="form-group">
                                <label class="form-control-label">KOD SPOTKANIA</label>
                                <input type="text" id="video_key" data-toggle="tooltip" data-placement="top" title="W tym polu należy podać jedną z dwóch form KODU SPOTKANIA. (bez spacji)" name="key" class="form-control" placeholder="https://meet.jit.si/KODSPOTKANIA" pattern="[^&#39;&#34;=()><\][\\\x22,;|]+" required >
                            </div>
                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" name="video_connection" class="btn btn-outline-primary">DOŁĄCZ DO SPOTKANIA ALIPS</button>
                                </div>
								<br><br><br><br><br><br>
								<p> <a href="#">1) Format kodu: https://meet.jit.si/KODSPOTKANIA</a></p>
								<p> <a href="#">2) Format kodu: KODSPOTKANIA</a></p>
								<p> <a href="account.php">Kod spotkania dla swojego konta można sprawdzić w zakładce moje konto.</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
  </div>
</div>



<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("load");
    

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

     // When the user clicks anywhere outside of the modal, close it
     window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

		var place = document.querySelector('#load_place');

		var button = document.querySelector('#start');
		var button2 = document.querySelector('#load');
		var container = document.querySelector('#jitsi-container');
		var api = null;

		button.addEventListener('click', () => {
			var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
			var stringLength = 30;
			button.style.display = "none";
			button2.style.display = "none";

			function pickRandom() {
				return possible[Math.floor(Math.random() * possible.length)];
			}
			
			var randomString = Array.apply(null, Array(stringLength)).map(pickRandom).join('');

			//var roomname = "Wartości z PHP id_usera";
			//var roomname = '<?php $MyKey ?>';

			var domain = "meet.jit.si";
			var options = {
				"roomName": roomname,	//randomString,
				"parentNode": container,
				"width": 600,
				"height": 600,
			};
			api = new JitsiMeetExternalAPI(domain, options);
			
			document.getElementsByClassName('jss14')[0].style.visibility = 'hidden';
			
			var end_call = document.getElementsByClassName('hangup-button')[0];
		});

		// Second Validate Form 
		function validateForm(){
		let video_value = document.querySelector('#video_key').value; 
        let t1 = '"';
        let t2 = "'";


        if(video_value.includes(t1) || video_value.includes(t2)){
            console.log("Walidacja 2 wykryła błąd! Klucz zawiera niedozwolone znaki!"); 
            return false;
        }else{
            console.log("Walidacja 2 przeszła poprawnie"); 
            return ture;
        }
    }


    window.addEventListener('beforeunload', (event) => {
        event.returnValue = `Are you sure you want to leave?`;
    });
</script>

<script src="../js/index.js"></script>
<?php include("../generator/footer.php");?>

</body>
</html>