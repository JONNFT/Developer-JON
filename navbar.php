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
  margin-top: -30px;
  width: 200px;
  height: 200%;
  overflow: hidden;
}

.sidebar a {
  display: block;
  color: white;
  padding: 20px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #9c9c9c;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #9c9c9c;
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
  height:30%;
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
  top: 20px;
  right: 950px;
  width: 10%;
  background-color: #ededed;
  height: 200px;
  border-radius: 15px;
}

.column2 {
  position: absolute;
  top: 20px;
  right: 700px;
  width: 10%;
  background-color: #ededed;
  height: 200px;
  border-radius: 15px;
}

.column3 {
  position: absolute;
  top: 20px;
  right: 450px;
  width: 10%;
  background-color: #ededed;
  height: 200px;
  border-radius: 15px;
}

.column4 {
  position: absolute;
  top: 20px;
  right: 200px;
  width: 10%;
  background-color: #ededed;
  height: 200px;
  border-radius: 15px;
}

.column {
  position: absolute;
  top: 20px;
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
left: 55px;
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
left: 45px;
font-family: sans-serif;
color: black;
}

.text4 {
position: absolute;
top: 150px;
left: 65px;
font-family: sans-serif;
color: black;
}

.text5 {
position: absolute;
top: 150px;
left: 115px;
font-family: sans-serif;
color: black;
text-align: center;
}

