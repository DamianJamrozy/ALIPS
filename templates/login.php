<?php include("./../generator/setings.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("./../generator/head-info.php");?>

	<style>
#camera, #camera--view, #camera--sensor, #camera--output{
    position: fixed;
    /* height: 70%;
    width: 33%; */
    object-fit: cover;
}
#camera--view, #camera--sensor, #camera--output{
    transform: scaleX(-1);
    filter: FlipH;
}

#camera--view{
	height: 65%;
    width: 35%;
}

#camera--trigger{
    width: 200px;
    background-color: black;
    color: white;
    font-size: 16px;
    border-radius: 30px;
    border: none;
    padding: 15px 20px;
    text-align: center;
    box-shadow: 0 5px 10px 0 rgba(0,0,0,0.2);
    position: fixed;
    bottom: 30px;
    left: calc(50% - 100px);
}
.taken{
    height: 100px!important;
    width: 100px!important;
    transition: all 0.5s ease-in;
    border: solid 3px white;
    box-shadow: 0 5px 10px 0 rgba(0,0,0,0.2);
    top: 20px;
    right: 20px;
    z-index: 2;
}
		</style>
</head>

<body>

<?php include("./../generator/header.php");?>
<div id="parallax">
<div id="main-content">

	<div class="left-side-3d">
		<h5>Zaloguj się</h5>
		<form>
			<input type='text' class='btn-login' placeholder='djamrozy'>
			<br><br>
			<input type='text' class='btn-login' placeholder='********'>
		</form>
	</div>
	<div class="center-side-3d">
	<!-- Camera -->
    <main id="camera">
        <!-- Camera sensor -->
        <canvas id="camera--sensor"></canvas>
        <!-- Camera view -->
        <video id="camera--view" autoplay playsinline></video>
        <!-- Camera output -->
        <img src="//:0" alt="" id="camera--output">
        <!-- Camera trigger -->
        <button id="camera--trigger">Take a picture</button>
    </main>
	</div>
	<div class="right-side-3d">	
		<h5>Zarejestruj się</h5>
		<form>
			<input type='text' class='btn-login' placeholder='djamrozy'>
			<br><br>
			<input type='text' class='btn-login' placeholder='********'>
		</form>
	</div>
		
</div>
</div>


<script src="../js/index.js"></script>
<?php include("../generator/footer.php");?>


<script>
// Set constraints for the video stream
var constraints = { video: { facingMode: "user" }, audio: false };
// Define constants
const cameraView = document.querySelector("#camera--view"),
    cameraOutput = document.querySelector("#camera--output"),
    cameraSensor = document.querySelector("#camera--sensor"),
    cameraTrigger = document.querySelector("#camera--trigger")
// Access the device camera and stream to cameraView
function cameraStart() {
    navigator.mediaDevices
        .getUserMedia(constraints)
        .then(function(stream) {
        track = stream.getTracks()[0];
        cameraView.srcObject = stream;
    })
    .catch(function(error) {
        console.error("Oops. Something is broken.", error);
    });
}
// Take a picture when cameraTrigger is tapped
cameraTrigger.onclick = function() {
    cameraSensor.width = cameraView.videoWidth;
    cameraSensor.height = cameraView.videoHeight;
    cameraSensor.getContext("2d").drawImage(cameraView, 0, 0);
    cameraOutput.src = cameraSensor.toDataURL("image/webp");
    cameraOutput.classList.add("taken");
};
// Start the video stream when the window loads
window.addEventListener("load", cameraStart, false);
	</script>
</body>
</html>