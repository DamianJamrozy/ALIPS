<?php include("../../../generator/setings.php");?>

<?php
 $playerId = $_SESSION["UserId"];

 if(isset($_POST['send'])){

    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];

    // SEPARATE STRING
    $lookPoints = explode(",", $t1);
    $selectPoints = explode(",", $t2);


    $date = date('Y-m-d');
    $first ="INSERT INTO business_color_user (idUser,idColor,points,lookTimePoints,date) VALUES ('$playerId','0',' $selectPoints[0]','$lookPoints[0]', '$date' ),('$playerId','1',' $selectPoints[1]','$lookPoints[1]', '$date' ),('$playerId','2',' $selectPoints[2]','$lookPoints[2]', '$date' ),('$playerId','3',' $selectPoints[3]','$lookPoints[3]', '$date' ),('$playerId','4',' $selectPoints[4]','$lookPoints[4]', '$date' ),('$playerId','5',' $selectPoints[5]','$lookPoints[5]', '$date' ),('$playerId','6',' $selectPoints[6]','$lookPoints[6]', '$date' ),('$playerId','7',' $selectPoints[7]','$lookPoints[7]', '$date' ),('$playerId','8',' $selectPoints[8]','$lookPoints[8]', '$date' ),('$playerId','9',' $selectPoints[9]','$lookPoints[9]', '$date' ),('$playerId','10',' $selectPoints[10]','$lookPoints[10]', '$date' ),('$playerId','11',' $selectPoints[11]','$lookPoints[11]', '$date' ),('$playerId','12',' $selectPoints[12]','$lookPoints[12]', '$date' ),('$playerId','13',' $selectPoints[13]','$lookPoints[13]', '$date' ),('$playerId','14',' $selectPoints[14]','$lookPoints[14]', '$date' ),('$playerId','15',' $selectPoints[15]','$lookPoints[15]', '$date')";
    if (mysqli_query($dbconect, $first)) {}	

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
        echo("<script>document.getElementById('dashboard').innerHTML = ``</script>");
        echo("<script>document.getElementById('result').style.display = 'block';</script>");

        for($i = 0; $i < 3; $i++){
            $Check = "SELECT * FROM business_color WHERE id = '$idColor[$i]'" ;
            $result3 = mysqli_query($dbconect, $Check);
            if (mysqli_num_rows($result3) > 0) {
                while($row = mysqli_fetch_assoc($result3)) {
                    $colorName[$i] = $row["Name"];
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
<div class="topHead">Firma tworząca smothie szuka najlepszej wersji kolorystycznej logotypu.</div>
<div id="result">
    <h1>Wyniki</h1>
    <?php 
        if(isset($colorName)){
            echo("1. ".$colorName[0]."<br>");
            echo("2. ".$colorName[1]."<br>");
            echo("3. ".$colorName[2]."<br>");
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
            <input type="text" name="t1" id="t1" style="visibility: hidden;">
            <input type="text" name="t2" id="t2" style="visibility: hidden;">
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
<script src="https://webgazer.cs.brown.edu/webgazer.js?"></script>




<script async>
    var lookLeft = 0;
    var lookRight = 0;
    var iter=0;
    var i = 0;
    var j = 0;
    var lookValue = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

        webgazer.setGazeListener(function(data, elapsedTime) {
        if (data == null) {
            return;
        }
        var xprediction = data.x; //these x coordinates are relative to the viewport
        var yprediction = data.y; //these y coordinates are relative to the viewport

        iter++;

        if(iter==5){
            iter=0;

            // LEFT
            if(xprediction < 510 && lookLeft<9999){
                lookLeft++;
            }
            
            // RIGHT
            if(xprediction > (window.innerWidth - 510) && lookRight<9999){
                lookRight++;
            }

        }
        }).begin();

        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }


        // Zmiana na false sprawi ukrycie kamery i punktów na twarzy
        webgazer.showVideoPreview(true).showPredictionPoints(true);

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

    var pointsValue = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

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
                // TimePoints
                lookValue[tab1_16[i-1]] = lookValue[tab1_16[i-1]] + lookLeft;
                lookValue[tab1_16[i]] = lookValue[tab1_16[i]] + lookRight;
                console.log(lookValue);
                
                // SelectPoints
                pointsValue[tab1_16[i-1]] = pointsValue[tab1_16[i-1]] + 1;
                pointsValue[tab1_16[i]] = pointsValue[tab1_16[i]] + 0;
                console.log(pointsValue);

                tab1_8.push(tab1_16[i-1]);
                //console.log(tab1_8);
                if (k == length){
                    j = 8;
                    shuffle(tab1_8);
                    length = tab1_8.length;
                    i = -1;
                    console.log(tab1_8);
                }
                lookLeft = 0;
                lookRight = 0;
                showNew();
            }else if (j == 8){
                // TimePoints
                lookValue[tab1_8[i-1]] = lookValue[tab1_8[i-1]] + lookLeft;
                lookValue[tab1_8[i]] = lookValue[tab1_8[i]] + lookRight;
                console.log(lookValue);
                
                // SelectPoints
                pointsValue[tab1_8[i-1]] = pointsValue[tab1_8[i-1]] + 1;
                pointsValue[tab1_8[i]] = pointsValue[tab1_8[i]] + 0;
                console.log(pointsValue);

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
                 // TimePoints
                lookValue[tab1_4[i-1]] = lookValue[tab1_4[i-1]] + lookLeft;
                lookValue[tab1_4[i]] = lookValue[tab1_4[i]] + lookRight;
                console.log(lookValue);
                
                // SelectPoints
                pointsValue[tab1_4[i-1]] = pointsValue[tab1_4[i-1]] + 1;
                pointsValue[tab1_4[i]] = pointsValue[tab1_4[i]] + 0;
                console.log(pointsValue);

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
                // TimePoints
                lookValue[tab1_ThirdPlace[i-1]] = lookValue[tab1_ThirdPlace[i-1]] + lookLeft;
                lookValue[tab1_ThirdPlace[i]] = lookValue[tab1_ThirdPlace[i]] + lookRight;
                console.log(lookValue);
                
                // SelectPoints
                pointsValue[tab1_ThirdPlace[i-1]] = pointsValue[tab1_ThirdPlace[i-1]] + 1;
                pointsValue[tab1_ThirdPlace[i]] = pointsValue[tab1_ThirdPlace[i]] + 0;
                console.log(pointsValue);

                topThird = tab1_ThirdPlace[i-1];
                i = -1;
                console.log(tab1_2);
                j = 0;
                showNew();
            }else{
                // TimePoints
                lookValue[tab1_2[i-1]] = lookValue[tab1_2[i-1]] + lookLeft;
                lookValue[tab1_2[i]] = lookValue[tab1_2[i]] + lookRight;
                console.log(lookValue);
                
                // SelectPoints
                pointsValue[tab1_2[i-1]] = pointsValue[tab1_2[i-1]] + 2;
                pointsValue[tab1_2[i]] = pointsValue[tab1_2[i]] + 1;
                console.log(pointsValue);

                topOne = tab1_2[i-1]; 
                topSec = tab1_2[i];

                document.getElementById("t1").value = lookValue;
                document.getElementById("t2").value = pointsValue;

                console.log(tab_food[0][topOne]);
                console.log(tab_food[0][topSec]);
                console.log(tab_food[0][topThird]);

                document.getElementById("send").click();
            }
         }

		function rightCommand() {   
            if (j == 16){
                // TimePoints
                lookValue[tab1_16[i-1]] = lookValue[tab1_16[i-1]] + lookLeft;
                lookValue[tab1_16[i]] = lookValue[tab1_16[i]] + lookRight;
                console.log(lookValue);
                
                // SelectPoints
                pointsValue[tab1_16[i-1]] = pointsValue[tab1_16[i-1]] + 0;
                pointsValue[tab1_16[i]] = pointsValue[tab1_16[i]] + 1;
                console.log(pointsValue);

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
                // TimePoints
                lookValue[tab1_8[i-1]] = lookValue[tab1_8[i-1]] + lookLeft;
                lookValue[tab1_8[i]] = lookValue[tab1_8[i]] + lookRight;
                console.log(lookValue);
                
                // SelectPoints
                pointsValue[tab1_8[i-1]] = pointsValue[tab1_8[i-1]] + 0;
                pointsValue[tab1_8[i]] = pointsValue[tab1_8[i]] + 1;
                console.log(pointsValue);

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
                 // TimePoints
                 lookValue[tab1_4[i-1]] = lookValue[tab1_4[i-1]] + lookLeft;
                lookValue[tab1_4[i]] = lookValue[tab1_4[i]] + lookRight;
                console.log(lookValue);
                
                // SelectPoints
                pointsValue[tab1_4[i-1]] = pointsValue[tab1_4[i-1]] + 0;
                pointsValue[tab1_4[i]] = pointsValue[tab1_4[i]] + 1;
                console.log(pointsValue);

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
                 // TimePoints
                 lookValue[tab1_ThirdPlace[i-1]] = lookValue[tab1_ThirdPlace[i-1]] + lookLeft;
                lookValue[tab1_ThirdPlace[i]] = lookValue[tab1_ThirdPlace[i]] + lookRight;
                console.log(lookValue);
                
                // SelectPoints
                pointsValue[tab1_ThirdPlace[i-1]] = pointsValue[tab1_ThirdPlace[i-1]] + 0;
                pointsValue[tab1_ThirdPlace[i]] = pointsValue[tab1_ThirdPlace[i]] + 1;
                console.log(pointsValue);

                topThird = tab1_ThirdPlace[i];
                i = -1;
                j = 0;
                console.log(tab1_2);
                showNew();
            }else{
                // TimePoints
                lookValue[tab1_2[i-1]] = lookValue[tab1_2[i-1]] + lookLeft;
                lookValue[tab1_2[i]] = lookValue[tab1_2[i]] + lookRight;
                console.log(lookValue);
                
                // SelectPoints
                pointsValue[tab1_2[i-1]] = pointsValue[tab1_2[i-1]] + 1;
                pointsValue[tab1_2[i]] = pointsValue[tab1_2[i]] + 2;
                console.log(pointsValue);

                topOne = tab1_2[i]; 
                topSec = tab1_2[i-1];

                document.getElementById("t1").value = lookValue;
                document.getElementById("t2").value = pointsValue;

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
        echo("<script>document.getElementById('dashboard').innerHTML = ``</script>");
        echo("<script>document.getElementById('result').style.display = 'block';</script>");

        for($i = 0; $i < 3; $i++){
            $Check = "SELECT * FROM business_color WHERE id = '$idColor[$i]'" ;
            $result3 = mysqli_query($dbconect, $Check);
            if (mysqli_num_rows($result3) > 0) {
                while($row = mysqli_fetch_assoc($result3)) {
                    $colorName[$i] = $row["Name"];
                }
            }
        }
    }
}   
?>