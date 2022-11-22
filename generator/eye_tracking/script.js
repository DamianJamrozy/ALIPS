window.saveDataAcrossSessions = true;
webgazer.setGazeListener(function(data, elapsedTime) {
  if (data == null) {
      return;
  }
  var xprediction = data.x; //these x coordinates are relative to the viewport
  var yprediction = data.y; //these y coordinates are relative to the viewport
  //console.log(elapsedTime); //elapsed time is based on time since begin was called
}).begin();

// Zmiana na false sprawi ukrycie kamery i punktów na twarzy
webgazer.showVideoPreview(false).showPredictionPoints(true)