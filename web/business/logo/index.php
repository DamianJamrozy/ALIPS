<?php include("../../../generator/setings.php");?>

<?php
 $playerId = $_SESSION["UserId"];

 if(isset($_POST['send'])){
    $fir = (int)$_POST['fir'];
    $sec = (int)$_POST['sec'];
    $thr = (int)$_POST['thr'];

    $tPointsfir = (int)$_POST['tPointsFir'];
    $tPointssec = (int)$_POST['tPointsSec'];
    $tPointsthr = (int)$_POST['tPointsThr'];

    $date = date('Y-m-d');
    $first ="INSERT INTO business_color_user (idUser,idColor,points,lookTimePoints,date) VALUES ('$playerId','$fir','3', '$tPointsfir', '$date' )";
    if (mysqli_query($dbconect, $first)) {}	
    $second ="INSERT INTO business_color_user (idUser,idColor,points,lookTimePoints,date) VALUES ('$playerId','$sec','2', '$tPointssec', '$date' )";
    if (mysqli_query($dbconect, $second)) {}	
    $thrird ="INSERT INTO business_color_user (idUser,idColor,points,lookTimePoints,date) VALUES ('$playerId','$thr','1', '$tPointsthr', '$date' )";
    if (mysqli_query($dbconect, $thrird)) {}

    echo("<script>document.getElementById('dashboard').innerHTML = ``;</script>");
    echo("<script>document.getElementById('result').style.display = 'block';</script>");

}

 $CheckExist = "SELECT * FROM business_color_user WHERE idUser = '$playerId' ORDER BY points DESC" ;
 $result3 = mysqli_query($dbconect, $CheckExist);
 if (mysqli_num_rows($result3) > 0) {
     while($row = mysqli_fetch_assoc($result3)) {
         $idUser[] = $row["idUser"];
         $idColor[] = $row["idColor"];
         $idPoints[] = $row["points"];
     }
     if($idUser[0] == $playerId){
        /* echo '<script>alert("Oddałeś/aś już głos w tym badaniu."); window.location.href= "../index.php";</script>'; */
        echo("<script>document.getElementById('dashboard').innerHTML = ``</script>");
        echo("<script>document.getElementById('result').style.display = 'block';</script>");

        for($i = 0; $i < 3; $i++){
            $Check = "SELECT * FROM business_color WHERE id = '$idColor[$i]'" ;
            $result3 = mysqli_query($dbconect, $Check);
            if (mysqli_num_rows($result3) > 0) {
                while($row = mysqli_fetch_assoc($result3)) {
                    $foodName[$i] = $row["Name"];
                }
            }
        }
    }
}   
?>

<style>
    #left, #right{
        position:relative;
        float:left;
        width:47%;
        height:100%;

        background-repeat: no-repeat;
        background-position: center;
        background-size: 100% 80%;
    }
    #left{
        /* background-color:red; */
    }
    
    #right{
        /* background-color:green; */
    }

    .separate{
        height:100%;
        width:6%;
        position:relative;
        float:left;
    }

    #vs{
        position:absolute;
        z-index: 99999;
        font-size: 70px;
        width:18vh;
        height:18vh;
        background-color:white;
        border-radius:50%;
        line-height:200%;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        color:black;
    }

    #vsBack{
        position:absolute;
        z-index: 99999;
        font-size: 70px;
        width:19vh;
        height:19vh;
        background-color:rgba(0, 0, 0, 0.7);
        border-radius:50%;
        line-height:200%;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%)
    }

    #left_txt, #right_txt{
        bottom:0;
        left:0;
        float:bottom;
        position:absolute;
        width:100%;
        height:60px;
        background-color:rgba(0, 0, 0, 0.8);

        font-family: 'Courier New', monospace;
        font-size: 4vmin;
        line-height:60px;
        text-align:center;
        color:white;
    }

    .topHead{
        position:absolute;
        width:100%;
        height:60px;
        background-color:rgba(0, 0, 0, 0.7);
        z-index: 9999999;

        
        font-size: 3vmin;
        line-height:60px;
        text-align:center;
        color:white;
    }

    body{
        overflow: hidden;
        color:white;
        font-family: 'Courier New', monospace;
    }

    #result{
        width:100%;
        height:100%;
        position:fixed;
        z-index:99999999999;
        background-color:rgba(0, 0, 0, 0.8);
        text-align:center;
       line-height:150px;
       display:none;
    }
