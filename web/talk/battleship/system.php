<?php
    include("../../../generator/setings.php");


    $rows = mysqli_query($dbconect, "SELECT * FROM game_talk_ships");

    $playerId = $_SESSION["UserId"];
    $keyVerify = $_SESSION['keyHostGame'];
    $CheckExist = "SELECT * FROM game_talk_ships WHERE game_key = '$keyVerify' AND gameDate = CURDATE() AND (idHost = '$playerId' OR idGuest = '$playerId')" ;
    $result3 = mysqli_query($dbconect, $CheckExist);
    if (mysqli_num_rows($result3) > 0) {
        while($row = mysqli_fetch_assoc($result3)) {
            $id = $row["id"];
            $idHost = $row["idHost"];
            $idGuest = $row["idGuest"];
            $hostDashboard = $row["hostDashboard"];
            $guestDashboard = $row["guestDashboard"];
        }
    }
?>
<script type="text/javascript">
    document.getElementById('host_value').value = "<?php echo($hostDashboard) ?>";
</script>

<!-- <input type="text" value="<?php //echo($hostDashboard) ?>" id="host_value">
<input type="text" value="<?php //echo($guestDashboard) ?>" id="guest_value"> -->
