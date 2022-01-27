var chef= 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName('tof');
    for (i = 0; i < x.length; i++) {
         x[i].style.display= "none";
    }
    chef++;
    if (chef > x.length) {
        chef = 1
    }
    x[chef-1].style.display = "block";
    setTimeout(carousel, 2500);
}

