
<html>
<body>
    
    
  <?php
    extract($_POST);
if(isset($save))
{
    echo $fn;
    echo $fn2;
   if($fn=="manumathew" && $fn2=="manu1234")
       header('location: admincheckout.php');
}
       
?>

<!DOCTYP html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>admin</title>
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
<style>
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
   /* Hidden by default */
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
    </style>
    

	<body>
        <div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST" >

    <div class="imgcontainer">
      
    </div>

    <div class="container">
	<center>
      <label for="fn"><b>username</b></label>
      <input type="text" placeholder="username" name="fn" value="<?php  echo @$fn;?>"/><br>
        <label for="fn2"><b>password</b></label>
      <input type="text" placeholder="password" name="fn2" value="<?php  echo @$fn2;?>"/><br>

     
        
      <button type="submit" name="save" class="loginbtn">login</button>
	  <button type="button" onclick="window.location='login.php'" class="cancelbtn">Cancel</button><br>
    
    </div>

    <div class="container" style="background-color:red">

     
	  </center>
      
    </div>
	
  </form>
</div>
        
    </body>
    </html>