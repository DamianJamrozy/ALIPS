<?php include("../generator/setings.php");?>
<!DOCTYPE html>
<html>
<head>
</head>

<style>
    body{
        font: 25px "Tahoma", Arial, Serif;
        color:white;
    }
    a{
        text-decoration:none;
    }
    .game_hub{
        width:100%;
        height:350px;
        position:relative;
        font: 25px "Tahoma", Arial, Serif;
        color:white;
    }
    .credits{
        visibility:hidden;
    }
    .ships{
        background-image: url("../files/img/games/b1.jpg");
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
    }
    .mil{
        background-image: url("../files/img/games/mil.jpg");
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
    }
    .tetris{
        background-image: url("../files/img/games/tetr.jpg");
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
    }
    .rynek{
        background-image: url("../files/img/games/rynek.jpg");
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
    }

    .game_txt{
       /*  backdrop-filter: blur(5px); */
       background-color:rgba(0, 0, 0, 0.5);
        width:100%;
        height:350px;
        transition: background-color 1s;

        font-family: 'Courier New', monospace;
        font-size: 8vmin;
        line-height:300px;
        text-align:center;
        font-weight:800;

    }
    .game_txt:hover{
       /*  backdrop-filter: blur(5px); */
       background-color:rgba(0, 0, 0, 0.3);
        width:100%;
        height:350px;
        transition: background-color 1s;
    }
</style>

<body>
<hr>SPEAK RECOGNITION<hr>
<a href="talk/battleship"><div class="game_hub ships">
    <div class="game_txt">
        STATKI - MULTIPLAYER
    </div>
</div></a>
<a href="talk/milionaires"><div class="game_hub mil">
    <div class="game_txt">
        Milionerzy
    </div>
</div></a>
<hr>EYE TRACKING<hr>
<a href="eye/tetris-game"><div class="game_hub tetris">
    <div class="game_txt">
        Tetris
    </div>
</div></a>
<hr>SPEAK RECOGNITION & EYE TRACKING<hr>
<a href="business/"><div class="game_hub rynek">
    <div class="game_txt">
        Badanie rynku
    </div>
</div></a>

<div class="credits">
<a href="https://www.freepik.com/free-vector/digital-technology-engineering-digital-telecoms-concept-futuristic-technology-background-vector-illustration_23690140.htm#page=4&query=geometric%20symbol&position=49&from_view=search&track=sph">Image by WangXiNa</a> on Freepik<br>
<a href="https://www.freepik.com/free-vector/geometry-education-blue-background-vector-frame-disruptive-education-digital-remix_16311859.htm#page=17&query=blocks&position=2&from_view=search&track=sph">Image by rawpixel.com</a> on Freepik
<a href="https://www.freepik.com/free-vector/man-covering-eyes-with-hand-doing-stop-gesture_4758513.htm#page=17&query=blocks&position=44&from_view=search&track=sph">Image by vectorpocket</a> on Freepik
</div>
</body>

</html>