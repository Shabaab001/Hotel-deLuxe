burger = document.querySelector('.burger')
    navbar = document.querySelector('.navbar')
    navlist = document.querySelector('.navlist')

    burger.addEventListener('click', () => {
        navbar.classList.toggle('h-nav');
        navlist.classList.toggle('v-class');
    })


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
        setTimeout(carousel, 5000); // Change image every 5 seconds
    }