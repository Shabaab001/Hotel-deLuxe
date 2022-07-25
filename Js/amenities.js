var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) { myIndex = 1 }
    x[myIndex - 1].style.display = "flex";
    setTimeout(carousel, 3000); // Change image every 3 seconds
}

var myIndex1 = 0;
carousel1();

function carousel1() {
    var j;
    var y = document.getElementsByClassName("ainfo");
    for (j = 0; j < y.length; j++) {
        y[j].style.display = "none";
    }
    myIndex1++;
    if (myIndex1 > y.length) { myIndex1 = 1 }
    y[myIndex1 - 1].style.display = "block";
    setTimeout(carousel1, 3000); // Change image every 3 seconds
}



burger = document.querySelector('.burger')
navbar = document.querySelector('.navbar')
navlist = document.querySelector('.navlist')

burger.addEventListener('click', ()=>{
    navbar.classList.toggle('h-nav');
    navlist.classList.toggle('v-class');
})