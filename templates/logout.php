<?php include("../generator/setings.php");?>
<script>
    setTimeout(function () {
        window.location.href= '../Index.php'; // the redirect goes here

    },4000); // 3 seconds
</script>
<!DOCTYPE html>
<html>
<head>
	<?php include("../generator/head-info.php");?>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/typewriting.css">
</head>

<body>

<?php include("../generator/header.php");?>
<div id="parallax">
<div class="container" id="main-content">

<div id="typedtext">
    Wylogowano
</div>

<div class="me">
	<img src="../files/img/me/Me_Person1.png" width="250vw" height="250vh">
</div>

</div>
</div>

<script src="../js/index.js"></script>
<?php include("../generator/footer.php");?>
</body>

<?php
    Session_destroy();
?>
</html>