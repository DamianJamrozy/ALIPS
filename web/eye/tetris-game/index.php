<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://webgazer.cs.brown.edu/webgazer.js?" defer></script>
  <script src="eye_tetris_script.js" defer></script>
  <title>Document</title>
  <style>
    body {
      margin: 0;
      display: flex;
      justify-content: center;
      overflow: hidden;
    }

    img {
      width: 50vw;
      height: 100vh;
      transition: transform 200ms;
      object-fit: cover;
      display: none;
    }

    img.left {
      transform: translateX(-100vw);
    }

    img.right {
      transform: translateX(100vw);
    }

    img.next {
      display: none;
    }
    canvas {
     border: 1px solid white;
    }
  </style>
</head>
<body>
  
<canvas width="320" height="640" id="game"></canvas>

</body>
</html>