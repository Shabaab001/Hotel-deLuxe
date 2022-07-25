burger = document.querySelector('.burger')
navbar = document.querySelector('.navbar')
navlist = document.querySelector('.navlist')

burger.addEventListener('click', () => {
    navbar.classList.toggle('h-nav');
    navlist.classList.toggle('v-class');
})



function validate() {

    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var cq = document.getElementById('cq').value;


    if (name.length <= 3) {
        document.getElementById('error').innerHTML = "**Name cannot be less than 3 characters";
        return false;
    }
    if ((phone.length < 10) || (phone.length >10)) {
        document.getElementById('error1').innerHTML = "**Please Enter a valid mobile number";
        return false;
    }
    if (email == "") {
        document.getElementById('error2').innerHTML = "**Please Enter valid Email";
        return false;
    }
    if (email.indexOf ('@')<=0) {
        document.getElementById('error2').innerHTML = "**@ is placed in an invalid location";
        return false;
    }
    if ((email.charAt(email.length-4)!= '.') && (email.charAt(email.length-3)!= '.')) {
        document.getElementById('error2').innerHTML = "**Please enter a valid Extension";
        return false;
    }
    if (cq == "") {
        document.getElementById('error3').innerHTML = "**Please Enter a Comment/Query";
        return false;
    }
    if ((cq.length <=4 ) || (cq.length >=101)) {
        document.getElementById('error3').innerHTML = "**Invalid Comment/Query Size";
        return false;
    }
}


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

var myIndex1 = 0;
carousel1();

function carousel1() {
    var j;
    var y = document.getElementsByClassName("feinfo");
    for (j = 0; j < y.length; j++) {
        y[j].style.display = "none";
    }
    myIndex1++;
    if (myIndex1 > y.length) { myIndex1 = 1 }
    y[myIndex1 - 1].style.display = "block";
    setTimeout(carousel1, 5000); // Change image every 5 seconds
}