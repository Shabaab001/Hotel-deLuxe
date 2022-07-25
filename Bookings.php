<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if(isset($_POST['proceed'])){
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$members = $_POST['members'];
$choose = $_POST['choose'];
$indate = $_POST['indate'];
$outdate = $_POST['outdate'];
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `hotel`.`bookings` (`Name`, `Phone`, `Email`, `Members`, `Room`, `CheckIn`, `CheckOut`, `DT`) VALUES ( '$name', '$phone', '$email', '$members', '$choose', '$indate', '$outdate', current_timestamp())";

if (mysqli_query($conn, $sql)) {
    echo "<script> alert('Successfully Booked') </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql1 = "SELECT * FROM bookings WHERE SNo=(SELECT max(Sno) FROM bookings)";
$result = mysqli_query($conn , $sql1);
$row = mysqli_fetch_array($result);


function datechange($date1 ,$date2){
    $indate = $_POST['indate'];
    $outdate = $_POST['outdate'];

    $diff = strtotime($outdate) - strtotime($indate);
    return ceil(abs($diff/86400));
}

$nights = datechange($indate , $outdate);
$tax = 200*$nights;


$price = 0;
if($row['Room'] == "King Room"){
$price += 1500;
}
else if($row['Room'] == "DeLuxe Room"){
$price += 2000;
}
else if($row['Room'] == "Twin DeLuxe Room"){
$price += 2500;
}
else if($row['Room'] == "King Suite"){
$price += 3500;
}
else if($row['Room'] == "Luxury Suite"){
$price += 5000;
}
else if($row['Room'] == "Luxury DeLuxe Suite"){
$price += 6000;
}
else if($row['Room'] == "UW King Suite"){
$price += 9000;
}
else if($row['Room'] == "UW Luxury Suite"){
$price += 10000;
}
else if($row['Room'] == "UW TwinDeLuxe Suite"){
$price += 12000;
}

$total = $price + $tax;
$rs = $total*20.28; 


mysqli_close($conn);
}

?>    



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f741849539.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Css/Booking.css">
    <link rel="stylesheet" href="Css/common.css">
    <link rel="stylesheet" href="Css/Responsive.css">
    <title>Hotel De-Luxe - Bookings</title>
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
    <br>
        <h1 class="heading">Book Now!</h1>
        <br>
    <div class="bookingcontainer">
        <form action="Bookings.php" onsubmit="return validate()"  method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter Your Name" autocomplete="off">
            <span id="error"></span><br>
            <label for="phone">Phone No:</label>
            <input type="number" name="phone" id="phone" placeholder="Enter Your Phone Number" autocomplete="off">
            <span id="error1"></span><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter Your Email" autocomplete="off">
            <span id="error2"></span><br>
            <label for="members">Members:</label>
            <input type="number" name="members" id="members" placeholder="Enter no. of people">
            <span id="error3"></span><br>
            <label for="roomtype">Select a Room:</label>
            <select name="choose" id="choose" onchange="showimg(this.value);" class="option">
                <option value="empty">--Select Room--</option>
                <optgroup label="Guest Rooms">
                    <option value="King Room">King Room</option>
                    <option value="DeLuxe Room">De-Luxe Room</option>
                    <option value="Twin DeLuxe Room">Twin De-Luxe Room</option>
                </optgroup>
                <optgroup label="Suites">
                    <option value="King Suite">King Suite</option>
                    <option value="Luxury Suite">Luxury Suite</option>
                    <option value="Luxury DeLuxe Suite">Luxury De-Luxe Suite</option>
                </optgroup>
                <optgroup label="UnderWaterSuites">
                    <option value="UW King Suite">UW King Suite</option>
                    <option value="UW Luxury Suite">UW Luxury Suite</option>
                    <option value="UW TwinDeLuxe Suite">UW Luxury Twin De-Luxe Suite</option>
                </optgroup>
            </select><span id="error4"></span><br>
            <label for="indate">Select Check-In Date:</label>
            <input type="date" name="indate" id="indate" placeholder="Check-In Date">
            <span id="error5"></span><br>
            <label for="outdate">Select Check-Out Date:</label>
            <input type="date" name="outdate" id="outdate" placeholder="Check-Out Date">
            <span id="error6"></span><br>
            <input type="submit" value="Proceed" name="proceed" class="submit"><br>
            <a href="index.html"><input type="button" value="Cancel" name="cancel" class="submit"></a><br><br>
            
            <br>
        </form>

        <div id="formimg">
            <h1 class="heading">Room Type:</h1>
            <img src="Img/HotelRoom1.jpg" alt="" id="Kr">
            <img src="Img/HotelRoom1A.jpg" alt="" id="Dr">
            <img src="Img/HotelRoom1B.PNG" alt="" id="Tr">
            <img src="Img/HotelRoomB.jpg" alt="" id="KSr">
            <img src="Img/HotelRoom3.jpg" alt="" id="LSr">
            <img src="Img/HotelRoom3A.jpeg" alt="" id="LDr">
            <img src="Img/HotelRoom4.jpg" alt="" id="UWDr">
            <img src="Img/HotelRoom5.jpg" alt="" id="UWLr">
            <img src="Img/HotelRoom6.jpg" alt="" id="UWTr">
            <img src="Img/Hotelintro1.jpeg" alt="" id="I">
        </div>
        
    </div>
    <div class="details">
        <?php

        echo "<br>";

        if(isset($_POST['proceed'])){
         echo  "<br><h1 class='heading'>Bill Details</h1><br>";
         echo "<div class='bill'>
                Name: $row[Name]<br><br>
                Phone: $row[Phone]<br><br>
                Email: $row[Email]<br><br>
                Members: $row[Members]<br><br>
                Check-In: $row[CheckIn]<br><br>
                Check-Out: $row[CheckOut]<br><br>
                No. of Nights: $nights<br><br>
                Total: AED $price<br><br>
                Tax: AED $tax<br><br>
                Grand Total: AED $total<br><br>
                Grand Total in INR (approx): Rs. $rs<br><br>
                <button class='pay'><a href='https://www.icicibank.com/Personal-Banking/insta-banking/internet-banking/index.page' target='_blank'>PAY</a></button><br><br>
                </div>";
        }   
        ?>
        <br>
        
    </div>
    <br>
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
<script src="Js/bookings.js"></script>
</html>