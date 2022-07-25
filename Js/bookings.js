var date = new Date();
var tdate = date.getDate();
var month = date.getMonth() + 1;
if(tdate<10){
    tdate = '0' + tdate;
}
if(month<10){
    month = '0' + month;
}
var year = date.getUTCFullYear();
var mindate = year + '-' + month + '-' + tdate;
document.getElementById("indate").setAttribute("min" , mindate);



var date = new Date();
var today = new Date();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds() ;
var tdate = date.getDate();

if(time > '12:00:00'){
    tdate = date.getDate() +1;
}
else{
    tdate = date.getDate();
}
var month = date.getMonth() + 1;
if(tdate<10){
    tdate = '0' + tdate;
}
if(month<10){
    month = '0' + month;
}

var year = date.getUTCFullYear();
var mindate = year + '-' + month + '-' + tdate;
document.getElementById("outdate").setAttribute("min" , mindate);





function showimg(){

    var room = document.getElementById("choose").value ;
    if(room == "King Room"){
        document.getElementById("Kr").style.display = "block";
        document.getElementById("Dr").style.display = "none";
        document.getElementById("Tr").style.display = "none";
        document.getElementById("KSr").style.display = "none";
        document.getElementById("LSr").style.display = "none";
        document.getElementById("LDr").style.display = "none";
        document.getElementById("UWDr").style.display = "none";
        document.getElementById("UWLr").style.display = "none";
        document.getElementById("UWTr").style.display = "none";
        document.getElementById("I").style.display = "none";
    }
    else if(room == "DeLuxe Room"){
        document.getElementById("Kr").style.display = "none";
        document.getElementById("Dr").style.display = "block";
        document.getElementById("Tr").style.display = "none";
        document.getElementById("KSr").style.display = "none";
        document.getElementById("LSr").style.display = "none";
        document.getElementById("LDr").style.display = "none";
        document.getElementById("UWDr").style.display = "none";
        document.getElementById("UWLr").style.display = "none";
        document.getElementById("UWTr").style.display = "none";
        document.getElementById("I").style.display = "none";
    }
    else if(room == "Twin DeLuxe Room"){
        document.getElementById("Kr").style.display = "none";
        document.getElementById("Dr").style.display = "none";
        document.getElementById("Tr").style.display = "block";
        document.getElementById("KSr").style.display = "none";
        document.getElementById("LSr").style.display = "none";
        document.getElementById("LDr").style.display = "none";
        document.getElementById("UWDr").style.display = "none";
        document.getElementById("UWLr").style.display = "none";
        document.getElementById("UWTr").style.display = "none";
        document.getElementById("I").style.display = "none";
    }
    else if(room == "King Suite"){
        document.getElementById("Kr").style.display = "none";
        document.getElementById("Dr").style.display = "none";
        document.getElementById("Tr").style.display = "none";
        document.getElementById("KSr").style.display = "block";
        document.getElementById("LSr").style.display = "none";
        document.getElementById("LDr").style.display = "none";
        document.getElementById("UWDr").style.display = "none";
        document.getElementById("UWLr").style.display = "none";
        document.getElementById("UWTr").style.display = "none";
        document.getElementById("I").style.display = "none";
    }
    else if(room == "Luxury Suite"){
        document.getElementById("Kr").style.display = "none";
        document.getElementById("Dr").style.display = "none";
        document.getElementById("Tr").style.display = "none";
        document.getElementById("KSr").style.display = "none";
        document.getElementById("LSr").style.display = "block";
        document.getElementById("LDr").style.display = "none";
        document.getElementById("UWDr").style.display = "none";
        document.getElementById("UWLr").style.display = "none";
        document.getElementById("UWTr").style.display = "none";
        document.getElementById("I").style.display = "none";
    }
    else if(room == "Luxury DeLuxe Suite"){
        document.getElementById("Kr").style.display = "none";
        document.getElementById("Dr").style.display = "none";
        document.getElementById("Tr").style.display = "none";
        document.getElementById("KSr").style.display = "none";
        document.getElementById("LSr").style.display = "none";
        document.getElementById("LDr").style.display = "block";
        document.getElementById("UWDr").style.display = "none";
        document.getElementById("UWLr").style.display = "none";
        document.getElementById("UWTr").style.display = "none";
        document.getElementById("I").style.display = "none";
    }
    else if(room == "UW King Suite"){
        document.getElementById("Kr").style.display = "none";
        document.getElementById("Dr").style.display = "none";
        document.getElementById("Tr").style.display = "none";
        document.getElementById("KSr").style.display = "none";
        document.getElementById("LSr").style.display = "none";
        document.getElementById("LDr").style.display = "none";
        document.getElementById("UWDr").style.display = "block";
        document.getElementById("UWLr").style.display = "none";
        document.getElementById("UWTr").style.display = "none";
        document.getElementById("I").style.display = "none";
    }
    else if(room == "UW Luxury Suite"){
        document.getElementById("Kr").style.display = "none";
        document.getElementById("Dr").style.display = "none";
        document.getElementById("Tr").style.display = "none";
        document.getElementById("KSr").style.display = "none";
        document.getElementById("LSr").style.display = "none";
        document.getElementById("LDr").style.display = "none";
        document.getElementById("UWDr").style.display = "none";
        document.getElementById("UWLr").style.display = "block";
        document.getElementById("UWTr").style.display = "none";
        document.getElementById("I").style.display = "none";
    }
    else if(room == "UW TwinDeLuxe Suite"){
        document.getElementById("Kr").style.display = "none";
        document.getElementById("Dr").style.display = "none";
        document.getElementById("Tr").style.display = "none";
        document.getElementById("KSr").style.display = "none";
        document.getElementById("LSr").style.display = "none";
        document.getElementById("LDr").style.display = "none";
        document.getElementById("UWDr").style.display = "none";
        document.getElementById("UWLr").style.display = "none";
        document.getElementById("UWTr").style.display = "block";
        document.getElementById("I").style.display = "none";
    }
    else if(room == "empty"){
        document.getElementById("Kr").style.display = "none";
        document.getElementById("Dr").style.display = "none";
        document.getElementById("Tr").style.display = "none";
        document.getElementById("KSr").style.display = "none";
        document.getElementById("LSr").style.display = "none";
        document.getElementById("LDr").style.display = "none";
        document.getElementById("UWDr").style.display = "none";
        document.getElementById("UWLr").style.display = "none";
        document.getElementById("UWTr").style.display = "none";
        document.getElementById("I").style.display = "block";
    }
    
}    



function validate() {

    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var members = document.getElementById('members').value;
    var choose = document.getElementById('choose').value;
    var indate = document.getElementById('indate').value;
    var outdate = document.getElementById('outdate').value;
    

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
    if (members == "") {
        document.getElementById('error3').innerHTML = "**Please Enter no. of Members";
        return false;
    }
    if (choose == "empty") {
        document.getElementById('error4').innerHTML = "**Please Select a Room";
        return false;
    }
    if (indate == "") {
        document.getElementById('error5').innerHTML = "**Please select Check-In date"
        return false;
    }
    if (outdate == "") {
        document.getElementById('error6').innerHTML = "**Please select Check-Out date"
        return false;
    }
    if (outdate < indate) {
        document.getElementById('error6').innerHTML = "**Please select valid Check-Out date"
        return false;
    }
}






burger = document.querySelector('.burger')
navbar = document.querySelector('.navbar')
navlist = document.querySelector('.navlist')

burger.addEventListener('click', () => {
    navbar.classList.toggle('h-nav');
    navlist.classList.toggle('v-class');
})