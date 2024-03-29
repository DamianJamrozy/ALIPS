<?php include("../generator/setings.php");?>

<style>
/* START LOGIN BOX */
.login-box {
    margin-top: 75px;
    height: auto;
    text-align: center;
}

.login-key {
    height: 100px;
    font-size: 80px;
    line-height: 100px;
    background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.login-title {
    margin-top: 15px;
    text-align: center;
    font-size: 30px;
    letter-spacing: 2px;
    margin-top: 15px;
    font-weight: bold;
    color: #ECF0F5;
}

.login-form {
    margin-top: 25px;
    text-align: left;
}

input[type=text] {
    background-color: transparent;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 0px;
    color: #ECF0F5;
}

input[type=email] {
    background-color: transparent;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 0px;
    color: #ECF0F5;
}

input[type=password] {
    background-color: transparent;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    padding-left: 0px;
    margin-bottom: 20px;
    color: #ECF0F5;
}

.form-group {
    margin-bottom: 40px;
    outline: 0px;
}

.form-control:focus {
    border-color: inherit;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-bottom: 2px solid #0DB8DE;
    outline: 0;
    background-color: #1A2226;
    color: #ECF0F5;
}

input:focus {
    outline: none;
    box-shadow: 0 0 0;
}

label {
    margin-bottom: 0px;
}

.form-control-label {
    font-size: 10px;
    color: #6C6C6C;
    font-weight: bold;
    letter-spacing: 1px;
}

.btn-outline-primary {
    border-color: #0DB8DE;
    color: #0DB8DE;
    border-radius: 0px;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.btn-outline-primary:hover {
    background-color: #0DB8DE;
    right: 0px;
}

.login-btm {
    float: left;
}

.login-button {
    padding-right: 0px;
    text-align: right;
    margin-bottom: 25px;
}

.login-text {
    text-align: left;
    padding-left: 0px;
    color: #A2A4A4;
}

.loginbttm {
    padding: 0px;
}

/* The Modal (background) */
.modal {
	display: none; /* Hidden by default */
	position: fixed; /* Stay in place */
	z-index: 999999999; /* Sit on top */
	padding-top: 100px; /* Location of the box */
	left: 0;
	top: 0;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow: auto; /* Enable scroll if needed */
	background-color: rgb(0,0,0); /* Fallback color */
	background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
  }
  
  /* Modal Content */
  .modal-content {
	background-color: rgba(0, 0, 0, 0.877);
	margin: auto;
	padding: 20px;
	border: 1px solid #0DB8DE;
	width: 80%;
  }
  
  /* The Close Button */
  .close {
	color: #aaaaaa;
	float: right;
	font-size: 28px;
	font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
	color: #000;
	text-decoration: none;
	cursor: pointer;
  }

  /* END LOGIN BOX */
</style>

<!-- Trigger/Open The Modal -->
<!-- <button id="myBtn">Open Modal</button> -->

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
                                <input type="text" name="login" class="form-control" pattern="[^&#39;&#34;&#783;&#757;&#96;&#x60;=()/><\][\\\x22,;:|]+" required >
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password" class="form-control" pattern="[^&#39;&#34;&#783;&#757;&#96;&#x60;=()/><\][\\\x22,;:|]+" i required>
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



<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    

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

    function show_reg(){
        document.getElementById('log-reg').innerHTML = ' <div class="col-lg-12 login-key">                    <i class="fa fa-key" aria-hidden="true"></i>                </div>                <div class="col-lg-12 login-title">                   REJESTRACJA               </div>                <div class="col-lg-12 login-form">                    <div class="col-lg-12 login-form">                        <form onsubmit="return validateForm()" method="POST" >                           <div class="form-group">                                <label class="form-control-label">EMAIL</label>                                <input type="email" name="login" class="form-control" pattern="[^&#39;&#34;=()/><\][\\\x22,;:|]+" required>                            </div>                            <div class="form-group">                                <label class="form-control-label">PASSWORD</label>                                <input type="password" name="password" class="form-control" pattern="[^&#39;&#34;=()/><\][\\\x22,;:|]+" i required>                            </div>                            <div class="col-lg-12 loginbttm">                                <div class="col-lg-6 login-btm login-text">                                    <!-- Error Message -->                                </div>                                <div class="col-lg-6 login-btm login-button">                                    <button type="submit" name="reg-form" class="btn btn-outline-primary">ZAREJESTRUJ SIĘ</button>                                </div>								<br><br><br><p> <a href="#" onclick="show_login()">Posiadasz konto? Zaloguj się!</a></p>                            </div>                        </form>                    </div>                </div>                <div class="col-lg-3 col-md-2"></div>'
    }

    function show_login(){
        document.getElementById('log-reg').innerHTML = ' <div class="col-lg-12 login-key">                    <i class="fa fa-key" aria-hidden="true"></i>                </div>                <div class="col-lg-12 login-title">                   LOGOWANIE                </div>                <div class="col-lg-12 login-form">                    <div class="col-lg-12 login-form">                        <form onsubmit="return validateForm()" method="POST" >                            <div class="form-group">                                <label class="form-control-label">USERNAME/EMAIL</label>                                <input type="text" name="login" class="form-control" pattern="[^&#39;&#34;=()/><\][\\\x22,;:|]+" required>                            </div>                            <div class="form-group">                                <label class="form-control-label">PASSWORD</label>                                <input type="password" name="password" class="form-control" pattern="[^&#39;&#34;=()/><\][\\\x22,;:|]+" i required>                            </div>                            <div class="col-lg-12 loginbttm">                                <div class="col-lg-6 login-btm login-text">                                    <!-- Error Message -->                                </div>                                <div class="col-lg-6 login-btm login-button">                                    <button type="submit" name="login-form" class="btn btn-outline-primary">ZALOGUJ SIĘ</button>                                </div>								<br><br><br><p> <a href="#" onclick="show_reg()">Nie posiadasz konta? Zarejestruj się!</a></p>                            </div>                        </form>                    </div>                </div>                <div class="col-lg-3 col-md-2"></div>'
    }

    // Second Validate Form 
    function validateForm(){
        let v_login = document.getElementsByName("login")[0].value;
        let v_password = document.getElementsByName("password")[0].value;
        let t1 = '"';
        let t2 = "'";
        let t3 = "`";


        if(v_login.includes(t1) || v_login.includes(t2) || v_login.includes(t3) || v_password.includes(t1) || v_password.includes(t2) || v_password.includes(t3)){
            console.log("Walidacja 2 wykryła błąd! Login lub hasło zawiera niedozwolone znaki!"); 
            return false;
        }else{
            console.log("Walidacja 2 przeszła poprawnie"); 
            return true;
        }
    }

    
</script>

<?php 
//session_start();
date_default_timezone_set('Europe/Warsaw');

    //START LOGIN FORM ACTION
    if(isset($_POST['login-form'])){
        $UserName = $_POST['login'];
        $Password = md5($_POST['password']);
        $date = date('Y-m-d H:i:s');

        $findme1   = '"';
        $findme2   = "'";
        $findme3   = '`';
        $pos1 = strpos($UserName, $findme1);
        $pos2 = strpos($UserName, $findme2);
        $pos3 = strpos($UserName, $findme3);

        // Note our use of ===.  Simply == would not work as expected
        // because the position of 'a' was the 0th (first) character.
        if ($pos1 === false && $pos2 === false && $pos3 === false) {
            $CheckUsr = "SELECT * FROM user WHERE ((login = '$UserName' OR email = '$UserName') AND password = '$Password') ";
        $result = mysqli_query($dbconect, $CheckUsr);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION["UserName"] = $row['login'];
                $_SESSION["UserId"] = $row['id'];
               }
               $UserId =  $_SESSION["UserId"];

            $UpdateLogDate = "UPDATE user SET last_login_date='$date', idActive='1' WHERE (login = '$UserName' OR email = '$UserName')";
                if (mysqli_query($dbconect, $UpdateLogDate)) {
                    $_SESSION['expiry'] = time()+20; 
                }

            $CheckModify = "SELECT * FROM videochat WHERE idUser = '$UserId'";
            $result2 = mysqli_query($dbconect, $CheckModify);

            if (mysqli_num_rows($result2) > 0) {
                while($row = mysqli_fetch_assoc($result2)) {
                    $modify = $row['keyModified'];
                    $keyHost = $row['keyHost'];
                }
               

                if($modify == 0){
                    $keyHostFullSet = 'https://meet.jit.si/';
                    
                    $v = 0;

                    // VERIFY IS KEY USED
                    while($v==0){
                        $ran = rand(100000,999999);
                        
                        $keyVerify =  $ran.$UserId;
                        $_SESSION['keyHost'] = $keyVerify;
    
                        $CheckExist = "SELECT * FROM videochat WHERE keyHost = '$keyVerify'";
                        $result3 = mysqli_query($dbconect, $CheckExist);
                        if (mysqli_num_rows($result3) < 1) {
                            // KEY IS FREE - GO TO NEXT STEP
                            $v = 1;
                        } 
                        // IF KEY IS USED - TRY AGAIN
                    }

                    $UpdateLogVideo = "UPDATE videochat SET keyHost='$ran$UserId', keyHostFull='$keyHostFullSet$ran$UserId' WHERE idUser = '$UserId'";
                        if (mysqli_query($dbconect, $UpdateLogVideo)) {
                            echo '<script>alert("Poprawne dane logowania"); window.location.href= "../templates/dashboard.php";</script>';
                        }
                }else{
                    $_SESSION['keyHost'] = $keyHost;
                    echo '<script>alert("Poprawne dane logowania"); window.location.href= "../templates/dashboard.php";</script>';
                }
            }
                

        } else {
            echo '<script>alert("Błędne dane logowania");</script>';
        }
        } else {
            echo "<script>console.log('Serwer zablokował nieautoryzowaną próbę wszczepienia kodu.'); </script>";
        }

        
    }
    //END LOGIN FORM ACTION

    //START REGISTRATION FORM ACTION
    if(isset($_POST['reg-form'])){
        $UserName = $_POST['login'];
        $Password = md5($_POST['password']);
        $date = date('Y-m-d H:i:s');

        $findme1   = '"';
        $findme2   = "'";
        $findme3   = '`';
        $pos1 = strpos($UserName, $findme1);
        $pos2 = strpos($UserName, $findme2);
        $pos3 = strpos($UserName, $findme3);

        // Note our use of ===.  Simply == would not work as expected
        // because the position of 'a' was the 0th (first) character.
        if ($pos1 === false && $pos2 === false && $pos3 === false) {
            
        $CheckUsr = "SELECT * FROM user WHERE login = '$UserName' OR email = '$UserName'";
        $result = mysqli_query($dbconect, $CheckUsr);

        if (mysqli_num_rows($result) > 0) {
            //while($row = mysqli_fetch_assoc($result)) {
                echo '<script>alert("Konto o takim adresie email już istnieje!");</script>';
        }
        else{
            $AddUsr ="INSERT INTO user (login,email,password) VALUES ('','$UserName','$Password')";
            if (mysqli_query($dbconect, $AddUsr)) {
                

                

                $CheckUsr = "SELECT * FROM user WHERE email = '$UserName'";
                $result = mysqli_query($dbconect, $CheckUsr);
                if (mysqli_num_rows($result) > 0) {
                   while($row = mysqli_fetch_assoc($result)) {
                        $id = $row["id"];
                       }
                } else {
                    echo "Error: " . $AddUsr . "<br>" . mysqli_error($dbconect);
                }
                $keyHostFullSet = 'https://meet.jit.si/';

                $v = 0;

                // VERIFY IS KEY USED
                while($v==0){
                    $ran = rand(100000,999999);
                    
                    $keyVerify =  $ran.$UserId;
                    $_SESSION['keyHost'] = $keyVerify;

                    $CheckExist = "SELECT * FROM videochat WHERE keyHost = '$keyVerify'";
                    $result3 = mysqli_query($dbconect, $CheckExist);
                    if (mysqli_num_rows($result3) < 1) {
                        // KEY IS FREE - GO TO NEXT STEP
                        $v = 1;
                    } 
                    // IF KEY IS USED - TRY AGAIN
                }

            
                $AddVideo ="INSERT INTO videochat (id,idUser,keyHost,keyHostFull,keyActive,lastVideo,keyModified) VALUES ('','$id','$ran$UserId','$keyHostFullSet$ran$UserId', 'NULL', 'NULL', '0')";
                if (mysqli_query($dbconect, $AddVideo)) {}else{echo '<script>alert("Błąd aktualizacji tabeli video.");</script>';}

                $AddUsr2 = "UPDATE user SET login='$id', reg_date='$date' WHERE id='$id'";
                if (mysqli_query($dbconect, $AddUsr2)) {
                    echo '<script>alert("Konto zostało założone.");</script>';
                    //$_SESSION["UserName"] = $id;
                  } else {
                    echo "Error: " . $AddUsr2 . "<br>" . mysqli_error($dbconect);
                  }
              } else {
                echo "Error: " . $AddUsr . "<br>" . mysqli_error($dbconect);
              }
        }
        } else {
            echo "<script>console.log('Serwer zablokował nieautoryzowaną próbę wszczepienia kodu.'); </script>";
        }

    }   
    //END REGISTRATION FORM ACTION
?>