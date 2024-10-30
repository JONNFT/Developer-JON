<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: sans-serif;
}
.logo {
 padding: 100px;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Create three equal columns that floats next to each other */
.column {
  border-radius: 5px;
  margin-top: -100px;
  margin-bottom: 800px;
  margin-right: 150px;
  margin-left: 450px;
  width: 200px;
  padding: 10px;
  background-color: #dbd9d9;
  height: 200px;
}

.column1 {
  border-radius: 5px;
  margin-top: -100px;
  margin-bottom: 800px;
  margin-right: 150px;
  margin-left: 600px;
  width: 200px;
  padding: 10px;
  background-color: #dbd9d9;
  height: 200px;
}


.column a {
  float: none;
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.column a:hover {
  background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    height: auto;
  }
}

/* Responsive layout - text lining */
.text1 {
font-family: sans-serif;
text-decoration: none;

}


</style>
</head>
<body>
<div class="logo">
<img src="img\audiologo.png" alt="HTML5 Icon" style="width:200px;height:80px;">
<div class="sidebar">
  <a href="#home">Microphone</a>
  <a href="#news">In-ear-earphone</a>
  <a href="#contact">Headphone</a>
  <a href="#about">Speakers</a>
</div>
</div>
        <div class="text1">
        <div class="column">
        <img src="img\Audio\HEADPHONES\X-G77.png" alt="HTML5 Icon" style="width:150px;height:150px;">
        <a href="#1">Tylex X-G77 </a> 
        </div>
        </div>

       
</body>
</html>
