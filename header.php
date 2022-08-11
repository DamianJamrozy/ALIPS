<div class="navi">
<div class="top-nav-left">
	<h1>ALIPS</h1>
</div>
<div class="top-nav-right">
  <div class="menu-icon">
    <span class="line-1"></span>
    <span class="line-2"></span>
    <span class="line-3"></span>
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
	height:10em;
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

.menu-icon {
  display: grid;
  place-items: center;
  height: 55px;
  width: 100%;
  cursor: pointer;

}

.line-1, .line-2, .line-3 {
  width: 42px;
  justify-self: end;
  width: 50px;
    height: 3px;
    background: #00D8EA;
    display: block;
    transition: all 0.3s ease-in-out;
}
</style>