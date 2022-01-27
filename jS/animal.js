var toi = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("animal");
    for(i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
     toi++;
     if (toi > x.length) {
         moi = 1
     }
     x[toi-1].style.display= "block";
     setTimeout(carousel, 1500);
}