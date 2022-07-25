<?php
if(isset($_POST['submit'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($server , $username , $password);

    if(!$connect){
        die("Connection failed due to " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $cq = $_POST['cq'];

    $sql = "INSERT INTO `hotel`.`feedback` ( `Name`, `Phone No.`, `Email`, `Cq`, `DT`) VALUES ( '$name', '$phone', '$email', '$cq', current_timestamp())";


    if($connect->query($sql) == true){
        echo "<script> alert ('Thank you for your Feedback')</script>";
    }
    else{
        echo "Error: $sql <br> $connect->error";
    }

    $connect->close();
}
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f741849539.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Css/Feedback.css">
    <link rel="stylesheet" href="Css/common.css">
    <link rel="stylesheet" href="Css/Responsive.css">
    <title>Hotel De-Luxe - Feedback</title>
</head>

<body>
<nav class="navbar h-nav" id="Up">
        <ul class="navlist v-class">
            <div class="logo">
                <img src="Img/HotelLogo.png" alt="Logo">
            </div>
            <a href="index.html" class="dropbtn"><i class="fas fa-home"></i> Home</a>
            <div class="dropdown">
                <a href="feedback.php" class="active"><i class="fas fa-globe-americas"></i> Explore</a>
                <div class="dropdown-content">
                    <a href="dining.html"><i class="fas fa-utensils"></i> Dining</a>
                    <a href="fitness.html" class="active"><i class="fas fa-dumbbell"></i> Fitness</a>
                    <a href="amenities.html"><i class="fas fa-star"></i> Amenities</a>
                </div>
            </div>
            <a href="bookings.php" class="dropbtn"><i class="fas fa-address-book"></i> Bookings</a>
            <a href="Contact.html" class="dropbtn"><i class="fas fa-phone-alt"></i> Contact</a>
            <a href="feedback.php" class="dropbtn"><i class="fas fa-comment-dots"></i> Feedback</a>
        </ul>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <div class="feedbackcontainer">
        <img class="mySlides" src="Img/Feedback1.jpg">
        <div class="feinfo">
            <br>
            <h2>FeedBack</h2>
            <span></span><br>
            <p>
                We're here to evolve and grow. Drop your Feedback and let us know your Experience at Hotel De-Luxe has
                been.

            </p><br>
        </div>
        <img class="mySlides" src="Img/Feedback2.jpg">
        <div class="feinfo">
            <br>
            <h2>FAQs</h2>
            <span></span><br>
            <p>
                Drop your Enquiries and our Personnel will reach out at the earliest.

            </p><br>
        </div>
    </div>
    <div class="formcontainer">
        <br>
        <h1 class="heading">Feedback</h1>
        <div class="form"><br>
            <form action="Feedback.php" onsubmit="return validate()" method="POST">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Enter Your Name" autocomplete="off">
                <span id="error"> </span>
                <br>
                <label for="phone">Phone No:</label>
                <input type="number" name="phone" id="phone" placeholder="Enter Your Phone No." autocomplete="off">
                <span id="error1"> </span>
                <br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter Your Email ID" autocomplete="off">
                <span id="error2"> </span>
                <br>
                <label for="cq">Comments/Enquiries:</label>
                <textarea name="cq" id="cq" cols="10" rows="10"
                    placeholder="Enter Your Comments/Enquiries" autocomplete="off"></textarea>
                <span id="error3"> </span>
                <br>
                <input type="submit" value="Submit" name="submit" class="submit"><br><br>
            </form>
            <br>
        </div>
    </div>


    <div class="faqcontainer">
        <h1 class="heading">FAQs</h1>
        <div class="Faqbox">
            <br>
            <h2>Bookings</h2>
            <span></span><br>
            <p class="questions">Do I need to pay a security deposit at Atlantis Dubai? </p>
            <p class="answers">A deposit of AED 500 per night is required at check-in for guests who would like to
                charge purchases and incidentals to their room.</p><br>
            <p class="questions">What time is check-in and check-out at Atlantis Dubai?</p>
            <p class="answers">Check-in time is 3:00pm and check-out time is 12:00pm.</p><br>
            <p class="questions">Do you offer All Inclusive Packages? </p>
            <p class="answers">No, we only offer Bed and Breakfast, and Half Board Packages.</p>
            <br>
            <h2>Rooms</h2>
            <span></span><br>
            <p class="questions">Can you smoke in the rooms at Atlantis Dubai?</p>
            <p class="answers">We have separate smoking floors at Atlantis Dubai. The smoking rooms can be requested in
                advance, however, rooms are strictly subject to availability.</p><br>
            <p class="questions">Do you provide an iron and board in the rooms? </p>
            <p class="answers">Yes, an iron and ironing board are provided in all the rooms at Atlantis Dubai.</p><br>
        </div>
    </div>
    <footer>
        <div class="scroll">
            <h2>Scroll Up: </h2><a href="#Up"><i class="fas fa-arrow-circle-up fa-2x"></i></a>
        </div>
        <h2>Connect with Us:</h2>
        <div class="sm">
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
        </div>
        Copyright &copy; 2021 Hotel De-Luxe Company Limited . All rights reserved .
    </footer>
</body>
<script src="Js/feedback.js"></script>

</html>
