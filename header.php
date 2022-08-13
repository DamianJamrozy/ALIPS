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
</div>



<!--
<div class="navigation">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Games") {?>active<?php }?>" href="games.php">Gry</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Videochat") {?>active<?php }?>" href="videochat.php">Videochat</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "account") {?>active<?php }?>" href="account.php">Moje konto</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "friends") {?>active<?php }?>" href="friends.php">Moi znajomi</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "config") {?>active<?php }?>" href="config.php">Konfiguracja</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "login") {?>active<?php }?>" href="login.php">Zaloguj się</a>
	  </li>
	</ul>
</div>
-->

<style>
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
	align: right;
	top:0;
	align-items: center;
	justify-content: right;
	width:80%;
	float:right;
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
	width: 42px;
	justify-self: end;
	width: 50px;
	height: 3px;
	background: #00D8EA;
	display: block;
	transition: width 5s ease-in-out;
}

.line-1-off, .line-2-off, .line-3-off {
	width: 42px;
	justify-self: end;
	width: 100%;
	height: 3px;
	background: #00D8EA;
	display: block;
	transition: all 0.15s ease-in-out;
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
		}
		else{
			document.getElementById("hamburger-line1").classList.add('line-1-on');
			document.getElementById("hamburger-line1").classList.remove('line-1-off');

			document.getElementById("hamburger-line2").classList.add('line-2-on');
			document.getElementById("hamburger-line2").classList.remove('line-2-off');

			document.getElementById("hamburger-line3").classList.add('line-3-on');
			document.getElementById("hamburger-line3").classList.remove('line-3-off');

			document.getElementById("hambuger").classList.add('menu-icon-on');
			document.getElementById("hambuger").classList.remove('menu-icon-off');
		}
	}

</script>