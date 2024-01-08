<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <nav>
        <a href="index.php" target="_blank">HOME</a>
        <a href="">ABOUT US</a>
        <a href="" target="_blank">CATEGORIES</a>
        <a href="">CONTACT US</a>
        
        <div class="yo">
            <a href="">Welcome <?php echo $row["name"]; ?></a>
            <a href="logout.php">Logout</a>
        </div>
    </nav>
    <p class="one">"ONE STEP <br>TO GO"</p>
    <p class="book">Book an E- appointment <br>and get a complete diagnosis at<br>“Appointmentlelo”</p>
    <a href="search_doctor.php"><button class="getstarted" id="getstart">Get Started</button></a>
    <img src="New_Project_2.png" alt="" class="logo">
    <p class="appoint">APPOINTMENTLELO</p>
    <p class="ex1"> Doctor’s e-appointment & <br>consultant booking</p>
    <div class="ex2"><p>Best doctors and best consultancy given at one <br>platform just few clicks to go... </p></div>
    <button class="rm1">Read more</button>
    <div class="lblue"></div>
    <p class="service">Our Services</p>
    <p class="subservice">Top most features to book or consultant with doctor</p>
    <div class="white1">
        <div class="wwimg1"></div>
        <p class="ww1">Organized Report</p>
        <p class="ww2">Reports available on up to date <br>time </p>
    </div>
    <div class="white2">
        <div class="wwimg2"></div>
        <p class="ww3">24 Hours Service</p>
        <p class="ww4">24 Hours service available at any time</p>
    </div>
    <div class="white3">
        <div class="wwimg3"></div>
        <p class="ww5">E-appointments</p>
        <p class="ww6">Book your E-appointments at any time on any day</p>
    </div>
    <button class="b1">Read more</button>
    <button class="b2">Read more</button>
    <button class="b3">Read more</button>
    <p class="diffdoc1">Different doctors , different hospitals at one place....  </p>
    <p class="diffdoc2">Collabration of 100+ Doctors & 50+ Hospitals throughout vadodara.<br><br> It’s esay to book E-appointments for patients to consultant with doctors . </p>
    <button class="diffdoc">Read more</button>
    <div class="heart">
        <p class="hearttext1">Appointmentlelo</p>
        <p class="hearttext2">“We are love to connect with each & everyone who are unable to <br>get an appointments at a time” </p>
    </div>
    <p class="afterheart">We Are Trusted By Leading Hospitals & Pharma Companies</p>
    <div class="zydus"></div>
    <div class="apollo"></div>
    <div class="riboxx"></div>
    <div class="bs">
        <div class="bsimg"></div>
        <img src="New_Project_2.png" alt="" class="bslogo">
        <p class="bstext1">Want to work with Appointmentlelo?</p>
        <p class="bstext2">To be part of health community and built worldwide E-appointment system.</p>
        <button class="bsbutton">Read more</button>
    </div>
    <div class="ls">
        <p class="lsh1">Specializations</p>
        <ul class="lst1">
            <li>Dental</li>
            <li>Gastroenterology</li>
            <li>Ophthalmology</li>
            <li>Dermatology</li>
            <li>Pediatrics</li>
            <li>Ear-Nose-Throat (ENT)</li>
            <li>Gynaecology/Obstetrician</li>
            <li>Neurology</li>
            <li>Ayurveda</li>
            <li>Cardiology</li>
            <li>Urology</li>
            <li>Homeopathy</li>
            <li>Surgical Oncology</li>
        </ul>
        <p class="lsh2">Site Index</p>
        <a href="#" class="lst2_1">Terms & Conditions</a>
        <a href="#" class="lst2_2">FAQ</a>
        <a href="#" class="lst2_3">Career</a>
        <a href="#" class="lsh3">Contact Us</a>
        <p class="lst3">Parul University,<br>Waghodia Rd., limda<br> Vadodara-390001</p>
        <p class="ls_ex">Are You A Doctor? </p>
        <button class="ls_button">Register</button>
    </div>
    <footer><p class="footerp">Copyright &copy; 2023, 0p Corporation Ltd. All Rights Reserved </p><br><br>
        <a href="">About us</a>
        <a href="">Privacy policy</a>
        <a href="">Terms of Use</a></footer>
</body>
</html>