<?php include("../../generator/setings.php");?>
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
    .hub{
        width:100%;
        height:350px;
        position:relative;
        font: 25px "Tahoma", Arial, Serif;
        color:white;
    }
    .credits{
        visibility:hidden;
    }
    .food{
        background-image: url("basic_img/food.png");
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
    }
    .restaurant{
        background-image: url("basic_img/restaurant.png");
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
    }

    .tekst{
       /*  backdrop-filter: blur(5px); */
       background-color:rgba(0, 0, 0, 0.7);
        width:100%;
        height:350px;
        transition: background-color 1s;

        font-family: 'Courier New', monospace;
        font-size: 8vmin;
        line-height:300px;
        text-align:center;
        font-weight:800;

    }
    .tekst:hover{
       /*  backdrop-filter: blur(5px); */
       background-color:rgba(0, 0, 0, 0.5);
        width:100%;
        height:350px;
        transition: background-color 1s;
    }
</style>

<body>
<hr>JEDZENIE<hr>
<a href="food/index.php"><div class="hub food">
    <div class="tekst">
        NOWE SMAKI - RZESZÓW
    </div>
</div></a>
<hr>RESTAURACJE<hr>
<a href="restaurant/index.php"><div class="hub restaurant">
    <div class="tekst">
        NOWA RESTAURACJA - RZESZÓW
    </div>
</div></a>

<div class="credits">
<a href="https://www.freepik.com/free-vector/digital-technology-engineering-digital-telecoms-concept-futuristic-technology-background-vector-illustration_23690140.htm#page=4&query=geometric%20symbol&position=49&from_view=search&track=sph">Image by WangXiNa</a> on Freepik<br>
<a href="https://www.freepik.com/free-vector/geometry-education-blue-background-vector-frame-disruptive-education-digital-remix_16311859.htm#page=17&query=blocks&position=2&from_view=search&track=sph">Image by rawpixel.com</a> on Freepik
<a href="https://www.freepik.com/free-vector/man-covering-eyes-with-hand-doing-stop-gesture_4758513.htm#page=17&query=blocks&position=44&from_view=search&track=sph">Image by vectorpocket</a> on Freepik
</div>
</body>

</html>