</style>
<div class="topHead">Firma tworząca smoothie szuka najlepszej wersji kolorystycznej logotypu.</div>
<div id="result">
    <h1>Wyniki</h1>
    <?php 
        if(isset($foodName)){
            echo("1. ".$foodName[0]."<br>");
            echo("2. ".$foodName[1]."<br>");
            echo("3. ".$foodName[2]."<br>");
        }
    ?>
</div>
<div id="dashboard">
    <div id="left">
    <div id="left_txt">test</div>
    </div>
    <div class="separate"></div>
    <center>
    <div id="vsBack">
        <form method="POST" name="sendSubmit">
            <input type="number" name="fir" id="fir" style="visibility: hidden;">
            <input type="number" name="sec" id="sec" style="visibility: hidden;">
            <input type="number" name="thr" id="thr" style="visibility: hidden;">

            <input type="number" name="tPointsFir" id="tPointsFir" style="visibility: hidden;">
            <input type="number" name="tPointsSec" id="tPointsSec" style="visibility: hidden;">
            <input type="number" name="tPointsThr" id="tPointsThr" style="visibility: hidden;">
            <input type="submit" id="send" name="send" style="visibility: hidden;">
        </form>
    </div>
    <div id="vs">
        VS
    </div>
    </center>
    <div id="right">
    <div id="right_txt">test2</div>
    </div>
</div>



<script src="../../../js/voiceController.js"></script>
<script src="../../../generator/eye_tracking/webgazer.js"></script>




<script>
    var tab_food = [
    ['Niebiesko-białe', 'Szaro-białe','Morsko-białe','Morska zieleń-białe','Zielono-białe','Pomarańczowo-białe','Łososiowo-białe','Fioletowo-białe','Niebiesko-czarne', 'Szaro-czarne','Morsko-czarne','Morska zieleń-czarne','Zielono-czarne','Pomarańczowo-czarne','Łososiowo-czarne','Fioletowo-czarne'],
    ['1.png','2.png','3.png','4.png','5.png','6.png','7.png','8.png','9.png','10.png','11.png','12.png','13.png','14.png','15.png','16.png']
    ];

    
    var tab1_16 = ['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'];
    var tab1_8 = [];
    var tab1_4 = [];
    var tab1_2 = [];
    var tab1_ThirdPlace = [];
    var topOne, topSec, topThird, k;
    var used;
    var length = tab1_16.length;

    var left = document.getElementById('left');
    var left_txt = document.getElementById('left_txt');
    var leftIndex;

    var right = document.getElementById('right');
    var right_txt = document.getElementById('right_txt');
    var rightIndex;

    function shuffle(array) {
    let currentIndex = array.length,  randomIndex;

    // While there remain elements to shuffle.
    while (currentIndex != 0) {

        // Pick a remaining element.
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex--;

        // And swap it with the current element.
        [array[currentIndex], array[randomIndex]] = [
        array[randomIndex], array[currentIndex]];
    }

    return array;
    }

    // Used like so
    shuffle(tab1_16);
