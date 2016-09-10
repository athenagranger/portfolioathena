<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' href='css/projects.css'/>
	<script src='javascript/projects.js'></script>
	<title> Athena Granger's Portfolio </title>
</head>
<body>

<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">ATHENA GRANGER</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="https://www.facebook.com/athenagranger1">FACEBOOK</a>
    <a href="#https://www.linkedin.com/public-profile/settings?trk=prof-edit-edit-public_profile">LINKEDIN</a>
    <a href="athenagranger@outlook.com">EMAIL</a>
  </div>
</div>

<div class="nav">
<ul>
<li><a href="HOMEPAGE.html">HOME</a></li>
<li><a href="PROFILE.html">PROFILE</a></li>
<li><a href="CURRENT.html">ONGOING</a></li>
</ul>
</div>

<!--END OF BASE CODE-->

<div class="COMP">
<h2> COMPLETED PROJECTS </h2>
</div>

<div class="INTRO">
<p>Here you can find all past projects of mine!</p>
</div>

<div class='PREVIEW1'>
<img src='http://i.imgur.com/dyhgHs0.png' width=350px a href="http://poopledooplemoopletoople.tumblr.com/"/>
<div class='description'>
<div class='description_content'>Purple Tumblr theme</div>
</div>
</div>

<style>

body {
	height: 100%;
	margin: 0;
	text-align: center;
	width: 100%;
}

.nav {
    font-family: Roboto, 'Roboto Serif', serif; 
    color: white; 
    font-size: 20px; 
    font-weight: bold;
}

.nav { 
    margin-top:0px; 
    height: 45px; 
    background: RED;
}

.nav ul { 
    margin:0; 
    padding:0;
    position: relative;
}

.nav ul li {
    list-style: none; 
}

.nav ul a { 
    text-decoration: none; 
    float: right; 
    display: block; 
    padding: 10px 20px; 
    color: white;
}

.nav ul li a:hover { 
    color: #CAC8CA;
    cursor: pointer;
    -webkit-transition: background-color 1s ease-in-out;
    -moz-transition: background-color 1s ease-in-out;
    -o-transition: background-color 1s ease-in-out;
    transition: color 1s ease-in-out;
    transform: scale(1.1);
}

.slogan:hover {
  color: #CAC8CA;
  cursor: pointer;
  -webkit-transition: background-color 1s ease-in-out;
  -moz-transition: background-color 1s ease-in-out;
  -o-transition: background-color 1s ease-in-out;
  transition: color 1s ease-in-out;
}

.skill1 {
    font-family: Roboto, 'Roboto-Serif', serif; 
    color:#CAC8CA; 
    font-size: 20px;
    display: inline-block;
    padding: 8px;
}

.skill1:hover {
  color: #FF2300;
  cursor: pointer;
  -webkit-transition: background-color 1s ease-in-out;
  -moz-transition: background-color 1s ease-in-out;
  -o-transition: background-color 1s ease-in-out;
  transition: color 1s ease-in-out;
  transform: scale(1.1);
}

.skill2 {
    font-family: Roboto, 'Roboto-Serif', serif; 
    color:#CAC8CA; 
    font-size: 20px;
    display: inline-block;
    padding: 8px;
}

.skill2:hover {
  color: #FF2300;
  cursor: pointer;
  -webkit-transition: background-color 1s ease-in-out;
  -moz-transition: background-color 1s ease-in-out;
  -o-transition: background-color 1s ease-in-out;
  transition: color 1s ease-in-out;
  transform: scale(1.1);
}

.skill3 {
    font-family: Roboto, 'Roboto-Serif', serif; 
    color:#CAC8CA; 
    font-size: 20px;
    display: inline-block;
    padding: 8px;
}

.skill3:hover {
  color: #FF2300;
  cursor: pointer;
  -webkit-transition: background-color 1s ease-in-out;
  -moz-transition: background-color 1s ease-in-out;
  -o-transition: background-color 1s ease-in-out;
  transition: color 1s ease-in-out;
  transform: scale(1.1);
}


.dropdown {
    float: left;
}

.dropbtn {
    font-family: Roboto, 'Roboto Serif', serif; 
    color: white; 
    font-size: 20px; 
    font-weight: bold;
    background:red;
    padding: 10px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    color: #CAC8CA;
    cursor: pointer;
    -webkit-transition: color 1s ease-in-out;
    -moz-transition: color 1s ease-in-out;
    -o-transition: color 1s ease-in-out;
    transition: color 1s ease-in-out;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    font-family: Roboto, 'Roboto-Serif', serif; 
    color:#CAC8CA; 
    font-size: 18px;
    font-weight: bold;
    background-color: transparent;
    min-width: 160px;
    overflow: auto;
}

.dropdown-content a {
    color: #CAC8CA;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {
    color: red;
    -webkit-transition: color 0.4s ease-in-out;
    -moz-transition: color 0.4s ease-in-out;
    -o-transition: color 0.4s ease-in-out;
    transition: color 0.4s ease-in-out;
}

/* END OF BASE PAGE */

.comp { 
    font-family: Roboto, 'Roboto Serif', 
    serif; color: red;
	font-size: 30px;
}

.comp:hover {
    color: #CAC8CA;
    -webkit-transition: color 0.4s ease-in-out;
    -moz-transition: color 0.4s ease-in-out;
    -o-transition: color 0.4s ease-in-out;
    transition: color 0.4s ease-in-out;
}
    
.intro { 
    font-family: Roboto, 'Roboto Serif', serif;
    color: #CAC8CA;
    font-size: 16px;
}

.preview1 {
	float:left;
	position:relative;
}

.description {
	position:absolute;
	bottom:0px;
	left:0px;
	width:100%;
	background-color:black;
	font-family: 'tahoma';
	font-size:15px;
	color:white;
	opacity:0.6;
}

.description_content {
	padding:10px;
	margin:0px;
}
</style>

<script>

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.click = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>

</body>