/* PRODUCT SHOW MORE */
.container {
  position: relative;
  width: 50%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 150px;
  left: 60px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text10 {
  border-radius: 10px;
  position:absolute;
  left: -20px;
  top:-90px;
  background-color: #d4d4d4;
  color: white;
  font-size: 16px;
  padding: 5px 30px;
  cursor: pointer;
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
      <img src="img\logo\productivity.png" alt="HTML5 Icon" style="width:200px;height:50px;"> 
      </div>
      <div class="column">
             <div class="container">
              <img src="img\Productive\DESKTOP ACCESORIES\XL03.png" class="image" style="width:80px; height:150px;position:absolute; left: 50px; top: 10px;">
                <div class="middle">
                 <div class="text10">Show More >></div>
                </div>
            </div>
        <div class="text1">
        <p>Desktop Accessories </p> 
        </div>
        </div>
      <div class="column1">
      <div class="container">
        <img src="img\Productive\GAMING COMPUTER ACCESORIES\XZ66.png" class="image" style="width:140px;height:90px; position:absolute; left: 30px; top: 40px;">
        <div class="middle">
        <div class="text10">Show More >></div>
        </div>
        </div>
        <div class="text2">
        <p>Gaming Computer Accessories </p> 
        </div>
        </div>
        <div class="column2">
        <div class="container">
        <img src="img\Productive\OFFICE COMPUTER ACCESORIES\Product.png" class="image" style="width:100px;height:130px;position:absolute; left: 40px; top: 20px;">
        <div class="middle">
        <div class="text10">Show More >></div>
        </div>
        </div>
        <div class="text3">
        <p>Office Computer Accessories</p> 
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
      </div>
      <div class="column">
             <div class="container">
              <img src="img\Content Creation\content-c.png" class="image" style="width:160px; height:160px;position:absolute; left: 10px; top: 10px;">
                <div class="middle">
                 <div class="text10">Show More >></div>
                </div>
            </div>
        <div class="text1">
        <p>Content Creation </p> 
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
      <img src="img\logo\automotive.png" alt="HTML5 Icon" style="width:200px;height:50px;"> 
      </div>
      <div class="column">
             <div class="container">
              <img src="img\Automotives\CAR ACCESORIES\A15.png" class="image" style="width:180px; height:180px;position:absolute; left: 10px; top: -10px;">
                <div class="middle">
                 <div class="text10">Show More >></div>
                </div>
            </div>
        <div class="text1">
        <p>Car Accessories </p> 
        </div>
        </div>
      <div class="column1">
      <div class="container">
        <img src="img\Automotives\PHONE CHARGER HOLDER\XL33.png" class="image" style="width:140px;height:150px; position:absolute; left: 30px; top: 10px;">
        <div class="middle">
        <div class="text10">Show More >></div>
        </div>
        </div>
        <div class="text2">
        <p>Phone Charger Holder </p> 
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
      <img src="img\logo\lifestyle.png" alt="HTML5 Icon" style="width:200px;height:90px;"> 
      </div>
      <div class="column">
             <div class="container">
              <img src="img\Lifestyle\Neck Fan\XM27.png" class="image" style="width:130px; height:125px;position:absolute; left: 30px; top: 30px;">
                <div class="middle">
                 <div class="text10">Show More >></div>
                </div>
            </div>
        <div class="text1">
        <p>Neck Fan </p> 
        </div>
        </div>
      <div class="column1">
      <div class="container">
        <img src="img\Lifestyle\Desk Fan\X-M40.png" class="image" style="width:140px;height:150px; position:absolute; left: 30px; top: 10px;">
        <div class="middle">
        <div class="text10">Show More >></div>
        </div>
        </div>
        <div class="text2">
        <p>Desk Fan </p> 
        </div>
        </div>

        <div class="column2">
        <div class="container">
        <img src="img\Lifestyle\Home Improvements\XH77 - Cream.png" class="image" style="width:130px;height:130px;position:absolute; left: 30px; top: 20px;">
        <div class="middle">
        <div class="text10">Show More >></div>
        </div>
        </div>
        <div class="text3">
        <p>Hand Improvements</p> 
        </div>
        </div>
        <div class="column3">
        <div class="container">
        <img src="img\Lifestyle\Handhelds\XM64.png" class="image" style="width:50px;height:120px; position:absolute; left: 70px; top: 30px;">
        <div class="middle">
        <div class="text10">Show More >></div>
        </div>
        </div>
        <div class="text4">
        <p>Handheld</p> 
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
      <img src="img\logo\power-logo.png" alt="HTML5 Icon" style="width:200px;height:100px;"> 
     </div> 
     <div class="column">
             <div class="container">
              <img src="img\POWER STATION\XP42.png" class="image" style="width:130px; height:125px;position:absolute; left: 30px; top: 30px;">
                <div class="middle">
                 <div class="text10">Show More >></div>
                </div>
            </div>
        <div class="text1">
        <p>Power Station </p> 
        </div>
        </div>
      <div class="column1">
      <div class="container">
        <img src="img\PowerBank\XP06 - Black.png" class="image" style="width:120px;height:120px; position:absolute; left: 30px; top: 30px;">
        <div class="middle">
        <div class="text10">Show More >></div>
        </div>
        </div>
        <div class="text2">
        <p>Pocket Powerbank </p> 
        </div>
        </div>

        <div class="column2">
        <div class="container">
        <img src="img\CABLES\XC39.png" class="image" style="width:150px;height:150px;position:absolute; left: 20px; top: 10px;">
        <div class="middle">
        <div class="text10">Show More >></div>
        </div>
        </div>
        <div class="text3">
        <p>Cables</p> 
        </div>
        </div>
        <div class="column3">
        <div class="container">
        <img src="img\CHARGERS\T-46.png" class="image" style="width:140px;height:130px; position:absolute; left: 30px; top: 30px;">
        <div class="middle">
        <div class="text10">Show More >></div>
        </div>
        </div>
        <div class="text4">
        <p>Charger</p> 
        </div>
        </div>
        <div class="column4">
        <div class="container">
        <img src="img\POWER STRIPS\XE07.png" class="image" style="width:150px;height:110px; position:absolute; left: 20px; top: 40px;">
        <div class="middle">
        <div class="text10">Show More >></div>
        </div>
        </div>
        <div class="text5">
        <p>Powerstip</p> 
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
           <div class="column">
             <div class="container">
              <img src="img\Audio\MICROPHONE\X-Y68.png" class="image" style="width:130px;height:130px;position:absolute; left: 50px; top: 20px;">
                <div class="middle">
                 <div class="text10">
                 
                 <a href="slider_3-main/index.html">  Show More >> </a>
                </div>
                </div>
                
            </div>
        <div class="text1">
        <p>Microphone </p> 
        </div>
        </div>
      <div class="column1">
      <div class="container">
        <img src="img\Audio\IN EAR EARPHONES\Img1.png" class="image" style="width:120px;height:120px; position:absolute; left: 30px; top: 30px;">
        <div class="middle">
        <div class="text10">Show More >></div>
        </div>
        </div>
        <div class="text2">
        <p>In-ear-earphone </p> 
        </div>
        </div>
        <div class="column2">
        <div class="container">
        <img src="img\Audio\HEADPHONES\X-G77.png" class="image" style="width:150px;height:150px;position:absolute; left: 10px; top: 10px;">
        <div class="middle">
        <div class="text10">Show More >></div>
        </div>
        </div>
        <div class="text3">
        <p>Headphone</p> 
        </div>
        </div>
        <div class="column3">
        <div class="container">
        <img src="img\Audio\SPEAKERS\XSP08.png" class="image" style="width:150px;height:110px; position:absolute; left: 20px; top: 40px;">
        <div class="middle">
        <div class="text10">Show More >></div>
        </div>
        </div>
        <div class="text4">
        <p>Speaker</p> 
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
