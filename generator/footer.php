<?php include("../templates/login.php");?>

<div class="footer">
ALIPS &copy; <?php print date("Y");?> All rights reserved. Developed by Damian Jamroży
</div>

<div class="background">
</div>

<!-- KEEP ALIVE SESSION TOOL -->
<?php if(isset($_SESSION['expiry'])){ ?>
    <div id="ads">
        <iframe src="../generator/keep_alive.php" title="Ads" width="0%" height="0%"></iframe>
    </div>
    <script src="../js/ads.js"></script>
<?php } ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<!-- VOICE CONTROLL -->
<script src="../js/voiceController.js"></script>
<script src="../js/voices.js"></script>

