// PARALAX EFECT
(function() {
  // Add event listener
  document.addEventListener("mousemove", parallax);
  const elem = document.querySelector("#parallax");
  // Magic happens here
  function parallax(e) {
      let _w = window.innerWidth/2;
      let _h = window.innerHeight/2;
      let _mouseX = e.clientX;
      let _mouseY = e.clientY;
      let _depth3 = `${50 - (_mouseX - _w) * 0.01}% ${50 - (_mouseY - _h) * 0.01}%`;
      let _depth1 = `${50 - (_mouseX - _w) * 0.01}% ${50 - (_mouseY - _h) * 0.01}%`;
      let _depth2 = `${50 - (_mouseX - _w) * 0.06}% ${50 - (_mouseY - _h) * 0.06}%`;
      let x = `${_depth3}, ${_depth2}, ${_depth1}`;
      //console.log(x);
      elem.style.backgroundPosition = x;
  }

})();
// END PARALAX EFECT

// BUTTON ANIMATIONS
document.querySelectorAll('.btn-animate').forEach(btn => {
  const txt = btn.textContent
  btn.textContent = ''

  const span = document.createElement('span')
  const span2 = document.createElement('span')
  const span3 = document.createElement('span')
  const span4 = document.createElement('span')

  btn.appendChild(span)
  btn.appendChild(span2)
  btn.appendChild(span3)

  span4.textContent = txt
  btn.appendChild(span4)
})
// END BUTTON ANIMATIONS

