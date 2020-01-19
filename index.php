<!DOCTYPE html>
<html>
<title>Hospital System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="h.png">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('img/build.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("/w3images/parallax2.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("image/.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="index.php" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <!--<a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>-->
    <!--<a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>-->

      <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-user"></i> LOGIN ll SIGN UP</a>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    

  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
     <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-red w3-opacity-min"><b>H O S P I T A L</b></span> <span class="w3-hide-small w3-text-white">MANAGEMENT SYSTEM</span></h1>
     <!--center><h4><a>EFFICIENT DOCTOR PATIENT</a></h4></center-->
    <center><h4><span class="w3-hide-small w3-text-white">Efficient doctor patient portal</span></h4></center>

  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT</h3>
  <p class="w3-center"><em>Efficient Doctor Patient</em></p>
  <p> Efficient doctor patient portal is a managing system that helps doctors as well as the patients by providing options of booking appointments as per the convenience of both doctor and patients with the motive of medical progress.
      Through this system, doctors can easily manage the appointment slots online.
      System will make all the empty slots visibly available to the patients, which are booked by the name of any particular patient.
      The system makes it easy to manage various doctors and their availability on various dates and timings.
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <img src="img/hospital.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="1440" height="900" text-align="center">
    </div>
    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
    <p>Doctors maintain the medical history of the patient into their database so that every time any particular patient logs into the system, he/she can easily access their complete medical history whenever needed.
      In addition, it helps the doctor to refer their patient’s medical history for any further prescriptions. This allows for an automated patient doctor handling system through an online interface.
      The system also contains an organ donor module. This module has an option for the registration of organ donation along with an organ search option.
      The module design helps to fulfill the urgent organ requirements through easy/instant searches.</p>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
  <div class="column">
    <div class="card">
      <img src=".../../img/Hossni.JPG" alt="Jane" style="width:100% " >
      <div class="container">
        <h2>Husnee Sama</h2>
        <p class="title">Programmer Backend & Art Director</p>
        <p>A back-end developer is a type of programmer who creates the logical back-end and 
        core computational logic of a website, software or information system. .</p>
        <p>the.sweet-prince@hotmail.com</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src=".../../img/Sabree.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Sobree Malaeh</h2>
        <p class="title">Designer Frontend</p>
        <p>Front end developers use HTML, CSS, and JavaScript to code the website and 
        web app designs created by web designers.</p>
        <p>Sabrifatani9@gmail.com</p>
        
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src=".../../img/Hassan.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>HASSAN-Z</h2>
        <p class="title">Assistant</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>sano0o.saiburi@gmail.com</p>
        
      </div>
    </div>
  </div>

<div class="column">
    <div class="card">
      <img src=".../../img/Abdo.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Abdulallah Sharif</h2>
        <p class="title">Assistant</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>shefo.AS3@gmail.com</p>
        
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="w3-center w3 w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p> Refrence <a href="https://www.w3schools.com/w3css/default.asp" title= "W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
</body>
</html>
