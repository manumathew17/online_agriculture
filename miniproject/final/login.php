<?php
    require 'connection.php';
    session_start();
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>home</title>
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
<style>


.top{
float:left;
top:0px;
right:0px;
width:100%;
height:80px;
background-color:black;
     position:fixed;
   overflow: auto;
box-shadow: 0px 10px 10px 0px  #595959;
    z-index: 10;

}
.top-button{
    float:right;
	padding-right:40px;
}
.top-button-design{
width:auto;
height:80px;
margin-left:30px;
text-decoration:none;
color:white;
font-size:16px;
background-color:black;
border:none;
}
.top-button-design:hover{
cursor:pointer;
color:#ff80b3;
font-weight:bold;
}
.operational-part{
float:left;
width:100%;
height:auto;
background-color:blue;
 position: relative;
    z-index: 0;
}
.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #00bfa5;
  overflow: hidden;
  width: 35%;
   height: 100%;
  
}

.text {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 70%;
  padding: 5px 10px;
  margin: 8px 0;
  outline: 0;
  border-width: 0 0 2px;
  border-color: #00bfa5;


}



/* Extra styles for the cancel button */
.cancelbtn {

  background-color: red;
  color: white;
  padding: 14px 20px;
  margin-left:100px;
  border: none;
  cursor: pointer;
  width: auto;
  border-radius:5px;
}
.loginbtn {

  background-color: #00bfa5 ;
  color: white;
  padding: 14px 20px;
  margin-left:9px;
  border: none;
  cursor: pointer;
  width: auto;
  border-radius:5px;
}
.farmerloginbtn{
  background-color: #cc0052 ;
  color: white;
  padding: 14px 14px;
  margin-left:20px;
  border: none;
  cursor: pointer;
  width: auto;
  border-radius:5px;
}

.farmerloginbtn:hover {
  box-shadow: 0 5px 20px 5px rgba(0,0,0,0.24), 0 5px 20px 0 rgba(0,0,0,0.19);
}
.loginbtn:hover {
  box-shadow: 0 5px 20px 5px rgba(0,0,0,0.24), 0 5px 20px 0 rgba(0,0,0,0.19);
}
.cancelbtn:hover {
  box-shadow: 0 5px 20px 5px rgba(0,0,0,0.24), 0 5px 20px 0 rgba(0,0,0,0.19);
}
/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  height:10%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.adder{
float:left;
  
  width: 50%;
}

.image1 {
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
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.adder:hover .image1 {
  opacity: 0.3;
}

.adder:hover .middle {
  opacity: 1;
}

.text1 {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
.seperater{
float:left;
width:100%;
background-color:black;
height:500px;
padding-top:20px;
padding-bottom:20px;
}
div.polaroid {
  width: 100%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

   opacity:0.75;
     border-style: solid;
  border-width: 5px;
  border-color:white;
}

div.discription {
  text-align: center;
  padding: 10px 10px;
  opacity:1;
}
.polaroid:hover{
 opacity:0.95;
}
table{
padding:20px;
}

td{
width:20%;
padding-right:1.5%;

}
.last_left{
float: left;
height:300px;
width:100%;
background-color:black;

}
.bottom_login_button{
width:100%;
height:80px;
margin-top:50px;
text-decoration:none;
color:white;
font-size:16px;
background-color:#00bfa5;
border:none;
}
.bottom_login_button:hover{
cursor:pointer;
color:#ff80b3;
font-weight:bold;
}
.text2{
color:white;
font-size:50px;
}
 </style>
 <script>
var c=7,t1;
function start()
{
t1=setInterval("incr()",15);

}
function incr()
{
c=c+1;
para.innerHTML="WELCOME";
para.style.fontSize=c + "pt";
para.style.color="white";
bara.innerHTML="online agricltural product sale";

if(c>=30){
clearTimeout(t1);

}
}


</script>
 </head>
 <body onload="start()">
 <div class="top">

<a href="login.php">
<img border="0" alt="logo" src="img/projectlogo.png" width="77" height="76">
</a>
<div class="top-button">

<button class="top-button-design"onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</button>

   <button class ="top-button-design" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">REGISTER</button>  
</div>
 </div>
 <div class="operational-part">
 <img src="img/introimage.jpg" width="100%">
 <div class="overlay">
    <div class="text">
	 <h2 id="para"></h2>
	 <h5 id="bara"></h5>
	</div>
  </div>
  </div>
  <div class="seperater">
  <center>
  <table>
  <tr>
  <td>
  <div class="polaroid">
   <img src="img/flowers.jpg"height="200px" width="100%" >
  <div class="discription">
  <p>FLOWERS</p>
  </div>
</div>
</td>
<td>
  <div class="polaroid">
   <img src="img/veg.jpg"height="200px" width="100%" >
  <div class="discription">
  <p>VEGITABLE</p>
  </div>
</div>
</td>
<td>
  <div class="polaroid">
   <img src="img/fruits.jpeg"height="200px" width="100%" >
  <div class="discription">
  <p>FRUITS</p>
  </div>
</div>
</td>
<td>
  <div class="polaroid">
   <img src="img/milkproduct.jpg"height="200px" width="100%" >
  <div class="discription">
  <p>MILK PRODUCTS</p>
  </div>
</div>
</td>
</tr>
 </table>
   </center>
    <button class ="bottom_login_button" onclick="document.getElementById('id01').style.display='block'" >LOGIN</button>
  </div>
  <div class="last_left">
   <p class ="text2"><h1>O</h1>online aggriculture product saling provides direct market to the farmers in the local areas the process was very simple 
   the custumer just select the product buy it</p>
   
</div>
<div id="id02" class="modal">
  
  <form class="modal-content animate" method="POST" action="user_registration_script.php">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" >&times;</span>
      <img src="img/projectlogo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
	<center>
      <label for="name"><b>name</b></label>
      <input type="text" placeholder="Enter Username" name="name" id="name" required><br>
	  
	  <label for="email"><b>email</b></label>
      <input type="text" placeholder="Enter Username" name="email" id="email" required><br>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password"required><br>
	  
	  <label for="contact"><b>contact</b></label>
      <input type="text" placeholder="Enter Username" name="contact" id="contact" required><br>
	  
	  <label for="city"><b>city</b></label>
      <input type="text" placeholder="Enter Username" name="city" id="city" required><br>
	  
	  <label for="address"><b>address</b></label>
      <input type="text" placeholder="Enter address" name="address" id="address" required><br>
        
      <button type="submit" class="loginbtn">Register</button>
	  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button><br>
    
    </div>

    <div class="container" style="background-color:#00bfa5">

     
	  </center>
      
    </div>
	
  </form>
</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST" action="login_submit.php">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" >&times;</span>
      <img src="img/projectlogo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
	<center>
      <label for="email"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="email" id="email" required><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password"required><br>
        
      <button type="submit" class="loginbtn">Login</button>
	  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button><br>
    
    </div>

    <div class="container" style="background-color:#00bfa5">
	  </center>
      
    </div>
	
  </form>
</div>




 </body>
 <script>

var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id02');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

 </html>