/*     console.log(arr); */

    var i = -1;
    var j = 16;

    console.log(tab1_16);

    showNew();

    function showNew(){
        if (j == 16){
            i++;
            left.style.backgroundImage = "url('img/"+tab_food[1][tab1_16[i]]+"')";
            left_txt.innerHTML = tab_food[0][tab1_16[i]];
            leftIndex = tab1_16[i];
            i++;
            right.style.backgroundImage = "url('img/"+tab_food[1][tab1_16[i]]+"')";
            right_txt.innerHTML = tab_food[0][tab1_16[i]];
            rightIndex = tab1_16[i];
            k = i + 1;
        }else if (j == 8){
            i++;
            left.style.backgroundImage = "url('img/"+tab_food[1][tab1_8[i]]+"')";
            left_txt.innerHTML = tab_food[0][tab1_8[i]];
            leftIndex = tab1_8[i];
            i++;
            right.style.backgroundImage = "url('img/"+tab_food[1][tab1_8[i]]+"')";
            right_txt.innerHTML = tab_food[0][tab1_8[i]];
            rightIndex = tab1_8[i];
            k = i + 1;
        }else if (j == 4){
            i++;
            left.style.backgroundImage = "url('img/"+tab_food[1][tab1_4[i]]+"')";
            left_txt.innerHTML = tab_food[0][tab1_4[i]];
            leftIndex = tab1_4[i];
            i++;
            right.style.backgroundImage = "url('img/"+tab_food[1][tab1_4[i]]+"')";
            right_txt.innerHTML = tab_food[0][tab1_4[i]];
            rightIndex = tab1_4[i];
            k = i + 1;
        }else if (j == 2){
            i++;
            left.style.backgroundImage = "url('img/"+tab_food[1][tab1_ThirdPlace[i]]+"')";
            left_txt.innerHTML = tab_food[0][tab1_ThirdPlace[i]];
            leftIndex = tab1_ThirdPlace[i];
            i++;
            right.style.backgroundImage = "url('img/"+tab_food[1][tab1_ThirdPlace[i]]+"')";
            right_txt.innerHTML = tab_food[0][tab1_ThirdPlace[i]];
            rightIndex = tab1_ThirdPlace[i];
            k = i + 1;
        }else{
            i++;
            left.style.backgroundImage = "url('img/"+tab_food[1][tab1_2[i]]+"')";
            left_txt.innerHTML = tab_food[0][tab1_2[i]];
            leftIndex = tab1_2[i];
            i++;
            right.style.backgroundImage = "url('img/"+tab_food[1][tab1_2[i]]+"')";
            right_txt.innerHTML = tab_food[0][tab1_2[i]];
            rightIndex = tab1_2[i];
            k = i + 1;
        }
       
    }
    
    var lookLeft = 0;
    var lookRight = 0;

    var lookFir;
    var lookSec;
    var lookThr;

    if (annyang) {
			// choose language
		annyang.setLanguage('pl-PL');
		// Let's define a command.
		const commands2 = {
			// Shoot board for Microsoft Edge
			'lewo.': leftCommand,
			'prawo.': rightCommand
		};

		// START Speak Shoot functions
		function leftCommand() { 
            if (j == 16){
                lookLeft = 0;
                lookRight = 0;
                tab1_8.push(tab1_16[i-1]);
                console.log(tab1_8);
                if (k == length){
                    j = 8;
                    shuffle(tab1_8);
                    length = tab1_8.length;
                    i = -1;
                    console.log(tab1_8);
                }
                showNew();
            }else if (j == 8){
                lookLeft = 0;
                lookRight = 0;
                tab1_4.push(tab1_8[i-1]);
                console.log(tab1_4);
                if (k == length){
                    j = 4;
                    shuffle(tab1_4);
                    length = tab1_4.length;
                    i = -1;
                    console.log(tab1_4);
                }
                showNew();
            }else if (j == 4){
                lookLeft = 0;
                lookRight = 0;
                tab1_2.push(tab1_4[i-1]);
                tab1_ThirdPlace.push(tab1_4[i]);
                console.log(tab1_ThirdPlace);
                console.log(tab1_2);
                if (k == length){
                    j = 2;
                    shuffle(tab1_2);
                    length = tab1_2.length;
                    i = -1;
                    console.log(tab1_ThirdPlace);
                }
                showNew();
            }else if (j == 2){
                lookThr = lookLeft;
                lookLeft = 0;
                lookRight = 0;
                topThird = tab1_ThirdPlace[i-1];
                i = -1;
                console.log(tab1_2);
                j = 0;
                showNew();
            }else{
                topOne = tab1_2[i-1]; 
                topSec = tab1_2[i];

                lookFir = lookLeft;
                lookSec = lookRight;

                lookLeft = 0;
                lookRight = 0;

                document.getElementById("fir").value = topOne;
                document.getElementById("sec").value = topSec;
                document.getElementById("thr").value = topThird;

                document.getElementById("tPointsFir").value = lookFir;
                document.getElementById("tPointsSec").value = lookSec;
                document.getElementById("tPointsThr").value = lookThr;

                console.log(tab_food[0][topOne]);
                console.log(tab_food[0][topSec]);
                console.log(tab_food[0][topThird]);

                document.getElementById("send").click();
            }
         }

		function rightCommand() {   
            if (j == 16){
                lookLeft = 0;
                lookRight = 0;
                tab1_8.push(tab1_16[i]);
                console.log(tab1_8);
                if (k == length){
                    j = 8;
                    shuffle(tab1_8);
                    length = tab1_8.length;
                    i = -1;
                    console.log(tab1_8);
                }
                showNew();
            }else if (j == 8){
                lookLeft = 0;
                lookRight = 0;
                tab1_4.push(tab1_8[i]);
                console.log(tab1_4);
                if (k == length){
                    j = 4;
                    shuffle(tab1_4);
                    length = tab1_4.length;
                    i = -1;
                    console.log(tab1_4);
                }
                showNew();
            }else if (j == 4){
                lookLeft = 0;
                lookRight = 0;
                tab1_2.push(tab1_4[i]);
                tab1_ThirdPlace.push(tab1_4[i-1]);
                console.log(tab1_ThirdPlace);
                console.log(tab1_2);
                if (k == length){
                    j = 2;
                    shuffle(tab1_2);
                    length = tab1_2.length;
                    i = -1;
                    console.log(tab1_ThirdPlace);
                }
                showNew();
            }else if (j == 2){
                lookThr = lookRight;
                lookLeft = 0;
                lookRight = 0;
                topThird = tab1_ThirdPlace[i];
                i = -1;
                j = 0;
                console.log(tab1_2);
                showNew();
            }else{
                topOne = tab1_2[i]; 
                topSec = tab1_2[i-1];

                lookFir = lookRight;
                lookSec = lookLeft;

                lookLeft = 0;
                lookRight = 0;

                document.getElementById("fir").value = topOne+1;
                document.getElementById("sec").value = topSec+1;
                document.getElementById("thr").value = topThird+1;

                document.getElementById("tPointsFir").value = lookFir;
                document.getElementById("tPointsSec").value = lookSec;
                document.getElementById("tPointsThr").value = lookThr;

                console.log(tab_food[0][topOne]);
                console.log(tab_food[0][topSec]);
                console.log(tab_food[0][topThird]);

                document.getElementById("send").click();
            }
         }

		// Add our commands to annyang
		annyang.addCommands(commands2);

		// Start listening.
		annyang.start();

		// Show whats happend
		annyang.addCallback('result', function(phrases) {
			phrases[0] = phrases[0].toLowerCase();
		});
		}

  

        var i = 0;
        var j = 0;

        webgazer.setGazeListener(function(data, elapsedTime) {
        if (data == null) {
            return;
        }
        var xprediction = data.x; //these x coordinates are relative to the viewport
        var yprediction = data.y; //these y coordinates are relative to the viewport
        //console.log(elapsedTime); //elapsed time is based on time since begin was called

        iter++;
        /* j++; */

        if(iter==10){
            iter=0;

            // LEFT
            if(xprediction < 75){
                lookLeft++;
            }
            
            // RIGHT
            if(xprediction > (window.innerWidth - 75)){
                lookRight++;
            }

        }
        }).begin();

        function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
        }


        // Zmiana na false sprawi ukrycie kamery i punktów na twarzy
        webgazer.showVideoPreview(true).showPredictionPoints(true);


</script>


<?php
 $playerId = $_SESSION["UserId"];

 $CheckExist = "SELECT * FROM business_color_user WHERE idUser = '$playerId' ORDER BY points DESC" ;
 $result3 = mysqli_query($dbconect, $CheckExist);
 if (mysqli_num_rows($result3) > 0) {
     while($row = mysqli_fetch_assoc($result3)) {
         $idUser[] = $row["idUser"];
         $idColor[] = $row["idColor"];
         $idPoints[] = $row["points"];
     }
     if($idUser[0] == $playerId){
        /* echo '<script>alert("Oddałeś/aś już głos w tym badaniu."); window.location.href= "../index.php";</script>'; */
        echo("<script>document.getElementById('dashboard').innerHTML = ``</script>");
        echo("<script>document.getElementById('result').style.display = 'block';</script>");

        for($i = 0; $i < 3; $i++){
            $Check = "SELECT * FROM business_color WHERE id = '$idColor[$i]'" ;
            $result3 = mysqli_query($dbconect, $Check);
            if (mysqli_num_rows($result3) > 0) {
                while($row = mysqli_fetch_assoc($result3)) {
                    $foodName[$i] = $row["Name"];
                }
            }
        }
    }
}   
?>