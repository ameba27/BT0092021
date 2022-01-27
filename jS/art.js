var moi = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("art");
    for(i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
     moi++;
     if (moi > x.length) {
         moi = 1
     }
     x[moi-1].style.display= "block";
     setTimeout(carousel, 3000);
}