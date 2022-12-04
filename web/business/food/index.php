<?php include("../../../generator/setings.php");?>

<?php
 $playerId = $_SESSION["UserId"];

 if(isset($_POST['send'])){
    $fir = (int)$_POST['fir'];
    $sec = (int)$_POST['sec'];
    $thr = (int)$_POST['thr'];
    $date = date('Y-m-d');
    $first ="INSERT INTO business_food_user (idUser,idFood,points,date) VALUES ('$playerId','$fir','3', '$date' )";
    if (mysqli_query($dbconect, $first)) {}	
    $second ="INSERT INTO business_food_user (idUser,idFood,points,date) VALUES ('$playerId','$sec','2', '$date' )";
    if (mysqli_query($dbconect, $second)) {}	
    $thrird ="INSERT INTO business_food_user (idUser,idFood,points,date) VALUES ('$playerId','$thr','1', '$date' )";
    if (mysqli_query($dbconect, $thrird)) {}

    echo("<script>document.getElementById('dashboard').innerHTML = ``;</script>");
    echo("<script>document.getElementById('result').style.display = 'block';</script>");

}

 $CheckExist = "SELECT * FROM business_food_user WHERE idUser = '$playerId' ORDER BY points DESC" ;
 $result3 = mysqli_query($dbconect, $CheckExist);
 if (mysqli_num_rows($result3) > 0) {
     while($row = mysqli_fetch_assoc($result3)) {
         $idUser[] = $row["idUser"];
         $idFood[] = $row["idFood"];
         $idPoints[] = $row["points"];
     }
     if($idUser[0] == $playerId){
        /* echo '<script>alert("Oddałeś/aś już głos w tym badaniu."); window.location.href= "../index.php";</script>'; */
        echo("<script>document.getElementById('dashboard').innerHTML = ``</script>");
        echo("<script>document.getElementById('result').style.display = 'block';</script>");

        for($i = 0; $i < 3; $i++){
            $Check = "SELECT * FROM business_food WHERE id = '$idFood[$i]'" ;
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
        background-color:red;
    }
    
    #right{
        background-color:green;
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
<div class="topHead">Jakiej spośród wymienionych kuchii świata brakuje Ci w Rzeszowie?</div>
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





<script>
    var tab_food = [
    ['Kuchnia Brazylijska', 'Kuchnia Bułgarska','Kuchnia Chińska','Kuchnia Chorwacka','Kuchnia Francuska','Kuchnia Grecka','Kuchnia Hiszpańska','Kuchnia Indonezyjska','Kuchnia Indyjska','Kuchnia Japońska','Kuchnia Meksykańska','Kuchnia Polska','Kuchnia Portugalska','Kuchnia Rumuńska','Kuchnia USA','Kuchnia Włoska'],
    ['Brazylijska.jpg','Bułgarska.jpg','Chińska.jpg','Chorwacja.jpg','Francuska.jpg','Grecka.jpg','Hiszpańska.jpg','Indonezyjska.jpg','Indyjska.jpg','Japońska.jpg','Meksykańska.jpg','Polska.jpg','Portugalska.jpg','Rumuńska.jpg','USA.jpg','Włoska.jpg']
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
                topThird = tab1_ThirdPlace[i-1];
                i = -1;
                console.log(tab1_2);
                j = 0;
                showNew();
            }else{
                topOne = tab1_2[i-1]; 
                topSec = tab1_2[i];

                document.getElementById("fir").value = topOne;
                document.getElementById("sec").value = topSec;
                document.getElementById("thr").value = topThird;

                console.log(tab_food[0][topOne]);
                console.log(tab_food[0][topSec]);
                console.log(tab_food[0][topThird]);

                document.getElementById("send").click();
            }
         }

		function rightCommand() {   
            if (j == 16){
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
                topThird = tab1_ThirdPlace[i];
                i = -1;
                j = 0;
                console.log(tab1_2);
                showNew();
            }else{
                topOne = tab1_2[i]; 
                topSec = tab1_2[i-1];

                document.getElementById("fir").value = topOne+1;
                document.getElementById("sec").value = topSec+1;
                document.getElementById("thr").value = topThird+1;

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

 $CheckExist = "SELECT * FROM business_food_user WHERE idUser = '$playerId' ORDER BY points DESC" ;
 $result3 = mysqli_query($dbconect, $CheckExist);
 if (mysqli_num_rows($result3) > 0) {
     while($row = mysqli_fetch_assoc($result3)) {
         $idUser[] = $row["idUser"];
         $idFood[] = $row["idFood"];
         $idPoints[] = $row["points"];
     }
     if($idUser[0] == $playerId){
        /* echo '<script>alert("Oddałeś/aś już głos w tym badaniu."); window.location.href= "../index.php";</script>'; */
        echo("<script>document.getElementById('dashboard').innerHTML = ``</script>");
        echo("<script>document.getElementById('result').style.display = 'block';</script>");

        for($i = 0; $i < 3; $i++){
            $Check = "SELECT * FROM business_food WHERE id = '$idFood[$i]'" ;
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