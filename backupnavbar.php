<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: white;
  font-family: Arial, Helvetica, sans-serif;
  
}

.navbar a {
 
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Logo Style */

.logo {
  padding: 100px;

}

.tylexlogo {
  position: absolute;
  top: 20px;
  margin-left: 230px;
  margin-bottom: -10px;
}


/* Sidebar Style */

.sidebar {
  margin-left: 110px;
  margin-top: -40px;
  width: 200px;
  height: 200%;
  overflow: hidden;
}

.sidebar a {
  display: block;
  color: black;
  padding: 20px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: black;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #d1cdcd;
  color: white;
}

.sidebar-content{
  display: none;
  position: fixed;
  background-color: red;
  width: 100%;
  left: 0;
  z-index: 1;
}

.dropdown {
  float: right;
  overflow: hidden;
  
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 20px 20px;
  background-color: white;
  font: inherit;
  margin: 0;
  cursor: pointer;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: black;
  color: white;
}

.dropdown-content {
  display: none;
  position: fixed;
  background-color: white;
  width: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown:hover .dropdown-content {
  display: block;
  
}

/* Product Display In Sidebar */

.column1 {
  position: absolute;
  top: 200px;
  right: 950px;
  width: 10%;
  background-color: #ededed;
  height: 200px;
  border-radius: 15px;
}

.column2 {
  position: absolute;
  top: 200px;
  right: 700px;
  width: 10%;
  background-color: #ededed;
  height: 200px;
  border-radius: 15px;
}

.column3 {
  position: absolute;
  top: 200px;
  right: 450px;
  width: 10%;
  background-color: #ededed;
  height: 200px;
  border-radius: 15px;
}

.column4 {
  position: absolute;
  top: 200px;
  right: 200px;
  width: 10%;
  background-color: #ededed;
  height: 200px;
  border-radius: 15px;
}

.column {
  position: absolute;
  top: 200px;
  right: 1200px;
  width: 10%;
  background-color: #ededed;
  height: 200px;
  border-radius: 15px;
  
}

.column a {
  float: none;
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}


/* Side Bar Product Name */
.text1 {
position: absolute;
top: 150px;
left: 35px;
font-family: sans-serif;
color: black;
}

.text2 {
position: absolute;
top: 150px;
left: 35px;
font-family: sans-serif;
color: black;
}

.text3 {
position: absolute;
top: 150px;
left: 5px;
font-family: sans-serif;
color: black;
}

.text4 {
position: absolute;
top: 150px;
left: 35px;
font-family: sans-serif;
color: black;
}

.text5 {
position: absolute;
top: 150px;
left: 5px;
font-family: sans-serif;
color: black;
}





/*Carousel Style*/
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: absolute;
  bottom: 130px;
  right:900px;
  margin: 0;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 2s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


</style>


</head>


<body style="background-color:white;">
<div class="tylexlogo">
<img src="img\TYLEX_Black.png" alt="HTML5 Icon" style="width:80px;height:20px;">
</div>
<div class="navbar">
<div class="dropdown">
    
    <button class="dropbtn">Productivity
    </button>
    <div class="dropdown-content">
    
      <div class="header">
      <div class="logo">
      <div class="sidebar">
      <img src="img\logo\productivity.png" alt="HTML5 Icon" style="width:200px;height:80px;"> 
      <a href="#home">Desktop Accessories</a>
     <a href="#news">Gaming Computer Accessories</a>
     <a href="#contact">Office Computer Accessories</a>
      </div>
      <div class="text1">
      <div class="column">
        <img src="img\Audio\HEADPHONES\X-G77.png" alt="HTML5 Icon" style="width:150px;height:150px;">
        <a href="#1">Tylex X-G77 </a> 
        </div> 
        </div> 
      </div> 
      </div>  
    </div>
  </div> 

<div class="dropdown">
    
    <button class="dropbtn">Content Creation
    </button>
    <div class="dropdown-content">
    
      <div class="header">
      <div class="logo">
      <div class="sidebar">
      <img src="img\logo\content.png" alt="HTML5 Icon" style="width:200px;height:80px;"> 
      <a href="#home">Content Creation</a>
      </div>
      <div class="text1">
      <div class="column">
        <img src="img\Audio\HEADPHONES\X-G77.png" alt="HTML5 Icon" style="width:150px;height:150px;">
        <a href="#1">Tylex X-G77 </a> 
        </div>
        </div> 
      </div> 
      </div>  
    </div>
  </div> 

  <div class="dropdown">
    
    <button class="dropbtn">Automotives
    </button>
    <div class="dropdown-content">
      <div class="header">
      <div class="logo">
      <div class="sidebar">
      <img src="img\logo\automotive.png" alt="HTML5 Icon" style="width:200px;height:80px;"> 
      <a href="#home">Car Accessories</a>
     <a href="#news">Phone Charger Holder</a>
      </div>
      <div class="text1">
      <div class="column">
        <img src="img\Audio\HEADPHONES\X-G77.png" alt="HTML5 Icon" style="width:150px;height:150px;">
        <a href="#1">Tylex X-G77 </a> 
        </div>
        </div> 
      </div> 
      </div>  
    </div>
  </div>  
 
  <div class="dropdown">
    
    <button class="dropbtn">Life Style
    </button>
    <div class="dropdown-content">
    
      <div class="header">
      <div class="logo">
      <div class="sidebar">
      <img src="img\logo\lifestyle.png" alt="HTML5 Icon" style="width:200px;height:80px;"> 
      <a href="#home">Neck Fan</a>
     <a href="#news">Desk Fan</a>
     <a href="#contact">Home Improvement</a>
     <a href="#about">Handheld</a>
      </div>
      <div class="text1">
      <div class="column">
        <img src="img\Audio\HEADPHONES\X-G77.png" alt="HTML5 Icon" style="width:150px;height:150px;">
        <a href="#1">Tylex X-G77 </a> 
        </div>
        </div> 
      </div> 
      </div>  
    </div>
  </div> 

  <div class="dropdown">
    
    <button class="dropbtn">Power Collection
    </button>
    <div class="dropdown-content">
    
      <div class="header">
      <div class="logo">
      <div class="sidebar">
      <img src="img\logo\power-logo.png" alt="HTML5 Icon" style="width:200px;height:80px;"> 
      <a href="#news">Power Station</a>
     <a href="#news">Pocket Powerbank</a>
     <a href="#contact">Cable</a>
     <a href="#about">Charger</a>
     <a href="#about">Powerstrip</a> 
     </div> 
      <div class="text1">
      <div class="product1">
      <div class="column">
        <img src="img\Audio\IN EAR EARPHONES\XK201 - Purple.png" alt="HTML5 Icon" style="width:150px;height:150px;">
        <a href="#1">Tylex X-G77 </a> 
        </div>
        </div>
        </div> 
      </div> 
      </div>  
    </div>
  </div> 

  <div class="dropdown">
    
    <button class="dropbtn">Audio
    </button>
    <div class="dropdown-content">
    
      <div class="header">
      <div class="logo">
      <div class="sidebar">
      <img src="img\audiologo.png" alt="HTML5 Icon" style="width:200px;height:80px;"> 
      <a href="#home">Microphone</a>
     <a href="#news">In-ear-earphone</a>
     <a href="#contact">Headphone</a>
     <a href="#about">Speakers</a>
      <div class="column">
        <img src="img\Audio\HEADPHONES\X-G77.png" alt="HTML5 Icon" style="width:150px;height:150px;position:absolute; left: 0px; top: 10px;">
        <div class="text1">
        <a href="#1">Tylex X-G77 </a> 
        </div>
        </div>
      <div class="column1">
        <img src="img\Audio\HEADPHONES\X10.png" alt="HTML5 Icon" style="width:120px;height:150px; position:absolute; left: 40px; top: 10px;">
        <div class="text2">
        <a href="#1">Tylex X10 </a> 
        </div>
        </div>
        <div class="column2">
        <img src="img\Audio\HEADPHONES\XK-910BTR.png" alt="HTML5 Icon" style="width:110px;height:150px;position:absolute; left: 40px; top: 10px;">
        <div class="text3">
        <a href="#1">Tylex XK-910BTR</a> 
        </div>
        </div>
        <div class="column3">
        <img src="img\Audio\HEADPHONES\S4000.png" alt="HTML5 Icon" style="width:150px;height:150px; position:absolute; left: 20px; top: 10px;">
        <div class="text4">
        <a href="#1">Tylex S4000</a> 
        </div>
        </div>
        <div class="column4">
        <img src="img\Audio\HEADPHONES\XK330BTR.png" alt="HTML5 Icon" style="width:110px;height:150px;position:absolute; left: 40px; top: 10px;">
        <div class="text5">
        <a href="#1">Tylex XK330BTR</a> 
        </div>
        </div>
        </div> 
      </div> 
      </div>  
      </div>
    </div>
  </div> 
  </div> 

  </div> 

  
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img\Banner\1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img\Banner\2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img\Banner\3.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="slideshow-container">
  <div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
<br>



<script>

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
