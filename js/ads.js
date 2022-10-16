const intervalID = setInterval(myCallback, 600000); //600000 = 10 min

function myCallback(){
    document.getElementById('ads').innerHTML = '<iframe src="../generator/keep_alive.php" title="Ads" width="0%" height="0%"></iframe>';
    console.log('Session 10 min added!');
}

