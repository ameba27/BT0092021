// var lui = 0;
// carousel();

// function carousel() {
//     var i;
//     var x = document.getElementsByClassName("nature");
//     for(i = 0; i < x.length; i++) {
//         x[i].style.display = "none";
//     }
//      lui++;
//      if (lui > x.length) {
//          lui = 1
//      }
//      x[lui-1].style.display= "block";
//      setTimeout(carousel, 2500);
// }

var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("nature");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 2000); 
}