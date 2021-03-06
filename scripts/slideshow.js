var slideIndex = 1;
showDivs(slideIndex);
var timer = 8000; // in ms
var id = interval();

function interval() {
  return setInterval(plusDivs, timer, 1);
}

function plusDivs(n) {
  clearInterval(id);
  id = interval();
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  clearInterval(id);
  id = interval();
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}

