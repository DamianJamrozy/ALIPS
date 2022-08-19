<div class="navi">
	<div class="top-nav-left">
		<a href="Index.php"><h1>ALIPS</h1></a>
	</div>
	<div class="top-nav-right">
	<div class="menu-icon-on line-on" id="hambuger" onclick="hamburger_on()">
		<span class="line-1-on" id="hamburger-line1"></span>
		<span class="line-2-on" id="hamburger-line2"></span>
		<span class="line-3-on" id="hamburger-line3"></span>
	</div>
	</div>

	<div class="navigation-off" id="nav_tree">
		<ul class="nav nav-pills">
		<li class="nav-item">
			<a class="nav-link <?php if ($CURRENT_PAGE == "Home") {?>active" href="#">Home</a> <?php } else {?>" href="../index.php">Home</a> <?php } ?> 
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if ($CURRENT_PAGE == "Games") {?>active" href="#">Gry</a> <?php } else {?>" href="templates/games.php">Gry</a> <?php } ?> 
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if ($CURRENT_PAGE == "Videochat") {?>active" href="#">Videochat</a> <?php } else {?>" href="templates/videochat.php">Videochat</a> <?php } ?> 
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if ($CURRENT_PAGE == "Account") {?>active" href="#">Moje konto</a> <?php } else {?>" href="templates/account.php">Moje konto</a> <?php } ?> 
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if ($CURRENT_PAGE == "Friends") {?>active" href="#">Moi znajomi</a> <?php } else {?>" href="templates/friends.php">Moi znajomi</a> <?php } ?> 
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if ($CURRENT_PAGE == "Reconfig") {?>active" href="#">Konfiguracja</a> <?php } else {?>" href="templates/reconfig.php">Konfiguracja</a> <?php } ?> 
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if ($CURRENT_PAGE == "Login") {?>active" href="#">Zaloguj się</a> <?php } else {?>" href="templates/login.php">Zaloguj się</a> <?php } ?> 
		</li>
		</ul>
	</div>
	

</div>


<style>
.nav {
    --bs-nav-link-hover-color: white;
}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link{
	color: black;
    background-color: #00D8EA;
}
.nav-pills .nav-link.active:hover, .nav-pills .show>.nav-link{
	color: white;
    background-color: #00D8EA;
}

.navigation-off{
	z-index: 999;
	position:fixed;
	top:0;
	padding-top:1em;
	right:0;
	align:right;
	float:right;
	display:flex;
	font-size:1em;
	font-weight:bold;
	transition: visibility 2s ease-in-out;
	transition: margin-right 3s ease-in-out;
	margin-right:-40%;
	visibility:hidden;
}

.navigation-on{
	z-index: 999;
	position:fixed;
	top:0;
	padding-top:1em;
	right:0;
	align:right;
	float:right;
	display:flex;
	font-size:1em;
	font-weight:bold;
	transition: visibility 1s ease-in-out;
	transition: margin-right 3s ease-in-out;
	
}

.navi{
	padding-top:1em;
	width:100%;
	height:5em;
}

.top-nav-left{
	padding-left: 20px;
    color:#00D8EA;
    font-family: Mongolian Baiti;
	width:20%;
	float:left;
}

.top-nav-right {
	z-index: 100;
	display: flex;
	position:relative;
	right:0;
	top:0;
	align-items: center;
	justify-content: right;
	width:80%;
	padding-right: 20px;
}

.menu-icon-on {
  display: grid;
  place-items: center;
  height: 55px;
  width: 100%;
  cursor: pointer;
}

.menu-icon-off {
  display: grid;
  place-items: center;
  height: 55px;
  width: 100%;
  cursor: pointer;
}

.line-1-on, .line-2-on, .line-3-on {
	justify-self: end;
	width: 50px;
	height: 3px;
	/* background: #339aaf; */
	background: rgb(51,154,175);
	background: linear-gradient(90deg, rgba(51,154,175,1) 35%, rgba(4,57,151,1) 100%);
	display: block;
	transition: width 2s ease-in-out;
}

.line-1-off, .line-2-off, .line-3-off {
	justify-self: end;
	width: 100%;
	height: 3px;
	/* background: #339aaf; */
	background: rgb(51,154,175);
	background: linear-gradient(90deg, rgba(51,154,175,1) 35%, rgba(4,57,151,1) 100%);
	display: block;
	transition: width 1.5s ease-in-out;
}

.line-1-off_done, .line-2-off_done, .line-3-off_done {
	justify-self: baseline;
	width: 50px;
	height: 3px;
	/* background: #339aaf; */
	background: rgb(51,154,175);
	background: linear-gradient(90deg, rgba(51,154,175,1) 35%, rgba(4,57,151,1) 100%);
	display: block;
	transition: width 1.5s ease-in-out;
}

.line-2-off_done{
	width: 40px;
}

.line-1-off_back, .line-2-off_back, .line-3-off_back {
	justify-self: baseline;
	width: 100%;
	height: 3px;
	/* background-image: linear-gradient(to right top, #339aaf, #043997);
	background: #00D8EA; */
	background: rgb(51,154,175);
	background: linear-gradient(90deg, rgba(51,154,175,1) 35%, rgba(4,57,151,1) 100%);
	display: block;
	transition: width 1.5s ease-in-out;
}
</style>





<script>
	function hamburger_on(){

		if(document.getElementById("hambuger").classList.contains('menu-icon-on')){
			document.getElementById("hamburger-line1").classList.add('line-1-off');
			document.getElementById("hamburger-line1").classList.remove('line-1-on');

			document.getElementById("hamburger-line2").classList.add('line-2-off');
			document.getElementById("hamburger-line2").classList.remove('line-2-on');

			document.getElementById("hamburger-line3").classList.add('line-3-off');
			document.getElementById("hamburger-line3").classList.remove('line-3-on');

			document.getElementById("hambuger").classList.add('menu-icon-off');
			document.getElementById("hambuger").classList.remove('menu-icon-on');

			var vi = 1;
			let view_h = setTimeout(view_header, 1450);
		}
		else{
			document.getElementById("hamburger-line1").classList.add('line-1-off_back');
			document.getElementById("hamburger-line1").classList.remove('line-1-off_done');

			document.getElementById("hamburger-line2").classList.add('line-2-off_back');
			document.getElementById("hamburger-line2").classList.remove('line-2-off_done');

			document.getElementById("hamburger-line3").classList.add('line-3-off_back');
			document.getElementById("hamburger-line3").classList.remove('line-3-off_done');

			document.getElementById("nav_tree").classList.remove('navigation-on');
			document.getElementById("nav_tree").classList.add('navigation-off');

			var vi = 0;
			let view_h = setTimeout(view_header, 1450);
		}


		function view_header(){
			if(vi==1){
				document.getElementById("hamburger-line1").classList.remove('line-1-off');
				document.getElementById("hamburger-line1").classList.add('line-1-off_done');

				document.getElementById("hamburger-line2").classList.remove('line-2-off');
				document.getElementById("hamburger-line2").classList.add('line-2-off_done');

				document.getElementById("hamburger-line3").classList.remove('line-3-off');
				document.getElementById("hamburger-line3").classList.add('line-3-off_done');

				document.getElementById("nav_tree").classList.add('navigation-on');
				document.getElementById("nav_tree").classList.remove('navigation-off');
			}
			else{
				document.getElementById("hamburger-line1").classList.add('line-1-on');
				document.getElementById("hamburger-line1").classList.remove('line-1-off_back');

				document.getElementById("hamburger-line2").classList.add('line-2-on');
				document.getElementById("hamburger-line2").classList.remove('line-2-off_back');

				document.getElementById("hamburger-line3").classList.add('line-3-on');
				document.getElementById("hamburger-line3").classList.remove('line-3-off_back');

				document.getElementById("hambuger").classList.add('menu-icon-on');
				document.getElementById("hambuger").classList.remove('menu-icon-off');

			}
		}
		
	}

</script>