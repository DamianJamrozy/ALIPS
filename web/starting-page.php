<?php include("./../generator/setings.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("./../generator/head-info.php");?>
	<link rel="stylesheet" type="text/css" href="../style/typewriting.css">
</head>

<body>

<?php include("./../generator/header.php");?>
<div id="parallax">
<div class="container" id="main-content">

<div id="typedtext">

</div>

<div class="logbtn">
	<button id="myBtn2" class="glow-on-hover btn-down" type="button">Przejdź do logowania</button>
</div>

<div class="me">
	<img src="../files/img/me/Me_Person1.png" width="250vw" height="250vh">
</div>

</div>
</div>

<script src="../js/index.js"></script>
<script src="../js/typewriting.js"></script>
<?php include("../generator/footer.php");?>
<script>
	var btn2 = document.getElementById("myBtn2");
	btn2.onclick = function() {
    modal.style.display = "block";
    }
</script>

</body>
</html>