import {
  incrementCustomProperty,
  setCustomProperty,
  getCustomProperty,
} from "./updateCustomProperty.js"

const dinoElem = document.querySelector("[data-dino]")
const JUMP_SPEED = 0.45
const GRAVITY = 0.0015
const DINO_FRAME_COUNT = 2
const FRAME_TIME = 100

let isJumping
let dinoFrame
let currentFrameTime
let yVelocity
export function setupDino() {
  isJumping = false
  dinoFrame = 0
  currentFrameTime = 0
  yVelocity = 0
  setCustomProperty(dinoElem, "--bottom", 0)
  document.removeEventListener("keydown", onJump)
  document.addEventListener("keydown", onJump)
}

export function updateDino(delta, speedScale) {
  handleRun(delta, speedScale)
  handleJump(delta)
}

export function getDinoRect() {
  return dinoElem.getBoundingClientRect()
}

export function setDinoLose() {
  dinoElem.src = "imgs/dino-lose.png"
}

function handleRun(delta, speedScale) {
  if (isJumping) {
    dinoElem.src = `imgs/dino-stationary.png`
    return
  }

  if (currentFrameTime >= FRAME_TIME) {
    dinoFrame = (dinoFrame + 1) % DINO_FRAME_COUNT
    dinoElem.src = `imgs/dino-run-${dinoFrame}.png`
    currentFrameTime -= FRAME_TIME
  }
  currentFrameTime += delta * speedScale
}

function handleJump(delta) {
  if (!isJumping) return

  incrementCustomProperty(dinoElem, "--bottom", yVelocity * delta)

  if (getCustomProperty(dinoElem, "--bottom") <= 0) {
    setCustomProperty(dinoElem, "--bottom", 0)
    isJumping = false
  }

  yVelocity -= GRAVITY * delta
}

function onJump(e) {
  if (e.code !== "Space" || isJumping) return

  yVelocity = JUMP_SPEED
  isJumping = true
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

  i++;
  j++;

  if(i==19){
    i=0;

    /* // LEFT
    if(xprediction < 75){
      const col = tetromino.col - 1;
      if (isValidMove(tetromino.matrix, tetromino.row, col)) {
        tetromino.col = col;
      }
    }
    
    // RIGHT
    if(xprediction > (window.innerWidth - 75)){
      const col = tetromino.col + 1;
      if (isValidMove(tetromino.matrix, tetromino.row, col)) {
        tetromino.col = col;
      }
    } */

    // ROTATE
    //if(j==20){
      //j=0;
      if(yprediction < 30){
        yVelocity = JUMP_SPEED
        isJumping = true
      }

      if(yprediction > (window.innerHeight - 75)){
        yVelocity = JUMP_SPEED
        isJumping = true
      }

   // }
  }



  if (this.isBlink()) {
    console.log("I blinked")
      eyesObj.left.blink = true;
      eyesObj.right.blink = true;
  }




  
}).begin();

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}


// Zmiana na false sprawi ukrycie kamery i punktów na twarzy
webgazer.showVideoPreview(true).showPredictionPoints(true);




/* webgazer.BlinkDetector.prototype.detectBlink = function(eyesObj) {
  const data = this.extractBlinkData(eyesObj);
  this.blinkData.push(data);

  eyesObj.left.blink = false;
  eyesObj.right.blink = false;

  if (this.blinkData.length < this.blinkWindow) {
      return eyesObj;
  }

  if (this.isBlink()) {
    console.log("I blinked")
      eyesObj.left.blink = true;
      eyesObj.right.blink = true;
  }

  if (!eyesObj || !webgazer.params.blinkDetectionOn) {
      return eyesObj;
  }
  return eyesObj;
}; */